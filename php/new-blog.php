<!--                                          -->

<?php

         
    // check session
    // session_start();
    // if(!isset($_SESSION['username'])){
    //     header("location:login.php");
    // }
    // check session


include("./database.php");

// Check connection
if ($conn === false) {
    die("ERROR: Could not connect. "
        . mysqli_connect_error());
}


// Taking all 4 values from the form data(input)

$typ = "";
$siz = "";
$src = "";
$dst = "";


$Titile = "";
$Message = "";
$Description ="";
$Author ="";

if (isset($_POST['submit-btn'])) {

   
    $Title = $_POST['title'];
    $Description = $_POST['description'];
    $Author = $_POST['author'];
  

    // Usman Image Upload

    $typ = $_FILES["image"]["type"];
    $siz = $_FILES["image"]["size"];

    // echo "<br> File Type is : $typ <br>";
    // echo "<br> File Size is : $siz <br>";

    $src = $_FILES["image"]["tmp_name"];
    $dst = $_FILES["image"]["name"];


    if ($typ == 'image/jpeg' || $typ == 'image/png' || $typ == 'image/jpeg') {
        if (move_uploaded_file($src, "images/$dst")) {
            echo "<script>alert('Upload Successfully')</script>";
        } else {
            echo "<script>Uploading Error</script>";
        }
    } 

    // Performing insert query execution
    $sql = "INSERT INTO `blog`(`title`, `author`,`description`, `file_name`, `status`) VALUES ('$Title','$Author','$Description', '$dst','1')";

    if (mysqli_query($conn, $sql)) {

        echo "<br>. Your Query : $sql.<br>"; 
        // echo "<script>alert('Successfully save your activities')</script>";

        header("location:view-blog.php");  
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
</head>


<body>

    <!-- <div class="se-pre-con"></div> -->

    <div class="wrapper">
        <!-- Sidebar Holder -->
        <?php include "sidebar.php" ?>

        <!-- Page Content Holder -->
        <div id="content">
            <!-- top-bar -->
            <?php include "navbar.php" ?>
            <!--// top-bar -->

            <!-- add activities  -->
            <div class="addActivitiesContainer">

                
                <!-- Pills content -->
                <div class="tab-content">

                    <form action="new-blog.php" method="POST" enctype="multipart/form-data">
                        <h2 class="form-div my-3 " style="text-align: center">Add New Blog</h2 style="text-align: center ">
                        
                        <div class="thirdRow row">
                            <label for="formFileMultiple" class="pl-2 form-label"></label>
                            <input  style="margin-left: 17px;" name="image" class="form-control" type="file" id="formFileMultiple"  />
                        </div>

                                            
                        <div className='thirdRow row'>
                            <label class="pl-2 form-label" for='exampleInputAuthor'></label>
                            <input value="tid"className="form-control" type="text" id="exampleInputAuthor" name="author" placeholder="Author Name"></input>
                        </div>

                        <div className='thirdRow row'>
                            <label class="pl-2 form-label" for='exampleInputTitile'></label>
                            <input className=" form-control" type="text" id="exampleInputTitile" name="title" placeholder="Your title"></input>
                        </div>
                        <div className='thirdRow row'>
                            <label class="pl-2 form-label" htmlFor='exampleInputTextarea'></label>
                            <textarea className="py-2 form-control" type="textarea" id='exampleInputTextarea' rows="8" name="description" minLength={1} rows="7" placeholder="Blog Details" cols="80"></textarea>
                        </div>
                        


                        <!-- Submit button -->
                        <button type="submit" class="btn btn-primary btn-block mb-3" name="submit-btn">Add Blog</button>
                    </form>
                </div>
                <!-- Pills content -->
            </div>
            <!-- add activities  -->



            <!-- Copyright -->
            <?php include "footer.php" ?>
            <!--// Copyright -->
        </div>
    </div>

    <!-- Required common Js -->
    <script src='js/jquery-2.2.3.min.js'></script>
    <!-- //Required common Js -->

    <!-- loading-gif Js -->
    <script src="js/modernizr.js"></script>
    <script>
        //paste this code under head tag or in a seperate js file.
        // Wait for window load
        $(window).load(function() {
            // Animate loader off screen
            $(".se-pre-con").fadeOut("slow");;
        });
    </script>
    <!--// loading-gif Js -->

    <!-- Sidebar-nav Js -->
    <script>
        $(document).ready(function() {
            $('#sidebarCollapse').on('click', function() {
                $('#sidebar').toggleClass('active');
            });
        });
    </script>
    <!--// Sidebar-nav Js -->

    <!-- Graph -->
    <script src="js/SimpleChart.js"></script>
    <script>
        var graphdata4 = {
            linecolor: "Random",
            title: "Thursday",
            values: [{
                    X: "6",
                    Y: 300.00
                },
                {
                    X: "7",
                    Y: 101.98
                },
                {
                    X: "8",
                    Y: 140.00
                },
                {
                    X: "9",
                    Y: 340.00
                },
                {
                    X: "10",
                    Y: 470.25
                },
                {
                    X: "11",
                    Y: 180.56
                },
                {
                    X: "12",
                    Y: 680.57
                },
                {
                    X: "13",
                    Y: 740.00
                },
                {
                    X: "14",
                    Y: 800.89
                },
                {
                    X: "15",
                    Y: 420.57
                },
                {
                    X: "16",
                    Y: 980.24
                },
                {
                    X: "17",
                    Y: 1080.00
                },
                {
                    X: "18",
                    Y: 140.24
                },
                {
                    X: "19",
                    Y: 140.58
                },
                {
                    X: "20",
                    Y: 110.54
                },
                {
                    X: "21",
                    Y: 480.00
                },
                {
                    X: "22",
                    Y: 580.00
                },
                {
                    X: "23",
                    Y: 340.89
                },
                {
                    X: "0",
                    Y: 100.26
                },
                {
                    X: "1",
                    Y: 1480.89
                },
                {
                    X: "2",
                    Y: 1380.87
                },
                {
                    X: "3",
                    Y: 1640.00
                },
                {
                    X: "4",
                    Y: 1700.00
                }
            ]
        };
        $(function() {
            $("#Hybridgraph").SimpleChart({
                ChartType: "Hybrid",
                toolwidth: "50",
                toolheight: "25",
                axiscolor: "#E6E6E6",
                textcolor: "#6E6E6E",
                showlegends: false,
                data: [graphdata4],
                legendsize: "140",
                legendposition: 'bottom',
                xaxislabel: 'Hours',
                title: 'Weekly Profit',
                yaxislabel: 'Profit in $'
            });
        });
    </script>
    <!--// Graph -->
    <!-- Bar-chart -->
    <script src="js/rumcaJS.js"></script>
    <script src="js/example.js"></script>
    <!--// Bar-chart -->
    <!-- Calender -->
    <script src="js/moment.min.js"></script>
    <script src="js/pignose.calender.js"></script>
    <script>
        //<![CDATA[
        $(function() {
            $('.calender').pignoseCalender({
                select: function(date, obj) {
                    obj.calender.parent().next().show().text('You selected ' +
                        (date[0] === null ? 'null' : date[0].format('YYYY-MM-DD')) +
                        '.');
                }
            });

            $('.multi-select-calender').pignoseCalender({
                multiple: true,
                select: function(date, obj) {
                    obj.calender.parent().next().show().text('You selected ' +
                        (date[0] === null ? 'null' : date[0].format('YYYY-MM-DD')) +
                        '~' +
                        (date[1] === null ? 'null' : date[1].format('YYYY-MM-DD')) +
                        '.');
                }
            });
        });
        //]]>
    </script>
    <!--// Calender -->

    <!-- profile-widget-dropdown js-->
    <script src="js/script.js"></script>
    <!--// profile-widget-dropdown js-->

    <!-- Count-down -->
    <script src="js/simplyCountdown.js"></script>
    <link href="css/simplyCountdown.css" rel='stylesheet' type='text/css' />
    <script>
        var d = new Date();
        simplyCountdown('simply-countdown-custom', {
            year: d.getFullYear(),
            month: d.getMonth() + 2,
            day: 25
        });
    </script>
    <!--// Count-down -->

    <!-- pie-chart -->
    <script src='js/amcharts.js'></script>
    <script>
        var chart;
        var legend;

        var chartData = [{
                country: "Lithuania",
                value: 260
            },
            {
                country: "Ireland",
                value: 201
            },
            {
                country: "Germany",
                value: 65
            },
            {
                country: "Australia",
                value: 39
            },
            {
                country: "UK",
                value: 19
            },
            {
                country: "Latvia",
                value: 10
            }
        ];

        AmCharts.ready(function() {
            // PIE CHART
            chart = new AmCharts.AmPieChart();
            chart.dataProvider = chartData;
            chart.titleField = "country";
            chart.valueField = "value";
            chart.outlineColor = "";
            chart.outlineAlpha = 0.8;
            chart.outlineThickness = 2;
            // this makes the chart 3D
            chart.depth3D = 20;
            chart.angle = 30;

            // WRITE
            chart.write("chartdiv");
        });
    </script>
    <!--// pie-chart -->

    <!-- dropdown nav -->
    <script>
        $(document).ready(function() {
            $(".dropdown").hover(
                function() {
                    $('.dropdown-menu', this).stop(true, true).slideDown("fast");
                    $(this).toggleClass('open');
                },
                function() {
                    $('.dropdown-menu', this).stop(true, true).slideUp("fast");
                    $(this).toggleClass('open');
                }
            );
        });
    </script>
    <!-- //dropdown nav -->

    <!-- Js for bootstrap working-->
    <script src="js/bootstrap.min.js"></script>
    <!-- //Js for bootstrap working -->

    <!-- Sweet alert cdn  -->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <!-- Sweet alert cdn  -->

</body>

</html>