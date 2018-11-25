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
            <!-- USER BAR  -->
             <?php include("user_bar.php"); ?>
             
            <!-- HEAD -->
            <?php include("header.php"); ?>

            <!-- NAVIGATE -->
            <?php include("navigate.php"); ?>

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