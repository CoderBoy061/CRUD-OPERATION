<?php
                $servername = "localhost";
                $username = "root";
                $password = "";
                $database = "task";
                
                $conn = mysqli_connect($servername,$username,$password,$database);

                $id = $_GET['id'];

                $sql = "DELETE FROM `user` WHERE `id` = $id";
                 mysqli_query ($conn , $sql);
                header("location:display.php");
?>