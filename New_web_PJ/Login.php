<?php include('server.php'); ?>
<html>
    <head>
        <title>Electronic Supply Home Page</title>
        <meta charset="UTF-8">
        <!-- CSS -->
        <link rel="stylesheet" href="css/style_Main.css">
        <link rel="stylesheet" href="css/style_Signup.css">
        <!-- JS -->
        <script src="js/JS_Login.js"></script>
        <!-- W3S CSS icon lib -->
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
                        <li id="lft"><a  href="about.php">ABOUT</a></li>
                        <li id="lft"><a href="contact.php">CONTACT</a></li>
                        
                        <li style="color: #FC2121; background-color: #F9B3B3; float: right;"><?php include("subPage/numberCartItem.php");?></li>
                        <li id="rgt"><a  href="checkout.php"><i style="font-size:20px" class="fa">&#xf07a;</i></a></li>
                        <li id="rgt"><a class="active"  href="Login.php">Log in</a></li> 
                        <li id="rgt"><a href="Signup.php">Sign up</a></li>                  
                    </ul>

            </div>

            <!-- CONTENT -->
            <div class="center">              
                <div class="input-head">
                    <h2>LOG IN</h2>
                </div>

                <form method="post" action="Login.php">
                    <div class="input-group">
                        <?php include('subPage/error.php'); ?>
                        <label for="">Username</label>
                        <input type="text" name="username" placeholder="Username..." maxlength="20">
                        <label for="">Password</label>
                        <input type="password" name="password" placeholder="Pasword..." maxlength="20">
                        <button type="submit" name="log_user">Sign in</button>
                        <label>New here? <a href="Signup.php"> Sign up</a></label>                              
                </div>
                </form>
                

            </div>
            <div class="footer">Khang Ha</div>
        </div>
    </body>
</html>