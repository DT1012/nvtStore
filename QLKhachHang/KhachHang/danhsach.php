<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./font/themify-icons/themify-icons.css">
    <title>Document</title>
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
            margin: -20px 0 20px;
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
            width: 80%;
            margin: auto;
        }

        .img {
            width: 400px;
            height: 400px;
        }

        .main-product {
            border: 1px solid black;
            margin: auto;
            text-align: center;
            height: 600px;
        }

        .product-number {
            font-size: 10rem;
            margin: 50px 0;
        }

        .product-titel {
            font-size: 2rem;
            margin: 20px;
        }

        .menu-search {
            margin-left: 45%;
            margin-bottom: 60px;
        }

        .menu-search form {
            width: 300px;
            height: 40px;
        }

        .menu-search form input {
            width: 100%;
            height: 100%;
            font-size: 15px;
            outline: none;
            padding-left: 5px;
        }

        .container {
            font-size: 17px;
        }

        .btn {
            background-color: rgb(41, 111, 250);
        }

        .btn a {
            color: white;
        }

        .btn:hover {
            background-color: rgb(41, 58, 250);
        }
    </style>
</head>

<body>
    <?php
    require_once 'header.php'
    ?>
    <div class="menu-search">
        <form action="index.php" method="GET">
            <input name="search" type="text" placeholder="Tìm kiếm">
        </form>
    </div>
    <?php
    $sql = "SELECT * FROM khachhang ;";
    $query = mysqli_query($conn, $sql);
    ?>
    <div class="container">
        <div class="car">
            <div class="card-header">
                <h1>Danh Sách Khách Hàng</h2>
            </div>
            <div class="card-body">
                <table class="table">
                    <thead class="thead-dark">
                        <tr>
                            <th>STT</th>
                            <th>Tên khách hàng</th>
                            <th>Địa chỉ</th>
                            <th>Điện thoại</th>
                            <th>Email</th>
                            <th>Mật khẩu</th>
                            <th colspan="2">Chức năng</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        if (isset($_GET['search'])) {
                            $search = $_GET['search'];
                            $querySearch = "SELECT * from khachhang where '$search' is not null and tenKH like CONCAT ('%$search%') or '$search' is null  ";
                            $dataSearch = mysqli_query($conn, $querySearch);
                        } else {
                            $dataSearch = mysqli_query($conn, $sql);
                        }
                        $i = 1;
                        while ($row = mysqli_fetch_assoc($dataSearch)) {
                        ?>

                            <tr>
                                <td><?php echo $i++; ?></td>
                                <td><?php echo $row['tenKH']; ?></td>
                                <td><?php echo $row['diaChi']; ?></td>
                                <td><?php echo $row['soDT']; ?></td>
                                <td><?php echo $row['mail']; ?></td>
                                <td><?php echo $row['matKhau']; ?></td>
                                <td class="link">
                                    <a style="text-decoration: none;" href="index.php?page_layout=sua&id=<?php echo $row['maKH']; ?>">Sửa</a>
                                </td>
                                <td class="link">
                                    <a style="text-decoration: none;" onclick="return Del('<?php echo $row['tenKH'] ?>')" href="index.php?page_layout=xoa&id=<?php echo $row['maKH']; ?>">Xóa</a>
                                </td>

                            </tr>
                        <?php } ?>
                    </tbody>
                </table>
                <br>
                <button class="btn">
                    <a style="text-decoration: none; font-size: 17px;" href="index.php?page_layout=them">Thêm Mới</a>
                </button>

            </div>
        </div>
    </div>
    <script>
        function Del(name) {
            return confirm("bạn có chắc chắn xóa không: " + name + "?");
        }
    </script>
</body>

</html>