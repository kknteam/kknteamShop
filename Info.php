<?php include('server.php'); ?>
<html>
    <head>
        <title>Electronic Supply Home Page</title>
        <meta charset="UTF-8">
        <!-- CSS -->
        <link rel="stylesheet" href="css/style_Main.css">
        <link rel="stylesheet" href="css/style_Signup.css">
        <link rel="stylesheet" href="css/style_info.css">
        <link rel="stylesheet" href="css/hover.css">
        
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
                        <li style="color: #FC2121; background-color: #F9B3B3; float: right;">
                        <!-- <php include("subPage/numbercartItem.php");?> -->
                    </li>
                        <li class="rgt"><a href="checkout.php"><i style="font-size:20px" class="fa">&#xf07a;</i></a></li>
                        <li class="rgt"><a href="Login.php">Log in</a></li> 
                        <li class="rgt"><a href="Signup.php">Sign up</a></li>                                                    
                </ul>
            </div>

            <!-- CONTENT -->
            <div class="ctrProduct">              

                <h1>PRODUCT INFO</h1>
                    <!-- Hình ảnh sản phẩm bên trái -->
                    <div class="product-image-box">
                        <div class="slide_product_left">
                        <img src="./img_product/HP01.jpg">
                        </div>
                   </div>
                    <!-- Mô tả sản phẩm -->
                   <div class="describe-product">
                       <p>Mô tả:</p>
                       <p>- Loại tai nghe: Tai nghe chụp đầu </p>
                       <p>- Khối lượng: 300gram</p>
                       <p>- Kết nối: jack cắm 3.5mm</p>
                       <p>- Tốc độ phản hồi: 500hz/1ms</p>
                       <p>- Thiết kế: chụp tai </p>
                       <p>- Phụ kiền đi kèm: không có</p>
                   </div>
                   <!-- Giá tiền bên phải -->
                    <div class="product-price-box">
                        <div class="price">Giá tiền: 350.000đ</div>
                        <div class="discount">Giảm giá: 10%</div>
                        <div class="ship">
                            <div class="shipping-icon">
                                <img src="./img/delivery.png"> 
                                Miễn phí vận chuyển
                            </div>
                        </div>
                    <div class="quality">
                        <span>Số lượng</span>
                        <div class="quality-box">
                            <input type="number" name="quality" class="quality-input"
                            value = "0" title="Số lượng">
                        </div>
                    </div>
                        
                    <div class="button-buy">
                        <form>
                            <span><a href="#">Đặt mua</a></span>
                        </form>

                        

                    
                    </div>
            
                    
                
            </div>
            <div class="footer">Khang Ha</div>
        </div>
    </body>
</html>