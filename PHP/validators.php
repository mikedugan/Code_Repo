<?php

$email = $_POST('email'):
$number = $_POST('number');
$d = $_POST('day');
$m  = $_POST('month');
$y = $_POST('year');
$answer = $_POST('answer');

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

function ValidatePhone($number) {
	if (strlen($number) > 10 or (strlen($num) < 9))
		return false; else return true;
	}

$code = "";
$n = 0;

//gets a string for displaying browser with a simple question
function GetHumanValidation() {
	$n = random(1,99);
	$five = "five";
	$code = "What is " + $five +  " + " $n + "?";
	return code;
}


//pass this the users answer to the above question to validate, returns bool
function ValidateHuman($answer) {
	if ($answer == 5 + $n)
		return true; else return false;
}
?>