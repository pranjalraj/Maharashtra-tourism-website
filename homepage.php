<?php
 $cookie_name="new_user";
 $servername = "travel";
$username = "root";
$password = "";
$conn = new mysqli('localhost', $username, $password,$servername) or die("Unable to connect");
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
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
    <link href="css/style.css" rel="stylesheet">
    <link href="css/responsive.css" rel="stylesheet">

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
                        <a class="nav-link" href="index.html">Plan your Itinerary
				
				</a>
                       
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="http://www.padhaaro.com/blog/aamchi-maharashtra-surreal-state/">Blogs</a>
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

                                        <li><a><?php echo "<i><span style='font-size:16px;'>Welcome " . $_COOKIE[$cookie_name] ."</i></span>";?></a></li>
                                        <hr>
                                        <li><a href="feedback.php">Feedback</a></li>
                                        <li><a href="login.php">Log Out</a></li>
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
            <form action="https://in.search.yahoo.com/search?p=mumbai&fr=yfp-t&ei=UTF-8&fp=1" method="post">
                <input type="text" class="form-control" placeholder="Enter a search term" id="keyword" name="keyword">
                <button class="ser-triger" type="submit">Search <i class="fa fa-long-arrow-right" aria-hidden="true"></i></button>
            </form>
        </div>
    </div>
    <!-- ====================search popup  end========================-->
    <!-- ====================banner section start====================== -->
    <section class="banner-sec">
        <div id="tabs">
            <div class="tab-content" id="nav-tabContent">
                <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab" style="width: 100vw;">
                    <div class="initial_content">
                        <div>
                            <h3 class="animate" data-animate="fadeInUp" data-duration="1.0s" data-delay="0.1s">Welcome to</h3>
                            <h4 class="animate" data-animate="fadeInUp" data-duration="1.0s" data-delay="0.4s">Maharashtra</h4>
                        </div>
                    </div>
                    <video loop muted id="myVideo1" class="ban-video" style="display: block;
  width: 100vw;
  height: 100%;">
                     <source src="video/0.mp4" type="video/mp4">
                      
                  </video>
                    <div class="video_control" data-id="myVideo1">
                        <button class="vid_sound">Mute</button>
                        <button class="vid_play">Pause</button>
                    </div>
                    <div class="shadow"></div>
                </div>
                <div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">
                    <video loop muted id="myVideo2" class="ban-video">
                     <source src="video/1.mp4" type="video/mp4">
					 <source src="video/1.webm" type="video/webm">
					 <source src="video/1.ogv" type="video/ogg">
                  </video>
                    <div class="video_control" data-id="myVideo2">
                        <button class="vid_sound">Mute</button>
                        <button class="vid_play">Pause</button>
                    </div>
                    <div class="shadow"></div>
                </div>
                
                <div class="tab-pane fade" id="nav-about" role="tabpanel" aria-labelledby="nav-about-tab">
                    <video loop muted id="myVideo4" class="ban-video">
                     <source src="video/2.mp4" type="video/mp4">
					 <source src="video/2.webm" type="video/webm">
					 <source src="video/2.ogv" type="video/ogg">
                  </video>
                    <div class="video_control" data-id="myVideo4">
                        <button class="vid_sound">Mute</button>
                        <button class="vid_play">Pause</button>
                    </div>
                    <div class="shadow"></div>
                </div>
            </div>
            <div class="nav nav-tabs nav-fill" id="nav-tab" role="tablist">
                <a class="nav-item nav-link active" id="nav-home-tab" data-toggle="tab" href="#nav-home" role="tab" aria-controls="nav-home" aria-selected="true"><span>Wildlife</span></a>
                <a class="nav-item nav-link" id="nav-profile-tab" data-toggle="tab" href="#nav-profile" role="tab" aria-controls="nav-profile" aria-selected="false"><span>Heritage</span></a>
                <a class="nav-item nav-link" id="nav-contact-tab" data-toggle="tab" href="#nav-contact" role="tab" aria-controls="nav-contact" aria-selected="false"><span>Spirituality</span></a>
                <a class="nav-item nav-link" id="nav-about-tab" data-toggle="tab" href="#nav-about" role="tab" aria-controls="nav-about" aria-selected="false"><span>Nature</span></a>
            </div>
        </div>

        <style>
            .selecttheme input[type="checkbox"] {
                margin-left: 23px;
                margin-right: 4px;
                vertical-align: middle;
            }
        </style>
        <div class="plannerdiv">
            <form action="plan.php" method="post">
                <div class="planitinerary-cnt">
                    <div class="planitinerary-header">
                        <img src="images/Map.png" alt="">
                        <h2>Plan Your Itinerary</h2>
                    </div>
                    <div class="planitinerary-body">
                        <div class="travel-val">
                            <h5>Days of travel</h5>
                            <div class="rangevalu"><span></span></div>
                        </div>
                        <div class="container-range">
                            <input type="range" id="cowbell" name="days" min="0" max="10" value="0" step="1" class="slider">
                            <span class="fill-bg"></span>
                        </div>
                        <div class="planitinerary-select">
                            <select class="select" name="city" id="name">
											 <option value="0" selected disabled>Travel Starting Point (City)</option>
											<option value="Mumbai">Mumbai</option>
											<option value="Pune">Pune</option>
											<option value="Aurangabad">Aurangabad</option>
											<option value="Nagpur">Nagpur</option>
											<option value="Nashik">Nashik</option>
											<option value="Nanded">Nanded</option>
											<option value="Kolhapur">Kolhapur</option>
											<option value="Ratnagiri">Ratnagiri</option>
											<option value="Jalgaon">Jalgaon</option>
											<option value="Amravati">Amravati</option>
							</select>
                            <select class="select" name="month">
										 <option>Select Travel Month</option>
										 <option>January</option>
										 <option>February</option>
										 <option>March</option>
										 <option>April</option>
										 <option>May</option>
										 <option>June</option>
										 <option>July</option>
										 <option>August</option>
										 <option>September</option>
										 <option>October</option>
										 <option>November</option>
										 <option>December</option>
									  </select>
                        </div>

                        <div class="selecttheme" style=" margin-top: 20px; color: #fff; font-size: 14px; ">
                            <div style="color: #fff; font-size: 15px; margin: 0px; font-family: alegreya_sanslight;margin-bottom: 6px; ">Select Travel Theme</div>
                            <input style="margin-left: 0px;" type="checkbox" name="theme" value="Adventure">Adventure
                            <input type="checkbox" name="theme" value="Heritage">Heritage
                            <input type="checkbox" name="theme" value="Nature">Nature
                            <input type="checkbox" name="theme" value="Spiritual">Spiritual
                            <input type="checkbox" name="theme" value="Wildlife">Wildlife
                        </div>
                    </div>
                    <div class="planitinerary-footer">
                        <button type="submit" name="submit" class="btn planitinerary-btn">Search</button>
                    </div>
                </div>
            </form>
            <?php 
                if(array_key_exists('submit', $_POST)){
                    $month = $_POST['month'];
                    $days = $_POST['days'];
                    $start= $_POST['city'];
                    $theme = $_POST['theme'];
                    echo $month." ". $start." ".$theme;
                }

            ?>
        </div>
    </section>
    <!-- ====================banner section end====================== -->

    <!-- ====================destination gallery section start====================== -->
    <section class="destination-gallery">
        <div class="container">
            <div class="row">
                <div class="col-sm-6">
                    <div class="gal-cnt gal-cnt-left animate" data-animate="fadeInUp" data-duration="2.0s" data-delay="0.1s">
                        <div class="gal-item img-1">
                            <a href="all.php"><img src="images/homedest.jpg" alt=""></a>
                            <div class="gal-overly-txt animate" data-animate="fadeInUp" data-duration="2.0s" data-delay="0.1s">
                                <h4>Explore</h4>
                            </div>
                        </div>
                        <div class="gal-item img-2 animate" data-animate="fadeInUp" data-duration="2.0s" data-delay="0.2s">
                            <a href="cuisine.php"> <img src="images/homecuisine.jpg" alt=""></a>
                            <div class="gal-overly-txt animate" data-animate="fadeInUp" data-duration="2.0s" data-delay="0.1s">
                                <h4>Cuisine</h4>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="gal-cnt gal-cnt-right">
                        <div class="gal-item img-3 animate" data-animate="fadeInUp" data-duration="2.0s" data-delay="0.3s">
                            <a href="festival.php"> <img src="images/homeculture.jpg" alt=""></a>
                            <div class="gal-overly-txt animate" data-animate="fadeInUp" data-duration="2.0s" data-delay="0.1s">
                                <h4>Festivals & Events</h4>
                            </div>
                        </div>
                        <div class="gal-item img-4 animate" data-animate="fadeInUp" data-duration="2.0s" data-delay="0.4s">
                            <a href="culture.php"> <img src="images/homeevent.jpg" alt=""></a>
                            <div class="gal-overly-txt animate" data-animate="fadeInUp" data-duration="2.0s" data-delay="0.1s">
                                <h4>Culture</h4>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ====================destination gallery section end====================== -->

    <!-- ====================Video  section start====================== -->
    <section class="video-sec animate" data-animate="fadeInUp" data-duration="1.0s" data-delay="0.1s">
        <h2 class="title video-title">Videos</h2>
        <div class="rvs-container">
            <div class="rvs-item-container">
                <div class="rvs-item-stage">
                    <div class="rvs-item">
                        <iframe width="1381" height="522" src="https://www.youtube.com/embed/P1WNkpcEkac" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                    </div>
                    <div class="rvs-item">
                        <iframe width="1381" height="522" src="https://www.youtube.com/embed/YLhiE6EbLpc" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                    </div>
                    <div class="rvs-item">
                        <iframe width="1381" height="522" src="https://www.youtube.com/embed/pubroTXTXv8" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                    </div>
                    <div class="rvs-item">
                        <iframe width="1381" height="522" src="https://www.youtube.com/embed/6baGSAlSf0I" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                    </div>
                    <div class="rvs-item">
                        <iframe width="1381" height="522" src="https://www.youtube.com/embed/1yBO038_YkY" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                    </div>
                    <div class="rvs-item">
                        <iframe width="1381" height="522" src="https://www.youtube.com/embed/krNFnKkbuOs" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                    </div>
                    <div class="rvs-item">
                        <iframe width="1381" height="522" src="https://www.youtube.com/embed/h7LeDJoCLtA" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                    </div>
                    <div class="rvs-item">
                        <iframe width="1381" height="522" src="https://www.youtube.com/embed/3LvcD3ON9CY" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                    </div>
                </div>
            </div>
            <div class="rvs-nav-container">
                <a class="rvs-nav-prev"></a>
                <div class="rvs-nav-stage">
                    <a class="rvs-nav-item">
                        <span class="rvs-nav-item-thumb" style="background-image: url(images/videoplay1.png)"></span>
                        <p>Forts of Maharashtra

                        </p>
                    </a>
                    <a class="rvs-nav-item">
                        <span class="rvs-nav-item-thumb" style="background-image: url(images/videoplay2.png)"></span>
                        <p>Tadoba National Park

                        </p>
                    </a>
                    <a class="rvs-nav-item">
                        <span class="rvs-nav-item-thumb" style="background-image: url(images/videoplay3.png)"></span>
                        <p>Aurangabad - City of History

                        </p>
                    </a>
                    <a class="rvs-nav-item">
                        <span class="rvs-nav-item-thumb" style="background-image: url(images/videoplay4.png)"></span>
                        <p>Sindhudurg History

                        </p>
                    </a>
                    <a class="rvs-nav-item">
                        <span class="rvs-nav-item-thumb" style="background-image: url(images/videoplay5.png)"></span>
                        <p>Radhanagari - Land of the Gaur

                        </p>
                    </a>
                    <a class="rvs-nav-item">
                        <span class="rvs-nav-item-thumb" style="background-image: url(images/videoplay6.png)"></span>
                        <p>Cuisines Of Maharashtra

                        </p>
                    </a>
                    <a class="rvs-nav-item">
                        <span class="rvs-nav-item-thumb" style="background-image: url(images/videoplay7.png)"></span>
                        <p>Rajgad Fort

                        </p>
                    </a>
                    <a class="rvs-nav-item">
                        <span class="rvs-nav-item-thumb" style="background-image: url(images/videoplay7.png)"></span>
                        <p>Festivals of Maharashtra

                        </p>
                    </a>
                </div>
                <a class="rvs-nav-next"></a>
            </div>
        </div>
    </section>
    <!-- ====================Video  section end====================== -->
    <!-- ====================Heritage  section start====================== -->
    <style>
        .owl-next {
            background: #e67817 !important;
            color: #fff !important;
        }
    </style>
    <section class="heritage-sec">
        <div class="heritage-cnt">
            <h2 class="title stories-title">REASONS TO EXPLORE MAHARASHTRA</h2>
            <div id="heritage-tabs" class="heritage-cnt animate tabs js-tabs" data-animate="fadeInUp" data-duration="1.0s" data-delay="0.1s">
                <div class="tabs-content js-tabs-wrap">
                    <div id="heritage-tabs-1" class="tab js-tabs-content active">
                        <div class="heritage-img">
                            <div class="related-slide-cnt">
                                <div class="related-slider owl-carousel">
                                    <div class="related-item">
                                        <div class="row">
                                            <div class="col-sm-7">
                                                <img src="images/reason_2.png">
                                            </div>
                                            <div class="col-sm-4">
                                                <div class="stories-dtl">
                                                    <h3>5 National Parks, 36 Wildlife Sanctuaries and 2 Tiger Reserves </h3>
                                                    <p>Plan a trip to Maharashtra to experience the true spirit of the jungles and catch all the live action happening in the wild.
                                                    </p>
                                                </div>
                                            </div>
                                            <div class="col-sm-1">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="related-item">
                                        <div class="row">
                                            <div class="col-sm-7">
                                                <img src="images/reason_1.jpg">
                                            </div>
                                            <div class="col-sm-4">
                                                <div class="stories-dtl">
                                                    <h3>Monuments of Maharashtra</h3>
                                                    <p>Home to Bibi ka Maqbara, Elephanta Caves, Lonar Crater and many mmore Maharashtra attracts tourists from across the globe.
                                                    </p>
                                                </div>
                                            </div>
                                            <div class="col-sm-1">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="related-item">
                                        <div class="row">
                                            <div class="col-sm-7">
                                                <img src="images/reason_3.png">
                                            </div>
                                            <div class="col-sm-4">
                                                <div class="stories-dtl">
                                                    <h3>Rich forest cover & natural beauty </h3>
                                                    <p>Blessed with some of the beautiful landscapes, Maharashtra is a paradise for nature lovers. With plentiful of places to satisfy your love for landscape and beauty, the state certainly captures a piece
                                                        of your heart for all the beauty that lies in here.
                                                    </p>
                                                </div>
                                            </div>
                                            <div class="col-sm-1">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="related-item">
                                        <div class="row">
                                            <div class="col-sm-7">
                                                <img src="images/reason_4.png">
                                            </div>
                                            <div class="col-sm-4">
                                                <div class="stories-dtl">
                                                    <h3>Five Jyotirlingas out of 12</h3>
                                                    <p>Trimbakeshwar, Grishneshwar, Bhimashankar, Aundha Nagnath and Parli Vaijnath are the most revered places in Maharashtra.
                                                    </p>
                                                </div>
                                            </div>
                                            <div class="col-sm-1">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ====================Heritage section end====================== -->
    <!-- ====================Stories section start====================== -->
    <section class="stories-sec">
        <div class="stories-cnt">
            <h2 class="title stories-title">Our stories</h2>
            <div class="row">
                <div class="col-sm-12">
                    <div class="story-carousel owl-carousel">
                        <div class="item animate" data-animate="fadeInUp" data-duration="1.0s" data-delay="0.2s">
                            <div class="stories-item">
                                <div class="stories-img">
                                    <img src="" alt="">
                                </div>
                                <div class="stories-dtl">
                                    <h3>STORY 1 Title</h3>
                                    <p>Story Content Description. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                                    </p>
                                    <a href="" class="stories-readmore">Learn more</a>
                                </div>
                            </div>
                        </div>
                        <div class="item animate" data-animate="fadeInUp" data-duration="1.0s" data-delay="0.3s">
                            <div class="stories-item">
                                <div class="stories-img">
                                    <img src="" alt="">
                                </div>
                                <div class="stories-dtl">
                                    <h3>STORY 2 Title</h3>
                                    <p>Story Content Description. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                                    </p>
                                    <a href="" class="stories-readmore">Learn more</a>
                                </div>
                            </div>
                        </div>
                        <div class="item animate" data-animate="fadeInUp" data-duration="1.0s" data-delay="0.2s">
                            <div class="stories-item">
                                <div class="stories-img">
                                    <img src="" alt="">
                                </div>
                                <div class="stories-dtl">
                                    <h3>STORY 3 Title</h3>
                                    <p>Story Content Description. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                                    </p>
                                    <a href="" class="stories-readmore">Learn more</a>
                                </div>
                            </div>
                        </div>
                        <div class="item animate" data-animate="fadeInUp" data-duration="1.0s" data-delay="0.1s">
                            <div class="stories-item">
                                <div class="stories-img">
                                    <img src="" alt="">
                                </div>
                                <div class="stories-dtl">
                                    <h3>STORY 4 Title</h3>
                                    <p>Story Content Description. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                                    </p>
                                    <a href="" class="stories-readmore">Learn more</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ====================Stories section end====================== -->
    <!-- ====================Social Feeds section start====================== -->
    <section class="social-feeds-sec">
        <div class="social-feeds-cnt">
            <h2 class="title stories-title">Social Feeds</h2>
            <div class="row">
                <div class="col-sm-4 animate" data-animate="fadeInUp" data-duration="1.0s" data-delay="0.1s">
                    <div class="social-items">
                        <a href="https://www.instagram.com/p/CHVsZ8xJhzE/?utm_source=ig_web_button_share_sheet" target="_blank"><img src="images/socio1.jpg" alt=""></a>
                    </div>
                </div>
                <div class="col-sm-4 animate" data-animate="fadeInUp" data-duration="1.0s" data-delay="0.2s">
                    <div class="social-items">
                        <a href="https://www.instagram.com/p/CHX6l69hVmO/?utm_source=ig_web_button_share_sheet" target="_blank"><img src="images/socio2.jpg" alt=""></a>
                    </div>
                </div>
                <div class="col-sm-4 animate" data-animate="fadeInUp" data-duration="1.0s" data-delay="0.3s">
                    <div class="social-items">
                        <a href="https://www.instagram.com/p/CHYHn0_pB3w/?utm_source=ig_web_button_share_sheet" target="_blank"><img src="images/socio3.jpg" alt=""></a>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-3 animate" data-animate="fadeInUp" data-duration="1.0s" data-delay="0.1s">
                    <div class="social-items">
                        <a href="https://www.instagram.com/p/CHX8xl9ld8y/?utm_source=ig_web_button_share_sheet" target="_blank"><img src="images/socio4.jpg" alt=""></a>
                    </div>
                </div>
                <div class="col-sm-3 animate" data-animate="fadeInUp" data-duration="1.0s" data-delay="0.3s">
                    <div class="social-items">
                        <a href="https://www.instagram.com/p/CHX7qzvhq8z/?utm_source=ig_web_button_share_sheet" target="_blank"><img src="images/socio5.jpg" alt=""></a>
                    </div>
                </div>
                <div class="col-sm-3 animate" data-animate="fadeInUp" data-duration="1.0s" data-delay="0.2s">
                    <div class="social-items">
                        <a href="https://www.instagram.com/p/CHX5ZUmll2q/?utm_source=ig_web_button_share_sheet" target="_blank"><img src="images/socio6.jpg" alt=""></a>
                    </div>
                </div>
                <div class="col-sm-3 animate" data-animate="fadeInUp" data-duration="1.0s" data-delay="0.3s">
                    <div class="social-items">
                        <a href="https://www.instagram.com/p/CHX4wV6gkLt/?utm_source=ig_web_button_share_sheet" target="_blank"><img src="images/socio7.jpg" alt=""></a>
                    </div>
                </div>
                
            </div>
            <div class="row">
                <div class="col-sm-4 animate" data-animate="fadeInUp" data-duration="1.0s" data-delay="0.1s">
                    <div class="social-items">
                        <a href="https://www.instagram.com/p/CHX1wJLhx07/?utm_source=ig_web_button_share_sheet" target="_blank"><img src="images/socio8.jpg" alt=""></a>
                    </div>
                </div>
                <div class="col-sm-4 animate" data-animate="fadeInUp" data-duration="1.0s" data-delay="0.2s">
                    <div class="social-items">
                        <a href="https://www.instagram.com/p/CHXumgmHEjV/?utm_source=ig_web_button_share_sheet" target="_blank"><img src="images/socio9.jpg" alt=""></a>
                    </div>
                </div>
                <div class="col-sm-4 animate" data-animate="fadeInUp" data-duration="1.0s" data-delay="0.3s">
                    <div class="social-items">
                        <a href="https://www.instagram.com/p/CHXphiQFrcZ/?utm_source=ig_web_button_share_sheet" target="_blank"><img src="images/socio10.jpg" alt=""></a>
                    </div>
                </div>
                
            </div>
           

        </div>
    </section>
    <!-- ====================Social Feeds section end====================== -->
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
                                        <p><a href="all.php">Explore Destinations</a></p>
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
    <!-- ===================Jquery js====================== -->
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

    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-78710768-1"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());

        gtag('config', 'UA-78710768-1');
    </script>
    <script type="text/javascript">
        jQuery(function($) {
            $('.animate').scrolla({
                mobile: true,
                once: true
            });

            $('#nav-tabContent > .tab-pane').each(function() {
                if ($(this).hasClass('active')) {
                    var video = $(this).find('.ban-video').attr('id');
                    var vid = document.getElementById(video);
                    vid.play();
                }
            });


            $(".vid_play").bind("click", function() {

                var video = $(this).parent('.video_control').attr('data-id');
                var vid = document.getElementById(video);

                if (vid.paused) {
                    vid.play();
                    $(this).html("Pause");
                    $(this).removeClass("pause");
                } else {
                    vid.pause();
                    $(this).html("Play");
                    $(this).addClass("pause");
                }
            });

            $(".vid_sound").click(function() {
                var video = $(this).parent('.video_control').attr('data-id');

                if ($("#" + video).prop('muted')) {
                    $("#" + video).prop('muted', false);
                    $(this).addClass("unmuted");
                } else {
                    $("#" + video).prop('muted', true);
                    $(this).removeClass("unmuted");
                }
            });

            $('#tabs a[data-toggle="tab"]').on('shown.bs.tab', function(e) {
                var target = $(e.target).attr("href");
                var relatedTarget = $(e.relatedTarget).attr("href");

                if (target) {
                    var tvideo = $(target).find('.ban-video').attr('id');
                    var tvid = document.getElementById(tvideo);
                    tvid.play();
                }

                if (relatedTarget) {
                    var rvideo = $(relatedTarget).find('.ban-video').attr('id');
                    var rvid = document.getElementById(rvideo);
                    rvid.pause();
                    rvid.muted = true;
                    rvid.currentTime = 0;
                    $(relatedTarget).find('button.vid_sound').removeClass("unmuted");
                    $(relatedTarget).find('button.vid_play').removeClass("pause");
                }

            });
        });
    </script>
</body>

</html>