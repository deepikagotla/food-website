<?php
    $this->load->view("header");
?>

<body>

    <div id="loader">
        <div class="loader-item"> <img src="assets/img/logo_intro.png" alt="">
            <div class="spinner">
                <div class="bounce1"></div>
                <div class="bounce2"></div>
                <div class="bounce3"></div>
            </div>
        </div>
    </div>
    <div id="wrapper">
        <section class="banner dark">
            <div id="contact-parallax">
                <div class="bcg background39" data-center="background-position: 50% 0px;" data-bottom-top="background-position: 50% 100px;" data-top-bottom="background-position: 50% -100px;" data-anchor-target="#contact-parallax">
                    <div class="bg-transparent">
                        <div class="banner-content">
                            <div class="container">
                                <div class="slider-content"> <i class="icon-home-ico"></i>
                                    <h1>Login</h1>
                                    <p>Apply your information in few mintues</p>
                                    <ol class="breadcrumb">
                                        <li><a href="">Home</a>
                                        </li>
                                        <li>Login</li>
                                    </ol>
                                </div>
                            </div>
                        </div>
                        <!-- End Banner content -->
                    </div>
                    <!-- End bg trnsparent -->
                </div>
            </div>
            <!-- Service parallax -->
        </section>

        <header id="header" class="header-transparent">
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
                    <nav id="main-menu" class="dark">
                        <ul>
                            <li>
                                <a href="">
                                    <div>Home</div>
                                </a>
                                
                            </li>
                            <li class="mega-menu">
                                <a href="">
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
                        </ul>
                    </nav>
                </div>
            </div>
        </header>

        <div id="content">
            <section class="contact text-center padding-100">
                <div class="container">
                    <div class="row">
                        <!-- Head Title -->
                        <div class="head_title">
                            <i class="icon-intro"></i>
                            <h1>Register</h1>
                            <span class="welcome">Apply your information</span>
                        </div>

                        <div class="contact-form">
                            <form method="post" action="">

                                <div class="form-group">

                                    

                                    <div class="row">
                                        <div class="col-md-3 col-sm-3 col-sx-12"></div>
                                        <div class="col-md-6 col-sm-6 col-sx-12">
                                            <div class="element">
                                                <input type="text" id="email" class="form-control text" placeholder="Enter your email *" />
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-3 col-sm-3 col-sx-12"></div>
                                        <div class="col-md-6 col-sm-6 col-sx-12">
                                            <div class="element">
                                                <input type="password" id = "pass" class="form-control text" placeholder="Password *" />
                                            </div>
                                        </div>
                                    </div>
                                    
                                    <div class="row">

                                        <div class="element" style="margin-top: 5%">
                                            <button type="button" id="login" value="Send" class="btn btn-black">Login</button>
                                            <div class="loading"></div>
                                        </div>

                                    </div>
                                </div>
                                
                            </form>
                            <div class="done mt30"> <strong>Thank you!</strong> We have received your message. </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>

    <?php
        $this->load->view("footer");
    ?>


    <script>
        $(document).ready(function(){
            $("#login").on("click",function(){

                $.ajax({
                    url : "login/login_user",
                    type: "post",
                    data : {
                        email : $("#email").val(),
                        pass : $("#pass").val()
                    },
                    dataType : "JSON",
                    success : function(res)
                    {
                        if(res == "true")
                        {
                            document.location.replace("home");
                        }else{
                            alert("Invalid User");
                        }
                    }
                })
            })
        })
    </script>
        