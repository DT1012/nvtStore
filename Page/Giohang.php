<?php
session_start();
require_once 'data/database.php';

if (!isset($_SESSION['giohang'])) $_SESSION['giohang'] = [];

//làm rỗng giỏ hàng
if (isset($_GET['delcart']) && ($_GET['delcart'] == 1)) unset($_SESSION['giohang']);
//xóa sp trong giỏ hàng
if (isset($_GET['delid']) && ($_GET['delid'] >= 0)) {
    array_splice($_SESSION['giohang'], $_GET['delid'], 1);
}
if (isset($_POST['addcart']) && ($_POST['addcart'])) {
    $image = $_POST['image'];
    $tenSP = $_POST['tenSP'];
    $donGia = $_POST['gia'];
    $soLuong = $_POST['soLuong'];
    //kiem tra sp co trong gio hang hay khong?

    $fl = 0; //kiem tra sp co trung trong gio hang khong?

    for ($i = 0; $i < sizeof($_SESSION['giohang']); $i++) {

        if ($_SESSION['giohang'][$i][1] == $tenSP) {
            $fl = 1;
            $soLuongnew = $soLuong + $_SESSION['giohang'][$i][3];
            $_SESSION['giohang'][$i][3] = $soLuongnew;
            break;
        }
    }
    //neu khong trung sp trong gio hang thi them moi
    if ($fl == 0) {
        //them moi sp vao gio hang
        $sp = [$image, $tenSP, $donGia, $soLuong];
        $_SESSION['giohang'][] = $sp;
    }

    // var_dump($_SESSION['giohang']);
}
    include '../Page/thuvien.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Userinfo</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        :root {
            --font: 1.6rem;
            --color: #000;
        }

        body {
            width: 100%;
        }

        html {
            font-size: 62.5%;
        }

        .padding {
            padding-left: 10px;
        }

        header {
            background-color: #b8c6db;
            background-image: linear-gradient(315deg, #b8c6db 0%, #f5f7fa 74%);
        }

        .header-info,
        .header-inner {
            display: flex;
            width: 1000px;
            margin: auto;
            justify-content: space-between;
            font-size: var(--font);
            line-height: 30px;
            padding-top: 10px;
        }

        .header-menu {
            flex: 2;
        }

        .header-menu>ul {
            display: flex;
        }

        .header-menu>ul>li {
            list-style: none;
            padding-left: 16px;
        }

        a {
            text-decoration: none;
            color: var(--color);
        }

        a:hover {
            color: #f3494980;
        }

        .icon-search {
            margin: 10px;
        }

        #search {
            line-height: 20px;
            padding: 3px;
            min-width: 350px;
            border-radius: 10px;
            border: 1px solid;
        }

        #search:hover {
            cursor: pointer;
        }

        .main {
            font-size: 1.6rem;
        }

        .box {
            display: flex;
            align-items: center;
            justify-content: center;
            flex-direction: column;
            gap: 10px;
        }

        .row>h2 {
            text-align: center;
        }

        .mb {
            text-align: center;
        }

        input {
            width: 500px;
            padding: 5px;
        }

        input[type="submit"],
        input[type="button"] {
            width: 500px;
            padding: 5px;
            border-radius: 10px;
        }

        input[type="submit"]:hover,
        input[type="button"]:hover {
            cursor: pointer;
            background-color: #fff;
        }

        .product-img {
            width: 200px;
            height: 200px;
            overflow: hidden;
            object-fit: cover;
        }

        table {
            min-width: 1000px;
            align-items: center;
        }

        footer {
            margin-top: 50px;
        }

        .footer-top {
            display: flex;
            background-color: rgb(54, 54, 54);
            padding: 30px 150px 0px;
            justify-content: space-around;
            line-height: 50px;
        }

        .footer-center {
            display: flex;
            justify-content: space-around;
        }

        .contact-info {
            line-height: 1.5;
            font-size: 1.6rem;
            margin: 15px 30px 30px 30px;
        }

        .center-menu {
            font-size: 1.4rem;
            margin: 30px;
        }

        .menu-center {
            list-style: none;
            margin: 8px 10px;
            line-height: 20px;
        }

        .menu-center-list>a {
            color: #333;
            text-decoration: none;
            font-size: 600;
            font-size: 1.7rem;
            position: relative;
            transition: right linear 0.1s;
        }

        .menu-center-list>a:hover {
            right: -4px;
            color: #f3494980;
        }

        .foot {
            display: flex;
            justify-content: center;
            flex: 1;
            background-color: rgb(23 20 20);
            color: white;
            height: 50px;
            line-height: 50px;
            font-size: 20px;
            font-weight: bold;
        }
    </style>
</head>

<body>
    <?php
    require_once 'layout/header.php';
    ?>
    <div class="main">
        <div class="box">
            <form action="../Page/dathang.php" method="post">
                <div class="row">
                    <h2>THÔNG TIN NHẬN HÀNG</h2>
                    <table class="thongtinnhanhang">
                        <tr>
                            <td width="20%">Họ tên</td>
                            <td><input type="text" name="hoten" required></td>
                        </tr>
                        <tr>
                            <td>Địa chỉ</td>
                            <td><input type="text" name="diachi" required></td>
                        </tr>
                        <tr>
                            <td>Điện thoại</td>
                            <td><input type="text" name="dienthoai" required></td>
                        </tr>
                        <tr>
                            <td>Email</td>
                            <td><input type="text" name="email" required></td>
                        </tr>
                    </table>
                </div>
                <div class="row mb">
                    <h2>GIỎ HÀNG</h2>
                    <table>
                        <tr>
                            <th>STT</th>
                            <th>Hình</th>
                            <th>Tên sản phẩm</th>
                            <th>Đơn giá</th>
                            <th>Số lượng</th>
                            <th>Thành tiền ($)</th>
                            <th>Xóa</th>
                        </tr>
                        <?php echo showgiohang(); ?>
                        <!-- <tr>
                            <td>1</td>
                            <td><img src="images/1.jpg" alt=""></td>
                            <td>Đồng hồ</td>
                            <td>10</td>
                            <td>1</td>
                            <td>
                                <div>10</div>
                            </td>
                        </tr> -->
                        <!-- <tr>
                            <th colspan="5">Tổng đơn hàng</th>
                            <th>
                                <div>10</div>
                            </th>

                        </tr> -->
                    </table>
                </div>
                <div class="row mb">
                    <input type="submit" value="ĐỒNG Ý ĐẶT HÀNG" name="dongydathang">
                    <a href="Giohang.php?delcart=1"><input type="button" value="XÓA GIỎ HÀNG"></a>
                    <a href="../Page/CuaHang.php"><input type="button" value="TIẾP TỤC ĐẶT HÀNG"></a>
                </div>
            </form>
        </div>
    </div>
    <?php
    require_once 'layout/footer.php'
    ?>
</body>

</html>