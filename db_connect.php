<?php 


$host = 'localhost';
$db = 'sys_student';
$username = 'root';
$password = '';   

$connect = mysqli_connect($host , $username , $password , $db);

if(!$connect) {
    echo mysqli_connect_error();
}