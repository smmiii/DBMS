<?php
//Create constant to store non repeating values
define('LOCALHOST','localhost');
define('DB_USERNAME', 'root');
define('DB_PASSWORD','');
define('DB_NAME','dough-nut');

$conn = mysqli_connect('localhost','root','')or die(mysqli_error());//Database connection
$db_select = mysqli_select_db($conn,'dough-nut'); // selecting database

?>