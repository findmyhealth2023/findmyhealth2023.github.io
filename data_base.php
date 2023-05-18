<?php
$host = 'localhost'; //localhost
$username ='root';
$password = '';
$database = 'findmyhealth';
$dbcon = @mysqli_connect($host, $username, $password, $database);
if(!$dbcon){
	die('Could not find database'. mysqli_error($dbcon));
}


?>