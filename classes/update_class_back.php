<?php 

session_start();

require_once "../db_connect.php";

$id = $_GET['id'];

if( $_SERVER['REQUEST_METHOD'] == 'POST') {

    $className = $_POST['name'];

    $query = mysqli_query($connect,  "UPDATE classes SET name = '$className' WHERE id = '$id'");

    //todo :: validation 
    //todo :: image upload

    if($query) {
        
        $_SESSION['success'] = 'Class Updated successfully!';

        header('location: classes.php');
        
       // close connection
        mysqli_close($connect);

        exit();
   
    } 
 
}