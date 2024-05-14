<?php

// LOGIN validation
// session_start();
// if(!isset($_SESSION['username'])){
//     header("location:login.php");
// }

// include("./database.php");

// Check connection
// if ($conn === false) {
//     die("ERROR: Could not connect. "
//         . mysqli_connect_error());
// }




// $selectQuery = "SELECT * FROM `blog`";
// $result = mysqli_query($conn, $selectQuery);
// if (mysqli_num_rows($result) > 0) {
// } else {
//     $msg = "No Record found";
// }




// Close connection
// mysqli_close($conn);
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <?php include "link.php" ?>
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&amp;display=swap" rel="stylesheet">

    <style>
        * {
            padding: 0px;
            margin: 0px;
        }

        section.blog-section {
            /* background-image: linear-gradient(to left, #1294e0, #47f2ff78); */
            background-color: white;

        }

        .blog-card {
            width: 369px;
            margin: 10px;
            /* box-shadow: 0 0 14px #80808045; */
            transition: all 0.5s ease-in-out;

        }

        .blog-card:hover .blog-img>img {
            transform: scale(1.3);
        }

        .blog-card:hover {
            transform: translateY(-10px);
            box-shadow: 0 0 14px #80808045;

        }

        .cardgroup {
            display: flex;
            flex-wrap: wrap;
            align-items: center;
            justify-content: center;
        }

        .blog-img {
            width: 100%;
            height: 300px;
            overflow: hidden;

        }

        .blog-img>img {
            width: 100%;
            height: 100%;
            transition: all 0.5s ease-in-out;
        }

        .btn-readmore {
            background-color: #1294e0;
            color: white;
            padding: 7px;
            border-radius: 3px;
            border: none;
            font-size: 14px;
        }

        .btn-readmore:hover {
            background-color: #1294e0b5;

        }

        /* Style Starts */
        .hero-section {
            background-image: url(images/hero-image.jpg);
            background-position: center;
            background-size: cover;
            height: 400px;
            color: white;
        }

        .hero-section h1 {
            font-size: 40px;
            font-weight: bold;
        }

        .hero-section p {
            font-size: 20px;
            line-height: 30px;
        }

        .about-section {
            padding: 50px 0;
        }

        .about-section h2 {
            font-size: 30px;
            font-weight: bold;
        }

        .about-section p {
            font-size: 16px;
            line-height: 24px;
        }

        .products-or-services-section {
            padding: 50px 0;
        }

        .products-or-services-section h2 {
            font-size: 30px;
            font-weight: bold;
        }

        .products-or-services-section ul {
            list-style-type: none;
            padding: 0;
        }

        .products-or-services-section li {
            margin-bottom: 20px;
        }

        .products-or-services-section li img {
            width: 200px;
            height: 200px;
            object-fit: cover;
        }


        .testimonials-section {
            padding: 50px 0;
        }

        .testimonials-section h2 {
            font-size: 30px;
            font-weight: bold;
        }

        .testimonials-section ul {
            list-style-type: none;
            padding: 0;
        }

        .testimonials-section li {
            margin-bottom: 20px;
        }

        .testimonials-section li img {
            width: 100px;
            height: 100px;
            object-fit: cover;
        }


        .call-to-action-section {
            padding: 50px 0;
        }

        .call-to-action-section h2 {
            font-size: 30px;
            font-weight: bold;
        }

        .call-to-action-section button {
            background-color: #1294e0;
            color: white;
            padding: 15px 30px;
            border-radius: 5px;
            font-size: 16px;
            font-weight: bold;
        }

        .call-to-action-section button:hover {
            background-color: #1294e0b5;
        }

        /* Style Ends */

        /* Style - 2 */


        /* CSS styling */
        body {
            margin: 0;
            padding: 0;
            font-family: 'Roboto', sans-serif;
        }

        .header {
            background-color: #F44336;
            width: 100%;
        }

        .header h1 {
            color: white;
            padding: 10px 20px;
            margin: 0;
        }

        .menu {
            background-color: #EEEEEE;
            padding: 10px;
            display: flex;
            justify-content: space-between;
        }

        .menu a {
            color: #333333;
            text-decoration: none;
            padding: 8px;
        }

        .hero {
            background-color: #FF9800;
            padding: 80px 20px;
            text-align: center;
        }

        .hero h2 {
            color: white;
            font-size: 32px;
            margin: 0;
            padding: 10px;
        }

        .hero p {
            color: white;
            font-size: 18px;
            margin: 0;
            padding: 10px;
        }

        .features {
            background-color: #EEEEEE;
            padding: 40px;
            display: flex;
            justify-content: space-between;
        }

        .features .feature {
            width: 30%;
            text-align: center;
        }

        .features .feature img {
            width: 100px;
            height: 100px;
        }

        .cta {
            background-color: #1294e0;
            padding: 80px 20px;
            text-align: center;
        }

        .cta h2 {
            color: white;
            font-size: 32px;
            margin: 0;
            padding: 10px;
        }

        .cta p {
            color: white;
            font-size: 18px;
            margin: 0;
            padding: 10px;
        }

        .contact-form {
            background-color: #EEEEEE;
            padding: 40px;
            text-align: center;
        }

        .contact-form input[type=text],
        .contact-form input[type=email],
        .contact-form textarea {
            width: 100%;
            padding: 10px;
            margin-bottom: 20px;
            border: none;
        }

        .contact-form button {
            background-color: #F44336;
            color: white;
            padding: 10px 30px;
            border: none;
            cursor: pointer;
        }

        .description {
            background-color: #FFFFFF;
            padding: 40px;
        }

        .description h2 {
            font-size: 32px;
            margin: 0;
            padding: 10px;
        }

        .description p {
            font-size: 18px;
            margin: 0;
            padding: 10px;
        }

        .footer {
            background-color: #333333;
            color: white;
            text-align: center;
            padding: 20px;
        }
    </style>
