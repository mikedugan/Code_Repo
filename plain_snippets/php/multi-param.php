<?php
// yes, the argument list can be empty
function foo() {

	// returns an array of all passed arguments
	$args = func_get_args();

	foreach ($args as $k => $v) {
		echo "arg".($k+1).": $v\n";
	}

}

foo();
/* prints nothing */

foo('hello');
/* prints
arg1: hello
*/

foo('hello', 'world', 'again');
/* prints
arg1: hello
arg2: world
arg3: again
*/
?>
