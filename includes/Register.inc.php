<?php

require('../config/db.php');

$phoneNumber = $_POST['PhoneNumber'];
$name = $_POST['fullname'];
$NextofKin = $_POST['NextOfKin'];
$nextKinNo = $_POST['NextOfKinPhoneNumber'];
$gender = $_POST['gender'];
$carColor = $_POST['carColor'];
$carPlate = $_POST['carPlate'];
$carModel = $_POST['carModel'];
$carChassisNumber = $_POST['carChassis'];
$image = $_FILES["image"]["name"];
$target = "../uploads/".basename($image);
// $nameErr="";

if(isset($_POST['myForm'])){
  if(!preg_match("/^[a-zA-Z\s]*$/",$name) || empty($name)){
    header('Location: ../Register.php?nameError');
    // $nameErr= "Name must contain only alphabets Only!";
  }
  else if(!preg_match("/^[a-zA-Z]|[^\s]*$/",$carColor) || empty($carColor)){
    header('Location: ../Register.php?carColorError');
    // $colorErr = "Color must only Contain Alphabet!";
  }
  else if(!preg_match("/^[a-zA-Z]|\s*$/",$carModel) || empty($carModel)){
    header('Location: ../Register.php?carModelError');
    // $carModelErr = "Car Model must only Contain Alphabet!";
  }
  else if(!preg_match("/^[0-9A-Z\-]*$/",$carPlate) || empty($carPlate)){
    header('Location: ../Register.php?carPlateError');
    // $carPlate = "Color must only Contain Alphabet and Numbers!";
  }
  else if(!preg_match("/^[a-zA-Z]|\s *$/",$carModel)){
    header('Location: ../Register.php?carModelError');
  }
  else if(!preg_match("/^[0-9]*$/",$phoneNumber) || empty($phoneNumber)){
    header('Location: ../Register.php?phoneNumberError');
  }
  else if(!preg_match("/^[0-9]*$/",$nextKinNo) || empty($nextKinNo)){
    header('Location: ../Register.php?nextKinNumberError');
  }
  else if(!preg_match("/^[A-Za-z]|\s*$/",$NextofKin || empty($NextofKin))){
    header('Location: ../Register.php?nextOfKin');
  }
  else if(!preg_match("/^[A-Z0-9][-]*$/",$carChassisNumber || empty($carChassisNumber))){
    header('Location: ../Register.php?carChassisNumber');
  }
  else if(!empty($image)){
    header('Location: ../Register.php?inputImage');
  }
  else{
    $pdo;
    $query = 'INSERT INTO users(Name,Next_Of_Kin,Phone_Number,Gender,Next_Of_Kin_Phone_Number,Car_Plate_Number,Car_Color,Car_Model,Car_Chassis_Number,image)
    VALUES(:Name,:Next_Of_Kin,:Phone_Number,:Gender,:Next_Of_Kin_Phone_Number,:Car_Plate_Number,:Car_Color,:Car_Model,:Car_Chassis_Number,:image)';
    $stmt = $pdo->prepare($query);
    // $stmt->execute(['Name' => $name,'Next_of_Kin'=>$NextofKin,'Phone_Number'=>$phoneNumber,'Gender'=>$gender,'Next_of_kin phone_number'=>$nextKinNo,'Car_Plate_Number'=>$carPlate,'Car color'=>$carColor,'Car Model'=>$carModel,'Car_chassis_number'=>$carChassisNumber]);
    // if(mysqli_query($pdo, $query)){
    //        header('Location: ../Register.php?registrationsuccessful');
    //    }else{
    //      echo mysqli_error($pdo);
    //    }
    //    mysqli_close($pdo);
    $stmt->bindParam(':Name', $name);
    $stmt->bindParam(':Next_Of_Kin',$NextofKin);
    $stmt->bindParam(':Phone_Number',$phoneNumber);
    $stmt->bindParam(':Next_Of_Kin_Phone_Number',$nextKinNo);
    $stmt->bindParam(':Gender',$gender);
    $stmt->bindParam(':Car_Plate_Number',$carPlate);
    $stmt->bindParam(':Car_Color',$carColor);
    $stmt->bindParam(':Car_Model',$carModel);
    $stmt->bindParam(':Car_Chassis_Number',$carChassisNumber);
    $stmt->bindParam(':image',$image);
    move_uploaded_file($_FILES["image"]["tmp_name"], $target); //This assign a temporary name before it assign it to a database

    //Execute Query
    if($stmt->execute()){
      // include 'success.php';
      header('Location: success.php');
    }
     //Print error if something goes wrong
    //  printf("Error: %");
  }
}
if(isset($_GET['goBack'])){
  header('Location: ../index.php');
}
?>
