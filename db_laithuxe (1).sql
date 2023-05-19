-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th10 14, 2022 lúc 05:29 PM
-- Phiên bản máy phục vụ: 10.4.24-MariaDB
-- Phiên bản PHP: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `db_laithuxe`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_car`
--

CREATE TABLE `tbl_car` (
  `id` int(20) NOT NULL,
  `name` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `title` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `price` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `color` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `image` varchar(80) COLLATE utf8_unicode_ci NOT NULL,
  `image1` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `image2` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `description` text COLLATE utf8_unicode_ci NOT NULL,
  `numberofseats` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `style` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `fuel` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `origin` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `gear` varchar(20) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `tbl_car`
--

INSERT INTO `tbl_car` (`id`, `name`, `title`, `price`, `color`, `image`, `image1`, `image2`, `description`, `numberofseats`, `style`, `fuel`, `origin`, `gear`) VALUES
(1, 'CAMRY 2.5HV', 'XỨNG TẦM DOANH NHÂN', '1,468,000,000 VND', 'Đen và Trắ', 'image/camry.jpg', 'image/camry1.jpg', 'image/camry2.jpg', 'Thông số sản phẩm:\r\n- Tên: Toyota Camry 2.5HV 2022\r\n- Phân khúc: sedan hạng D\r\n- Số chỗ: 5\r\n- Xuất sứ: Thái Lan\r\n- Kích thước tổng thể (DxRxC) (mm): 4.886 x 1.840 x 1.445\r\n- Dung tích bình nhiên liệu (L): 50\r\n- Nhiên liệu: xăng lai điện\r\n- Động cơ xăng: 2.5L (175 hp/ 221 Nm)\r\n- Mô-tơ điện: 86 hp/202 Nm\r\n- Công suất tối đa (hp@vòng/phút): 208\r\n- Số tự động: vô cấp CTV\r\n- Phanh trước/sau: Đĩa tản nhiệt/Đĩa\r\n \r\nKhông có quá nhiều thay đổi về bộ cánh của Toyota Camry 2022 nâng cấp mới nói chung và Camry 2.5 HV 2022 nói riêng. Xe vẫn giữ được những nét thiết kế đặc trưng bản bản hiện hành. Đó là sự trẻ trung, năng động và hiện đại, đặc biệt là “cái chất” doanh nhân sang trọng, cao cấp và quyền lực từ trước đến nay của Camry.', '5', 'Sedan', 'Xăng', 'Thái Lan', 'vô cấp CTV'),
(2, 'WIGO 4AT', 'GỌN NHỎ LƯỚT PHỐ', '385,000,000 VND', 'Đen và Trắ', 'image/wigo.jpg', 'image/wigo1.jpg', 'image/wigo2.jpg', 'Thông số sản phẩm:\r\n- Tên: Toyota Wigo 4AT\r\n- Phân khúc: Hạng A\r\n- Số chỗ: 5\r\n- Xuất sứ: Thái Lan\r\n- Kích thước tổng thể (DxRxC) (mm): 3660 x 1600 x 1520\r\n- Dung tích bình nhiên liệu (L): 33\r\n- Nhiên liệu: xăng\r\n- Động cơ xăng: 108/4200 (Nm/rpm) \r\n- Công suất tối đa: 86/6000 (hp/rpm)\r\n- Số tự động: 4 cấp\r\n- Phanh trước/sau: Đĩa tản nhiệt/Đĩa\r\n \r\nTương tự người anh em Wigo 1.2MT, Toyota Wigo 4AT chỉ nhỉnh hơn với một số nâng cấp nhỏ về mặt trang bị bên trong, không có khác biệt lớn về khả năng vận hành. Tuy nhiên với những đặc điểm đó, xe là sự lựa chọn rất đáng cân nhắc với những đối tượng doanh nghiệp vận tải hay những hộ gia đình có kinh tế không mấy khá giả cần một mẫu xe có thân hình nhỏ gọn, mức giá không quá cao cùng với sự bền bỉ trong thời gian dài.', '5', 'Hatchback', 'Xăng', 'Thái Lan', '4 cấp'),
(3, 'YARIS 1.5G CTV', 'SÀNH ĐIỆU XUỐNG PHỐ', '684,000,000 VND', 'Đen và Trắ', 'image/yaris.png', 'image/yaris1.jpg', 'image/yaris2.jpg', 'Thông số sản phẩm:\r\n- Tên: YARIS 1.5G CTV\r\n- Phân khúc: Hạng A\r\n- Số chỗ: 5\r\n- Xuất sứ: Thái Lan\r\n- Kích thước tổng thể (DxRxC) (mm): 4145 x 1730 x 1500\r\n- Dung tích bình nhiên liệu (L): 42\r\n- Nhiên liệu: xăng\r\n- Động cơ xăng: 2.5L (175 hp/ 221 Nm)\r\n- Mô-tơ điện: 80 hp/202 Nm\r\n- Công suất tối đa (hp@vòng/phút): 200\r\n- Số tự động: vô cấp\r\n- Phanh trước/sau: Đĩa tản nhiệt/Đĩa\r\n \r\nVới nhiều sự cải tiến mới mẻ, nội thất tuy chưa được sang trọng nhưng đã tinh tế hơn, được trang bị nhiều tính năng an toàn hiện đại. Toyota Yaris 2022 đang dần chinh phục khách hàng Việt đặc biệt là phái nữ, đối tượng khách hàng yêu thích sự nhỏ gọn, thiết kế trẻ trung.\r\n\r\nXe đáp ứng tốt các nhu cầu cơ bản như đi làm, thể thao, du lịch cũng như sự bền bỉ về động cơ, vận hành ổn, không hỏng vặt, tiết kiệm nhiên liệu cộng với giá trị thương hiệu Honda tại Việt Nam giúp xe trở thành sự lựa chọn rất đáng cân nhắc trong tầm giá.', '5', 'Hatchback', 'Xăng', 'Thái Lan', 'vô cấp'),
(4, 'RAIZE', 'KHUẤY ĐẢO CUỘC CHƠI', '547,000,000 VND', 'Đen và Trắ', 'image/raize.jpg', 'image/raize1.jpg', 'image/raize2.png', 'Thông số sản phẩm:\r\n- Tên: Toyota RAIZE\r\n- Phân khúc: Hạng A\r\n- Số chỗ: 5\r\n- Xuất sứ: Indonesia\r\n- Kích thước tổng thể (DxRxC) (mm): 4030 x 1710 x 1605\r\n- Dung tích bình nhiên liệu (L): 36\r\n- Nhiên liệu: xăng\r\n- Động cơ xăng: 140/2400 - 4000\r\n- Công suất tối đa (hp@vòng/phút):98/6000\r\n- Số tự động: vô cấp\r\n- Phanh trước/sau: Đĩa tản nhiệt/Đĩa\r\n \r\nToyota Raize 2022 đã chính thức ra mắt thị trường Việt Nam trong sự kiện diễn ra vào tối ngày 4/11. Mẫu SUV hạng A của Toyota thu hút sự quan tâm đặc biệt của những người yêu xe với thiết kế trẻ trung, năng động, nhắm vào phân khúc khách mua xe lần đầu đang cực hot.\r\n\r\nMức độ “cháy hàng” của Raize là không thể bàn cãi khi ngay từ giai đoạn nhận đặt cọc mua xe đã có hiện tượng “bia kèm lạc” - khách hàng muốn nhận xe sớm sẽ phải chi thêm 20-30 triệu đồng cho đại lý dưới hình thức mua kèm phụ kiện, bảo hiểm,...', '5', 'SUV', 'Xăng', 'Indonesia', 'vô cấp'),
(5, 'HILUX ADVENTURE', 'CHINH PHỤC ĐỈNH CAO', '913,000,000 VND', 'Đen và Trắ', 'image/hilux.jpg', 'image/hilux1.jpg', 'image/hilux2.jpg', 'Thông số sản phẩm:\r\n- Tên: Toyota HILUX 2.8L 4X4 AT ADVENTURE\r\n- Phân khúc: hạng D\r\n- Số chỗ: 5\r\n- Xuất sứ: Thái Lan\r\n- Kích thước tổng thể (DxRxC) (mm): 5325 x 1900 x 1815\r\n- Dung tích bình nhiên liệu (L): 80\r\n- Nhiên liệu: Dầu\r\n- Động cơ xăng: 500/1600\r\n- Công suất tối đa (hp@vòng/phút): (150) 201/3400\r\n- Số tự động: 6 cấp\r\n- Phanh trước/sau: Đĩa tản nhiệt/Đĩa\r\n \r\nNhìn chung, các phiên bản Hilux 2022 mà Toyota cung cấp đã đáp ứng được đầy đủ nhu cầu của khách hàng Việt. Nếu như mua xe sử dụng kinh doanh, Hilux 2.4 4×2 AT với giá bán thấp nhất sẽ là lựa chọn lý tưởng.\r\n\r\nNếu cần một mẫu bán tải có khả năng “băng rừng, lội suối”, Hilux 2.4 4×4 MT với khả năng gài cầu điện tử sẽ rất thích hợp. Còn đối với những ai cần một chiếc bán tải đầy đủ tiện nghi để có thể vừa sử dụng đi làm, vận chuyển hàng hoá, du lịch và kể cả vượt địa hình thì Hilux 2.8G 4×4 AT MLM sẽ là ứng viên sáng giá.', '5', 'Hilux', 'Dầu', 'Thái Lan', '6 cấp'),
(6, 'LAND CRUISER 300', 'UY LỰC THỐNG LĨNH', '4,100,000,000 VND', 'Đen và Trắ', 'image/landcruiser.jpg', 'image/landcruiser1.jpg', 'image/landcruiser2.jpg', 'Thông số sản phẩm:\n- Tên: Toyota LAND CRUISER 300\n- Phân khúc:hạng D\n- Số chỗ: 7\n- Xuất sứ: Thái Lan\n- Kích thước tổng thể (DxRxC) (mm): 	4965 x 1980 x 1945\n- Dung tích bình nhiên liệu (L): 93\n- Nhiên liệu: xăng\n- Động cơ xăng: 650 / 2000 - 3600\n- Công suất tối đa (hp@vòng/phút): 227(304) / 5500\n- Số tự động: 10 cấp\n- Phanh trước/sau: Đĩa tản nhiệt/Đĩa\n \nToyota Land Cruiser 300 2022 là thế hệ mới nhất được nâng cấp toàn diện về động cơ, hộp số, các tính năng an toàn cao cấp, thiết kế nội ngoại thất và các trang thiết bị tiện nghi cao cấp. Đây cũng là 1 bước tiến quan trọng của hãng khi mà xu hướng các dòng SUV cỡ lớn đang xu hướng nhỏ dần dung tích động cơ và tập trung vào các giá trị công nghệ và an toàn cho xe.\n\nVới 1 loạt thay đổi lớn như thế nhưng giá bán của Land Cruiser 300 lại chỉ có nhỉnh hơn 30 triệu so với phiên bản trước đó, nguyên nhân chính của sự thay đổi này do dung tích động cơ 3.5L chịu mức thuế tiêu thụ đặc biệt nhỏ hơn rất nhiều so với dung tích 4.6 trước đó.', '7', 'SUV', 'Xăng', 'Thái Lan', '10 cấp'),
(7, 'VIOS 2022', 'XẾ CƯNG QUÓC DÂN', '489,000,000 VND', 'Đen và Trắ', 'image/vios.jpg', 'image/vios1.jpg', 'image/vios2.jpg', 'Thông số sản phẩm:\r\n- Tên: Toyota VIOS 2022\r\n- Phân khúc: hạng B\r\n- Số chỗ: 5\r\n- Xuất sứ: Thái Lan\r\n- Kích thước tổng thể (DxRxC) (mm): 	4425 x 1730 x 1475\r\n- Dung tích bình nhiên liệu (L): 42\r\n- Nhiên liệu: xăng\r\n- Động cơ xăng: 650 / 2000 - 3600\r\n- Công suất tối đa (hp@vòng/phút): 79 (107) / 6000\r\n- Số tự động: 10 cấp\r\n- Phanh trước/sau: Đĩa tản nhiệt/Đĩa\r\n\r\nNhìn chung với nhiều cải tiến về bên ngoài cũng như động cơ được cải thiện, yếu tố thương hiệu về độ bền động cơ, ít hỏng vặt, giá bán xe cũ khá tốt giúp Toyota Vios lấy lòng được nhiều khách hàng từ bao năm nay.Nếu bạn thực sự quan tâm nhiều đến một chiếc xe cần nhiều đến yếu tố “ăn chắc, mặc bền” và nhiều tính năng an toàn thì Vios là một lựa chọn khá hợp lý.', '5', 'Sedan', 'Xăng', 'Thái Lan', '10 cấp CTV');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_daily`
--

