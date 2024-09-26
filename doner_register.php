<?php

include "dbconn.php";

if(isset($_POST['submit'])){

    $user_name = $_POST['user_name'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $phone = $_POST['phone'];
    $address = $_POST['address'];

    if($user_name != "" && $email != "" && $password != ""  && $phone != ""  && $address != "" ){
        $sql = "INSERT INTO donar (`user_name`, `email_id`, `phone`, `address`, `password`) VALUES ('$user_name', '$email', '$phone', '$address', '$password')";
        if (mysqli_query($conn, $sql)) {
            header("location: index.html");
        } else {
             echo "Something went wrong. Please try again later.";
        }
    }else{
        echo "User name, email, and password cannot be empty!";
    }
}


?>