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
    <link rel="stylesheet" type="text/css" href="assets/admin/assets/css/themes/vertical-menu-nav-dark-template/materialize.css">
    <link rel="stylesheet" type="text/css" href="assets/admin/assets/css/themes/vertical-menu-nav-dark-template/style.css">
    <link rel="stylesheet" type="text/css" href="assets/admin/assets/css/pages/login.css">
    <link rel="stylesheet" type="text/css" href="assets/admin/assets/css/custom/custom.css">
    <link rel="stylesheet" type="text/css" href="assets/admin/assets/css/pages/register.css">

  </head>

  <body class="vertical-layout page-header-light vertical-menu-collapsible vertical-menu-nav-dark 1-column login-bg  blank-page blank-page" data-open="click" data-menu="vertical-menu-nav-dark" data-col="1-column">
    


    <div class="row" id = "">
      <div class="col s12">
        <div class="container">
          <div id="login-page" class="row">
          <div class="col s12 m6 l4 z-depth-4 card-panel border-radius-6 login-card bg-opacity-8" style="background: rgba(0, 0, 0, .14)">
            <form class="login-form">
              

              <div class="row">
                <div class="input-field col s12" style="text-align: center">
                  <!-- <h5 class="ml-4">Sign in</h5> -->
                  <img src="assets/img/logo_intro.png" style="width: 15rem">
                </div>
              </div>
              


              <div class="row margin">
                <div class="input-field col s12">
                  <i class="material-icons prefix pt-2">person_outline</i>
                  <input id="log_email" type="text">
                  <label for="log_email" class="center-align">Username</label>
                </div>
              </div>



              <div class="row margin">
                <div class="input-field col s12">
                  <i class="material-icons prefix pt-2">lock_outline</i>
                  <input id="log_pass" type="password">
                  <label for="log_pass">Password</label>
                </div>
              </div>
              

              <div class="row">
                <div class="input-field col s12">
                  <button type="button" id = "log_user" class="btn waves-effect waves-light border-round gradient-45deg-purple-deep-orange col s12">Login</button>
                </div>
              </div>
              




            </form>
          </div>
        </div>
        </div>
      </div>
    </div>


    <script src="assets/admin/assets/js/vendors.min.js" type="text/javascript"></script>
    <script src="assets/admin/assets/js/plugins.js" type="text/javascript"></script>
    <script src="assets/admin/assets/js/custom/custom-script.js" type="text/javascript"></script>
    

    <script>
      $(document).ready(function(){
        $("#log_user").on("click",function(){

          $.ajax({
            url:'admin_login/login_user',
            type:'post',
            data : {
              email : $("#log_email").val(),
              pass : $("#log_pass").val(),
              
            },
            dataType:'JSON',

            success:function(res){
              
              if(res == "true")
              {
                document.location.replace("admin_home");
              }
              else{
                alert("Invalid User!");
              }
            }
          });
        });
      });
    </script>
  </body>


</html>