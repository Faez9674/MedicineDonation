<?php 
include "dbconn.php";
session_start();
if(isset($_SESSION['id']) && $_SESSION['user_name'] && $_SESSION['email']){


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




            

                <br><br>

<div class="container">
    <div class="row">
    <div class="col-md-3"></div>
        <div class="col-md-6">
        
        <div class="card">
        <form action="add_medicine.php" method="POST">
            <div class="card-header" style="text-align: center; color: white; background-color: black;">
                
                <div class="row">
        <div class="col-md-8" style="text-align: right;"><h2 style="font-size: 25px;">Add Unused Medicines</h2> </div>
        <div class="col-md-4" style="text-align: right;"><a href="view_unused_medicine.php" class="btn btn-success">View Medicine List</a></div>
    </div>

            </div>
            <div class="card-body" style="background-color: #D3D3D3;">
            
            <div class="row">
                <div class="col-md-12">
                    <label>Donor Name</label>
                    <input type="hidden" name="donor_id" class="form-control" value="<?php echo $_SESSION['id'] ?>">
                    <input type="text" name="donar_name" class="form-control"  value="<?php echo $_SESSION['user_name'] ?>" readonly>
                    <label>Medicine Name</label>
                    <input type="text" name="medicine_name" class="form-control" placeholder="Enter Medicine Name" required>
                    <label>Batch Number</label>
                    <input type="text" name="batch_number" class="form-control" placeholder="Enter Batch Number" required>
                    <label>Quantity</label>
                    <input type="number" name="quantity" class="form-control" placeholder="Enter Quantity" required>



                </div>
                <!-- <div class="col-md-6">
                    
                    
                </div> -->
            </div>

            
            

            


            </div> 
            
            

           
            <div class="card-body" style="background-color: #D3D3D3;">

            <div  style="text-align: center">
            <!-- <div class="card-footer">Reach before 4PM</div> -->
            <button type="submit" name="submit" class="btn btn-success" style="background-color: green;">Add</button>
            <a href="doner_services.php" class="btn btn-danger">Cancel</a>
            </div>

            </form>
        </div>
        </div>
  
    </div>
  
</div>
            
              
<br><br>
           

           


</body>
</html>


<?php

}else{
    header("location: doner_login.php");
    exit();
}
?>