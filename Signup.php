<?php include('server.php'); ?>
<html>
    <head>
        <title>Electronic Supply Home Page</title>
        <meta charset="UTF-8">
        <!-- CSS -->
        <link rel="stylesheet" href="css/style_Main.css">
        <link rel="stylesheet" href="css/style_Signup.css">
        <!-- JS -->
        <script src="js/JS_Signup.js"></script>
        <!-- W3S CSS icon lib -->
 	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    </head>
    <body bgcolor="#CAC7C7">
        <div class="container">

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
                    <li id="cnt"><a href="Login.php">Log in</a></li>
                    <li id="cnt"><a class="active" href="Signup.php">Sign up</a></li>                   
                </ul>
            </div>

            <!-- CONTENT -->
            <div class="center">
                <div class="input-head">
                    <h2>SIGN UP</h2>
                </div>     
                
                    <!--Form -->  
                    <form action="Signup.php" method="post"> 
                        <?php include('error.php') ?>    
                        <div class="input-group">       
                            <label for="">Your name: </label>
                            <input type="text" name="username">
                            <label for="">Email:  </label>                   
                            <input type="email" name="email" placeholder="name@gmail.com">
                            <label for="">Password: </label>                    
                            <input type="password" name="password_1" placeholder="Atleast 6 characters...">
                            <label for="">Re-enter assword: </label>                   
                            <input type="password" name="password_2">

                            <!-- <input type="checkbox" name="check">Agree our<a href="#term">term and policy</a>  -->
                            <button type="submit" name="sig_user">Create an account</button>  
                            <label for=""> Already have an account?<a href="Login.php"> Log in</a></label>
                        </div>
                    </form>
                    

                          
            </div>

            <div class="footer">Khang Ha</div>
        </div>
    </body>
</html>