-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th3 19, 2023 lúc 04:44 AM
-- Phiên bản máy phục vụ: 10.4.25-MariaDB
-- Phiên bản PHP: 7.4.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `nvtstore`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `donhang`
--

CREATE TABLE `donhang` (
  `maDH` int(11) NOT NULL,
  `tenSP` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `image` char(50) COLLATE utf8_unicode_ci NOT NULL,
  `donGia` double NOT NULL,
  `soLuong` int(11) NOT NULL,
  `thanhTien` double NOT NULL,
  `maHD` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `donhang`
--

INSERT INTO `donhang` (`maDH`, `tenSP`, `image`, `donGia`, `soLuong`, `thanhTien`, `maHD`) VALUES
(31, 'Đèn bàn Fotellina Ant Brass 114940E', 'den2.jpg', 30000000, 1, 30000000, 10),
(32, 'Bàn làm việc Pio', 'ban3.jpg', 25000000, 1, 25000000, 10),
(33, 'Tủ âm Diamond', 'ke2.jpg', 50000000, 1, 50000000, 10),
(34, 'Đèn bàn Fotellina Ant Brass 114940E', 'den2.jpg', 30000000, 1, 30000000, 11),
(35, 'Bàn làm việc Pio', 'ban3.jpg', 25000000, 1, 25000000, 11),
(36, 'Tủ âm Diamond', 'ke2.jpg', 50000000, 1, 50000000, 11),
(37, 'Tủ âm Whitecalypso', 'ke1.jpg', 60000000, 1, 60000000, 15),
(38, 'Tủ âm Diamond', 'ke2.jpg', 50000000, 1, 50000000, 17),
(39, 'Đèn bàn Fotellina Ant Brass 114940E', 'den2.jpg', 30000000, 6, 180000000, 17),
(40, 'Tủ âm Diamond', 'ke2.jpg', 50000000, 1, 50000000, 18),
(41, 'Đèn bàn Fotellina Ant Brass 114940E', 'den2.jpg', 30000000, 6, 180000000, 18),
(42, 'Tủ âm Diamond', 'ke2.jpg', 50000000, 1, 50000000, 19),
(43, 'Đèn bàn Fotellina Ant Brass 114940E', 'den2.jpg', 30000000, 6, 180000000, 19),
(44, 'Tủ âm Diamond', 'ke2.jpg', 50000000, 1, 50000000, 20),
(45, 'Đèn bàn Fotellina Ant Brass 114940E', 'den2.jpg', 30000000, 6, 180000000, 20),
(46, 'Sofa Penny 3 chỗ da Veneza 506 MB', 'sofa2.jpg', 62000000, 3, 186000000, 21),
(47, 'Tủ âm Whitecalypso', 'ke1.jpg', 60000000, 3, 180000000, 25),
(48, 'Tủ âm Whitecalypso', 'ke1.jpg', 60000000, 1, 60000000, 28),
(49, 'Tủ âm Whitecalypso', 'ke1.jpg', 60000000, 1, 60000000, 31),
(50, 'Đèn bàn Fotellina Ant Brass 114940E', 'den2.jpg', 30000000, 1, 30000000, 31),
(51, 'Bàn làm việc Hopper 38929P', 'ban1.jpg', 48000000, 1, 48000000, 34),
(52, 'Tủ âm Whitecalypso', 'ke1.jpg', 60000000, 3, 180000000, 34),
(53, 'Tủ âm Whitecalypso', 'ke1.jpg', 60000000, 2, 120000000, 35);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `hoadon`
--

CREATE TABLE `hoadon` (
  `maHD` int(10) NOT NULL,
  `tenKH` varchar(255) NOT NULL,
  `diaChi` varchar(255) NOT NULL,
  `soDT` varchar(255) NOT NULL,
  `mail` varchar(255) NOT NULL,
  `tongTien` double NOT NULL,
  `pttt` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `hoadon`
--

INSERT INTO `hoadon` (`maHD`, `tenKH`, `diaChi`, `soDT`, `mail`, `tongTien`, `pttt`) VALUES
(8, 'Nguyễn Văn Tài', 'Nam Dinh', '23254245', 'tai@gmail.com', 55000000, 'trả tiền khi nhận được hàng'),
(9, 'Nguyễn Văn Tài', 'Nam Dinh', '23254245', 'tai@gmail.com', 105000000, 'trả tiền khi nhận được hàng'),
(10, 'Nguyễn Văn Tài', 'Nam Dinh', '23254245', 'tai@gmail.com', 105000000, 'trả tiền khi nhận được hàng'),
(11, 'Nguyễn Văn Tài', 'Nam Dinh', '23254245', 'tai@gmail.com', 105000000, 'trả tiền khi nhận được hàng'),
(12, 'Nguyễn Văn Tài', 'Nam Dinh', '23254245', 'tai@gmail.com', 0, 'trả tiền khi nhận được hàng'),
(13, 'Nguyễn Văn Tài', 'Nam Dinh', '23254245', 'tai@gmail.com', 0, 'trả tiền khi nhận được hàng'),
(14, 'Nguyễn Văn Tài', 'Nam Dinh', '23254245', 'tai@gmail.com', 0, 'trả tiền khi nhận được hàng'),
(15, 'Nguyễn Văn Tài', 'Nam Dinh', '23254245', 'anh@gmail.com', 60000000, 'trả tiền khi nhận được hàng'),
(17, 'Nguyễn Văn Tài', 'Nam Dinh', '23254245', 'tai@gmail.com', 230000000, 'trả tiền khi nhận được hàng'),
(18, 'Nguyễn Văn Tài', 'Nam Dinh', '23254245', 'tai@gmail.com', 230000000, 'trả tiền khi nhận được hàng'),
(19, 'Nguyễn Văn Tài', 'Nam Dinh', '23254245', 'tai@gmail.com', 230000000, 'trả tiền khi nhận được hàng'),
(20, 'Nguyễn Văn Tài', 'Nam Dinh', '23254245', 'tai@gmail.com', 230000000, 'trả tiền khi nhận được hàng'),
(21, 'Nguyễn Văn Tài', 'Nam Dinh', '43543', 'tai@gmail.com', 186000000, 'trả tiền khi nhận được hàng'),
(22, 'Nguyễn Văn Tài', 'Nam Dinh', '43543', 'tai@gmail.com', 0, 'trả tiền khi nhận được hàng'),
(23, 'Nguyễn Văn Tài', 'Nam Dinh', '43543', 'tai@gmail.com', 0, 'trả tiền khi nhận được hàng'),
(24, 'Nguyễn Văn Tài', 'Nam Dinh', '43543', 'tai@gmail.com', 0, 'trả tiền khi nhận được hàng'),
(25, 'tai', 'gsgafds', '43543', 'tai@gmail.com', 180000000, 'trả tiền khi nhận được hàng'),
(26, 'tai', 'gsgafds', '43543', 'tai@gmail.com', 0, 'trả tiền khi nhận được hàng'),
(27, 'tai', 'gsgafds', '43543', 'tai@gmail.com', 0, 'trả tiền khi nhận được hàng'),
(28, 'Nguyễn Văn Tài', 'Nam Dinh', '23254245', 'tai@gmail.com', 60000000, 'trả tiền khi nhận được hàng'),
(29, 'Nguyễn Văn Tài', 'Nam Dinh', '23254245', 'tai@gmail.com', 0, 'trả tiền khi nhận được hàng'),
(30, 'Nguyễn Văn Tài', 'Nam Dinh', '23254245', 'tai@gmail.com', 0, 'trả tiền khi nhận được hàng'),
(31, 'Nguyễn Văn Tài', 'Nam Dinh', '23254245', 'tai@gmail.com', 90000000, 'trả tiền khi nhận được hàng'),
(32, 'Nguyễn Văn Tài', 'Nam Dinh', '23254245', 'tai@gmail.com', 0, 'trả tiền khi nhận được hàng'),
(33, 'Nguyễn Văn Tài', 'Nam Dinh', '23254245', 'tai@gmail.com', 0, 'trả tiền khi nhận được hàng'),
(34, 'Nguyễn Văn Tài', 'Nam Dinh', '23254245', 'admin@gmail.com', 228000000, 'trả tiền khi nhận được hàng'),
(35, 'Nguyễn Văn Tài', 'Nam Dinh', '23254245', 'admin@gmail.com', 120000000, 'trả tiền khi nhận được hàng');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `khachhang`
--

CREATE TABLE `khachhang` (
  `maKH` int(11) NOT NULL,
  `tenKH` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `diaChi` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `soDT` bigint(20) NOT NULL,
  `mail` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `matKhau` varchar(100) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `khachhang`
--

INSERT INTO `khachhang` (`maKH`, `tenKH`, `diaChi`, `soDT`, `mail`, `matKhau`) VALUES
(1, 'Nguyễn Văn Tài', 'Trung Hòa, Trung Kính, Cầu Giấy, Hà Nội', 398398324, 'tai@gmail.com', '2222'),
(2, 'Hạ Ngọc Nam', 'Tu Hoàng, Nam Từ Liêm, Hà Nội', 922221452, 'nam@gmail.com', '3333'),
(3, 'Nguyễn Văn Nam', 'Mễ Trì, Nam Từ Liêm, Hà Nội', 3932625509, 'nam@gmail.com', '1111'),
(4, 'Phạm Ngọc Sâm', 'Nguyên Xá, Nam Từ Liêm, Hà Nội', 987654321, 'sam@gmail.com', '4444');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `nhasanxuat`
--

CREATE TABLE `nhasanxuat` (
  `maNSX` int(11) NOT NULL,
  `tenNSX` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `diaChi` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `soDT` bigint(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `nhasanxuat`
--

INSERT INTO `nhasanxuat` (`maNSX`, `tenNSX`, `diaChi`, `soDT`) VALUES
(1, 'Nguyen Van Tai', 'Cầu Giấy', 398398324),
(2, 'Thái Ngân', 'Phủ Lý - Hà Nam', 238836502),
(3, 'Văn Quyết', 'Trung Hòa - Cầu Giấy - Hà Nội', 3983593324);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `sanpham`
--

CREATE TABLE `sanpham` (
  `maSP` int(11) NOT NULL,
  `tenSP` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `image` char(100) COLLATE utf8_unicode_ci NOT NULL,
  `gia` int(11) NOT NULL,
  `ngay` date NOT NULL,
  `moTa` text COLLATE utf8_unicode_ci NOT NULL,
  `soLuongSP` int(11) NOT NULL,
  `maTL` int(11) NOT NULL,
  `maNSX` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `sanpham`
--

INSERT INTO `sanpham` (`maSP`, `tenSP`, `image`, `gia`, `ngay`, `moTa`, `soLuongSP`, `maTL`, `maNSX`) VALUES
(1, 'Sofa 3 chỗ Osaka mẫu 1 vải 29', 'sofa1.jpg', 32000000, '2022-12-12', 'Sofa 3 chỗ từ bộ sưu tập Osaka mang nét hiện đại và thơ mộng của Nhật Bản, tạo nên một không gian sống độc đáo đầy sang trọng. Sản phẩm có phần chân bằng inox màu gold chắc chắn, phần nệm được bọc vải và có thể tháo rời được. Sofa 3 chỗ Osaka mẫu 1 vải 29 không chỉ mang đến thiết kế tinh tế, sang trọng mà còn cho người ngồi cảm giác thoải mái, dễ chịu.', 45, 2, 2),
(2, 'Sofa Penny 3 chỗ da Veneza 506 MB', 'sofa2.jpg', 62000000, '2022-07-08', 'Sự đơn giản, tinh tế, sang trọng và không kém phần nổi bật của chiếc Sofa mang dòng máu bất diệt Scandinavian này với lần lượt các phiên bản màu từ tối tới sáng bật Pastel sẽ mang lại các sắc màu không thể lẫn vào đâu và đa dạng cho từng không gian sống nhà bạn. Thiết kế vuông vức, thanh mảnh nhẹ nhàng là sự pha trộn giữa vững chãi và nhẹ nhàng là tất cả những yếu tố thiết yếu hội tụ ở chiếc sofa này.', 20, 2, 3),
(6, 'Sofa 3 chỗ Osaka mẫu 1 vải 65', 'sofa3.jpg', 29800000, '2022-08-19', 'Sofa 3 chỗ từ bộ sưu tập Osaka mang nét hiện đại và thơ mộng của Nhật Bản, tạo nên một không gian sống độc đáo đầy sang trọng. Sản phẩm có phần chân bằng inox màu gold chắc chắn, phần nệm được bọc vải và có thể tháo rời được. Sofa 3 chỗ Osaka mẫu 1 vải 65 không chỉ mang đến thiết kế tinh tế, sang trọng mà còn cho người ngồi cảm giác thoải mái, dễ chịu.', 12, 2, 3),
(12, 'Bàn làm việc Hopper 38929P', 'ban1.jpg', 48000000, '2022-07-03', 'Thích hợp với mọi văn phòng', 15, 3, 1),
(13, 'Bàn làm việc Osaka', 'ban2.jpg', 35000000, '2022-09-09', 'Bàn đẹp thích hợp với mọi văn phòng', 33, 3, 3),
(14, 'Bàn làm việc Pio', 'ban3.jpg', 25000000, '2022-09-02', 'Bàn đẹp thích hợp với mọi văn phòng', 60, 3, 1),
(15, 'Đèn bàn Basil Nickel P23426', 'den1.jpg', 5000000, '2022-08-21', 'Đèn rất đẹp an toàn thích hợp với mọi văn phòng', 100, 5, 2),
(16, 'Đèn bàn Fotellina Ant Brass 114940E', 'den2.jpg', 30000000, '2022-06-16', 'Đèn đẹp dùng để trang trí', 22, 1, 1),
(17, 'Tủ âm Whitecalypso', 'ke1.jpg', 60000000, '2022-07-08', 'Dùng để đồ thích hợp với mọi góc nhìn, đẹp đẽ.', 16, 4, 1),
(24, 'Tủ âm Diamond', 'ke2.jpg', 50000000, '2022-08-05', 'Dùng để kê đồ dùng', 30, 4, 2);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `theloai`
--

CREATE TABLE `theloai` (
  `maTL` int(11) NOT NULL,
  `tenTL` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `moTa` varchar(500) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `theloai`
--

INSERT INTO `theloai` (`maTL`, `tenTL`, `moTa`) VALUES
(1, 'Đồ văn phòng', 'Đồ đẹp, bền, giá rẻ'),
(2, 'Ghế', 'Bền, đẹp'),
(3, 'Bàn', 'Chất lượng tốt, thiết kế tinh tế.'),
(4, 'Kệ kê đồ', 'Tốt'),
(5, 'Đèn bàn', 'Chât lượng Tốt.');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `donhang`
--
ALTER TABLE `donhang`
  ADD PRIMARY KEY (`maDH`),
  ADD KEY `maHD` (`maHD`);

--
-- Chỉ mục cho bảng `hoadon`
--
ALTER TABLE `hoadon`
  ADD PRIMARY KEY (`maHD`);

--
-- Chỉ mục cho bảng `khachhang`
--
ALTER TABLE `khachhang`
  ADD PRIMARY KEY (`maKH`);

--
-- Chỉ mục cho bảng `nhasanxuat`
--
ALTER TABLE `nhasanxuat`
  ADD PRIMARY KEY (`maNSX`);

--
-- Chỉ mục cho bảng `sanpham`
--
ALTER TABLE `sanpham`
  ADD PRIMARY KEY (`maSP`),
  ADD KEY `Fk1_maTL` (`maTL`),
  ADD KEY `Fk2_maNSX` (`maNSX`);

--
-- Chỉ mục cho bảng `theloai`
--
ALTER TABLE `theloai`
  ADD PRIMARY KEY (`maTL`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `donhang`
--
ALTER TABLE `donhang`
  MODIFY `maDH` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=54;

--
-- AUTO_INCREMENT cho bảng `hoadon`
--
ALTER TABLE `hoadon`
  MODIFY `maHD` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;

--
-- AUTO_INCREMENT cho bảng `khachhang`
--
ALTER TABLE `khachhang`
  MODIFY `maKH` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT cho bảng `nhasanxuat`
--
ALTER TABLE `nhasanxuat`
  MODIFY `maNSX` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT cho bảng `sanpham`
--
ALTER TABLE `sanpham`
  MODIFY `maSP` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;

--
-- AUTO_INCREMENT cho bảng `theloai`
--
ALTER TABLE `theloai`
  MODIFY `maTL` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `donhang`
--
ALTER TABLE `donhang`
  ADD CONSTRAINT `donhang_ibfk_1` FOREIGN KEY (`maHD`) REFERENCES `hoadon` (`maHD`);

--
-- Các ràng buộc cho bảng `sanpham`
--
ALTER TABLE `sanpham`
  ADD CONSTRAINT `Fk1_maTL` FOREIGN KEY (`maTL`) REFERENCES `theloai` (`maTL`),
  ADD CONSTRAINT `Fk2_maNSX` FOREIGN KEY (`maNSX`) REFERENCES `nhasanxuat` (`maNSX`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
