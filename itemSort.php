<?php include('server.php'); ?>
<html>
    <head>
        <title>Electronic Supply Home Page</title>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="css/style_Main.css">
        <link rel="stylesheet" type="text/css" href="css/style.css">
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
                        <li><a href="index01.php">HOME PAGE</a></li>
                        <li><a href="about.php">ABOUT</a></li>
                        <li><a href="contact.php">CONTACT</a></li>
                        
                        <li style="color: #FC2121; background-color: #F9B3B3; float: right;"><?php include("subPage/numbercartItem.php");?></li>
                        <li class="rgt"><a href="checkout.php"><i style="font-size:20px" class="fa">&#xf07a;</i></a></li>
                        <li class="rgt"><a href="Login.php">Log in</a></li> 
                        <li class="rgt"><a href="Signup.php">Sign up</a></li>                  
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
            </div>

           
            <!-- PRODUCT LIST -->
            <div class="content">  
                                     
                <?php
                    $item = $_GET["item"];
                    $item_check = "SELECT * FROM product WHERE id like '$item%'";
                    $result = mysqli_query($db, $item_check);
                        if(mysqli_num_rows($result) > 0)
                        {
                            while($row = mysqli_fetch_array($result))
                            {
                ?>
                <!-- '{' -->
                <a href="Info.php">
                    <div class="box">
                            <form method="post" action="index01.php?action=add&id=<?php echo $row["id"]; ?>">
                                    <img src="img_product/<?php echo $row["img"];?>"/>
                                    
                                    <div class="name" ><?php echo $row["productname"]; ?></div>

                                    <div class="price" ><?php echo $row["price"]; ?>đ</div>

                                    <input type="hidden" name="id" value="<?php echo $row["id"]; ?>" />

                                    <input type="hidden" name="hidden_name" value="<?php echo $row["productname"]; ?>" />

                                    <input type="hidden" name="hidden_price" value="<?php echo $row["price"]; ?>" />

                                    <input type="submit" name="shopping_cart" style="margin-top:5px;" class="sub" value="Add to Cart" />
                            </form>
                        </div>
                </a>
                      <!-- '}' -->
                <?php
                        }
                    }
                ?>
      
                

            </div>
            <div class="footer">Khang Ha</div>
        </div>
        <script type="text/javascript" src="js/script.js"></script>
    </body>
</html>