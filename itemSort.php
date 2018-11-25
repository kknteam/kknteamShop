
           
            <!-- PRODUCT LIST -->
            <div class="content">  
                                     
                <?php
                    $db = mysqli_connect('localhost','root','','mydb');
                    mysqli_set_charset($db,'utf8');
                    $item = $_GET["pid"];
                    $item_check = "SELECT * FROM product WHERE id like '$item%'";
                    $result = mysqli_query($db, $item_check);
                        if(mysqli_num_rows($result) > 0)
                        {
                            while($row = mysqli_fetch_array($result))
                            {
                ?>
                <!-- '{' -->
                <a href="index.php?a=info.php&i_id=<?php echo $row['id'];?>">
                    <div class="box">
                            <form method="post" action="index.php?action=add&id=<?php echo $row["id"]; ?>&a=ItemSort.php&pid=<?php echo $item; ?>">
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
            