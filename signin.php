<?php
session_start();


if($_SERVER['REQUEST_METHOD'] == "POST"){
    include("connection.php");  
    $user_email = $_POST['user_email'];
    $user_password = $_POST['user_password'];

    if(!empty($user_email) && !empty($user_password)){
        // check if the email is in the database [admin]
        $check_email_pass_query = "SELECT * FROM admindb WHERE email = '$user_email' limit 1";        
        $r = mysqli_query ($con, $check_email_pass_query);
        $rows = mysqli_num_rows($r);
        if($rows >0){ // found email match in database [admin]
            $user_data = mysqli_fetch_array ($r); // retrive user data
            mysqli_close($con);
            $db_password = $user_data['ad_password'];
            // check if enterd-password match database-password, return 1 if match 
            if(password_verify($user_password,$db_password)){ 
                // pass the user id value to the session 
                $_SESSION['users_id'] = $user_data['admin_id'];
                header("Location: index.php");
                die;
            }
            else{
                echo '<p class="passwordin">!!'.$user_password.'</p>';
                //echo '<p class="passwordin">The email or password is not correct.</p>';
            }
            
        }   
        else{
            // check if the email is in the database [costumer]
            $check_email_pass_query = "SELECT * FROM customer WHERE email = '$user_email' limit 1";        
            $r = mysqli_query ($con, $check_email_pass_query);
            $rows = mysqli_num_rows($r);
            if($rows >0){ // found email match in database
                $user_data = mysqli_fetch_array ($r); // retrive user data
                mysqli_close($con);
                $db_password = $user_data['cos_password'];
                // check if enterd-password match database-password, return 1 if match 
                if(password_verify($user_password,$db_password)){ 
                    // pass the user id value to the session 
                    $_SESSION['users_id'] = $user_data['customer_id'];
                    header("Location: index.php");
                    die;
                }
                else{
                    echo '<p class="passwordin">The email or password is not correct.</p>';
                }
                
            }   
            else{
                echo '<p class="passwordin">The email or password is not correct.</p>';
            }
        }
    }
    else{
        echo '<p class="passwordin">Complete Your Information.</p>';
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <title>Sign In</title>
    <meta charset="utf-8" name="viewport" content="width=device-width, initial-scale=1">
    <link href="css/homePage.css" rel="stylesheet">
    <link href="css/sign-in_and_sign-up.css" rel="stylesheet">
</head>

<body>
    <header>

    </header>
    <main>

        <div class="signin-box">
            <div class="signin">
                <div id="payment-img">
                    <img src="sign-in-sign-up.png" alt="The image dose not appear ,possibilty because of slow connection" style="width: 100%; margin-bottom: 10%;">
                    <p id="motto">Plants and happiness</p>
                </div>
                <div id="signin-form">
                    <form action=""  method="post">
                        <strong style="font-size: 3vw;">Sign in</strong><br>
                        <input class="field" type="text"  placeholder="email" name="user_email" value="<?php echo $_POST['user_email'] ?? ''; ?>">

                        <input class="field" type="password"  placeholder="password" name="user_password">

                        <button type="submit" class="btn btn-proceed">Sign in</button>

                        <br>
                        <span>Don't have an account? </span><a href="signup.php">Sign Up</a>
                    </form>
                </div>
            </div>
        </div>

        </div>


    </main>
    <!-- footer -->
    <!-- <footer class="footerparts ">
        <div class="bg">
            <h1 style="font-size: 1.7vw !important; margin-top: 5%;">Contact us!</h1>
            <div id="icons" style="width: 40%;">
                <div class="iconscontainer footericonscontainer">
                    <img src="img/mail.png " alt="The image dose not appear ,possibilty because of slow connection" width="60%">
                </div>
                <div class=" iconscontainer footericonscontainer">
                    <img src="img/inst.png "  alt="The image dose not appear ,possibilty because of slow connection" width="60%">
                </div>
                <div class=" iconscontainer footericonscontainer">
                    <img src="img/twitter.png " alt="The image dose not appear ,possibilty because of slow connection"  width="55%">
                </div>
            </div>
        </div>
        <img class="imgfooter" src="img/casual-life-3d-likes.png"  alt="The image dose not appear ,possibilty because of slow connection" height="40%" width="60%">
        <small style="float: left;"> Internet application project 2021</small>
    </footer> -->
    <!-- end of footer -->
</body>

</html>