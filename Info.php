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
        <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"> -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
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
                    <!-- Hình ảnh sản phẩm bên trái
                    <div style="border:1px solid black; height:500px"></div>
                        <div class="product-image-box">
                            <div class="slide_product_left">
                                <img src="./img_product/bpc02.jpg">
                            </div>
                        </div>
                   
                   
                   Giá tiền bên phải
                    <div class="product-price-box">
                        <div class="product-name">Bàn phím Corsair K95 Wireless</div>
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
                        </form>
                    </div>
                    
                </div> -->

                <table>
                    <tr>
                        <td class="td-product-left" width="600px">
                            <img src="./img_product/bpc02.jpg">
                            <td class="td-product-slide-left">
                                <img class="gallery-img" onclick="replaceMainImg(this)" src="./img_product/bpc02.jpg">
                                <img class="gallery-img" src="./img_product/bpc01.jpg">
                            </td>
                        </td>
                        
                        <td class="td-product-right" width="400px">
                            <!-- Tên sản phẩm -->
                            <div class="product-name">Bàn phím Corsair</div>
                            <table class="table-buy-detail">
                                <!-- Giá bán -->
                                <tr>
                                    <th class="product-price">Giá bán:</th>
                                    <td class="product-price-value">1.200.000đ</td>
                                </tr>
                                <!-- Giảm giá -->
                                <tr>
                                    <th class="product-discount" style="font-size:20px">Giảm giá:</th>
                                    <td class="product-discount-value">10%</td>
                                </tr>
                                <!-- Giao hàng -->
                                <tr>
                                    <th class="product-ship-icon">
                                        <img src="./img/delivery.png" width="50px">
                                    </th>
                                    <td class="product-ship-value">Giao hàng miễn phí</td>
                                </tr>
                                <!-- Số lượng -->
                                <tr>
                                    <th class="product-quality">Số lượng:</th>
                                    <td class="prodcut-quality-box">
                                        <div class="quality-box">
                                            <input class="quality-input" type="number" value="0" title="Số lượng" >
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <th class="product-button-buy">
                                        <form action="submit">
                                            <input type="submit" name="button" value="Mua hàng">
                                        </form>
                                    </th>
                                </tr>
                            </table>

                           






                           
                        </td>
                    </tr>
                </table>

            <!-- </div> -->
                <!-- Mô tả sản phẩm -->
                <div class="describe-product">
                    <span>
                         <p>Mô tả ngắn:</p>
                    </span>
                    <p>- Loại tai nghe: Tai nghe chụp đầu </p>
                    <p>- Khối lượng: 300 gram</p>
                    <p>- Kết nối: jack cắm 3.5mm</p>
                    <p>- Tốc độ phản hồi: 500hz/1ms</p>
                    <p>- Thiết kế: chụp tai </p>
                    <p>- Phụ kiền đi kèm: không có</p>
             </div>
                <!-- Thương hiệu, đánh giá, bình luận -->
                <div class="brand-rv-cmt">
                <ul>
                    <li><a href="#">Thương hiệu</a></li>
                    <li><a href="#">Đánh giá</a></li>
                    <li><a href="#">Bình luận</a></li>
                </ul>
                <p>
                        Giới thiệu về Corsair
                        Corsair Components, Inc. (được cách điệu là CORSAIR) là một công ty phần cứng và thiết bị ngoại vi máy tính của Mỹ có trụ sở tại Fremont, California. Công ty được thành lập tại California vào tháng 1 năm 1994 và được tái hợp nhất tại Delaware vào năm 2007. Ngoài trụ sở chính ở Fremont, California, Corsair duy trì một cơ sở sản xuất tại thành phố Đào Viên, Đài Loan, để lắp ráp, thử nghiệm và đóng gói các sản phẩm chọn lọc, và quản lý phân phối khu vực châu Á, Hoa Kỳ và châu Âu. Họ cũng đặt nhiều văn phòng bán hàng và tiếp thị trên khắp nước Mỹ cũng như một số quốc gia châu Âu và châu Á.
                </p>
                </div>
                 <!-- Gợi ý sản phẩm tương tự -->
                <div class="similar-product">
                        <ul>
                            <li><a href="#">Sản phẩm tương tự</a></li>
                            <li><a href="#">và các sản phẩm có cùng thương hiệu</a></li>
                        </ul>
                        <div class="similar-product-box">
                            <a href="">
                            <img src="img_product/KB01.jpg">
                            <div class="sml_name">Bàn phím cơ RGB</div>
                            <div class="sml_price">Giá: 1.600.000đ</div>
                            <div class="action">
                                <a href="#">Chi tiết</a>
                            </div>
                            </a>
                        </div>
                        <div class="similar-product-box">
                            <a href="">
                            <img src="img_product/KB02.jpg">
                            <div class="sml_name">Bàn phím cơ RGB</div>
                            <div class="sml_price">Giá: 2.000.000đ</div>
                            <div class="action">
                                <a href="#">Chi tiết</a>
                            </div>
                            </a>
                        </div>
                        <div class="similar-product-box">
                            <a href="">
                            <img src="img_product/Lap01.jpg">
                            <div class="sml_name">Laptop</div>
                            <div class="sml_price">Giá: 15.600.000đ</div>
                            <div class="action">
                                <a href="#">Chi tiết</a>
                            </div>
                            </a>
                        </div>
                        <div class="similar-product-box">
                            <a href="#">
                            <img src="img_product/Moni01.jpg">
                            <div class="sml_name">Bàn phím cơ RGB</div>
                            <div class="sml_price">Giá: 2.000.000đ</div>
                            <div class="action">
                                <a href="#">Chi tiết</a>
                            </div>
                            </a>
                        </div>

                        <div class="similar-product-box">
                            <a href="#">
                            <img src="img_product/Mouse01.jpg">
                            <div class="sml_name">Laptop</div>
                            <div class="sml_price">Giá: 15.600.000đ</div>
                            <div class="action">
                                <a href="#">Chi tiết</a>
                            </div>
                            </a>
                        </div>
                    </div>
                    <!-- Chi tiết sản phẩm -->
                <table class="table-product-detail">
                        <!-- table head -->
                        <thead>
                            <tr> 
                                <th class=info-th>Thông tin chi tiết</th>
                                <th class=info-th>Cấu hình chi tiết</th>
                            </tr>
                        </thead>
                        <!-- table body -->
                        <tbody>
                            <tr>
                                    <td class="td-left" width="600px">
                                        <p>
                                            <img src="img_product/bpc02.jpg" width="500px">
                                        </p>
                                        <h2 class="product-detali-name">Bàn phím cơ RGB</h2>
                                            <p>
                                                Là loại bàn phím cơ không dây với layout tenkeless (lược bỏ phần numpad) gọn gàng,
                                                cùng với khối lượng chỉ 1,09kg, chúng ta có thể hiểu khá rõ ràng ý đồ thiết kế Corsair 
                                                K63 Wireless là phục vụ tiện lợi tối đa cho nhu cầu di động. Tất nhiên, khác với thiết
                                                kế của một bàn phím có dây truyền thống, Corsair K63 Wireless có thêm 2 đèn báo nguồn 
                                                và sóng không dây, bên cạnh đèn capslock và scroll-lock.
                                            </p>
                                            <img src="img_product/bpc01.jpg" width="500px">
                                             <p>Với đèn báo nguồn hiển thị màu trắng là pin đang hoạt động bình thường, màu đỏ là pin đã gần cạn nhắc nhở chúng ta cần cắm sạc. Và đèn báo sóng không dây sẽ hiển thị màu trắng khi đang sử dụng chế độ Wireless, màu xanh dương khi đang sử dụng chế độ Bluetooth. Các bạn có thể chuyển đổi giữa 2 chế độ sóng không dây một cách đơn giản bằng tổ hợp phím FN+F9 cho Wireless, FN+F10 cho Bluetooth.
                                            </p>
                                    </td>

                                    <td class="td-right" width= 300px>
                                        <table class="tb-in-td">
                                            <tr>
                                                <th class="td-label">Bảo hành:</th>
                                                <td class="td-value">24 tháng</td>
                                            </tr>
                                            <tr>
                                                <th class="td-label">Thương hiệu:</th>
                                                <td class="td-value">Corsair</td>
                                            </tr>
                                            <tr>
                                                <th class="td-label">Label:</th>
                                                <td class="td-value">K63</td>
                                            </tr>
                                            <tr>
                                                <th class="td-label">Màu sắc:</th>
                                                <td class="td-value">Đen</td>
                                            </tr>
                                            <tr>
                                                <th class="td-label">Loại kết nối</th>
                                                <td class="td-value">Không dây</td>
                                            </tr>
                                            <tr>
                                                <th class="td-label">Tương thích</th>
                                                <td class="td-value">Tất cả</td>
                                            </tr>
                                        </table>
                                    </td>
                            </tr>
                            
                        </tbody>
                        
    
                    </table>
            
            <div class="footer">&copy; Design by KNN Team</div>
        
        </div>
    </body>
</html>




 
 <!-- <div class="product-price">1.200.000đ</div>

 <div class="discount">35%</div>
 <div class="ship">
     <div class="shipping-icon">
         <img src="./img/delivery.png" width="50px">
     </div>
     Miễn phí vận chuyển
 </div>
 <div class="quality">
     Số lượng: 
     <div class=quality-box>
         <input class="quality-input" type="number" value="0" title="Số lượng" >
     </div>
 </div>
 <div class="button-buy">
     <form action="submit">
         <input type="submit" name="button" value="Mua hàng">
     </form>
 </div> -->