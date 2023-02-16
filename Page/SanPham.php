<?php
session_start();
require_once './data/database.php';

if (isset($_GET['id'])) {
  $spID = $_GET['id'];
  $sql = "SELECT * FROM sanpham where maSP = $spID";
  $query = mysqli_query($conn, $sql);
}


if (isset($_SESSION['giohang'])) $slsp = sizeof($_SESSION['giohang']);
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!-- <link rel="stylesheet" href="SanPham.css"> -->
  <link rel="stylesheet" href="/font/themify-icons/themify-icons.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <title>Sản Phẩm</title>
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
      justify-content: space-evenly;
      align-items: center;
      width: 1300px;
      margin: 50px auto;
    }

    .product-img {
      overflow: hidden;
      object-fit: cover;
      border: 1px solid;
      border-radius: 10px;
      transition-duration: .3s;
      transition-property: transform;
      transition-timing-function: ease-out;
    }

    .product-img:hover {
      transform: translateX(10px);
    }

    .info {
      font-size: 2.2rem;
      padding: 10px 0;
    }

    .info>h3,
    .info>h2 {
      padding: 10px 0;
    }

    .input-text {
      padding: 5px;
    }

    .add {
      padding: 5px;
      border: 1px solid;
      border-radius: 10px;
      background-color: #f09c9c;
    }

    .info>p {
      font-size: 1.6rem;
      padding: 10px 0;
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
  require_once './layout/header.php'
  ?>
  <div class="main">
    <?php

    while ($row = mysqli_fetch_assoc($query)) { ?>

      <div class="image">
        <img src="../image/<?php echo $row['image'] ?> " alt="Lỗi ảnh" class="product-img">
      </div>

      <div class="info">
        <h2><?php echo $row['tenSP'] ?></h2>
        <h3>Giá : <?php echo number_format($row['gia'], 0, '', ','); ?>đ</h3>
        <p><?php echo $row['moTa'] ?></p><br>
        <form action="../Page/Giohang.php" method="post">
          <input type="number" name="soLuong" class="input-text" step="1" min="1" max="9999" name="quantity" value="1" size="4" pattern="[0-9]*">
          <input type="text" hidden value='<?php echo $row['tenSP'] ?>' name="tenSP" />
          <input type="text" hidden value='<?php echo $row['gia'] ?>' name="gia" />
          <input type="text" hidden value='<?php echo  $row['image']  ?>' name="image" />
          <input type="submit" name="addcart" value="Đặt hàng">
        </form>
      <?php }  ?>
      </div>
  </div>
  <?php
  require_once './layout/footer.php'
  ?>
</body>

</html>