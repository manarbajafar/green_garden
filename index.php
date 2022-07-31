
<!DOCTYPE html>
<html lang="en">

<head>
    <title>Home page</title>
    <meta charset="utf-8" name="viewport" content="width=device-width, initial-scale=1">
    <link href="css/homePage.css" rel="stylesheet">

</head>

<body>
    <header>
        <!-- nav bar -->
        <nav>
            <ul>
                <li id="shop-name"><b>Green Garden</b></li>
                <li style="float:right">
                    <a href="cart.php" id="cart-img"> <img src="img/shopping-cart.png " alt="The image dose not appear ,possibilty because of slow connection" style="width: 3vw;"></a>
                </li>
                <?php
                        session_start();
                        include("connection.php");
                        include("function.php");

                        $user_data = check_signin($con);

                        if(is_array($user_data)){
                            echo '<li style="float:right" class="dropdown">
                                <p style="font-weight:bold" class="dropbtn">'.$user_data[1].'</p>
                                    <div class="dropdown-content">
                                        <a href="logout.php">Log out</a>
                                    </div>
                                    </li>';
                        }
                        else{
                            echo '<a style="float:right" class="dropbtn" href="signin.php">Sign in</a> <a style="float:right" class="dropbtn" href="signup.php">Sign up</a>';
                        }

                ?>

                <li style="float:right" class="dropdown">
                    <a href="indoor/indoor.php" class="dropbtn">Indoor</a>
                    <div class="dropdown-content">
                        <a href="indoor/room.php">Room</a>
                        <a href="indoor/light.php">Lighting</a>
                        <a href="indoor/size.php">Size</a>
                        <a href="indoor/petsSafe.php">Pets safe</a>
                        <a href="indoor/care.php">Care level</a>
                    </div>
                </li>
                <li style="float:right" class="dropdown">
                    <a href="outdoor/outdoor.php" class="dropbtn">Outdoor</a>
                    <div class="dropdown-content">
                        <a href="outdoor/Space.php">Space</a>
                        <a href="outdoor/Light.php">Lighting</a>
                        <a href="outdoor/size.php">Size</a>
                        <a href="outdoor/petssafe.php">Pets safe</a>
                        <a href="outdoor/careLevel.php">Care level</a>
                    </div>
                </li>
            </ul>
        </nav>
        </nav>
    </header>
    <main>
        <!-- main section -->
        <div id="main-div">
            <div>
                <pre id="logo">Green 
    Garden</pre>
                <p id="store">-plants and happiness</p>
            </div>
            <div class="button-div">

                <!-- indoor button -->
                <div class="button">
                    <a href="indoor/indoor.php">
                        <button type="button" class="btn homePage-button"> Indoor </button></a>
                </div>
                <!-- outdoor button -->
                <div class="button">
                    <a href="outdoor/outdoor.php">
                        <button type="button" class="btn homePage-button" id="outbtn"> Outdoor <button> </a>
                </div>
            </div>
            <!-- main image -->
            <div id="mainImg">
                <img src="img/index1.png" alt="The image dose not appear ,possibilty because of slow connection" style="width:100%;">
            </div>
        </div>

        <!-- about us -->
        <div>
            <!-- label -->
            <h3 class="section-label">About us</h3>
            <!-- image and text -->
            <div id="about-us">
                <div id="image">
                    <img src="img/about-us.png" alt="The image dose not appear ,possibilty because of slow connection" style="width:100%;">
                </div>

                <p id="about-us-text">
                    In the green garden, we provide all kinds of natural plants,
                    <br>
                    and we will help you make the best choice!
                </p>
            </div>
        </div>

    </main>
    <!-- footer -->
    <footer class="footerparts ">
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
    </footer>
    <!-- end of footer -->
</body>

</html>