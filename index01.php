<?php include('server.php'); ?>
<html>
    <head>
        <title>Electronic Supply Home Page</title>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="css/style_Main.css">
        <!-- W3S CSS icon lib -->
 	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    </head>
    <body bgcolor="#CAC7C7">
        <div class="signin">
            <?php if(isset($_SESSION['username'])) : ?>
                <p> Welcome <strong><?php echo $_SESSION['username']; ?></strong> | <a href="login.php?logout='1'">Log out</a> </p>
            <?php endif ?>
            
        </div>
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
                        <li><a class="active" href="index01.php">HOME PAGE</a></li>
                        <li><a href="about.php">ABOUT</a></li>
                        <li><a href="contact.php">CONTACT</a></li>
                        <li id="cnt"><a href="Login.php">Log in</a></li>
                        <li id="cnt"><a href="Signup.php">Sign up</a></li>                   
                    </ul>

            </div>

            <!-- MENU -->
            <div class="sidebar">
                <dl>
                    <dt>Check out our product</dt>
                        <dd>
                           <a href="#"> Laptop </a>
                        </dd>
                        <dd>
                            <a href="#"> Hardware </a>
                        </dd>
                        <dd>
                            <a href="#"> Headphone </a>
                        </dd>
                        <dd>
                            <a href="#"> Keyboard </a>
                        </dd>
                        <dd>
                            <a href="#"> Mouse </a>
                        </dd>
                        <dd>
                            <a href="#"> screen </a>
                        </dd> 
                        <dd>
                            <a href="#"> TV </a>
                        </dd>  
                        <dd>
                            <a href="#"> Phone </a>
                        </dd>                                                  
                    <dt>Electronic companies</dt>
                    <dd>
                        <a href="#"> Dell </a>
                    </dd>
                    <dd>
                        <a href="#"> ASUS </a>
                    </dd>
                    <dd>
                        <a href="#"> Apple </a>
                    </dd>
                    <dd>
                        <a href="#"> Sony </a>
                    </dd>
                    <dd>
                        <a href="#"> Panasonic </a>
                    </dd>
                    <dd>
                        <a href="#"> Microsoft </a>
                    </dd> 

                </dl>
            </div>

            <!-- PRODUCT LIST -->
            <div class="content">                
                <div class="box">
                    <a href="#">
                        <img src="img_product/HP01.jpg" alt="HeadPhone">
                        <div class="name">Headphone Hyper X</div>
                        <div class="price">Price: 350 000</div>
                    </a>
                </div>

                <div class="box">
                        <a href="#">
                        <img src="img_product/KB_Glorious GMMK.jpg" alt="Keyboard">
                        <div class="name">Gloriou GMMK</div>
                        <div class="price">Price: 850 000</div>
                    </a>
                </div>

                <div class="box">
                    <a href="#">
                        <img src="img_product/Lap01.jpg" alt="Laptop">
                        <div class="name">ASUS F555L Laptop</div>
                        <div class="price">Price: 14 350 000</div>
                    </a>
                </div>

                <div class="box">
                    <a href="#">
                        <img src="img_product/Mouse01.jpg" alt="Mouse">
                        <div class="name">GM Razer</div>
                        <div class="price">Price: 1 550 000</div>
                    </a>
                </div>

                <div class="box">
                    <a href="#">
                        <img src="img_product/PC02.jpg" alt="PC">
                        <div class="name">Set gaming PC</div>
                        <div class="price">Price: 14 550 000</div>
                    </a>
                </div>

                <div class="box">
                    <a href="#">
                        <img src="img_product/Moni01.jpg" alt="Monitor">
                        <div class="name">Nice Screen</div>
                        <div class="price">Price: 6 550 000</div>
                    </a>
                </div>

                <div class="box">
                        <a href="#">
                            <img src="img_product/Mouse02.jpg" alt="Mouse">
                            <div class="name">Gaming mouse</div>
                            <div class="price">Price: 550 000</div>
                        </a>
                </div>
                <div class="box">
                    <a href="#">
                        <img src="img_product/KB01.jpg" alt="KB">
                        <div class="name">Gaming Keyboard</div>
                        <div class="price">Price: 750 000</div>
                    </a>
                </div>

            </div>
            <div class="footer">Khang Ha</div>
        </div>
    </body>
</html>