<?php
namespace app\controllers;

//zamieniamy zatem 'require' na 'use' wskazując jedynie przestrzeń nazw, w której znajduje się klasa
use app\forms\CalcForm;
use app\transfer\CalcResult;


class CalcCtrl {

	private $form;   //dane formularza (do obliczeń i dla widoku)
	private $result; //inne dane dla widoku
	private $hide_intro;

	public function __construct(){
		$this->form = new CalcForm();
		$this->result = new CalcResult();
		$this->hide_intro = false;
	}

	public function getParams(){
		$this->form->x = getFromRequest('x');
		$this->form->y = getFromRequest('y');
		$this->form->z = getFromRequest('z');
	}

	public function validate(){

	if(!inRole('admin')){
		getMessages()->addError('Musisz być zalogowany jako ADMIN');
	}

	if ( ! (isset($this->form->x) && isset($this->form->y) && isset($this->form->z))) {
	
		return false;
	}


	if ( $this->form->x == "") {
		getMessages()->addError('Nie podano kwoty kredytu');
	}
	if ( $this->form->y == "") {
		getMessages()->addError('Nie podano liczby lat spłaty');
	}
	if ( $this->form->z == "") {
		getMessages()->addError('Nie podano oprocentowania');
	}

		if (! getMessages()->isError()){
	
	
			if (! is_numeric( $this->form->x )) {
				getMessages()->addError('Kwota kredytu nie jest liczbą całkowitą');
			}
			
			if (! is_numeric( $this->form->y)) {
				getMessages()->addError('Liczba lat nie jest liczbą całkowitą');
			}
			if (! is_numeric( $this->form->z)) {
				getMessages()->addError('Oprocentowanie nie jest liczbą całkowitą');
			}			
		
		}
		return ! getMessages()->isError();
	
	}

	public function action_calcCompute(){

		$this->getparams();

		if ($this->validate()) {
			
			//konwersja parametrów na double
			$this->form->x = doubleval($this->form->x );
			$this->form->y = doubleval($this->form->y );
			$this->form->z = doubleval($this->form->z );
			getMessages()->addInfo('Parametry poprawne.');

			$this->form->z = $this->form->z/100;
			$a = 1;
		
			$a = ($this->form->x/$this->form->y)*12;

			$this->result->result = $a +($a*($this->form->z));
			$this->result->result = round(($this->result->result), 2);
	
			getMessages()->addInfo('Wykonano obliczenia.');
			
			try{

			$database = new \Medoo\Medoo([
				'database_type' =>'mysql',
				'database_name' =>'kalk',
				'server' => 'localhost',
				'username' => 'root',
				'password' => '',
				'charset' => 'utf8',
				'collation' =>'utf8_polish_ci',
				'port' => 3306,
				'option' => [
					\PDO::ATTR_CASE => \PDO::CASE_NATURAL,
					\PDO::ATTR_ERRMODE => \PDO::ERRMODE_EXCEPTION
				]

			]);

			$database ->insert("wynik",[
				"calkowita_kwota" => $this ->result->result,
				
			]);

		}catch (\PDOException $ex){
			getMessages()-> addError("DB Error: ", $ex->getMessage());
		}
	
		}
		$this->generateView();
	}

	public function action_calcShow(){
		getMessages()->addInfo('Witaj w kalkulatorze');
		$this->generateView();
	}

	public function generateView(){
			
			getSmarty()->assign('user',unserialize($_SESSION['user']));

			getSmarty()->assign('page_title','Kalkulator kredytowy');
			getSmarty()->assign('page_description','Aplikacja z jednym "punktem wejścia". Model MVC, w którym jeden główny kontroler używa różnych obiektów kontrolerów w zależności od wybranej akcji - przekazanej parametrem.');
			getSmarty()->assign('page_header','Kontroler główny');
			
			getSmarty()->assign('hide_intro',$this->hide_intro);
			getSmarty()->assign('form',$this->form);
			getSmarty()->assign('result',$this->result);
		
			getSmarty()->display('CalcView.tpl');
	}
}