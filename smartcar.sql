-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th7 17, 2022 lúc 03:47 PM
-- Phiên bản máy phục vụ: 10.4.21-MariaDB
-- Phiên bản PHP: 7.4.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `smartcar`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `banners`
--

CREATE TABLE `banners` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `images` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `banners`
--

INSERT INTO `banners` (`id`, `images`, `created_at`, `updated_at`) VALUES
(4, './public/images/1655990703-banner.jpg', '2022-06-23 06:25:03', '2022-06-23 06:25:03'),
(5, './public/images/1655990741-banner.jpg', '2022-06-23 06:25:42', '2022-06-23 06:25:42'),
(6, './public/images/1655990780-banner.jpg', '2022-06-23 06:26:20', '2022-06-23 06:26:20'),
(7, './public/images/1655991065-banner.jpg', '2022-06-23 06:31:05', '2022-06-23 06:31:05');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `cars`
--

CREATE TABLE `cars` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `brand` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `manufacture` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `kilomet` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `images` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `name_vi` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description_vi` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `name_en` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description_en` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `name_jp` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description_jp` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `name_ko` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description_ko` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `name_cn` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description_cn` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `name_pt` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description_pt` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `cars`
--

INSERT INTO `cars` (`id`, `brand`, `manufacture`, `kilomet`, `images`, `name_vi`, `description_vi`, `name_en`, `description_en`, `name_jp`, `description_jp`, `name_ko`, `description_ko`, `name_cn`, `description_cn`, `name_pt`, `description_pt`, `created_at`, `updated_at`) VALUES
(6, 'TOYOTA', '2022', '3000', '[\".\\/public\\/car\\/1655994973-vios-en-0.png\",\".\\/public\\/car\\/1655994973-vios-en-1.png\",\".\\/public\\/car\\/1656093149-vios-en-0.jpg\",\".\\/public\\/car\\/1656093149-vios-en-1.jpg\"]', 'vios', '<span style=\"color: rgb(34, 34, 34); font-family: Roboto, Arial, Helvetica, sans-serif; white-space: pre-line;\">Chính sách giá + khuyến mại tháng 6/2022:</span><br style=\"color: rgb(34, 34, 34); font-family: Roboto, Arial, Helvetica, sans-serif; white-space: pre-line;\"><span style=\"color: rgb(34, 34, 34); font-family: Roboto, Arial, Helvetica, sans-serif; white-space: pre-line;\">- Tặng 23 triệu tiền mặt trực tiếp trừ thẳng vào giá xe (liên hệ trao đổi trực tiếp em Hải </span><span class=\"call2 mobile iscontent fb-event-pixel fb-event-showphone datalayer-showinfo\" url-refer=\"https://oto.com.vn/mua-ban-xe-toyota\" data-call=\"Toyota.Vios.Mới.Trong nước.2022.563 triệu.Sedan.Trắng.F0.V3.D0.22508524\" data-phone=\"0936558758\" data-value=\"Bấm để hiện số\" style=\"color: rgb(18, 96, 171); cursor: pointer; padding: 5px 10px; font-family: Roboto, Arial, Helvetica, sans-serif; white-space: pre-line;\">09365*****</span><span style=\"color: rgb(34, 34, 34); font-family: Roboto, Arial, Helvetica, sans-serif; white-space: pre-line;\">).</span><br style=\"color: rgb(34, 34, 34); font-family: Roboto, Arial, Helvetica, sans-serif; white-space: pre-line;\"><span style=\"color: rgb(34, 34, 34); font-family: Roboto, Arial, Helvetica, sans-serif; white-space: pre-line;\">- Tặng gói phụ kiện chính hãng trị giá 07.000.000 đồng.</span><br style=\"color: rgb(34, 34, 34); font-family: Roboto, Arial, Helvetica, sans-serif; white-space: pre-line;\"><span style=\"color: rgb(34, 34, 34); font-family: Roboto, Arial, Helvetica, sans-serif; white-space: pre-line;\">- Tặng camera hành trình chính hãng (loại xem trên App) trị giá 4.500.000 đồng bảo hành miễn phí 03 năm (hoặc 100.000 km) - Áp dụng đến 31/06/2022 hoặc đến khi hết phiếu quà tặng.</span><br style=\"color: rgb(34, 34, 34); font-family: Roboto, Arial, Helvetica, sans-serif; white-space: pre-line;\"><span style=\"color: rgb(34, 34, 34); font-family: Roboto, Arial, Helvetica, sans-serif; white-space: pre-line;\">- Có sẵn xe giao ngay đủ màu; Hỗ trợ giao xe tại nhà mùa dịch - đảm bảo an toàn tuyệt đối.</span><br style=\"color: rgb(34, 34, 34); font-family: Roboto, Arial, Helvetica, sans-serif; white-space: pre-line;\"><span style=\"color: rgb(34, 34, 34); font-family: Roboto, Arial, Helvetica, sans-serif; white-space: pre-line;\">- Cam kết hỗ trợ trả góp lên tới 80%, nhận xe chỉ từ 100 triệu.</span><br style=\"color: rgb(34, 34, 34); font-family: Roboto, Arial, Helvetica, sans-serif; white-space: pre-line;\"><span style=\"color: rgb(34, 34, 34); font-family: Roboto, Arial, Helvetica, sans-serif; white-space: pre-line;\">Giá xe Toyota Vios 2022 niêm yết chưa bao gồm khuyến mại:</span><br style=\"color: rgb(34, 34, 34); font-family: Roboto, Arial, Helvetica, sans-serif; white-space: pre-line;\"><span style=\"color: rgb(34, 34, 34); font-family: Roboto, Arial, Helvetica, sans-serif; white-space: pre-line;\">Vios E MT số sàn: 478.000.000 VNĐ.</span><br style=\"color: rgb(34, 34, 34); font-family: Roboto, Arial, Helvetica, sans-serif; white-space: pre-line;\"><span style=\"color: rgb(34, 34, 34); font-family: Roboto, Arial, Helvetica, sans-serif; white-space: pre-line;\">Vios E CVT tự động: 531.000.000 VNĐ.</span><br style=\"color: rgb(34, 34, 34); font-family: Roboto, Arial, Helvetica, sans-serif; white-space: pre-line;\"><span style=\"color: rgb(34, 34, 34); font-family: Roboto, Arial, Helvetica, sans-serif; white-space: pre-line;\">Vios G CVT tự động: 563.000.000 VNĐ.</span><br style=\"color: rgb(34, 34, 34); font-family: Roboto, Arial, Helvetica, sans-serif; white-space: pre-line;\"><span style=\"color: rgb(34, 34, 34); font-family: Roboto, Arial, Helvetica, sans-serif; white-space: pre-line;\">Showroom chính hãng Toyota Hải Phòng hân hạnh hỗ trợ quý khách hàng.</span><br style=\"color: rgb(34, 34, 34); font-family: Roboto, Arial, Helvetica, sans-serif; white-space: pre-line;\"><span style=\"color: rgb(34, 34, 34); font-family: Roboto, Arial, Helvetica, sans-serif; white-space: pre-line;\">Liên hệ: Mr. Hải - Đại diện kinh doanh </span><span class=\"call2 mobile iscontent fb-event-pixel fb-event-showphone datalayer-showinfo\" url-refer=\"https://oto.com.vn/mua-ban-xe-toyota\" data-call=\"Toyota.Vios.Mới.Trong nước.2022.563 triệu.Sedan.Trắng.F0.V3.D0.22508524\" data-phone=\"0936558758\" data-value=\"Bấm để hiện số\" style=\"color: rgb(18, 96, 171); cursor: pointer; padding: 5px 10px; font-family: Roboto, Arial, Helvetica, sans-serif; white-space: pre-line;\">09365*****</span><span style=\"color: rgb(34, 34, 34); font-family: Roboto, Arial, Helvetica, sans-serif; white-space: pre-line;\"> (Call/Zalo).</span><br style=\"color: rgb(34, 34, 34); font-family: Roboto, Arial, Helvetica, sans-serif; white-space: pre-line;\"><span style=\"color: rgb(34, 34, 34); font-family: Roboto, Arial, Helvetica, sans-serif; white-space: pre-line;\">Xem xe tại: Số 274 Lạch Tray - Phường Lạch Tray - Quận Ngô Quyền - Hải Phòng.</span>', 'vios en', '<span style=\"color: rgb(34, 34, 34); font-family: Roboto, Arial, Helvetica, sans-serif; white-space: pre-line;\">Chính sách giá + khuyến mại tháng 6/2022:</span><br style=\"color: rgb(34, 34, 34); font-family: Roboto, Arial, Helvetica, sans-serif; white-space: pre-line;\"><span style=\"color: rgb(34, 34, 34); font-family: Roboto, Arial, Helvetica, sans-serif; white-space: pre-line;\">- Tặng 23 triệu tiền mặt trực tiếp trừ thẳng vào giá xe (liên hệ trao đổi trực tiếp em Hải </span><span class=\"call2 mobile iscontent fb-event-pixel fb-event-showphone datalayer-showinfo\" url-refer=\"https://oto.com.vn/mua-ban-xe-toyota\" data-call=\"Toyota.Vios.Mới.Trong nước.2022.563 triệu.Sedan.Trắng.F0.V3.D0.22508524\" data-phone=\"0936558758\" data-value=\"Bấm để hiện số\" style=\"color: rgb(18, 96, 171); cursor: pointer; padding: 5px 10px; font-family: Roboto, Arial, Helvetica, sans-serif; white-space: pre-line;\">09365*****</span><span style=\"color: rgb(34, 34, 34); font-family: Roboto, Arial, Helvetica, sans-serif; white-space: pre-line;\">).</span><br style=\"color: rgb(34, 34, 34); font-family: Roboto, Arial, Helvetica, sans-serif; white-space: pre-line;\"><span style=\"color: rgb(34, 34, 34); font-family: Roboto, Arial, Helvetica, sans-serif; white-space: pre-line;\">- Tặng gói phụ kiện chính hãng trị giá 07.000.000 đồng.</span><br style=\"color: rgb(34, 34, 34); font-family: Roboto, Arial, Helvetica, sans-serif; white-space: pre-line;\"><span style=\"color: rgb(34, 34, 34); font-family: Roboto, Arial, Helvetica, sans-serif; white-space: pre-line;\">- Tặng camera hành trình chính hãng (loại xem trên App) trị giá 4.500.000 đồng bảo hành miễn phí 03 năm (hoặc 100.000 km) - Áp dụng đến 31/06/2022 hoặc đến khi hết phiếu quà tặng.</span><br style=\"color: rgb(34, 34, 34); font-family: Roboto, Arial, Helvetica, sans-serif; white-space: pre-line;\"><span style=\"color: rgb(34, 34, 34); font-family: Roboto, Arial, Helvetica, sans-serif; white-space: pre-line;\">- Có sẵn xe giao ngay đủ màu; Hỗ trợ giao xe tại nhà mùa dịch - đảm bảo an toàn tuyệt đối.</span><br style=\"color: rgb(34, 34, 34); font-family: Roboto, Arial, Helvetica, sans-serif; white-space: pre-line;\"><span style=\"color: rgb(34, 34, 34); font-family: Roboto, Arial, Helvetica, sans-serif; white-space: pre-line;\">- Cam kết hỗ trợ trả góp lên tới 80%, nhận xe chỉ từ 100 triệu.</span><br style=\"color: rgb(34, 34, 34); font-family: Roboto, Arial, Helvetica, sans-serif; white-space: pre-line;\"><span style=\"color: rgb(34, 34, 34); font-family: Roboto, Arial, Helvetica, sans-serif; white-space: pre-line;\">Giá xe Toyota Vios 2022 niêm yết chưa bao gồm khuyến mại:</span><br style=\"color: rgb(34, 34, 34); font-family: Roboto, Arial, Helvetica, sans-serif; white-space: pre-line;\"><span style=\"color: rgb(34, 34, 34); font-family: Roboto, Arial, Helvetica, sans-serif; white-space: pre-line;\">Vios E MT số sàn: 478.000.000 VNĐ.</span><br style=\"color: rgb(34, 34, 34); font-family: Roboto, Arial, Helvetica, sans-serif; white-space: pre-line;\"><span style=\"color: rgb(34, 34, 34); font-family: Roboto, Arial, Helvetica, sans-serif; white-space: pre-line;\">Vios E CVT tự động: 531.000.000 VNĐ.</span><br style=\"color: rgb(34, 34, 34); font-family: Roboto, Arial, Helvetica, sans-serif; white-space: pre-line;\"><span style=\"color: rgb(34, 34, 34); font-family: Roboto, Arial, Helvetica, sans-serif; white-space: pre-line;\">Vios G CVT tự động: 563.000.000 VNĐ.</span><br style=\"color: rgb(34, 34, 34); font-family: Roboto, Arial, Helvetica, sans-serif; white-space: pre-line;\"><span style=\"color: rgb(34, 34, 34); font-family: Roboto, Arial, Helvetica, sans-serif; white-space: pre-line;\">Showroom chính hãng Toyota Hải Phòng hân hạnh hỗ trợ quý khách hàng.</span><br style=\"color: rgb(34, 34, 34); font-family: Roboto, Arial, Helvetica, sans-serif; white-space: pre-line;\"><span style=\"color: rgb(34, 34, 34); font-family: Roboto, Arial, Helvetica, sans-serif; white-space: pre-line;\">Liên hệ: Mr. Hải - Đại diện kinh doanh </span><span class=\"call2 mobile iscontent fb-event-pixel fb-event-showphone datalayer-showinfo\" url-refer=\"https://oto.com.vn/mua-ban-xe-toyota\" data-call=\"Toyota.Vios.Mới.Trong nước.2022.563 triệu.Sedan.Trắng.F0.V3.D0.22508524\" data-phone=\"0936558758\" data-value=\"Bấm để hiện số\" style=\"color: rgb(18, 96, 171); cursor: pointer; padding: 5px 10px; font-family: Roboto, Arial, Helvetica, sans-serif; white-space: pre-line;\">09365*****</span><span style=\"color: rgb(34, 34, 34); font-family: Roboto, Arial, Helvetica, sans-serif; white-space: pre-line;\"> (Call/Zalo).</span><br style=\"color: rgb(34, 34, 34); font-family: Roboto, Arial, Helvetica, sans-serif; white-space: pre-line;\"><span style=\"color: rgb(34, 34, 34); font-family: Roboto, Arial, Helvetica, sans-serif; white-space: pre-line;\">Xem xe tại: Số 274 Lạch Tray - Phường Lạch Tray - Quận Ngô Quyền - Hải Phòng.</span>', 'vios jp', '<span style=\"color: rgb(34, 34, 34); font-family: Roboto, Arial, Helvetica, sans-serif; white-space: pre-line;\">Chính sách giá + khuyến mại tháng 6/2022:</span><br style=\"color: rgb(34, 34, 34); font-family: Roboto, Arial, Helvetica, sans-serif; white-space: pre-line;\"><span style=\"color: rgb(34, 34, 34); font-family: Roboto, Arial, Helvetica, sans-serif; white-space: pre-line;\">- Tặng 23 triệu tiền mặt trực tiếp trừ thẳng vào giá xe (liên hệ trao đổi trực tiếp em Hải </span><span class=\"call2 mobile iscontent fb-event-pixel fb-event-showphone datalayer-showinfo\" url-refer=\"https://oto.com.vn/mua-ban-xe-toyota\" data-call=\"Toyota.Vios.Mới.Trong nước.2022.563 triệu.Sedan.Trắng.F0.V3.D0.22508524\" data-phone=\"0936558758\" data-value=\"Bấm để hiện số\" style=\"color: rgb(18, 96, 171); cursor: pointer; padding: 5px 10px; font-family: Roboto, Arial, Helvetica, sans-serif; white-space: pre-line;\">09365*****</span><span style=\"color: rgb(34, 34, 34); font-family: Roboto, Arial, Helvetica, sans-serif; white-space: pre-line;\">).</span><br style=\"color: rgb(34, 34, 34); font-family: Roboto, Arial, Helvetica, sans-serif; white-space: pre-line;\"><span style=\"color: rgb(34, 34, 34); font-family: Roboto, Arial, Helvetica, sans-serif; white-space: pre-line;\">- Tặng gói phụ kiện chính hãng trị giá 07.000.000 đồng.</span><br style=\"color: rgb(34, 34, 34); font-family: Roboto, Arial, Helvetica, sans-serif; white-space: pre-line;\"><span style=\"color: rgb(34, 34, 34); font-family: Roboto, Arial, Helvetica, sans-serif; white-space: pre-line;\">- Tặng camera hành trình chính hãng (loại xem trên App) trị giá 4.500.000 đồng bảo hành miễn phí 03 năm (hoặc 100.000 km) - Áp dụng đến 31/06/2022 hoặc đến khi hết phiếu quà tặng.</span><br style=\"color: rgb(34, 34, 34); font-family: Roboto, Arial, Helvetica, sans-serif; white-space: pre-line;\"><span style=\"color: rgb(34, 34, 34); font-family: Roboto, Arial, Helvetica, sans-serif; white-space: pre-line;\">- Có sẵn xe giao ngay đủ màu; Hỗ trợ giao xe tại nhà mùa dịch - đảm bảo an toàn tuyệt đối.</span><br style=\"color: rgb(34, 34, 34); font-family: Roboto, Arial, Helvetica, sans-serif; white-space: pre-line;\"><span style=\"color: rgb(34, 34, 34); font-family: Roboto, Arial, Helvetica, sans-serif; white-space: pre-line;\">- Cam kết hỗ trợ trả góp lên tới 80%, nhận xe chỉ từ 100 triệu.</span><br style=\"color: rgb(34, 34, 34); font-family: Roboto, Arial, Helvetica, sans-serif; white-space: pre-line;\"><span style=\"color: rgb(34, 34, 34); font-family: Roboto, Arial, Helvetica, sans-serif; white-space: pre-line;\">Giá xe Toyota Vios 2022 niêm yết chưa bao gồm khuyến mại:</span><br style=\"color: rgb(34, 34, 34); font-family: Roboto, Arial, Helvetica, sans-serif; white-space: pre-line;\"><span style=\"color: rgb(34, 34, 34); font-family: Roboto, Arial, Helvetica, sans-serif; white-space: pre-line;\">Vios E MT số sàn: 478.000.000 VNĐ.</span><br style=\"color: rgb(34, 34, 34); font-family: Roboto, Arial, Helvetica, sans-serif; white-space: pre-line;\"><span style=\"color: rgb(34, 34, 34); font-family: Roboto, Arial, Helvetica, sans-serif; white-space: pre-line;\">Vios E CVT tự động: 531.000.000 VNĐ.</span><br style=\"color: rgb(34, 34, 34); font-family: Roboto, Arial, Helvetica, sans-serif; white-space: pre-line;\"><span style=\"color: rgb(34, 34, 34); font-family: Roboto, Arial, Helvetica, sans-serif; white-space: pre-line;\">Vios G CVT tự động: 563.000.000 VNĐ.</span><br style=\"color: rgb(34, 34, 34); font-family: Roboto, Arial, Helvetica, sans-serif; white-space: pre-line;\"><span style=\"color: rgb(34, 34, 34); font-family: Roboto, Arial, Helvetica, sans-serif; white-space: pre-line;\">Showroom chính hãng Toyota Hải Phòng hân hạnh hỗ trợ quý khách hàng.</span><br style=\"color: rgb(34, 34, 34); font-family: Roboto, Arial, Helvetica, sans-serif; white-space: pre-line;\"><span style=\"color: rgb(34, 34, 34); font-family: Roboto, Arial, Helvetica, sans-serif; white-space: pre-line;\">Liên hệ: Mr. Hải - Đại diện kinh doanh </span><span class=\"call2 mobile iscontent fb-event-pixel fb-event-showphone datalayer-showinfo\" url-refer=\"https://oto.com.vn/mua-ban-xe-toyota\" data-call=\"Toyota.Vios.Mới.Trong nước.2022.563 triệu.Sedan.Trắng.F0.V3.D0.22508524\" data-phone=\"0936558758\" data-value=\"Bấm để hiện số\" style=\"color: rgb(18, 96, 171); cursor: pointer; padding: 5px 10px; font-family: Roboto, Arial, Helvetica, sans-serif; white-space: pre-line;\">09365*****</span><span style=\"color: rgb(34, 34, 34); font-family: Roboto, Arial, Helvetica, sans-serif; white-space: pre-line;\"> (Call/Zalo).</span><br style=\"color: rgb(34, 34, 34); font-family: Roboto, Arial, Helvetica, sans-serif; white-space: pre-line;\"><span style=\"color: rgb(34, 34, 34); font-family: Roboto, Arial, Helvetica, sans-serif; white-space: pre-line;\">Xem xe tại: Số 274 Lạch Tray - Phường Lạch Tray - Quận Ngô Quyền - Hải Phòng.</span>', 'vios ko', '<span style=\"color: rgb(34, 34, 34); font-family: Roboto, Arial, Helvetica, sans-serif; white-space: pre-line;\">Chính sách giá + khuyến mại tháng 6/2022:</span><br style=\"color: rgb(34, 34, 34); font-family: Roboto, Arial, Helvetica, sans-serif; white-space: pre-line;\"><span style=\"color: rgb(34, 34, 34); font-family: Roboto, Arial, Helvetica, sans-serif; white-space: pre-line;\">- Tặng 23 triệu tiền mặt trực tiếp trừ thẳng vào giá xe (liên hệ trao đổi trực tiếp em Hải </span><span class=\"call2 mobile iscontent fb-event-pixel fb-event-showphone datalayer-showinfo\" url-refer=\"https://oto.com.vn/mua-ban-xe-toyota\" data-call=\"Toyota.Vios.Mới.Trong nước.2022.563 triệu.Sedan.Trắng.F0.V3.D0.22508524\" data-phone=\"0936558758\" data-value=\"Bấm để hiện số\" style=\"color: rgb(18, 96, 171); cursor: pointer; padding: 5px 10px; font-family: Roboto, Arial, Helvetica, sans-serif; white-space: pre-line;\">09365*****</span><span style=\"color: rgb(34, 34, 34); font-family: Roboto, Arial, Helvetica, sans-serif; white-space: pre-line;\">).</span><br style=\"color: rgb(34, 34, 34); font-family: Roboto, Arial, Helvetica, sans-serif; white-space: pre-line;\"><span style=\"color: rgb(34, 34, 34); font-family: Roboto, Arial, Helvetica, sans-serif; white-space: pre-line;\">- Tặng gói phụ kiện chính hãng trị giá 07.000.000 đồng.</span><br style=\"color: rgb(34, 34, 34); font-family: Roboto, Arial, Helvetica, sans-serif; white-space: pre-line;\"><span style=\"color: rgb(34, 34, 34); font-family: Roboto, Arial, Helvetica, sans-serif; white-space: pre-line;\">- Tặng camera hành trình chính hãng (loại xem trên App) trị giá 4.500.000 đồng bảo hành miễn phí 03 năm (hoặc 100.000 km) - Áp dụng đến 31/06/2022 hoặc đến khi hết phiếu quà tặng.</span><br style=\"color: rgb(34, 34, 34); font-family: Roboto, Arial, Helvetica, sans-serif; white-space: pre-line;\"><span style=\"color: rgb(34, 34, 34); font-family: Roboto, Arial, Helvetica, sans-serif; white-space: pre-line;\">- Có sẵn xe giao ngay đủ màu; Hỗ trợ giao xe tại nhà mùa dịch - đảm bảo an toàn tuyệt đối.</span><br style=\"color: rgb(34, 34, 34); font-family: Roboto, Arial, Helvetica, sans-serif; white-space: pre-line;\"><span style=\"color: rgb(34, 34, 34); font-family: Roboto, Arial, Helvetica, sans-serif; white-space: pre-line;\">- Cam kết hỗ trợ trả góp lên tới 80%, nhận xe chỉ từ 100 triệu.</span><br style=\"color: rgb(34, 34, 34); font-family: Roboto, Arial, Helvetica, sans-serif; white-space: pre-line;\"><span style=\"color: rgb(34, 34, 34); font-family: Roboto, Arial, Helvetica, sans-serif; white-space: pre-line;\">Giá xe Toyota Vios 2022 niêm yết chưa bao gồm khuyến mại:</span><br style=\"color: rgb(34, 34, 34); font-family: Roboto, Arial, Helvetica, sans-serif; white-space: pre-line;\"><span style=\"color: rgb(34, 34, 34); font-family: Roboto, Arial, Helvetica, sans-serif; white-space: pre-line;\">Vios E MT số sàn: 478.000.000 VNĐ.</span><br style=\"color: rgb(34, 34, 34); font-family: Roboto, Arial, Helvetica, sans-serif; white-space: pre-line;\"><span style=\"color: rgb(34, 34, 34); font-family: Roboto, Arial, Helvetica, sans-serif; white-space: pre-line;\">Vios E CVT tự động: 531.000.000 VNĐ.</span><br style=\"color: rgb(34, 34, 34); font-family: Roboto, Arial, Helvetica, sans-serif; white-space: pre-line;\"><span style=\"color: rgb(34, 34, 34); font-family: Roboto, Arial, Helvetica, sans-serif; white-space: pre-line;\">Vios G CVT tự động: 563.000.000 VNĐ.</span><br style=\"color: rgb(34, 34, 34); font-family: Roboto, Arial, Helvetica, sans-serif; white-space: pre-line;\"><span style=\"color: rgb(34, 34, 34); font-family: Roboto, Arial, Helvetica, sans-serif; white-space: pre-line;\">Showroom chính hãng Toyota Hải Phòng hân hạnh hỗ trợ quý khách hàng.</span><br style=\"color: rgb(34, 34, 34); font-family: Roboto, Arial, Helvetica, sans-serif; white-space: pre-line;\"><span style=\"color: rgb(34, 34, 34); font-family: Roboto, Arial, Helvetica, sans-serif; white-space: pre-line;\">Liên hệ: Mr. Hải - Đại diện kinh doanh </span><span class=\"call2 mobile iscontent fb-event-pixel fb-event-showphone datalayer-showinfo\" url-refer=\"https://oto.com.vn/mua-ban-xe-toyota\" data-call=\"Toyota.Vios.Mới.Trong nước.2022.563 triệu.Sedan.Trắng.F0.V3.D0.22508524\" data-phone=\"0936558758\" data-value=\"Bấm để hiện số\" style=\"color: rgb(18, 96, 171); cursor: pointer; padding: 5px 10px; font-family: Roboto, Arial, Helvetica, sans-serif; white-space: pre-line;\">09365*****</span><span style=\"color: rgb(34, 34, 34); font-family: Roboto, Arial, Helvetica, sans-serif; white-space: pre-line;\"> (Call/Zalo).</span><br style=\"color: rgb(34, 34, 34); font-family: Roboto, Arial, Helvetica, sans-serif; white-space: pre-line;\"><span style=\"color: rgb(34, 34, 34); font-family: Roboto, Arial, Helvetica, sans-serif; white-space: pre-line;\">Xem xe tại: Số 274 Lạch Tray - Phường Lạch Tray - Quận Ngô Quyền - Hải Phòng.</span>', 'vios cn', '<span style=\"color: rgb(34, 34, 34); font-family: Roboto, Arial, Helvetica, sans-serif; white-space: pre-line;\">Chính sách giá + khuyến mại tháng 6/2022:</span><br style=\"color: rgb(34, 34, 34); font-family: Roboto, Arial, Helvetica, sans-serif; white-space: pre-line;\"><span style=\"color: rgb(34, 34, 34); font-family: Roboto, Arial, Helvetica, sans-serif; white-space: pre-line;\">- Tặng 23 triệu tiền mặt trực tiếp trừ thẳng vào giá xe (liên hệ trao đổi trực tiếp em Hải </span><span class=\"call2 mobile iscontent fb-event-pixel fb-event-showphone datalayer-showinfo\" url-refer=\"https://oto.com.vn/mua-ban-xe-toyota\" data-call=\"Toyota.Vios.Mới.Trong nước.2022.563 triệu.Sedan.Trắng.F0.V3.D0.22508524\" data-phone=\"0936558758\" data-value=\"Bấm để hiện số\" style=\"color: rgb(18, 96, 171); cursor: pointer; padding: 5px 10px; font-family: Roboto, Arial, Helvetica, sans-serif; white-space: pre-line;\">09365*****</span><span style=\"color: rgb(34, 34, 34); font-family: Roboto, Arial, Helvetica, sans-serif; white-space: pre-line;\">).</span><br style=\"color: rgb(34, 34, 34); font-family: Roboto, Arial, Helvetica, sans-serif; white-space: pre-line;\"><span style=\"color: rgb(34, 34, 34); font-family: Roboto, Arial, Helvetica, sans-serif; white-space: pre-line;\">- Tặng gói phụ kiện chính hãng trị giá 07.000.000 đồng.</span><br style=\"color: rgb(34, 34, 34); font-family: Roboto, Arial, Helvetica, sans-serif; white-space: pre-line;\"><span style=\"color: rgb(34, 34, 34); font-family: Roboto, Arial, Helvetica, sans-serif; white-space: pre-line;\">- Tặng camera hành trình chính hãng (loại xem trên App) trị giá 4.500.000 đồng bảo hành miễn phí 03 năm (hoặc 100.000 km) - Áp dụng đến 31/06/2022 hoặc đến khi hết phiếu quà tặng.</span><br style=\"color: rgb(34, 34, 34); font-family: Roboto, Arial, Helvetica, sans-serif; white-space: pre-line;\"><span style=\"color: rgb(34, 34, 34); font-family: Roboto, Arial, Helvetica, sans-serif; white-space: pre-line;\">- Có sẵn xe giao ngay đủ màu; Hỗ trợ giao xe tại nhà mùa dịch - đảm bảo an toàn tuyệt đối.</span><br style=\"color: rgb(34, 34, 34); font-family: Roboto, Arial, Helvetica, sans-serif; white-space: pre-line;\"><span style=\"color: rgb(34, 34, 34); font-family: Roboto, Arial, Helvetica, sans-serif; white-space: pre-line;\">- Cam kết hỗ trợ trả góp lên tới 80%, nhận xe chỉ từ 100 triệu.</span><br style=\"color: rgb(34, 34, 34); font-family: Roboto, Arial, Helvetica, sans-serif; white-space: pre-line;\"><span style=\"color: rgb(34, 34, 34); font-family: Roboto, Arial, Helvetica, sans-serif; white-space: pre-line;\">Giá xe Toyota Vios 2022 niêm yết chưa bao gồm khuyến mại:</span><br style=\"color: rgb(34, 34, 34); font-family: Roboto, Arial, Helvetica, sans-serif; white-space: pre-line;\"><span style=\"color: rgb(34, 34, 34); font-family: Roboto, Arial, Helvetica, sans-serif; white-space: pre-line;\">Vios E MT số sàn: 478.000.000 VNĐ.</span><br style=\"color: rgb(34, 34, 34); font-family: Roboto, Arial, Helvetica, sans-serif; white-space: pre-line;\"><span style=\"color: rgb(34, 34, 34); font-family: Roboto, Arial, Helvetica, sans-serif; white-space: pre-line;\">Vios E CVT tự động: 531.000.000 VNĐ.</span><br style=\"color: rgb(34, 34, 34); font-family: Roboto, Arial, Helvetica, sans-serif; white-space: pre-line;\"><span style=\"color: rgb(34, 34, 34); font-family: Roboto, Arial, Helvetica, sans-serif; white-space: pre-line;\">Vios G CVT tự động: 563.000.000 VNĐ.</span><br style=\"color: rgb(34, 34, 34); font-family: Roboto, Arial, Helvetica, sans-serif; white-space: pre-line;\"><span style=\"color: rgb(34, 34, 34); font-family: Roboto, Arial, Helvetica, sans-serif; white-space: pre-line;\">Showroom chính hãng Toyota Hải Phòng hân hạnh hỗ trợ quý khách hàng.</span><br style=\"color: rgb(34, 34, 34); font-family: Roboto, Arial, Helvetica, sans-serif; white-space: pre-line;\"><span style=\"color: rgb(34, 34, 34); font-family: Roboto, Arial, Helvetica, sans-serif; white-space: pre-line;\">Liên hệ: Mr. Hải - Đại diện kinh doanh </span><span class=\"call2 mobile iscontent fb-event-pixel fb-event-showphone datalayer-showinfo\" url-refer=\"https://oto.com.vn/mua-ban-xe-toyota\" data-call=\"Toyota.Vios.Mới.Trong nước.2022.563 triệu.Sedan.Trắng.F0.V3.D0.22508524\" data-phone=\"0936558758\" data-value=\"Bấm để hiện số\" style=\"color: rgb(18, 96, 171); cursor: pointer; padding: 5px 10px; font-family: Roboto, Arial, Helvetica, sans-serif; white-space: pre-line;\">09365*****</span><span style=\"color: rgb(34, 34, 34); font-family: Roboto, Arial, Helvetica, sans-serif; white-space: pre-line;\"> (Call/Zalo).</span><br style=\"color: rgb(34, 34, 34); font-family: Roboto, Arial, Helvetica, sans-serif; white-space: pre-line;\"><span style=\"color: rgb(34, 34, 34); font-family: Roboto, Arial, Helvetica, sans-serif; white-space: pre-line;\">Xem xe tại: Số 274 Lạch Tray - Phường Lạch Tray - Quận Ngô Quyền - Hải Phòng.</span>', 'vios pt', '<span style=\"color: rgb(34, 34, 34); font-family: Roboto, Arial, Helvetica, sans-serif; white-space: pre-line;\">Chính sách giá + khuyến mại tháng 6/2022:</span><br style=\"color: rgb(34, 34, 34); font-family: Roboto, Arial, Helvetica, sans-serif; white-space: pre-line;\"><span style=\"color: rgb(34, 34, 34); font-family: Roboto, Arial, Helvetica, sans-serif; white-space: pre-line;\">- Tặng 23 triệu tiền mặt trực tiếp trừ thẳng vào giá xe (liên hệ trao đổi trực tiếp em Hải </span><span class=\"call2 mobile iscontent fb-event-pixel fb-event-showphone datalayer-showinfo\" url-refer=\"https://oto.com.vn/mua-ban-xe-toyota\" data-call=\"Toyota.Vios.Mới.Trong nước.2022.563 triệu.Sedan.Trắng.F0.V3.D0.22508524\" data-phone=\"0936558758\" data-value=\"Bấm để hiện số\" style=\"color: rgb(18, 96, 171); cursor: pointer; padding: 5px 10px; font-family: Roboto, Arial, Helvetica, sans-serif; white-space: pre-line;\">09365*****</span><span style=\"color: rgb(34, 34, 34); font-family: Roboto, Arial, Helvetica, sans-serif; white-space: pre-line;\">).</span><br style=\"color: rgb(34, 34, 34); font-family: Roboto, Arial, Helvetica, sans-serif; white-space: pre-line;\"><span style=\"color: rgb(34, 34, 34); font-family: Roboto, Arial, Helvetica, sans-serif; white-space: pre-line;\">- Tặng gói phụ kiện chính hãng trị giá 07.000.000 đồng.</span><br style=\"color: rgb(34, 34, 34); font-family: Roboto, Arial, Helvetica, sans-serif; white-space: pre-line;\"><span style=\"color: rgb(34, 34, 34); font-family: Roboto, Arial, Helvetica, sans-serif; white-space: pre-line;\">- Tặng camera hành trình chính hãng (loại xem trên App) trị giá 4.500.000 đồng bảo hành miễn phí 03 năm (hoặc 100.000 km) - Áp dụng đến 31/06/2022 hoặc đến khi hết phiếu quà tặng.</span><br style=\"color: rgb(34, 34, 34); font-family: Roboto, Arial, Helvetica, sans-serif; white-space: pre-line;\"><span style=\"color: rgb(34, 34, 34); font-family: Roboto, Arial, Helvetica, sans-serif; white-space: pre-line;\">- Có sẵn xe giao ngay đủ màu; Hỗ trợ giao xe tại nhà mùa dịch - đảm bảo an toàn tuyệt đối.</span><br style=\"color: rgb(34, 34, 34); font-family: Roboto, Arial, Helvetica, sans-serif; white-space: pre-line;\"><span style=\"color: rgb(34, 34, 34); font-family: Roboto, Arial, Helvetica, sans-serif; white-space: pre-line;\">- Cam kết hỗ trợ trả góp lên tới 80%, nhận xe chỉ từ 100 triệu.</span><br style=\"color: rgb(34, 34, 34); font-family: Roboto, Arial, Helvetica, sans-serif; white-space: pre-line;\"><span style=\"color: rgb(34, 34, 34); font-family: Roboto, Arial, Helvetica, sans-serif; white-space: pre-line;\">Giá xe Toyota Vios 2022 niêm yết chưa bao gồm khuyến mại:</span><br style=\"color: rgb(34, 34, 34); font-family: Roboto, Arial, Helvetica, sans-serif; white-space: pre-line;\"><span style=\"color: rgb(34, 34, 34); font-family: Roboto, Arial, Helvetica, sans-serif; white-space: pre-line;\">Vios E MT số sàn: 478.000.000 VNĐ.</span><br style=\"color: rgb(34, 34, 34); font-family: Roboto, Arial, Helvetica, sans-serif; white-space: pre-line;\"><span style=\"color: rgb(34, 34, 34); font-family: Roboto, Arial, Helvetica, sans-serif; white-space: pre-line;\">Vios E CVT tự động: 531.000.000 VNĐ.</span><br style=\"color: rgb(34, 34, 34); font-family: Roboto, Arial, Helvetica, sans-serif; white-space: pre-line;\"><span style=\"color: rgb(34, 34, 34); font-family: Roboto, Arial, Helvetica, sans-serif; white-space: pre-line;\">Vios G CVT tự động: 563.000.000 VNĐ.</span><br style=\"color: rgb(34, 34, 34); font-family: Roboto, Arial, Helvetica, sans-serif; white-space: pre-line;\"><span style=\"color: rgb(34, 34, 34); font-family: Roboto, Arial, Helvetica, sans-serif; white-space: pre-line;\">Showroom chính hãng Toyota Hải Phòng hân hạnh hỗ trợ quý khách hàng.</span><br style=\"color: rgb(34, 34, 34); font-family: Roboto, Arial, Helvetica, sans-serif; white-space: pre-line;\"><span style=\"color: rgb(34, 34, 34); font-family: Roboto, Arial, Helvetica, sans-serif; white-space: pre-line;\">Liên hệ: Mr. Hải - Đại diện kinh doanh </span><span class=\"call2 mobile iscontent fb-event-pixel fb-event-showphone datalayer-showinfo\" url-refer=\"https://oto.com.vn/mua-ban-xe-toyota\" data-call=\"Toyota.Vios.Mới.Trong nước.2022.563 triệu.Sedan.Trắng.F0.V3.D0.22508524\" data-phone=\"0936558758\" data-value=\"Bấm để hiện số\" style=\"color: rgb(18, 96, 171); cursor: pointer; padding: 5px 10px; font-family: Roboto, Arial, Helvetica, sans-serif; white-space: pre-line;\">09365*****</span><span style=\"color: rgb(34, 34, 34); font-family: Roboto, Arial, Helvetica, sans-serif; white-space: pre-line;\"> (Call/Zalo).</span><br style=\"color: rgb(34, 34, 34); font-family: Roboto, Arial, Helvetica, sans-serif; white-space: pre-line;\"><span style=\"color: rgb(34, 34, 34); font-family: Roboto, Arial, Helvetica, sans-serif; white-space: pre-line;\">Xem xe tại: Số 274 Lạch Tray - Phường Lạch Tray - Quận Ngô Quyền - Hải Phòng.</span>', '2022-06-23 07:36:13', '2022-06-24 10:52:29');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `car_brands`
--

