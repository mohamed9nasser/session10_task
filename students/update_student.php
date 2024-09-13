
<?php

require_once "../header.php"; 

$id = $_GET['id'];

?>
        <div>

            <span  onclick="history.back()">Students</span> / <span>Update student</span>
        
        </div>

        <div>

            <form action="update_student_back.php?id=<?php echo $id;  ?>" method="post" enctype="multipart/form-data">

                <h1>
                    Update class
                </h1>

                <label>
                First Name
            </label>
                <input type="text" name="fname" placeholder="Enter First Name">
                <label>
                Class Name
            </label>
                <input type="text" name="lname" placeholder="Enter Last Name">
                <label>
                Phone Number
            </label>
                <input type="text" name="phone" placeholder="Enter Phone Number">
                
                <label>
                    Class Image
                </label>
                
                <input type="file" name="image"/>
                
                <input type="submit" value="Update">
            
            </form>

        </div>

<?php require_once "../footer.php"; ?>