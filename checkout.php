<?php include('server.php'); ?>
<html>
    <head>
        <title>Electronic Supply Home Page</title>
        <meta charset="UTF-8">
        <!-- CSS -->
        <link rel="stylesheet" href="css/style_Main.css">
        <link rel="stylesheet" href="css/style_Signup.css">
        <!-- W3S  -->
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
                        <li><a href="index01.php">HOME PAGE</a></li>
                        <li><a href="about.php">ABOUT</a></li>
                        <li><a href="contact.php">CONTACT</a></li>
                        <li style="color: #FC2121; background-color: #F9B3B3; float: right;"><?php include("subPage/numbercartItem.php");?></li>
                        <li class="rgt"><a class="active" href="checkout.php"><i style="font-size:20px" class="fa">&#xf07a;</i></a></li>
                        <li class="rgt"><a href="Login.php">Log in</a></li> 
                        <li class="rgt"><a href="Signup.php">Sign up</a></li>                  
                </ul>
            </div>

            <!-- CONTENT -->
            <div class="ctrProduct" > 
                <?php include("subPage/fail.php"); ?>
                <form method="post" action="checkout.php" >
                    <fieldset>
                        <legend>Your Infomation</legend>
                        <table class="tblCheckOutInfo" align = "center">
                        <!-- Name -->
                        <tr>
                            <td><b>Full name:<b></td>
                            <td>
                                <input type="text" name="txtFullname" id="txtFullname" require>
                            </td>
                        </tr>
                        <!-- Email -->
                        <tr>
                            <td><b>Email:</b></td>
                                <td>
                                    <input type="email" name="txtEmail" id="txtEmail" require>
                                </td>
                            </tr>
                        </tr>
                        <!-- Phone -->
                        <tr>
                            <td><b>Phone number:</b></td>
                                <td>
                                    <input type="text" name="txtPhone" id="txtPhone" require>
                                </td>
                            </tr>
                        </tr>
                        <!-- Address -->
                        <tr>
                            <td><b>Address:</b></td>
                                <td>
                                    <textarea name="txtAddress" id="txtAddress" cols="22" rows="5"></textarea>
                                </td>
                            </tr>
                        </tr>
                        <tr>
                            <td colspan="2" align="right"><input type="submit" name="checkout" class="sub" value="Proceed to pay" ></td>
                        </tr>
                    </table>
               </form>      
                    </fieldset>
                    
               <hr>
                        <!-- Cart -->
                    <fieldset>
                        <legend >Your Shopping Cart</legend>
                        <?php include("subPage/product.php"); ?>
                    </fieldset>

            </div>

            <div class="footer">Khang Ha</div>
        <script src="js/script.js"></script>
    </body>
</html>