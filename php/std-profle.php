<?php

// PHP STARTS
include "connect.php";

if (isset($_POST['btn'])) {

    // $sid = $_POST['sid'];

    $sfname = $_POST['fname'];
    $slname = $_POST['lname'];
    $sbranch = $_POST['branch'];
    $sskills = $_POST['skills'];
    $scontact = $_POST['contact'];
    $semail = $_POST['email'];
    $saddress = $_POST['address'];
    $sdesc = $_POST['desc'];


    // PHOTO - SUBMISSION - CODE {Start}

    $source = $_FILES['sphoto']['tmp_name'];
    $destination = '../images./' . $_FILES['sphoto']['name'];

    if (move_uploaded_file($source, $destination)) {
        $sphoto = (move_uploaded_file($source, $destination));
    } else {
        echo "<script>alert('Unable To Upload Image')</script>";
    }

    // PHOTO - SUBMISSION - CODE {Start}



    $q = "INSERT INTO `student-profile`(`sfame`, `slname`, `sbranch`, `sskils`, `scontact`, `semail`, `saddress`, `sphoto`, `sdesc`) VALUES ('$sfname','$slname','$sbranch','$sskills','$scontact','$semail','$saddress','$destination', '$sdesc')";

    // echo ("\n\n Student Insert Query - (q) : $q \n\n");

    if (mysqli_query($con, $q))
        echo "<script>alert('Data Inserted SuccessFully')</script>";
    else
        echo "<script>alert('Something Went Wrong')</script>";
}

// else {
//     $id = '';
//     $q = "select sid from student";

//      echo ("Student Select Query - (q) : $q");

//     $rs = mysqli_query($con, $q);
//     while ($r = mysqli_fetch_array($rs))
//         $id = $r[0];

//     $id = $id + 1;
// }


// PHP ENDS
?>



<!DOCTYPE html>
<html>

<head>
    <style>
        * {
            box-sizing: border-box;
        }

        .container {
            width: 90%;
            justify-content: center;
            align-items: center;
        }

        input[type=text],
        input[type=email],
        input[type=contact],
        select,
        textarea {
            width: 100%;
            padding: 12px;
            border: 1px solid #ccc;
            border-radius: 4px;
            resize: vertical;
        }

        label {
            padding: 12px 12px 12px 0;
            display: inline-block;
        }

        input[type=submit] {
            background-color: #04AA6D;
            color: white;
            padding: 12px 20px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            float: right;
        }

        input[type=submit]:hover {
            background-color: #45a049;
        }

        .container {
            border-radius: 5px;
            background-color: #f2f2f2;
            padding: 20px;
        }

        .col-25 {
            float: left;
            width: 25%;
            margin-top: 6px;
        }

        .col-75 {
            float: left;
            width: 75%;
            margin-top: 6px;
        }

        /* Clear floats after the columns */
        .row::after {
            content: "";
            display: table;
            clear: both;
        }

        /* Responsive layout - when the screen is less than 600px wide, make the two columns stack on top of each other instead of next to each other */
        @media screen and (max-width: 600px) {

            .col-25,
            .col-75,
            input[type=submit] {
                width: 100%;
                margin-top: 0;
            }
        }
    </style>
</head>

<body>

    <div class="row">
        <div class="col-12">
            <button><a href="show-profile.php">SHow Student Pofile</a></button>
        </div>
    </div>

    <div class="wrapper" align="center">
        <div align="center" class="container">

            <h2>Responsive Form</h2>
            <p>Resize the browser window to see the effect. When the screen is less than 600px wide, make the two columns
                stack
                on top of each other instead of next to each other.</p>

            <div class="container">


                <form method="post" enctype="multipart/form-data">
                    <!-- <form action="/action_page.php"> -->
                    <div class="row">
                        <div class="col-25">
                            <label for="fname">First Name</label>
                        </div>
                        <div class="col-75">
                            <input type="text" id="fname" name="fname" placeholder="Your First Name">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-25">
                            <label for="lname">Last Name</label>
                        </div>
                        <div class="col-75">
                            <input type="text" id="lname" name="lname" placeholder="Your Last Name">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-25">
                            <label for="branch">Branch</label>
                        </div>
                        <div class="col-75">
                            <select id="branch" name="branch">
                                <option value="cse">CSE</option>
                                <option value="it">IT</option>
                                <option value="etc">ETC</option>
                            </select>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-25">
                            <label for="skills">Skills</label>
                        </div>
                        <div class="col-75">
                            <select id="skills" name="skills">
                                <option value="hcj">HTML, CSS, JS</option>
                                <option value="php">PHP</option>
                                <option value="dotnet">DOT NET</option>
                                <option value="python">Python</option>
                                <option value="java">Java</option>
                                <option value="c">C</option>
                                <option value="cpp">C++</option>
                                <option value="csharp">C#</option>
                            </select>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-25">
                            <label for="contact">Contact</label>
                        </div>
                        <div class="col-75">
                            <input type="text" id="contact" name="contact" placeholder="Your Contact">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-25">
                            <label for="email">E-mail</label>
                        </div>
                        <div class="col-75">
                            <input type="email" id="email" name="email" placeholder="Your E-mail">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-25">
                            <label for="address">Address</label>
                        </div>
                        <div class="col-75">
                            <input type="text" id="address" name="address" placeholder="Your Address">
                        </div>
                    </div>

                    <!-- Photo -->
                    <div class="row">
                        <div class="col-25">
                            <label for="sphoto">Your Image</label>
                        </div>
                        <div class="col-75">
                            <input type="file" name="sphoto" id="sphoto">
                        </div>
                    </div>
                    <!-- Photo -->

                    <div class="row">
                        <div class="col-25">
                            <label for="desc">Description</label>
                        </div>
                        <div class="col-75">
                            <textarea id="desc" name="desc" placeholder="Write something about yourself.." style="height:200px"></textarea>
                        </div>
                    </div>
                    <br>
                    <div class="row">
                        <input type="submit" value="Submit" name="btn">
                    </div>
                </form>
            </div>


        </div>
    </div>


</body>

</html>