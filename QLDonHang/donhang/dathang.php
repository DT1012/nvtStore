<?php
session_start();
require_once '../data/database.php';
include 'thuvien.php';
if(isset($_POST['dongydathang'])&&($_POST['dongydathang'])){
    //lấy thông tin khách hàng từ form
    $tenKH= $_POST['hoten'];
    $diachi= $_POST['diachi'];
    $soDT = $_POST['dienthoai'];
    $mail = $_POST['email'];
    $status="Đang Giao";



    $date = date("Y-m-d");
    $query = "select maKH form customer where mail = $mail";
    $result = mysqli_query($db->conn,$query);
    $row = mysqli_fetch_assoc($result);
    $maKH = $row["maKH"];
    $matkhau = $row["matKhau"];
    $data = mysqli_query($db->conn,$query);
    if(!$data -> num_rows){
        $query = "insert into khachhang values (0,'$tenKH','$diachi','$soDT','$mail','$matkhau')";
        $data = mysqli_query($db->conn,$query);
        $maKH =mysqli_insert_id($db->conn);

    }
    $sql = "Insert into donhang values (0,'$maSP','$date','$status','$maKH','$soLuong')";


    $pttt = 0;
    $total = tongdonhang();



    //Lấy thông tin giỏ hàng từ sesion 
    echo "ban đã đặt hàng thành công";
}