</head>

<body>



    <section class="blog-section">
        <h2 class="py-3 text-white" style="text-align:center;background-image: linear-gradient(to left, #1294e0, #47f2ff78);">ABOUT</h2>

        <div class="cardgroup p-5">

            <!-- ABOUT SECTION STARTS -->

            <!-- ABOUT SECTION ENDS -->





            <!-- Footer -->

            <div class="header">
                <h1>
                    <!-- Dental Solutions -->
                </h1>
            </div>



            <div class="features">
                <div class="feature">
                    <img alt="Feature 1" src="https://api.img2html.com/api/getfile/eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXVCJ9.eyJlbWFpbCI6InVncmF6dmlAZ21haWwuY29tIiwiZmlsZW5hbWUiOiIwLmpwZyIsImV4cCI6MjMyOTAyMjQ3OH0.pdQP_u9-tvb3srGTOpkV00GK9s3a4sSLwRjN1Lg-LDo/0.jpg">
                    <h3>
                        Feature 1
                    </h3>
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                    </p>
                </div>
                <div class="feature">
                    <img alt="Feature 2" src="https://api.img2html.com/api/getfile/eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXVCJ9.eyJlbWFpbCI6InVncmF6dmlAZ21haWwuY29tIiwiZmlsZW5hbWUiOiIwLmpwZyIsImV4cCI6MjMyOTAyMjQ3OH0.pdQP_u9-tvb3srGTOpkV00GK9s3a4sSLwRjN1Lg-LDo/0.jpg">
                    <h3>
                        Feature 2
                    </h3>
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                    </p>
                </div>
                <div class="feature">
                    <img alt="Feature 3" src="https://api.img2html.com/api/getfile/eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXVCJ9.eyJlbWFpbCI6InVncmF6dmlAZ21haWwuY29tIiwiZmlsZW5hbWUiOiIwLmpwZyIsImV4cCI6MjMyOTAyMjQ3OH0.pdQP_u9-tvb3srGTOpkV00GK9s3a4sSLwRjN1Lg-LDo/0.jpg">
                    <h3>
                        Feature 3
                    </h3>
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                    </p>
                </div>
            </div>
            <div class="cta mt-5">
                <h2>
                    Book your appointment today!
                </h2>
                <p>
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed fringilla tortor id metus convallis, ac volutpat elit varius.
                </p>
               <button class="btn btn-dark"> <a href="appointment.php">Book Apppointment</a> </button>
            </div>

            <!-- 
            <div class="contact-form">
                <h2>
                    Contact us
                </h2>
                <form>
                    <input placeholder="Name" required="" type="text">
                    <input placeholder="Email" required="" type="email">
                    <textarea placeholder="Message" required=""></textarea>
                    <button type="submit">
                        Send Message
                    </button>
                </form>
            </div> -
            ->

            <div class="description">
                <h2>
                    About Dental Solutions
                </h2>
                <p>
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed fringilla tortor id metus convallis, ac volutpat elit varius. Mauris non risus ut odio finibus euismod a in dolor. Aliquam erat volutpat. Etiam congue pulvinar ullamcorper. Donec vulputate efficitur ante at tincidunt. Cras at ligula in felis pulvinar auctor. Phasellus eget sem at dui tempor aliquam blandit at ex. Nunc justo mauris, vulputate a metus ut, interdum sollicitudin lacus. Donec nulla velit, rhoncus ac ornare a, tempus vel ex. Vivamus consectetur ipsum id quam auctor, id vehicula nisl consectetur. Nam id vulputate lectus, ut iaculis risus. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia curae;
                </p>
            </div>

        </div>
    </section>
    <div class="footer">
       
        </div>
        <script>
            // JavaScript functionality (if required)
        </script>


</body>

</html>c