CREATE TABLE `car_brands` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `logo` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `car_brands`
--

INSERT INTO `car_brands` (`id`, `name`, `description`, `logo`, `created_at`, `updated_at`) VALUES
(4, 'TOYOTA', 'toyota', './public/car-logo/1655954283-TOYOTA.png', '2022-06-22 20:18:03', '2022-06-22 20:18:03'),
(5, 'HUYNDAI', 'huyndai', './public/car-logo/1655954316-HUYNDAI.png', '2022-06-22 20:18:36', '2022-06-22 20:18:36'),
(6, 'HONDA', 'honda', './public/car-logo/1655955373-HONDA.png', '2022-06-22 20:36:13', '2022-06-22 20:36:13'),
(7, 'BMW', 'bmw', './public/car-logo/1655955401-BMW.png', '2022-06-22 20:36:41', '2022-06-22 20:36:41'),
(8, 'LEXUS', 'lexus', './public/car-logo/1655955465-LEXUS.png', '2022-06-22 20:37:45', '2022-06-22 20:37:45'),
(9, 'MAZDA', 'mazda', './public/car-logo/1655955479-MAZDA.png', '2022-06-22 20:37:59', '2022-06-22 20:37:59'),
(10, 'MERCEDES', 'mercedes', './public/car-logo/1655955524-MERCEDES.png', '2022-06-22 20:38:44', '2022-06-22 20:38:44'),
(11, 'mitsubishi', 'mitsubishi', './public/car-logo/1655955626-mitsubishi.png', '2022-06-22 20:40:26', '2022-06-22 20:40:26');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `feedback`
--

