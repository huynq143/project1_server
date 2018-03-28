-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 28, 2018 at 06:59 AM
-- Server version: 10.1.31-MariaDB
-- PHP Version: 7.2.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tham_khao`
--

-- --------------------------------------------------------

--
-- Table structure for table `dm_douong`
--

CREATE TABLE `dm_douong` (
  `MaDM` int(11) NOT NULL,
  `TenDM` varchar(30) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `dm_douong`
--

INSERT INTO `dm_douong` (`MaDM`, `TenDM`) VALUES
(1, 'Trà Sữa'),
(2, 'Cà Phê'),
(3, 'Các Loại Khác');

-- --------------------------------------------------------

--
-- Table structure for table `dm_monan`
--

CREATE TABLE `dm_monan` (
  `MaDM` int(11) NOT NULL,
  `TenDM` varchar(30) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `dm_monan`
--

INSERT INTO `dm_monan` (`MaDM`, `TenDM`) VALUES
(1, 'Món Chính'),
(2, 'Món Ăn Vặt'),
(3, 'Cơm Văn Phòng');

-- --------------------------------------------------------

--
-- Table structure for table `douong`
--

CREATE TABLE `douong` (
  `MaDU` int(11) NOT NULL,
  `TenDU` varchar(70) COLLATE utf8_unicode_ci NOT NULL,
  `GioiThieu` text COLLATE utf8_unicode_ci,
  `Dongia` int(11) DEFAULT NULL,
  `Anh` varchar(500) COLLATE utf8_unicode_ci DEFAULT NULL,
  `MaDM` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `douong`
--

INSERT INTO `douong` (`MaDU`, `TenDU`, `GioiThieu`, `Dongia`, `Anh`, `MaDM`) VALUES
(2, 'Thạch Kem Chanh Dây', 'Những ly thạch trái cây nhiều màu luôn hấp dẫn thực khách mọi lứa tuổi, hãy tự tay làm những ly thạch kem thơm ngon đẹp mắt để xua tan cái oi bức lúc thời tiết chuyển mùa nhé.        ', 15000, '/image/IMG_Douong/Douong2.jpg', 1),
(3, 'Thạch Trái Cam Mát Lạnh ', '    gt nè', 15000, 'image/IMG_Douong/Thach_TraiCamMatLanh.jpg', 2),
(4, 'Thạch Sữa Ướp Lạnh ', 'Thạch sữa ướp lạnh là món tráng miệng tuyệt vời cho cả nhà. Vị mát, ngọt và mùi thơm hấp dẫn của hoa trái mùa hè hòa quện trong món thạch sữa này.  ', 15000, 'image/IMG_Douong/Thach_SuaUopLanh.jpg', 2),
(5, 'Thạch Sữa Đậu Nành ', 'Chỉ cần bằng cách làm đơn giản, món sữa đậu đã trở thành những cốc thạch hoa quả thơm mát và bổ dưỡng rồi.  ', 15000, 'image/IMG_Douong/Thach_SuaDauNanh.jpg', 2),
(7, 'Cocktail Cam 3 Tầng', 'Lạ và hấp dẫn, món uống này sẽ mang lại cho bạn một buổi tối thật thú vị!  ', 35000, 'image/IMG_Douong/CockTail_Cam3Tang.jpg', 3),
(9, 'Cocktail Chanh Mojito', 'Cocktail chanh Mojito là loại đồ uống không thể bỏ qua khi nhắc đến đất nước Cu Ba xinh đẹp. Sinh thời, đại văn hào Ernest Hemingway đã rất “mê mẩn” thức uống tuyệt vời này. Có rất nhiều cách để pha chế Mojito như dùng vang trắng, Vodka lúa mới, Rum chauvet… nhưng có lẽ đúng nhất thì vẫn phải là light Rum.  ', 35000, 'image/IMG_Douong/CockTail_ChanhMojito.jpg', 3),
(11, 'Cocktail Tình Yêu ', 'Hương thơm tươi mát ngọt ngào làm tinh thần sảng khoái, lượng vitamin dồi dào và màu đỏ quyến rũ là những lý do làm cho trái dâu trở thành sự lựa chọn đầu tiên trong các loại trái cây làm món thức uống cho bữa tiệc tình yêu.  ', 35000, 'image/IMG_Douong/CockTail_TinhYeu.jpg', 3),
(22, 'Trà Long Nhãn ', 'Nếu bạn hoặc người thân đang mất ngủ hoặc bị stress thì bát chè long nhãn thơm ngon sẽ là bài thuốc trị bệnh tuyệt vời. Chắc hẳn bạn sẽ nhận được vô số lời khen sau khi chế biến thành công món chè ngon miệng này.', 100000, 'image/IMG_Douong/Che_LuongNhan.jpg', 3),
(24, 'Chè Đậu Ngự ', 'Món chè đậu ngự vừa có thể giải khát, vừa có tác dụng bồi bổ cơ thể, là một món ăn rất tốt trong mùa hè.   ', 69000, '/image/IMG_Douong/24.jpg', 1),
(29, 'Kem Dâu Tình Yêu', 'Bạn băn khoăn không biết làm gì cho một nửa của mình trong mùa hè oi bức này. Tại sao không thử tự tay chế biến món kem dâu tình yêu này, chắc chắn người ấy sẽ bất ngờ với ly kem dâu mát lạnh, ngọt ngào như chính tình yêu của bạn. ', 60000, 'image/IMG_Douong/Kem_DauTinhYeu.jpg', 3),
(52, ' Nước Nha Đam Mát Lạnh ', 'Cây nha đam hay người ta vẫn gọi là cây lô hội, hoặc như trong các siêu thị lớn thì lại gọi là long tu, được biết đến như một nguyên liệu đặc biệt để sản xuất mỹ phẩm. Nhưng thật ra loại cây này còn có nhiều công dụng hơn thế.  ', 1234, 'image/IMG_Douong/Douong52.jpg', 3),
(62, 'Trà Sữa 1', 'giai nhiet', 69000, '/image/IMG_Douong/62.jpg', 1);

-- --------------------------------------------------------

--
-- Table structure for table `khachhang`
--

CREATE TABLE `khachhang` (
  `MaKH` int(11) NOT NULL,
  `TenKH` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `TenDangNhap` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `Matkhau` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `Email` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `DiaChi` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `DienThoai` varchar(11) COLLATE utf8_unicode_ci DEFAULT NULL,
  `Gioitinh` bit(1) DEFAULT b'1',
  `Ngaysinh` date DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `khachhang`
--

INSERT INTO `khachhang` (`MaKH`, `TenKH`, `TenDangNhap`, `Matkhau`, `Email`, `DiaChi`, `DienThoai`, `Gioitinh`, `Ngaysinh`) VALUES
(1, 'Tung', 'tung', '123456789', 'tungvc@gmail.com', 'ha noi ', '01293837465', b'1', '1988-11-02'),
(3, 'vũ chí tùng', 'tùng chí vũ', 'flasdfjlaskjdflaskdjfl', 'tung@gmail.com', 'hà nội', '12284732947', b'1', '2010-02-02');

-- --------------------------------------------------------

--
-- Table structure for table `monan`
--

CREATE TABLE `monan` (
  `MaMA` int(11) NOT NULL,
  `TenMA` varchar(70) COLLATE utf8_unicode_ci NOT NULL,
  `GioiThieu` text COLLATE utf8_unicode_ci,
  `Dongia` int(11) DEFAULT NULL,
  `Anh` varchar(300) COLLATE utf8_unicode_ci DEFAULT NULL,
  `MaDM` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `monan`
--

INSERT INTO `monan` (`MaMA`, `TenMA`, `GioiThieu`, `Dongia`, `Anh`, `MaDM`) VALUES
(3, 'Bánh Pho Mát Thơm Ngậy', 'Bánh pho mát mềm mượt như kem, dậy mùi thơm, vị beo béo rất hấp dẫn. Cuối tuần ở nhà bạn tranh thủ làm món này cho bọn trẻ nhé.', 70000, 'IMG_Monan/3.jpg', 2),
(4, 'Bánh Sữa Chua Dâu Tây', 'Bánh dâu hình hoa sen xinh xắn cách làm rất dễ, vị trái cây dịu ngọt quyện với lớp sữa chua mát lạnh và vỏ bánh xốp giòn thơm ngon.', 90000, 'IMG_Monan/4.jpg', 2),
(5, 'Pancake Tình Yêu', 'Bữa sáng đơn giản nhưng cho bạn cảm giác thật dễ chịu và hạnh phúc. Hãy thử món bánh pancake vị dưa hấu thơm mát này nhé.', 70000, 'IMG_Monan/5.jpg', 2),
(7, 'Bún Bò Nam Bộ', 'Cùng tên gọi bún bò, song mỗi vùng miền lại có cách chế biến khác nhau. đối với người miền Nam, bún bò Nam Bộ - còn gọi là bún thịt bò xào - vừa giản dị lại tinh tế.', 50000, 'IMG_Monan/7.jpg', 1),
(8, 'Súp Móng Giò', 'Móng giò mùi vị thơm ngon, đem ninh với đậu nành thì giá trị dinh dưỡng càng cao. Đặc biệt món này ăn vào những ngày trời lạnh rất bổ dưỡng, tốt cho sức khỏe.', 60000, 'IMG_Monan/8.jpg', 1),
(9, 'Canh xoài thịt bò', 'gt nè', 80000, 'IMG_Monan/9.jpg', 1),
(11, 'Canh Mướp Đắng Nhồi Thịt Gà', 'Bát canh mướp đắng xanh mướt, thật ngon mắt; viị ngọt, bùi, thanh mát và hơi đăng đắng hòa quyện với nhau.', 19000, 'IMG_Monan/11.jpg', 3),
(12, 'Trứng Hấp Đậu Hũ', 'Món ăn này thích hợp cho mọi lứa tuổi trong gia đình, trứng hấp đậu hũ mềm, hương vị lạ, giàu protein và rất tốt cho hệ tiêu hóa.', 35000, 'IMG_Monan/12.jpg', 3),
(13, 'Bí Ngòi Xào Ngô', 'Quả bí ngòi xào với ngô ngọt tuy là món xào nhưng ăn lại rất thanh mát, thêm mùi thơm hấp dẫn của rau mùi ăn mùa hè rất hợp và không hề ngán.', 45000, 'IMG_Monan/13.jpg', 3),
(15, 'Ếch Xào Lăn', 'Sau khi chế biến, thịt ếch mềm, bạc hà giòn, ngọt là bạn đã thành công. Đây là một món ăn rất thích hợp trong những bữa ăn cải thiện hay sum họp gia đình, nó cũng thích hợp cho những bữa nhậu.', 145000, 'IMG_Monan/15.gif', 1),
(16, 'Bánh Cam', 'Giới thiệu bánh cam', 10000, 'IMG_Monan/16.gif', 2),
(17, 'Vịt om sấu', 'gt nè', 100000, 'IMG_Monan/17.jpg', 1),
(19, 'Bánh Chuối Hấp ', 'Giới thiệu bánh chuối hấp', 25000, 'IMG_Monan/19.jpg', 2),
(21, 'Tôm xào hạnh nhân ', 'gt nè', 60000, 'IMG_Monan/21.jpg', 1),
(25, 'Chả cá chiên xù ', 'gt chả cá chiên xù', 45000, 'IMG_Monan/Monan25.jpg', 3),
(26, 'Chả cá bọc trứng cút kho ', 'gt nè', 35000, 'IMG_Monan/Monan26.jpg', 3),
(28, 'Bánh sữa ', 'Những chiếc bánh này dùng để đãi tiệc ngọt hoặc làm món tráng miệng. Bánh có vị ngọt thanh, hình thức rất bắt mắt.', 20000, 'IMG_Monan/Monan28.jpg', 2);

-- --------------------------------------------------------

--
-- Table structure for table `nhahang`
--

CREATE TABLE `nhahang` (
  `MaCS` int(11) NOT NULL,
  `TenCS` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `Diachi` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `GioiThieu` text COLLATE utf8_unicode_ci
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `nhahang`
--

INSERT INTO `nhahang` (`MaCS`, `TenCS`, `Diachi`, `GioiThieu`) VALUES
(1, 'Hà Nội 1', 'HN', '1234567'),
(2, 'Hà Nội 2', 'HN', '1234567');

-- --------------------------------------------------------

--
-- Table structure for table `tintuc_sukien`
--

CREATE TABLE `tintuc_sukien` (
  `MaTT` int(11) NOT NULL,
  `Anh` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `Tieude` varchar(500) COLLATE utf8_unicode_ci NOT NULL,
  `Noidung` text COLLATE utf8_unicode_ci NOT NULL,
  `NgayViet` datetime NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `tintuc_sukien`
--

INSERT INTO `tintuc_sukien` (`MaTT`, `Anh`, `Tieude`, `Noidung`, `NgayViet`) VALUES
(6, 'image/IMG_Tintuc/TintucHN.jpg', 'HN', 'ád', '0000-00-00 00:00:00'),
(7, 'image/IMG_Tintuc/Tintuc100626102547.jpg', 'Những tác dụng vô cùng tuyệt vời từ trái cây ', 'Trái cây, “mỏ vàng” của các loại vitamin, khoáng chất và chất xơ và là nguồn thức ăn tốt được khuyên ăn ít nhất 4-5 phần mỗi ngày. Chứa nhiều nước nhất và hoàn toàn không có cholesterol xấu, trái cây tươi là nguồn thức ăn dễ hấp thu vitamin và khoáng chất nhất cho cơ thể. ', '2010-06-26 10:25:47');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `username` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `insert` bit(1) NOT NULL DEFAULT b'0',
  `update` bit(1) NOT NULL DEFAULT b'0',
  `delete` bit(1) NOT NULL DEFAULT b'0'
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`username`, `password`, `insert`, `update`, `delete`) VALUES
('admin', 'admin', b'0', b'0', b'0');

-- --------------------------------------------------------

--
-- Table structure for table `yk_douong`
--

CREATE TABLE `yk_douong` (
  `MaYK` int(11) NOT NULL,
  `MaDU` int(11) NOT NULL,
  `MaKH` int(11) NOT NULL,
  `Tieude` varchar(200) COLLATE utf8_unicode_ci DEFAULT NULL,
  `Noidung` text COLLATE utf8_unicode_ci,
  `Ngayviet` datetime NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `yk_monan`
--

CREATE TABLE `yk_monan` (
  `MaYK` int(11) NOT NULL,
  `MaMA` int(11) NOT NULL,
  `MaKH` int(11) NOT NULL,
  `Tieude` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `Noidung` text COLLATE utf8_unicode_ci,
  `Ngayviet` datetime NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `yk_monan`
--

INSERT INTO `yk_monan` (`MaYK`, `MaMA`, `MaKH`, `Tieude`, `Noidung`, `Ngayviet`) VALUES
(1, 1, 1, 'mat lanh', 'kdsjalfsjdflkjsdlf kdmksdljfsldkfjalsdjflsdkjflsdkfjlskdjflaskdjflaskdjflksdjflaskdjflkasjdlfkjsdlfkjasdlfkjlasdkjfl', '0000-00-00 00:00:00'),
(2, 1, 1, 'KSDFJAKSLDJF', 'SDKJFALSDKJFLKASJDFLKJ', '2010-02-02 00:00:00'),
(6, 1, 1, 'thanh ', 'thanh', '2010-06-25 15:15:38'),
(15, 1, 1, 'hà nội ', 'bẩn tởi ', '2010-02-02 00:00:00'),
(7, 1, 1, 'vu', 'th', '2010-06-25 15:17:03'),
(9, 1, 1, 'vũ chí tùng', 'vũ chí tùng', '2010-02-02 00:00:00'),
(16, 1, 1, 'an thoi', 'ngon ngon', '2010-02-02 00:00:00'),
(17, 1, 9, 'món j thế này ', 'có ăn được không thế', '2010-02-02 00:00:00'),
(18, 1, 9, 'quyết điên ', 'Viết cái j thế này ', '2010-06-26 23:00:11');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `dm_douong`
--
ALTER TABLE `dm_douong`
  ADD PRIMARY KEY (`MaDM`);

--
-- Indexes for table `dm_monan`
--
ALTER TABLE `dm_monan`
  ADD PRIMARY KEY (`MaDM`);

--
-- Indexes for table `douong`
--
ALTER TABLE `douong`
  ADD PRIMARY KEY (`MaDU`);

--
-- Indexes for table `khachhang`
--
ALTER TABLE `khachhang`
  ADD PRIMARY KEY (`MaKH`);

--
-- Indexes for table `monan`
--
ALTER TABLE `monan`
  ADD PRIMARY KEY (`MaMA`);

--
-- Indexes for table `nhahang`
--
ALTER TABLE `nhahang`
  ADD PRIMARY KEY (`MaCS`);

--
-- Indexes for table `tintuc_sukien`
--
ALTER TABLE `tintuc_sukien`
  ADD PRIMARY KEY (`MaTT`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`username`);

--
-- Indexes for table `yk_douong`
--
ALTER TABLE `yk_douong`
  ADD PRIMARY KEY (`MaYK`);

--
-- Indexes for table `yk_monan`
--
ALTER TABLE `yk_monan`
  ADD PRIMARY KEY (`MaYK`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `dm_douong`
--
ALTER TABLE `dm_douong`
  MODIFY `MaDM` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `dm_monan`
--
ALTER TABLE `dm_monan`
  MODIFY `MaDM` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `douong`
--
ALTER TABLE `douong`
  MODIFY `MaDU` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=63;

--
-- AUTO_INCREMENT for table `khachhang`
--
ALTER TABLE `khachhang`
  MODIFY `MaKH` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `monan`
--
ALTER TABLE `monan`
  MODIFY `MaMA` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT for table `tintuc_sukien`
--
ALTER TABLE `tintuc_sukien`
  MODIFY `MaTT` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `yk_douong`
--
ALTER TABLE `yk_douong`
  MODIFY `MaYK` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `yk_monan`
--
ALTER TABLE `yk_monan`
  MODIFY `MaYK` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
