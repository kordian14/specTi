<?php
require_once dirname(__FILE__).'/../config.php';

//ochrona kontrolera
include _ROOT_PATH.'/app/security/check.php';


//Pobieranie danych
function getParams(&$kwota,&$procent,&$rata){
	$kwota = isset($_REQUEST['kwota']) ? $_REQUEST['kwota'] : null;
	$procent = isset($_REQUEST['procent']) ? $_REQUEST['procent'] : null;
	$rata = isset($_REQUEST['rata']) ? $_REQUEST['rata'] : null;	
}



//walidacja parametrów
function validate(&$kwota,&$procent,&$rata,&$messages){
	// sprawdzenie, czy parametry zostały przekazane
	if ( ! (isset($kwota) && isset($procent) && isset($rata))) {
		return false;
	}

	// sprawdzenie, czy podano wartości
	if ( $kwota == "") {
		$messages [] = 'Nie podano kwoty kredytu';
	}
	if ( $procent == "") {
		$messages [] = 'Nie podano oprocentowania kredytu';
	}
	if ( $rata == "") {
		$messages [] = 'Nie podano ilości rat kredytu';
	}

	if (count ( $messages ) != 0) return false;
	
	//sprawdzenie czy zmienne są liczbami
	if (! is_numeric( $kwota )) {
		$messages [] = 'Pierwsza wartość nie jest liczbą';
	}
	
	if (! is_numeric( $procent )) {
		$messages [] = 'Druga wartość nie jest liczbą';
	}	

	if (! is_numeric( $rata )) {
		$messages [] = 'Druga wartość nie jest liczbą';
	}	


	if (count ( $messages ) != 0) return false;
	else return true;
}

//funkcja licząca ratę
function process(&$kwota,&$procent,&$rata,&$messages,&$result){
	global $role;
	$kwota = intval($kwota);
	$procent = floatval($procent); //Procent może być zmiennoprzecinkowy
	$rata = intval($rata);

	//wykonanie operacji
	if($role=='admin'){
	$result= (( $procent / 100) * $kwota + $kwota) / $rata;
	$result = round($result, 2); // zaokrąglenie może być zmienno przecinkowe
	}
	if($role=='user'){
		if($procent > 4.5){
			$messages [] = 'Jesteś użytkownikiem. Twój oprocentowanie musi być mniejsze';
		}
		if($kwota > 200000){
			$messages [] = 'Jesteś użytkownikiem. Twoja kwota musi być mniejsza';
		}
	}
	if($procent < 4.5 && $kwota < 200000){
		$result= (( $procent / 100) * $kwota + $kwota) / $rata;
		$result = round($result, 2); // zaokrąglenie może być zmienno przecinkowe
	}

}
 
//zaczyna się kontroler
$kwota = null;
$procent = null;
$rata = null;
$result = null;
$messages = array();
getParams($kwota, $procent, $rata);
	if ( validate($kwota,$procent,$rata,$messages) ){
		process($kwota,$procent,$rata,$messages,$result);
	}

$header = 'Kalkulator kredytowy';
$footer = 'Przykładowa stopka z informacjami';

include 'kredyt_widok.php';