CREATE TABLE `tbl_daily` (
  `id_daily` int(11) NOT NULL,
  `ten_daily` varchar(50) NOT NULL,
  `id_tinhthanhpho` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `tbl_daily`
--

INSERT INTO `tbl_daily` (`id_daily`, `ten_daily`, `id_tinhthanhpho`) VALUES
(3001, 'Toyota An Sương', 4001),
(3002, 'Toyota Bến Thành', 4001),
(3003, 'Toyota Hoàn Kiếm', 4002),
(3004, 'Toyota Hà Đông', 4002),
(3005, 'Toyota Cần Thơ - Chi Nhánh An Giang', 4003),
(3006, 'Toyota Vũng tàu', 4004),
(3007, 'Toyota Bắc Kạn', 4005);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_dangkylaithu`
--

CREATE TABLE `tbl_dangkylaithu` (
  `hovaten` varchar(20) NOT NULL,
  `id_car` int(11) NOT NULL,
  `id_daily` int(11) NOT NULL,
  `sodienthoai` varchar(10) NOT NULL,
  `ten_tinhthanhpho` varchar(20) NOT NULL,
  `ngaydukien` date NOT NULL,
  `username` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `tbl_dangkylaithu`
--

INSERT INTO `tbl_dangkylaithu` (`hovaten`, `id_car`, `id_daily`, `sodienthoai`, `ten_tinhthanhpho`, `ngaydukien`, `username`) VALUES
('Nguyễn Văn A', 1, 3002, '0347587031', 'Hồ Chí Minh', '2022-11-13', '1'),
('Phạm Viết Tùng', 1, 3001, '0986341053', 'Hồ Chí Minh', '0001-01-01', '2'),
('rvetec', 3, 3003, '7367398469', 'Hồ Chí Minh', '0121-12-12', '2');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_tinhthanhpho`
--

CREATE TABLE `tbl_tinhthanhpho` (
  `id_tinhthanhpho` int(11) NOT NULL,
  `ten_tinhthanhpho` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `tbl_tinhthanhpho`
--

INSERT INTO `tbl_tinhthanhpho` (`id_tinhthanhpho`, `ten_tinhthanhpho`) VALUES
(4001, 'Hồ Chí Minh'),
(4002, 'Hà Nội'),
(4003, 'An Giang'),
(4004, 'Bà Rịa-Vũng Tàu'),
(4005, 'Bắc Kạn');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_user`
--

CREATE TABLE `tbl_user` (
  `username` varchar(11) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(11) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `tbl_user`
--

INSERT INTO `tbl_user` (`username`, `password`) VALUES
('1', '11'),
('2', '11'),
('3', '11'),
('admin', 'admin');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `tbl_car`
--
ALTER TABLE `tbl_car`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `tbl_daily`
--
ALTER TABLE `tbl_daily`
  ADD PRIMARY KEY (`id_daily`),
  ADD KEY `FR_DL_TTP` (`id_tinhthanhpho`);

--
-- Chỉ mục cho bảng `tbl_dangkylaithu`
--
ALTER TABLE `tbl_dangkylaithu`
  ADD PRIMARY KEY (`hovaten`,`id_car`,`id_daily`),
  ADD KEY `FR_DKLT_CAR` (`id_car`),
  ADD KEY `FR_DKLT_DL` (`id_daily`);

--
-- Chỉ mục cho bảng `tbl_tinhthanhpho`
--
ALTER TABLE `tbl_tinhthanhpho`
  ADD PRIMARY KEY (`id_tinhthanhpho`);

--
-- Chỉ mục cho bảng `tbl_user`
--
ALTER TABLE `tbl_user`
  ADD PRIMARY KEY (`username`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `tbl_car`
--
ALTER TABLE `tbl_car`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `tbl_daily`
--
ALTER TABLE `tbl_daily`
  ADD CONSTRAINT `FR_DL_TTP` FOREIGN KEY (`id_tinhthanhpho`) REFERENCES `tbl_tinhthanhpho` (`id_tinhthanhpho`);

--
-- Các ràng buộc cho bảng `tbl_dangkylaithu`
--
ALTER TABLE `tbl_dangkylaithu`
  ADD CONSTRAINT `FR_DKLT_CAR` FOREIGN KEY (`id_car`) REFERENCES `tbl_car` (`id`),
  ADD CONSTRAINT `FR_DKLT_DL` FOREIGN KEY (`id_daily`) REFERENCES `tbl_daily` (`id_daily`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
