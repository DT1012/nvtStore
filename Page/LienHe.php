<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/font/themify-icons/themify-icons.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>Liên Hệ</title>
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
            display: flex;
            width: 100%;
        }

        .image-1 img {
            width: 100%;
            height: 600px;
            margin: 40px;
        }

        .ten {
            font-weight: bold;
            font-size: 40px;
            margin-left: 50px;
            margin-bottom: 40px;
            margin-top: 10px;
            font-family: Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;
        }

        .icons {
            display: flex;
        }

        .icons i {
            font-size: 20px;
            margin-right: 20px;
            margin-bottom: 20px;
            color: rgb(15, 172, 26);
        }

        .icons p {
            font-size: 20px;
            margin-left: 5px;
        }

        .lienhe {
            font-weight: bold;
            font-size: 40px;
            margin-top: 20px;
            margin-bottom: 20px;
        }

        .text {
            margin: auto;
        }

        .text-1 input {
            margin-top: 20px;
            font-size: 15px;
        }

        .form-name {
            width: 250px;
            height: 40px;
            border: 2px solid rgb(159, 156, 156);
        }

        .form-email {
            width: 250px;
            height: 40px;
            margin-left: 20px;
            border: 2px solid rgb(159, 156, 156);
        }

        .form-message {
            width: 522px;
            height: 100px;
            border: 2px solid rgb(159, 156, 156);
            margin-top: 20px;
            font-size: 15px;
            font-family: Arial;
        }

        .form-sbm {
            height: 40px;
            width: 350px;
            background-color: rgb(91, 90, 148);
            border: none;
            border-radius: 5px;
            margin-left: 85px;
            font-weight: bold;
        }

        .form-sbm:hover {
            color: white;
            background-color: rgba(91, 90, 148, 0.605);
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
        <div class="image-1">
            <img src="../image/lhmap.jpg" alt="lỗi">
        </div>

        <div class="text">
            <h2 class="ten">NVT SHOP</h2>
            <div class="icons">
                <i class="fa-solid fa-location-dot"></i>
                <p>24 Đường Cầu Giấy, Bắc Từ Liêm, Hà Nội</p>
            </div>

            <div class="icons">
                <i class="fa-solid fa-phone-volume"></i>
                <p>1900 818 020</p>
            </div>

            <div class="icons">
                <i class="fa-solid fa-envelope"></i>
                <p>nguyenvantai@gmail.com</p>
            </div>

            <h2 class="lienhe">Liên Hệ Với Chúng Tôi</h2>

            <form method="post" class="form">
                <div class="text-1">
                    <input type="text" name="text-name" value-size="40" class="form-name" placeholder="Họ và tên">
                    <input type="text" name="text-email" value-size="40" class="form-email" placeholder="Email">
                </div>

                <div class="text-1">
                    <input type="text" name="text-email" value-size="40" class="form-name" placeholder="Số điện thoại">
                    <input type="text" name="text-email" value-size="40" class="form-email" placeholder="Số lượng">
                </div>

                <div class="text-1">
                    <textarea type="text" name="text-email" value-size="40" class="form-message" placeholder="Lời nhắn"></textarea>
                </div>

                <div class="text-1">
                    <input type="submit" value="GỬI" class="form-sbm">
                </div>
            </form>
        </div>
    </div>

    <?php
    require_once 'layout/footer.php';
    ?>
</body>

</html>