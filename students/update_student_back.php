<?php 

session_start();

require_once "../db_connect.php";

$id = $_GET['id'];

if( $_SERVER['REQUEST_METHOD'] == 'POST') {

    $fName = $_POST['fname'];
    $lName = $_POST['lname'];
    $phone = $_POST['phone'];

    $query = mysqli_query($connect,  "UPDATE student SET firstname = '$fName',lastname = '$lName',phone = '$phone' WHERE id = '$id'");

    //todo :: validation 
    //todo :: image upload

    if($query) {
        
        $_SESSION['success'] = 'Student Updated successfully!';

        header('location: students.php');
        
       // close connection
        mysqli_close($connect);

        exit();
   
    } 
 
}