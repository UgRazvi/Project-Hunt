<?php

// LOGIN validation
// session_start();
// if(!isset($_SESSION['username'])){
//     header("location:login.php");
// }

include("./database.php");

// Check connection
if ($conn === false) {
    die("ERROR: Could not connect. "
        . mysqli_connect_error());
}




$selectQuery = "SELECT * FROM `service`";
$result = mysqli_query($conn, $selectQuery);
if (mysqli_num_rows($result) > 0) {
} else {
    $msg = "No Record found";
}




// Close connection
mysqli_close($conn);
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <?php include "link.php" ?>

    <style>
        * {
            padding: 0px;
            margin: 0px;
        }

        section.service-section {
            /* background-image: linear-gradient(to left, #1294e0, #47f2ff78); */
            background-color: white;

        }

        .service-card {
            width: 369px;
            margin: 10px;
            /* box-shadow: 0 0 14px #80808045; */
            transition: all 0.5s ease-in-out;

        }

        .service-card:hover .service-img>img {
            transform: scale(1.3);
        }

        .service-card:hover {
            transform: translateY(-10px);
            box-shadow: 0 0 14px #80808045;

        }

        .cardgroup {
            display: flex;
            flex-wrap: wrap;
            align-items: center;
            justify-content: center;
        }

        .service-img {
            width: 100%;
            height: 300px;
            overflow: hidden;

        }

        .service-img>img {
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
    </style>
</head>

<body>

<!-- QUERY : INSERT INTO `service`(`id`, `file_name`, `title`, `author`, `description`, `current_date`, `status`) VALUES ('1','img1','Web Development','Usman Qureshi','WEb Development On Demand','We have a team to help in yoou Web Development Project','1')
 -->

    <section class="service-section">
        <h2 class="py-3 text-white" style="text-align:center;background-image: linear-gradient(to left, #1294e0, #47f2ff78);">SERVICES</h2>

        <div class="cardgroup p-5">

            <?php while ($row = mysqli_fetch_assoc($result)) {
                echo "
                <div class='service-card'>
                    <div class='service-img'>
                        <img src='../images/" . $row["file_name"] . "' alt=''>
                    </div>
                    <div class='p-2 service-details'>
                        <h6 class='py-1 ' style='color:#6c757d75'>26 june 2023</h6>
                        <h5 class='py-2'>" . $row["title"] . "</h5>
                        <p class='py-1' style='color:#6c757dd6;-webkit-box-orient: vertical;
                        -webkit-line-clamp: 5;
                        overflow: hidden;
                        display: -webkit-box;'>" . $row["description"] . "</p>
    
                        <a href='single-service-page.php?id=" . $row["id"] . "'><button type='button' class='btn-readmore'>Read More</button></a>
                    </div>
                </div>
                ";
            } ?>


        </div>
    </section>
</body>

</html>