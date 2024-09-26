<?php 
include "dbconn.php";
session_start();
if(isset($_SESSION['id']) && $_SESSION['user_name'] && $_SESSION['email']){

   

        $id = $_GET['id'];

        
        



       

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

if(isset($_POST['submit'])){

$donor_id = $_POST['donor_id'];
$donar_name = $_POST['donar_name'];
$medicine_name = $_POST['medicine_name'];
$batch_number = $_POST['batch_number'];
$quantity = $_POST['quantity'];

if($donor_id != "" && $donar_name != "" && $medicine_name != ""  && $batch_number != ""  && $quantity != "" ){
    $sql = "Update unusedmedicine SET donor_id = '$donor_id', donar_name = '$donar_name', medicine_name = '$medicine_name', batch_number = '$batch_number', quantity = '$quantity' WHERE id = $id;";
    if (mysqli_query($conn, $sql)) {
        // header("location: home_member.php");

?>

<div class="container">
    <div class="row">
    <div class="col-md-1"></div>
        <div class="col-md-10">
        
        <div class="card" style="text-align: center;">

       <br>
            <h1 style="font-size: 70px; color: red">Updated Successfully</h1>
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
}else{
    echo "User name, email, and password cannot be empty!";
}
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