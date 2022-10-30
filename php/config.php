<?php

define ('DB_NAME', 'sql8530600');
define ('DB_USER', 'sql8530600');
define ('DB_PASSWORD','sU1PLnbIjJ');
define ('DB_HOST', 'sql8.freesqldatabase.com');

$connection = @mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);

if(!$connection){
    die('Could not connect:' .mysqli_connect_error());
}

?>