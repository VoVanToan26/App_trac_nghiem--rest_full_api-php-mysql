-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th2 24, 2023 lúc 09:41 AM
-- Phiên bản máy phục vụ: 10.4.22-MariaDB
-- Phiên bản PHP: 8.1.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `rest_full_api`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `questions`
--

CREATE TABLE `questions` (
  `id` int(10) NOT NULL,
  `title` varchar(200) CHARACTER SET utf8 NOT NULL,
  `case_a` varchar(200) CHARACTER SET utf8 COLLATE utf8_unicode_nopad_ci NOT NULL,
  `case_b` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `case_c` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `case_d` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `answer` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `create_time` timestamp NOT NULL DEFAULT current_timestamp(),
  `update_time` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `questions`
--

INSERT INTO `questions` (`id`, `title`, `case_a`, `case_b`, `case_c`, `case_d`, `answer`, `create_time`, `update_time`) VALUES
(1, 'Phần của đường bộ được sử dụng cho các phương tiện giao thông qua lại là gì?', 'Phần mặt đường và lề đường.', 'Phần đường xe chạy.', 'Phần đường xe cơ giới.', 'Tất cả các phương án đều đúng', 'd', '2023-02-16 08:19:01', '2023-02-16 08:19:01'),
(26, 'Phương tiện tham gia giao thông đường bộ gồm những loại nào ?', 'hương tiện giao thông thô sơ đường bộ và xe máy chuyên dùng', 'Phương tiện giao thông cơ giới đường bộ.', 'a và b đều đúng', '', 'c', '2023-02-17 08:16:35', '2023-02-17 08:16:35'),
(28, 'Vạch kép màu trắng trên đường có ý nghĩa gì?', 'Cho phép vượt', 'Cho phép đi xe đạp', 'Cấm đi ngược chiều', 'Cấm vượt', 'd', '2023-02-24 03:32:10', '2023-02-24 06:55:42'),
(29, 'Biển nào báo hiệu cấm xe cơ giới đi vào?', 'Biển 1', 'Biển 2', 'Biển 3', 'Biển 4', 'c', '2023-02-24 03:32:10', '2023-02-24 06:55:42'),
(30, 'Biển nào báo hiệu đường sắt giao nhau với đường bộ không có rào chắn?', 'Biển 1', 'Biển 2', 'Biển 3', 'Biển 4', 'b', '2023-02-24 03:32:10', '2023-02-24 06:55:42'),
(31, 'Khi đèn xanh nháy, người lái xe phải điều khiển xe như thế nào?', 'Dừng lại trước vạch dừng', 'Tăng tốc độ để vượt qua đường nguy hiểm', 'Đi thật nhanh để kịp qua đường', 'Giảm tốc độ, quan sát và điều khiển xe qua đường', 'd', '2023-02-24 03:32:10', '2023-02-24 06:54:10'),
(32, 'Người lái xe cố tình vượt đèn đỏ giao thông sẽ bị xử lý như thế nào?', 'Bị phạt tiền và không được cấp GPLX', 'Bị phạt tiền và tước quyền sử dụng GPLX từ 01-03 tháng', 'Bị phạt tiền từ 2.000.000 đồng đến 3.000.000 đồng', 'Tất cả đều đúng', 'd', '2023-02-24 03:32:10', '2023-02-24 06:54:10'),
(33, 'Biển nào báo hiệu đường đôi?', 'Biển 1', 'Biển 2', 'Biển 3', 'Biển 4', 'd', '2023-02-24 03:32:10', '2023-02-24 06:54:10'),
(34, 'Tại nơi đường giao nhau, khi gặp biển báo \"Stop\", người lái xe phải làm gì?', 'Dừng lại trước vạch dừng', 'Giảm tốc độ và điều khiển xe qua đường', 'Báo hiệu bằng đèn hoặc còi và điều khiển xe qua đường', 'Tăng tốc độ và điều khiển xe qua đường', 'd', '2023-02-24 03:32:10', '2023-02-24 06:54:10'),
(35, 'Biển nào báo hiệu đường hết thời gian cấm đi lại của các phương tiện giao thông đường bộ?', 'Biển 1', 'Biển 2', 'Biển 3', 'Biển 4', 'd', '2023-02-24 03:44:53', '2023-02-24 06:54:10'),
(36, 'Khi điều khiển xe, người lái xe phải tuân thủ nguyên tắc nào sau đây?', 'Tuân thủ luật giao thông đường bộ', 'Tuân thủ chỉ dẫn của cảnh sát giao thông', 'Tuân thủ biển báo hiệu đường bộ', 'Tất cả các phương án trên', 'd', '2023-02-24 03:44:54', '2023-02-24 06:54:10'),
(37, 'Khi điều khiển xe trên đường, người lái xe phải đảm bảo an toàn và không được làm gì?', 'Đi xe quá tốc độ quy định', 'Dùng chất kích thích để tăng sức lao động', 'Điều khiển xe sau khi uống rượu bia hoặc chất kích thích', 'Tất cả các phương án trên', 'd', '2023-02-24 03:44:54', '2023-02-24 06:55:42'),
(38, 'Trong các phương tiện giao thông sau, phương tiện nào được ưu tiên đi trước?', 'Xe buýt', 'Xe tải', 'Xe khách', 'Xe cứu thương', 'd', '2023-02-24 03:44:54', '2023-02-24 06:55:42'),
(39, 'Khi điều khiển xe, người lái xe không được thực hiện hành vi nào dưới đây?', 'Điều khiển xe tải quá tải trọng cho phép', 'Đi xe trên đường không đúng chiều', 'Không bật đèn pha khi gặp xe đi ngược chiều vào ban đêm', 'Cả ba phương án trên', 'd', '2023-02-24 03:44:54', '2023-02-24 06:55:42'),
(41, 'Phương tiện tham gia giao thông đường bộ gồm những loại nào 2?', 'hương tiện giao thông thô sơ đường bộ và xe máy chuyên dùng 2', 'Phương tiện giao thông cơ giới đường bộ 2', 'a và b đều đúng 2', '', 'c', '2023-02-24 08:34:24', '2023-02-24 08:34:24');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `questions`
--
ALTER TABLE `questions`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `title_2` (`title`),
  ADD KEY `title` (`title`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `questions`
--
ALTER TABLE `questions`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
