<div class="ctrProduct">                                 

    <?php
                    $i_id = $_GET['i_id'];
                    $query = "SELECT pd.*, ct.* 
                            FROM ctsanpham ct, product pd
                            WHERE pd.id = ct.id and pd.id = '$i_id'";        
                    $result = mysqli_query($db, $query);
                        if(mysqli_num_rows($result) > 0)
                        {
                            while($row = mysqli_fetch_array($result))
                            {
    ?>
         <table>
             <form method="post" action="index.php?action=add&id=<?php echo $row["id"]; ?>">
                    <tr>
                        <td class="td-product-left" width="600px">
                            <img id="mainImg" src="./img_product/<?php echo $row['img']; ?>">
                            <td class="td-product-slide-left">
                                <img class="gallery-img" onmouseover="document.getElementById('mainImg').src='./img_product/<?php echo $row['img_2']; ?>'" src="./img_product/<?php echo $row['img_2']; ?>">
                                <img class="gallery-img" onmouseover="document.getElementById('mainImg').src='./img_product/<?php echo $row['img_1']; ?>'" src="./img_product/<?php echo $row['img_1']; ?>">
                            </td>
                        </td>
                                                <td class="td-product-right" width="400px">
                            <!-- Tên sản phẩm -->
                            <div class="product-name"><?php echo $row['productname']; ?></div>
                            <table class="table-buy-detail">
                                <!-- Giá bán -->
                                <tr>
                                    <th class="product-price">Giá bán:</th>
                                    <td class="product-price-value"><?php echo number_format($row['price'], 0); ?>đ</td>
                                </tr>
                                <!-- Giảm giá -->
                                <tr>
                                    <th class="product-discount" style="font-size:20px">Giảm giá:</th>
                                    <td class="product-discount-value"><?php echo $row['giam_gia']; ?>%</td>
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
                                            <input class="quality-input" type="number"
                                             value="1" title="Số lượng" >
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <th class="product-button-buy">                                     
                                             <input type="hidden" name="id" value="<?php echo $row["id"]; ?>" />

                                            <input type="hidden" name="hidden_name" value="<?php echo $row["productname"]; ?>" />

                                            <input type="hidden" name="hidden_price" value="<?php echo $row["price"]; ?>" />
                                            <input type="submit" class="sub" name="shopping_cart" value="Mua hàng">
                                    </th>
                                </tr>
                            </table> 
                        </form>                          
                        </td>
                    </tr>
                </table>
                <!-- MÔ TẢ -->
                <div class="describe-product">
                    <span>
                         <p>Mô tả ngắn:</p>
                    </span>
                    <?php echo $row['mo_ta']; ?>
                </div>
                <!-- Thương hiệu, đánh giá, bình luận -->
                <div class="brand-rv-cmt">
                <ul>
                    <li><a href="#">Thương hiệu</a></li>
                    <li><a href="#">Đánh giá</a></li>
                    <li><a href="#">Bình luận</a></li>
                </ul>
                <p>
                        <?php echo $row['gioi_thieu']; ?>
                </p>
                </div>
                <!-- PHAN NAY CAP NHAT SAU -->

                 <!-- Gợi ý sản phẩm tương tự -->
                <div class="similar-product">                   
                        <ul>
                            <li><a href="#">Sản phẩm tương tự</a></li>
                            <li><a href="#">và các sản phẩm có cùng thương hiệu</a></li>
                        </ul>
                 <?php $query_1 = "SELECT * FROM product ORDER BY RAND() LIMIT 5"; 
                        $kq = mysqli_query($db,$query_1);
                        if(mysqli_num_rows($kq) > 0){
                            while ($prd = mysqli_fetch_array($kq)){ ?>
                        <div class="similar-product-box" align="center">
                            <a href="index.php?a=info.php&i_id=<?php echo $prd['id']; ?>">
                                <img src="img_product/<?php echo $prd['img'] ?>">
                                <div class="sml_name"><?php echo $prd['productname'];?></div>
                                <div class="sml_price">Giá: <?php echo number_format($prd['price'],0); ?>đ</div>
                            </a>
                        </div>
                            <?php } ?>
                      <?php } ?>
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
                                            <img src="img_product/<?php echo $row['img_1']; ?>" width="500px">
                                        </p>
                                        <h2 class="product-detali-name">Bàn phím cơ RGB</h2>
                                            <p>
                                               <?php echo $row['chi_tiet']; ?>
                                            </p>
                                            <img src="img_product/<?php echo $row['img_2']; ?>" width="500px">
                                             <p>Với đèn báo nguồn hiển thị màu trắng là pin đang hoạt động bình thường, màu đỏ là pin đã gần cạn nhắc nhở chúng ta cần cắm sạc. Và đèn báo sóng không dây sẽ hiển thị màu trắng khi đang sử dụng chế độ Wireless, màu xanh dương khi đang sử dụng chế độ Bluetooth. Các bạn có thể chuyển đổi giữa 2 chế độ sóng không dây một cách đơn giản bằng tổ hợp phím FN+F9 cho Wireless, FN+F10 cho Bluetooth.
                                            </p>
                                    </td>

                                    <td class="td-right" width= 300px>
                                        <table class="tb-in-td">
                                            <tr>
                                                <th class="td-label">Bảo hành:</th>
                                                <td class="td-value"><?php echo $row['bao_hanh']; ?> tháng</td>
                                            </tr>
                                            <tr>
                                                <th class="td-label">Thương hiệu:</th>
                                                <td class="td-value"><?php echo $row['thuong_hieu']; ?></td>
                                            </tr>
                                            <tr>
                                                <th class="td-label">Label:</th>
                                                <td class="td-value"><?php echo $row['label']; ?></td>
                                            </tr>
                                            <tr>
                                                <th class="td-label">Màu sắc:</th>
                                                <td class="td-value"><?php echo $row['mau_sac']; ?></td>
                                            </tr>
                                            <tr>
                                                <th class="td-label">Loại kết nối</th>
                                                <td class="td-value"><?php echo $row['loai']; ?></td>
                                            </tr>
                                            <tr>
                                                <th class="td-label">Tương thích</th>
                                                <td class="td-value"><?php echo $row['tuong_thich']; ?></td>
                                            </tr>
                                        </table>
                                    </td>
                            </tr>
                            
                        </tbody>
                        
    
                    </table>
</div>
    <?php
                            }
                        }
                        else
                        {
    ?>
                            <h2>Sản phẩm hiện chưa có thông tin</h2>
    <?php                        
                        }
    ?>

