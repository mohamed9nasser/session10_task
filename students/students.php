<?php   

session_start();

require_once "../db_connect.php";

$query = mysqli_query($connect, "SELECT * FROM student");

require_once "../header.php";

?>



        <div>
            <span>Students</span> / <span>List Students</span>
            
        </div>

        <a style="margin: 10px;padding:10px;background-color:darkblue;color:white;width:fit-content" href="create_students.php">
            Create
        </a>

        <div>

        <?php  

            if(isset($_SESSION['success'])) {
                echo '<p class="success-message">' .$_SESSION['success']. '</p>';
            
                unset($_SESSION['success']);
            }

        ?>

            <table>
                <thead>
                    <th>
                        ID
                    </th>
                    <th>
                        First Name
                    </th>
                    <th>
                        Last Name
                    </th>
                    <th>
                        Phone Number
                    </th>
                    <th>
                        Image
                    </th>
                </thead>
                <tbody>


                <?php  

                if(mysqli_num_rows($query) > 0) {
                    while($row = mysqli_fetch_assoc($query)) {
                        $text = '<tr><td>';
                        $text .= $row['id'];
                        $text .= '</td> <td>';
                        $text .= $row['firstname'];
                        $text .= '</td> <td>';
                        $text .= $row['lastname'];
                        $text .= '</td> <td>';
                        $text .= $row['phone'];
                        $text .= '</td> <td>';
                        $text .=  "<img src='". $row["image"] ."' width='150'/>"   ;
                        $text .= '</td><td> <a href="delete_student.php?id='.$row['id'].' "> Delete </a>  <a href="update_student.php?id='.$row['id'].' "> Update </a> </td></tr>';

                        echo $text;
                    }
                } else {
                    echo ' <tr> <td colspan="5">No Records!</td> </tr> ';
                }

                ?>


                </tbody>
            </table>

        </div>


<?php  

    require_once "../footer.php";

    // close connection
    mysqli_close($connect);

?>