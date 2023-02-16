
<?php

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
    if (isset($_SESSION['giohang']) && (is_array($_SESSION['giohang']))) {
        if (sizeof($_SESSION['giohang']) > 0) {
            $tong = 0;
            for ($i = 0; $i < sizeof($_SESSION['giohang']); $i++) {
                $tt = $_SESSION['giohang'][$i][2] * $_SESSION['giohang'][$i][3];
                $tong += $tt;
                echo '<tr>
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
            echo '<tr>
                    <th colspan="5">Tổng đơn hàng</th>
                    <th>
                        <div>' . number_format($tong, 0, '', ',') . '</div>
                    </th>

                </tr>';
        } else {
            echo "Giỏ hàng rỗng!";
        }
    }
}
