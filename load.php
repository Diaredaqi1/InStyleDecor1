<?php
include 'database.php';
            $sql = "SELECT * FROM comments LIMIT 5";
            $result = mysqli_query($conn , $sql);
            
            if(mysqli_num_rows($result) > 0){
                while($row = mysqli_fetch_assoc($result)){
                    echo "<p>";
                    echo "<img src=\"icon/1.png\"> ".$row['author'];
                    echo "<br>";
                    echo "<i>Comment:   </i>".$row['message'];
                    echo "</p>";
                }
            }
            else{
                echo "There are no comments!";
            }
        ?>