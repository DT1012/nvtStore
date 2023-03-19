<div class="main-product">
    <div class="category">
        <h2 class="category-heading">Danh Mục</h2>
        <ul class="category-list">
            <?php
        $sql_tl =  mysqli_query($conn, "SELECT * from theloai");
        while($row_tl = mysqli_fetch_array($sql_tl)) {  
        ?>
            <li class="category-item"><a href="../Page/theloai.php?idTL=<?php echo $row_tl['maTL'] ?>"><?php echo $row_tl['tenTL'] ?></a></li>
<?php } ?>
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
            while ($row = mysqli_fetch_assoc($dataSearch)) {
            ?>
                <div class="product-row">
                    <a href="http://localhost/nvtStore/Page/SanPham.php?id=<?php echo $row['maSP'] ?>">
                        <img src="../image/<?php echo $row['image'] ?> " alt="Lỗi ảnh" class="product-img">
                    </a>
                    <p class="product-introduce "><?php echo $row['tenSP'] ?></p>
                    <p class="product-price "><?php echo number_format($row['gia'], 0, '', ','); ?> ₫</p>
                </div>

            <?php }  ?>
        </div>
    </div>
</div>