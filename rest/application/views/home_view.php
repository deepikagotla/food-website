<?php
    $this->load->view("header");
?>

<body>
    <!-- Loader
    ============================================= -->
    <div id="loader2">
        <div class="loader-item"> <img src="assets/img/logo_intro_dark.png" alt="">
            <div class="sk-spinner sk-spinner-wave">
                <div class="sk-rect1"></div>
                <div class="sk-rect2"></div>
                <div class="sk-rect3"></div>
                <div class="sk-rect4"></div>
                <div class="sk-rect5"></div>
            </div>
        </div>
    </div>
    <!-- End Loader -->
    <!-- Document Wrapper
    ============================================= -->
    <div id="wrapper">
        <!-- Video Background Youtube
    ============================================= -->
        <section id="bgndVideo" class="fullheight yt-bg-player player" class="player" data-property="{videoURL:'HAeWL6I25rc',containment:'.fullheight', showControls:true, autoPlay:true, loop:true, vol:50, mute:false, startAt:0,  stopAt:296, opacity:1, addRaster:true, quality:'large', optimizeDisplay:true}">
            <!-- Bg transparent -->
            <div class="bg-transparent ">
                <!-- Slider content -->
                <div class="container dark slider-content"> <i class="icon-top-draw"></i>
                    <div id="text-transform" class="owl-carousel">
                        <div class="item">
                            <h1>Premium Restaurant Theme</h1>
                        </div>
                        <div class="item">
                            <h1>KEEP CALM &amp; TASTE OUR FOOD</h1>
                        </div>
                        <div class="item">
                            <h1>Premium Restaurant Themes</h1>
                        </div>
                    </div>
                    <p class="text-capitalize">We Create Delicous Memories</p>
                    <i class="icon-bottom-draw"></i> </div>
                <!-- End Slider content -->
            </div>
            <!-- End Bg transparent -->
        </section>
        <!-- End Video background Youtube -->
        <!-- Header Center
    ============================================= -->
        <header id="header" class="center-header">
            <div class="container">
                <div class="row">
                    <div id="main-menu-trigger"><i class="fa fa-bars"></i>
                    </div>

                    <div id="logo">
                        <a href="" class="light-logo"><img src="assets/img/logo.png" alt="Logo">
                        </a>
                        <a href="" class="dark-logo"><img src="assets/img/logo_dark.png" alt="Logo">
                        </a>
                    </div>

                    <nav id="main-menu" class="dark menu-center">

                        <ul>
                            <li>
                                <a href="">
                                    <div>Home</div>
                                </a>
                                
                            </li>
                            <li class="mega-menu">
                                <a href="#">
                                    <div>Menu</div>
                                </a>
                                <div class="mega-menu-content  col-1 clearfix">
                                    <ul>
                                        <li class="mega-menu-title">
                                            <div id="menu_carousel">
                                                <div class="item">
                                                    <a href=""> <img class="img-responsive" src="assets/img/drop_menu/starter.jpg" alt="starter">
                                                        <h2>Staters</h2>
                                                    </a>
                                                </div>
                                                <div class="item">
                                                    <a href=""> <img class="img-responsive" src="assets/img/drop_menu/dishes.jpg" alt="dishes">
                                                        <h2>Dishes</h2>
                                                    </a>
                                                </div>
                                                <div class="item">
                                                    <a href=""> <img class="img-responsive" src="assets/img/drop_menu/fishes.jpg" alt="fishes">
                                                        <h2>fishes</h2>
                                                    </a>
                                                </div>
                                                <div class="item">
                                                    <a href=""> <img class="img-responsive" src="assets/img/drop_menu/salads.jpg" alt="salads">
                                                        <h2>Salads</h2>
                                                    </a>
                                                </div>
                                                <div class="item">
                                                    <a href=""> <img class="img-responsive" src="assets/img/drop_menu/deserts.jpg" alt="deserts">
                                                        <h2>Deserts</h2>
                                                    </a>
                                                </div>
                                                <div class="item">
                                                    <a href=""> <img class="img-responsive" src="assets/img/drop_menu/drinks.jpg" alt="drinks">
                                                        <h2>Drinks</h2>
                                                    </a>
                                                </div>
                                                <div class="item">
                                                    <a href=""> <img class="img-responsive" src="assets/img/drop_menu/soup.jpg" alt="Soups">
                                                        <h2>Soups</h2>
                                                    </a>
                                                </div>
                                                <div class="item">
                                                    <a href=""> <img class="img-responsive" src="assets/img/drop_menu/combo.jpg" alt="Combo Meals">
                                                        <h2>Combo Meals</h2>
                                                    </a>
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                            <li>
                                <a href="">
                                    <div>reservation</div>
                                </a>
                            </li>
                            
                            <li>
                                <a href="">
                                    <div>Events</div>
                                </a>
                            </li>
                            <li>
                                <a href="">
                                    <div>Contact</div>
                                </a>
                            </li>
                            <li class="mega-menu">
                                <a href="#">
                                    <div>Pages</div>
                                </a>
                                
                            </li>
                            <?php
                            if($this->session->has_userdata("user") == 1)
                            {
                            ?>
                                <li>
                                    <a href="">
                                        <div>My Account</div>
                                    </a>
                                </li> 
                            <?php
                            }else{
                            ?>
                                <li class="mega-menu">
                                    <a href="Login">
                                        <div>Login</div>
                                    </a>
                                </li>

                                <li>
                                    <a href="Register">
                                        <div>Register</div>
                                    </a>
                                </li>
                            <?php 
                            }
                            ?>

                        </ul>
                        
                    </nav>
                </div>
            </div>
        </header>

        <div id="content">
            <section class="padding-100 welcome-block">
                <div class="container">
                    <div class="row">
                        <div class="col-md-6"> <img class="img-responsive" src="assets/img/home2/art.jpg" alt=""> </div>
                        <!-- Intro message -->
                        <div class="col-md-5 text-center intro_message mt40">
                            <!-- Head Title -->
                            <div class="head_title">
                                <i class="icon-intro"></i>
                                <h1>ART OF FOOD</h1>
                                <span class="welcome">Welcome to Majesty</span>
                            </div>
                            <!-- End# Head Title -->
                            <p>Majesty is a team work of Majesty Restaurant Cafe, we aim at promoting the foodstuff industry through the branches , we establish and through the new dishes. and integrate between different cultures, by merging different Oriental and its western recipes</p>
                            <a href="about.html" class="btn btn-gold">READ MORE</a> </div>
                        <!-- End Intro message  -->
                    </div>
                </div>
            </section>
            <!-- End Welcome block -->
            <!-- Chef Message
    ============================================= -->
            <section id="slide2-01" class="chef-message dark text-center">
                <!-- Bg Parallax -->
                <div class="bcg background35" data-center="background-position: 50% 0px;" data-bottom-top="background-position: 50% 100px;" data-top-bottom="background-position: 50% -100px;" data-anchor-target="#slide2-01">
                    <!-- Bg Transparent -->
                    <div class="bg-transparent padding-100">
                        <div class="container">
                            <div class="row">
                                <div class="col-md-7">
                                    <h1>Chef Message</h1>
                                    <p>We aim to home-produce as much as possiblefor the best quality, and to reduce food miles. Our delicious cakes, traditional Devon scones, breads, soups, sauces and accompaniments are produced in our own kitchens – and we use herbs from our gardens when in season. Even our bottled water is produced in-house, using a sophisticated seven-stage filtration.</p>
                                    <h2 class="signature">Micheal</h2>
                                </div>
                                <img src="assets/img/home2/chef.png" alt=""> </div>
                        </div>
                    </div>
                    <!-- End bg transparent -->
                </div>
                <!-- End Bg Parallax -->
            </section>
            <!-- End Chef message -->
            <!-- Our Team 
    ============================================= -->
            <section class="our_team text-center padding-100">
                <div class="container">
                    <div class="row">
                        <!-- Head Title -->
                        <div class="head_title">
                            <i class="icon-intro"></i>
                            <h1>Our Chefs</h1>
                            <span class="welcome ">The Friendlist Professional Chef</span>
                        </div>
                        <!-- End# Head Title -->
                        <div id="our_team_carousel" class="owl-carousel owl-theme">
                            <div class="item">
                                <div class="overlay_content clearfix">
                                    <div class="overlay_item"><img src="assets/img/team/1.jpg" alt="">
                                        <div class="overlay">
                                            <div class="icons"> <a href="#"><i class="fa fa-facebook"></i></a> <a href="#"><i class="fa fa-twitter"></i></a> <a href="#"><i class="fa fa-linkedin"></i></a> <a href="#"><i class="fa fa-google-plus"></i></a> <a class="close-overlay hidden">x</a> </div>
                                        </div>
                                        <div class="desc">
                                            <h2><a href="team_single.html">MARK DOE</a></h2>
                                            <p>HEAD CHEF</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- End item -->
                            <div class="item">
                                <div class="overlay_content clearfix">
                                    <div class="overlay_item">
                                        <a href="">
                                          <img src="assets/img/team/2.jpg" alt="">
                                        </a>
                                        <div class="overlay">
                                            <div class="icons"> <a href="#"><i class="fa fa-facebook"></i></a> <a href="#"><i class="fa fa-twitter"></i></a> <a href="#"><i class="fa fa-linkedin"></i></a> <a href="#"><i class="fa fa-google-plus"></i></a> <a class="close-overlay hidden">x</a> </div>
                                        </div>
                                        <div class="desc">
                                            <h2><a href="">Mark Henry</a></h2>
                                            <p>GRILL CHEF</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- End item -->
                            <div class="item">
                                <div class="overlay_content clearfix">
                                    <div class="overlay_item">
                                        <a href="">
                                          <img src="assets/img/team/3.jpg" alt="">
                                        </a>
                                        <div class="overlay">
                                            <div class="icons"> <a href="#"><i class="fa fa-facebook"></i></a> <a href="#"><i class="fa fa-twitter"></i></a> <a href="#"><i class="fa fa-linkedin"></i></a> <a href="#"><i class="fa fa-google-plus"></i></a> <a class="close-overlay hidden">x</a> </div>
                                        </div>
                                        <div class="desc">
                                            <h2><a href="team_single.html">Jhon Loe</a></h2>
                                            <p>FISH CHEF</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- End item -->
                            <div class="item">
                                <div class="overlay_content clearfix">
                                    <div class="overlay_item">
                                        <a href=""><img src="assets/img/team/4.jpg" alt="">
                                        </a>
                                        <div class="overlay">
                                            <div class="icons"> <a href="#"><i class="fa fa-facebook"></i></a> <a href="#"><i class="fa fa-twitter"></i></a> <a href="#"><i class="fa fa-linkedin"></i></a> <a href="#"><i class="fa fa-google-plus"></i></a> <a class="close-overlay hidden">x</a> </div>
                                        </div>
                                        <div class="desc">
                                            <h2><a href="team_single.html">SARAH DOE</a></h2>
                                            <p>Bakery Chef</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- End item -->
                            <div class="item">
                                <div class="overlay_content clearfix">
                                    <div class="overlay_item">
                                        <a href="">
                                          <img src="assets/img/team/5.jpg" alt="">
                                        </a>
                                        <div class="overlay">
                                            <div class="icons"> <a href="#"><i class="fa fa-facebook"></i></a> <a href="#"><i class="fa fa-twitter"></i></a> <a href="#"><i class="fa fa-linkedin"></i></a> <a href="#"><i class="fa fa-google-plus"></i></a> <a class="close-overlay hidden">x</a> </div>
                                        </div>
                                        <div class="desc">
                                            <h2><a href="team_single.html">MARK DOE</a></h2>
                                            <p>Cafe Chef</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- End item -->
                            <div class="item">
                                <div class="overlay_content clearfix">
                                    <div class="overlay_item">
                                        <a href="">
                                          <img src="assets/img/team/6.jpg" alt="">
                                        </a>
                                        <div class="overlay">
                                            <div class="icons"> <a href="#"><i class="fa fa-facebook"></i></a> <a href="#"><i class="fa fa-twitter"></i></a> <a href="#"><i class="fa fa-linkedin"></i></a> <a href="#"><i class="fa fa-google-plus"></i></a> <a class="close-overlay hidden">x</a> </div>
                                        </div>
                                        <div class="desc">
                                            <h2><a href="">JHON SMITH</a></h2>
                                            <p>Pasta Chef</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- End item -->
                        </div>
                        <!-- End our team slide -->
                    </div>
                </div>
            </section>
            <!-- End our team -->
            <!-- Food Date blocks
    ============================================= -->
            <section id="slide2-02" class="date-blocks dark text-center">
                <!-- Bg Parallax -->
                <div class="bcg background31" data-center="background-position: 50% 0px;" data-bottom-top="background-position: 50% 100px;" data-top-bottom="background-position: 50% -100px;" data-anchor-target="#slide2-02">
                    <!-- Bg transparent -->
                    <div class="bg-transparent padding-100">
                        <div class="container">
                            <div class="row">
                                <div class="col-md-3 col-sm-6 col-xs-12">
                                    <!-- Block item -->
                                    <div class="block-item"> <img src="assets/img/breakfast.png" alt="">
                                        <h2>BREAKFAST</h2>
                                        <p>6.00 am 10.00 am</p>
                                    </div>
                                    <!-- End Block item -->
                                </div>
                                <div class="col-md-3 col-sm-6 col-xs-12">
                                    <!-- Block item -->
                                    <div class="block-item"> <img src="assets/img/lunch.png" alt="">
                                        <h2>LUNCH</h2>
                                        <p>10.00 am 2.00 pm</p>
                                    </div>
                                    <!-- End Block item -->
                                </div>
                                <div class="col-md-3 col-sm-6 col-xs-12">
                                    <!-- Block item -->
                                    <div class="block-item"> <img src="assets/img/dinner.png" alt="">
                                        <h2>DINNER</h2>
                                        <p>4.00 pm 12.00 pm</p>
                                    </div>
                                    <!-- End Block item -->
                                </div>
                                <div class="col-md-3 col-sm-6 col-xs-12">
                                    <!-- Block item -->
                                    <div class="block-item"> <img src="assets/img/dessert.png" alt="">
                                        <h2>dessert</h2>
                                        <p>All Day</p>
                                    </div>
                                    <!-- End Block item -->
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End bg transparent -->
                </div>
                <!-- End Bg Parallax -->
            </section>
            <!-- End date blocks-->
            <!-- Masonry Menu
    ============================================= -->
            <section class="masonry_menu padding-100 text-center ">

                <!-- Head Title -->
                <div class="head_title">
                    <i class="icon-intro"></i>
                    <h1>OUR MENU</h1>
                    <span class="welcome">Choose & Taste</span>
                </div>
                <!-- End# Head Title -->

                <!-- Menu Bar -->
                <div class="menu-bar dark mb60">
                    <!-- menu Filter
                    ============================================= -->
                    <ul id="menu-fillter" class="clearfix">
                        <li class="activeFilter"><a href="#" data-filter="*">Show All</a>
                        </li>
                        <li><a href="#" data-filter=".pf-daily-menu">dialy menu</a>
                        </li>
                        <li><a href="#" data-filter=".pf-starter">starter</a>
                        </li>
                        <li><a href="#" data-filter=".pf-dishes">dishes</a>
                        </li>
                        <li><a href="#" data-filter=".pf-desert">DESERT</a>
                        </li>
                        <li><a href="#" data-filter=".pf-drinks">DRINKS</a>
                        </li>
                    </ul>
                    <!-- #menu-filter end -->
                </div>
                <!-- End menu bar -->
                <!-- Menu Items
                    ============================================= -->
                <div class="container">
                    <!-- Menu Items Masonary Content -->
                    <div id="menu-items" class="masonry-content dark clearfix">
                        <!-- Menu Item -->
                        <article class="menu-item pf-desert pf-daily-menu">
                            <!-- Overlay Content -->
                            <div class="overlay_content overlay-menu">
                                <!-- Overlay Item -->
                                <div class="overlay_item"> <img src="assets/img/masonry/1.jpg" alt="">
                                    <div class="overlay">
                                        <div class="icons">
                                            <h3>Food Name</h3>
                                            <h3>79.99 $</h3>
                                            <!-- Rating -->
                                            <fieldset class="rating">
                                                <span class="active"><i class="fa fa-star"></i></span> <span class="active"><i class="fa fa-star"></i></span> <span class="active"><i class="fa fa-star"></i></span> <span class="active"><i class="fa fa-star"></i></span> <span><i class="fa fa-star"></i></span>
                                            </fieldset>
                                            <!-- end Rating -->
                                            <!-- Button -->
                                            <div class="button"> <a class="btn btn-gold" href="#"><i class="fa fa-shopping-cart"></i></a> <a class="btn btn-gold" href=""><i class="fa fa-link"></i></a> </div>
                                            <!-- End Button -->
                                            <a class="close-overlay hidden">x</a> </div>
                                    </div>
                                </div>
                                <!-- Overlay Item -->
                            </div>
                            <!-- End Overlay Content -->
                        </article>
                        <!-- End Menu Item -->
                        <!-- Menu Item -->
                        <article class="menu-item pf-starter ">
                            <!-- Overlay Content -->
                            <div class="overlay_content overlay-menu">
                                <!-- Overlay Item -->
                                <div class="overlay_item"> <img src="assets/img/masonry/2.jpg" alt="">
                                    <div class="overlay">
                                        <div class="icons">
                                            <h3>Food Name</h3>
                                            <h3>79.99 $</h3>
                                            <!-- Rating -->
                                            <fieldset class="rating">
                                                <span class="active"><i class="fa fa-star"></i></span> <span class="active"><i class="fa fa-star"></i></span> <span class="active"><i class="fa fa-star"></i></span> <span class="active"><i class="fa fa-star"></i></span> <span><i class="fa fa-star"></i></span>
                                            </fieldset>
                                            <!-- end Rating -->
                                            <!-- Button -->
                                            <div class="button"> <a class="btn btn-gold" href="#"><i class="fa fa-shopping-cart"></i></a> <a class="btn btn-gold" href=""><i class="fa fa-link"></i></a> </div>
                                            <!-- End Button -->
                                            <a class="close-overlay hidden">x</a> </div>
                                    </div>
                                </div>
                                <!-- Overlay Item -->
                            </div>
                            <!-- End Overlay Content -->
                        </article>
                        <!-- End Menu Item -->
                        <!-- Menu Item -->
                        <article class="menu-item pf-drinks pf-dishes ">
                            <!-- Overlay Content -->
                            <div class="overlay_content overlay-menu">
                                <!-- Overlay Item -->
                                <div class="overlay_item"> <img src="assets/img/masonry/3.jpg" alt="">
                                    <div class="overlay">
                                        <div class="icons">
                                            <h3>Food Name</h3>
                                            <h3>79.99 $</h3>
                                            <!-- Rating -->
                                            <fieldset class="rating">
                                                <span class="active"><i class="fa fa-star"></i></span> <span class="active"><i class="fa fa-star"></i></span> <span class="active"><i class="fa fa-star"></i></span> <span class="active"><i class="fa fa-star"></i></span> <span><i class="fa fa-star"></i></span>
                                            </fieldset>
                                            <!-- end Rating -->
                                            <!-- Button -->
                                            <div class="button"> <a class="btn btn-gold" href="#"><i class="fa fa-shopping-cart"></i></a> <a class="btn btn-gold" href=""><i class="fa fa-link"></i></a> </div>
                                            <!-- End Button -->
                                            <a class="close-overlay hidden">x</a> </div>
                                    </div>
                                </div>
                                <!-- Overlay Item -->
                            </div>
                            <!-- End Overlay Content -->
                        </article>
                        <!-- End Menu Item -->
                        <!-- Menu Item -->
                        <article class="menu-item menu-item-fluid pf-daily-menu pf-starter">
                            <!-- Overlay Content -->
                            <div class="overlay_content overlay-menu">
                                <!-- Overlay Item -->
                                <div class="overlay_item"> <img src="assets/img/masonry/4.jpg" alt="">
                                    <div class="overlay">
                                        <div class="icons">
                                            <h3>Food Name</h3>
                                            <h3>79.99 $</h3>
                                            <!-- Rating -->
                                            <fieldset class="rating">
                                                <span class="active"><i class="fa fa-star"></i></span> <span class="active"><i class="fa fa-star"></i></span> <span class="active"><i class="fa fa-star"></i></span> <span class="active"><i class="fa fa-star"></i></span> <span><i class="fa fa-star"></i></span>
                                            </fieldset>
                                            <!-- end Rating -->
                                            <!-- Button -->
                                            <div class="button"> <a class="btn btn-gold" href="#"><i class="fa fa-shopping-cart"></i></a> <a class="btn btn-gold" href=""><i class="fa fa-link"></i></a> </div>
                                            <!-- End Button -->
                                            <a class="close-overlay hidden">x</a> </div>
                                    </div>
                                </div>
                                <!-- Overlay Item -->
                            </div>
                            <!-- End Overlay Content -->
                        </article>
                        <!-- End Menu Item -->
                        <!-- Menu Item -->
                        <article class="menu-item pf-dishes pf-desert">
                            <!-- Overlay Content -->
                            <div class="overlay_content overlay-menu">
                                <!-- Overlay Item -->
                                <div class="overlay_item"> <img src="assets/img/masonry/5.jpg" alt="">
                                    <div class="overlay">
                                        <div class="icons">
                                            <h3>Food Name</h3>
                                            <h3>79.99 $</h3>
                                            <!-- Rating -->
                                            <fieldset class="rating">
                                                <span class="active"><i class="fa fa-star"></i></span> <span class="active"><i class="fa fa-star"></i></span> <span class="active"><i class="fa fa-star"></i></span> <span class="active"><i class="fa fa-star"></i></span> <span><i class="fa fa-star"></i></span>
                                            </fieldset>
                                            <!-- end Rating -->
                                            <!-- Button -->
                                            <div class="button"> <a class="btn btn-gold" href="#"><i class="fa fa-shopping-cart"></i></a> <a class="btn btn-gold" href=""><i class="fa fa-link"></i></a> </div>
                                            <!-- End Button -->
                                            <a class="close-overlay hidden">x</a> </div>
                                    </div>
                                </div>
                                <!-- Overlay Item -->
                            </div>
                            <!-- End Overlay Content -->
                        </article>
                        <!-- End Menu Item -->
                        <!-- Menu Item -->
                        <article class="menu-item pf-drinks pf-starter">
                            <!-- Overlay Content -->
                            <div class="overlay_content overlay-menu">
                                <!-- Overlay Item -->
                                <div class="overlay_item"> <img src="assets/img/masonry/6.jpg" alt="">
                                    <div class="overlay">
                                        <div class="icons">
                                            <h3>Food Name</h3>
                                            <h3>79.99 $</h3>
                                            <!-- Rating -->
                                            <fieldset class="rating">
                                                <span class="active"><i class="fa fa-star"></i></span> <span class="active"><i class="fa fa-star"></i></span> <span class="active"><i class="fa fa-star"></i></span> <span class="active"><i class="fa fa-star"></i></span> <span><i class="fa fa-star"></i></span>
                                            </fieldset>
                                            <!-- end Rating -->
                                            <!-- Button -->
                                            <div class="button"> <a class="btn btn-gold" href="#"><i class="fa fa-shopping-cart"></i></a> <a class="btn btn-gold" href=""><i class="fa fa-link"></i></a> </div>
                                            <!-- End Button -->
                                            <a class="close-overlay hidden">x</a> </div>
                                    </div>
                                </div>
                                <!-- Overlay Item -->
                            </div>
                            <!-- End Overlay Content -->
                        </article>
                        <!-- End Menu Item -->
                        <!-- Menu Item -->
                        <article class="menu-item pf-dishes pf-daily-menu">
                            <!-- Overlay Content -->
                            <div class="overlay_content overlay-menu">
                                <!-- Overlay Item -->
                                <div class="overlay_item"> <img src="assets/img/masonry/7.jpg" alt="">
                                    <div class="overlay">
                                        <div class="icons">
                                            <h3>Food Name</h3>
                                            <h3>79.99 $</h3>
                                            <!-- Rating -->
                                            <fieldset class="rating">
                                                <span class="active"><i class="fa fa-star"></i></span> <span class="active"><i class="fa fa-star"></i></span> <span class="active"><i class="fa fa-star"></i></span> <span class="active"><i class="fa fa-star"></i></span> <span><i class="fa fa-star"></i></span>
                                            </fieldset>
                                            <!-- end Rating -->
                                            <!-- Button -->
                                            <div class="button"> <a class="btn btn-gold" href="#"><i class="fa fa-shopping-cart"></i></a> <a class="btn btn-gold" href=""><i class="fa fa-link"></i></a> </div>
                                            <!-- End Button -->
                                            <a class="close-overlay hidden">x</a> </div>
                                    </div>
                                </div>
                                <!-- Overlay Item -->
                            </div>
                            <!-- End Overlay Content -->
                        </article>
                        <!-- End Menu Item -->
                        <!-- Menu Item -->
                        <article class="menu-item menu-item-fluid pf-drinks">
                            <!-- Overlay Content -->
                            <div class="overlay_content overlay-menu">
                                <!-- Overlay Item -->
                                <div class="overlay_item"> <img src="assets/img/masonry/8.jpg" alt="">
                                    <div class="overlay">
                                        <div class="icons">
                                            <h3>Food Name</h3>
                                            <h3>79.99 $</h3>
                                            <!-- Rating -->
                                            <fieldset class="rating">
                                                <span class="active"><i class="fa fa-star"></i></span> <span class="active"><i class="fa fa-star"></i></span> <span class="active"><i class="fa fa-star"></i></span> <span class="active"><i class="fa fa-star"></i></span> <span><i class="fa fa-star"></i></span>
                                            </fieldset>
                                            <!-- end Rating -->
                                            <!-- Button -->
                                            <div class="button"> <a class="btn btn-gold" href="#"><i class="fa fa-shopping-cart"></i></a> <a class="btn btn-gold" href=""><i class="fa fa-link"></i></a> </div>
                                            <!-- End Button -->
                                            <a class="close-overlay hidden">x</a> </div>
                                    </div>
                                </div>
                                <!-- Overlay Item -->
                            </div>
                            <!-- End Overlay Content -->
                        </article>
                        <!-- End Menu Item -->
                        <!-- Menu Item -->
                        <article class="menu-item pf-drinks pf-desert pf-dishes">
                            <!-- Overlay Content -->
                            <div class="overlay_content overlay-menu">
                                <!-- Overlay Item -->
                                <div class="overlay_item"> <img src="assets/img/masonry/9.jpg" alt="">
                                    <div class="overlay">
                                        <div class="icons">
                                            <h3>Food Name</h3>
                                            <h3>79.99 $</h3>
                                            <!-- Rating -->
                                            <fieldset class="rating">
                                                <span class="active"><i class="fa fa-star"></i></span> <span class="active"><i class="fa fa-star"></i></span> <span class="active"><i class="fa fa-star"></i></span> <span class="active"><i class="fa fa-star"></i></span> <span><i class="fa fa-star"></i></span>
                                            </fieldset>
                                            <!-- end Rating -->
                                            <!-- Button -->
                                            <div class="button"> <a class="btn btn-gold" href="#"><i class="fa fa-shopping-cart"></i></a> <a class="btn btn-gold" href=""><i class="fa fa-link"></i></a> </div>
                                            <!-- End Button -->
                                            <a class="close-overlay hidden">x</a> 
                                        </div>
                                    </div>
                                </div>
                                <!-- Overlay Item -->
                            </div>
                            <!-- End Overlay Content -->
                        </article>
                        <!-- End Menu Item -->
                        <!-- Menu Item -->
                        <article class="menu-item pf-desert pf-daily-menu">
                            <!-- Overlay Content -->
                            <div class="overlay_content overlay-menu">
                                <!-- Overlay Item -->
                                <div class="overlay_item"> <img src="assets/img/masonry/10.jpg" alt="">
                                    <div class="overlay">
                                        <div class="icons">
                                            <h3>Food Name</h3>
                                            <h3>79.99 $</h3>
                                            <!-- Rating -->
                                            <fieldset class="rating">
                                                <span class="active"><i class="fa fa-star"></i></span> <span class="active"><i class="fa fa-star"></i></span> <span class="active"><i class="fa fa-star"></i></span> <span class="active"><i class="fa fa-star"></i></span> <span><i class="fa fa-star"></i></span>
                                            </fieldset>
                                            <!-- end Rating -->
                                            <!-- Button -->
                                            <div class="button"> <a class="btn btn-gold" href="#"><i class="fa fa-shopping-cart"></i></a> <a class="btn btn-gold" href="menu_single.html"><i class="fa fa-link"></i></a> </div>
                                            <!-- End Button -->
                                            <a class="close-overlay hidden">x</a> </div>
                                    </div>
                                </div>
                                <!-- Overlay Item -->
                            </div>
                            <!-- End Overlay Content -->
                        </article>
                        <!-- End Menu Item -->
                    </div>
                    <!-- #menu end -->
                </div>
                <!-- end of container -->
            </section>
            <!-- End masonry -->
            <!-- RESERVATION 
    ============================================= -->
            <section id="slide2-03" class="reservation dark text-center">
                <!-- Bg Parallax -->
                <div class="bcg background33" data-center="background-position: 50% 0px;" data-bottom-top="background-position: 50% 100px;" data-top-bottom="background-position: 50% -100px;" data-anchor-target="#slide2-03">
                    <!-- Bg Transparent -->
                    <div class="bg-transparent padding-100">
                        <div class="container">
                            <div class="row">
                                <!-- Head Title -->
                                <div class="head_title">
                                    <i class="icon-intro"></i>
                                    <h1>RESERVATION</h1>
                                    <span class="welcome">Book your table</span>
                                </div>
                                <!-- End# Head Title -->

                                <!-- Reservation form style2-->
                                <form class="reserv_form reserv_style2" action="" method="post">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="row">
                                                <!-- Form group -->
                                                <div class="form-group">
                                                    <div class="row">
                                                        <div class="col-md-6 col-sm-6 col-sx-12">
                                                            <input name="name2" class="form-control" type="text" placeholder="Your Name *" required>
                                                        </div>
                                                        <div class="col-md-6 col-sm-6 col-sx-12">
                                                            <input name="email2" class="form-control" type="email" placeholder="email">
                                                        </div>
                                                        <div class="col-md-6 col-sm-6 col-sx-12">
                                                            <!-- Selct wrap -->
                                                            <div class="select_wrap">
                                                                <select class="form-control" name="occasion">
                                                                    <option value="one">Occasion *</option>
                                                                    <option value="d">One</option>
                                                                    <option value="two">Two</option>
                                                                    <option value="three">Three</option>
                                                                    <option value="four">Four</option>
                                                                    <option value="five">Five</option>
                                                                </select>
                                                            </div>
                                                            <!-- End select wrap -->
                                                        </div>
                                                        <div class="col-md-6 col-sm-6 col-sx-12">
                                                            <!-- Selct wrap -->
                                                            <div class="select_wrap">
                                                                <select class="form-control" name="food">
                                                                    <option value="one">Preferred food *</option>
                                                                    <option value="d">One</option>
                                                                    <option value="two">Two</option>
                                                                    <option value="three">Three</option>
                                                                    <option value="four">Four</option>
                                                                    <option value="five">Five</option>
                                                                </select>
                                                            </div>
                                                            <!-- End select wrap -->
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- End form group -->
                                                <!-- Form Group -->
                                                <div class="form-group">
                                                    <div class="row">
                                                        <div class="col-md-6 col-sm-6 col-sx-12">
                                                            <input name="branch" class="form-control" type="text" placeholder="Branch Name *" required>
                                                        </div>
                                                        <div class="col-md-6 col-sm-6 col-sx-12">
                                                            <input name="personnum" class="form-control" type="text" placeholder="Number of Persons">
                                                        </div>
                                                        <div class="col-md-6 col-sm-6 col-sx-12">
                                                            <input name="phone" class="form-control" type="tel" placeholder="Phone No.">
                                                        </div>
                                                        <div class="col-md-6 col-sm-6 col-sx-12 datepicker">
                                                            <input name="date" class="form-control" id="datetimepicker" placeholder="Date" type="text">
                                                            <i class="fa fa-calendar"></i> </div>
                                                    </div>
                                                </div>
                                                <!-- End form group -->
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <!-- form group -->
                                            <div class="form-group">
                                                <textarea name="comment2" placeholder="Message"></textarea>
                                            </div>
                                            <!-- End form group -->
                                        </div>
                                    </div>
                                    <div class="row element">
                                        <div class="loading2"></div>
                                        <button class="btn btn-gold white" name="submit" value="Send" id="reser-submit" type="submit">BOOK YOUR TABLE</button>
                                    </div>
                                </form>
                                <!-- End reserv home -->
                                <div class="done2">
                                    <strong>Thank you!</strong> We have received your message.
                                </div>
                                <!-- End reserv home -->
                            </div>
                        </div>
                    </div>
                    <!-- End bg transparent -->
                </div>
                <!-- End Bg Parallax -->
            </section>
            <!-- End RESERVATION -->
            <!-- Latest News
    ============================================= -->
            <section class="latest_news">
                <div class="container">
                    <div class="row">
                        <!-- Head Title -->
                        <div class="head_title">
                            <i class="icon-intro"></i>
                            <h1>Latest News</h1>
                            <span class="welcome">Stay up to Date</span>
                        </div>
                        <!-- End# Head Title -->

                        <!-- News Content -->
                        <div class="news-content dark">
                            <!-- News Item -->
                            <div class="news-item col-md-4 col-sm-4 col-xs-12">
                                <figure> 
                                  <img class="img-responsive" src="assets/img/blog/block4.jpg" alt="RELAXING AMBIENCE" />
                                    <figcaption class="text-center">
                                        <div class="fig_container"> <i class="fa fa-picture-o"></i>
                                            <h3><a href="">HAPPY CRISTMAS</a></h3>
                                            <p>Event</p>
                                            <div class="fig_content"> <a href="">Aenean commodo ligula eget dolor enean massa. Cum sociis natoque penatibus.</a> </div>
                                        </div>
                                        <span class="btn btn-gold primary-bg white">30 DECEMBER 2015</span> 
                                    </figcaption>
                                </figure>
                            </div>
                            <!-- End News Item -->
                            <!-- News Item -->
                            <div class="news-item col-md-4 col-sm-4 col-xs-12">
                                <figure> 
                                  <img class="img-responsive" src="assets/img/blog/block5.jpg" alt="RELAXING AMBIENCE" />
                                    <figcaption class="text-center">
                                        <div class="fig_container"> <i class="fa fa-video-camera"></i>
                                            <h3><a href="">VALENTINE DAY</a></h3>
                                            <p>news</p>
                                            <div class="fig_content"> <a href="blog_single_video.html"> Aenean commodo ligula eget dolor enean massa. Cum sociis natoque penatibus.</a> </div>
                                        </div>
                                        <span class="btn btn-gold primary-bg white">14 FEBURARY 2015</span> 
                                      </figcaption>
                                </figure>
                            </div>
                            <!-- End News Item -->
                            <!-- News Item -->
                            <div class="news-item col-md-4 col-sm-4 col-xs-12 ">
                                <figure> <img class="img-responsive" src="assets/img/blog/block6.jpg" alt="RELAXING AMBIENCE" />
                                    <figcaption class="text-center">
                                        <div class="fig_container"> <i class="fa fa-volume-up"></i>
                                            <h3><a href="">Global orchestra</a></h3>
                                            <p>Event</p>
                                            <div class="fig_content"> <a href="blog_single_soundclouds.html">Aenean commodo ligula eget dolor enean massa. Cum sociis natoque penatibus.</a> </div>
                                        </div>
                                        <span class="btn btn-gold primary-bg white">14 MAR4CH 2015</span> </figcaption>
                                </figure>
                            </div>
                            <!-- End News Item -->
                        </div>
                        <!-- End News Content -->
                    </div>
                </div>
            </section>
            <!-- End latest News-->
            <!-- App
    ============================================= -->
            <section id="slide-3-5" class="app dark">
                <!-- Bg Parallax -->
                <div class="bcg" data-center="background-position: 50% 0px;" data-bottom-top="background-position: 50% 100px;" data-top-bottom="background-position: 50% -100px;" data-anchor-target="#slide-3-5" style="background-image:url('assets/img/background/bg_11.jpg');">
                    <!-- Bg transparent -->
                    <div class="bg-transparent padding-50">
                        <div class="container">
                            <div class="row">
                                <div class="col-md-5 col-sm-0">
                                    <!-- App Img  -->
                                    <img class="absolute" src="assets/img/app.png" alt="">
                                    <!-- End App Img  -->
                                </div>
                                <div class="col-md-7 col-sm-12">
                                    <!-- App Content -->
                                    <div class="padding-100 app_content">
                                        <h1><span>Become</span> Life <span>More</span> Easier</h1>
                                        <p class="italic">We aim to home-produce as much as possible – for the best quality, and to reduce “food miles”. Our delicious cakes, traditional Devon scones, breads, soups, sauces and accompaniments are Even our bottled water is produced in-house, using a sophisticated seven-stage filtration .</p>
                                        <!-- Buttons -->
                                        <div class="buttons"> <a href="#" class="btn  btn-gold white">Google play store</a> <a href="#" class="btn btn-gold white">Apple store</a> </div>
                                        <!--End Buttons -->
                                    </div>
                                    <!-- End App Content -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <section class="extra_touch padding-100 text-center">
                <div class="container">
                    <div class="row">
                        <h2>Come & <span>Experiences</span> our best of world class cuisine</h2>
                        <a href="" class="btn black btn-gold ">GET IN TOUCH</a> </div>
                </div>
            </section>
        </div>
<?php
  $this->load->view("footer");
?>