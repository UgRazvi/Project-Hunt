<?php



include("./database.php");

// Check connection
if ($conn === false) {
    die("ERROR: Could not connect. "
        . mysqli_connect_error());
}




$rowid = $_GET['id'];

$selectQuery = "SELECT * FROM `blog` WHERE `id` = '$rowid'";

$result = mysqli_query($conn, $selectQuery);
$row = mysqli_fetch_array($result);



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

        .single-blog-section{
            padding:78px;
            background-color: white
        }
        .sigle-blog-image {
            width: 100%;
             height: 405px
        }
        .sigle-blog-image > img{
             width: 100%;
             height: 100%;
             object-fit: cover;

        }

        .blog-title{
            font-weight: 900;
            font-weight: 900;
    font-size: 39px;
    width: 45%;
        }

        .blog-style-dot{
            -webkit-text-security: circle;
            font-size: 28px;
        }

        .peragraph-blog {
            border-top: 4px solid #e0e0e0 ;
        }
    </style>
</head>

<body>
    <section class="single-blog-section">
     <div class="blog-title my-4"><?php echo "".$row['title']."" ;?></div>

     <div class="blog-style-dot my-2">Life is a beautifulll jounary</div>

     <div class="sigle-blog-image">
        <img src='<?php echo "./images/".$row['file_name']."" ;?> 'alt="">
        <!-- <img src="./images/Business_Card_Mockup_2-605x563.jpg" alt=""> -->
     </div>

     <h4 class="my-3">Post Details</h4>

     <p class="text-secondary">Published by <?php echo "".$row['author'].", ".$row['current_date']." " ;?></p>

     <div class="peragraph-blog py-4 my-4">
     <?php echo "".$row['description']."" ;?>
     </div>
    </section>
</body>

</html>