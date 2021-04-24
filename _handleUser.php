<?php

$servername = "localhost";
$username = "root";
$password = "";
$database = "task";

$conn = mysqli_connect($servername,$username,$password,$database);

$showError= "false";
if(isset($_POST['submit'])){
    $name = $_POST ['contactName'];
    $email = $_POST['contactEmail'];
    $phone = $_POST['contactPhone'];
    $state = $_POST['contactState'];
    $city = $_POST['contactCity'];
    $address = $_POST['contactAddress'];

    $existsql = "SELECT * FROM `user` WHERE user_email= '$email'";
    $result = mysqli_query ($conn , $existsql);
    $numRows = mysqli_num_rows($result);
    if($numRows>0){
        $showError = "Email is already registerd";
        echo '<h1 class="false">Email is already registered</h1>';
    }else{
        $sql="INSERT INTO `user` (`user_name`, `user_email`, `user_mobile`, `user_state`, `user_city`, `user_address`) VALUES ('$name', '$email', '$phone', '$state', '$city', '$address')";
        $result = mysqli_query($conn,$sql);
        if($result){
            echo'User Registration Successfully';
            header("Location:/task/display.php");
            exit();
        }else{
            header("Location:/task/index.php");
        echo'something wrong!please try again';
        }

    }
}
?>

