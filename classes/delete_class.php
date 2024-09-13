<?php 

session_start();

require_once "../db_connect.php";


$id = $_GET['id'];

$query = mysqli_query($connect, "DELETE FROM classes WHERE id = '$id'");

if($query) {

    $_SESSION['success'] = 'Class deleted successfully!';

    header('location: classes.php');

} else {
    echo 'error';
}


    // close connection
    mysqli_close($connect);