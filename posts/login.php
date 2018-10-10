<?php

include_once('../private/initialize.php');
 require_once(SHARED_PATH .'/html_header.php');


if(isset($_POST['submit']))
{
    $UserEmail=$_POST['UserEmail'];
    $Password=$_POST['Password'];
    $DisplayName=$_POST['DisplayName'];
    $_SESSION['DisplayName'] = $_POST['DisplayName'];

    $check_user="select * from users WHERE UserEmail='$UserEmail'AND Password='$Password'";
    $query = mysqli_fetch_array($check_user);
    $status = $query['ActivationStatus'];
    $run=mysqli_query($db,$check_user);



    if(mysqli_num_rows($run)>0)
    {
        echo redirect_to('../');

        $_SESSION['UserEmail']=$UserEmail;//here session is used and value of $user_email store in $_SESSION.

    }
    else
    {
        echo "<script>alert('Email or password is incorrect!')</script>";
    }
}
?>

<html lang="en">


<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
<head>
	<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta http-equiv="content-type" content="text/html; charset=utf-8" />
	<meta name="author" content="admin@oprextra.com" />   
	<meta name="description" content="Oprextra - Read,post,Comment,Share,Earn !"/>
	<meta property="og:title" content="Oprextra - Read,post,,Comment,Share,Earn !"/>
	<meta property="og:site_name" content="Oprextra - Read,post,,Comment,Share,Earn !"/>
	<meta property="og:description" content="Oprextra - Read,post,,Comment,Share,Earn !"/>
	<meta property="og:image" content="info/newsimages/default.jpg"/>
	<meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Oprextra - Read post, share and earn money !</title>
    <link rel="icon" type="image/png" href="info/sitefront/img/favicon.png">
    <link rel="icon" sizes="192x192" href="info/android-icon.png">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU"
crossorigin="anonymous">
    <!--link rel="stylesheet" href="../cdnjs.cloudflare.com/ajax/libs/datepicker/0.6.5/datepicker.min.css" / --> 
	<link rel="stylesheet" href="css/style.css">
	<link rel="stylesheet" href="css/opr.css">
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/responsive.css">
	<link rel="stylesheet" href="css/font-awesome/css/font-awesome.min.css">
	<link rel="stylesheet" href="css/offcanvas.min.css">
	<link rel="stylesheet" href="css/owl.carousel.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">
    <link rel="stylesheet" href="css/util.css">
    <link rel="stylesheet" href="css/login.css">
    <link rel="stylesheet" href="vendor/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="fonts/Linearicons-Free-v1.0.0/icon-font.min.css">
    <link rel="stylesheet" href="vendor/animate/animate.css">	
    <link rel="stylesheet" href="vendor/css-hamburgers/hamburgers.min.css">
    <link rel="stylesheet" href="vendor/animsition/css/animsition.min.css">
    <link rel="stylesheet" href="vendor/select2/select2.min.css">	
    <link rel="stylesheet" href="vendor/daterangepicker/daterangepicker.css">
    <script src="https://apis.google.com/js/platform.js" async defer></script>

        <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
 
</head>
<body id="page-top" data-spy="scroll" data-target=".navbar">
<!-- Load Facebook SDK for JavaScript -->
  <div id="fb-root"></div>
  <script>(function(d, s, id) {
    var js, fjs = d.getElementsByTagName(s)[0];
    if (d.getElementById(id)) return;
    js = d.createElement(s); js.id = id;
    js.src = "https://connect.facebook.net/en_US/sdk.js#xfbml=1";
    fjs.parentNode.insertBefore(js, fjs);
  }(document, 'script', 'facebook-jssdk'));</script>
