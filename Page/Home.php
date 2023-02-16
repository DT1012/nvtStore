<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Trang chủ</title>
  <link rel="stylesheet" href="/font/themify-icons/themify-icons.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <script type="text/javascript" src="Home.js"></script>
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

    .slider {
      max-width: 1500px;
      margin: 50px auto;
      position: relative;
    }

    .slider-next,
    .slider-prev {
      position: absolute;
      top: 50%;
      transform: translateY(-50%);
      width: 20px;
      height: 20px;
      border-radius: 100rem;
      color: #999;
      cursor: pointer;
      font-size: 20px;
      z-index: 10;
      font-size: 30px;
      color: rgb(235, 224, 224);
    }

    .slider-next {
      right: 25px;
    }

    .slider-prev {
      left: 15px;
    }

    .slider-dots {
      position: absolute;
      left: 50%;
      transform: translateX(-50%);
      bottom: 5px;
      display: flex;
      justify-content: center;
      align-items: center;
      list-style: none;
      z-index: 10;
    }

    .slider-dots li {
      margin: 0 10px;
      width: 15px;
      height: 15px;
      border-radius: 100rem;
      background-color: #999;
      cursor: pointer;
      transition: background-color 0.25s linear;
    }

    .slider-dots li.active {
      background-color: white;
    }

    .slider-wrapper {
      width: 100%;
      height: 700px;
      overflow: hidden;
      position: relative;
    }

    .slider-main {
      display: flex;
      position: relative;
      transition: transform 0.5s linear;
      height: 100%;
    }

    .slider-item {
      height: 100%;
      width: 100%;
      flex: 1 0 100%;
      user-select: none;
    }

    .slider-item img {
      width: 100%;
      height: 700px;
      object-fit: contain;
      border-radius: 10px;
    }

    .main-btn {
      display: flex;
      justify-content: center;
      margin-top: 50px;
    }

    .btn {
      line-height: 50px;
      width: 100px;
      border-radius: 50px;
      margin: 0 30px;
      background-color: rgb(243, 73, 73);
      cursor: pointer;
    }

    .btn:hover {
      background-color: rgb(243, 73, 73, 0.5);
      color: white;
    }

    .product-colum {
      display: flex;
      justify-content: center;
      flex-wrap: wrap;
    }

    .product-row {
      gap: 10px;
      max-width: 400px;
      margin: 15px;
      border-radius: 10px;
      border: 1px solid black;
      padding: 15px;
    }

    .product-img {
      width: 350px;
      object-fit: cover;
      transition-duration: .3s;
      transition-property: transform;
      transition-timing-function: ease-out;
    }

    .product-img:hover {
       transform: scale(1.13);
    }

    .intr,
    .pic {
      margin: auto;
      font-size: 1.6rem;
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
<?php
require_once 'data/database.php';
$sql = "SELECT * FROM sanpham inner join theloai on sanpham.maTL = theloai.maTL";
$sql = "SELECT * FROM sanpham inner join nhasanxuat on sanpham.maNSX = nhasanxuat.maNSX";
$query = mysqli_query($conn, $sql);
?>

<body>
  <?php
  require_once "./layout/header.php";
  ?>
  <div class="slider">
    <i class="fa-solid fa-circle-chevron-left slider-prev"></i>
    <ul class="slider-dots">
      <li class="slider-dot-item active" data-index="0"></li>
      <li class="slider-dot-item" data-index="1"></li>
      <li class="slider-dot-item" data-index="2"></li>
      <li class="slider-dot-item" data-index="3"></li>
    </ul>
    <div class="slider-wrapper">
      <div class="slider-main">
        <div class="slider-item">
          <img src="../image/Phong-khach-Miami-trang-nha-gon-gang-600x400.jpg" alt="" />
        </div>
        <div class="slider-item">
          <img src="../image/hang-trang-tri-nx-12-9-22.jpg" alt="" />
        </div>
        <div class="slider-item">
          <img src="../image/KHONG-GIAN-TUOI-SANG-DON-XUAN-SANG.jpg" alt="" />
        </div>
        <div class="slider-item">
          <img src="../image/banner-phong-an-nha-xinh-12-9-22.jpg" alt="" />
        </div>
      </div>
    </div>
    <i class="fa-solid fa-circle-chevron-right slider-next"></i>
  </div>

  <div class="main">
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
            <a href="http://localhost/nvtStore/Page/Sanpham.php?id=<?php echo $row['maSP'] ?>">
              <img src="../image/<?php echo $row['image'] ?> " alt="Lỗi ảnh" class="product-img">
            </a>
            <p class="intr "><?php echo $row['tenSP'] ?></p>
            <p class="pic"><?php echo $row['gia'] ?> ₫<button style="width: 40px; height: 30px; background-color: rgb(243, 73, 73); border: none; cursor: pointer; border-radius: 5px; margin-left: 5px;">Mua</button>
          </div>
          </p>
        <?php }  ?>
      </div>
    </div>
  </div>


  <?php
  require_once "./layout/footer.php";
  ?>
</body>

</html>