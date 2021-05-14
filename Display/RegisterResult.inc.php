 <?php
 require('../config/db.php');
 // require_once('includes/Register.inc.php');
 // echo "Hello world";

$search = $_GET['output'];
// echo $search;

// $dsn;

$query = "SELECT * from users WHERE Car_Plate_Number = :search LIMIT 0,1";

$stmt = $pdo->prepare($query);

$stmt->bindParam(':search', $search);

$stmt->execute();

$result = $stmt->fetch();

$name =  $result['Name'];

$nextOfKin = $result['Next_Of_Kin'];

$phoneNumber = $result['Phone_Number'];
$phoneNumber = $result['Phone_Number'];
$gender = $result['Gender'];
$carPlateNumber = $result['Car_Plate_Number'];
$carColor = $result['Car_Color'];
$carModel = $result['Car_Model'];
$nextOfKinPhoneNumber = $result['Next_Of_Kin_Phone_Number'];
$carChassisNumber = $result['Car_Chassis_Number'];
$image = $result['image'];

 ?>
 <!DOCTYPE html>
 <html lang="en">
 <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="js/jquery.min.js"></script>
    
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="../css/bootstrap.css">
    <!-- <script src="js/bootstrap.min.js"></script> -->
    <link rel="stylesheet" href="css/main.css">
    <title>Index</title>
 </head>
 <body class="mainBody" style="background-color:white;">
   <h1 class="text-center display-4">Result</h1>
   
   <!-- <div class="mx-3 w-50" style="display: block;
    top: 0;
    margin: auto;
    
    left: 0;
    right: 0;
    bottom: 0;"> -->
    <div class="form-group  container" style="margin:0 auto;top:0px;bottom:0; left:0;right:0; display:block;">
      <!-- <div class="row no-gutters bg-success">
        <div class="col-8 col-sm-12 col-xl-8 col-lg-8 mt-4 pl-4">
          <h3>Full Name: <?php echo $name?></h3>
          <h3>Phone Number: <?php echo $phoneNumber?></h3>
          <h3>Next Of Kin: <?php echo $nextOfKin?></h3>
          <h3>Gender: <?php echo $gender?></h3>
          <h3>Car Color: <?php echo $carColor?></h3>
          <h3>Car Model: <?php echo $carModel?></h3>
          <h3>Car Chassis Number: <?php echo $carChassisNumber?></h3>
          <h3>Car Color: <?php echo $carColor?></h3>
        </div>
       
        <div class="col-4 col-sm-12 col-lg-4 col-xl-4 mt-4" style="">

        <h3> <img src="../uploads/<?php echo $image?> " class="mr-4" style="width: 160px; height: 170px; " alt=""></h3>

        </div>
      </div> -->
      <div class="d-flex justify-content-between bg-success mt-3">
        <div class="form-group ml-3 mt-3">
        <h3>Full Name: <?php echo $name?></h3>
          <h3>Phone Number: <?php echo $phoneNumber?></h3>
          <h3>Next Of Kin: <?php echo $nextOfKin?></h3>
          <h3>Next of Kin Phone Number: <?php echo $nextOfKinPhoneNumber?></h3>
          <h3>Gender: <?php echo $gender?></h3>
          <h3>Car Color: <?php echo $carColor?></h3>
          <h3>Car Model: <?php echo $carModel?></h3>
          <h3>Car Chassis Number: <?php echo $carChassisNumber?></h3>
          <h3>Car Color: <?php echo $carColor?></h3>
          <h3>Car Plate Number: <?php echo $carPlateNumber?></h3>
          
        </div>
        
        <div class="mt-4">
        <h3> <img src="../uploads/<?php echo $image?> " class="mr-4" style="width: 160px; height: 170px; " alt=""></h3>
        </div>
      </div>

      
       <button class="btn btn-outline-success mt-4" onclick="window.print()">Print</button>
    </div>

   
   </div>

 </body>
 </html>
