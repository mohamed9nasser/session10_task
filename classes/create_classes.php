
<?php require_once "../header.php"; ?>
        <div>
            <span  onclick="history.back()">Classes</span> / <span>Create classes</span>
        </div>
        <div>

            <form action="create_class_back.php" method="post" enctype="multipart/form-data">

            <h1>
                Create New Class
            </h1>

            <label>
                Class Name
            </label>
                <input type="text" name="name" placeholder="Enter Class Name">


            <label>
                Class Image
            </label>
                <input type="file" name="image"/>

                <input type="submit" value="Create">
            </form>

        </div>

        <?php      require_once "../footer.php"; ?>