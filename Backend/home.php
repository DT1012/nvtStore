<?php
session_start();

function getTotal($propName, $tableName, $key)
{
    $servername = "localhost";
    $username = "root";
    $password = "";

    $conn = mysqli_connect($servername, $username, $password, 'nvtstore');

    $query = "";
    switch ($key) {
        case 'count':
            $query = " SELECT COUNT($propName) as 'quality' FROM $tableName";
            break;
        case 'sum':
            $query = " SELECT SUM($propName) as 'quality' FROM $tableName";
            break;
        default:
            return 0;
    }
    $result = mysqli_query($conn, $query);
    $row = mysqli_fetch_assoc($result);
    $maSP = $row["quality"];
    return $maSP;
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./font/themify-icons/themify-icons.css">
    <title>Back-End</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        html {
            font-size: 62.5%;
            line-height: 1.6rem;
            box-sizing: border-box;
            font-family: 'Roboto', sans-serif;
        }

        .header {
            margin: -20px;
            background-color: #b8c6db;
            background-image: linear-gradient(315deg, #b8c6db 0%, #f5f7fa 74%);
        }

        .menu {
            display: flex;
            margin: 20px;
        }

        .menu-logo {
            width: 200px;
        }

        .logo {
            width: 100%;
        }

        .menu-list {
            margin: auto;
        }

        .list {
            display: flex;
            list-style: none;
            line-height: 20px;
        }

        .item>a {
            display: block;
            color: black;
            margin: 30px 30px;
            text-decoration: none;
            font-size: 600;
            font-size: 1.7rem;
        }

        .item:hover {
            background-color: rgb(131, 128, 126);
        }

        .main {
            display: flex;
            flex-direction: row;
            flex-wrap: wrap;
            justify-content: space-around;
            margin: 5% 5% 0 5%;
            margin-bottom: 100px;
        }

        .img {
            width: 365px;
            height: 200px;
        }

        .main-product {
            height: 300px;
            border: 1px solid black;
            text-align: center;
            width: calc(30% - 10px);
            margin-bottom: 80px;
            background-color: antiquewhite;
            box-shadow: -10px 10px rgba(206, 197, 197, 0.889);
        }

        .product-number {
            font-size: 3rem;
            margin: 20px 0;
        }

        .product-titel {
            font-size: 2rem;
            margin: 20px;
            text-decoration: none;
            color: black;
        }

        .main-product a:hover {
            color: red;
        }

        .main-product:hover {
            transform: scale(1.05);
        }
    </style>
</head>

<body>
    <?php
    require_once './layout/header.php';
    ?>
    <div class="main">
        <div class="main-product">
            <div class="product-img">
                <a href="../QLSanPham/index.php">
                    <img src="../image/sanpham.jpg" alt="Anh" class="img">
                </a>
            </div>
            <div class="product-number">
                <?php
                echo  getTotal("soLuongSP", "sanpham", "sum");
                ?>
            </div>
            <a class="product-titel" href="../QLSanPham/index.php">Số lượng Sản Phẩm</a>
        </div>
        <div class="main-product">
            <div class="product-img">

                <img src="../image/luottruycap.png" alt="Anh" class="img">

            </div>
            <div class="product-number">
                <?php
                if (isset($_SESSION['luottruycap'])) echo  $_SESSION['luottruycap'];
                ?>
            </div>
            <p class="product-titel">Lượt truy cập</p>
        </div>
        <div class="main-product">
            <div class="product-img">

                <img src="../image/luottruycap.png" alt="Anh" class="img">

            </div>
            <div class="product-number">
                <?php
                if (isset($_SESSION['mail'])) echo  $_SESSION['mail'] ;
                ?>
            </div>
            <p class="product-titel">Đang truy cập</p>
        </div>
        <div class="main-product">
            <div class="product-img">
                <a href="../QLKhachHang/index.php">
                    <img src="../image/Screenshot 2022-05-19 235434.png" alt="Anh" class="img">
                </a>
            </div>
            <div class="product-number"><?php
                                        echo  getTotal("maKH", "khachhang", "count");
                                        ?></div>
            <a class="product-titel" href="../QLKhachHang/index.php">Khách Hàng</a>
        </div>

        <div class="main-product">
            <div class="product-img">
                <a href="../QLNhaSX/index.php">
                    <img src="../image/nhasx.jpg" alt="Anh" class="img">
                </a>
            </div>
            <div class="product-number"><?php
                                        echo  getTotal("maNSX", "nhasanxuat", "count");
                                        ?></div>
            <a class="product-titel" href="../QLNhaSX/index.php">Nhà Sản Xuất</a>
        </div>

        <div class="main-product">
            <div class="product-img">
                <a href="../QLTheLoai/index.php">
                    <img src="../image/sanpham.jpg" alt="Anh" class="img">
                </a>
            </div>
            <div class="product-number"><?php
                                        echo  getTotal("maTL", "theloai", "count");
                                        ?></div>
            <a class="product-titel" href="../QLTheLoai/index.php">Thể Loại</a>
        </div>

        <div class="main-product">
            <div class="product-img">
                <a href="../QLDonHang/index.php">
                    <img src="../image/1737_tmdt.jpg" alt="Anh" class="img">
                </a>
            </div>
            <div class="product-number"><?php
                                        echo  getTotal("maDH", "donhang", "count");
                                        ?></div>
            <a class="product-titel" href="../QLDonHang/index.php">Đơn Hàng</a>
        </div>
    </div>
</body>

</html>