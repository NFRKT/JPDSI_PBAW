<?php
// KONTROLER strony kalkulatora


// W kontrolerze niczego nie wysyła się do klienta.
// Wysłaniem odpowiedzi zajmie się odpowiedni widok.
// Parametry do widoku przekazujemy przez zmienne.
require_once $conf->root_path.'/lib/smarty/Smarty.class.php';
require_once $conf->root_path.'/lib/Messages.class.php';
require_once $conf->root_path.'/app/calc/CalcForm.class.php';
require_once $conf->root_path.'/app/calc/CalcResult.class.php';
// 1. pobranie parametrów
class CalcCtrl {

	private $msgs;   //wiadomości dla widoku
	private $infos;  //informacje dla widoku
	private $form;   //dane formularza (do obliczeń i dla widoku)
	private $result; //inne dane dla widoku
	private $hide_intro; //zmienna informująca o tym czy schować intro


	public function __construct(){
		//stworzenie potrzebnych obiektów
		$this->msgs = new Messages();
		$this->form = new CalcForm();
		$this->result = new CalcResult();
		$this->hide_intro = false;
	}

function getParams(){
	$this->form->x = isset($_REQUEST['x']) ? $_REQUEST['x'] : null;
	$this->form->y = isset($_REQUEST['y']) ? $_REQUEST['y'] : null;
	$this->form->z = isset($_REQUEST['z']) ? $_REQUEST['z'] : null;
}





// 2. walidacja parametrów z przygotowaniem zmiennych dla widoku
function validate(){



// sprawdzenie, czy parametry zostały przekazane
if ( ! (isset($this->form->x) && isset($this->form->y) && isset($this->form->z))) {
	
	return false;
}

// sprawdzenie, czy potrzebne wartości zostały przekazane
if ( $this->form->x == "") {
	$messages [] = 'Nie podano kwoty kredytu';
}
if ( $this->form->y == "") {
	$messages [] = 'Nie podano liczby lat spłaty';
}
if ( $this->form->z == "") {
	$messages [] = 'Nie podano oprocentowania';
}

	//nie ma sensu walidować dalej gdy brak parametrów
	if (! $this->msgs->isError()){
	
	
		if (! is_numeric( $this->form->x )) {
			$this->msgs->addError('Kwota kredytu nie jest liczbą całkowitą');
		}
		
		if (! is_numeric( $this->form->y)) {
			$this->msgs->addError('Liczba lat nie jest liczbą całkowitą');
		}
		if (! is_numeric( $this->form->z)) {
			$this->msgs->addError('Oprocentowanie nie jest liczbą całkowitą');
		}			
		
	}
	return ! $this->msgs->isError();
	
}

function process(){
// 3. wykonaj zadanie jeśli wszystko w porządku
		$this->getparams();

		if ($this->validate()) {
		//konwersja parametrów na int
		$this->form->x = doubleval($this->form->x );
		$this->form->y = doubleval($this->form->y );
		$this->form->z = doubleval($this->form->z );
		$this->form->z = $this->form->z/100;
		$a = 1;
		
		$a = ($this->form->x/$this->form->y)*12;

		$this->result->result = $a +($a*($this->form->z));
		$this->result->result = round(($this->result->result), 2);
	
		$this->msgs->addInfo('Wykonano obliczenia.');
	
}
$this->generateView();
}
public function generateView(){
	$smarty = new Smarty();

	global $conf;
		
		$smarty = new Smarty();
		$smarty->assign('conf',$conf);
		
		$smarty->assign('page_title','Kalkulator kredytowy');
		$smarty->assign('page_description','Aplikacja z jednym "punktem wejścia". Model MVC, w którym jeden główny kontroler używa różnych obiektów kontrolerów w zależności od wybranej akcji - przekazanej parametrem.');
		$smarty->assign('page_header','Kontroler główny');
				
		$smarty->assign('hide_intro',$this->hide_intro);
		
		$smarty->assign('msgs',$this->msgs);
		$smarty->assign('form',$this->form);
		$smarty->assign('result',$this->result);
		
		$smarty->display($conf->root_path.'/app/calc/CalcView.html');
	// 5. Wywołanie szablonu
}
}

