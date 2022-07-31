<!DOCTYPE html>
<html lang="en">

<head>
    <title>Cart</title>
    <meta charset="utf-8" name="viewport" content="width=device-width, initial-scale=1">
    <link href="css/homePage.css" rel="stylesheet">
    <link href="css/cart.css" rel="stylesheet">
</head>

<body>
<header>
        <!-- nav bar -->
        <nav>
            <ul>
                <li id="shop-name" style="cursor: pointer;" onclick="document.location.href='index.php'"><b>Green Garden</b></li>
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
        <div id="full-cart" style="display: none;">
            <div id="cart">
                <!-- <div class="item">
                    <div class="item-image">
                        <img src="img/plant.png" style="width: 100%;">
                    </div>
    
                    <div class="item-info">
                        <div class="table">
                            <span class="caption"><strong>plant name</strong></span>
                            <table>
    
                                <tr>
                                    <th>Space:</th>
                                    <td>Garden</td>
                                </tr>
                                <tr>
                                    <th>Lighting:</th>
                                    <td>Strong</td>
                                </tr>
                                <tr>
                                    <th>Pets:</th>
                                    <td>Not safe</td>
                                </tr>
                                <tr>
                                    <th>Size:</th>
                                    <td>120cm</td>
                                </tr>
                                <tr>
                                    <th>Care level:</th>
                                    <td>Low</td>
                                </tr>
                            </table>
                        </div>
                    </div>
    
                    <div class="quantity">
                        <label for="quantity">Quantity</label>
                        <input type="number" class="quantity-input" name="quantity" value="1" min="1">
                    </div>
    
                    <div class="price">
                        <span>20SR</span>
                    </div>
    
                    <div class="remove-btn">
                        <button type="button" class="remove">Remove</button>
                    </div>
                </div> -->
                <div class="total">
                    <strong>Total:</strong>
                    <span class="total-price"></span>
                </div>
            </div>
            <div id="checkout-div">
                <button id="checkout" onclick="payment()" class="btn button">Checkout</button>
            </div>
            <div id="payment-window">

                <div class="payment-box">
                    <!-- close button -->


                    <div class="total total-payment">


                        <div id="payment-img">
                            <img src="img/payment2.png" alt="The image dose not appear ,possibilty because of slow connection"  style="width: 100%; margin-bottom: 10%;">
                            <span class="total-price"></span>
                            <img src="img/Payment-methods.png" alt="The image dose not appear ,possibilty because of slow connection" style="width: 80%; margin-top:12%;">
                        </div>
                        <div id="payment-form">
                            <form onsubmit="checkOut()">
                                <strong style="font-size: 3vw;">Payment</strong><br>
                                <label class="form-label">
                                    Card: <input type="text" style="width: 20vw;" required>
                                </label>
                                <label class="form-label">
                                    Name on card: <input type="text" style="width: 20vw;" required>
                                </label>
                                <fieldset id="fieldset">
                                    <label>
                                        CVC: <input type="text" class="small-input" required>
                                    </label>
                                    <label>
                                        Expiry: <input type="text" class="small-input" placeholder="mm/yy" required>
                                    </label>
                                </fieldset>
                                <button type="submit" class="btn btn-proceed">Proceed</button>
                            </form>
                        </div>
                        <span class="close close-btn" onclick="shutdown()">&times;</span>
                    </div>
                </div>
            </div>
        </div>
        <div id="empty-cart" style="display: block;">
            <div class="card">
                <div class="card-body cart">
                    <div>
                        <img src="img/cart.png"  alt="The image dose not appear ,possibilty because of slow connection" width="200vw" height="200vw" class="img-fluid">
                        <h3><strong>Your Cart is Empty</strong></h3>
                        <h4>Add something to make me happy :)</h4>
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
                    <img src="img/mail.png " alt="The image dose not appear ,possibilty because of slow connection"  width="60%">
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
    <script type="text/javascript">
        var payment_page = document.getElementById('payment-window')

        function payment() {
            payment_page.style.display = "block";
        }

        function shutdown() {
            payment_page.style.display = "none";
        }
    </script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script type="text/javascript" src="javascript/cart.js" async></script>
    <script type="text/javascript" src="javascript/add-to-cart.js" async></script>


</body>

</html>