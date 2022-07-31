<!DOCTYPE html>
<html lang="en">

<head>
    <title>Outdoor care level</title>
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

        <!-- main section -->
        <div id="main-div">

            <!--  outdoor light image and label -->
            <div id="outdoor-light-img">
                <img src="../img/section.png" alt="The image dose not appear ,possibilty because of slow connection" style="width: 100%;">
                <h1 id="page-label" style="font-size: 1.5em;">Plants care level</h1>

            </div>

            <!-- sections icons -->
            <div id="icons" style="width: 24%;">
                <div class="iconscontainer outdoor-icons" id="easy">
                    <img src="../img/easy-icon.png " alt="The image dose not appear ,possibilty because of slow connection"  class="imgs">
                    <div class="hovering">
                        <div class="section-name">Easy</div>
                    </div>
                </div>
                <div class=" iconscontainer outdoor-icons" id="needscare">
                    <img src="../img/needs-icon.png "  alt="The image dose not appear ,possibilty because of slow connection" class="imgs">
                    <div class="hovering">
                        <div class="section-name">Needs care</div>
                    </div>
                </div>
            </div>
            <!-- end of sections icons -->

        </div>
        <!-- end of main div-->
        <div id="easy-plants" class="easy-plants">
            <h3 class="section-label">Easy Plants</h3>
            <br>
            <div class="products-section">
                <br>
                <div class="product">

                    <div class="display">
                        <img class="item-img"  alt="The image dose not appear ,possibilty because of slow connection" src="../img/cupressaceae.png">
                        <h1 class="plant-name">Cupressaceae</h1>
                        <h1 class="plant-price">90SR </h1>
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
                <!--
                <div class="product">
                    <div class="display">

                        <img class="item-img" src="../img/tecoma.png">
                        <h1 class="plant-name">TecomaStans</h1>
                        <h1 class="plant-price">90SR</h1>
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
                                    <td>Shade</td>
                                </tr>
                                <tr>
                                    <th>Pets:</th>
                                    <td>Not safe</td>
                                </tr>
                                <tr>
                                    <th>Size:</th>
                                    <td>6 m</td>
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
                  -->
                <div class="product">
                    <div class="display">

                        <img class="item-img"  alt="The image dose not appear ,possibilty because of slow connection" src="../img/bougainvillea.png">
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

                        <img class="item-img" alt="The image dose not appear ,possibilty because of slow connection"  src="../img/funcky.png">
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
            <div class="products-section">
                <br>
                <div class="product">
                    <div class="display">

                        <img class="item-img"  alt="The image dose not appear ,possibilty because of slow connection" src="../img/twist.png" style="width: 60%;">
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

                        <img class="item-img" alt="The image dose not appear ,possibilty because of slow connection"  src="../img/Laura.png" style="width: 60%;">
                        <h1 class="plant-name">LauraPyramid</h1>
                        <h1 class="plant-price">140SR</h1>
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
                                    <td>Not safe</td>
                                </tr>
                                <tr>
                                    <th>Size:</th>
                                    <td> 1.4 m</td>
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

                        <img class="item-img"  alt="The image dose not appear ,possibilty because of slow connection" src="../img/lemon.png">
                        <h1 class="plant-name">LemonTree</h1>
                        <h1 class="plant-price">55SR</h1>
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
                                    <td>Not safe</td>
                                </tr>
                                <tr>
                                    <th>Size:</th>
                                    <td>70 cm</td>
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
        </div>

        <div id="needscare-plants" class="needscare-plants">
            <h3 class="section-label">Needs care Plants</h3>
            <br>
            <div class="products-section">
                <br>
                <div class="product">

                    <div class="display">

                        <img class="item-img" alt="The image dose not appear ,possibilty because of slow connection" src="../img/anemone.png">
                        <h1 class="plant-name">AnemoneCoronaria</h1>
                        <h1 class="plant-price">25SR</h1>
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
                                    <td>Not safe</td>
                                </tr>
                                <tr>
                                    <th>Size:</th>
                                    <td>50 cm</td>
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
                        <img class="item-img" alt="The image dose not appear ,possibilty because of slow connection" src="../img/lavandula.png">
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

                <div class="product">
                    <div class="display">
                        <img class="CannaIndica item-img" alt="The image dose not appear ,possibilty because of slow connection" src="../img/canna.png">
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
            </div>
            <div class="products-section">
                <br>
                <div class="product">

                    <div class="display">

                        <img class="item-img" alt="The image dose not appear ,possibilty because of slow connection" src="../img/strlizia.png">
                        <h1 class="plant-name">Strelizia Nicolai</h1>
                        <h1 class="plant-price">112SR</h1>
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
                                    <td>12 cm</td>
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

                        <img class="item-img" alt="The image dose not appear ,possibilty because of slow connection" src="../img/dutchrose.png">
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

                        <img class="item-img" alt="The image dose not appear ,possibilty because of slow connection" src="../img/tecoma.png">
                        <h1 class="plant-name">TecomaStans</h1>
                        <h1 class="plant-price">90SR</h1>
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
                                    <td>Shade</td>
                                </tr>
                                <tr>
                                    <th>Pets:</th>
                                    <td>Not safe</td>
                                </tr>
                                <tr>
                                    <th>Size:</th>
                                    <td>6 m</td>
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
            </div>
            <div class="products-section">
                <br>
                <div class="product">
                    <div class="display">

                        <img class="item-img"  alt="The image dose not appear ,possibilty because of slow connection" src="../img/buxus.png">
                        <h1 class="plant-name">BuxusSemperviens</h1>
                        <h1 class="plant-price">50SR</h1>
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
                                    <td> Not safe</td>
                                </tr>
                                <tr>
                                    <th>Size:</th>
                                    <td>60 cm</td>
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

        </div>
        </div>

    </main>

    <!-- footer -->
    <footer class="footerparts ">
        <h3>Contact us</h3>
        <h4>help@GreenGarden.com</h4>
    </footer>
    <script type="text/javascript">
        document.getElementById("needscare").onclick = function() {


            document.getElementById("easy-plants").style.display = "none";
            document.getElementById("needscare-plants").style.display = "block";

        }

        document.getElementById("easy").onclick = function() {

            document.getElementById("needscare-plants").style.display = "none";
            document.getElementById("easy-plants").style.display = "block";

        }
    </script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script type="text/javascript" src="../javascript/add-to-cart.js" async></script>
    <script type="text/javascript" src="../javascript/cart.js" async></script>
</body>

</html>