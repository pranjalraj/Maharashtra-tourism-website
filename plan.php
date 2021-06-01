<?php 

$servername = "travel";
$username = "root";
$password = "";
$conn = new mysqli('localhost', $username, $password,$servername) or die("Unable to connect");
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 


                if(array_key_exists('submit', $_POST)){
                    $month = $_POST['month'];
                    $days = $_POST['days'];
                    $start= $_POST['city'];
                    $theme = $_POST['theme'];

                }


$sql = "SELECT * FROM trip WHERE start='" .$start. "'";

$result = $conn->query($sql);

               
?>


<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Welcome to MAHARASHTRA Tourism </title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link href="css/owl.carousel.min.css" rel="stylesheet">
    <link href="css/owl.theme.default.min.css" rel="stylesheet">
    <link href="css/jquery.simpleTicker.css" rel="stylesheet">
    <link href="css/jquery-ui.css" rel="stylesheet">
    <link href="css/rvslider.min.css" rel="stylesheet">
    <link href="css/animate.css" rel="stylesheet">
    <link href="css/font-awesome.css" rel="stylesheet">
    <link href="css/anitabs.css" rel="stylesheet">


    <link href="css/responsive.css" rel="stylesheet">
    <link href="css/styleplan.css" rel="stylesheet">
<style>
    .title{
        font-size: 2.5em;
        color: white;
    }
    .plancard{
        
        display: block;
        margin: 20px auto;
        border: 2px solid black;
        border-radius: 12px;
        box-shadow: 2px 2px 10px #302720, 2px 4px 10px #302720, 4px 2px 10px #302720, 4px 4px 10px #302720;
        padding: 20px;
        height: max-content;
        width: 60vw;
        background-color: #594233;
        color: white;
    }
    #planhead{

        color:#f7d97e;
        font-size: 1.5em;
        font-weight: 400;
        margin: 5px;
        margin-left: 20vw;
    }
    #plancon{

        font-size: 1.5em;
        margin-left: 20px;


    }
    .details{
        font-size: 1.7em;
    }
</style>

</head>

