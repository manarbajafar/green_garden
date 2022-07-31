<!DOCTYPE html>
<html lang="en">

<head>
    <title>Pets Safe Outdoor Plants</title>
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
                    <a href="../indoor/indoor.php" class="dropbtn">Indoor</a>
                    <div class="dropdown-content">
                        <a href="../indoor/room.php">Room</a>
                        <a href="../indoor/light.php">Lighting</a>
                        <a href="../indoor/size.php">Size</a>
                        <a href="../indoor/petsSafe.php">Pets safe</a>
                        <a href="../indoor/care.php">Care level</a>
                    </div>
                </li>
                
                <li style="float:right" class="dropdown">
                    <a href="Outdoor.php" class="dropbtn">Outdoor</a>
                    <div class="dropdown-content">
                        <a href="Space.php">Space</a>
                        <a href="Light.php">Lighting</a>
                        <a href="size.php">Size</a>
                        <a href="petssafe.php">Pets safe</a>
                        <a href="careLevel.php">Care level</a>
                    </div>
                </li>
            </ul>
        </nav>
        </nav>
    </header>

    <main>
        <div id="main-div">
            <!--  outdoor light image and label -->
            <div id="outdoor-light-img">
                <img src="../img/section.png"   alt="The image dose not appear ,possibilty because of slow connection" style="width: 100%;">
                <h1 id="page-label-special">Pets Safe Plants</h1>

            </div>
        </div>
        <div id="safe-plants" class="safe-plants">
            <div class="products-section">
                <br>
                <div class="product">

                    <div class="display">
                        <img class="item-img"  alt="The image dose not appear ,possibilty because of slow connection" src="../img/strlizia.png">
                        <h1 class="plant-name">StreliziaNicolai</h1>
                        <h1 class="plant-price">112SR </h1>
                        <div class="rec"></div>
                    </div>

                    <div class="description">
                        <div class="table">
                            <table>
                                <tr>
                                    <th>Space:</th>
                                    <td>Pedestrain</td>
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
                                    <td>12 m</td>
                                </tr>
                                <tr>
                                    <th>Care level:</th>
                                    <td>Medium</td>
                                </tr>
                            </table>
                        </div>
                        <button class="add-to-bag"><b>add to bag</b></button>
                    </div>
                </div>

                <div class="product">
                    <div class="display">

                        <img class="item-img"   alt="The image dose not appear ,possibilty because of slow connection" src="../img/bougainvillea.png">
                        <h1 class="plant-name">Bougainvillea</h1>
                        <h1 class="plant-price">65SR</h1>
                        <div class="rec"></div>

                    </div>
                    <div class="description">
                        <div class="table">
                            <table>
                                <tr>
                                    <th>Space:</th>
                                    <td>House Wall</td>
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
                                    <td>12 m</td>
                                </tr>
                                <tr>
                                    <th>Care level:</th>
                                    <td>Low</td>
                                </tr>
                            </table>
                        </div>
                        <button class="add-to-bag"><b>add to bag</b></button>
                    </div>
                </div>

                <div class="product">

                    <div class="display">
                        <img class="item-img"  alt="The image dose not appear ,possibilty because of slow connection"  src="../img/lavandula.png">
                        <h1 class="plant-name">Lavandula</h1>
                        <h1 class="plant-price">20SR</h1>
                        <div class="rec"></div>
                    </div>

                    <div class="description">
                        <div class="table">
                            <table>
                                <tr>
                                    <th>Space:</th>
                                    <td>House Wall</td>
                                </tr>
                                <tr>
                                    <th>Lighting:</th>
                                    <td>Sun</td>
                                </tr>
                                <tr>
                                    <th>Pets:</th>
                                    <td>safe</td>
                                </tr>
                                <tr>
                                    <th>Size:</th>
                                    <td>1 m</td>
                                </tr>
                                <tr>
                                    <th>Care level:</th>
                                    <td>High</td>
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
                        <img class="CannaIndica item-img"  alt="The image dose not appear ,possibilty because of slow connection"  src="../img/canna.png">
                        <h1 class="plant-name">CannaIndica</h1>
                        <h1 class="plant-price">20SR</h1>
                        <div class="rec"></div>
                    </div>
                    <div class="description">
                        <div class="table">
                            <table>
                                <tr>
                                    <th>Space:</th>
                                    <td>House Wall</td>
                                </tr>
                                <tr>
                                    <th>Lighting:</th>
                                    <td>Shade</td>
                                </tr>
                                <tr>
                                    <th>Pets:</th>
                                    <td>safe</td>
                                </tr>
                                <tr>
                                    <th>Size:</th>
                                    <td>50 cm</td>
                                </tr>
                                <tr>
                                    <th>Care level:</th>
                                    <td>High</td>
                                </tr>
                            </table>
                        </div>
                        <button class="add-to-bag"><b>add to bag</b></button>
                    </div>
                </div>
                <div class="product">
                    <div class="display">

                        <img class="item-img"   alt="The image dose not appear ,possibilty because of slow connection" src="../img/dutchrose.png">
                        <h1 class="plant-name">DutchRose</h1>
                        <h1 class="plant-price">77SR</h1>
                        <div class="rec"></div>
                    </div>
                    <div class="description">
                        <div class="table">
                            <table>
                                <tr>
                                    <th>Space:</th>
                                    <td>House Wall</td>
                                </tr>
                                <tr>
                                    <th>Lighting:</th>
                                    <td>Shade</td>
                                </tr>
                                <tr>
                                    <th>Pets:</th>
                                    <td>safe</td>
                                </tr>
                                <tr>
                                    <th>Size:</th>
                                    <td>1.5 m</td>
                                </tr>
                                <tr>
                                    <th>Care level:</th>
                                    <td>High</td>
                                </tr>
                            </table>
                        </div>
                        <button class="add-to-bag"><b>add to bag</b></button>
                    </div>
                </div>

                <div class="product">
                    <div class="display">

                        <img class="item-img"  alt="The image dose not appear ,possibilty because of slow connection"  src="../img/cupressaceae.png">
                        <h1 class="plant-name">Cupressaceae</h1>
                        <h1 class="plant-price">90SR</h1>
                        <div class="rec"></div>


                    </div>
                    <div class="description">
                        <div class="table">
                            <table>
                                <tr>
                                    <th>Space:</th>
                                    <td>House Wall</td>
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
                                    <td>15 m</td>
                                </tr>
                                <tr>
                                    <th>Care level:</th>
                                    <td>Low</td>
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

                        <img class="item-img"   alt="The image dose not appear ,possibilty because of slow connection" src="../img/twist.png" style="width: 60%;">
                        <h1 class="plant-name">TwistStrem</h1>
                        <h1 class="plant-price">75SR</h1>
                        <div class="rec"></div>
                    </div>
                    <div class="description">
                        <div class="table">
                            <table>
                                <tr>
                                    <th>Space:</th>
                                    <td>Balcony</td>
                                </tr>
                                <tr>
                                    <th>Lighting:</th>
                                    <td>Sun</td>
                                </tr>
                                <tr>
                                    <th>Pets:</th>
                                    <td>safe</td>
                                </tr>
                                <tr>
                                    <th>Size:</th>
                                    <td> 1.2 m</td>
                                </tr>
                                <tr>
                                    <th>Care level:</th>
                                    <td>Low</td>
                                </tr>
                            </table>
                        </div>
                        <button class="add-to-bag"><b>add to bag</b></button>
                    </div>
                </div>
                <div class="product">
                    <div class="display">

                        <img class="item-img"  alt="The image dose not appear ,possibilty because of slow connection"  src="../img/funcky.png">
                        <h1 class="plant-name">FunkyPink</h1>
                        <h1 class="plant-price">10SR</h1>
                        <div class="rec"></div>
                    </div>
                    <div class="description">
                        <div class="table">
                            <table>
                                <tr>
                                    <th>Space:</th>
                                    <td>Doorstep</td>
                                </tr>
                                <tr>
                                    <th>Lighting:</th>
                                    <td>Shade</td>
                                </tr>
                                <tr>
                                    <th>Pets:</th>
                                    <td>safe</td>
                                </tr>
                                <tr>
                                    <th>Size:</th>
                                    <td> 30 cm</td>
                                </tr>
                                <tr>
                                    <th>Care level:</th>
                                    <td>Low</td>
                                </tr>
                            </table>
                        </div>
                        <button class="add-to-bag"><b>add to bag</b></button>
                    </div>
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
                    <img src="../img/mail.png "  alt="The image dose not appear ,possibilty because of slow connection"  width="60%">
                </div>
                <div class=" iconscontainer footericonscontainer">
                    <img src="../img/inst.png "   alt="The image dose not appear ,possibilty because of slow connection" width="60%">
                </div>
                <div class=" iconscontainer footericonscontainer">
                    <img src="../img/twitter.png "   alt="The image dose not appear ,possibilty because of slow connection" width="55%">
                </div>
            </div>
        </div>
        <img class="imgfooter" src="../img/casual-life-3d-likes.png"   alt="The image dose not appear ,possibilty because of slow connection" height="40%" width="60%">
        <small style="float: left;"> Internet application project 2021</small>
    </footer>
    <!-- end of footer -->

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script type="text/javascript" src="../javascript/add-to-cart.js" async></script>
    <script type="text/javascript" src="../javascript/cart.js" async></script>
</body>

</html>