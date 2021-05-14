<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="js/jquery.min.js"></script>
    <link rel="stylesheet" href="css/bootstrap.css">
    <script src="js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="css/main.css">
    
    <title>Car System</title>
</head>
<body class="mainBody">
    <nav class="navbar navbar-expand-lg navbar-light bg-warning sticky-top">
        <div class="brand navbar-brand circleBrand bg-danger"><h4 class="pt-2 pl-1 text-center">CS</h4></div>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          
          <form class="form-inline my-2 my-lg-0 ml-auto" method="get" action="Display/RegisterResult.inc.php">
          <div class=" d-flex align-content-between">
            <input class="form-control mr-sm-2 " style="width: 239px;" type="search" name="output" placeholder="Search by Car Plate Number" aria-label="Search">
            <button class="btn btn-outline-success my-2 my-sm-0" type="submit" required name="search">Search</button>
          </div>
          </form>
        </div>
    </nav>
      <!-- <div class="car" style="">
      <img src="img/black.JPG" alt="" style="max-width: 100%;
  background-repeat: no-repeat;
  background-size: cover;">
        <div class="overlay bg-dark">
          
          <div class="container text-white pb-5">
                <div id="header-text" class="row">
                    <div  class="col-lg-12 col-xl-12 col-sm-12 text-center">
                        <h1 >Protect your car today!</h1>
                         <p class="lead">
                           Car System ensures total security and protection with your car.Click the register button below to register
                           today.
                         </p>
                         <button type="button" class="btn btn-outline-success register" name="button"><a href="Register.php">Register</a></button>
                    </div>
                </div>
            </div>
        </div>
      </div> -->


      <!-- <section id="showcase">
        <div class="primary-overlay ">
            <div class="container text-white pb-5">
                <div id="header-text" class="row">
                    <div  class="col-lg-12 col-xl-12 col-sm-12 text-center">
                        <h1>Protect your car today!</h1>
                         <p class="lead">Car System ensures total security and protection with your car.Click the register button below to register
                           today.
                         </p>
                         
                    </div>
                    
                </div>
            </div>
        </div>
    </section> -->
    <section id="showcase">
    <div class="primary-overlay" style="background-color: rgba(0, 0,0, 0.7);position:absolute; min-height: 800px; width:100%;">
            <div class="container text-white pb-5">
                <div id="header-text" class="row">
                    <div style="top:300px;"  class="col-lg-12 col-xl-12 col-sm-12 text-center">  
                      <!-- left: 0;
    line-height: 200px;
    margin-top:-100px;
    position: absolute;
    text-align:center;
    top:50%;
    width: 100%; -->
                        <h1 style="font-size: 65px;">Protect your car today!</h1>
                         <p  style="font-size: 35px;" class="lead" >Car System ensures keeping information about your car and protection with your car.
                           <br>
                           Click the register button below to register
                           today.
                         </p>
                         <button type="button" class="btn bg-light btn-outline-success register" name="button"><a href="Register.php" style="text-decoration: none;">Register</a></button>
                         
                    </div>
                    
                </div>
            </div>
    </div>
    </section>

        <!-- background-color: rgba(0, 0,0, 0.7);
    position: absolute; /*to cover the entire thing with d background color*/
    top: 0;
    left: 0;
    width: 100%;
    min-height: 700px; -->



  </body>
</html>
