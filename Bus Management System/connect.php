<?php
$HOST = 'localhost';
$USERNAME = 'root';
$PASSWORD = ''; 
$DATABASE = 'BMS';

$con = mysqli_connect($HOST, $USERNAME, $PASSWORD, $DATABASE);

if (!$con) {
    die("Connection failed: " . mysqli_connect_error());
}
?>
