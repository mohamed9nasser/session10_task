<?php 

session_start();

require_once "../db_connect.php";

if( $_SERVER['REQUEST_METHOD'] == 'POST') {

    $className = $_POST['name'];


    // TEM -> YOUR FILES -> rename -> moving

    $imgTem = $_FILES['image']['tmp_name'];
    $imgName = $_FILES['image']['name'];
    
    $nameArr = explode( '.' , $imgName);

    $ext = end($nameArr);

    $newPath = '../images/classes/' . time() . '.' . $ext;

    move_uploaded_file($imgTem, $newPath);
        
    $query = mysqli_query($connect, "INSERT INTO classes (name, image_url) VALUES ('$className', '$newPath')");

    //todo :: validation 

    if($query) {
        
        $_SESSION['success'] = 'Class Added successfully!';

        header('location: classes.php');
        
       // close connection
       mysqli_close($connect);

       exit();
   
    } 
 

}