<body>
    <!-- ====================header section start====================== -->
    <header class="header ">
        <nav class="custom-navbar">
            <a class="navbar-brand" href="index.php">
                <img src="images/logo.png" alt="logo">
            </a>
            <button class="menu-icon" type="button">
            <img src="images/menu-icon.png">
          </button>
            <div class="collapse-menu">
                <div class="close-rt-pnl"><i class="fa fa-times" aria-hidden="true"></i></div>
                <ul class="navbar-menu">
                    <li class="nav-item">
                        <a class="nav-link" href="all.php">Explore <span class="sr-only">(current)</span>
                <span><i class="fa fa-angle-right" aria-hidden="true"></i></span>
                </a>

                        <div class="multi-drodown">
                            <div class="row">
                                <div class="col-sm-3">
                                    <h3>Religion & Temples </h3>
                                    <ul class="multi-list">
                                        <li><a href="siddhivinayak.php" class="submenulinks">Siddhivinayak Temple</a></li>
                                        <li><a href="bhimashankar.php" class="submenulinks">Bhimashankar Temple</a></li>
                                        <li><a href="#" class="submenulinks">Haji Ali Dargah</a></li>
                                        <li><a href="#" class="submenulinks">Mount Mary Church</a></li>
                                        <li><a href="d#" class="submenulinks">Mahalakshmi</a></li>
                                        <li><a href="#" class="submenulinks">Shirdi Saibaba</a></li>
                                        <li><a href="d#" class="submenulinks">Shani Shinganapur</a></li>
                                        <li><a href="#" class="submenulinks">Trimbakeshwar</a></li>
                                        <li><a href="#" class="submenulinks">PandharpurTrimbakeshwar</a></li>
                                        <li><a href="#" class="submenulinks">Paithan</a></li>
                                    </ul>
                                    <a href="all.php" class="drp-read-btn submenulinks viewall">View All</a>
                                </div>
                                <div class="col-sm-3">
                                    <h3>Forts</h3>
                                    <ul class="multi-list">
                                        <li><a href="Sindhudurg.php" class="submenulinks">Sindhudurg</a></li>
                                        <li><a href="#" class="submenulinks">Shivneri</a></li>
                                        <li><a href="#" class="submenulinks">Daulatabad (Devgiri)</a></li>
                                        <li><a href="#php" class="submenulinks">Rajmachi</a></li>
                                        <li><a href="#php" class="submenulinks">Vasai</a></li>
                                        <li><a href="#" class="submenulinks">Talgad</a></li>
                                        <li><a href="#php" class="submenulinks">Chandarpur</a></li>
                                        <li><a href="#php" class="submenulinks">Pratapgad</a></li>

                                    </ul>
                                    <a href="all.php" class="drp-read-btn submenulinks viewall">View All</a>
                                </div>
                                <div class="col-sm-3">
                                    <h3>Heritage</h3>
                                    <ul class="multi-list">
                                        <li><a href="bhimashankar.php" class="submenulinks">Bhimashankar</a></li>
                                        <li><a href="" class="submenulinks">Lonar Crater</a></li>
                                        <li><a href="" class="submenulinks">Elephanta</a></li>
                                        <li><a href="" class="submenulinks">Ellora</a></li>
                                        <li><a href="" class="submenulinks">Ajanta</a></li>
                                        <li><a href="" class="submenulinks">Aga Khan Palace</a></li>
                                        <li><a href="" class="submenulinks">Kaas Pathar</a></li>
                                        <li><a href="" class="submenulinks">Chhatrapati Shivaji Terminus</a></li>
                                    </ul>
                                    <a href="all.php" class="drp-read-btn submenulinks viewall">View All</a>
                                </div>
                                <div class="col-sm-3">
                                    <h3>Wildlife</h3>
                                    <ul class="multi-list">
                                        <li><a href="tadoba.php" class="submenulinks">Tadoba Andhari Tiger</a></li>
                                        <li><a href="" class="submenulinks">Chikkaldara</a></li>
                                        <li><a href="" class="submenulinks">The Pench-The Pandit</a></li>
                                        <li><a href="" class="submenulinks">Karnala Bird Sanctuary</a></li>
                                        <li><a href="" class="submenulinks">Melghat Tiger Reserve</a></li>
                                        <li><a href="" class="submenulinks">Tipeshwar</a></li>
                                        <li><a href="" class="submenulinks">Rehekuri Blackbuck</a></li>
                                        <li><a href="" class="submenulinks">Sagreshwar</a></li>
                                    </ul>
                                    <a href="all.php" class="drp-read-btn submenulinks viewall">View All</a>
                                </div>
                            </div>

                        </div>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Experiences
                  <span><i class="fa fa-angle-right" aria-hidden="true"></i></span>
               </a>
                        <div class="multi-drodown single_sub_menu">
                            <div class="row">
                                <div class="col-sm-12">
                                    <ul class="multi-list">
                                        <li><a href="adventure/adventure.html">Adventure</a></li>
                                        <li><a href="culture.php">Culture</a></li>
                                        <li><a href="cuisine.php">Cuisines</a></li>
                                        <li><a href="festival.php">Festivals and Events</a></li>
                                    </ul>
                                </div>

                            </div>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="plan.php">Plan your Itinerary
                <span><i class="fa fa-angle-right" aria-hidden="true"></i></span>
                </a>
                        <div class="multi-drodown planning_sub_menu">
                            <div class="row">
                                <div class="col-sm-12">
                                    <ul class="multi-list">
                                        <li><a href="plan.php">Itineraries</a></li>
                                    </ul>
                                </div>

                            </div>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="">Blogs</a>
                    </li>
                    <li class="nav-item search-item">
                        <a class="nav-link" href="#"><i class="fa fa-search" aria-hidden="true"></i>Search</a>
                    </li>
                    <li class="nav-item loginmenudesktop">
                        <a class="nav-link" href="#"><i class="fa fa-user" aria-hidden="true"></i></a>
                        <div class="multi-drodown account_sub_menu">
                            <div class="row">
                                <div class="col-sm-12">
                                    <ul class="multi-list">

                                        <li><a href="login.php">Members Login</a></li>
                                        <li><a href="signup.php">New User? Register</a></li>
                                    </ul>
                                </div>

                            </div>
                    </li>
                    <li class="nav-item loginmenumobile">
                        <a class="nav-link" href="login.php">Members Login</a>
                    </li>
                </ul>
                </div>
        </nav>
    </header>
    <!-- ====================header section end====================== -->
    <!-- ====================search popup  start====================== -->
    <div class="serch-pop">
        <div class="close-pop">
            <span></span>
            <span></span>
        </div>
        <div class="ser-input">
            <form action="search.php" method="post">
                <input type="text" class="form-control" placeholder="Enter a search term" id="keyword" name="keyword">
                <button class="ser-triger" type="submit">Search <i class="fa fa-long-arrow-right" aria-hidden="true"></i></button>
            </form>
        </div>
    </div>





    <!--Banner-->
    <section class="hero">
        <div class="bkg-img" style="background-image:url('images/mhplan1.jpg');background-image-size: 100px;"></div>
        <div class="hero-content">
            <h1 style="color:black;">SUGGESTED TRIP</h1>
        </div>
    </section>

    <!-- ====================Plan start========================-->



