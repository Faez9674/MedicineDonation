<?php 
include "dbconn.php";
session_start();
if(isset($_SESSION['id']) && $_SESSION['user_name'] && $_SESSION['email']){


    $id = $_SESSION['id'];

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


   <link rel="stylesheet" href="https://cdn.datatables.net/1.13.4/css/jquery.dataTables.min.css">


 


      <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
      <script src="https://cdn.datatables.net/1.13.4/js/jquery.dataTables.min.js"></script>

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




<?php 



$sql = "SELECT * FROM unusedmedicine WHERE donor_id = '$id'";



$result = mysqli_query($conn, $sql);

if(mysqli_num_rows($result) > 0){

    ?>

        <br><br><br>

<div class="container">
<div class="row">

<div class="col-md-12">

<div class="card">
    <div class="card-header" style="text-align: center; color: white; background-color: black;">

    <div class="row">
        <div class="col-md-8" style="text-align: right;"><h2 style="font-size: 25px;">View Unused Medicine List</h2> </div>
        <div class="col-md-4" style="text-align: right;"><a href="doner_services.php" class="btn btn-danger">Back</a></div>
    </div>

        
       
        
    </div>
    <div class="card-body" style="background-color: #D3D3D3;">
    <table id="example">
        <thead>
        <tr>
            <th style="text-align: center;">Donor Name</th>
            <th style="text-align: center;">Medicine Name</th>
            <th style="text-align: center;">Batch Number</th>
            <th style="text-align: center;">Quantity</th>
            <th style="text-align: center;">Action</th>
        </tr>
        </thead>
        <?php
        while($row = mysqli_fetch_array($result)){


           

            ?>
        <tbody style="text-align: center;">
        
        <tr>
            <td><?php echo $row['donar_name'] ?></td>
            <td><?php echo $row['medicine_name'] ?></td>
            <td><?php echo $row['batch_number'] ?></td>
            <td><?php echo $row['quantity'] ?></td>
            <td>
                <a href="edit_medicine.php?id=<?php echo $row['id']; ?>" class="btn btn-primary">Edit</a>

            </td>
        </tr>
       
        </tbody>
        <?php } ?>
    </table>
    </div> 

    
    <!-- <div class="card-footer">Reach before 4PM</div> -->
</div>
</div>

</div>

</div>
    


<?php
  
        

}else{
    ?>

<br><br><br><br><br><br><br>

<div class="container">
    <div class="row">
    <div class="col-md-2"></div>
        <div class="col-md-8">
        
        <div class="card" style="text-align: center;">

       <br>
            <h1 style="font-size: 70px; color: red">No Data Found!!!</h1>
            <br>

            <a href="doner_services.php" class="btn btn-success">Go Back To Home</a>
         
        </div>
        </div>
  
    </div>
  
</div>
            
              
<br><br>

    <?php
}




?>


<br><br><br><br><br><br>

<script>
    $(document).ready(function () {
    $('#example').DataTable();
});
</script>
           


</body>
</html>


<?php

}else{
    header("location: doner_login.php");
    exit();
}
?>