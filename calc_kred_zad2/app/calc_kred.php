<?php
require_once dirname(__FILE__).'/../config.php';

include _ROOT_PATH.'/app/security/check.php';
function getParams(&$x,&$y,&$z){
	$x = isset($_REQUEST ['x']) ? $_REQUEST['x'] : null;
	$y = isset($_REQUEST ['y']) ? $_REQUEST['y'] : null;
	$z = isset($_REQUEST ['z']) ? $_REQUEST['z'] : null;
}

// 2. walidacja parametrów z przygotowaniem zmiennych dla widoku
function validate(&$x,&$y,&$z,&$messages){


// sprawdzenie, czy parametry zostały przekazane
if ( ! (isset($x) && isset($y) && isset($z))) {

	return false;
}

// sprawdzenie, czy potrzebne wartości zostały przekazane
if ( $x == "") {
	$messages [] = 'Nie podano kwoty kredytu';
}
if ( $y == "") {
	$messages [] = 'Nie podano liczby lat spłaty';
}
if ( $z == "") {
	$messages [] = 'Nie podano oprocentowania';
}

	//nie ma sensu walidować dalej gdy brak parametrów
	if (count( $messages ) != 0) return false;
	
		if (! is_numeric( $x )) {
			$messages [] = 'Kwota kredytu nie jest liczbą całkowitą';
		}
	
		if (! is_numeric( $y )) {
			$messages [] = 'Liczba lat nie jest liczbą całkowitą';
		}

		if (! is_numeric( $z )) {
			$messages [] = 'Oprocentowanie nie jest liczbą całkowitą';
		}	

		if (count ($messages )!= 0 )return false;
	else return true;
}

function process(&$x,&$y,&$z,&$messages,&$result,&$c){
	//konwersja parametrów na int i float
	$x = doubleval($x);
	$y = doubleval($y);
	$z = doubleval($z);

	$a = $x/($y*12);
	$b = $z/100;
	$result = round(($a + ($a*$b)),2);
	$c = $a*$b*$y*12;	
}

$x = null;
$y = null;
$z = null;
$result = null;

$messages = array();
getParams($x,$y,$z);
	if(validate($x,$y,$z,$messages)){
		process($x,$y,$z,$messages,$result,$c);
	}
include 'calc_kred_view.php';