<?php

include_once('../private/initialize.php');



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


<?php require_once(SHARED_PATH. '/register_html_header.php') ?>
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