<section id="header_section_wrapper" class="header_section_wrapper">
    <div class="container">
        <div class="header-section">
            <div class="row">
                <div class="col-md-4">
                    <div class="left_section">
                        <!-- Time -->
                        <div class="social">
                            <a class="icons-sm fb-ic"><i class="fa fa-facebook"></i></a>
                            <!--Twitter-->
                            <a class="icons-sm tw-ic"><i class="fa fa-twitter"></i></a>
                            <!--Instagram-->
                            <a class="icons-sm inst-ic"><i class="fa fa-instagram"> </i></a>
                        </div>
                        <!-- Top Social Section -->
                    </div>
                    <!-- Left Header Section -->
                </div>
                <div class="col-md-4">
                    <div class="logo">
                        <a href="index.html" style="color: #222; text-decoration: none;"><h1>Oprextra</h1></a>
                    </div>
                    <!-- Logo Section -->
                </div>
                <div class="limiter">
                    <div class="container-login100">
                        <div class="wrap-login100">
                            <form class="login100-form validate-form" method="POST" action="">
                                <span class="login100-form-title p-b-43">
                                    Login to continue
                                </span>
                                
                                
                                <div class="wrap-input100 validate-input" data-validate = "Valid email is required: ex@abc.xyz">
                                    <input class="input100" type="text" name="UserEmail" required>
                                    <span class="focus-input100"></span>
                                    <span class="label-input100">Email</span>
                                </div>
                                
                                
                                <div class="wrap-input100 validate-input" data-validate="Password is required">
                                    <input class="input100" type="password" name="Password" required>
                                    <span class="focus-input100"></span>
                                    <span class="label-input100">Password</span>
                                </div>
            
                                <div class="flex-sb-m w-full p-t-3 p-b-32">
                                    <div class="contact100-form-checkbox">
                                        <input class="input-checkbox100" id="ckb1" type="checkbox" name="remember-me">
                                        <label class="label-checkbox100" for="ckb1">
                                            Remember me
                                        </label>
                                    </div>
            
                                    <div>
                                        <a href="#" class="txt1">
                                            Forgot Password?
                                        </a>
                                    </div>
                                </div>
                        
            
                                <div class="container-login100-form-btn">
                                    <input class="login100-form-btn" type="submit" value="Login" name="submit">
                                </div>
                                
                                <div class="text-center p-t-46 p-b-20">
                                    <span class="txt2">
                                        or sign in using
                                    </span>
                                </div>
            
                                    <a href="<?= 'https://accounts.google.com/o/oauth2/v2/auth?scope=' . urlencode('https://www.googleapis.com/auth/userinfo.profile https://www.googleapis.com/auth/userinfo.email https://www.googleapis.com/auth/plus.me') . '&redirect_uri=' . urlencode(CLIENT_REDIRECT_URL) . '&response_type=code&client_id=' . CLIENT_ID . '&access_type=online' ?>" class="login100-form-social-item flex-c-m bg2 m-r-5" onclick="onSignIn()">
                                        <i class="fa fa-google" aria-hidden="true"></i>
                                    </a>
                                </div>
                            </form>
            
                            


                            <div class="login100-more" style="background-image: url('img/bg-01.jpg');">
                            </div>
                        </div>
                    </div>
                </div>
                
                <script>
                    function onSignIn(googleUser) {
                    var profile = googleUser.getBasicProfile();
                    console.log('ID: ' + profile.getId()); // Do not send to your backend! Use an ID token instead.
                    console.log('Name: ' + profile.getName());
                    console.log('Image URL: ' + profile.getImageUrl());
                    console.log('Email: ' + profile.getEmail()); // This is null if the 'email' scope is not present.
                    }

                </script>
                
                <script src="vendor/jquery/jquery-3.2.1.min.js"></script>
                <script src="vendor/animsition/js/animsition.min.js"></script>
                <script src="vendor/bootstrap/js/popper.js"></script>
                <script src="vendor/bootstrap/js/bootstrap.min.js"></script>
                <script src="vendor/select2/select2.min.js"></script>
                <script src="vendor/daterangepicker/moment.min.js"></script>
                <script src="vendor/daterangepicker/daterangepicker.js"></script>
                <script src="vendor/countdowntime/countdowntime.js"></script>
                <script src="js/login.js"></script>            
            </div>
        </div>
    </div>
 </section>
        </body>
            </html>

