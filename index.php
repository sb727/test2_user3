
<!DOCTYPE html>

<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Bootstrap Responsive</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- Le styles -->
    <link href="assets/css/style.css" rel="stylesheet">
    <!-- <link href="bootstrap/css/bootstrap-responsive.css" rel="stylesheet"> -->
    <link href="assets/css/bootstrap.css" rel="stylesheet">
    <link href="assets/css/font-awesome.min.css" rel="stylesheet">
    <link href="assets/css/jquery-ui.css" rel="stylesheet">

    <script src="assets/js/jquery-1.12.1.min.js"></script>
    <script src="assets/js/jquery-ui.js"></script>
    <script type="text/javascript">
        $(document).ready(function(){
            $( ".datepicker" ).datepicker({dateFormat:'yy년mm월dd일'});
            $("#search_button").on('click',function(){
                $("#search_button").attr('disabled','disabled');
                $.ajax({
                    url:"call.php",
                    method:"post",
                    data:{destination : $('#hotel_dest').val()},
                    success: function (data) {
                        $('.img-view').html(data);
                        $("#search_button").removeAttr('disabled');
                    }
                });
            });
            $("div").on('click','h4',function(){
                console.log($(this).text());
            });
            $('#to-top').on('click',function(){
                $("body").animate({scrollTop : 0}, "slow");
            })
            $('.nav-toggle-btn').on('click',function(){
                $('.navbar-toggle').slideToggle('slow');
            })
        });
    </script>
</head>
<body>
<header>
    <h1>Hello World</h1>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <a href="#">
                    <img src="assets/img/logo.png">
                </a>
                <ul class="top-menu">
                    <li class="top-menu-item">
                        <a>Home</a>
                    </li>
                    <li class="top-menu-item">
                        <a>SLIDERS</a>
                    </li>
                    <li class="top-menu-item">
                        <a>HOTELS</a>
                    </li>
                    <li class="top-menu-item">
                        <a>FLIGHTS</a>
                    </li>
                    <li class="top-menu-item">
                        <a>CARS</a>
                    </li>
                    <li class="top-menu-item">
                        <a>CRUISES</a>
                    </li>
                    <li class="top-menu-item">
                        <a>PAGES</a>
                    </li>
                    <li class="top-menu-item">
                        <a>SHORTCODES</a>
                    </li>
                </ul>
                <button class="nav-toggle-btn collapsed">
                    <img src='assets/img/below-icon.png'>
                </button>
                <div id="mobile-nav" class="navbar-toggle">
                    <ul class="nav-menu">
                        <li class="nav-menu-item">
                            <a>Home</a>
                        </li>
                        <li class="nav-menu-item">
                            <a>SLIDERS</a>
                        </li>
                        <li class="nav-menu-item">
                            <a>HOTELS</a>
                        </li>
                        <li class="nav-menu-item">
                            <a>FLIGHTS</a>
                        </li>
                        <li class="nav-menu-item">
                            <a>CARS</a>
                        </li>
                        <li class="nav-menu-item">
                            <a>CRUISES</a>
                        </li>
                        <li class="nav-menu-item">
                            <a>PAGES</a>
                        </li>
                        <li class="nav-menu-item">
                            <a>SHORTCODES</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</header>
    <div class="banner">
 
    </div>
    <div class="main-content">
        <section class="section-search">
          <div class="container">
          	<div class="search-tab">
          		<span>Hotels</span>
          	</div>
            <div class="row">
              <div class="col-md-3 form-group">
                <h3>Where</h3>
                <p>YOUR DESTINATION</p>
                <input type="text" id = "hotel_dest" name = "hotel_dest"placeholder="enter a destination or hotel name"/>
              </div>
              <div class="col-md-2">
                <h3>When</h3>
                <p>CHECK IN</p>
                <input type="text" class = "datepicker" placeholder="mm/dd/yy">
              </div>
              <div class="col-md-2">
                <h3><br></h3>
                <p>CHECK OUT</p>
                <input type="text" class="datepicker" placeholder="mm/dd/yy">
              </div>
              <div class="col-md-1">
                <h3>Who</h3>
                <p>ROOMS</p>
                <input type="number">
              </div>
              <div class="col-md-1">
                <h3><br></h3>
                <p>ADULTS</p>
                <input type="number">
              </div>
              <div class="col-md-1">
                <h3><br></h3>
                <p>KIDS</p>
                <input type="number"/>
              </div>
              <div class="col-md-2">
                <input type="submit" id="search_button" class="search_button" value="">
              </div>
            </div>
          </div>
        </section>
        <section class="img-view ">
          <?php

          // All interaction goes through the index and is forwarded
          // directly to the controller
            include_once("controller/Controller.php");
            $controller = new Controller();
            $controller->invoke();
            require_once("view/hotellist.php");
          ?>
        </section>
      </div>
    </div>
    <footer>
      <section class="footer-1">
        <div class="container">
          <div class="row">
            <div class="col-md-3">
              <h3>Discover</h3>
              <div class="row">
                <div class="col-md-6">
                  <ul class="discover">
                    <li>Safety</li>
                    <li>Travelo Picks</li>
                    <li>Mobile</li>
                    <li>Why Host</li>
                    <li>Social Connect</li>
                    <li>Site Map</li>   
                   </ul>
                </div>      
                <div class="col-md-6">
                  <ul class="discover">
                    <li>About</li>
                    <li>Latest Jobs</li>
                    <li>Press Releases</li>
                    <li>Blog Posts</li>
                    <li>Help Topics</li>
                    <li>Policies</li>
                  </ul>
                </div>
              </div>
            </div>
            <div class="col-md-3">
              <h3>Travel News</h3>
                <div>
                  <div class="thumb">
                    <img src="assets/img/image_amazing.png">
                  </div>
                  <div class="news">
                    <p style="color:blue">Amazing Places</p>
                    <p>Purus ac congue arcu cursus ut vitae pulvinar massaidp.</p>
                    <p>25 Sep,2013</p>
                  </div>
                </div>
                <div>
                   <div class="thumb">
                    <img src="assets/img/image_travel.png">
                   </div>
                  <div class="news">
                    <p style="color:blue">Amazing Places</p>
                    <p>Purus ac congue arcu cursus ut vitae pulvinar massaidp.</p>
                    <p>25 Sep,2013</p>
                  </div>
                </div>
            </div>
            <div class="col-md-3">
              <h3>Mailing List</h3>
              <p>Sign up for our mailing list to get latest updates and offers.</p>
            </div>
            <div class="col-md-3">
              <h3>About Travelo</h3>
              <p>Nunc cursus libero purus ac congue arcu cursus ut sed vitae pulvinar massaidp nequetiam lore elerisque</p>
            </div>
            </div>        
          </div>
        </section>
        <section class="footer-2">
          <div class="container">
            <div class="row">
              <div class="col-md-12">
                <a href="#">
                <img src="assets/img/logo.png">
                </a>
                <div class="footer_mark">
                  <p></p>
                  <a id="to-top">@2014 Travelo</a>
                </div>
                <div class="below-icon">
                </div>
              </div>
            </div>
          </div>
        </section>
    </footer>
  </body>