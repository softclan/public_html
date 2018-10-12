<?php

include_once('../private/initialize.php');
  require_once(SHARED_PATH. '/register_html_header.php'); 

?>


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
                            <form class="login100-form validate-form" method="POST">
                                <span class="login100-form-title p-b-43">
                                    Register to Continue
                                </span>
                                
                                <div class="wrap-input100 validate-input">
                                    <input class="input100" type="text" name="Name">
                                    <span class="focus-input100"></span>
                                    <span class="label-input100">FullName</span>
                                </div>
                                                                
                                <div class="wrap-input100 validate-input">
                                    <input class="input100" type="text" name="DisplayName">
                                    <span class="focus-input100"></span>
                                    <span class="label-input100">Username</span>
                                </div>
                                
                                <div class="wrap-input100 validate-input" data-validate = "Valid email is required: ex@abc.xyz">
                                    <input class="input100" type="text" name="UserEmail" required>
                                    <span class="focus-input100"></span>
                                    <span class="label-input100">Email Address</span>
                                </div>
                                
                                <div class="wrap-input100 validate-input">
                                    <input class="input100" type="text" name="BankName">
                                    <span class="focus-input100"></span>
                                    <span class="label-input100">Bank Name</span>
                                </div>

                                <div class="wrap-input100 validate-input">
                                    <input class="input100" type="text" name="AccountNumber">
                                    <span class="focus-input100"></span>
                                    <span class="label-input100">Account Number</span>
                                </div>
                                
                                <div class="wrap-input100 validate-input" data-validate="Password is required">
                                    <input class="input100" type="password" name="Password" required>
                                    <span class="focus-input100"></span>
                                    <span class="label-input100">Password</span>
                                </div>
            
                                <div class="wrap-input100 validate-input" data-validate="Password is required">
                                    <input class="input100" type="password" name="Password"">
                                    <span class="focus-input100"></span>
                                    <span class="label-input100">Confirm Password</span>
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
                                    <input class="login100-form-btn" type="submit" name="register" value="Register">
                                </div>
                                
                                <div class="text-center p-t-46 p-b-20">
                                    <span class="txt2">
                                        or sign up using
                                    </span>
                                </div>
            
                                <div class="login100-form-social flex-c-m">
                                    <a href="#" class="login100-form-social-item flex-c-m bg1 m-r-5">
                                        <i class="fa fa-facebook-f" aria-hidden="true"></i>
                                    </a>
            
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
<?php

if(isset($_POST['register']))
{
    $Name=$_POST['Name'];//here getting result from the post array after submitting the form.
    $DisplayName=$_POST['DisplayName'];//same
    $UserEmail=$_POST['UserEmail'];//same
    $Password= $_POST['Password'];//same
    $password_hash = md5($Password);
    $AccountNumber=$_POST['AccountNumber'];//same
    $BankName=$_POST['$BankName'];//same
    $_SESSION['DisplayName'] = $_POST['DisplayName'];

    if($Name=='')
    {
        //javascript use for input checking
        echo"<script>alert('Please enter the full name')</script>";
exit();//this use if first is not work then other will not show
    }

    if($DisplayName=='')
    {
        echo"<script>alert('Please enter Your User Name')</script>";
exit();
    }

    if($UserEmail=='')
    {
        echo"<script>alert('Please enter the email')</script>";
    exit();
    }

    if ($Password!==$Password){
        echo"script>alert('Passwords do not match')</script>";
    }

    if($AccountNumber=='')
    {
        echo"<script>alert('Please enter your account number')</script>";
    exit();
    }


//here query check whether if user already registered so can't register again.
$check_email_query="select * from users WHERE UserEmail='$UserEmail'";
$run_query=mysqli_query($db,$check_email_query);

if(mysqli_num_rows($run_query)>0)
{
echo "<script>alert('Email $UserEmail is already exist in our database, Please try another one!')</script>";
exit();
}
//insert the user into the database.
    $Password = md5($Password);
    $insert_user="insert into users (Name,Password,UserEmail, DisplayName, BankName, AccountNumber) VALUE ('$Name','$Password','$UserEmail', '$DisplayName', '$BankName', '$AccountNumber')";
    if(mysqli_query($db,$insert_user))

    {
        $UserID = $UserID['UserID'];
    $link="http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]"."activateme.php?id=" . $user_id;
    $toEmail = $_POST["email"];
    $subject = "email Activation";
    $content = "Click this link to activate your account. <a href='" . $link . "'>" . $link . "</a>";
    $mailHeaders = "From: Oprextra\r\n";
    mail($toEmail, $subject, $content, $mailHeaders);
        echo"<script>window.open('thank-you.php','_self')</script>";
    }

}
    if (isset($_POST['remember-me'])){
        session_set_cookie_params('604800');//one week in seconds
        session_regenerate_id(true);
    }
?>