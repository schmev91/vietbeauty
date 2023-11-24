-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 24, 2023 at 07:54 AM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `project1`
--

-- --------------------------------------------------------

--
-- Table structure for table `anhsp`
--

CREATE TABLE `anhsp` (
  `ma_anh` int(11) NOT NULL,
  `duongdan` mediumtext NOT NULL,
  `ma_sp` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `ctdonhang`
--

CREATE TABLE `ctdonhang` (
  `ma_dh` int(11) NOT NULL,
  `ma_sp` int(11) NOT NULL,
  `soluong` int(11) NOT NULL,
  `dongia` float NOT NULL,
  `thanhtien` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `danhgia`
--

CREATE TABLE `danhgia` (
  `ma_nd` int(11) NOT NULL,
  `ma_sp` int(11) NOT NULL,
  `diem` float NOT NULL,
  `noidung` varchar(512) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `danhmuc`
--

CREATE TABLE `danhmuc` (
  `ma_dm` int(11) NOT NULL,
  `ten_dm` varchar(100) NOT NULL,
  `hinh_dm` mediumtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `danhmuc`
--

INSERT INTO `danhmuc` (`ma_dm`, `ten_dm`, `hinh_dm`) VALUES
(1, 'son môi', 'views/asset/img/category/dm_sonmoi.jpg'),
(2, 'nước hoa', 'views/asset/img/category/dm_nuochoa.jpg'),
(3, 'kem chống nắng', 'views/asset/img/category/dm_kemchongnang.jpg'),
(4, 'tẩy da mặt', 'views/asset/img/category/dm_taydamat.jpg'),
(5, 'dầu gội dầu xả', 'views/asset/img/category/dm_daugoi.jpg'),
(6, 'bảng phấn mắt', 'views/asset/img/category/dm_bangphanmat.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `donhang`
--

CREATE TABLE `donhang` (
  `ma_dh` int(11) NOT NULL,
  `ngaydat` datetime NOT NULL,
  `tongtien` float NOT NULL,
  `diachi` mediumtext NOT NULL,
  `vanchuyen` varchar(100) NOT NULL,
  `thanhtoan` varchar(100) NOT NULL,
  `ma_gh` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `giohang`
--

CREATE TABLE `giohang` (
  `ma_gh` int(11) NOT NULL,
  `lastactive` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `ma_nd` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `hoidap`
--

CREATE TABLE `hoidap` (
  `ma_hoidap` int(11) NOT NULL,
  `noidung` varchar(512) NOT NULL,
  `thoigian` datetime NOT NULL,
  `ma_sp` int(11) NOT NULL,
  `ma_nd` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `nguoidung`
--

CREATE TABLE `nguoidung` (
  `ma_nd` int(11) NOT NULL,
  `isAdmin` tinyint(1) NOT NULL,
  `isBanned` tinyint(1) NOT NULL,
  `ten_dangnhap` varchar(256) NOT NULL,
  `ten_nd` varchar(256) NOT NULL,
  `matkhau` varchar(30) NOT NULL,
  `email` varchar(200) NOT NULL,
  `sdt` varchar(11) NOT NULL,
  `diachi` mediumtext NOT NULL,
  `avatar` mediumtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `nguoidung`
--

INSERT INTO `nguoidung` (`ma_nd`, `isAdmin`, `isBanned`, `ten_dangnhap`, `ten_nd`, `matkhau`, `email`, `sdt`, `diachi`, `avatar`) VALUES
(1, 0, 0, 'nguyenvana', 'Nguyễn Văn A', 'password1', 'nguyenvana@example.com', '0123456789', 'Hà Nội', 'viewsassetimggeneraldefault_avatar.png'),
(2, 0, 0, 'tranthib', 'Trần Thị B', 'password2', 'tranthib@example.com', '0987654321', 'TP.Hồ Chí Minh', 'viewsassetimggeneraldefault_avatar.png'),
(3, 0, 0, 'lethuc', 'Lê Thục', 'password3', 'lethuc@example.com', '0123456780', 'Đà Nẵng', 'viewsassetimggeneraldefault_avatar.png'),
(4, 0, 0, 'phamd', 'Phạm D', 'password4', 'phamd@example.com', '0987654322', 'Huế', 'viewsassetimggeneraldefault_avatar.png'),
(5, 0, 0, 'nguyenxuand', 'Nguyễn Xuân D', 'password5', 'nguyenxuand@example.com', '0123456781', 'Hải Phòng', 'viewsassetimggeneraldefault_avatar.png');

-- --------------------------------------------------------

--
-- Table structure for table `sanpham`
--

CREATE TABLE `sanpham` (
  `ma_sp` int(11) NOT NULL,
  `ten_sp` varchar(256) NOT NULL,
  `dongia` float NOT NULL,
  `mota` mediumtext NOT NULL,
  `anh` mediumtext NOT NULL,
  `ma_dm` int(11) NOT NULL,
  `ma_th` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `sanpham`
--

INSERT INTO `sanpham` (`ma_sp`, `ten_sp`, `dongia`, `mota`, `anh`, `ma_dm`, `ma_th`) VALUES
(91, 'Luscious Red Velvet', 60000, 'Chất son mềm mại, tạo cảm giác thoải mái khi sử dụng. Màu đỏ quyến rũ, giữ màu lâu và không gây khô môi. Sản phẩm này là lựa chọn hoàn hảo cho những người yêu thích phong cách cá tính và quyến rũ. Môi bạn sẽ trở nên mềm mại và thu hút mọi ánh nhìn.', 'views/asset/img/product/sonmoi1.JPG', 1, 3),
(92, 'Sweet Rose Petal', 85000, 'Kết cấu mịn màng, giữ màu lâu và dễ tán đều. Màu hồng dịu dàng, chất son dưỡng ẩm, nuôi dưỡng làn môi khô ráp. Với mùi hương nhẹ nhàng của hoa hồng, sản phẩm này sẽ mang lại cho bạn cảm giác thư giãn và quý phái.', 'views/asset/img/product/sonmoi2.JPG', 1, 8),
(93, 'Cherry Blossom Bliss', 70000, 'Chất son mềm mại, không gây khô môi, giữ màu lâu. Màu hồng cerise tươi sáng, thích hợp cho mọi dịp. Sản phẩm mang lại vẻ tươi trẻ và sức sống mới cho đôi môi của bạn.', 'views/asset/img/product/sonmoi3.PNG', 1, 7),
(94, 'Luxurious Burgundy Velvet', 90000, 'Son môi sang trọng, chất lượng cao, thích hợp cho mọi dịp. Màu đỏ burgundy quyến rũ, kết cấu nhẹ nhàng và mịn màng. Với độ bóng và độ che phủ tốt, đây là sản phẩm không thể thiếu trong bộ sưu tập của bạn.', 'views/asset/img/product/sonmoi4.JPG', 1, 4),
(95, 'Natural Nude Glow', 75000, 'Sắc màu tự nhiên, giữ màu lâu và không gây khô môi. Chất son mịn màng, tạo lớp nền môi mịn màng và căng tràn sức sống. Với thiết kế sang trọng, đây là lựa chọn hoàn hảo cho những người yêu thích phong cách tinh tế.', 'views/asset/img/product/sonmoi5.JPG', 1, 2),
(96, 'Passionate Pink Delight', 50000, 'Son môi chất lượng cao, bảo vệ và dưỡng ẩm cho đôi môi. Màu hồng nồng nàn, giúp làm nổi bật đường cong quyến rũ. Sản phẩm này sẽ làm nổi bật vẻ quyến rũ và nữ tính của bạn.', 'views/asset/img/product/sonmoi6.webp', 1, 1),
(97, 'Sultry Plum Temptation', 65000, 'Chất son mềm mại, không gây khô môi, giữ màu lâu. Màu mận quyến rũ, phù hợp cho những buổi tiệc quan trọng. Với độ bóng và độ che phủ hoàn hảo, sản phẩm này sẽ làm bạn tỏa sáng giữa đám đông.', 'views/asset/img/product/sonmoi7.JPG', 1, 6),
(98, 'Golden Coral Charm', 80000, 'Chất son mềm mại, dễ tán đều, giữ màu lâu. Màu hồng đào nâu, kết cấu nhẹ nhàng, tạo cảm giác thoải mái khi sử dụng. Với chất son dưỡng ẩm, sản phẩm này sẽ giữ cho đôi môi của bạn luôn mềm mại và quyến rũ.', 'views/asset/img/product/sonmoi8.PNG', 1, 5),
(99, 'Subtle Mauve Elegance', 55000, 'Màu hồng mauve nhẹ nhàng, không chì, an toàn cho da môi. Chất son mềm mại, giữ ẩm cho đôi môi suốt cả ngày. Với phong cách nhẹ nhàng và tinh tế, đây là sản phẩm không thể thiếu trong bộ sưu tập của bạn.', 'views/asset/img/product/sonmoi9.JPG', 1, 1),
(100, 'Glamorous Berry Burst', 70000, 'Kết cấu mịn màng, giữ màu lâu và dễ tán đều. Màu hồng dâu quyến rũ, phong cách thời trang hiện đại. Sản phẩm này sẽ làm nổi bật vẻ quyến rũ và sự cá tính của bạn.', 'views/asset/img/product/sonmoi10.PNG', 1, 2),
(101, 'Elixir Hoa Nhài Huyền Bí', 1200000, 'Một hương thơm quyến rũ, lôi cuốn hương vị của những bông hoa nhài đang nở. Những nốt hương nhẹ nhàng và hoa lá tạo nên một không gian tĩnh lặng như một khu vườn yên bình. Elixir huyền bí này là lựa chọn hoàn hảo cho những người trân trọng vẻ đẹp vĩnh cửu của hoa nhài.', 'views/asset/img/product/nuochoa1.webp', 2, 3),
(102, 'Bản Năng Oud Huyền Bí', 1800000, 'Sự kết hợp quyến rũ của oud và các loại gia vị kỳ lạ, tạo nên một không gian huyền bí vẫn còn ngần ngại. Hương nhẹ và gỗ của oud tạo ra một cảm giác sang trọng và tinh tế. Hòa mình vào sự mê hoặc của hương oud này.', 'views/asset/img/product/nuochoa2.JPG', 2, 8),
(103, 'Hương Cam Tươi Tắn', 950000, 'Một loạt hương cam tươi tắn, mang lại năng lượng và làm tươi mới các giác quan. Sự kết hợp tươi tắn của các loại trái cây cam tạo ra một hương thơm sống động và làm mới. Hương thơm này phù hợp cho những người yêu thích sự sống động và hương cam tươi mới.', 'views/asset/img/product/nuochoa3.webp', 2, 7),
(104, 'Đàn Hồi Hoa Hồng Velvet', 1500000, 'Trải nghiệm sự hòa quyện của những cánh hoa hồng velvet, tạo nên một hương thơm thanh lịch và vĩnh cửu. Độ mềm mại của hoa hồng được kết hợp với những nốt hương nhẹ nhàng, tạo ra một hương thơm phát sáng sự tinh tế và quý phái.', 'views/asset/img/product/nuochoa4.JPG', 2, 4),
(105, 'Hương Amber Quyến Rũ', 1300000, 'Hành trình quyến rũ với sự ấm áp của hương amber, đánh thức cảm giác hạnh phúc. Hương amber giàu chất và ghi chú tạo nên một không gian mê hoặc và gần gũi. Thưởng thức trải nghiệm sang trọng và hạnh phúc của hương amber này.', 'views/asset/img/product/nuochoa5.JPG', 2, 2),
(106, 'Hương Gió Biển Tĩnh Lặng', 1100000, 'Đắm chìm trong tĩnh lặng của gió biển với hương thơm tươi mới này. Hương thơm tươi mới và động lực của các nốt hương biển tạo ra sự bình yên của cơn gió ven biển. Hương thơm này là lựa chọn hoàn hảo cho những người tìm kiếm cảm giác yên bình và thư giãn.', 'views/asset/img/product/nuochoa6.JPG', 2, 1),
(107, 'Giao Hưởng Đắng Hoa Trầm Tuyệt Vời', 1600000, 'Một giao hưởng tuyệt vời của hoa trầm ghi chú, mê hoặc giác quan. Hương thơm nhẹ nhàng và gỗ của hoa trầm tạo ra một không gian quyến rũ. Đắm chìm trong trải nghiệm tuyệt vời của hương thơm trầm này.', 'views/asset/img/product/nuochoa7.JPG', 2, 5),
(108, 'Hương Lavender Tinh Khiết', 890000, 'Sự tinh khiết của hương lavender làm say đắm trái tim và tâm hồn. Một hương thơm dịu dàng, nhẹ nhàng như làn gió mát, mang lại sự thư thái và thoải mái. Lavender tinh khiết là sự lựa chọn hoàn hảo cho những người tìm kiếm sự bình yên trong cuộc sống hối hả.', 'views/asset/img/product/nuochoa8.JPG', 2, 6),
(109, 'Hương Quả Dứa Mát Lạnh', 1050000, 'Một sự kết hợp độc đáo của quả dứa tươi mát và hương thơm mát lạnh. Hương thơm này đưa bạn đến những chuyến phiêu lưu nhiệt đới và cảm giác tươi mới của quả dứa. Trải nghiệm sự hứng khởi và sôi động của hương quả dứa mát lạnh.', 'views/asset/img/product/nuochoa9.JPG', 2, 3),
(110, 'Hương Hoa Hồng Lãng Mạn', 1250000, 'Một hương thơm lãng mạn và quyến rũ của hoa hồng, mang lại cảm giác ấm áp và ngọt ngào. Độ tinh tế và nữ tính của hoa hồng làm cho hương thơm trở nên quyến rũ và gần gũi. Hương hoa hồng lãng mạn là điểm nhấn cho những dịp đặc biệt.', 'views/asset/img/product/nuochoa10.JPG', 2, 4),
(111, 'Kem Chống Nắng SPF 50+', 350000, 'Bảo vệ làn da của bạn với kem chống nắng SPF 50+. Công nghệ chống nắng mạnh mẽ, giúp ngăn chặn tác động của tia UVB và UVA. Kem dễ thấm nhanh và không gây cảm giác nhờn rít, đảm bảo làn da của bạn luôn được bảo vệ mỗi ngày.', 'views/asset/img/product/kemchongnang1.JPG', 3, 1),
(112, 'Kem Chống Nắng Dưỡng Ẩm', 420000, 'Sự kết hợp hoàn hảo giữa chống nắng và dưỡng ẩm. Kem chống nắng dưỡng ẩm giúp làn da không chỉ được bảo vệ khỏi tác động của tia UV mà còn được cung cấp độ ẩm cần thiết. Cảm nhận làn da mềm mại và khoẻ mạnh suốt cả ngày dài.', 'views/asset/img/product/kemchongnang2.JPG', 3, 5),
(113, 'Kem Chống Nắng Cho Da Nhạy Cảm', 480000, 'Dành cho làn da nhạy cảm, kem chống nắng này nhẹ nhàng và an toàn. Không chứa hương liệu và các chất phụ gia có thể gây kích ứng cho da nhạy cảm. Bảo vệ làn da của bạn mỗi khi bạn ra ngoài dưới ánh nắng mặt trời.', 'views/asset/img/product/kemchongnang3.webp', 3, 7),
(114, 'Kem Chống Nắng Thể Thao', 380000, 'Chống nắng hiệu quả cho những hoạt động thể thao ngoài trời. Kem chống nắng thể thao giữ cho làn da của bạn luôn khô ráo và không bết dính trong suốt cả hoạt động vận động. Sự chống nước đảm bảo sự bền bỉ trong môi trường khắc nghiệt.', 'views/asset/img/product/kemchongnang4.JPG', 3, 2),
(115, 'Kem Chống Nắng Mineral SPF 30', 410000, 'Chọn lựa an toàn với kem chống nắng mineral SPF 30. Sử dụng các thành phần khoáng tự nhiên, kem chống nắng này giúp bảo vệ làn da khỏi tác động có hại của tia UV mà không gây kích ứng. Là sự lựa chọn hoàn hảo cho những người có làn da nhạy cảm.', 'views/asset/img/product/kemchongnang5.JPG', 3, 6),
(116, 'Kem Chống Nắng Tinh Chất Trà Xanh', 450000, 'Kết hợp công nghệ chống nắng cao cấp với tinh chất trà xanh giàu chất chống oxy hóa. Kem chống nắng này không chỉ giúp bảo vệ da khỏi tác động của tia UV mà còn giúp nuôi dưỡng làn da từ bên trong, mang lại làn da khỏe mạnh và tươi trẻ.', 'views/asset/img/product/kemchongnang6.JPG', 3, 4),
(117, 'Kem Chống Nắng Dành Cho Trẻ Em', 320000, 'Bảo vệ làn da nhạy cảm của trẻ em với kem chống nắng đặc biệt dành cho trẻ. Công thức nhẹ nhàng và an toàn, không chứa các hóa chất gây kích ứng. Giữ cho làn da của bé được bảo vệ mỗi khi tham gia các hoạt động ngoài trời.', 'views/asset/img/product/kemchongnang7.JPG', 3, 8),
(118, 'Kem Chống Nắng Làm Dịu Da', 400000, 'Sự kết hợp giữa khả năng chống nắng và làm dịu da. Kem chống nắng này chứa các thành phần dưỡng ẩm và làm dịu nhẹ nhàng, giúp làn da trở nên mềm mại và thoải mái. Bảo vệ da khỏi tác động có hại của tia UV mỗi ngày.', 'views/asset/img/product/kemchongnang8.JPG', 3, 3),
(119, 'Kem Chống Nắng Cho Da Mặt', 360000, 'Kem chống nắng chuyên dụng cho da mặt, giúp bảo vệ và giữ ẩm cho làn da mặt của bạn. Công thức nhẹ nhàng và không gây kích ứng, kem chống nắng này là lựa chọn lý tưởng cho việc duy trì làn da mặt khỏe mạnh và trắng sáng.', 'views/asset/img/product/kemchongnang9.PNG', 3, 1),
(120, 'Kem Chống Nắng Dạng Xịt', 330000, 'Sự thuận tiện tối đa với kem chống nắng dạng xịt. Chỉ cần xịt nhẹ lên làn da, bạn đã có ngay sự bảo vệ cao cấp. Kem chống nắng dạng xịt này giúp bảo vệ toàn diện và nhanh chóng, phù hợp cho những người luôn trong tình trạng di chuyển.', 'views/asset/img/product/kemchongnang10.JPG', 3, 2),
(121, 'Tẩy Da Mặt Sâu Sạch', 280000, 'Sự kết hợp hoàn hảo giữa các thành phần làm sạch sâu và dưỡng ẩm. Tẩy da mặt này giúp loại bỏ tế bào chết, bã nhờn và bụi bẩn, mang lại làn da sạch sẽ và mềm mại. Sử dụng hàng ngày để duy trì làn da khỏe mạnh và tràn đầy năng lượng.', 'views/asset/img/product/tayda1.png', 4, 5),
(122, 'Tẩy Da Mặt Vitamin C', 320000, 'Vitamin C làm sáng da và giúp đều màu làn da. Tẩy da mặt chứa vitamin C này không chỉ giúp làm sạch sâu mà còn cung cấp dưỡng chất cần thiết cho làn da. Cho trải nghiệm làm sạch và dưỡng ẩm mỗi khi bạn sử dụng.', 'views/asset/img/product/tayda2.jpg', 4, 3),
(123, 'Tẩy Da Mặt Dạng Gel', 250000, 'Dạng gel nhẹ nhàng, dễ tạo bọt, giúp loại bỏ tế bào chết và bã nhờn mà không làm khô da. Tẩy da mặt dạng gel này là lựa chọn tốt cho làn da nhạy cảm. Sản phẩm không chứa hương liệu và chất phụ gia gây kích ứng.', 'views/asset/img/product/tayda3.jpg', 4, 2),
(124, 'Tẩy Da Mặt Hoa Hồng', 300000, 'Hương thơm quyến rũ của hoa hồng kết hợp với khả năng làm sạch sâu. Tẩy da mặt hoa hồng này không chỉ mang lại cảm giác thư giãn mà còn giúp làm sáng da và se lỗ chân lông. Sử dụng hàng ngày để duy trì làn da mịn màng và tươi tắn.', 'views/asset/img/product/tayda4.jpg', 4, 4),
(125, 'Tẩy Da Mặt Sáng Da', 290000, 'Với thành phần chứa axit salicylic và vitamin C, tẩy da mặt này giúp làm sạch sâu, kiểm soát dầu thừa và làm sáng da. Sử dụng đều đặn để giữ cho làn da luôn tươi sáng và khỏe mạnh. Là sự lựa chọn tốt cho làn da dầu và mụn.', 'views/asset/img/product/tayda5.jpg', 4, 1),
(126, 'Tẩy Da Mặt Cho Da Nhạy Cảm', 320000, 'Dành riêng cho làn da nhạy cảm, tẩy da mặt này nhẹ nhàng và không gây kích ứng. Thành phần tự nhiên giúp loại bỏ tế bào chết và dầu thừa mà không làm khô da. Sử dụng hàng ngày để duy trì làn da sạch sẽ và thoải mái.', 'views/asset/img/product/tayda6.jpg', 4, 7),
(127, 'Tẩy Da Mặt Hoạt Hình Cho Trẻ Em', 250000, 'Tạo niềm vui khi làm sạch da cho trẻ em với tẩy da mặt hoạt hình dễ thương. Sản phẩm nhẹ nhàng và an toàn, giúp loại bỏ bụi bẩn mà không gây kích ứng cho làn da nhạy cảm của trẻ. Thú vị và hữu ích cho việc chăm sóc da hàng ngày.', 'views/asset/img/product/tayda7.jpg', 4, 8),
(128, 'Tẩy Da Mặt Cho Da Mụn', 330000, 'Đặc biệt thiết kế cho làn da có vấn đề về mụn. Tẩy da mặt này chứa các thành phần chống vi khuẩn và kiểm soát dầu, giúp làm sạch sâu và ngăn ngừa mụn đỏ. Sử dụng đều đặn để có làn da sáng khỏe và không tỳ vết.', 'views/asset/img/product/tayda8.jpg', 4, 2),
(129, 'Tẩy Da Mặt Dưỡng Trắng', 360000, 'Kết hợp giữa tác động tẩy da mặt và dưỡng trắng da. Sản phẩm này giúp loại bỏ tế bào chết, đồng thời cung cấp dưỡng chất làm trắng da. Mang lại làn da mịn màng, sáng bóng và đều màu sau mỗi lần sử dụng.', 'views/asset/img/product/tayda9.jpg', 4, 3),
(130, 'Tẩy Da Mặt Hỗn Hợp Thiên Nhiên', 310000, 'Thành phần hỗn hợp thiên nhiên giúp làm sạch sâu và dưỡng ẩm cho làn da. Tẩy da mặt này chứa các chiết xuất từ thảo mộc và quả cầu giúp cải thiện tình trạng da. Sử dụng hàng ngày để duy trì làn da khỏe mạnh và rạng rỡ.', 'views/asset/img/product/tayda10.jpg', 4, 4),
(131, 'Dầu Gội Dưỡng Ẩm Hương Nước Hoa', 150000, 'Hương nước hoa quyến rũ kết hợp với công thức dưỡng ẩm, giúp làm mềm mại và tái tạo tóc khô. Dầu gội dưỡng ẩm này là lựa chọn hoàn hảo cho tóc khô và hư tổn.', 'views/asset/img/product/daugoi1.jpg', 5, 1),
(132, 'Dầu Gội Dưỡng Ẩm Dành Cho Tóc Nhuộm', 180000, 'Dầu gội dành cho tóc nhuộm giúp bảo vệ màu sắc tóc và tái tạo tóc khô và hư tổn. Thành phần dưỡng ẩm giúp tăng cường độ mềm mại và óng mượt cho tóc nhuộm.', 'views/asset/img/product/daugoi2.jpg', 5, 2),
(133, 'Dầu Gội Dưỡng Ẩm Hương Lavender', 120000, 'Mùi hương dễ chịu của lavender kết hợp với công thức dưỡng ẩm, giúp làm mềm mại và tăng cường sức khỏe cho tóc. Sản phẩm phù hợp cho mọi loại tóc và mang lại trải nghiệm thư giãn trong mỗi lần sử dụng.', 'views/asset/img/product/daugoi3.jpeg', 5, 3),
(134, 'Dầu Xả Phục Hồi Tóc', 200000, 'Dầu xả phục hồi tóc giúp tái tạo và làm mềm mại tóc khô và tổn thương. Công thức chứa các dưỡng chất cần thiết, giúp tăng cường độ ẩm và phục hồi cấu trúc tóc.', 'views/asset/img/product/daugoi4.png', 5, 4),
(135, 'Dầu Gội Dưỡng Ẩm Cho Tóc Mỏng', 160000, 'Dầu gội dưỡng ẩm cho tóc mỏng giúp làm dày tóc và tăng cường độ ẩm. Công thức nhẹ nhàng không làm tóc bết, mang lại cảm giác thoải mái và tóc mềm mại sau mỗi lần sử dụng.', 'views/asset/img/product/daugoi5.jpg', 5, 5),
(136, 'Dầu Gội Dưỡng Ẩm Cho Tóc Nặng', 170000, 'Dầu gội dưỡng ẩm cho tóc nặng giúp làm mềm mại và tái tạo tóc khô. Thành phần nhẹ nhàng nhưng hiệu quả, giúp loại bỏ bã nhờn và dầu thừa mà không làm mất độ ẩm tự nhiên của tóc.', 'views/asset/img/product/daugoi6.jpeg', 5, 6),
(137, 'Dầu Gội Dưỡng Ẩm Hương Cam', 140000, 'Hương cam tươi mới kết hợp với dầu gội dưỡng ẩm giúp làm mềm mại và tăng cường độ ẩm cho tóc. Sản phẩm phù hợp cho mọi loại tóc và mang lại cảm giác sảng khoái sau mỗi lần sử dụng.', 'views/asset/img/product/daugoi7.jpg', 5, 7),
(138, 'Dầu Gội Dưỡng Ẩm Hương Hoa Hồng', 160000, 'Hương hoa hồng quyến rũ kết hợp với công thức dưỡng ẩm, giúp làm mềm mại và tái tạo tóc khô. Dầu gội dưỡng ẩm này là lựa chọn hoàn hảo cho tóc khô và hư tổn.', 'views/asset/img/product/daugoi8.jpg', 5, 8),
(139, 'Dầu Xả Dưỡng Ẩm Cho Tóc Dầu', 190000, 'Dầu xả dưỡng ẩm cho tóc dầu giúp cân bằng dầu tự nhiên và tăng cường độ ẩm cho tóc. Công thức nhẹ nhàng không làm tóc nặng, mang lại cảm giác mềm mại và dễ chải sau mỗi lần sử dụng.', 'views/asset/img/product/daugoi9.jpg', 5, 1),
(140, 'Dầu Gội Dưỡng Ẩm Cho Tóc Uốn', 180000, 'Dầu gội dưỡng ẩm cho tóc uốn giúp làm mềm mại và bảo vệ cấu trúc tóc uốn. Công thức chứa các dưỡng chất cần thiết, giúp tăng cường độ ẩm và làm dịu da đầu.', 'views/asset/img/product/daugoi10.jpg', 5, 2),
(141, 'Bảng Phấn Mắt Màu Tự Nhiên', 250000, 'Bảng phấn mắt với các gam màu tự nhiên, giúp tạo ra các trang điểm nhẹ nhàng và hợp thời trang. Chất phấn mịn màng, dễ tán, giúp tạo nên đôi mắt long lanh và thu hút.', 'views/asset/img/product/phanmat1.jpg', 6, 1),
(142, 'Bảng Phấn Mắt Hồng Phấn', 280000, 'Bảng phấn mắt với các gam màu hồng phấn, tạo nên vẻ ngoài đẹp tự nhiên và quyến rũ. Chất phấn siêu mịn, bám tốt và giữ màu lâu, phù hợp cho mọi dịp.', 'views/asset/img/product/phanmat2.jpg', 6, 2),
(143, 'Bảng Phấn Mắt Dạ Quang', 300000, 'Bảng phấn mắt dạ quang với các gam màu sáng bóng, tạo nên đôi mắt lấp lánh và quyến rũ. Chất phấn mịn màng, dễ tán, giúp tạo nên trang điểm nổi bật.', 'views/asset/img/product/phanmat3.png', 6, 3),
(144, 'Bảng Phấn Mắt Hợp Kim', 320000, 'Bảng phấn mắt với các gam màu hợp kim, tạo nên trang điểm cá tính và ấn tượng. Chất phấn siêu mịn, bám tốt và giữ màu lâu, phù hợp cho những buổi tiệc tùng.', 'views/asset/img/product/phanmat4.jpg', 6, 4),
(145, 'Bảng Phấn Mắt Tone Nâu', 260000, 'Bảng phấn mắt với các gam màu tone nâu, giúp tạo nên trang điểm tự nhiên và ấm áp. Chất phấn mịn màng, dễ tán, giúp tạo nên đôi mắt gợi cảm và cuốn hút.', 'views/asset/img/product/phanmat5.jpg', 6, 5),
(146, 'Bảng Phấn Mắt Tông Xám', 270000, 'Bảng phấn mắt với các gam màu tông xám, tạo nên trang điểm lạ mắt và thời trang. Chất phấn siêu mịn, bám tốt và giữ màu lâu, phù hợp cho những phong cách độc đáo.', 'views/asset/img/product/phanmat6.jpg', 6, 6),
(147, 'Bảng Phấn Mắt Vintage', 290000, 'Bảng phấn mắt vintage với các gam màu retro, tạo nên vẻ ngoài độc đáo và quyến rũ. Chất phấn mịn màng, dễ tán, giúp tạo nên đôi mắt thu hút mọi ánh nhìn.', 'views/asset/img/product/phanmat7.jpg', 6, 7),
(148, 'Bảng Phấn Mắt Dành Cho Ngày Hè', 270000, 'Bảng phấn mắt với các gam màu tươi sáng, phản ánh tinh thần sôi động của mùa hè. Chất phấn siêu mịn, bám tốt và giữ màu lâu, phù hợp cho những ngày nắng đẹp.', 'views/asset/img/product/phanmat8.jpg', 6, 8),
(149, 'Bảng Phấn Mắt Dành Cho Tín Đồ Makeup', 310000, 'Bảng phấn mắt với các gam màu đa dạng, phù hợp cho tất cả các loại trang điểm. Chất phấn mịn màng, dễ tán, giúp tạo nên đôi mắt quyến rũ và cuốn hút.', 'views/asset/img/product/phanmat9.jpg', 6, 1),
(150, 'Bảng Phấn Mắt Dành Cho Cô Dâu', 330000, 'Bảng phấn mắt với các gam màu nhẹ nhàng, tạo nên trang điểm thanh lịch và sang trọng cho cô dâu. Chất phấn siêu mịn, bám tốt và giữ màu lâu, phù hợp cho ngày cưới.', 'views/asset/img/product/phanmat10.jpg', 6, 2);

-- --------------------------------------------------------

--
-- Table structure for table `spgiohang`
--

CREATE TABLE `spgiohang` (
  `ma_gh` int(11) NOT NULL,
  `ma_sp` int(11) NOT NULL,
  `soluong` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `thuonghieu`
--

CREATE TABLE `thuonghieu` (
  `ma_th` int(11) NOT NULL,
  `ten_th` varchar(100) NOT NULL,
  `hinh_th` mediumtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `thuonghieu`
--

INSERT INTO `thuonghieu` (`ma_th`, `ten_th`, `hinh_th`) VALUES
(1, 'EcoGlow', 'views/asset/img/brand/thuonghieu2.jpg'),
(2, 'PureRadiance', 'views/asset/img/brand/thuonghieu3.jpg'),
(3, 'NatureAura', 'views/asset/img/brand/thuonghieu4.jpg'),
(4, 'GlamBelle', 'views/asset/img/brand/thuonghieu5.jpg'),
(5, 'ZenBeauty', 'views/asset/img/brand/thuonghieu6.jpg'),
(6, 'EtherealCharm', 'views/asset/img/brand/thuonghieu7.jpg'),
(7, 'VividGlow', 'views/asset/img/brand/thuonghieu8.jpg'),
(8, 'SereneElegance', 'views/asset/img/brand/thuonghieu9.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `anhsp`
--
ALTER TABLE `anhsp`
  ADD PRIMARY KEY (`ma_anh`),
  ADD KEY `anhsp-ma_sp-fk` (`ma_sp`);

--
-- Indexes for table `ctdonhang`
--
ALTER TABLE `ctdonhang`
  ADD PRIMARY KEY (`ma_dh`,`ma_sp`),
  ADD KEY `ctdonhang-ma_sp-fk` (`ma_sp`);

--
-- Indexes for table `danhgia`
--
ALTER TABLE `danhgia`
  ADD PRIMARY KEY (`ma_nd`,`ma_sp`),
  ADD KEY `danhgia-ma_sp-fk` (`ma_sp`);

--
-- Indexes for table `danhmuc`
--
ALTER TABLE `danhmuc`
  ADD PRIMARY KEY (`ma_dm`);

--
-- Indexes for table `donhang`
--
ALTER TABLE `donhang`
  ADD PRIMARY KEY (`ma_dh`),
  ADD KEY `donhang-ma_gh-fk` (`ma_gh`);

--
-- Indexes for table `giohang`
--
ALTER TABLE `giohang`
  ADD PRIMARY KEY (`ma_gh`),
  ADD KEY `giohang-ma_nd-fk` (`ma_nd`);

--
-- Indexes for table `hoidap`
--
ALTER TABLE `hoidap`
  ADD PRIMARY KEY (`ma_hoidap`),
  ADD KEY `binhluan-ma_sp-fk` (`ma_sp`),
  ADD KEY `binhluan-ma_nd-fk` (`ma_nd`);

--
-- Indexes for table `nguoidung`
--
ALTER TABLE `nguoidung`
  ADD PRIMARY KEY (`ma_nd`);

--
-- Indexes for table `sanpham`
--
ALTER TABLE `sanpham`
  ADD PRIMARY KEY (`ma_sp`),
  ADD KEY `sp-ma_th-fk` (`ma_dm`);

--
-- Indexes for table `spgiohang`
--
ALTER TABLE `spgiohang`
  ADD PRIMARY KEY (`ma_gh`,`ma_sp`),
  ADD KEY `spgiohang-ma_sp-fk` (`ma_sp`);

--
-- Indexes for table `thuonghieu`
--
ALTER TABLE `thuonghieu`
  ADD PRIMARY KEY (`ma_th`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `anhsp`
--
ALTER TABLE `anhsp`
  MODIFY `ma_anh` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `danhmuc`
--
ALTER TABLE `danhmuc`
  MODIFY `ma_dm` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `donhang`
--
ALTER TABLE `donhang`
  MODIFY `ma_dh` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `giohang`
--
ALTER TABLE `giohang`
  MODIFY `ma_gh` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `hoidap`
--
ALTER TABLE `hoidap`
  MODIFY `ma_hoidap` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `nguoidung`
--
ALTER TABLE `nguoidung`
  MODIFY `ma_nd` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `sanpham`
--
ALTER TABLE `sanpham`
  MODIFY `ma_sp` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=151;

--
-- AUTO_INCREMENT for table `thuonghieu`
--
ALTER TABLE `thuonghieu`
  MODIFY `ma_th` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `anhsp`
--
ALTER TABLE `anhsp`
  ADD CONSTRAINT `anhsp-ma_sp-fk` FOREIGN KEY (`ma_sp`) REFERENCES `sanpham` (`ma_sp`);

--
-- Constraints for table `ctdonhang`
--
ALTER TABLE `ctdonhang`
  ADD CONSTRAINT `ctdonhang-ma_dh-fk` FOREIGN KEY (`ma_dh`) REFERENCES `donhang` (`ma_dh`),
  ADD CONSTRAINT `ctdonhang-ma_sp-fk` FOREIGN KEY (`ma_sp`) REFERENCES `sanpham` (`ma_sp`);

--
-- Constraints for table `danhgia`
--
ALTER TABLE `danhgia`
  ADD CONSTRAINT `danhgia-ma_nd-fk` FOREIGN KEY (`ma_nd`) REFERENCES `nguoidung` (`ma_nd`),
  ADD CONSTRAINT `danhgia-ma_sp-fk` FOREIGN KEY (`ma_sp`) REFERENCES `sanpham` (`ma_sp`);

--
-- Constraints for table `donhang`
--
ALTER TABLE `donhang`
  ADD CONSTRAINT `donhang-ma_gh-fk` FOREIGN KEY (`ma_gh`) REFERENCES `giohang` (`ma_gh`);

--
-- Constraints for table `giohang`
--
ALTER TABLE `giohang`
  ADD CONSTRAINT `giohang-ma_nd-fk` FOREIGN KEY (`ma_nd`) REFERENCES `nguoidung` (`ma_nd`);

--
-- Constraints for table `hoidap`
--
ALTER TABLE `hoidap`
  ADD CONSTRAINT `binhluan-ma_nd-fk` FOREIGN KEY (`ma_nd`) REFERENCES `nguoidung` (`ma_nd`),
  ADD CONSTRAINT `binhluan-ma_sp-fk` FOREIGN KEY (`ma_sp`) REFERENCES `sanpham` (`ma_sp`);

--
-- Constraints for table `sanpham`
--
ALTER TABLE `sanpham`
  ADD CONSTRAINT `sp-ma_dm-fk` FOREIGN KEY (`ma_dm`) REFERENCES `danhmuc` (`ma_dm`),
  ADD CONSTRAINT `sp-ma_th-fk` FOREIGN KEY (`ma_dm`) REFERENCES `thuonghieu` (`ma_th`);

--
-- Constraints for table `spgiohang`
--
ALTER TABLE `spgiohang`
  ADD CONSTRAINT `spgiohang-ma_gh-fk` FOREIGN KEY (`ma_gh`) REFERENCES `giohang` (`ma_gh`),
  ADD CONSTRAINT `spgiohang-ma_sp-fk` FOREIGN KEY (`ma_sp`) REFERENCES `sanpham` (`ma_sp`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
