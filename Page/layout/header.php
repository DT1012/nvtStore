
<header>
    <div class="header-info">
        <div class="header-email">
            <a href="#"><i class="ti-headphone icon-headphone"></i><span class="padding">1900 818 020</span></a>
        </div>
        <div class="header-menu">
            <ul>
                <li><a href="../Page/Home.php">Trang chủ</a></li>
                <li><a href="../Page/Cuahang.php">Cửa hàng</a></li>
                <li><a href="../Page/GioiThieu.php">Giới thiệu</a></li>
                <li><a href="../Page/LienHe.php">Liên hệ</a></li>
                <li><a href="../Page/Giohang.php">Giỏ Hàng</a></li>
            </ul>
        </div>
        <div class="header-user">
            <?php 
                if(!isset($_SESSION['user']) ) { ?>
                    <a href="http://localhost/nvtStore/Page/DangNhap.php"><span class="user">
                    Đăng nhập
                </span></a><?php
                } else { ?>
                   <p><?php echo  $_SESSION['user'] ." Đang nhập thành công!";
                    ?></p>
                    <a href="http://localhost/nvtStore/Page/DangNhap.php"><span class="user">
                        Đăng xuất
                    </span></a> 
               <?php } ?>
                    

        </div>
    </div>
    <div class="header-inner">
        <img src="../image/logo-nha-xinh-moi-200422.png" width="169px" alt="Logo" class="logo">
        <form class="header-search" method="Get" action="Home.php">
            <label for="search">
                <input type="text" id="search" name="search" placeholder="Tìm sản phẩm?..."><i class="ti-search icon-search"></i>
            </label>
        </form>
    </div>
</header>