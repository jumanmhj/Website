<?php
$server = 'localhost';
$username = 'root';
$password = '';
$database = 'website';

//create connection
$connection = new mysqli($server,$username,$password,$database);
//check connection error
if ($connection->connect_errno != 0) {
	die('Connection error');
}
?>