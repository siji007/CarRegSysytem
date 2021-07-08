<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="js/jquery.min.js"></script>
    <link rel="stylesheet" href="css/bootstrap.css">
    <script src="js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="css/Register.css">
    <title>Index</title>
</head>
<body class="" style="background-color:white;">
  <h1 class="display-4 text-center text-success mt-3 mb-3">Register Here</h1>

      <div class="card formContainer bg-success text-white" style="margin-bottom: 70px;">
            <form class="myform" id="myform" method="post" action ="includes/Register.inc.php" enctype="multipart/form-data">
                <div class="form-group mt-3">
                    <label for="" style="margin-left: 60px;">Full Name</label>
                    <input id="fullName" class="form-control w-75 name" name="fullname" type="text" placeholder="Enter Your Full Name">
                    <!-- <div class="errName text-danger">
                       
                    </div> -->
                    <div class="" id="fullNameError">

                    </div>
                </div>
                <div class="form-group">
                    <label for="" style="margin-left: 60px;">Phone Number</label>
                    <input id="phoneNumber" class="form-control user w-75" type="text" name="PhoneNumber" placeholder="Select Phone Number">

                    <div class="" id="phoneError">

                    </div>

                </div>
                <!-- <div class="form-group">
                    <label for="" style="margin-left: 60px;">Select Gender</label><br>
                    <input type="radio" name="mgender" value="male"> Male<br>
                    <input type="radio" name="fgender" value="female"> Female<br>
                </div> -->
                <div class="form-group">
                  <label for="" style="margin-left: 60px;">Select Gender</label><br>
                    <select name="gender" style="margin-left: 60px;">
                    <option>Male</option>
                    <option>Female</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="" style="margin-left: 60px;">Next of Kin</label>
                    <input id="nextOfKin" class="form-control user w-75" type="text" name="NextOfKin" placeholder="Next of Kin">
                
                    <div class="" id="nextOfKinError">

                    </div>
                
                </div>

                <div class="form-group">
                    <label for="" style="margin-left: 60px;">Next of Kin Phone Number</label>
                    <input id="nextPhoneNumber" class="form-control user w-75" type="text" name="NextOfKinPhoneNumber" placeholder="Next of Kin Phone Number">
                
                    <div class="" id="nextOfKinPhoneError">

                    </div>
                </div>

                <div class="form-group">
                    <label for="" style="margin-left: 60px;">Car Plate Number</label>
                    <input id="plateNumber" class="form-control user w-75" type="text" name="carPlate" placeholder="Car Plate Number">
               
                    <div class="" id="carPlateError">

                    </div>

                </div>

                <div class="form-group">
                    <label for="" style="margin-left: 60px;">Car Color</label>
                    <input id="carColor" class="form-control user w-75" type="text" name="carColor" placeholder="Car Color">
                    <div class="" id="carColorError">

                    </div>
                </div>

                <div class="form-group">
                    <label for="" style="margin-left: 60px;">Car Model</label>
                    <input id="carModel" class="form-control user w-75" type="text" name="carModel" placeholder="Car Model">
               
                    <div class="" id="carModelError">

                    </div>

                </div>

                <div class="form-group">
                    <label for="" style="margin-left: 60px;">Input Image</label>
                    <input type="file" name="image" style="display: flex;margin-left:60px;">
                </div>
                <div class="form-group">
                    <label for="" style="margin-left: 60px;">Car Chassis Number</label>
                    <input class="form-control user w-75" type="text" id="carChassis" name="carChassis" placeholder="Car Chassis Number">
               
                    <div class="" id="carChassisError">

                    </div>
                    
                </div>
                    <button class="submit text-success btn bg-light btn-outline-success mb-4 mt-3" type="button" onclick="validate();" name="myForm">Register Now</button>
            </form>
            <form action="" method="get" action ="includes/Register.inc.php">
                <div class="form-group">
                <button name="goBack" class="btn btn-warning ml-auto mr-auto d-block text-white">Go back Home</button>
                </div>
            </form>
            
        </div>
        <script src="js/test.js"></script>
</body>
</html>
