<?php include('server.php'); ?>
<html>
    <head>
        <title>Electronic Supply Home Page</title>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="css/style_Main.css">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    </head>
    <body bgcolor="#CAC7C7">
        <div class="container">
            <?php if(isset($_SESSION['username'])) : ?>
                <p class="signin"> Welcome <strong><?php echo $_SESSION['username']; ?></strong> | <a href="login.php?logout='1'">Log out</a> </p>
            <?php endif ?>   
            <!-- HEAD -->
            <div class="header">
                <!-- Blue bar -->
                <img src="img/head_bar_01.png" width="1000px" height="60px" alt="blue bar">
                <!-- HP icon -->
                <div id="icn">
                    <a href="index01.php">
                       <img src="img/icon_HomePage_02.png" alt="icon_HP">
                    </a>
                </div>
            </div>

            <!-- NAVIGATE -->
            <div class="nav">
                    <ul>
                        <li id="lft"><a href="index01.php">HOME PAGE</a></li>
                        <li id="lft"><a class="active"  href="about.php">ABOUT</a></li>
                        <li id="lft"><a href="contact.php">CONTACT</a></li>
                        
                        <li style="color: #FC2121; background-color: #F9B3B3; float: right;"><?php include("subPage/numberCartItem.php");?></li>
                        <li id="rgt"><a href="checkout.php"><i style="font-size:20px" class="fa">&#xf07a;</i></a></li>
                        <li id="rgt"><a href="Login.php">Log in</a></li> 
                        <li id="rgt"><a href="Signup.php">Sign up</a></li>                  
                    </ul>

            </div>

            <!-- MENU -->
            <div class="sidebar">
                <dl>
                    <dt>Check out our product</dt>
                        <dd>
                           <form action="itemSort.php?id=Lap" method="GET">
                                <input type="hidden" name="item" value="Lap">
                               <input type="submit" value="Laptop">
                           </form>
                        </dd>
                        <dd>
                           <form action="itemSort.php?id=HP" method="GET">
                                <input type="hidden" name="item" value="HP">
                               <input type="submit" value="HeadPhone">
                           </form>
                        </dd>
                        <dd>
                           <form action="itemSort.php?id=KB" method="GET">
                                <input type="hidden" name="item" value="KB">
                               <input type="submit" value="Keyboard">
                           </form>                        
                       </dd>
                        <dd>
                            <form action="itemSort.php?id=KB" method="GET">
                                <input type="hidden" name="item" value="Mse">
                               <input type="submit" value="Mouse">
                           </form> 
                        </dd>
                        <dd>
                            <form action="itemSort.php?id=KB" method="GET">
                                <input type="hidden" name="item" value="Moni">
                               <input type="submit" value="Moniter">
                           </form> 
                        </dd> 
                    

                </dl>
                <hr>
                <div class="dropdown">
                    <button>Your Cart</button>
                    <div class="dropdown-content"><?php include("subPage/cart.php"); ?></div>
                </div>
            </div>

            <!-- PRODUCT LIST -->
            <div class="content">                
                
            </div>
            <div class="footer">Khang Ha</div>
        </div>
    </body>
</html>