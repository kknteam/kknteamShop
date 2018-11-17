<?php if(!empty($_SESSION["cart"])): ?>
    <?php $total = 0; ?>
    <div class="p_table">
        <table>
            <tr style="background-color: #0C1C83; color: white;">
                <td>Product name</td>              
                <td>Quantity</td>
                <td  style="text-align: center;">Action</td>
            </tr>
            
                <?php foreach ($_SESSION["cart"] as $key => $item_list) : ?>
            <tr>    
                    <td><?php echo $item_list['productname'] ?></td>
                    <td><?php echo $item_list['quantity'] ?></td>
                    <td style="text-align: center;"><a style=" text-decoration: none;"><a href="checkout.php?action=delete&id=<?php echo $item_list["id"]; ?>">Delete</a></td>
                    <!-- <td><a href="index01.php?action=add&id=<?php echo $item_list["id"];?>">Add</a></td> -->
            </tr>
                <?php $total = $total + ($item_list["quantity"] * $item_list["price"]); ?> 
                <?php endforeach ?>
            <tr>
                <td colspan="2" align="right">Total</td>
                <td align="right"> <?php echo number_format($total, 0); ?>đ</td>
            </tr>
        </table>

    </div>  
<?php else : echo "Your shopping cart is empty"; ?>
<?php endif ?>
