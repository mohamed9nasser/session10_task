<?php   

session_start();

require_once "../db_connect.php";

$query = mysqli_query($connect, "SELECT * FROM classes");

require_once "../header.php";

?>



        <div>
            <span>Classes</span> / <span>List classes</span>
            
        </div>

        <a style="margin: 10px;padding:10px;background-color:darkblue;color:white;width:fit-content" href="create_classes.php">
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
                        Name
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
                        $text .= $row['name'];
                        $text .= '</td> <td>';
                        $text .=  "<img src='". $row["image_url"] ."' width='150'/>"   ;
                        $text .= '</td><td> <a href="delete_class.php?id='.$row['id'].' "> Delete </a>  <a href="update_class.php?id='.$row['id'].' "> Update </a> </td></tr>';

                        echo $text;
                    }
                } else {
                    echo ' <tr> <td colspan="3">No Records!</td> </tr> ';
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