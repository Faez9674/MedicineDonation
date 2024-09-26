<?php 
include "dbconn.php";
session_start();
if(isset($_SESSION['id']) && $_SESSION['user_name'] && $_SESSION['email']){

   

        $id = $_GET['id'];

        $id1 = $_SESSION['id'];

        $sql = "SELECT * FROM donar WHERE id = '$id1'";

        $result = mysqli_query($conn, $sql);
    
        $row = mysqli_fetch_assoc($result);
        
        $sql1 = "SELECT * FROM ngo WHERE id = '$id'";

        $result1 = mysqli_query($conn, $sql1);
    
        $row1 = mysqli_fetch_assoc($result1);
    
        $ngo_id = $row1['id'];
        $ngo_name = $row1['user_name'];
        $ngo_email = $row1['email_id'];
        $ngo_phone = $row1['phone'];
        $ngo_address = $row1['address'];


        $donar_id = $row['id'];
        $doner_name = $row['user_name'];
        $doner_email = $row['email_id'];
        $doner_phone = $row['phone'];
        $doner_address = $row['address'];

        $status = "Pending";
       

?>


<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1">
   <!-- mobile metas -->
   <meta name="viewport" content="width=device-width, initial-scale=1">
   <meta name="viewport" content="initial-scale=1, maximum-scale=1">
   <!-- site metas -->
   <title>Unused Medicine Donation</title>
   <meta name="keywords" content="">
   <meta name="description" content="">
   <meta name="author" content="">

   <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.4/dist/jquery.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>

<script src="https://cdn.tailwindcss.com?plugins=forms"></script>
      <script src="https://kit.fontawesome.com/a24879a822.js"></script>

<style>
	.error{
		background-color: red;
		color: white;
		padding: 10px;
		border-radius: 5px;
		margin: 20px auto;
	}
</style>

</head>
<body style="background-image: url('images/img-19.png'); background-repeat: no-repeat; background-size: cover; ">




            

<br><br><br><br><br><br><br>


<?php



$sql2 = "INSERT INTO donar_request (`donar_id`, `ngo_id`, `doner_name`, `doner_address`, `doner_phone`, `doner_email`, `ngo_name`, `ngo_address`, `ngo_phone`, `ngo_email`, `status`) VALUES ('$donar_id', '$ngo_id', '$doner_name', '$doner_address', '$doner_phone', '$doner_email', '$ngo_name', '$ngo_address', '$ngo_phone', '$ngo_email', '$status')";    
    if (mysqli_query($conn, $sql2)) {

?>

<div class="container">
    <div class="row">
    <div class="col-md-1"></div>
        <div class="col-md-10">
        
        <div class="card" style="text-align: center;">

       <br>
            <h1 style="font-size: 70px; color: red">Request Send Successfully</h1>
            <br>
            <a href="home_doner.php" class="btn btn-success">Go Back To Home</a>
         
        </div>
        </div>
  
    </div>
  
</div>

<?php
        

    } else {
         echo "Something went wrong. Please try again later.";
    }



?>


            
              
<br><br>
           

           


</body>
</html>


<?php

}else{
    header("location: doner_login.php");
    exit();
}
?>