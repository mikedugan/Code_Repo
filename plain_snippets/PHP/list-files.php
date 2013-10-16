<?php

	$dir = "./uploads/post-templates";
	$files = scandir($dir);
	while($files[0] == "." || $files[0] == "..") {
		array_shift($files);
	}


?>
