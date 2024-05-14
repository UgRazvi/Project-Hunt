<?php
    // include "student_common.php";
    include "connect.php";

    $q="SELECT * FROM `student-profile`";

    // echo ("\n\n Student Insert Query - (q) : $q \n\n");


    $rs=mysqli_query($con,$q);
    $t=mysqli_num_rows($rs);
    if($t==0)
        echo "<script>alert('No Record Found ')</script>";
    else
    {
        echo "<center><table class='tab wrepper'><thead class='head'>";
        echo "<tr><th>Full Name";
        echo "<th>Branch";
        echo "<th>Skills";
        echo "<th>Contact";
        echo "<th>E-Mail";
        echo "<th>Address";
        echo "<th>Student Photo ";
        echo "<th>Description";
        while($r=mysqli_fetch_array($rs))
        {
            echo "<tbody class='fix'><tr><td> $r[0] $r[1]";
            // echo "<td> $r[1]";
            echo "<td> $r[2]";
            echo "<td> $r[3]";
            echo "<td> $r[4]";
            echo "<td> $r[5]";
            echo "<td> $r[6]";
            echo "<td><img src='$r[7]' style='border-radius:50%; height:100px; width:100px'>";
            echo "<td> $r[8]";
        }
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>All Student</title>
    <style>
        .tab{
        border: 1px inset #ccc;
        background-color: whitesmoke;
        width: 1200px;
        margin-top: 30px;
        text-align: center;
      }  
      .tab tr td{
        width: calc(10%);
        padding-top: 20px !important;
        padding: 10px;
      }
      .head{
        border: 1px inset #ccc;
        height: 100px;
      }
      /* .wrepper{
        margin-top: 220px;
      }
       */
    </style>
</head>
<body>
    
</body>
</html>