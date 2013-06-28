<?php

$email = $_POST('email'):
$number = $_POST('number');
$d = $_POST('day');
$m  = $_POST('month');
$y = $_POST('year');

//returns true if the email is valid
function ValidateEmail($email){
	if  (filter_var($email, FILTER_VALIDATE_EMAIL)) {
		return true;
	}

	else return false;
}

//checks if a value is a valid int
function ValidateInt($number){
	if (filter_var($number, FILTER_VALIDATE_INT)){
		return true; else return false;
}

//checks if a value is a valid float
function ValidateFloat($number){
	if (filter_var($number, FILTER_VALIDATE_FLOAT)) {
		return true; else return false;
	}
}


//validates a given age when passed a DD, MM, YYYY value
function IsAge($d, $m, $y, $age){
	$year = 365 * 24 * 60 * 60;
	$birth = date_create($m + "/" + $d + "/" + $y);
	if (birth > (date() - $age * $year)
		return true; else return false;

}
?>