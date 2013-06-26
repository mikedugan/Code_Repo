<!-- source: http://www.apphp.com/index.php?snippet=html-multiple-file-input  -->
<form action="upload.php" method="post" enctype="multipart/form-data">
  <input name="upload_files[]" type="file" multiple>
  <input type="submit" value="Upload">
</form>
 
<?php
// PHP code
 that shows how to loop through the data as an array
foreach($_FILES["upload_files"]["name"] as $file){
    echo "<li>".$file."</li>";
}
?>