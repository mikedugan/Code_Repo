<?php
function clean($value) {

       // If magic quotes not turned on add slashes.
       if(!get_magic_quotes_gpc())

       // Adds the slashes.
       { $value = addslashes($value); }

       // Strip any tags from the value.
       $value = strip_tags($value);

       // Return the value out of the function.
       return $value;

}
?>