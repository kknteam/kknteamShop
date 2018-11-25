<?php if(isset($_SESSION['username'])) : ?>
                <div class="admin">
                    <ul type="none"> 
                        <li><a href="#">Xin chào <strong> <?php echo $_SESSION['username']; ?></strong></a></li>
                        <?php if($_SESSION['username'] == 'admin'): ?>
                            <li><a href="#QLUser"> Quản lý người dùng</a></li>
                            <li><a href="#QLSP">Quản lý sản phẩm</a></li>                           
                        <?php endif ?>
                        <li><a style="float: right;" href="login.php?logout='1'">Đăng xuất</a></li>
                    </ul>                
                </div>
            <?php endif ?> 