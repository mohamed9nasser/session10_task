
<?php

require_once "../header.php"; 

$id = $_GET['id'];

?>
        <div>

            <span  onclick="history.back()">Classes</span> / <span>Update classes</span>
        
        </div>

        <div>

            <form action="update_class_back.php?id=<?php echo $id;  ?>" method="post" enctype="multipart/form-data">

                <h1>
                    Update class
                </h1>

                <label>
                    Class Name
                </label>
            
                <input type="text" name="name" placeholder="Enter Class Name">
                
                <label>
                    Class Image
                </label>
                
                <input type="file" name="image"/>
                
                <input type="submit" value="Update">
            
            </form>

        </div>

<?php require_once "../footer.php"; ?>