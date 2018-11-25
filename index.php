<?php include('server.php'); ?>
<html>
    <head>
        <title>Electronic Supply Home Page</title>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <link rel="stylesheet" href="css/style_Main.css">
        <link rel="stylesheet" type="text/css" href="css/style_info.css">
        <!-- W3S CSS icon lib -->
        <meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <!-- JQUERY -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    </head>
    <body bgcolor="#CAC7C7">
        <div class="container">

             <!-- USER BAR  -->
             <?php include("user_bar.php"); ?>
             
            <!-- HEAD -->
            <?php include("header.php"); ?>

            <!-- NAVIGATE -->
            <?php include("navigate.php"); ?>

            <!-- MENU -->            
            <?php 
                if(isset($_GET['a']))
                {
                    if($_GET['a'] != "info.php")
                    {
                        include("sidebar.php"); 
                    }
                }
                else
                {
                    include("sidebar.php"); 
                }
            ?>

           
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
                
                


            <div class="footer">KKN SHOP</div>
        </div>
        <script type="text/javascript" src="js/script.js"></script>
    </body>
</html>