<div class="plancard">
<?php
 if ($result->num_rows > 0) {
                // output data of each row
                while($row = $result->fetch_assoc()) {

                    echo "<div class='title'>".$row['Title']."</div>";
                    echo "<div class='city'><span id='planhead' >Starting City : </span><span id='plancon'>".$row['start']."</div>";
                    echo "<div class='month'><span id='planhead' >Month &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;: </span><span id='plancon'>".$month."</span></div>";
                    echo "<div class='day'><span id='planhead' >Days &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;: </span><span id='plancon'>".$days."</span></div>";
                    echo "<div class='theme'><span id='planhead' >Theme &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;: </span><span id='plancon'>".$theme."</span></div>";
                    echo "<br>";
                    echo "<div class='details'>".$row['detail']."</div>";


                    #echo "City: ".$row["start"]."; Theme: " .$row["theme"]. "; Details: " . $row["detail"]. "<br>";
                }
                }
?>

</div>


    <!-- ====================Footer section start====================== -->
  <footer class="footer" >
        <div class="row">
            <div class="col-sm-3">
                <div class="footer-item">
                    <div class="footer-logo">
                        <img src="images/footer-logo.png">
                    </div>
                    <h2 class="footer-abo"></h2>
                </div>
            </div>
            <div class="col-sm-9">



                <div class="row">
                    <div class="col-sm-5">
                        <div class="footer-item">

                            <div class="row">
                                <div class="col-sm-12" style="visibility:hidden;">
                                    <ul class="footer-social" style=" margin: 20px; ">
                                        <li><a href="https://www.facebook.com"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                                        <li><a href="https://twitter.com"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                                        <li><a href="https://www.instagram.com"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
                                        <li><a href="https://www.youtube.com"><i class="fa fa-youtube-play" aria-hidden="true"></i></a></li>
                                    </ul>
                                </div>
                                <div class="col-sm-6">
                                    <div class="address quick-links1">


                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="address quick-links1">
                                        <p><strong>Quick Links</strong></p>
                                        <p><a href="all.php">Explore Destinations </a></p>
                                        <p><a href="adventure/adventure.html">Adventure</a></p>
                                        <p><a href="culture.php">Culture</a></p>
                                        <p><a href="cuisine.php">Cuisine</a></p>
                                        <p><a href="festival.php">Festivals and Events</a></p>

                                    </div>
                                </div>
                            </div>

                        </div>


                    </div>
                    <div class="col-sm-7">
                        <div class="footer-item">
                            <div class="row">
                                <div class="col-sm-12" style="visibility:hidden;">
                                    <ul class="footer-social" style=" margin: 20px; ">
                                        <li><a href="https://www.facebook.com/MaharashtraTourism"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                                        <li><a href="https://twitter.com/MaharashtraTourism"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                                        <li><a href="https://www.instagram.com/maharashtratourism/"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
                                        <li><a href="https://www.youtube.com/user/maharashtratourism"><i class="fa fa-youtube-play" aria-hidden="true"></i></a></li>
                                    </ul>
                                </div>
                                <div class="col-sm-6">
                                    <div class="address">
                                        <p><strong>Help & Support</strong></p>
                                        <p>1800-233-7777 (10:00 AM to 7:00 PM)</p>
                                        <p> (Second Saturday, Third Saturday & All Sunday Off)</p>
                                        <p>support@mahartashtratourism.com</p>
                                        <ul class="footer-social">
                                            <li><a href="https://www.facebook.com"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                                            <li><a href="https://twitter.com"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                                            <li><a href="https://www.instagram.com"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
                                            <li><a href="https://www.youtube.com"><i class="fa fa-youtube-play" aria-hidden="true"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>

                    <div class="col-sm-12 ">
                        <p class="copyright"> Maharashtra Tourism Project by Pranjal Raj and Aparna Sahu |
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- ====================Footer section end====================== -->

    <script src="js/jquery-2.1.0.js"></script>
    <script src="js/jquery-ui.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/jquery.nice-select.min.js"></script>
    <script src="js/jquery.simpleTicker.js"></script>
    <script src="js/scrolla.jquery.min.js"></script>
    <script src="js/rvslider.min.js"></script>
    <script src="js/anitabs.min.js"></script>
    <script src="js/modernizr.js"></script>
    <script src="js/main.js"></script>

</body>

</html>