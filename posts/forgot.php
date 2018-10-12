<?php

include_once('../private/initialize.php');
if(isset($_POST['submit'])){
// check for valid email address
$UserEmail = $_POST['UserEmail'];

if(!filter_var($UserEmail, FILTER_VALIDATE_EMAIL)){
     $error[] = 'Please enter a valid email address';
}


$check_user="select * from users WHERE UserEmail='$UserEmail'";
$run=mysqli_query($db,$check_user);

if (mysqli_num_rows($run) == 0) {
echo ('Sorry, Your emails does not exists in our record');
}
else{
    $query = "SELECT DisplayName FROM users WHERE UserEmail = '$UserEmail' ";
    $r=mysqli_query($db,$query);
     
    //create a new random password
    
    $Password = substr(md5(uniqid(rand(),1)),3,10);
    $Password = md5($Password); //encrypted version for database entry
    //send email
$to = "$UserEmail";
$subject = "Password Recovery";
$body = "Hi $UserEmail, nn 
you or someone else have requested your account details. nn 
Here is your account information please keep this as you may need this at a later stage. nn
Your your password is $Password nn 
Your password has been reset please login and change your password .nn 
Regards Your Website";

$lheaders= "From: <contact@oprextra.com>rn";
$lheaders.= "Reply-To: noprely@oprextra.com";

mail($to, $subject, $body, $lheaders);
//update database
$sql = "UPDATE users SET Password='$Password' WHERE UserEmail = '$UserEmail'";
$rsent = true;
if ($rsent == true){
    echo "<p>Just sent an email with your account details to $UserEmail</p>n";
    echo redirect_to('../');    
}

}
}
 
?>


<?php require_once(SHARED_PATH. '/register_html_header.php') ?>
<body id="page-top" data-spy="scroll" data-target=".navbar">
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
                                    Reset Your Password:
                                </span>
                                
                                
                                <div class="wrap-input100 validate-input" data-validate = "Valid email is required: ex@abc.xyz">
                                    <input class="input100" type="text" name="UserEmail" required>
                                    <span class="focus-input100"></span>
                                    <span class="label-input100">Email</span>
                                </div>
            
                                    
                                </div>
                        
            
                                <div class="container-login100-form-btn">
                                    <input class="login100-form-btn" type="submit" value="Reset Password" name="submit">
                                </div>
                                
                            </form>
            
                            


                            <div class="login100-more" style="background-image: url('img/bg-01.jpg');">
                            </div>
                        </div>
                    </div>
                </div>
                
                            
            </div>
        </div>
    </div>
 </section>
        </body>
            </html>

