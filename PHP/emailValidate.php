<?php

//use this to validate an email address. make sure you define the email address as "$mail" or change the variable in
//this function to match your defined variable

preg_match('/^([a-z0-9])(([-a-z0-9._])*([a-z0-9]))*\@([a-z0-9])*(\.([a-z0-9])([-a-z0-9_-])([a-z0-9])+)*$/i', $mail);