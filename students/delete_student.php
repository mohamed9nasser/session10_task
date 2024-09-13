<?php 

session_start();

require_once "../db_connect.php";


$id = $_GET['id'];

$query = mysqli_query($connect, "DELETE FROM student WHERE id = '$id'");

if($query) {

    $_SESSION['success'] = 'Student deleted successfully!';

    header('location: students.php');

} else {
    echo 'error';
}


    // close connection
    mysqli_close($connect);