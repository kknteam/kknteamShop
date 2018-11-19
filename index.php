<?php include('server.php'); ?>
<html>
    <head>
        <title>Electronic Supply Home Page</title>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="css/style_Main.css">
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
            <?php include("header.php"); ?>

            <!-- NAVIGATE -->
            <?php include("navigate.php"); ?>

            <!-- MENU -->
            <?php include("sidebar.php") ?>

           
            <!-- PRODUCT LIST -->
          
            	<?php
            		
            		if(!isset($_GET['a']))
            		{
            			$a = "index01.php";
            		}
            		else{
            			$a = $_GET['a'];
            		}
            	 include($a);
            	  ?>        
                
                


            <div class="footer">Khang Ha</div>
        </div>
        <script type="text/javascript" src="js/script.js"></script>
    </body>
</html>