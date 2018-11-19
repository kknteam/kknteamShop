                       <!-- PRODUCT LIST -->
            <div class="content">  
                                     
                <?php
                    $query = "SELECT * FROM product ORDER BY id ASC";
                    $result = mysqli_query($db, $query);
                        if(mysqli_num_rows($result) > 0)
                        {
                            while($row = mysqli_fetch_array($result))
                            {
                ?>
                <!-- '{' -->
                <a href="Info.php">
                    <div class="box">
                            <form method="post" action="index.php?action=add&id=<?php echo $row["id"]; ?>">
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
         