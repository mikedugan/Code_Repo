<?php 
 
function passStr($len, $set = "") {
$gen = "";
for($i=0;$i<$len;$i++) {
$set = str_shuffle($set);
$gen .= $set[0];
}
return $gen;
}
 $passcode=passStr(8,'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789');
 echo $passcode;
?>

<?php
function passGenStr() {
	// first we get all printable chars from ASCII table
	$arr = range(chr(33), chr(126));
	// Remove problematic chars
	unset($arr[1], $arr[6], $arr[11], $arr[63]);
	
	// Now lets generate strong password from these ascii chars
	$pwd = implode('', array_rand(array_flip($arr) , 10));
	
	return $pwd;
}
?>
