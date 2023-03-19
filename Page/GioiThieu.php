<?php 
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/font/themify-icons/themify-icons.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>Giới Thiệu</title>
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


        .row{
            display: flex;
            justify-content: center;
        }
        .col-inner>h2{
            margin: auto;
            font-size: 2.2rem;
            margin: auto 40%;
            padding: 10px;
        }
        .col-inner>p,.text{
            line-height: 2.2;
            font-size: 1.6rem;
            margin: 16px;
        }
        .img-gt{
            margin: 16px;
            width: 600px;
            height: 400px;
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
    require_once './layout/header.php';
    ?>
    <div id="content" role="main" class="content-area">
        <div class="row " >
            <div class="col">
                <div class="col-inner">
                    <h2 class="uppercase">LỊCH SỬ HÌNH THÀNH</h2>
                    <p>Ra đời từ ý tưởng tạo nên sự khác biệt, Nhà Xinh đã giữ vững và phát triển trở thành vị trí hàng đầu trong thị trường nội thất Việt Nam. Đến nay, Nhà Xinh đã có nhiều cửa hàng quy mô và chuyên nghiệp tại các thành phố lớn là Hà Nội và TP.HCM, Bình Dương.</p>
                </div>
            </div>
        </div>
        <div class="row ">
            <div class="col">
                <div class="col-inner">
                    <div class="img" >
                        <div class="img-inner drak">
                            <img src="../image/gt1.jpg" class="img-gt" alt="Ảnh" >
                        </div>
                    </div>
                </div>
            </div>
            <div  class="col">
                <div class="col-inner">
                    <div  class="text">
                        <p><strong>2021:</strong> Khẳng định thương hiệu bền vững với những bước phát triển mới dù đối mặt những khó khăn do dịch bệnh Covid. Hệ thống cửa hàng mở rộng, với showroom mới tại Bình Dương.</p>
                        <p><strong>2020:</strong> Đơn vị chủ quản thương hiệu Nhà Xinh – AKA Furniture Group tái cơ cấu trở thành thành viên của tập đoàn AA Corporation – Tập đoàn sản xuất và thi công nội thất chất lượng cao hàng đầu Châu Á.</p>
                        <p><strong>2019:</strong> Đây là năm mang dấu ấn đặc biệt của thương hiệu Nhà Xinh – Đánh dấu chặng đường phát triển 20 năm. Với sự xuất hiện của 2 cửa hàng tại Nguyễn Văn Hưởng (Q2, HCM) và Trung tâm nội thất Thụy Khuê (Tây Hồ, Hà Nội)</p>
                        <p><strong>2016:</strong> Mở rộng hệ thống Nhà Xinh với 2 cửa hàng lớn ở ngay trung tâm thủ đô Hà Nội thuộc quận Hoàn Kiếm và quận Đống Đa.</p>
                        <p><strong>2011 – 2014</strong>: Khẳng định thương hiệu với sự xuất hiện của 2 cửa hàng mới tại ngã tư trung tâm Q1, TP.HCM (Hai Bà Trưng – Trần Cao Vân) và TTTM Royal City Hà Nội.</p>
                        <p><strong>2005 – 2010:</strong> Phát triển mạnh mẽ với hệ thống cửa hàng trên các khu đô thị mới là Nhà Xinh Yên Hòa, Nhà Xinh Phú Mỹ Hưng và Nhà Xinh Centre – khu vực trung tâm Q1.</p>
                        <p><strong>2002 – 2005:</strong> Nhà Xinh Cát Linh tại Hà Nội và Nhà Xinh Citimart tại TP.HCM nhằm hoàn thiện hệ thống và phục vụ tốt hơn cho Khách hàng.</p>
                        <p><strong>1999:</strong> Ra đời với 2 cửa hàng lớn tại Hà Nội và TP.HCM, mang đậm phong cách riêng về thiết kế và cách bày trí.</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col">
                <div class="col-inner">
                    <div class="img " >
                        <div class="img-inner dark">
                            <img src="../image/gt2.jpg" class="img-gt" alt="Ảnh" >
                        </div>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="col-inner">
                    <div class="text">
                        <h3>Giá trị và sự khác biệt</h3>
                        <p>Với mong muốn phát triển thương hiệu Việt bằng nội lực, Nhà Xinh đã chú trọng vào thiết kế và sản xuất nội thất trong nước. Danh mục sản phẩm của Nhà Xinh thường xuyên được đổi mới và cập nhật, liên tục cung cấp cho khách hàng các dòng sản phẩm theo xu hướng mới nhất. Do chính người Việt thiết kế và sản xuất, nội thất thương hiệu Nhà Xinh luôn phù hợp với cuộc sống Á Đông, đem đến sự tiện nghi hoàn hảo trong mọi không gian sống.</p>
                        <p>Hơn 70% sản phẩm của Nhà Xinh được thiết kế, sản xuất bởi đội ngũ nhân viên cùng công nhân ưu tú với nhà máy có cơ sở vật chất hiện đại bậc nhất tại Việt Nam.</p>
                        <p>Sự khác biệt của Nhà Xinh chính là sáng tạo nội thất thành phong cách riêng, phù hợp với nhu cầu khách hàng. Không chỉ là sản phẩm nội thất đơn thuần, mà còn là không gian sống theo phong cách riêng với cách bày trí hài hòa từ đồ nội thất kết hợp với đồ trang trí. Giúp khách hàng cảm nhận được một không gian sống thực sự, cảm thấy thoải mái để tận hưởng cuộc sống.</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="row" >
            <div class="col ">
                <div class="col-inner">
                    <div class="img ">
                        <div class="img-inner dark">
                            <img src="../image/gt3.jpg"  class="img-gt" alt="Ảnh" >
                        </div>
                    </div>
                </div>
            </div>
            <div  class="col">
                <div class="col-inner">
                    <div class="text">
                        <h3>Chất lượng và dịch vụ</h3>
                        <p>Chất lượng của nguyên vật liệu, phụ kiện và quy trình sản xuất đều được kiểm định và giám sát chặt chẽ bởi hệ thống quản lý chất lượng ISO 9001. Sản phẩm của Nhà Xinh được thiết kế theo định hướng công năng sử dụng, thẩm mỹ và chất lượng. Trong những năm gần đây, thương hiệu luôn hướng đến xu hướng thiết kế xanh nhằm đóng góp không chỉ một không gian sống tiện nghi mà còn là một môi trường sống trong lành cho người sử dụng và cộng đồng. Với nhiều cống hiến như vậy, Nhà Xinh vinh dự nhiều năm liền được trao tặng các danh hiệu “Hàng Việt Nam chất lượng cao”, “Trusted brand” và “Top 100 nhà cung cấp hàng đầu”.</p>
                        <p>Bên cạnh đó, Nhà Xinh tự hào sở hữu đội ngũ tư vấn thiết kế và kỹ sư chuyên nghiệp, có kiến thức sâu rộng trong lĩnh vực đồ gỗ nội thất. Tập thể nhân viên tại Nhà Xinh cam kết nỗ lực tư vấn và trợ giúp khách hàng lựa chọn sản phẩm ưng ý nhất. Dịch vụ tư vấn thiết kế của Nhà Xinh sẽ giúp khách hàng kiến tạo một không gian sống như ý thông qua sự phối hợp điêu luyện giữa các sản phẩm nội thất và đồ trang trí.</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="row " >
            <div class="col ">
                <div class="col-inner">
                    <div class="img" >
                        <div class="img-inner dark">
                            <img src="../image/gt4.jpg"  class="img-gt" alt="Ảnh">
                        </div>
                    </div>
                    <div class="img">
                        <div class="img-inner dark">
                            <img src="../image/gt5.jpg"  class="img-gt" alt="Ảnh">
                        </div>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="col-inner">
                    <div class="text">
                        <h3>Nhà máy</h3>
                        <p>Phần lớn sản phẩm của Nhà Xinh được sản xuất tại nhà máy của Tổng công ty AA (AA Đức Hòa, Long An và AA Tây Ninh) có diện tích 80.000m2, với trang thiết bị hiện đại nhất và theo tiêu chuẩn ISO 9001, chuyên sản xuất các sản phẩm nội thất chất lượng cao cho các khách sạn, nhà hàng 5 sao, dự án nội thất cao cấp và xuất khẩu.</p>
                        <h3>Nhà Xinh và Cộng Đồng</h3>
                        <p>Đóng góp cho cộng đồng nằm trong sứ mệnh của Nhà Xinh. Để trở thành thương hiệu tiên phong và văn minh, Nhà Xinh đã thực hiện nhiều các hoạt động công đồng như hỗ trợ trẻ em nghèo, tham gia các hoạt động vì môi trường như thiết kế xanh, đi bộ từ thiện…Những bước chân, hành động không ngừng nghỉ để góp phần cho cuộc sống tốt hơn.</p>
                    </div>
                </div>
            </div>
        </div>
        
    </div>
    <?php
    require_once "layout/footer.php";
    ?>
</body>

</html>