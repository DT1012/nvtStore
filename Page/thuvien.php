
<?php
function ketnoidb(){
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "nvtstore";
    
    try {
        $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
        // set the PDO error mode to exception
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        return $conn;
        
    } catch(PDOException $e) {
       return $e->getMessage();
    }
}
function taogiohang($tenSP,$image,$donGia,$soLuong,$thanhTien,$maHD){
    $conn=ketnoidb();
    $sql = "INSERT INTO donhang(tenSP,image,donGia,soLuong,thanhTien,maHD) VALUES ('$tenSP','$image','$donGia','$soLuong','$thanhTien','$maHD')";
    // use exec() because no results are returned
    $conn->exec($sql);
    $conn = null;
}
function taodonhang($tenKH,$diaChi,$soDT,$mail,$tongTien,$pttt){
    $conn = ketnoidb();
    $sql = "INSERT INTO hoadon(tenKH,diaChi,soDT,mail,tongTien,pttt) VALUES ('$tenKH','$diaChi','$soDT','$mail','$tongTien','$pttt')";
    // use exec() because no results are returned
    $conn->exec($sql);
    $last_id = $conn->lastInsertId();
    $conn = null;
    return $last_id;
}
function addcart($image,$tenSP,$donGia,$soLuong){

    $fl=0; //kiem tra sp co trung trong gio hang khong?

    for ($i=0; $i < sizeof($_SESSION['giohang']); $i++) { 
        
        if($_SESSION['giohang'][$i][1]==$tenSP){
            $fl=1;
            $soLuongnew=$soLuong+$_SESSION['giohang'][$i][3];
            $_SESSION['giohang'][$i][3]=$soLuongnew;
            break;

        }
        
    }
    //neu khong trung sp trong gio hang thi them moi
    if($fl==0){
        //them moi sp vao gio hang
        $sp=[$image,$tenSP,$donGia,$soLuong];
        $_SESSION['giohang'][]=$sp;
    }
}
function tongdonhang()
{
    $tong = 0;
    if (isset($_SESSION['giohang']) && (is_array($_SESSION['giohang']))) {
        if (sizeof($_SESSION['giohang']) > 0) {
            for ($i = 0; $i < sizeof($_SESSION['giohang']); $i++) {
                $tt = $_SESSION['giohang'][$i][2] * $_SESSION['giohang'][$i][3];
                $tong += $tt;
                
            }
        }
    }
    return $tong;
}
function showgiohang()
{
    $ttgh ="";
    if (isset($_SESSION['giohang']) && (is_array($_SESSION['giohang']))) {
        if (sizeof($_SESSION['giohang']) > 0) {
            $tong = 0;
            for ($i = 0; $i < sizeof($_SESSION['giohang']); $i++) {
                $tt = $_SESSION['giohang'][$i][2] * $_SESSION['giohang'][$i][3];
                $tong += $tt;
                $ttgh.='<tr>
                        <td>' . ($i + 1) . '</td>
                        <td><img src="../image/' . $_SESSION['giohang'][$i][0] . '" alt="ảnh" class="product-img"></td>
                        <td>' . $_SESSION['giohang'][$i][1] . '</td>
                        <td>' . number_format($_SESSION['giohang'][$i][2], 0, '', ',') . '</td>
                        <td>' . $_SESSION['giohang'][$i][3] . '</td>
                        <td>
                            <div>' . number_format($tt, 0, '', ',') . '</div>
                        </td>
                        <td>
                            <a href="Giohang.php?delid=' . $i . '">Xóa</a>
                        </td>
                    </tr>';
            }
            $ttgh.= '<tr>
                    <th colspan="5">Tổng đơn hàng</th>
                    <th>
                        <div>' . number_format($tong, 0, '', ',') . '</div>
                    </th>

                </tr>';
        } 
        return $ttgh;
    }
}
