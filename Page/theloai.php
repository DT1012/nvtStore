<?php
session_start();

require_once 'data/database.php';

if (isset($_GET['idTL'])) {
    $tlID = $_GET['idTL'];

    $sql = "SELECT * FROM sanpham inner join theloai on sanpham.maTL = theloai.maTL";
    $sql = "SELECT * FROM sanpham inner join nhasanxuat on sanpham.maNSX = nhasanxuat.maNSX WHERE maTL= $tlID";
    $query = mysqli_query($conn, $sql);
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/font/themify-icons/themify-icons.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>Cửa Hàng</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            width: 100%;
        }

        html {
            font-size: 62.5%;
            line-height: 1.6rem;
            box-sizing: border-box;
            font-family: 'Roboto', sans-serif;
            background-color: rgb(233, 233, 233);
        }

        :root {
            --font: 1.6rem;
            --color: #000;
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

        h1 {
            position: absolute;
            margin-top: 120px;
            margin-left: 40%;
            font-weight: bold;
            font-size: 50px;
            color: rgb(53, 48, 48);
            font-style: italic;
        }

        .main-product {
            display: flex;
        }

        .category {
            margin: 30px;
            font-size: 1.5rem;
            background-color: white;
            width: 500px;
            height: 440px;
        }

        .category-heading {
            font-size: 4rem;
            text-align: center;
            color: rgb(50 44 44);
            margin: 30px;
        }

        .category-list {
            line-height: 30px;
            margin: 20px;
            width: 350px;
            height: 340px;
            border: 2px solid gray;
            border-radius: 20px;
        }

        .category-item {
            list-style: none;
            width: 300px;
            font-size: 20px;
            font-weight: bold;
            margin-left: 20px;
            margin-top: 30px;
            border-bottom: 1px solid gray;
        }

        .category-item a {
            height: 30px;
        }

        .category-item>a:hover {
            right: -4px;
            color: #f54f4f8e;
        }

        .category-item>a {
            position: relative;
            transition: right linear 0.1s;
            text-decoration: none;
            color: #000;
        }

        .product {
            margin: 20px;
            width: 100%;
        }

        .product-row:hover {
            bottom: -4px;
        }

        .product-colum {
            display: flex;
            flex-wrap: wrap;
            margin-bottom: 100px;
        }

        .product-row {
            position: relative;
            padding: 20px;
            margin: 10px 30px 50px;
            border: 1px solid #181515;
            text-align: center;
            transition: bottom linear 0.1s;
            width: 400px;
        }

        .product-img {
            width: 100%;
            height: 85%;
        }

        .product-introduce,
        .product-price {
            font-size: 2rem;
            margin-top: 5px;
            cursor: pointer;
        }

        .product-introduce:hover {
            color: #e61d1d;
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
    <div class="main-product">
        <div class="category">
            <h2 class="category-heading">Danh Mục</h2>
            <ul class="category-list">
                <?php
                $sql_tl =  mysqli_query($conn, "SELECT * from theloai");
                while ($row_tl = mysqli_fetch_array($sql_tl)) {
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
    <?php
    require_once 'layout/footer.php';
    ?>
</body>

</html>