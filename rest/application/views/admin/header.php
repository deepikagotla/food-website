<!DOCTYPE html>

<html class="loading" lang="en" data-textdirection="ltr">

	<head>
	    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	    <meta http-equiv="X-UA-Compatible" content="IE=edge">
	    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
	    <meta name="description" content="Materialize is a Material Design Admin Template,It's modern, responsive and based on Material Design by Google.">
	    <meta name="keywords" content="materialize, admin template, dashboard template, flat admin template, responsive admin template, eCommerce dashboard, analytic dashboard">
	    <meta name="author" content="ThemeSelect">
	    <title>Admin Panel</title>
	    <link rel="apple-touch-icon" href="assets/admin/assets/images/favicon/apple-touch-icon-152x152.png">
	    <link rel="shortcut icon" type="image/x-icon" href="assets/admin/assets/images/favicon/favicon-32x32.png">
	    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

	    <link rel="stylesheet" type="text/css" href="assets/admin/assets/vendors/vendors.min.css">
	    <link rel="stylesheet" type="text/css" href="assets/admin/assets/vendors/animate-css/animate.css">
	    <link rel="stylesheet" type="text/css" href="assets/admin/assets/vendors/chartist-js/chartist.min.css">
	    <link rel="stylesheet" type="text/css" href="assets/admin/assets/vendors/chartist-js/chartist-plugin-tooltip.css">
	    <link rel="stylesheet" type="text/css" href="assets/admin/assets/css/themes/vertical-menu-nav-dark-template/materialize.css">
	    <link rel="stylesheet" type="text/css" href="assets/admin/assets/css/themes/vertical-menu-nav-dark-template/style.css">
	    <link rel="stylesheet" type="text/css" href="assets/admin/assets/css/pages/dashboard-modern.css">
	    <link rel="stylesheet" type="text/css" href="assets/admin/assets/css/pages/intro.css">
	    <link rel="stylesheet" type="text/css" href="assets/admin/assets/css/custom/custom.css">

      <link rel="stylesheet" type="text/css" href="assets/admin/assets/vendors/flag-icon/css/flag-icon.min.css">
      <link rel="stylesheet" type="text/css" href="assets/admin/assets/vendors/data-tables/css/jquery.dataTables.min.css">
      <link rel="stylesheet" type="text/css" href="assets/admin/assets/vendors/data-tables/extensions/responsive/css/responsive.dataTables.min.css">
      <link rel="stylesheet" type="text/css" href="assets/admin/assets/vendors/data-tables/css/select.dataTables.min.css">
      <link rel="stylesheet" type="text/css" href="assets/admin/assets/css/pages/data-tables.css">


	</head>

  <body class="vertical-layout page-header-light vertical-menu-collapsible vertical-menu-nav-dark 2-columns  " data-open="click" data-menu="vertical-menu-nav-dark" data-col="2-columns">

    <header class="page-topbar" id="header">
      <div class="navbar navbar-fixed"> 
        <nav class="navbar-main navbar-color nav-collapsible sideNav-lock navbar-dark gradient-45deg-purple-deep-orange gradient-shadow">
          <div class="nav-wrapper">
            
          </div>

          <nav class="display-none search-sm">
            <div class="nav-wrapper">
              <form>
                <div class="input-field">
                  <input class="search-box-sm" type="search" required="">
                  <label class="label-icon" for="search"><i class="material-icons search-sm-icon">search</i></label><i class="material-icons search-sm-close">close</i>
                </div>
              </form>
            </div>
          </nav>
        </nav>
      </div>
    </header>














    <aside class="sidenav-main nav-expanded nav-lock nav-collapsible sidenav-light navbar-full sidenav-active-rounded">
      <div class="brand-sidebar">
        <h1 class="logo-wrapper">
          <a class="brand-logo darken-1" href="">
            <img src="assets/admin/assets/images/logo/materialize-logo.png" alt="materialize logo"/>
            <span class="logo-text hide-on-med-and-down">Admin Panel</span>
          </a>
          <a class="navbar-toggler" href="#">
            <i class="material-icons">radio_button_checked</i>
          </a>
        </h1>
      </div>


      <ul class="sidenav sidenav-collapsible leftside-navigation collapsible sidenav-fixed menu-shadow" id="slide-out" data-menu="menu-navigation" data-collapsible="menu-accordion">

        <?php
          if($title == "home")
          {
            $active = "active";
          }
          else{
            $active = "";
          }
        ?>
        <li class="<?=$active?> bold">
          <a class="waves-effect waves-cyan <?=$active?>" href="admin_home">
            <i class="material-icons">settings_input_svideo</i>
            <span class="menu-title" data-i18n="">Home</span>
            <!-- <span class="badge new badge pill pink accent-2 float-right mr-10"></span> -->
          </a>
        </li>


        
        <?php
        if($title == "all_orders")
        {
          $active = "active";
        }else{
          $active = "";
        }
        ?>
          

          <li class="<?=$active?> bold">
            <a class="waves-effect waves-cyan <?=$active?>" href="admin_order">
              <i class="material-icons">list_alt</i>
              <span class="menu-title" data-i18n="">Orders</span>
              <!-- <span class="badge new badge pill pink accent-2 float-right mr-10"></span> -->
            </a>
          </li>
        
          
          <?php
          if($title == "menu")
          {
            $active = "active";
          }else{
            $active = "";
          }
          ?>
            

            <li class="<?=$active?> bold">
              <a class="waves-effect waves-cyan <?=$active?>" href="admin_menu">
                <i class="material-icons">book</i>
                <span class="menu-title" data-i18n="">Menu</span>
              </a>
            </li>

          <?php
          if($title == "dish")
          {
            $active = "active";
          }else{
            $active = "";
          }
          ?>
            

            <li class="<?=$active?> bold">
              <a class="waves-effect waves-cyan <?=$active?>" href="admin_dish">
                <i class="material-icons">local_dining</i>
                <span class="menu-title" data-i18n="">Dishes</span>
              </a>
            </li>
        

        <?php
          if($title == "customer")
          {
            $active = "active";
          }
          else{
            $active = "";
          }
        ?>

        <li class="<?=$active?> bold">
          <a class="waves-effect waves-cyan <?=$active?>" href="admin_customer">
            <i class="material-icons">face</i>
            <span class="menu-title" data-i18n="">Customers</span>
            <!-- <span class="badge new badge pill pink accent-2 float-right mr-10"></span> -->
          </a>
        </li>

        


      </ul>
      <div class="navigation-background"></div><a class="sidenav-trigger btn-sidenav-toggle btn-floating btn-medium waves-effect waves-light hide-on-large-only" href="#" data-target="slide-out"><i class="material-icons">menu</i></a>
    </aside>