CREATE TABLE `feedback` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `subject` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `message` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `feedback`
--

INSERT INTO `feedback` (`id`, `name`, `email`, `subject`, `message`, `created_at`, `updated_at`) VALUES
(1, 'Lê Hữu Hoàn', 'hoanle396@gmail.com', 'dung lượng free', '1234567ygv', '2022-06-24 00:04:28', '2022-06-24 00:04:28'),
(2, 'Lê Hữu Hoàn', 'hoanle396@gmail.com', 'dung lượng free', 'sdfhg', '2022-06-24 00:06:54', '2022-06-24 00:06:54');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2022_06_14_174113_create_categories_table', 1),
(6, '2022_06_15_081629_create_category_trans_table', 1),
(7, '2022_06_16_172938_create_settings_table', 1),
(8, '2022_06_17_041947_create_car_brands_table', 1),
(10, '2022_06_17_092902_create_cars_table', 2),
(11, '2022_06_19_003245_create_services_table', 3),
(12, '2022_06_19_004823_service_brand', 3),
(13, '2022_06_19_074831_create_news_table', 4),
(14, '2022_06_20_031411_create_banners_table', 5),
(16, '2022_06_24_064456_create_feedback_table', 6);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `news`
--

CREATE TABLE `news` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `images` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `name_vi` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description_vi` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `name_en` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description_en` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `name_jp` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description_jp` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `name_ko` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description_ko` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `name_cn` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description_cn` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `name_pt` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description_pt` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `news`
--

