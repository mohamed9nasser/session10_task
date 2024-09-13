
<?php require_once "../header.php"; ?>
        <div>
            <span  onclick="history.back()">Students</span> / <span>Create student</span>
        </div>
        <div>

            <form action="create_student_back.php" method="post" enctype="multipart/form-data">

            <h1>
                Create New Student
            </h1>

            <label>
                First Name
            </label>
                <input type="text" name="firstname" placeholder="Enter First Name">

                <label>
                Last Name
            </label>
                <input type="text" name="lastname" placeholder="Enter Last Name">

                <label>
                Phone Number
            </label>
                <input type="text" name="phone" placeholder="Enter Phone Number">


            <label>
                Student Image
            </label>
                <input type="file" name="image"/>

                <input type="submit" value="Create">
            </form>

        </div>

        <?php      require_once "../footer.php"; ?>