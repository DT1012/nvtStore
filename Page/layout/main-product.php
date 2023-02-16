<div class="main-product">
        <div class="category">
            <h2 class="category-heading">Danh Mục</h2>
            <ul class="category-list">
                <li class="category-item"><a href="../Page/ban.php">Bàn</a></li>
                <li class="category-item"><a href="../Page/ghe.php">Ghế</a></li>
                <li class="category-item"><a href="../Page/denban.php">Đèn bàn</a></li>
                <li class="category-item"><a href="../Page/kekedo.php">Kệ kê đồ</a></li>
                <li class="category-item"><a href="../Page/dungcuvanphong.php">Dụng Cụ Văn Phòng</a></li>
            </ul>
        </div>
        <div class="product">
            <div class="product-colum">

                <?php
                if (isset($_GET['search'])) {
                    $search = $_GET['search'];
                    $querySearch = "SELECT * from sanpham inner join theloai on sanpham.maTL = theloai.maTL inner join nhasanxuat on sanpham.maNSX = nhasanxuat.maNSX where '$search' is not null and tenSP like CONCAT ('%$search%') or '$search' is null  ";
                    $dataSearch = mysqli_query($conn, $querySearch);
                } else {
                    $dataSearch = mysqli_query($conn, $sql);
                }
                while ($row = mysqli_fetch_assoc($dataSearch)) { ?>
                    <div class="product-row">
                        <a href="http://localhost/nvtStore/Page/SanPham.php?id=<?php echo $row['maSP'] ?>">
                            <img src="../image/<?php echo $row['image'] ?> " alt="Lỗi ảnh" class="product-img">
                        </a>
                        <p class="product-introduce "><?php echo $row['tenSP'] ?></p>
                        <p class="product-price "><?php echo $row['gia'] ?> ₫</p>
                    </div>

                <?php }  ?>
            </div>
        </div>
    </div>