<?php
/*
** Some files, such as mp3, are generally played throught the client browser.
** If you prefer forcing download of such files, this is not a problem: 
** The following code snippet will do that job properly.
*/
function downloadFile($file){
        $file_name = $file;
        $mime = 'application/force-download';
	header('Pragma: public'); 	// required
	header('Expires: 0');		// no cache
	header('Cache-Control: must-revalidate, post-check=0, pre-check=0');
	header('Cache-Control: private',false);
	header('Content-Type: '.$mime);
	header('Content-Disposition: attachment; filename="'.basename($file_name).'"');
	header('Content-Transfer-Encoding: binary');
	header('Connection: close');
	readfile($file_name);		// push it out
	exit();
}

