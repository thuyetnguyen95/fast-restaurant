-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Apr 21, 2017 at 02:34 AM
-- Server version: 10.1.13-MariaDB
-- PHP Version: 5.6.23

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `restaurant`
--

-- --------------------------------------------------------

--
-- Table structure for table `lienhe`
--

CREATE TABLE `lienhe` (
  `id` int(11) NOT NULL,
  `ten` varchar(200) NOT NULL,
  `sodienthoai` varchar(200) NOT NULL,
  `diachi` varchar(200) NOT NULL,
  `noidung` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `loaimonan`
--

CREATE TABLE `loaimonan` (
  `id` int(11) NOT NULL,
  `tenloai` varchar(100) NOT NULL,
  `tenkhongdau` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `loaimonan`
--

INSERT INTO `loaimonan` (`id`, `tenloai`, `tenkhongdau`) VALUES
(1, 'Món rau', 'mon-rau'),
(2, 'Món lẩu', 'mon-lau'),
(3, 'Món khai vị', 'mon-khai-vi'),
(4, 'Món hải sản', 'mon-hai-san'),
(5, 'Loại đồ uống', 'do-uong');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(150) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `monan`
--

CREATE TABLE `monan` (
  `id` int(11) NOT NULL,
  `idloaimonan` int(11) NOT NULL,
  `tenmonan` varchar(500) NOT NULL,
  `mota` varchar(800) NOT NULL,
  `hinh` varchar(100) NOT NULL,
  `tenkhongdau` varchar(500) NOT NULL,
  `gia` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `monan`
--

INSERT INTO `monan` (`id`, `idloaimonan`, `tenmonan`, `mota`, `hinh`, `tenkhongdau`, `gia`) VALUES
(1, 1, 'Salad rau củ', 'Bất cứ loại rau củ gì bạn có\r\nVd xà lách, cà rốt, cà chua, dưa leo, củ cải đỏ, rau chân vịt..\r\nNếu có khoai lang thì cắt lát chiên sơ, bắp Mỹ luộc chín..\r\nNếu có khoai lang thì cắt lát chiên sơ, bắp Mỹ luộc chín..\r\nSang chảnh hơn có thể thêm thịt bò/heo nướng, phi lê gà nướng..', '4XFU3_photo.jpg', 'salad-rau-cu', 50000),
(2, 1, 'Salad Nga với táo', '', '7ExQv_photo (2).jpg', 'salad-nga-voi-tao', 55000),
(3, 1, 'Salad Trứng rau củ', '', 'qTTcm_photo (3).jpg', 'salad-trung-rau-cu', 63000),
(4, 1, 'Salad rau củ chua', '', 'VCkE4_photo (4).jpg', 'salad-rau-cu-chua', 35000),
(5, 1, 'Canh chua hữu nghị', '', 'AafFX_photo (5).jpg', 'canh-chua-huu-nghi', 30000),
(6, 1, 'Canh thịt và rau xanh', '', 'rDuXe_photo (6).jpg', 'canh-thit-va-rau-xanh', 35000),
(7, 1, 'Salad rau củ với giò lụa', '', '8JWW7_photo (7).jpg', 'salad-rau-cu-voi-gio-lua', 55000),
(8, 1, 'Salad rau trộn', '', 'YMzj2_photo (8).jpg', 'salad-rau-tron', 20000),
(9, 1, 'Salad rau củ ngày hè', '', 'P5r9j_photo (9).jpg', 'salad-rau-cu-ngay-he', 25000),
(10, 1, 'Salad hoa quả', '', 'G3Wid_photo (10).jpg', 'salad-hoa-qua', 15000),
(11, 1, 'Salad hoa quả tươi', '', '5som8_photo (11).jpg', 'salad-hoa-qua-tuoi', 15000),
(12, 1, 'Salad rau củ xanh', '', 'qlqU5_photo (12).jpg', 'salad-rau-cu-xanh', 15000),
(13, 1, 'Salad thập cẩm', '', '637Bj_photo (13).jpg', 'salad-thap-cam', 45000),
(14, 1, 'Salad cà rốt', '', 'v8jsW_photo (14).jpg', 'salad-ca-rot', 25000),
(15, 1, 'Salad rau củ 1', '', 'C0RlY_photo (15).jpg', 'salad-rau-cu-1', 15000),
(16, 1, 'Salad thịt bò', '', 'a2E1j_photo (16).jpg', 'salad-thit-bo', 60000),
(17, 1, 'Salad rau củ 2', '', 'O4pkI_photo (17).jpg', 'salad-rau-cu-2', 15000),
(18, 1, 'Salad rau củ 3', '', 'DqEKJ_photo (18).jpg', 'salad-rau-cu-3', 20000),
(19, 1, 'Salad thịt bò trộn', '', '9ZyiH_photo (19).jpg', 'salad-thit-bo-tron', 55000),
(20, 1, 'Rau bí xào khô', '', 'Ylhn4_photo (20).jpg', 'rau-bi-xao-kho', 15000),
(21, 1, 'Hoa thiên lý xào tôm', '', 'rRhS9_photo (21).jpg', 'hoa-thien-ly-xao-tom', 35000),
(22, 1, 'Salad ớt', '', 'bVqHL_photo (22).jpg', 'salad-ot', 15000),
(23, 1, 'Salad dưa hấu trộn', '', 'VtgLO_photo (23).jpg', 'salad-dua-hau-tron', 20000),
(24, 1, 'Salad rau củ 4', '', 'hx1OW_photo (24).jpg', 'salad-rau-cu-4', 15000),
(25, 1, 'Súp lơ xào cà rốt', '', '4v56F_photo (25).jpg', 'sup-lo-xao-ca-rot', 25000),
(26, 2, 'Lẩu bò 1', '', 'YAXPL_laubo1.jpg', 'lau-bo-1', 200000),
(27, 2, 'Lẩu bò 2', '', 'hzxxr_laubo2.jpg', 'lau-bo-2', 250000),
(28, 2, 'Lẩu bò 3', '', 'G3L8H_laubo3.jpg', 'lau-bo-3', 200000),
(29, 2, 'Lẩu bò 4', '', 'wIObg_laubo4.jpg', 'lau-bo-4', 300000),
(30, 2, 'Lẩu bò 5', '', 'r0Ht9_laubo5.jpg', 'lau-bo-5', 350000),
(31, 2, 'Lẩu cá 1', '', '9yhTG_lauca1.jpg', 'lau-ca-1', 120000),
(32, 2, 'Lẩu cá 2', '', 'oxJMw_lauca2.jpg', 'lau-ca-2', 200000),
(33, 2, 'Lẩu cá 3', '', 'A3smW_lauca3.jpg', 'lau-ca-3', 250000),
(34, 2, 'Lẩu cá 4', '', 'VtZ6v_lauca4.jpg', 'lau-ca-4', 300000),
(35, 2, 'Lẩu cá 5', '', 'I5xxk_lauca5.jpg', 'lau-ca-5', 350000),
(36, 2, 'Lẩu gà 1', '', 'KYVTl_lauga1.jpg', 'lau-ga-1', 350000),
(37, 2, 'Lẩu gà 2', '', 'mUAtb_lauga2.jpg', 'lau-ga-2', 200000),
(38, 2, 'Lẩu gà 3', '', 'A2orL_lauga3.jpg', 'lau-ga-3', 250000),
(39, 2, 'Lẩu gà 4', '', 'cwdR0_lauga4.jpg', 'lau-ga-4', 150000),
(40, 2, 'Lẩu gà 5', '', 'tfss7_lauga5.jpg', 'lau-ga-5', 200000),
(41, 2, 'Lẩu gà 6', '', 'FwnWs_lauga6.jpg', 'lau-ga-6', 300000),
(42, 2, 'Lẩu hải sản 1', '', 'tGAR9_lauhaisan1.jpg', 'lau-hai-san-1', 200000),
(43, 2, 'Lẩu hải sản 2', '', '5RRvE_lauhaisan2.jpg', 'lau-hai-san-2', 200000),
(44, 2, 'Lẩu hải sản 3', '', 'pIPGV_lauhaisan3.jpg', 'lau-hai-san-3', 250000),
(45, 2, 'Lẩu hải sản 4', '', 'XfWRi_lauhaisan4.jpg', 'lau-hai-san-4', 300000),
(46, 2, 'Lẩu hải sản 5', '', 'hm1qe_lauhaisan5.jpg', 'lau-hai-san-5', 150000),
(47, 2, 'Lẩu hải sản 6', '', 'X1IKe_lauhaisan6.jpg', 'lau-hai-san-6', 200000),
(48, 2, 'Lẩu thập cẩm 1', '', 'E004s_lauthapcam1.jpg', 'lau-thap-cam-1', 130000),
(49, 2, 'Lẩu thập cẩm 2', '', 'Nb5be_lauthapcam2.jpg', 'lau-thap-cam-2', 150000),
(50, 2, 'Lẩu thập cẩm 3', '', 'S1I8u_lauthapcam3.jpg', 'lau-thap-cam-3', 170000),
(51, 2, 'Lẩu thập cẩm 4', '', '3bY4v_lauthapcam4.jpg', 'lau-thap-cam-4', 160000),
(52, 2, 'Lẩu thập cẩm 5', '', 'jUotV_lauthapcam5.jpg', 'lau-thap-cam-5', 300000),
(53, 3, 'Thịt cuốn chiên giòn', '', 'QXYEU_khaivi1.jpg', 'thit-cuon-chien-gion', 50000),
(54, 3, 'Salad rau củ xiên', '', 'sKs52_khaivi2.jpg', 'salad-rau-cu-xien', 35000),
(55, 3, 'Tôm Salad', '', '3iO9K_khaivi3.jpg', 'tom-salad', 55000),
(56, 3, 'Tôm chiên bột', '', '8RWBN_khaivi4.jpg', 'tom-chien-bot', 55000),
(57, 3, 'Nem cuộn vs tôm xào', '', 'cXhdh_khaivi5.jpg', 'nem-cuon-vs-tom-xao', 80000),
(58, 3, 'Nem cuộn và bánh tráng', '', 'RO3uP_khaivi6.jpg', 'nem-cuon-va-banh-trang', 30000),
(59, 3, 'Hải sản hấp', '', 'DTpnR_khaivi7.jpg', 'hai-san-hap', 90000),
(60, 3, 'Rau cuộn', '', 'sbIgd_khaivi8.jpg', 'rau-cuon', 35000),
(61, 3, 'Salad mực trộn rau củ', '', 'H8DpU_khaivi9.jpg', 'salad-muc-tron-rau-cu', 65000),
(62, 3, 'Thịt chiện cuộn', '', 'wK91s_khaivi10.jpg', 'thit-chien-cuon', 40000),
(63, 3, 'Tôm xoăn chiên giòn', '', 'nBOeQ_khaivi11.jpg', 'tom-xoan-chien-gion', 35000),
(64, 3, 'Thịt cuốn xả', '', 'UjQod_khaivi12.jpg', 'thit-cuon-xa', 35000),
(65, 3, 'Bánh nhân thịt', '', 'Ru9ch_khaivi13.jpg', 'banh-nhan-thit', 40000),
(66, 3, 'Trứng ngũ sắc', '', 'YoERr_khaivi14.jpg', 'trung-ngu-sac', 35000),
(67, 3, 'Trứng trộn', '', 'QcEVJ_khaivi15.JPG', 'trung-tron', 35000),
(68, 3, 'Khai vị 1', '', 'fGjUZ_khaivi16.jpg', 'khai-vi-1', 50000),
(69, 3, 'Khai vị 3', '', 'rWqFm_khaivi17.jpg', 'khai-vi-3', 35000),
(70, 3, 'Nem cuộn', '', '7yoLc_khaivi18.jpg', 'nem-cuon', 40000),
(71, 3, 'Tôm chiên xù', '', 'VvhK4_khaivi19.jpg', 'tom-chien-xu', 45000),
(72, 3, 'Khai vị 4', '', 'sDXA2_khaivi20.jpg', 'khai-vi-4', 35000),
(73, 3, 'Thịt cuộn', '', 'JSs2S_khaivi21.jpg', 'thit-cuon', 50000),
(74, 3, 'Thịt cuộn xả chiên', '', 'fKH3e_khaivi22.jpg', 'thit-cuon-xa-chien', 40000),
(75, 3, 'Khai vị 5', '', '17c6p_khaivi23.jpg', 'khai-vi-5', 55000),
(76, 3, 'Khai vị 6', '', 'f9pc6_khaivi24.jpg', 'khai-vi-6', 40000),
(77, 3, 'Trứng rán nhân rau củ', '', '5ldBj_khaivi25.jpg', 'trung-ran-nhan-rau-cu', 35000),
(78, 4, 'Hải sản 1', '', 'AsFkk_haisan1.jpg', 'hai-san-1', 150000),
(79, 4, 'Ngũ Xò', '', 'kpMbm_haisan2.jpg', 'ngu-xo', 80000),
(80, 4, 'Tôm chiên', '', 'iqnvr_haisan3.jpg', 'tom-chien', 55000),
(81, 4, 'Mực sốt vang', '', 'Olf5W_haisan4.JPG', 'muc-sot-vang', 120000),
(82, 4, 'Mực sốt', '', 'b3Jft_haisan5.jpg', 'muc-sot', 100000),
(83, 4, 'Sò hấp xả ớt', '', '4dobC_haisan6.jpg', 'so-hap-xa-ot', 120000),
(84, 4, 'Càng cua chiên giòn', '', 'Wq4cJ_haisan7.jpg', 'cang-cua-chien-gion', 120000),
(85, 4, 'Hải sản 2', '', 'b8Di3_haisan8.jpg', 'hai-san-2', 80000),
(86, 4, 'Tôm thuyền', '', 'Q6vnP_haisan9.jpg', 'tom-thuyen', 90000),
(87, 4, 'Tôm sú hấp', '', 'P9hhv_haisan10.jpg', 'tom-su-hap', 200000),
(88, 4, 'Mực nhân hải sản', '', 'p2DXf_haisan11.jpg', 'muc-nhan-hai-san', 180000),
(89, 4, 'Mực chiên', '', 'H3fmp_haisan12.jpg', 'muc-chien', 130000),
(90, 4, 'Tôm luộc', '', 'qfUK9_haisan13.jpg', 'tom-luoc', 85000),
(91, 4, 'Sò hấp trứng', '', 'oGlDG_haisan14.jpg', 'so-hap-trung', 95000),
(92, 4, 'Cua rang', '', 'XbQ4G_haisan15.jpg', 'cua-rang', 50000),
(93, 4, 'Càng cua hấp', '', 'dOzX8_haisan16.jpg', 'cang-cua-hap', 65000),
(94, 4, 'Sò hấp cà chua', '', 'sT3vC_haisan17.jpg', 'so-hap-ca-chua', 75000),
(95, 4, 'Mực khúc', '', 'T09ER_haisan18.jpg', 'muc-khuc', 85000),
(96, 4, 'Sò hấp ớt', '', 'iaFa1_haisan19.jpg', 'so-hap-ot', 90000),
(97, 4, 'Mực tươi nướng', '', 'wXRme_haisan20.jpg', 'muc-tuoi-nuong', 180000),
(98, 4, 'Hải sản 3', '', 'Rg7iH_haisan21.jpg', 'hai-san-3', 140000),
(99, 4, 'Hải sản 4', '', 'x8PJw_haisan22.jpg', 'hai-san-4', 95000),
(100, 4, 'Ốc rang', '', 'fzPJr_haisan23.jpg', 'oc-rang', 85000),
(101, 4, 'Sò hấp', '', 'qkAVb_haisan24.jpg', 'so-hap', 130000),
(102, 4, 'Hải sản 5', '', 'opkU2_haisan25.jpg', 'hai-san-5', 100000),
(103, 5, 'Trà xanh', '', 'XZvie_douong1.jpg', 'tra-xanh', 15000),
(104, 5, 'Nước chanh với mật ong', '', 'Zzahu_douong2.jpg', 'nuoc-chanh-voi-mat-ong', 20000),
(105, 5, 'Kem 1', '', 'XWhzU_douong3.jpg', 'kem-1', 15000),
(106, 5, 'Nước hoa quả', '', 'cuyJ7_douong4.jpg', 'nuoc-hoa-qua', 15000),
(107, 5, 'Nước cam', '', 'ZAPtZ_douong5.jpg', 'nuoc-cam', 15000),
(108, 5, 'Nước dâu', '', 'uAfmx_douong6.jpg', 'nuoc-dau', 18000),
(109, 5, 'Sữa trái cây', '', 'e4yWs_douong7.jpg', 'sua-trai-cay', 20000),
(110, 5, 'Dưa hấu ép', '', 'cZFZi_douong8.jpg', 'dua-hau-ep', 25000),
(111, 5, 'Hoa quả ngâm', '', 'RIIZP_douong9.jpg', 'hoa-qua-ngam', 35000),
(112, 5, 'Bia và nước ngọt', '', 'v3F9h_douong10.jpg', 'bia-va-nuoc-ngot', 25000),
(113, 5, 'Nước rau má ép', '', '4RICG_douong11.jpg', 'nuoc-rau-ma-ep', 25000),
(114, 5, 'Seven up cốc', '', 'F8rD3_douong12.jpg', 'seven-up-coc', 8000),
(115, 5, 'Sữa bò', '', 'wY4pp_err.jpg', 'sua-bo', 20000),
(116, 5, 'Sinh tố hoa quả', '', 'OT6ig_douong14.jpg', 'sinh-to-hoa-qua', 18000),
(117, 5, 'Kem cacao', '', 'L9wrg_douong15.jpg', 'kem-cacao', 16000),
(118, 5, 'Nước ép', '', 'eGuWO_douong16.jpg', 'nuoc-ep', 18000),
(119, 5, 'Nước ép hoa quả', '', 'miAzc_douong17.jpg', 'nuoc-ep-hoa-qua', 15000),
(120, 5, 'Hoa quả thập cẩm', '', 'omXu3_douong18.jpg', 'hoa-qua-thap-cam', 30000),
(121, 5, 'Nước ép cà chua', '', '74Bst_douong19.jpg', 'nuoc-ep-ca-chua', 12000),
(122, 5, 'Nước ngọt', '', 'wFuae_douong20.jpg', 'nuoc-ngot', 10000),
(123, 5, 'Kem cầu vồng', '', 'YNBdI_douong21.jpg', 'kem-cau-vong', 16000),
(124, 5, 'Kem ly hoa quả', '', 'TGhL8_douong22.jpg', 'kem-ly-hoa-qua', 18000),
(125, 5, 'Coca cola', '', 'vvb61_douong23.jpg', 'coca-cola', 8000),
(126, 5, 'Sữa dâu', '', 'Sk6fs_douong24.jpg', 'sua-dau', 12000),
(127, 5, 'Sữa hoa quả', '', 'klM56_douong25.jpg', 'sua-hoa-qua', 12000);

-- --------------------------------------------------------

--
-- Table structure for table `order`
--

CREATE TABLE `order` (
  `id` int(11) NOT NULL,
  `hoten` varchar(100) NOT NULL,
  `sodienthoai` varchar(50) NOT NULL,
  `tongtien` varchar(100) NOT NULL,
  `ban` int(11) NOT NULL DEFAULT '1',
  `diachi` varchar(500) NOT NULL,
  `trangthai` int(11) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `order`
--

INSERT INTO `order` (`id`, `hoten`, `sodienthoai`, `tongtien`, `ban`, `diachi`, `trangthai`) VALUES
(1, 'Nguyễn Văn A', '123123', '215,000.00', 1, 'Hà nội', 1),
(2, 'Nguyễn Văn B', '123123123123', '150,000.00', 10, 'nhổn hà nội', 0),
(3, 'Nguyễn Văn C', '123123', '15,000.00', 1, 'hà nội', 1);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(150) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(150) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `slide`
--

CREATE TABLE `slide` (
  `id` int(11) NOT NULL,
  `tenslide` varchar(100) NOT NULL,
  `hinh` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `slide`
--

INSERT INTO `slide` (`id`, `tenslide`, `hinh`) VALUES
(1, 'Slide 1', 'fk9Ku_banner.jpg'),
(2, 'Slide 2', 'ZnmsV_banner1.jpg'),
(3, 'Slide 3', 'glGFw_banner3.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(150) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(150) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(150) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'admin', 'admin@gmail.com', '$2y$10$mQxsYV6.2JOb7tDl5SJP6uQ.xfsXd9km0OUhkzavN3UMfDqFcAQaa', 'xOosYfiRh34CYaqEIBTw9bOa5XsczBx74Fz9EhCr0EuCAkn0ZTuXpFw5uZJY', NULL, '2017-04-06 05:11:13'),
(2, 'user1', 'user1@gmail.com', '$2y$10$UJSUXw0aQ.9nBFi.rAsgDuYQsc0wdoCe0IJPoDMzGmq4he3FmOFha', NULL, '2017-04-04 05:55:26', '2017-04-04 05:55:26'),
(4, 'user2', 'user2@gmail.com', '$2y$10$ZdocNMXUCHIq8MAIFN.kyu3tOAn2579jxWewo87R1qxsDy3ToRO9m', NULL, '2017-04-04 05:58:03', '2017-04-09 05:23:57');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `lienhe`
--
ALTER TABLE `lienhe`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `loaimonan`
--
ALTER TABLE `loaimonan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `monan`
--
ALTER TABLE `monan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `order`
--
ALTER TABLE `order`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `slide`
--
ALTER TABLE `slide`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `lienhe`
--
ALTER TABLE `lienhe`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `loaimonan`
--
ALTER TABLE `loaimonan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `monan`
--
ALTER TABLE `monan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=128;
--
-- AUTO_INCREMENT for table `order`
--
ALTER TABLE `order`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `slide`
--
ALTER TABLE `slide`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
