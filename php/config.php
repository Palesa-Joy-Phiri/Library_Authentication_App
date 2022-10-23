<?php

define ('DB_NAME', 'sql8528597');
define ('DB_USER', 'sql8528597');
define ('DB_PASSWORD','LlM2er6piT');
define ('DB_HOST', 'sql8.freesqldatabase.com');

$connection = @mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);

if(!$connection){
    die('Could not connect:' .mysqli_connect_error());
}

?>