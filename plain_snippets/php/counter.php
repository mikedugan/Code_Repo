<?php

//handles the creation and auto-incremenation of the counter file

function increaseCounter(id) {
	$handle = "";
	$counterfile = "./counterfile.csv";
	if (!file_exists($counterfile)) {
		$handle = fopen($counterfile, 'w') or die("Unable to create file!");
		fclose($handle);
	  }

	else {
	  	$handle = fopen($counterfile, 'r+') or die("Unable to open file!");
	  }

	while ( $record = fgetcsv($handle)) {
		$count = $record[id];
		$count++;
	}

	fclose($counterfile);


}


//returns the total number of hits for a given ID
function getCount(id) {
	$counterfile = "./$counterfile.csv";
	$handle = fopen($counterfile, 'r');
	$count = fgetcsv($handle)[id];
	fclose($handle);
	return $count;
}

?>