INSERT INTO `news` (`id`, `images`, `name_vi`, `description_vi`, `name_en`, `description_en`, `name_jp`, `description_jp`, `name_ko`, `description_ko`, `name_cn`, `description_cn`, `name_pt`, `description_pt`, `created_at`, `updated_at`) VALUES
(5, './public/news/1655964974-LAMBOGHINI.jpg', 'LAMBOGHINI', '<p>q</p>', 'LAMBOGHINI', '<p>q</p>', 'LAMBOGHINI', '<p>q</p>', 'LAMBOGHINI', '<p>q</p>', 'LAMBOGHINI', '<p>q</p>', 'LAMBOGHINI', '<p>q</p>', '2022-06-22 23:16:14', '2022-06-22 23:16:14'),
(6, './public/news/1656097572-Lê Hữu Hoàn.jpg', 'TEst news papper', '<p style=\"text-align: center; \"><iframe frameborder=\"0\" src=\"//www.youtube.com/embed/uXvCJiyofRg\" width=\"640\" height=\"360\" class=\"note-video-clip\"></iframe></p><p style=\"margin-right: 0px; margin-left: 0px; padding: 0px; color: rgb(141, 141, 141); font-size: 14px; line-height: 1.4; font-family: &quot;Times New Roman&quot;, Times, serif; background-color: rgb(255, 255, 255);\"><span style=\"margin: 0px; padding: 0px; font-family: inherit;\">Giấy tờ anh chị cần chuẩn bị khi đổi BLX bao gồm:</span></p><p style=\"margin-right: 0px; margin-left: 0px; padding: 0px; color: rgb(141, 141, 141); font-size: 14px; line-height: 1.4; font-family: &quot;Times New Roman&quot;, Times, serif; background-color: rgb(255, 255, 255);\"><span style=\"margin: 0px; padding: 0px; font-family: inherit;\">- Bản dịch bằng ở hiệp hội oto xe máy nhật JAF (bên mình dịch cho khách riêng lẻ phí 4,5sen, khách đổi BLX trọn gói là 4,3sen) chỉ cần gửi ảnh bằng rõ nét 2 mặt, thời gian nhận bằng 6-10 ngày (bên mình dịch giúp thôi, mọi người dịch sẽ tốn thậm chí nhiều hơn vì phải đi in bằng, in đơn).</span></p><p style=\"margin-right: 0px; margin-left: 0px; padding: 0px; color: rgb(141, 141, 141); font-size: 14px; line-height: 1.4; font-family: &quot;Times New Roman&quot;, Times, serif; background-color: rgb(255, 255, 255);\"><span style=\"margin: 0px; padding: 0px; font-family: inherit;\">- Giấy jyuminhyo trong vòng 3 tháng đổ lại có quốc tịch ghi&nbsp;ベトナム&nbsp;mọi người có thể xin 300yen ở shi, hoặc để bên mình xin giúp phí 2sen (vì phải liên hệ shi, gửi đi gửi lại).</span></p><p style=\"margin-right: 0px; margin-left: 0px; padding: 0px; color: rgb(141, 141, 141); font-size: 14px; line-height: 1.4; font-family: &quot;Times New Roman&quot;, Times, serif; background-color: rgb(255, 255, 255);\"><span style=\"margin: 0px; padding: 0px; font-family: inherit;\">- ảnh thẻ cỡ 3x2,4cm chụp trong 3 tháng đổ lại (bên mình có dịch vụ ảnh thẻ chỉ với 600yen/bìa free ship toàn Nhật Bản).</span></p><p style=\"margin-right: 0px; margin-left: 0px; padding: 0px; color: rgb(141, 141, 141); font-size: 14px; line-height: 1.4; font-family: &quot;Times New Roman&quot;, Times, serif; background-color: rgb(255, 255, 255);\"><span style=\"margin: 0px; padding: 0px; font-family: inherit;\">- Bằng gốc.</span></p><p style=\"margin-right: 0px; margin-left: 0px; padding: 0px; color: rgb(141, 141, 141); font-size: 14px; line-height: 1.4; font-family: &quot;Times New Roman&quot;, Times, serif; background-color: rgb(255, 255, 255);\"><span style=\"margin: 0px; padding: 0px; font-family: inherit;\">- Thẻ ngoại kiều.</span></p><p style=\"margin-right: 0px; margin-left: 0px; padding: 0px; color: rgb(141, 141, 141); font-size: 14px; line-height: 1.4; font-family: &quot;Times New Roman&quot;, Times, serif; background-color: rgb(255, 255, 255);\"><span style=\"margin: 0px; padding: 0px; font-family: inherit;\">- Hộ chiếu.</span></p><p style=\"text-align: center; margin-right: 0px; margin-left: 0px; padding: 0px; color: rgb(141, 141, 141); font-size: 14px; line-height: 1.4; font-family: &quot;Times New Roman&quot;, Times, serif; background-color: rgb(255, 255, 255);\"><span style=\"margin: 0px; padding: 0px; font-family: inherit;\">Ngoài ra tuỳ từng tỉnh còn cần hồ sơ gốc, giấy xác nhận của đại sứ quán</span></p>', 'Lê Hữu Hoàn', '<p><iframe frameborder=\"0\" src=\"//www.youtube.com/embed/uXvCJiyofRg\" width=\"640\" height=\"360\" class=\"note-video-clip\"></iframe><br></p>', 'Lê Hữu Hoàn', '<p><iframe frameborder=\"0\" src=\"//www.youtube.com/embed/uXvCJiyofRg\" width=\"640\" height=\"360\" class=\"note-video-clip\"></iframe><br></p>', 'Lê Hữu Hoàn', 'Lê Hữu Hoàn', 'Lê Hữu Hoàn', '<p><iframe frameborder=\"0\" src=\"//www.youtube.com/embed/uXvCJiyofRg\" width=\"640\" height=\"360\" class=\"note-video-clip\"></iframe><br></p>', 'Lê Hữu Hoàn', '<p><iframe frameborder=\"0\" src=\"//www.youtube.com/embed/uXvCJiyofRg\" width=\"640\" height=\"360\" class=\"note-video-clip\"></iframe><br></p>', '2022-06-24 12:06:12', '2022-06-25 09:19:23');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `services`
--

