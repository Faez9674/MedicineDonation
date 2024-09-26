<?php

include "dbconn.php";
session_start();

if(isset($_POST['submit'])){


    $email = $_POST['email'];
    $password = $_POST['password'];

    if($email != "" && $password != "" ){
        $sql = "SELECT * FROM ngo WHERE email_id='$email' AND password='$password' ";

        $result = mysqli_query($conn, $sql);

        if(mysqli_num_rows($result) === 1){
            $row = mysqli_fetch_assoc($result);

            if($row['email_id'] === $email && $row['password'] === $password){
                $_SESSION['email'] = $row['email_id'];
                $_SESSION['user_name'] = $row['user_name'];
                $_SESSION['id'] = $row['id'];
                header("Location: home_ngo.php");
                exit();
            }else{
                header("location: ngo_login.php?error=Incorect email id or password");
                exit();
            }

        }else{
            header("location: ngo_login.php?error=Incorect email id or password");
            exit();
        }
        
    }else{
        echo "Email and Password cannot be empty!";
    }
}



?>