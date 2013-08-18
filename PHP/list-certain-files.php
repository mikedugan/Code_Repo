    <?php
    //Define directory for files listing
    //original example
    //$files = glob('/path/to/dir/*.xml');
    $files = glob('*.php');
    //to limit what is displayed you can use a diff listing:
    //$files = array_diff($files, array('index.php','opendb.php'));
     
    foreach ($files as $value) {
    echo "<a href=http://changetoyoursite/$value>".$value."</a><br>";
    }
     
     
    ?>