CREATE TABLE `services` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `brand` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `images` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `name_vi` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description_vi` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `name_en` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description_en` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `name_jp` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description_jp` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `name_ko` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description_ko` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `name_cn` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description_cn` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `name_pt` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description_pt` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `services_brands`
--

CREATE TABLE `services_brands` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `images` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `name_vi` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name_en` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name_jp` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name_ko` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name_cn` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name_pt` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `settings`
--

CREATE TABLE `settings` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `value` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `settings`
--

INSERT INTO `settings` (`id`, `name`, `value`, `created_at`, `updated_at`) VALUES
(1, 'phone', '0899888888', '2022-06-18 05:45:54', '2022-07-16 09:21:22'),
(2, 'background', '#ffffff', '2022-06-18 05:45:54', '2022-07-16 09:21:22'),
(3, 'navcolor', '#2b52c5', '2022-06-18 06:20:53', '2022-07-16 09:21:22'),
(4, 'tenweb', 'Smart Car', '2022-06-19 06:32:52', '2022-07-16 09:21:22'),
(5, 'mota', 'web bán car', '2022-06-20 04:23:19', '2022-07-16 09:21:22'),
(6, 'tukhoa', 'car số 1 nhật bản', '2022-06-20 04:23:19', '2022-07-16 09:21:22'),
(7, 'logo', 'https://vinajapan.com/upload/banner/901.png', '2022-06-20 04:23:19', '2022-07-16 09:21:22'),
(8, 'favicon', 'https://vinajapan.com/upload/banner/901.png', '2022-06-20 04:23:19', '2022-07-16 09:21:22'),
(9, 'anhbia', 'https://vinajapan.com/upload/banner/901.png', '2022-06-20 04:28:03', '2022-07-16 09:21:22'),
(10, 'hotline', '0345648638', '2022-06-20 04:28:03', '2022-07-16 09:21:22'),
(11, 'zalo', '0345648638', '2022-06-20 04:28:03', '2022-07-16 09:21:22'),
(12, 'facebook', 'https://www.facebook.com/hoanle.396', '2022-06-20 04:28:03', '2022-07-16 09:21:22'),
(13, 'email', 'hoanle396@gmail.com', '2022-06-20 04:28:03', '2022-07-16 09:21:22'),
(14, 'dieu_khoan', 'Dù biết rằng bạn rất dễ bỏ qua những Điều khoản dịch vụ này, nhưng chúng tôi cần phải nêu rõ trách nhiệm của chúng tôi cũng như trách nhiệm của bạn trong quá trình bạn sử dụng các dịch vụ của Google.', '2022-06-20 04:28:03', '2022-07-16 09:21:22'),
(16, 'youtube', 'https://www.youtube.com/channel/UCS7GLj58SPMimWJ-xm0uPSQ', '2022-06-23 06:36:15', '2022-07-16 09:21:22'),
(17, 'address', '470 đường Trần Đại Nghĩa, Quận Ngũ Hành Sơn, Đà Nẵng', '2022-06-23 08:17:33', '2022-07-16 09:21:22');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `role` enum('user','admin') COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `role`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, '', 'hoanle396@gmail.com', '2022-06-17 16:05:37', '$2y$10$9vn7IxVlGd.t36loKUeomOCIMRCWb7m9GPzEjmNSoLvTeKWqexnf2', 'admin', NULL, '2022-06-17 16:05:37', '2022-06-17 16:05:37');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `banners`
--
ALTER TABLE `banners`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `cars`
--
ALTER TABLE `cars`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `car_brands`
--
ALTER TABLE `car_brands`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Chỉ mục cho bảng `feedback`
--
ALTER TABLE `feedback`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Chỉ mục cho bảng `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Chỉ mục cho bảng `services`
--
ALTER TABLE `services`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `services_brands`
--
ALTER TABLE `services_brands`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `settings`
--
ALTER TABLE `settings`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `banners`
--
ALTER TABLE `banners`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT cho bảng `cars`
--
ALTER TABLE `cars`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT cho bảng `car_brands`
--
ALTER TABLE `car_brands`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT cho bảng `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `feedback`
--
ALTER TABLE `feedback`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT cho bảng `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT cho bảng `news`
--
ALTER TABLE `news`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT cho bảng `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `services`
--
ALTER TABLE `services`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT cho bảng `services_brands`
--
ALTER TABLE `services_brands`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT cho bảng `settings`
--
ALTER TABLE `settings`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT cho bảng `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
