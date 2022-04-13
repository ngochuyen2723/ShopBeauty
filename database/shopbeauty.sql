-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th2 20, 2020 lúc 04:34 AM
-- Phiên bản máy phục vụ: 10.4.8-MariaDB
-- Phiên bản PHP: 7.3.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `shopbeauty`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `admin`
--

CREATE TABLE `admin` (
  `idadmin` int(10) NOT NULL,
  `username` varchar(50) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(50) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `name` varchar(50) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `role` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `admin`
--

INSERT INTO `admin` (`idadmin`, `username`, `password`, `name`, `role`) VALUES
(1, 'admin', 'admin', 'admin', 1),
(2, 'ngochuyen', '123', 'Ngoc Huyen', 2),
(3, 'thuyduong', '123', 'Thuy Duong', 3),
(4, 'thuctrinh', '123', 'Thuc Trinh', 3),
(5, 'thuyhang', '123', 'Tô Thúy Hằng', 2);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `bangtin`
--

CREATE TABLE `bangtin` (
  `idtin` int(10) NOT NULL,
  `idnhom` int(10) NOT NULL,
  `tieude` longtext NOT NULL,
  `trichdan` longtext NOT NULL,
  `anhtrichdan` longtext NOT NULL,
  `noidung` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `bangtin`
--

INSERT INTO `bangtin` (`idtin`, `idnhom`, `tieude`, `trichdan`, `anhtrichdan`, `noidung`) VALUES
(1, 1, '4 BƯỚC SKINCARE GIÚP DA LUÔN CĂNG MỊN NHƯ GÁI HÀN', 'Chỉ với 4 bước, làm thế nào để căng mịn?\r\n', 'images/news/4buocSkincareHQ.png', ' LÀM SẠCH DA HÀNG NGÀY: \r\nĐể da sạch gái Hàn thường tuân thủ 2 bước:\r\nDa muốn khỏe đẹp thì trước hết phải sạch sẽ, thông thoáng. Và phụ nữ Hàn thì luôn làm tốt việc giải phóng làn da khỏi các tạp chất gây hại bằng 2 thao tác: và dùng sữa rửa mặt.\r\nViệc tẩy trang sẽ đảm bảo lớp trang điểm, kem chống nắng, dầu thừa tích tụ sau một ngày dài được loại bỏ khi đi ra ngoài, còn sữa rửa mặt sẽ cuốn trôi bụi bẩn, độc tố, vi khuẩn để đưa làn da về trạng thái thoáng sạch, tạo một khởi đầu gần như hoàn hảo cho quy trình chăm sóc da. ||\r\n\r\nSỬ DỤNG TONER THƯỜNG XUYÊN SAU KHI RỬA MẶT XONG\r\nToner có công dụng cân bằng độ pH, cấp ẩm tức thì và giúp da thẩm thấu tốt hơn dưỡng chất từ các sản phẩm skincare kế tiếp. Thậm chí, trong trường hợp bạn sở hữu làn da dầu, dễ lên mụn, toner còn là công cụ đắc lực để giúp kiềm dầu, kháng viêm hiệu quả, tình trạng da bóng nhẫy, lấm tấm mụn cũng được cải thiện đáng kể dành cho chị em. ||\r\n\r\nDƯỠNG ẨM CHO DA HÀNG NGÀY\r\nVà để thao tác dưỡng chuyên sâu này cải thiện làn da tối ưu, phụ nữ Hàn sẽ chọn sản phẩm phù hợp với loại da và nhắm trúng vấn đề đang phải đối mặt.\r\nBên cạnh đó, họ cũng dựa theo mùa để chọn kem dưỡng ẩm, mùa hè nên chọn những sản phẩm có kết cấu mỏng nhẹ sẽ được ưu ái hơn để không gây bít tắc , sinh mụn hãy khiến da bóng nhẫy và kém xinh. ||\r\n\r\nLUÔN SỬ DỤNG KEM CHỐNG NẮNG KHI ĐI RA NGOÀI\r\nKem chống nứng giúp chống tia nắng mặt trời tiếp xúc trực tiếp lên da và giúp chống lão hóa da hiệu quả. Khi đi ra ngoài bạn nên bôi kem chống nắng trước 15- 20 phút để có hiệu quả. Và nếu bạn cũng mong có được làn da vừa đẹp, vừa trẻ mãi không già như gái Hàn, kem chống nắng chính là sản phẩm mà bạn cần dùng quanh năm suốt tháng.\r\n'),
(2, 1, 'HOÀI CỔ VỚI NƯỚC HOA KHÔ', 'Còn gì thích thú hơn khi muốn thơm mát mà không lo sợ làm đổ lọ nước hoa xinh yêu!!', 'images/news/hoaicovoinuochoakho.png', 'Nước hoa khô là mỹ phẩm dạng sáp mang mùi thơm của tinh dầu, thường đựng trong những chiếc hộp nhỏ nhắn xinh xăn. Điểm đặc biệt của nước hoa khô là không quá cầu kì mà hầu hết đều rất đơn giản. Mang kiểu dáng tinh tế, tính chất bình dị, nước hoa khô đích thị là một “cô bạn nhỏ” để nàng có thể dễ dàng mang theo bên mình. ||\r\nNếu những dòng nước hoa công nghiệp khiến bạn bị mê hoặc bởi thiết kế sang trọng, đẳng cấp thì những loại nước hoa khô lại mang nét bình dị đến kinh ngạc. Tuy nhiên, đây mới chính là điểm thu hút phái đẹp, bởi đều được đựng trong những chiếc hộp xinh xắn để dễ dàng bỏ vào trong túi áo. Thế nên, có “một cô bạn thân” như này bên cạnh bạn có thể thỉnh thoảng lại lén lút lôi ra như một bảo bối con con, xoa xoa ngửi ngửi, thấy da mềm hơn, thơm hơn, thích lắm luôn nhé.'),
(3, 1, 'CHỌN MỸ PHẨM NÀO CHO MÙA GIÁNG SINH HẾT SẨY ?', 'Chọn mỹ phẩm nào cho mùa giáng sinh hết sẩy ?', 'images/news/xmas.png', '\r\n Lại một mùa Giáng sinh sắp đến mà bạn vẫn chưa thể tìm ra được món quà nào ý nghĩa, mới lạ hơn cho mẹ, cô bạn thân, bạn gái, hay đơn giản là cho chính bản thân mình. Mà đã là con gái thì mỹ phẩm và làm đẹp luôn không thể thiếu, vậy sao không thử tìm đến những hộp mỹ phẩm có ý nghĩa như một món quà Giáng sinh này để mọi việc trở nên đơn giản hơn? r\r\n<center><img src=\'images/news/GiangSinh/1.png\' width=\'600\'></center>\r\n Innisfree khởi động mùa Giáng sinh với hộp mỹ phẩm siêu lung linh bao gồm những sản phẩm best-seller quen thuộc của hãng nhưng các em ấy đã được thay mới chiếc áo bên ngoài bằng những thiết kế siêu yêu cùng 3 gam màu chủ đạo đỏ ấm, xanh lá cây và tím, đậm chất mùa Noel.\r\n<center><img src=\'imagess/news/mixDoGiangSinh/2.png\' width=\'600\'></center>\r\n Bao bì được thiết kế đơn giản, bắt mắt những lại rất dễ thương, cực kỳ phù hợp để dành làm quà tặng Giáng sinh cho người mà bạn yêu thương nhất. Sản phẩm được yêu thích nhất có lẽ là 3 hộp cushion in hình Ông già Noel, chú tuần lộc và cây thông cực kì đáng yêu.\r\n<center><img src=\'images/news/GiangSinh/3.png\' width=\'600\'></center>\r\n Bên cạnh những set skincare gồm kem dưỡng da tay, sữa tắm, sữa dưỡng thể và một loạt sản phẩm dưỡng dành cho mặt thì Innisfree Mery Green Christmas còn có 2 sản phẩm trang điểm mắt với tông màu trầm ấm, phù hợp mùa lễ hội cùng những sản phẩm nến thơm gợi không khí Noel ấm cúng.\r\n<center><img src=\'images/news/GiangSinh/4.png\' width=\'600\'></center>\r\n Bộ sưu tập hộp mỹ phẩm mùa Giáng sinh năm nay của Innisfree được bán với giá khá hạt dẻ, cushion chỉ có mức giá 200 ngàn đồng, trong khi đó những bộ dưỡng da, dưỡng thể có giá từ 300 đến 400 ngàn đồng mà thôi, riêng 2 bảng phấn mắt thì có mức giá cao hơn một xíu, tầm 450 ngàn đồng. Chần chừ gì mà không săn ngay những sản phẩm siêu đáng yêu này làm quà tặng cho Noel sắp tới chứ.\r\n<center><img src=\'images/news/GiangSinh/5.png\' width=\'600\'></center>\r\n Nhớ lại năm ngoái khi Peri Pera ra mắt dòng son Peri’s Ink dành cho mùa Noel với thiết kế đáng yêu đã đốn tim nhiều bạn nữ. Là một dòng son tint nổi tiếng của hãng, giá thành bình dân nay lại được hãng đổi mới với chiếc nắp có gắn kèm hình ảnh những con vật trang trí đáng yêu làm biểu tượng cho mùa đông, cho Noel như chim cánh cụt, gấu trắng, hươu và được đội thêm chiếc mũ Noel cực xinh.\r\n<center><img src=\'images/news/GiangSinh/6.png\' width=\'600\'></center>\r\n Năm nay, Peri Pera trở lại với dòng sản phẩm dành cho mùa lễ hội cuối năm là Pearly Night. Mặc dù đã ra mắt nhưng cho đến hiện tại, bộ sưu tập mỹ phẩm của hãng Hàn Quốc này vẫn khiến nhiều chị em săn lùng. Khác với dòng son tint năm ngoái, năm nay Peri Pera đổi mới thành son kem lì Ink Velvet, vẫn là thân son như cũ nhưng nắp son được trang trí là hình ảnh những con vật nằm trong quả cầu tuyết.\r\n<center><img src=\'images/news/GiangSinh/7.png\' width=\'600\'></center>\r\n Bên cạnh son kem lì, son bóng nhũ thì Pearly Night có thêm cushion, phấn mắt dạng nhũ, hightlight và kem dưỡng da tay nữa. Tất cả bao bì đều được đổi mới với hình ảnh cầu tuyết lấp lánh. Đặc biệt, sản phẩm son bóng nhũ sẽ có thêm hình ngôi sao, kim tuyến khi thoa lên môi tạo hiệu ứng rất thu hút, dễ thương.\r\n<center><img src=\'images/news/GiangSinh/8.png\' width=\'600\'></center>\r\n<center><img src=\'images/news/GiangSinh/9.png\' width=\'600\'></center>\r\n Bộ mỹ phẩm “24 ngày hạnh phúc” của thực sự là món quà không thể chê vào đâu cho dịp lễ Giáng sinh. Chiếc hộp Noel bao gồm 24 món mỹ phẩm được đánh số như là cách đếm ngược 24 ngày đến lễ Noel. Hầu hết các sản phẩm đều ở size mini và là những sản phẩm dưỡng nhiều hơn là trang điểm.\r\n<center><img src=\'images/news/GiangSinh/10.png\' width=\'600\'></center>\r\n Bộ sưu tập này có 2 màu mang gam đỏ ấm và xanh lá đặc trưng của mùa Noel. Bên trong rất nhiều sản phẩm từ dầu dưỡng, mặt nạ, kem dưỡng ẩm, sữa tắm, dưỡng da tay,…nhưng lại khá ít sản phẩm về trang điểm. Cũng đúng thôi vì The Body Shop trước nay vẫn nổi tiếng là hãng mỹ phẩm thiên về trị liệu, chăm sóc da hơn là làm đẹp. Những sản phẩm chứa đựng bên trong hộp Noel đều là những sản phẩm best-seller của hãng.\r\n<center><img src=\'images/news/GiangSinh/11.npg\' width=\'600\'></center>\r\n Có lẽ các bạn nữ mê làm đẹp sẽ biết đến Hera với dòng phấn nước ăn khách và luôn nằm top cushion tốt nhất cho da. Ở mùa lễ hội, Hera ra mắt dòng sản phẩm với tên gọi Light Plash với thiết kế tựa như sự bùng nổ của ánh sáng. Các sản phẩm đều có tông đen huyền bí và thân vỏ được trang trí khá lung linh.\r\n<center><img src=\'images/news/GiangSinh/12.png\' width=\'600\'></center>\r\n Lúc mà một hãng mỹ phẩm lại ra bộ sưu tập mới chính là lúc càng nàng biết đã đến mùa lễ hội, đã đến dịp các nàng bắt đầu chiều chuộng bản thân. Không chỉ vậy, lợi dụng mùa Noel cuối năm, dùng chính những bộ sưu tập độc đáo chỉ dành riêng cho mùa lễ hội này để làm thành món quà ý nghĩa dành tặng mẹ, chị, cô bạn thân hay là một ai đó thân thương của bạn thì sẽ là điều tuyệt vời nhất!</i><br>');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `chitietphieuchi`
--

CREATE TABLE `chitietphieuchi` (
  `maPhieuChi` int(10) NOT NULL,
  `maSanPham` int(10) NOT NULL,
  `soLuong` int(10) NOT NULL,
  `thanhTien` int(11) NOT NULL,
  `ghiChu` varchar(100) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Đang đổ dữ liệu cho bảng `chitietphieuchi`
--

INSERT INTO `chitietphieuchi` (`maPhieuChi`, `maSanPham`, `soLuong`, `thanhTien`, `ghiChu`) VALUES
(1, 13, 1, 280000, '');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `comment`
--

CREATE TABLE `comment` (
  `idcmt` int(11) NOT NULL,
  `iduser` int(11) NOT NULL,
  `idproduct` int(11) NOT NULL,
  `content` varchar(100) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `timecmt` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `comment`
--

INSERT INTO `comment` (`idcmt`, `iduser`, `idproduct`, `content`, `timecmt`) VALUES
(1, 1, 1, 'Son lên màu rất đẹp, lâu trôi', '2020-01-15 10:16:15'),
(2, 2, 1, 'Excellent', '2020-01-22 04:14:22');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `cthd`
--

CREATE TABLE `cthd` (
  `sohd` int(11) NOT NULL,
  `idsanpham` int(11) NOT NULL,
  `soluong` int(11) NOT NULL,
  `sum_price` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Đang đổ dữ liệu cho bảng `cthd`
--

INSERT INTO `cthd` (`sohd`, `idsanpham`, `soluong`, `sum_price`) VALUES
(2, 5, 2, 398000),
(2, 6, 1, 350000),
(2, 12, 2, 5600000),
(3, 3, 2, 398000),
(3, 5, 1, 199000),
(3, 10, 1, 350000),
(4, 7, 1, 129000),
(4, 9, 1, 150000),
(4, 10, 1, 350000),
(4, 12, 2, 5600000),
(4, 14, 1, 600000),
(5, 6, 2, 700000),
(5, 11, 3, 750000),
(6, 6, 1, 350000),
(6, 7, 1, 129000),
(6, 10, 4, 1400000),
(7, 9, 3, 315000),
(8, 4, 2, 598000),
(8, 16, 1, 30000);

--
-- Bẫy `cthd`
--
DELIMITER $$
CREATE TRIGGER `capnhatsl` AFTER INSERT ON `cthd` FOR EACH ROW UPDATE product
set amount= amount-new.soluong
where id = new.idsanpham
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `hoadon`
--

CREATE TABLE `hoadon` (
  `sohd` int(11) NOT NULL,
  `ngayhd` date NOT NULL,
  `khachhang` varchar(100) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `sodienthoai` varchar(100) NOT NULL,
  `diachi` varchar(100) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `tienship` varchar(100) NOT NULL,
  `VAT` varchar(100) NOT NULL DEFAULT '0.1',
  `giatri` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Đang đổ dữ liệu cho bảng `hoadon`
--

INSERT INTO `hoadon` (`sohd`, `ngayhd`, `khachhang`, `sodienthoai`, `diachi`, `tienship`, `VAT`, `giatri`) VALUES
(2, '2019-11-04', 'Nhật Minh', '0192839202', 'Tân Bình', '40000', '0.1', '6348000'),
(3, '2019-12-04', 'Tam Tuệ Tâm', '0192839421', 'Suối Tiên, Quận 9, TP.HCM', '40000', '0.1', '947000'),
(4, '2019-10-04', 'Tô Thúy Hằng', '02800119923', 'Trường đại học công nghệ thông tin', '40000', '0.1', '6829000'),
(5, '2019-11-04', 'Đắc Thành', '010313', '231, Nguyễn Du', '40000', '0.1', '1450000'),
(6, '2019-09-16', 'Nguyễn Như Quỳnh', '019283901', 'Trường HUTECH', '40000', '0.1', '1879000'),
(7, '2019-12-28', 'Ngoc Huyen', '0905728325', 'Trường ĐH CNTT, ĐH QG TP HCM', '40000', '0.1', '315000');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `image`
--

CREATE TABLE `image` (
  `id` int(10) NOT NULL,
  `image_link` varchar(5000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Đang đổ dữ liệu cho bảng `image`
--

INSERT INTO `image` (`id`, `image_link`) VALUES
(1, 'images/product/trang-diem/sonmerzy.jpg'),
(2, 'images/product/trang-diem/sonshu.jpg,images/product/trang-diem/sonshu 2.jpg,images/product/trang-diem/sonshu 3.jpg,images/product/trang-diem/sonshu 4.jpg'),
(3, 'images/product/trang-diem/sonMaybelline.jpg,images/product/trang-diem/sonmay 2.jpg,images/product/trang-diem/sonmay 3.jpg,images/product/trang-diem/sonmay 4.jpg'),
(4, 'images/product/trang-diem/sonmac1.jpg,images/product/trang-diem/sonmac2.jpg,images/product/trang-diem/sonmac3.jpg,\r\nimages/product/trang-diem/sonmac4.jpg'),
(5, 'images/product/trang-diem/phanmay1.jpg,images/product/trang-diem/phanmay2.jpg,images/product/trang-diem/phanmay3.jpg,images/product/trang-diem/phanmay4.jpg'),
(6, 'images/product/trang-diem/phanmahong1.jpg,\r\nimages/product/trang-diem/phanmahong2.jpg,images/product/trang-diem/phanmahong3.jpg,images/product/trang-diem/phanmahong4.jpg'),
(7, 'images/product/trang-diem/phanphu1.jpg,images/product/trang-diem/phanphu2.jpg,images/product/trang-diem/phanphu3.jpg,images/product/trang-diem/phanphu4.jpg\r\n'),
(8, 'images/product/trang-diem/phanchekhuyetdiem1.jpg,images/product/trang-diem/phanchekhuyetdiem2.jpg,images/product/trang-diem/phanchekhuyetdiem3.jpg,images/product/trang-diem/phanchekhuyetdiem4.jpg'),
(9, 'images/product/trang-diem/matbangmau1.jpg,\r\nimages/product/trang-diem/matbangmau2.jpg,images/product/trang-diem/matbangmau3.jpg,images/product/trang-diem/matbangmau4.jpg\r\n'),
(10, 'images/product/trang-diem/matkematnuoc1.jpg,images/product/trang-diem/matkematnuoc2.jpg,images/product/trang-diem/matkematnuoc3.jpg,images/product/trang-diem/matkematnuoc4.jpg'),
(11, 'images/product/trang-diem/matmascara1.jpg,images/product/trang-diem/matmascara2.jpg,images/product/trang-diem/matmascara3.jpg,images/product/trang-diem/matmascara4.jpg'),
(12, 'images/product/cham-soc-da/kcn ice1.jpg,\r\nimages/product/cham-soc-da/kcn ice2.jpg'),
(13, 'images/product/cham-soc-da/kcn vic1.jpg,\r\nimages/product/cham-soc-da/kcn vic2.jpg'),
(14, 'images/product/cham-soc-da/xitkhoang.jpg,images/product/cham-soc-da/xitkhoang2.jpg,images/product/cham-soc-da/xitkhoang3.jpg,images/product/cham-soc-da/xitkhoang4.jpg'),
(15, 'images/product/cham-soc-da/matna ins1.jpg,images/product/cham-soc-da/matna ins2.jpg,images/product/cham-soc-da/matna ins3.jpg'),
(16, 'images/product/cham-soc-da/matna tea1.jpg,images/product/cham-soc-da/matna tea2.jpg,images/product/cham-soc-da/matna tea3.jpg'),
(17, 'images/product/cham-soc-da/matna vang1.jpg'),
(18, 'images/product/nuoc-hoa/nuochoa nu1.jpg'),
(19, 'images/product/nuoc-hoa/nuochoa nu2.jpg'),
(20, 'images/product/nuoc-hoa/nuochoa nu3.jpg'),
(21, 'images/product/nuoc-hoa/nuochoa nu4.jpg'),
(22, 'images/product/nuoc-hoa/nuochoa nu5.jpg'),
(23, 'images/product/nuoc-hoa/nuochoa NAM1.jpg'),
(24, 'images/product/nuoc-hoa/nuochoa NAM2.jpg'),
(25, 'images/product/nuoc-hoa/nuochoa NAM3.jpg');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `nhacungcap`
--

CREATE TABLE `nhacungcap` (
  `id` int(11) NOT NULL,
  `name` varchar(100) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `dienthoai` varchar(100) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `diachi` varchar(100) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `sonodu` bigint(20) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Đang đổ dữ liệu cho bảng `nhacungcap`
--

INSERT INTO `nhacungcap` (`id`, `name`, `dienthoai`, `diachi`, `sonodu`) VALUES
(1, 'Công ty dịch vụ Mia', '0977998950', 'B133, Tăng Bạch Hổ, quận Tân Bình, TP.HCM', 54000000),
(2, 'Công ty Maybeline', '0782945316', '253 Võ Văn Ngân, Quận Thủ Đức, TP.HCM', 3000000),
(3, 'Công ti sự kiện YMedia', '0734512904', 'B133, Tăng Nhơn Phú B, Quận 9, TP.HCM', 100000000),
(4, 'Công ti phân phối miền Nam', '1234567890', 'KCX Linh Trung, quận Thủ Đức, TP.HCM', 12300000),
(5, 'Công ty sự kiện Amazing', '0188234675', '23 Đồng Nai', 34000000),
(6, 'Công ty Innisfree', '0367223388', '615, Nguyễn Du, quận Bình Thạnh, TP.HCM', 10000000);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `nhomtin`
--

CREATE TABLE `nhomtin` (
  `idnhom` int(10) NOT NULL,
  `tennhom` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `nhomtin`
--

INSERT INTO `nhomtin` (`idnhom`, `tennhom`) VALUES
(1, 'Làm đẹp'),
(2, 'Sống khỏe'),
(3, 'Girl'),
(4, 'Tuổi teen');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `phieuchi`
--

CREATE TABLE `phieuchi` (
  `mapc` int(11) NOT NULL,
  `ngay` datetime NOT NULL,
  `mancc` varchar(100) DEFAULT NULL,
  `giatri` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Đang đổ dữ liệu cho bảng `phieuchi`
--

INSERT INTO `phieuchi` (`mapc`, `ngay`, `mancc`, `giatri`) VALUES
(1, '2019-06-30 01:00:00', '3', 54000000),
(2, '2019-06-30 01:59:00', '6', 14000000),
(3, '2019-06-28 02:23:20', '1', 20000000),
(4, '2019-06-22 08:23:27', '5', 2100000),
(5, '2019-06-22 10:25:00', '2', 10000000);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `product`
--

CREATE TABLE `product` (
  `id` int(10) NOT NULL,
  `name` varchar(100) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `brand` varchar(50) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `color` varchar(50) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `price` double NOT NULL,
  `amount` int(11) NOT NULL,
  `sale` int(11) NOT NULL,
  `descrition` varchar(5000) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `category_id` int(10) NOT NULL,
  `image_id` int(10) NOT NULL,
  `image_link` varchar(100) NOT NULL,
  `date_input` date NOT NULL DEFAULT '2018-06-30',
  `supplier` varchar(100) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Đang đổ dữ liệu cho bảng `product`
--

INSERT INTO `product` (`id`, `name`, `brand`, `color`, `price`, `amount`, `sale`, `descrition`, `category_id`, `image_id`, `image_link`, `date_input`, `supplier`) VALUES
(1, 'Son Merzy Another Me THE FIRST Lipstick  ', 'Merzy', 'L4', 160000, 2, 70, '', 4, 1, 'images/product/trang-diem/sonmerzy.jpg', '2019-06-30', ''),
(2, 'Son Thỏi Lì Có Dưỡng Shu Uemura', 'Shu Uemura', 'Đỏ nâu RD174', 559000, 0, 10, '', 4, 2, 'images/product/trang-diem/sonshu.jpg', '2019-06-30', ''),
(3, 'Son Kem Lì Maybelline', 'Maybelline', 'Đỏ cam 118', 199000, 0, 0, '', 4, 3, 'images/product/trang-diem/sonMaybelline.jpg', '2019-06-30', ''),
(4, 'Son Thỏi siêu lì Mac ', 'Mac', 'Ruby Woo', 415000, 23, 0, '', 4, 4, 'images/product/trang-diem/sonmac1.jpg', '2019-06-30', ''),
(5, 'Phấn Nền Trang Điểm Maybelline SPF32 01 Light ', 'Maybelline', 'SPF32 01 Light', 115000, 0, 0, '', 5, 5, 'images/product/trang-diem/phanmay1.jpg', '2019-06-30', ''),
(6, 'Phấn Má Hồng Maybelline ', 'Maybelline', 'Hồng đào 40 Peach', 95000, 33, 0, '', 5, 6, 'images/product/trang-diem/phanmahong1.jpg', '2019-06-30', ''),
(7, 'Phấn Phủ Kiềm Dầu Za Light', 'Bye2Shine Powder', 'Hồng phấn', 199000, 23, 0, '', 5, 7, 'images/product/trang-diem/phanphu1.jpg', '2019-06-30', ''),
(8, 'Bảng tạo khối, che khuyết điểm 6 ô', 'Nyx', 'Light', 309000, 34, 0, '', 5, 8, 'images/product/trang-diem/phanchekhuyetdiem1.jpg', '2019-06-30', ''),
(9, 'Bảng Màu Mắt Maybelline Tông Hồng Nude 12 Ô', 'Maybelline', 'Hồng nude', 229000, 56, 30, '', 6, 9, 'images/product/trang-diem/matbangmau1.jpg', '2019-06-30', ''),
(10, 'Bút Kẻ Mắt Nước SILKYGIRL Lâu Trôi ', 'Silkygirl', 'Đen', 119000, 34, 0, '', 6, 10, 'images/product/trang-diem/matkematnuoc1.jpg', '2019-06-30', ''),
(11, 'Mascara Maybelline Làm Cong Mi 100°', 'Maybelline', 'Đen', 250000, 0, 0, '', 6, 11, 'images/product/trang-diem/matmascara1.jpg', '2019-06-30', ''),
(12, 'Kem Chống Nắng Make-up Mát Lạnh Mersenne Beaute Ice Puff Sun SPF50+PA+++', 'Mersenne Beaute', 'Xanh', 198000, 54, 0, '', 9, 12, 'images/product/cham-soc-da/kcn ice1.jpg', '2019-06-30', ''),
(13, 'Kem Chống Nắng Không Gây Nhờn Rít Vichy Ideal Soleil Dry Touch', 'Vichy', 'Cam', 309000, 0, 0, '', 9, 13, 'images/product/cham-soc-da/kcn vic1.jpg', '2019-06-30', ''),
(14, 'Xịt Khoáng Vichy Thermal Spa Water', 'Vichy', '', 219000, 43, 0, '', 8, 14, 'images/product/cham-soc-da/xitkhoang.jpg', '2019-06-30', ''),
(15, 'Mặt Nạ Giấy Innisfree My Real Squeeze Mask', 'Innisfree', 'Trắng', 27000, 43, 0, '', 7, 15, 'images/product/cham-soc-da/matna ins1.jpg', '2019-06-30', ''),
(16, 'Mặt nạ dưỡng da giảm mụn chiết xuất tràm trà Mediheal Teatree Solution', 'Essential Mask Ex', 'Xanh', 30000, 42, 0, '', 7, 16, 'images/product/cham-soc-da/matna tea1.jpg', '2019-06-30', ''),
(17, 'Mặt Nạ Mediheal Cấp Ẩm Cho Da 25ml N.M.F Aquaring Ampoule Mask Ex', 'Aquaring', 'Vàng', 35000, 0, 0, '', 7, 17, 'images/product/cham-soc-da/matna vang1.jpg', '2019-06-30', ''),
(18, 'Nước hoa nữ Jolie Dion Coco Eau de parfum', 'Jolie Dion', 'Vàng', 329000, 53, 0, '', 10, 18, 'images/product/nuoc-hoa/nuochoa nu1.jpg', '2019-06-30', ''),
(19, 'Nước hoa Elizabeth Arden Fanyclights EDP TREX L', 'Elizabeth Arden', 'Xanh', 1790000, 535, 0, '', 10, 19, 'images/product/nuoc-hoa/nuochoa nu2.jpg', '2019-06-30', ''),
(20, 'Nước Hoa Nữ Charme Omnia Crystal Hương Hoa Cỏ Ngọt ', 'Charme', 'Tím', 259000, 54, 0, '', 10, 20, 'images/product/nuoc-hoa/nuochoa nu3.jpg', '2019-06-30', ''),
(21, 'Nước hoa tinh dầu dubai Swiss Arabian Layali', 'Swiss Arabian', 'Hồng', 499000, 54, 0, '', 10, 21, 'images/product/nuoc-hoa/nuochoa nu4.jpg', '2019-06-30', ''),
(22, 'Nước Hoa Nữ Charme Vanitas', 'Charme', 'Đỏ', 359000, 21, 0, '', 10, 22, 'images/product/nuoc-hoa/nuochoa nu5.jpg', '2019-06-30', ''),
(23, 'Nước Hoa Nam Jeanne Arthes Paris Colonial Club Signature EDT', 'Jeanne Arthes', 'Xám', 459000, 21, 0, '', 11, 23, 'images/product/nuoc-hoa/nuochoa NAM1.jpg', '2019-06-30', ''),
(24, 'Nước Hoa Nam Charme King', 'Charme', 'Đen', 487000, 0, 0, '', 11, 24, 'images/product/nuoc-hoa/nuochoa NAM2.jpg', '2019-06-30', ''),
(25, 'Nước Hoa Nam E5', 'E5', 'Nâu', 330000, 0, 20, '', 11, 25, 'images/product/nuoc-hoa/nuochoa NAM3.jpg', '2019-06-30', '');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `product_category`
--

CREATE TABLE `product_category` (
  `id` int(10) NOT NULL,
  `categoryname` varchar(50) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `parent_id` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Đang đổ dữ liệu cho bảng `product_category`
--

INSERT INTO `product_category` (`id`, `categoryname`, `parent_id`) VALUES
(1, 'Trang Điểm', 0),
(2, 'Chăm sóc da', 0),
(3, 'Nước hoa', 0),
(4, 'Son môi', 1),
(5, 'Trang điểm mặt', 1),
(6, 'Trang điểm mắt', 1),
(7, 'Mặt nạ', 2),
(8, 'Xịt khoáng', 2),
(9, 'Kem chống nắng', 2),
(10, 'Nước hoa nữ', 3),
(11, 'Nước hoa nam', 3);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `reply`
--

CREATE TABLE `reply` (
  `idrep` int(11) NOT NULL,
  `iduser` int(11) NOT NULL,
  `idcmt` int(11) NOT NULL,
  `content` varchar(100) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `timerep` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `reply`
--

INSERT INTO `reply` (`idrep`, `iduser`, `idcmt`, `content`, `timerep`) VALUES
(1, 2, 1, 'Wonderful', '2020-01-21 09:23:24'),
(2, 1, 2, 'Very good!!!', '2020-01-22 05:14:24');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `role`
--

CREATE TABLE `role` (
  `idrole` int(11) NOT NULL,
  `rolename` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `role`
--

INSERT INTO `role` (`idrole`, `rolename`) VALUES
(1, 'Admin'),
(2, 'Quản lý'),
(3, 'Nhân viên');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `user`
--

CREATE TABLE `user` (
  `iduser` int(11) NOT NULL,
  `tenuser` varchar(50) NOT NULL,
  `diachi` varchar(100) NOT NULL,
  `dienthoai` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `user`
--

INSERT INTO `user` (`iduser`, `tenuser`, `diachi`, `dienthoai`, `email`, `username`, `password`) VALUES
(1, 'Như Quỳnh', '23 Đường Trục, quận Bình Thạnh, TP HCM', '0905728325', 'nhuquynh1708@gmail.com', 'nhuquynh', '123'),
(2, 'Tam Tuệ Tâm', '61A Lê Lợi, tp Quy Nhơn, tỉnh Bình Định', '0774447715', 'tuetam2025@gmail.com', 'tuetam', '123');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`idadmin`),
  ADD KEY `FK_ROLE` (`role`);

--
-- Chỉ mục cho bảng `bangtin`
--
ALTER TABLE `bangtin`
  ADD PRIMARY KEY (`idtin`);

--
-- Chỉ mục cho bảng `comment`
--
ALTER TABLE `comment`
  ADD PRIMARY KEY (`idcmt`),
  ADD KEY `FK_SP` (`idproduct`),
  ADD KEY `FK_NGD` (`iduser`);

--
-- Chỉ mục cho bảng `cthd`
--
ALTER TABLE `cthd`
  ADD PRIMARY KEY (`sohd`,`idsanpham`);

--
-- Chỉ mục cho bảng `hoadon`
--
ALTER TABLE `hoadon`
  ADD PRIMARY KEY (`sohd`);

--
-- Chỉ mục cho bảng `image`
--
ALTER TABLE `image`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `nhacungcap`
--
ALTER TABLE `nhacungcap`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `nhomtin`
--
ALTER TABLE `nhomtin`
  ADD PRIMARY KEY (`idnhom`);

--
-- Chỉ mục cho bảng `phieuchi`
--
ALTER TABLE `phieuchi`
  ADD PRIMARY KEY (`mapc`);

--
-- Chỉ mục cho bảng `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `product_category`
--
ALTER TABLE `product_category`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `reply`
--
ALTER TABLE `reply`
  ADD PRIMARY KEY (`idrep`),
  ADD KEY `FK_CMT` (`idcmt`),
  ADD KEY `FK_ND` (`iduser`);

--
-- Chỉ mục cho bảng `role`
--
ALTER TABLE `role`
  ADD PRIMARY KEY (`idrole`);

--
-- Chỉ mục cho bảng `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`iduser`);

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `admin`
--
ALTER TABLE `admin`
  ADD CONSTRAINT `FK_ROLE` FOREIGN KEY (`role`) REFERENCES `role` (`idrole`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Các ràng buộc cho bảng `comment`
--
ALTER TABLE `comment`
  ADD CONSTRAINT `FK_NGD` FOREIGN KEY (`iduser`) REFERENCES `user` (`iduser`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `FK_SP` FOREIGN KEY (`idproduct`) REFERENCES `product` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Các ràng buộc cho bảng `reply`
--
ALTER TABLE `reply`
  ADD CONSTRAINT `FK_CMT` FOREIGN KEY (`idcmt`) REFERENCES `comment` (`idcmt`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `FK_ND` FOREIGN KEY (`iduser`) REFERENCES `user` (`iduser`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
