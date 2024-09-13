<?php 

session_start();

require_once "../db_connect.php";

if( $_SERVER['REQUEST_METHOD'] == 'POST') {

    $fName = $_POST['firstname'];
    $lName = $_POST['lastname'];
    $phone = $_POST['phone'];
   


    // TEM -> YOUR FILES -> rename -> moving

    $imgTem = $_FILES['image']['tmp_name'];
    $imgName = $_FILES['image']['name'];
    
    $nameArr = explode( '.' , $imgName);

    $ext = end($nameArr);

    $newPath = '../images/students/' . time() . '.' . $ext;

    move_uploaded_file($imgTem, $newPath);
        
    $query = mysqli_query($connect, "INSERT INTO student (firstname, lastname, phone, image) VALUES ('$fName','$lName','$phone', '$newPath')");

    //todo :: validation 

    if($query) {
        
        $_SESSION['success'] = 'Student Added successfully!';

        header('location: students.php');
        
       // close connection
       mysqli_close($connect);

       exit();
   
    } 
 

}