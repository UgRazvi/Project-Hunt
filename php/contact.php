<?php

include("./database.php");


// Check connection
if ($conn === false) {
    die("ERROR: Could not connect. "
        . mysqli_connect_error());
}

$name = "";
$email = "";
$msg = "";


if (isset($_POST['submit-btn'])) {

    // Taking all 2 values from the form data(input)
    $name = $_REQUEST['name'];
    $email= $_REQUEST['email'];
    $msg = $_REQUEST['message'];
   

    // $sql = "INSERT INTO  cities VALUES ('$country', '$city')";
    $sql = "INSERT INTO `contact`(`name`, `email`, `message`, `status`) VALUES ('$name','$email','$msg','1')";

    if (mysqli_query($conn, $sql)) {

        echo "<br>. Your Query : $sql.<br>";
        // echo "<script>alert('Successfully save your activities')</script>";
        header("location:index.php");
    } else {
        echo "<script>alert('ERROR: Hush! Sorry')</script>";
    }
} else {
}

// Close connection
mysqli_close($conn);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <?php include "link.php" ?>
    <style>
        .contact-us-page {
            position: relative;
            height: 105vh;
            z-index: 0;
            padding: 105px 74px;

        }

        .contact-form {
            box-shadow: 0 0 14px #818484d1;
        }

        .contact-us-details-page {
            background-color: #362e2e;
            color: white;
            position: absolute;
            bottom: 0px;
            left: 185px;
            width: 80%;
        }

        .contact-img {
            position: relative;
        }
    </style>
</head>

<body>


    <section style=" background-image: linear-gradient(to left,#1294e0,#47f2ff78);" class=" row contact-us-page ">
        <div style=" background-color: white" class="contact-form col-lg-6 px-5 pb-4">
            <h3 style="text-align: center" class="  p-4">Contact Us</h3>
            <form action="contact.php" method="POST" enctype="multipart/form-data">
                <div class='firstRow d-flex row'>
                    <div class="  px-1  ">

                        <input class="" type="text" id="exampleInputFname" name="name" placeholder="Enter your name"></input>
                    </div>


                </div>

                <div class='firstRow d-flex row'>
                    <div class="px-1 ">
                        <input class="" type="email" id="exampleInputcontact" name="email" placeholder="Enter a valid email address"></input>
                    </div>
                </div>
                <div class='firstRow d-flex row'>
                    <div class="px-1 ">
                        <textarea class="" type="text" id="exampleInputMsg" name="message" placeholder="Message"></textarea>
                    </div>
                </div>



                <button type="submit" class="btn btn-primary btn-block mb-3" name="submit-btn">Submit</button>
            </form>
        </div>
        <div class="contact-img col-lg-6">
            <img style="    position: absolute;
    width: 628px;
    height: 399px;
    left: -71px;
    top: -63px;
    z-index: -1;" src="../images/boyicon.png" alt="Contact Image"> 
    <!-- Usman : Add Contact Imnage Here -->
        </div>

        <div class="py-4 px-3 row contact-us-details-page">
            <div class="col-lg-4">
                <h4 style=" font-size: 16px;"> CALL US</h4>
                <p class="pt-2" style="font-size: 14px; color:gray">78787878</p>
                <p style="font-size: 15px; color:gray">78787878</p>

            </div>
            <div class="col-lg-4">
                <h4 style=" font-size: 16px;"> LOCATION</h4>
                <p class="py-2" style="font-size: 15px; color:gray">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Eveniet saepe quae.</p>

            </div>
            <div class="col-lg-4">
                <h4 style=" font-size: 16px;"> HOURS</h4>
                <p class="py-2" style="font-size: 15px; color:gray">Lorem ipsum dolor sit amet consectetur, adipisicing elit.
                </p>
            </div>
        </div>
    </section>



</body>

</html>