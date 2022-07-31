<!DOCTYPE html>
<html lang="en">

<head>
    <title>Pets Safe Indoor Plants</title>
    <meta charset="utf-8">
    <link href="../css/outdoor-indoor.css" rel="stylesheet">
    <link href="../css/pages.css" rel="stylesheet">
    <link href="../css/homePage.css" rel="stylesheet">

</head>

<body>
<header>
        <!-- nav bar -->
        <nav>
            <ul>
                <li id="shop-name" style="cursor: pointer;" onclick="document.location.href='../index.php'"><b>Green
                        Garden</b></li>
                <li style="float:right">
                    <a href="../cart.php" id="cart-img"> <img src="../img/shopping-cart.png"  alt="The image dose not appear ,possibilty because of slow connection" style="width: 3vw;"></a>
                </li>
                <?php
                        session_start();
                        include("../connection.php");
                        include("../function.php");

                        $user_data = check_signin($con);

                        if(is_array($user_data)){
                            echo '<li style="float:right" class="dropdown">
                                <p style="font-weight:bold" class="dropbtn">'.$user_data[1].'</p>
                                    <div class="dropdown-content">
                                        <a href="../logout.php">Log out</a>
                                    </div>
                                    </li>';
                        }
                        else{
                            echo '<a style="float:right" class="dropbtn" href="signin.php">Sign in</a> <a style="float:right" class="dropbtn" href="signup.php">Sign up</a>';
                        }

                ?>
                <li style="float:right" class="dropdown">
                    <a href=".indoor.php" class="dropbtn">Indoor</a>
                    <div class="dropdown-content">
                        <a href="room.php">Room</a>
                        <a href="light.php">Lighting</a>
                        <a href="size.php">Size</a>
                        <a href="petsSafe.php">Pets safe</a>
                        <a href="care.php">Care level</a>
                    </div>
                </li>
                
                <li style="float:right" class="dropdown">
                    <a href="../outdoor/Outdoor.php" class="dropbtn">Outdoor</a>
                    <div class="dropdown-content">
                        <a href="../outdoor/Space.php">Space</a>
                        <a href="../outdoor/Light.php">Lighting</a>
                        <a href="../outdoor/size.php">Size</a>
                        <a href="../outdoor/petssafe.php">Pets safe</a>
                        <a href="../outdoor/careLevel.php">Care level</a>
                    </div>
                </li>
            </ul>
        </nav>
        </nav>
    </header>
    <main>
        <!-- main section -->
        <div id="main-div">

            <!-- pets safe image and label -->
            <div id="indoor-page-img">
                <img src="../img/section.png"   alt="The image dose not appear ,possibilty because of slow connection" style="width: 100%;">
                <!--change-->
                <h1 id="page-label-special">Pets safe plants</h1>

            </div>


        </div>
        <!-- end of main div-->
        <div class="products-section">
            <br>
            <div class="product">

                <div class="display">

                    <img class="item-img"   alt="The image dose not appear ,possibilty because of slow connection" src="../img/aglaonemaraceae.png">
                    <h1 class="plant-name-indoor plant-name">Aglaonema</h1>
                    <h1 class="plant-price-indoor plant-price">63SR</h1>
                    <div class="rec-indoor"></div>

                </div>

                <div class="description-indoor description">
                    <div class="table">
                        <table>
                            <tr>
                                <th>Space:</th>
                                <td>Bedroom or kitchen</td>
                            </tr>
                            <tr>
                                <th>Lighting:</th>
                                <td>Shade</td>
                            </tr>
                            <tr>
                                <th>Pets:</th>
                                <td>Safe</td>
                            </tr>
                            <tr>
                                <th>Size:</th>
                                <td>25cm</td>
                            </tr>
                            <tr>
                                <th>Care level:</th>
                                <td>Easy</td>
                            </tr>
                        </table>
                    </div>
                    <button class="add-to-bag"><b>add to bag</b></button>
                </div>
            </div>
            <div class="product">
                <div class="display">

                    <img class="item-img"   alt="The image dose not appear ,possibilty because of slow connection" src="../img/ChlorophytumComosum.png">
                    <h1 class="plant-name-indoor plant-name">Chlorophytum Comosum</h1>
                    <h1 class="plant-price-indoor plant-price">28SR</h1>
                    <div class="rec-indoor"></div>

                </div>
                <div class="description-indoor description">
                    <div class="table">
                        <table>
                            <tr>
                                <th>Space:</th>
                                <td>Bedroom or kitchen</td>
                            </tr>
                            <tr>
                                <th>Lighting:</th>
                                <td>Shade</td>
                            </tr>
                            <tr>
                                <th>Pets:</th>
                                <td>Safe</td>
                            </tr>
                            <tr>
                                <th>Size:</th>
                                <td>30cm</td>
                            </tr>
                            <tr>
                                <th>Care level:</th>
                                <td>Needs care</td>
                            </tr>
                        </table>
                    </div>
                    <button class="add-to-bag"><b>add to bag</b></button>
                </div>
            </div>
            <div class="product">
                <div class="display">

                    <img class="item-img"   alt="The image dose not appear ,possibilty because of slow connection" src="../img/bird's.png">
                    <h1 class="plant-name-indoor plant-name">Bird's Nest Fern</h1>
                    <h1 class="plant-price-indoor plant-price">56.08SR</h1>
                    <div class="rec-indoor"></div>

                </div>

                <div class="description-indoor description">
                    <div class="table">
                        <table>
                            <tr>
                                <th>Space:</th>
                                <td>Bathroom</td>
                            </tr>
                            <tr>
                                <th>Lighting:</th>
                                <td>Sun</td>
                            </tr>
                            <tr>
                                <th>Pets:</th>
                                <td>Safe</td>
                            </tr>
                            <tr>
                                <th>Size:</th>
                                <td>61cm</td>
                            </tr>
                            <tr>
                                <th>Care level:</th>
                                <td>Needs care</td>
                            </tr>
                        </table>
                    </div>
                    <button class="add-to-bag"><b>add to bag</b></button>
                </div>
            </div>
        </div>
        <div class="products-section">
            <br>
            <div class="product">

                <div class="display">

                    <img class="item-img"  alt="The image dose not appear ,possibilty because of slow connection"  src="../img/mothorchid.png">
                    <h1 class="plant-name-indoor plant-name">Moth orchid</h1>
                    <h1 class="plant-price-indoor plant-price">87SR</h1>
                    <div class="rec-indoor"></div>

                </div>
                <div class="description-indoor description">
                    <div class="table">
                        <table>
                            <tr>
                                <th>Space:</th>
                                <td>Living room or bathroom</td>
                            </tr>
                            <tr>
                                <th>Lighting:</th>
                                <td>Shade</td>
                            </tr>
                            <tr>
                                <th>Pets:</th>
                                <td>Safe</td>
                            </tr>
                            <tr>
                                <th>Size:</th>
                                <td>20cm</td>
                            </tr>
                            <tr>
                                <th>Care level:</th>
                                <td>Needs care</td>
                            </tr>
                        </table>
                    </div>
                    <button class="add-to-bag"><b>add to bag</b></button>
                </div>
            </div>
        </div>

    </main>


    <!-- footer -->
    <footer class="footerparts ">
        <div class="bg">
            <h1 style="font-size: 1.7vw !important; margin-top: 5%;">Contact us!</h1>
            <div id="icons" style="width: 40%;">
                <div class="iconscontainer footericonscontainer">
                    <img src="../img/mail.png "   alt="The image dose not appear ,possibilty because of slow connection" width="60%">
                </div>
                <div class=" iconscontainer footericonscontainer">
                    <img src="../img/inst.png "   alt="The image dose not appear ,possibilty because of slow connection" width="60%">
                </div>
                <div class=" iconscontainer footericonscontainer">
                    <img src="../img/twitter.png "  alt="The image dose not appear ,possibilty because of slow connection"  width="55%">
                </div>
            </div>
        </div>
        <img class="imgfooter" src="../img/casual-life-3d-likes.png"   alt="The image dose not appear ,possibilty because of slow connection" height="40%" width="60%">
        <small style="float: left;"> Internet application project 2021</small>
    </footer>
    <!-- end of footer -->
</body>

</html>