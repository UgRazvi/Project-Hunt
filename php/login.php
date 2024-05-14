<?php
session_start();
include("./database.php");

// Check connection
if ($conn === false) {
    die("ERROR: Could not connect. "
        . mysqli_connect_error());
}

// INSERT INTO `admin`(`User`, `Password`) VALUES ('admin@test.com','admin101') : admin@test.com , admin101

$userid = "";
$password="";

if(isset($_POST['login']))
	{
	      $userid=$_POST['user_id'];
	      $password=$_POST['pass'];
		  
		  $query="select * from admin where User='$userid' and Password='$password'";
		  
		  $fet=mysqli_query($conn,$query);
		  //no fo rows cout 
		  $count=mysqli_num_rows($fet);
		  
		  if($count == 1)
		  {
                 echo "alert('login')";
			      $rr=mysqli_fetch_array($fet);
                  $_SESSION['username'] = $userid;
                  if(isset($_SESSION['username'])){

                    //   header("location:index.php");
                      header("location:dashboard.php");
                  }
          }else{
             header("Location: login.php?error=Incorect User name or password");
          }
}else{

}
?>


<!--
Author: W3layouts
Author URL: http://w3layouts.com
-->
<!DOCTYPE html>
<html lang="en">

<head>
    <?php include "link.php" ?>
</head>


<body>
    <div class="bg-page">
        <div class="container1">
            <!-- code pastes hwew -->

            <section class="vh-100">
                <div class="container-fluid h-custom">
                    <div class="row d-flex justify-content-center align-items-center h-100">
                        <div class="col-md-9 col-lg-6 col-xl-5">
                            <img src="./images/1.jpg"
                                class="img-fluid" alt="Sample image">
                        </div>
                        <div class="mt-3 col-md-8 col-lg-6 col-xl-4 offset-xl-1">
                            <form method="post" action="login.php">
                                <div
                                    class="d-flex flex-row align-items-center justify-content-center justify-content-lg-start">
                                    <p class="lead fw-normal mb-0 me-3">Sign in with</p>
                                    <button type="button" class="btn btn-primary btn-floating mx-1">
                                        <i class="fab fa-facebook-f"></i>
                                    </button>

                                    <button type="button" class="btn btn-primary btn-floating mx-1">
                                        <i class="fab fa-twitter"></i>
                                    </button>

                                    <button  type="button" class="btn btn-primary btn-floating mx-1">
                                        <i class="fab fa-linkedin-in"></i>
                                    </button>
                                </div>

                                <div class="divider d-flex align-items-center my-4">
                                    <p class="text-center fw-bold mx-3 mb-0">Or</p>
                                </div>

                                <!-- Email input -->
                                <div class="form-outline mb-4">
                                    <input name="user_id" type="email" id="form3Example3" class="form-control form-control-lg"SS
                                        placeholder="Enter a valid email address" />
                                    <label class="form-label" for="form3Example3">Email address</label>
                                </div>

                                <!-- Password input -->
                                <div class="form-outline mb-3">
                                    <input name="pass" type="password" id="form3Example4" class="form-control form-control-lg"
                                        placeholder="Enter password" />
                                    <label class="form-label" for="form3Example4">Password</label>
                                </div>

                                <div class="d-flex justify-content-between align-items-center">
                                    <!-- Checkbox -->
                                    <div class="form-check mb-0">
                                        <input style="height:15px"class="form-check-input me-2" type="checkbox" value=""
                                            id="form2Example3" />
                                        <label  class="form-check-label" for="form2Example3">
                                            Remember me
                                        </label>
                                    </div>
                                    <a href="forgot.php" class="text-body">Forgot password?</a>
                                </div>

                                <div class="text-center text-lg-start mt-4 pt-2">
                                    <button name="login" type="submit" class="btn btn-primary btn-lg"
                                        style="padding-left: 2.5rem; padding-right: 2.5rem;">Login</button>
                                    <p class="small fw-bold mt-2 pt-1 mb-0">Don't have an account? <a href="register.php"
                                            class="link-danger">Register</a></p>
                                </div>

                            </form>
                            <h1 class="paragraph-agileits-w3layouts mt-2">
        <!-- <a href="index.php">Back to Home</a> -->
    </h1>
                        </div>
                    </div>
                </div>
                
            </section>

           
        </div>
    </div>


    <!-- Required common Js -->
    <script src='js/jquery-2.2.3.min.js'></script>
    <!-- //Required common Js -->

    <!-- Js for bootstrap working-->
    <script src="js/bootstrap.min.js"></script>
    <!-- //Js for bootstrap working -->

</body>

</html>