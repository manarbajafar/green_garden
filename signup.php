<?php
session_start();


if($_SERVER['REQUEST_METHOD'] == "POST"){
    include("connection.php");  
    $user_name = $_POST['user_name'];
    $user_email = $_POST['user_email'];
    $user_number = $_POST['user_number'];
    $user_password = $_POST['user_password'];
    $user_password_con = $_POST['user_password_con'];

    // check if empty
    if(!empty($user_name) && !empty($user_email) && !empty($user_number)&& !empty($user_password)&& !empty($user_password_con)){
        // email validation
        if (filter_var($user_email, FILTER_VALIDATE_EMAIL)){ // filter_var() function Validates whether the value is a valid e-mail address.
            // phone number validation 
           if(preg_match('/^[0-9]{10}+$/', $user_number)){ // The preg_match() function returns whether a match was found in a string.
                // check if passwords mach
                if(strcmp($user_password,$user_password_con) != 0){
                    echo '<p class="passmass">THE PASSWORD DOES NOT MATCH</p>';
                }
                else{
                    // password validation - more than 8 charecter , number , uppercase , lowercase , spical charecter 
                    if(strlen($user_password) >= 8 && preg_match('@[0-9]@', $user_password) && preg_match('@[A-Z]@', $user_password) && preg_match('@[a-z]@', $user_password) &&  preg_match('@[^\w]@', $user_password)){ 
                        //check if email is already used
                        $check_email_query = "SELECT email FROM customer WHERE email = '$user_email' limit 1";
                        $r = mysqli_query ($con, $check_email_query);
                        $rows = mysqli_num_rows($r);
                        // check if phone number is used 
                        $check_phone_query = "SELECT phone_number FROM customer WHERE phone_number = '$user_number' limit 1";
                        $re = mysqli_query ($con, $check_phone_query);
                        $re_rows = mysqli_num_rows($re);
                        if($row==0){
                            if($re_rows==0){
                                // decrypte the password using the [password_hash(String password , PASSWORD_DEFAULT)] function 
                                //PASSWORD_DEFAULT = Use the bcrypt algorithm 
                                $en_password = password_hash($user_password, PASSWORD_DEFAULT);

                                //insert new user data to database  
                                $inser_new_user_query = "INSERT INTO customer (customer_id, cos_name, phone_number, cos_password, email) VALUES (0, '$user_name' , '$user_number' ,'$en_password' ,'$user_email' )";     
                                                                
                                // Execute the query.   
                                mysqli_query ($con, $inser_new_user_query);
                                mysqli_close($con);
                                header("Location: signin.php");
                            }
                            else{
                                echo '<p class="passmass">The phone number is used.</p>';
                                mysqli_close($con);
                            }
                        }
                        else{
                            echo '<p class="passmass">The email is used.</p>';
                            mysqli_close($con);
                        }
                    }
                    else{
                        echo '<p class="passmass">Please follow passwords guidelines.</p>';
                        echo '<p class="passguidelines">PASSWORD GUIDELINES:<br>Must be at least 8 characters in length.<br>Must contain at least one number, one upper case letter, one lower case letter.<br>Must contain at least one special character.</p>';
                    }
                }
           }
           else{ 
            echo '<p class="passmass">Invalid phone number.</p>';
           }
        } 
        else { 
            echo '<p class="passmass">Invalid email address.</p>';
        }    
    }
    else{
        echo '<p class="passmass">Complete Your Information.</p>';
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <title>Sign Up</title>
    <meta charset="utf-8" name="viewport" content="width=device-width, initial-scale=1">
    <link href="css/homePage.css" rel="stylesheet">
    <link href="css/sign-in_and_sign-up.css" rel="stylesheet">
</head>

<body>
    <header>

    </header>
    <main>

        <div class="signup-box">
            <div class="signup">
                <div id="payment-img">
                    <img src="sign-in-sign-up.png" alt="The image dose not appear ,possibilty because of slow connection" style="width: 100%; margin-bottom: 10%;">
                    <p id="motto">Plants and happiness</p>
                </div>
                <div id="signup-form">
                    <form action=""  method="post">
                        <strong style="font-size: 3vw;">Sign up</strong><br>
                        <input class="field" type="text"  placeholder="name" name="user_name" value="<?php echo $_POST['user_name'] ?? ''; ?>">

                        <input class="field" type="text"  placeholder="email" name="user_email" value="<?php echo $_POST['user_email'] ?? ''; ?>">

                        <input class="field" type="tel"   placeholder="phone number" name="user_number" value="<?php echo $_POST['user_number'] ?? ''; ?>">

                        <input class="field" type="password"  placeholder="password" name="user_password">

                        <input class="field" type="password"  placeholder="confirm password" name="user_password_con">

                        <button type="submit" class="btn btn-proceed">Sign up</button>
                        <br>
                        <span>Already have an account? </span><a href="signin.php">Sign In</a>
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