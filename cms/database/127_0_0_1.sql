-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th4 16, 2021 lúc 04:40 AM
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
-- Cơ sở dữ liệu: `tunhiennhuhoitho`
--
CREATE DATABASE IF NOT EXISTS `tunhiennhuhoitho` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `tunhiennhuhoitho`;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `activities`
--

CREATE TABLE `activities` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `subject` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `content` text COLLATE utf8_unicode_ci NOT NULL,
  `url` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `method` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `ip` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `agent` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `user_id` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `activities`
--

INSERT INTO `activities` (`id`, `subject`, `content`, `url`, `method`, `ip`, `agent`, `user_id`, `created_at`, `updated_at`) VALUES
(1, 'Đăng nhập', 'Tài khoản admin@gmail.com đăng nhập CMS vào lúc 08:39 AM ngày 15/03/2021', 'http://127.0.0.1/php_tunhiennhuhoitho/cms/public/login', 'POST', '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/89.0.4389.82 Safari/537.36', 1, '2021-03-15 01:39:41', '2021-03-15 01:39:41'),
(2, 'Đăng nhập', 'Tài khoản admin@gmail.com đăng nhập CMS vào lúc 16:22 PM ngày 15/03/2021', 'http://127.0.0.1/php_tunhiennhuhoitho/cms/login', 'POST', '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/89.0.4389.82 Safari/537.36', 1, '2021-03-15 09:22:25', '2021-03-15 09:22:25'),
(3, 'Đăng nhập', 'Tài khoản admin@gmail.com đăng nhập CMS vào lúc 10:38 AM ngày 16/03/2021', 'http://127.0.0.1/php_tunhiennhuhoitho/cms/public/login', 'POST', '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/89.0.4389.82 Safari/537.36', 1, '2021-03-16 03:38:57', '2021-03-16 03:38:57'),
(4, 'Đăng nhập', 'Tài khoản admin@gmail.com đăng nhập CMS vào lúc 13:38 PM ngày 16/03/2021', 'http://127.0.0.1/php_tunhiennhuhoitho/cms/public/login', 'POST', '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/89.0.4389.82 Safari/537.36', 1, '2021-03-16 06:38:43', '2021-03-16 06:38:43'),
(5, 'Đăng nhập', 'Tài khoản admin@gmail.com đăng nhập CMS vào lúc 15:37 PM ngày 16/03/2021', 'http://127.0.0.1/php_tunhiennhuhoitho/cms/public/login', 'POST', '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/89.0.4389.82 Safari/537.36', 1, '2021-03-16 08:37:07', '2021-03-16 08:37:07'),
(6, 'Tạo mới bài viết', 'Tài khoản admin@gmail.com tạo mới bài viết Lớp học yêu thương trên đỉnh Tà Xua vào lúc 21:56 PM ngày 16/03/2021', 'http://127.0.0.1/php_tunhiennhuhoitho/cms/posts/store/text', 'POST', '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/89.0.4389.82 Safari/537.36', 1, '2021-03-16 14:56:57', '2021-03-16 14:56:57'),
(7, 'Sửa bài viết', 'Tài khoản admin@gmail.com sửa bài viết Lớp học yêu thương trên đỉnh Tà Xua vào lúc 22:04 PM ngày 16/03/2021', 'http://127.0.0.1/php_tunhiennhuhoitho/cms/posts/update/1', 'POST', '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/89.0.4389.82 Safari/537.36', 1, '2021-03-16 15:04:18', '2021-03-16 15:04:18'),
(8, 'Sửa bài viết', 'Tài khoản admin@gmail.com sửa bài viết Lớp học yêu thương trên đỉnh Tà Xua vào lúc 22:04 PM ngày 16/03/2021', 'http://127.0.0.1/php_tunhiennhuhoitho/cms/posts/update/1', 'POST', '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/89.0.4389.82 Safari/537.36', 1, '2021-03-16 15:04:24', '2021-03-16 15:04:24'),
(9, 'Sửa bài viết', 'Tài khoản admin@gmail.com sửa bài viết Lớp học yêu thương trên đỉnh Tà Xua vào lúc 22:04 PM ngày 16/03/2021', 'http://127.0.0.1/php_tunhiennhuhoitho/cms/posts/update/1', 'POST', '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/89.0.4389.82 Safari/537.36', 1, '2021-03-16 15:04:28', '2021-03-16 15:04:28'),
(10, 'Đăng nhập', 'Tài khoản admin@gmail.com đăng nhập CMS vào lúc 07:38 AM ngày 17/03/2021', 'http://127.0.0.1/php_tunhiennhuhoitho/cms/login', 'POST', '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/89.0.4389.82 Safari/537.36', 1, '2021-03-17 00:38:06', '2021-03-17 00:38:06'),
(11, 'Đăng nhập', 'Tài khoản admin@gmail.com đăng nhập CMS vào lúc 19:03 PM ngày 17/03/2021', 'http://127.0.0.1/php_tunhiennhuhoitho/cms/login', 'POST', '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/89.0.4389.82 Safari/537.36', 1, '2021-03-17 12:03:32', '2021-03-17 12:03:32'),
(12, 'Đăng nhập', 'Tài khoản admin@gmail.com đăng nhập CMS vào lúc 03:46 AM ngày 18/03/2021', 'http://127.0.0.1/php_tunhiennhuhoitho/cms/login', 'POST', '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/89.0.4389.82 Safari/537.36', 1, '2021-03-17 20:46:28', '2021-03-17 20:46:28'),
(13, 'Đăng nhập', 'Tài khoản admin@gmail.com đăng nhập CMS vào lúc 16:42 PM ngày 21/03/2021', 'http://127.0.0.1/php_tunhiennhuhoitho/cms/login', 'POST', '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/89.0.4389.90 Safari/537.36', 1, '2021-03-21 09:42:35', '2021-03-21 09:42:35'),
(14, 'Tạo mới setting', 'Tài khoản admin@gmail.com tạo mới setting website.config vào lúc 17:17 PM ngày 21/03/2021', 'http://127.0.0.1/php_tunhiennhuhoitho/cms/setting/allowGetDynamicContent', 'POST', '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/89.0.4389.90 Safari/537.36', 1, '2021-03-21 10:17:34', '2021-03-21 10:17:34'),
(15, 'Đăng nhập', 'Tài khoản admin@gmail.com đăng nhập CMS vào lúc 19:15 PM ngày 21/03/2021', 'http://127.0.0.1/php_tunhiennhuhoitho/cms/login', 'POST', '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/89.0.4389.90 Safari/537.36', 1, '2021-03-21 12:15:48', '2021-03-21 12:15:48'),
(16, 'Sửa bài viết', 'Tài khoản admin@gmail.com sửa bài viết Lớp học yêu thương trên đỉnh Tà Xua vào lúc 21:27 PM ngày 21/03/2021', 'http://127.0.0.1/php_tunhiennhuhoitho/cms/posts/update/1', 'POST', '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/89.0.4389.90 Safari/537.36', 1, '2021-03-21 14:27:00', '2021-03-21 14:27:00'),
(17, 'Sửa bài viết', 'Tài khoản admin@gmail.com sửa bài viết Lớp học yêu thương trên đỉnh Tà Xua vào lúc 21:27 PM ngày 21/03/2021', 'http://127.0.0.1/php_tunhiennhuhoitho/cms/posts/update/1', 'POST', '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/89.0.4389.90 Safari/537.36', 1, '2021-03-21 14:27:36', '2021-03-21 14:27:36'),
(18, 'Sửa bài viết', 'Tài khoản admin@gmail.com sửa bài viết Lớp học yêu thương trên đỉnh Tà Xua vào lúc 21:34 PM ngày 21/03/2021', 'http://127.0.0.1/php_tunhiennhuhoitho/cms/posts/update/1', 'POST', '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/89.0.4389.90 Safari/537.36', 1, '2021-03-21 14:34:43', '2021-03-21 14:34:43'),
(19, 'Sửa bài viết', 'Tài khoản admin@gmail.com sửa bài viết Lớp học yêu thương trên đỉnh Tà Xua vào lúc 22:16 PM ngày 21/03/2021', 'http://127.0.0.1/php_tunhiennhuhoitho/cms/posts/update/1', 'POST', '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/89.0.4389.90 Safari/537.36', 1, '2021-03-21 15:16:13', '2021-03-21 15:16:13'),
(20, 'Tạo mới bài viết', 'Tài khoản admin@gmail.com tạo mới bài viết Phát huy sức mạnh nội bộ doanh nghiệp vào lúc 00:32 AM ngày 22/03/2021', 'http://127.0.0.1/php_tunhiennhuhoitho/cms/posts/store/text', 'POST', '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/89.0.4389.90 Safari/537.36', 1, '2021-03-21 17:32:14', '2021-03-21 17:32:14'),
(21, 'Sửa bài viết', 'Tài khoản admin@gmail.com sửa bài viết Phát huy sức mạnh nội bộ doanh nghiệp vào lúc 00:33 AM ngày 22/03/2021', 'http://127.0.0.1/php_tunhiennhuhoitho/cms/posts/update/2', 'POST', '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/89.0.4389.90 Safari/537.36', 1, '2021-03-21 17:33:06', '2021-03-21 17:33:06'),
(22, 'Đăng nhập', 'Tài khoản admin@gmail.com đăng nhập CMS vào lúc 09:03 AM ngày 22/03/2021', 'http://127.0.0.1/php_tunhiennhuhoitho/cms/login', 'POST', '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/89.0.4389.90 Safari/537.36', 1, '2021-03-22 02:03:39', '2021-03-22 02:03:39'),
(23, 'Sửa setting', 'Tài khoản admin@gmail.com sửa setting website.config vào lúc 09:03 AM ngày 22/03/2021', 'http://127.0.0.1/php_tunhiennhuhoitho/cms/setting/allowGetDynamicContent', 'POST', '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/89.0.4389.90 Safari/537.36', 1, '2021-03-22 02:03:55', '2021-03-22 02:03:55'),
(24, 'Đăng nhập', 'Tài khoản admin@gmail.com đăng nhập CMS vào lúc 09:58 AM ngày 22/03/2021', 'http://127.0.0.1/php_tunhiennhuhoitho/cms/login', 'POST', '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/89.0.4389.90 Safari/537.36', 1, '2021-03-22 02:58:26', '2021-03-22 02:58:26'),
(25, 'Đăng nhập', 'Tài khoản nguyenvana@gmail.com đăng nhập CMS vào lúc 10:00 AM ngày 22/03/2021', 'http://127.0.0.1/php_tunhiennhuhoitho/cms/login', 'POST', '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/89.0.4389.90 Safari/537.36', 2, '2021-03-22 03:00:21', '2021-03-22 03:00:21'),
(26, 'Đăng nhập', 'Tài khoản admin@gmail.com đăng nhập CMS vào lúc 10:02 AM ngày 22/03/2021', 'http://127.0.0.1/php_tunhiennhuhoitho/cms/login', 'POST', '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/89.0.4389.90 Safari/537.36', 1, '2021-03-22 03:02:18', '2021-03-22 03:02:18'),
(27, 'Đăng nhập', 'Tài khoản admin@gmail.com đăng nhập CMS vào lúc 11:11 AM ngày 22/03/2021', 'http://127.0.0.1/php_tunhiennhuhoitho/cms/public/login', 'POST', '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/89.0.4389.90 Safari/537.36', 1, '2021-03-22 04:11:31', '2021-03-22 04:11:31'),
(28, 'Sửa bài viết', 'Tài khoản admin@gmail.com sửa bài viết Phát huy sức mạnh nội bộ doanh nghiệp vào lúc 11:14 AM ngày 22/03/2021', 'http://127.0.0.1/php_tunhiennhuhoitho/cms/public/posts/update/2', 'POST', '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/89.0.4389.90 Safari/537.36', 1, '2021-03-22 04:14:43', '2021-03-22 04:14:43'),
(29, 'Sửa bài viết', 'Tài khoản admin@gmail.com sửa bài viết Phát huy sức mạnh nội bộ doanh nghiệp vào lúc 11:16 AM ngày 22/03/2021', 'http://127.0.0.1/php_tunhiennhuhoitho/cms/public/posts/update/2', 'POST', '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/89.0.4389.90 Safari/537.36', 1, '2021-03-22 04:16:55', '2021-03-22 04:16:55'),
(30, 'Sửa bài viết', 'Tài khoản admin@gmail.com sửa bài viết Phát huy sức mạnh nội bộ doanh nghiệp vào lúc 11:18 AM ngày 22/03/2021', 'http://127.0.0.1/php_tunhiennhuhoitho/cms/public/posts/update/2', 'POST', '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/89.0.4389.90 Safari/537.36', 1, '2021-03-22 04:18:56', '2021-03-22 04:18:56'),
(31, 'Sửa bài viết', 'Tài khoản admin@gmail.com sửa bài viết Phát huy sức mạnh nội bộ doanh nghiệp vào lúc 11:19 AM ngày 22/03/2021', 'http://127.0.0.1/php_tunhiennhuhoitho/cms/public/posts/update/2', 'POST', '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/89.0.4389.90 Safari/537.36', 1, '2021-03-22 04:19:32', '2021-03-22 04:19:32'),
(32, 'Sửa bài viết', 'Tài khoản admin@gmail.com sửa bài viết Phát huy sức mạnh nội bộ doanh nghiệp vào lúc 11:19 AM ngày 22/03/2021', 'http://127.0.0.1/php_tunhiennhuhoitho/cms/public/posts/update/2', 'POST', '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/89.0.4389.90 Safari/537.36', 1, '2021-03-22 04:19:47', '2021-03-22 04:19:47'),
(33, 'Đăng nhập', 'Tài khoản admin@gmail.com đăng nhập CMS vào lúc 11:29 AM ngày 22/03/2021', 'http://127.0.0.1/php_tunhiennhuhoitho/cms/public/login', 'POST', '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/89.0.4389.90 Safari/537.36', 1, '2021-03-22 04:29:07', '2021-03-22 04:29:07'),
(34, 'Đăng nhập', 'Tài khoản admin@gmail.com đăng nhập CMS vào lúc 12:49 PM ngày 22/03/2021', 'http://127.0.0.1/php_tunhiennhuhoitho/cms/public/login', 'POST', '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/89.0.4389.90 Safari/537.36', 1, '2021-03-22 05:49:04', '2021-03-22 05:49:04');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `authors`
--

CREATE TABLE `authors` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `share_url` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `avatar` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `content` text COLLATE utf8_unicode_ci DEFAULT NULL,
  `user_id` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `authors`
--

INSERT INTO `authors` (`id`, `name`, `slug`, `share_url`, `avatar`, `content`, `user_id`, `created_at`, `updated_at`) VALUES
(1, 'Ông Đỗ Ngọc Chung', 'ong-do-ngoc-chung', '/ve-chung-toi/ong-do-ngoc-chung', '/2021/03/17/Mask_Group_63.png', '<p>TS ĐỖ NGỌC CHUNG SINH NĂM 1980<br />\r\nTẠI ĐAN PHƯỢNG</p>\r\n\r\n<p>2002<br />\r\nTốt nghiệp Đại học KHTN, ĐHQGHN<br />\r\nNghi&ecirc;n cứu vi&ecirc;n tại Viện Khoa học Vật liệu &ndash; Viện H&agrave;n l&acirc;m Khoa học v&agrave; c&ocirc;ng nghệ Việt Nam</p>\r\n\r\n<p>2006<br />\r\nTốt nghiệp thạc sĩ chuy&ecirc;n ng&agrave;nh Vật liệu<br />\r\nv&agrave; Linh kiện Nano- Trường Đại học C&ocirc;ng nghệ, ĐHQGHN</p>\r\n\r\n<p>2009<br />\r\nGiảng vi&ecirc;n Trường Đại học C&ocirc;ng nghệ - Đại học<br />\r\nQuốc Gia H&agrave; Nội</p>\r\n\r\n<p>2015<br />\r\nHo&agrave;n th&agrave;nh Luận &aacute;n Tiến sĩ chuy&ecirc;n ng&agrave;nh Vật liệu v&agrave; Linh kiện Nano- Trường Đại học C&ocirc;ng nghệ, ĐHQGHN<br />\r\nS&aacute;ng lập C&ocirc;ng ty TNHH Giải ph&aacute;p Năng lượng To&agrave;n Diện<br />\r\nĐạt giải thưởng Techmart Quốc Tế</p>\r\n\r\n<p>2016<br />\r\nPh&oacute; gi&aacute;m đốc Trung t&acirc;m Dịch vụ v&agrave; truyền th&ocirc;ng c&ocirc;ng nghệ - Trung t&acirc;m Ph&aacute;t triển c&ocirc;ng nghệ cao, Viện H&agrave;n l&acirc;m KH&amp;CN Việt Nam<br />\r\nPh&oacute; gi&aacute;m đốc Xưởng cơ kh&iacute; điện tử, Viện H&agrave;n l&acirc;m KH&amp;CN Việt Nam</p>\r\n\r\n<p>2016 - 2019<br />\r\nNhận bằng s&aacute;ng chế cho Thiết bị l&agrave;m rau gi&aacute; đỗ<br />\r\nNhận bằng s&aacute;ng chế Cơ cấu n&eacute;n d&ugrave;ng cho dụng cụ l&agrave;m rau gi&aacute; đỗ<br />\r\nNhận bằng s&aacute;ng chế về M&aacute;y ủ gi&aacute; c&ocirc;ng nghiệp<br />\r\nNhận bằng s&aacute;ng chế &Aacute;o dưỡng kh&iacute;<br />\r\nNhận bằng s&aacute;ng chế Tăm nguy&ecirc;n sinh<br />\r\nĐạt giải thưởng Cuộc thi chứng minh &yacute; tưởng Poc2, Trung t&acirc;m đổi mới s&aacute;ng tạo ứng ph&oacute; với biến đổi kh&iacute; hậu Việt Nam (VCIC), Quỹ WorldBank t&agrave;i trợ.</p>\r\n\r\n<p>2020<br />\r\nS&aacute;ng lập CVV PTE. Ltd, Singapore<br />\r\nS&aacute;ng lập C&ocirc;ng ty cổ phần CVV Việt Nam</p>', '', '2021-03-17 14:06:33', '2021-03-17 14:06:33');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `banners`
--

CREATE TABLE `banners` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `file` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `position` varchar(10) COLLATE utf8_unicode_ci DEFAULT NULL,
  `user_id` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `banners`
--

INSERT INTO `banners` (`id`, `title`, `name`, `file`, `position`, `user_id`, `created_at`, `updated_at`) VALUES
(1, 'Chỉ khi bạn đánh thức được nội lực, thì mới có được sức sống dẻo dai.', 'Banner_TNNHT222.png', '/2021/03/21/Banner_TNNHT222.png', 'homepage', '1', '2021-03-21 09:59:10', '2021-03-21 10:03:46');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `categories`
--

CREATE TABLE `categories` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `share_url` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `description` text COLLATE utf8_unicode_ci NOT NULL,
  `parent_id` int(11) NOT NULL,
  `has_questions` tinyint(4) DEFAULT 0,
  `category_type` varchar(15) COLLATE utf8_unicode_ci DEFAULT NULL,
  `meta_title` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `meta_keyword` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `meta_description` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `is_actived` tinyint(4) DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `categories`
--

INSERT INTO `categories` (`id`, `name`, `slug`, `share_url`, `description`, `parent_id`, `has_questions`, `category_type`, `meta_title`, `meta_keyword`, `meta_description`, `is_actived`, `created_at`, `updated_at`) VALUES
(1, 'Báo chí', 'bao-chi', '/bao-chi', 'Báo chí', 0, 0, NULL, 'Báo chí', 'Báo chí', 'Báo chí', 1, '2021-03-16 14:22:43', '2021-03-16 14:22:43'),
(2, 'Truyền hình', 'truyen-hinh', '/truyen-hinh', 'Truyền hình', 0, 0, NULL, 'Truyền hình', 'Truyền hình', 'Truyền hình', 1, '2021-03-16 14:28:16', '2021-03-16 14:28:16'),
(3, 'Dự án', 'du-an', '/du-an', 'Dự án', 0, 0, NULL, 'Dự án', 'Dự án', 'Dự án', 1, '2021-03-16 14:28:37', '2021-03-16 14:28:37'),
(4, 'Hoạt động', 'hoat-dong', '/hoat-dong', 'Hoạt động', 0, 0, NULL, 'Hoạt động', 'Hoạt động', 'Hoạt động', 1, '2021-03-16 14:29:04', '2021-03-16 14:29:04');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `category_has_posts`
--

CREATE TABLE `category_has_posts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `category_id` mediumint(9) NOT NULL,
  `disease_id` mediumint(9) NOT NULL,
  `post_id` bigint(20) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `category_has_posts`
--

INSERT INTO `category_has_posts` (`id`, `category_id`, `disease_id`, `post_id`, `created_at`, `updated_at`) VALUES
(1, 1, 0, 1, '2021-03-16 14:56:57', '2021-03-21 15:16:13'),
(2, 3, 0, 2, '2021-03-21 17:32:14', '2021-03-22 04:19:47');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `comments`
--

CREATE TABLE `comments` (
  `id` int(10) UNSIGNED NOT NULL,
  `author_name` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `author_phone` varchar(15) COLLATE utf8_unicode_ci DEFAULT NULL,
  `author_email` varchar(30) COLLATE utf8_unicode_ci DEFAULT NULL,
  `author_address` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `author_avatar` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `author_url` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `author_ip` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `author_agent` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `content` text COLLATE utf8_unicode_ci NOT NULL,
  `status` varchar(15) COLLATE utf8_unicode_ci NOT NULL,
  `published_at` varchar(15) COLLATE utf8_unicode_ci DEFAULT NULL,
  `is_deleted` tinyint(3) UNSIGNED DEFAULT 0,
  `deleted_at` varchar(15) COLLATE utf8_unicode_ci DEFAULT NULL,
  `user_id` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `is_closed` tinyint(3) UNSIGNED DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `customers`
--

CREATE TABLE `customers` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `fullname` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `telephone` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `organization` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `position` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `number_of_employees` smallint(5) UNSIGNED DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `customers`
--

INSERT INTO `customers` (`id`, `fullname`, `email`, `telephone`, `organization`, `position`, `number_of_employees`, `created_at`, `updated_at`) VALUES
(1, 'Nguyễn Văn T', 'nguyenvant@gmail.com', '0348092239', 'HN', NULL, 0, '2021-03-17 23:41:33', '2021-03-17 23:41:33'),
(2, 'Nguyễn Văn Tú', 'nguyenvantu@gmail.com', '0987654321', 'HN', NULL, 0, '2021-03-17 23:55:53', '2021-03-17 23:55:53'),
(4, 'Nguyễn Văn Tú', 'nguyenvantu@gmail.com', '0987654321', 'HN', NULL, 0, '2021-03-18 00:00:37', '2021-03-18 00:00:37');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `connection` text COLLATE utf8_unicode_ci NOT NULL,
  `queue` text COLLATE utf8_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `menus`
--

CREATE TABLE `menus` (
  `id` int(10) UNSIGNED NOT NULL,
  `parent_id` int(11) NOT NULL,
  `has_child` tinyint(4) DEFAULT 0,
  `category_id` int(11) DEFAULT NULL,
  `position` varchar(15) COLLATE utf8_unicode_ci NOT NULL,
  `item_url` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `item_title` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `user_id` int(11) NOT NULL,
  `is_actived` tinyint(4) DEFAULT NULL,
  `order` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2016_01_26_115212_create_permissions_table', 2),
(4, '2019_08_19_000000_create_failed_jobs_table', 2),
(5, '2019_09_23_071326_create_categories_table', 2),
(6, '2019_09_30_032513_create_pages_table', 2),
(7, '2019_10_07_112111_create_activities_table', 2),
(8, '2019_11_03_092510_create_posts_table', 2),
(9, '2019_11_03_152516_create_category_has_posts_table', 2),
(10, '2019_11_03_154848_create_post_has_tags_table', 2),
(11, '2019_12_11_105857_create_templates_table', 2),
(12, '2019_12_27_155202_create_tags_table', 2),
(13, '2020_01_06_162935_create_menus_table', 2),
(14, '2020_01_15_105351_create_settings_table', 2),
(15, '2020_06_05_224251_create_sliders_table', 2),
(16, '2019_12_11_074656_create_widgets_table', 3),
(17, '2021_03_17_084018_create_partners_table', 4),
(18, '2021_03_17_100947_create_comments_table', 4),
(19, '2021_03_17_113728_create_authors_table', 4),
(20, '2021_03_17_113808_create_customers_table', 4),
(21, '2021_03_17_132235_create_solutions_table', 4),
(22, '2021_03_18_211240_create_banners_table', 5);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `model_has_permissions`
--

CREATE TABLE `model_has_permissions` (
  `permission_id` int(10) UNSIGNED NOT NULL,
  `model_type` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `model_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `model_has_roles`
--

CREATE TABLE `model_has_roles` (
  `role_id` int(10) UNSIGNED NOT NULL,
  `model_type` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `model_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `pages`
--

CREATE TABLE `pages` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `excerpt` longtext COLLATE utf8_unicode_ci DEFAULT NULL,
  `plain_text` longtext COLLATE utf8_unicode_ci NOT NULL,
  `content` longtext COLLATE utf8_unicode_ci NOT NULL,
  `author_name` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `user_id` int(11) NOT NULL,
  `slug` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `status` varchar(15) COLLATE utf8_unicode_ci NOT NULL,
  `category_id` int(11) NOT NULL,
  `thumbnail_url` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `display_order` bigint(20) DEFAULT NULL,
  `latitude` varchar(15) COLLATE utf8_unicode_ci DEFAULT NULL,
  `longitude` varchar(15) COLLATE utf8_unicode_ci DEFAULT NULL,
  `page_type` varchar(15) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `partners`
--

CREATE TABLE `partners` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `logo` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `url` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `type` tinyint(3) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `partners`
--

INSERT INTO `partners` (`id`, `name`, `logo`, `url`, `type`, `created_at`, `updated_at`) VALUES
(1, 'Goldsun', '/2021/03/21/Mask_Group_15.png', 'http://www.goldsun.vn/', 2, '2021-03-21 14:04:47', '2021-03-21 14:08:21');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `password_resets`
--

CREATE TABLE `password_resets` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `permissions`
--

CREATE TABLE `permissions` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `group_name` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `description` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `guard_name` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `posts`
--

CREATE TABLE `posts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `share_url` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `slug` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `excerpt` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `plain_text` text COLLATE utf8_unicode_ci NOT NULL,
  `content` text COLLATE utf8_unicode_ci NOT NULL,
  `author_name` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `user_id` int(11) NOT NULL,
  `status` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `published_at` varchar(15) COLLATE utf8_unicode_ci DEFAULT NULL,
  `thumbnail_url` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `top_background_url` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `is_comment` tinyint(4) DEFAULT 1,
  `comment_count` smallint(6) DEFAULT 0,
  `post_type` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `category_type` varchar(20) COLLATE utf8_unicode_ci DEFAULT NULL,
  `price` varchar(20) COLLATE utf8_unicode_ci DEFAULT NULL,
  `address` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `province` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `district` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `subdistrict` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `banner_image` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `banner_url` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `banner_template` text COLLATE utf8_unicode_ci DEFAULT NULL,
  `category_id` int(11) DEFAULT 0,
  `disease_id` int(11) DEFAULT 0,
  `is_deleted` tinyint(4) DEFAULT 0,
  `deleted_at` varchar(15) COLLATE utf8_unicode_ci DEFAULT NULL,
  `is_highlight` tinyint(4) DEFAULT 0,
  `showon_homepage` tinyint(4) DEFAULT 0,
  `time_expired_deal` varchar(15) COLLATE utf8_unicode_ci DEFAULT NULL,
  `meta_title` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `meta_keyword` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `meta_description` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `posts`
--

INSERT INTO `posts` (`id`, `title`, `share_url`, `slug`, `excerpt`, `plain_text`, `content`, `author_name`, `user_id`, `status`, `published_at`, `thumbnail_url`, `top_background_url`, `is_comment`, `comment_count`, `post_type`, `category_type`, `price`, `address`, `province`, `district`, `subdistrict`, `banner_image`, `banner_url`, `banner_template`, `category_id`, `disease_id`, `is_deleted`, `deleted_at`, `is_highlight`, `showon_homepage`, `time_expired_deal`, `meta_title`, `meta_keyword`, `meta_description`, `created_at`, `updated_at`) VALUES
(1, 'Lớp học yêu thương trên đỉnh Tà Xua', '/hoat-dong/lop-hoc-yeu-thuong-tren-dinh-ta-xua.html', 'lop-hoc-yeu-thuong-tren-dinh-ta-xua', 'Lớp học yêu thương trên đỉnh Tà Xua', '\r\n\r\nCVV Việt Nam l&agrave; c&ocirc;ng ty c&ocirc;ng nghệ được s&aacute;ng lập bởi Tiến sĩ, Doanh nh&acirc;n Đỗ Ngọc Chung v&agrave; c&aacute;c đồng sự. Với kinh nghiệm 10 năm l&agrave;m việc tại viện H&agrave;n l&acirc;m khoa học Việt Nam, 07 năm l&agrave; Giảng vi&ecirc;n Đại học C&ocirc;ng nghệ ĐHQGHN, v&agrave; rất nhiều sản phẩm nghi&ecirc;n cứu khoa học đ&atilde; được thương mại h&oacute;a th&agrave;nh c&ocirc;ng, TS Đỗ Ngọc Chung mong muốn x&acirc;y dựng một điểm hội tụ c&aacute;c chuy&ecirc;n gia về c&ocirc;ng nghệ để biến những c&ocirc;ng tr&igrave;nh nghi&ecirc;n cứu khoa học sớm đi v&agrave;o thực tiễn, phục vụ cộng đồng. Một trong những gi&aacute; trị cốt l&otilde;i lớn nhất v&agrave; xuy&ecirc;n suốt tại CVV l&agrave; gi&aacute; trị hướng tới cộng đồng, ứng dụng c&ocirc;ng nghệ để giải quyết c&aacute;c vấn đề của x&atilde; hội, đem đến hạnh ph&uacute;c cho con người v&agrave; sự thịnh vượng cho quốc gia.\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\nCVV Việt Nam l&agrave; c&ocirc;ng ty c&ocirc;ng nghệ được s&aacute;ng lập bởi Tiến sĩ, Doanh nh&acirc;n Đỗ Ngọc Chung v&agrave; c&aacute;c đồng sự. Với kinh nghiệm 10 năm l&agrave;m việc tại viện H&agrave;n l&acirc;m khoa học Việt Nam, 07 năm l&agrave; Giảng vi&ecirc;n Đại học C&ocirc;ng nghệ ĐHQGHN, v&agrave; rất nhiều sản phẩm nghi&ecirc;n cứu khoa học đ&atilde; được thương mại h&oacute;a th&agrave;nh c&ocirc;ng, TS Đỗ Ngọc Chung mong muốn x&acirc;y dựng một điểm hội tụ c&aacute;c chuy&ecirc;n gia về c&ocirc;ng nghệ để biến những c&ocirc;ng tr&igrave;nh nghi&ecirc;n cứu khoa học sớm đi v&agrave;o thực tiễn, phục vụ cộng đồng. Một trong những gi&aacute; trị cốt l&otilde;i lớn nhất v&agrave; xuy&ecirc;n suốt tại CVV l&agrave; gi&aacute; trị hướng tới cộng đồng, ứng dụng c&ocirc;ng nghệ để giải quyết c&aacute;c vấn đề của x&atilde; hội, đem đến hạnh ph&uacute;c cho con người v&agrave; sự thịnh vượng cho quốc gia.\r\n\r\n\r\n\r\n\r\nXem th&ecirc;m về ch&uacute;ng t&ocirc;i\r\n', '<div class=\"row\">\r\n<div class=\"col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12\">\r\n<p>CVV Việt Nam l&agrave; c&ocirc;ng ty c&ocirc;ng nghệ được s&aacute;ng lập bởi Tiến sĩ, Doanh nh&acirc;n Đỗ Ngọc Chung v&agrave; c&aacute;c đồng sự. Với kinh nghiệm 10 năm l&agrave;m việc tại viện H&agrave;n l&acirc;m khoa học Việt Nam, 07 năm l&agrave; Giảng vi&ecirc;n Đại học C&ocirc;ng nghệ ĐHQGHN, v&agrave; rất nhiều sản phẩm nghi&ecirc;n cứu khoa học đ&atilde; được thương mại h&oacute;a th&agrave;nh c&ocirc;ng, TS Đỗ Ngọc Chung mong muốn x&acirc;y dựng một điểm hội tụ c&aacute;c chuy&ecirc;n gia về c&ocirc;ng nghệ để biến những c&ocirc;ng tr&igrave;nh nghi&ecirc;n cứu khoa học sớm đi v&agrave;o thực tiễn, phục vụ cộng đồng. Một trong những gi&aacute; trị cốt l&otilde;i lớn nhất v&agrave; xuy&ecirc;n suốt tại CVV l&agrave; gi&aacute; trị hướng tới cộng đồng, ứng dụng c&ocirc;ng nghệ để giải quyết c&aacute;c vấn đề của x&atilde; hội, đem đến hạnh ph&uacute;c cho con người v&agrave; sự thịnh vượng cho quốc gia.</p>\r\n\r\n<div class=\"row mb-2\">\r\n<div class=\"col-12 col-sm-12 col-md-12 col-lg-8 col-xl-8\"><img alt=\"\" height=\"541px\" src=\"http://127.0.0.1/php_tunhiennhuhoitho/public/images/graphics/Mask_Group_43.png\" srcset=\"http://127.0.0.1/php_tunhiennhuhoitho/public/images/graphics/Mask_Group_43.png 1x, http://127.0.0.1/php_tunhiennhuhoitho/public/images/graphics/Mask_Group_43@2x.png 2x\" /></div>\r\n\r\n<div class=\"col-12 col-sm-12 col-md-12 col-lg-4 col-xl-4 pl-0\">\r\n<div class=\"row\">\r\n<div class=\"col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12\"><img alt=\"\" src=\"http://127.0.0.1/php_tunhiennhuhoitho/public/images/graphics/Mask_Group_44.png\" srcset=\"http://127.0.0.1/php_tunhiennhuhoitho/public/images/graphics/Mask_Group_44.png 1x, http://127.0.0.1/php_tunhiennhuhoitho/public/images/graphics/Mask_Group_44@2x.png 2x\" /></div>\r\n\r\n<div class=\"col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 mt-1\"><img alt=\"\" src=\"http://127.0.0.1/php_tunhiennhuhoitho/public/images/graphics/Mask_Group_44.png\" srcset=\"http://127.0.0.1/php_tunhiennhuhoitho/public/images/graphics/Mask_Group_44.png 1x, http://127.0.0.1/php_tunhiennhuhoitho/public/images/graphics/Mask_Group_44@2x.png 2x\" /></div>\r\n</div>\r\n</div>\r\n</div>\r\n\r\n<p>CVV Việt Nam l&agrave; c&ocirc;ng ty c&ocirc;ng nghệ được s&aacute;ng lập bởi Tiến sĩ, Doanh nh&acirc;n Đỗ Ngọc Chung v&agrave; c&aacute;c đồng sự. Với kinh nghiệm 10 năm l&agrave;m việc tại viện H&agrave;n l&acirc;m khoa học Việt Nam, 07 năm l&agrave; Giảng vi&ecirc;n Đại học C&ocirc;ng nghệ ĐHQGHN, v&agrave; rất nhiều sản phẩm nghi&ecirc;n cứu khoa học đ&atilde; được thương mại h&oacute;a th&agrave;nh c&ocirc;ng, TS Đỗ Ngọc Chung mong muốn x&acirc;y dựng một điểm hội tụ c&aacute;c chuy&ecirc;n gia về c&ocirc;ng nghệ để biến những c&ocirc;ng tr&igrave;nh nghi&ecirc;n cứu khoa học sớm đi v&agrave;o thực tiễn, phục vụ cộng đồng. Một trong những gi&aacute; trị cốt l&otilde;i lớn nhất v&agrave; xuy&ecirc;n suốt tại CVV l&agrave; gi&aacute; trị hướng tới cộng đồng, ứng dụng c&ocirc;ng nghệ để giải quyết c&aacute;c vấn đề của x&atilde; hội, đem đến hạnh ph&uacute;c cho con người v&agrave; sự thịnh vượng cho quốc gia.</p>\r\n</div>\r\n</div>\r\n\r\n<div class=\"row\">\r\n<div class=\"col-12 col-sm-12 col-md-12 col-lg-5 col-xl-5 view-more m-auto text-center\"><a href=\"\" title=\"Xem thêm về chúng tôi\">Xem th&ecirc;m về ch&uacute;ng t&ocirc;i</a></div>\r\n</div>', 'Admin', 1, 'publish', '1615906192', '/2021/03/16/Mask_Group_40.png', NULL, 1, 0, 'text', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, 0, 0, NULL, 0, 0, NULL, 'Lớp học yêu thương trên đỉnh Tà Xua', 'Lớp học yêu thương trên đỉnh Tà Xua', 'Lớp học yêu thương trên đỉnh Tà Xua', '2021-03-16 14:56:57', '2021-03-21 15:16:13'),
(2, 'Phát huy sức mạnh nội bộ doanh nghiệp', '/hoat-dong/phat-huy-suc-manh-noi-bo-doanh-nghiep.html', 'phat-huy-suc-manh-noi-bo-doanh-nghiep', 'Phát huy sức mạnh nội bộ doanh nghiệp', '\r\n\r\nCVV Việt Nam l&agrave; c&ocirc;ng ty c&ocirc;ng nghệ được s&aacute;ng lập bởi Tiến sĩ, Doanh nh&acirc;n Đỗ Ngọc Chung v&agrave; c&aacute;c đồng sự. Với kinh nghiệm 10 năm l&agrave;m việc tại viện H&agrave;n l&acirc;m khoa học Việt Nam, 07 năm l&agrave; Giảng vi&ecirc;n Đại học C&ocirc;ng nghệ ĐHQGHN, v&agrave; rất nhiều sản phẩm nghi&ecirc;n cứu khoa học đ&atilde; được thương mại h&oacute;a th&agrave;nh c&ocirc;ng, TS Đỗ Ngọc Chung mong muốn x&acirc;y dựng một điểm hội tụ c&aacute;c chuy&ecirc;n gia về c&ocirc;ng nghệ để biến những c&ocirc;ng tr&igrave;nh nghi&ecirc;n cứu khoa học sớm đi v&agrave;o thực tiễn, phục vụ cộng đồng. Một trong những gi&aacute; trị cốt l&otilde;i lớn nhất v&agrave; xuy&ecirc;n suốt tại CVV l&agrave; gi&aacute; trị hướng tới cộng đồng, ứng dụng c&ocirc;ng nghệ để giải quyết c&aacute;c vấn đề của x&atilde; hội, đem đến hạnh ph&uacute;c cho con người v&agrave; sự thịnh vượng cho quốc gia.\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\nCVV Việt Nam l&agrave; c&ocirc;ng ty c&ocirc;ng nghệ được s&aacute;ng lập bởi Tiến sĩ, Doanh nh&acirc;n Đỗ Ngọc Chung v&agrave; c&aacute;c đồng sự. Với kinh nghiệm 10 năm l&agrave;m việc tại viện H&agrave;n l&acirc;m khoa học Việt Nam, 07 năm l&agrave; Giảng vi&ecirc;n Đại học C&ocirc;ng nghệ ĐHQGHN, v&agrave; rất nhiều sản phẩm nghi&ecirc;n cứu khoa học đ&atilde; được thương mại h&oacute;a th&agrave;nh c&ocirc;ng, TS Đỗ Ngọc Chung mong muốn x&acirc;y dựng một điểm hội tụ c&aacute;c chuy&ecirc;n gia về c&ocirc;ng nghệ để biến những c&ocirc;ng tr&igrave;nh nghi&ecirc;n cứu khoa học sớm đi v&agrave;o thực tiễn, phục vụ cộng đồng. Một trong những gi&aacute; trị cốt l&otilde;i lớn nhất v&agrave; xuy&ecirc;n suốt tại CVV l&agrave; gi&aacute; trị hướng tới cộng đồng, ứng dụng c&ocirc;ng nghệ để giải quyết c&aacute;c vấn đề của x&atilde; hội, đem đến hạnh ph&uacute;c cho con người v&agrave; sự thịnh vượng cho quốc gia.\r\n\r\n\r\n\r\n\r\nXem th&ecirc;m về ch&uacute;ng t&ocirc;i\r\n', '<div class=\"row\">\r\n<div class=\"col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12\">\r\n<p>CVV Việt Nam l&agrave; c&ocirc;ng ty c&ocirc;ng nghệ được s&aacute;ng lập bởi Tiến sĩ, Doanh nh&acirc;n Đỗ Ngọc Chung v&agrave; c&aacute;c đồng sự. Với kinh nghiệm 10 năm l&agrave;m việc tại viện H&agrave;n l&acirc;m khoa học Việt Nam, 07 năm l&agrave; Giảng vi&ecirc;n Đại học C&ocirc;ng nghệ ĐHQGHN, v&agrave; rất nhiều sản phẩm nghi&ecirc;n cứu khoa học đ&atilde; được thương mại h&oacute;a th&agrave;nh c&ocirc;ng, TS Đỗ Ngọc Chung mong muốn x&acirc;y dựng một điểm hội tụ c&aacute;c chuy&ecirc;n gia về c&ocirc;ng nghệ để biến những c&ocirc;ng tr&igrave;nh nghi&ecirc;n cứu khoa học sớm đi v&agrave;o thực tiễn, phục vụ cộng đồng. Một trong những gi&aacute; trị cốt l&otilde;i lớn nhất v&agrave; xuy&ecirc;n suốt tại CVV l&agrave; gi&aacute; trị hướng tới cộng đồng, ứng dụng c&ocirc;ng nghệ để giải quyết c&aacute;c vấn đề của x&atilde; hội, đem đến hạnh ph&uacute;c cho con người v&agrave; sự thịnh vượng cho quốc gia.</p>\r\n\r\n<div class=\"row mb-2\">\r\n<div class=\"col-12 col-sm-12 col-md-12 col-lg-8 col-xl-8\"><img alt=\"\" height=\"541px\" src=\"http://127.0.0.1/php_tunhiennhuhoitho/public/images/graphics/Mask_Group_43.png\" srcset=\"http://127.0.0.1/php_tunhiennhuhoitho/public/images/graphics/Mask_Group_43.png 1x, http://127.0.0.1/php_tunhiennhuhoitho/public/images/graphics/Mask_Group_43@2x.png 2x\" /></div>\r\n\r\n<div class=\"col-12 col-sm-12 col-md-12 col-lg-4 col-xl-4 pl-0\">\r\n<div class=\"row\">\r\n<div class=\"col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12\"><img alt=\"\" src=\"http://127.0.0.1/php_tunhiennhuhoitho/public/images/graphics/Mask_Group_44.png\" srcset=\"http://127.0.0.1/php_tunhiennhuhoitho/public/images/graphics/Mask_Group_44.png 1x, http://127.0.0.1/php_tunhiennhuhoitho/public/images/graphics/Mask_Group_44@2x.png 2x\" /></div>\r\n\r\n<div class=\"col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 mt-1\"><img alt=\"\" src=\"http://127.0.0.1/php_tunhiennhuhoitho/public/images/graphics/Mask_Group_44.png\" srcset=\"http://127.0.0.1/php_tunhiennhuhoitho/public/images/graphics/Mask_Group_44.png 1x, http://127.0.0.1/php_tunhiennhuhoitho/public/images/graphics/Mask_Group_44@2x.png 2x\" /></div>\r\n</div>\r\n</div>\r\n</div>\r\n\r\n<p>CVV Việt Nam l&agrave; c&ocirc;ng ty c&ocirc;ng nghệ được s&aacute;ng lập bởi Tiến sĩ, Doanh nh&acirc;n Đỗ Ngọc Chung v&agrave; c&aacute;c đồng sự. Với kinh nghiệm 10 năm l&agrave;m việc tại viện H&agrave;n l&acirc;m khoa học Việt Nam, 07 năm l&agrave; Giảng vi&ecirc;n Đại học C&ocirc;ng nghệ ĐHQGHN, v&agrave; rất nhiều sản phẩm nghi&ecirc;n cứu khoa học đ&atilde; được thương mại h&oacute;a th&agrave;nh c&ocirc;ng, TS Đỗ Ngọc Chung mong muốn x&acirc;y dựng một điểm hội tụ c&aacute;c chuy&ecirc;n gia về c&ocirc;ng nghệ để biến những c&ocirc;ng tr&igrave;nh nghi&ecirc;n cứu khoa học sớm đi v&agrave;o thực tiễn, phục vụ cộng đồng. Một trong những gi&aacute; trị cốt l&otilde;i lớn nhất v&agrave; xuy&ecirc;n suốt tại CVV l&agrave; gi&aacute; trị hướng tới cộng đồng, ứng dụng c&ocirc;ng nghệ để giải quyết c&aacute;c vấn đề của x&atilde; hội, đem đến hạnh ph&uacute;c cho con người v&agrave; sự thịnh vượng cho quốc gia.</p>\r\n</div>\r\n</div>\r\n\r\n<div class=\"row\">\r\n<div class=\"col-12 col-sm-12 col-md-12 col-lg-5 col-xl-5 view-more m-auto text-center\"><a href=\"\" title=\"Xem thêm về chúng tôi\">Xem th&ecirc;m về ch&uacute;ng t&ocirc;i</a></div>\r\n</div>', 'Admin', 1, 'publish', '1616347867', '/2021/03/22/Banner_TNNHT222.png', NULL, 1, 0, 'text', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 3, 0, 0, NULL, 0, 0, NULL, 'Phát huy sức mạnh nội bộ doanh nghiệp', 'Phát huy sức mạnh nội bộ doanh nghiệp', 'Phát huy sức mạnh nội bộ doanh nghiệp', '2021-03-21 17:32:14', '2021-03-22 04:19:47');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `post_has_tags`
--

CREATE TABLE `post_has_tags` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `post_id` bigint(20) NOT NULL,
  `tag_id` bigint(20) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `post_has_tags`
--

INSERT INTO `post_has_tags` (`id`, `post_id`, `tag_id`, `created_at`, `updated_at`) VALUES
(1, 2, 1, '2021-03-21 17:32:14', '2021-03-22 04:19:47'),
(2, 2, 2, '2021-03-21 17:32:14', '2021-03-22 04:19:47');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `roles`
--

CREATE TABLE `roles` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `description` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `guard_name` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `role_has_permissions`
--

CREATE TABLE `role_has_permissions` (
  `permission_id` int(10) UNSIGNED NOT NULL,
  `role_id` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `settings`
--

CREATE TABLE `settings` (
  `id` int(10) UNSIGNED NOT NULL,
  `key` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `value` text COLLATE utf8_unicode_ci NOT NULL,
  `user_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `settings`
--

INSERT INTO `settings` (`id`, `key`, `value`, `user_id`, `created_at`, `updated_at`) VALUES
(1, 'footer_info', '{\"company_contact\":null,\"telephone_contact\":\"0964 783 913\",\"fax_contact\":null,\"website_name\":null,\"website_contact\":null,\"email_contact\":null,\"address_contact\":\"V\\u0103n ph\\u00f2ng HN - S\\u1ed1 16 - TT7A - Khu \\u0111\\u00f4 th\\u1ecb \\u0110\\u1ea1i Kim, Ho\\u00e0ng Mai, H\\u00e0 N\\u1ed9i\",\"timer_support\":null,\"logo_header_company\":null,\"logo_company\":null,\"copyright_left\":null,\"copyright_right\":null,\"facebook\":\"https:\\/\\/www.facebook.com\\/\",\"youtube\":\"https:\\/\\/www.youtube.com\\/\",\"instagram\":\"https:\\/\\/www.instagram.com\\/\"}', 1, '2021-03-16 07:47:23', '2021-03-16 08:03:59'),
(2, 'website.config', '{\"allow_get_dynamic_content\":0}', 1, '2021-03-21 10:17:34', '2021-03-22 02:03:55');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `sliders`
--

CREATE TABLE `sliders` (
  `id` int(10) UNSIGNED NOT NULL,
  `banner_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `banner_file` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `banner_link` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `solutions`
--

CREATE TABLE `solutions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `share_url` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `icon` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `excerpt` text COLLATE utf8_unicode_ci DEFAULT NULL,
  `user_id` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `solutions`
--

INSERT INTO `solutions` (`id`, `name`, `slug`, `share_url`, `icon`, `excerpt`, `user_id`, `created_at`, `updated_at`) VALUES
(1, 'ÁP DỤNG CHO DOANH NGHIỆP', 'ap-dung-cho-doanh-nghiep', '/giai-phap/ap-dung-cho-doanh-nghiep', '/2021/03/18/Asset_1.png', 'Vivamus lectus arcu, commodo sed turpis sit amet, consectetur dapibus massa. Vivamus lectus arcu, commodo sed turpis sit amet, consectetur dapibus massa.</p>', '1', '2021-03-17 21:40:00', '2021-03-21 18:55:24');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tags`
--

CREATE TABLE `tags` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `description` text COLLATE utf8_unicode_ci DEFAULT NULL,
  `meta_title` text COLLATE utf8_unicode_ci DEFAULT NULL,
  `meta_keyword` text COLLATE utf8_unicode_ci DEFAULT NULL,
  `meta_description` text COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `tags`
--

INSERT INTO `tags` (`id`, `name`, `slug`, `description`, `meta_title`, `meta_keyword`, `meta_description`, `created_at`, `updated_at`) VALUES
(1, 'nội bộ', 'noi-bo', 'nội bộ', 'nội bộ', 'nội bộ', 'nội bộ', '2021-03-21 17:32:14', '2021-03-21 17:32:14'),
(2, 'doanh nghiệp', 'doanh-nghiep', 'doanh nghiệp', 'doanh nghiệp', 'doanh nghiệp', 'doanh nghiệp', '2021-03-21 17:32:14', '2021-03-21 17:32:14');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `templates`
--

CREATE TABLE `templates` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `key` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `content` longtext COLLATE utf8_unicode_ci DEFAULT NULL,
  `data_template` longtext COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `role` varchar(10) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `role`, `created_at`, `updated_at`) VALUES
(1, 'Admin', 'admin@gmail.com', NULL, '$2y$10$l14KOZVp3d1zGz9Rn0z.nu92CZ/Sthg/FoZFJqnPsHaGmB6QfxwnW', NULL, 'admin', '2021-03-09 02:54:12', '2021-03-09 02:54:12'),
(2, 'Nguyễn Văn A', 'nguyenvana@gmail.com', NULL, '$2y$10$hH5q/bMKL10bd7L0REm13eXYb8XCfDZfgi2cq3ROKy5Dt632.gWPS', NULL, NULL, '2021-03-17 00:40:24', '2021-03-17 00:41:05');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `widgets`
--

CREATE TABLE `widgets` (
  `id` int(10) UNSIGNED NOT NULL,
  `user_id` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `template_id` int(11) NOT NULL,
  `description` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `position` varchar(15) COLLATE utf8_unicode_ci NOT NULL,
  `key` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `type` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `content` longtext COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `widgets`
--

INSERT INTO `widgets` (`id`, `user_id`, `name`, `template_id`, `description`, `position`, `key`, `type`, `content`, `created_at`, `updated_at`) VALUES
(1, 1, 'homepage', 0, NULL, 'header_banner', 'widget.homepage.header_banner', 'static', '<style type=\"text/css\">#header {\r\n        height: 852.594px;\r\n        padding-top: 0 !important;\r\n        background: url(http://222.252.26.108:9980/source/public/images/graphics/Banner_TNNHT222.png) no-repeat top left;\r\n        background-position-x: 60%;\r\n    }\r\n\r\n    #header .top{\r\n        width: 90%;\r\n        margin: 0 auto !important;\r\n    }\r\n\r\n    #header.  {\r\n        height: 706px;\r\n    }\r\n\r\n    #header ul {\r\n        margin-top: 20px;\r\n        margin-left: 20px;\r\n        list-style: none;\r\n    }\r\n\r\n    #header ul.menu li {\r\n        float: left;\r\n        margin-right: 40px;\r\n    }\r\n\r\n    #header ul.menu li.active {\r\n        position: relative;\r\n    }\r\n\r\n    #header ul.menu li.active:after {\r\n        content: \"\";\r\n        display: block;\r\n        width: 90%;\r\n        height: 3px;\r\n        background: #D60F0F;\r\n        position: absolute;\r\n        bottom: -10px;\r\n        left: 50%;\r\n        transform: translateX(-50%);\r\n    }\r\n\r\n    #header ul.menu li a {\r\n        color: #FFF;\r\n        font-size: 14px;\r\n    }\r\n\r\n    #header ul.contact li {\r\n        float: right;\r\n        margin-right: 3%;\r\n    }\r\n\r\n    #header ul.contact li.first {\r\n        background-color: #FFF;\r\n        border-radius: 20px;\r\n        padding: 2px 18px;\r\n        font-weight: bold;\r\n    }\r\n\r\n    #header ul.contact li.first a {\r\n        color: #DA0404;\r\n    }\r\n\r\n    #navigation ul.contact li.first {\r\n        background-color: #DA0404;\r\n    }\r\n\r\n    #navigation ul.contact li.first a {\r\n        color: #FFF;\r\n    }\r\n\r\n    #header ul.contact img {\r\n        height: 25px;\r\n    }\r\n\r\n    .homev2 .hero-content__name {\r\n        width: auto;\r\n    }\r\n\r\n    .TNG_i_t_vn_min_ph_be_Class {\r\n        text-align: center;\r\n        font-style: normal;\r\n        font-weight: bold;\r\n        font-size: 13px;\r\n        color: #2F318C;\r\n        text-transform: uppercase;\r\n        line-height: 70px;\r\n        margin-right: 15px;\r\n    }\r\n\r\n    .btn_call_247 {\r\n        width: 200px;\r\n        height: 44px;\r\n        line-height: 39px;\r\n        border-radius: 25px;\r\n        border: 2px solid #2F318C;\r\n        background-color: #2F318C;\r\n        margin-top: 10px;\r\n        font-size: 21px;\r\n        color: #FFF !important;\r\n        font-weight: bold;\r\n        margin-right: 15px;\r\n    }\r\n\r\n    .ic_call_24px_fe {\r\n        margin: 10px 7px 10px 15px;\r\n    }\r\n\r\n    .Group_677_i {\r\n        padding: 10px 35px;\r\n        border-radius: 25px;\r\n        background-color: #c70000;\r\n        margin-top: 10px;\r\n        width: 235px;\r\n        text-align: center;\r\n    }\r\n\r\n    .Group_677_i a {\r\n        font-size: 21px;\r\n        color: #FFF;\r\n        font-weight: bold;\r\n    }\r\n\r\n    .Group_677_i a:hover {\r\n        color: #FFF;\r\n    }\r\n\r\n    .Rectangle_178 {\r\n        margin-top: 100px;\r\n        margin-bottom: 20px;\r\n        overflow: visible;\r\n        width: 129px;\r\n        height: 9px;\r\n        left: 896px;\r\n        top: 169px;\r\n    }\r\n\r\n    .Rectangle_178_Class {\r\n        fill: rgba(255, 52, 52, 1);\r\n    }\r\n\r\n    #header h2 {\r\n        color: #FFF;\r\n        font-size: 45px;\r\n        line-height: 57px;\r\n        font-family: Spectral;\r\n        font-weight: normal;\r\n    }\r\n\r\n    #header h2# {\r\n        text-align: left !important;\r\n        margin-top: 190px;\r\n        font-size: 65px;\r\n        line-height: 80px;\r\n        position: relative;\r\n        font-family: Spectral;\r\n    }\r\n\r\n    #header h2#:after {\r\n        content: \"\";\r\n        display: block;\r\n        width: 129px;\r\n        height: 9px;\r\n        background: #D60F0F;\r\n        position: absolute;\r\n        top: -35px;\r\n        left: 5%;\r\n        transform: translateX(-50%);\r\n    }\r\n\r\n    #header h2#solution:after {\r\n        display: none;\r\n    }\r\n\r\n    .Rectangle_193 {\r\n        height: 160px;\r\n        width: 10px;\r\n        margin-right: 10px;\r\n        float: left;\r\n        margin-top: 150px;\r\n    }\r\n\r\n    .Rectangle_193_Class {\r\n        fill: rgba(255, 52, 52, 1);\r\n        height: 160px;\r\n        width: 8px;\r\n    }\r\n\r\n    .Rectangle_193.solution {\r\n        height: 220px;\r\n        margin-top: 195px;\r\n    }\r\n\r\n    .Rectangle_193_Class.solution {\r\n        height: 220px;\r\n    }\r\n\r\n    #navigation {\r\n        width: 90%;\r\n        margin: auto !important;\r\n        z-index: 2;\r\n    }\r\n\r\n    /* The sticky class is added to the header with JS when it reaches its scroll position */\r\n    .sticky {\r\n        position: fixed;\r\n        top: 0;\r\n        width: 100% !important;\r\n        padding: 0 5%;\r\n        background-color: #FFF;\r\n        z-index: 1;\r\n    }\r\n\r\n    /* Add some top padding to the page content to prevent sudden quick movement (as the header gets a new position at the top of the page (position:fixed and top:0) */\r\n    .sticky + .content {\r\n        padding-top: 102px;\r\n    }\r\n\r\n    #navigation ul.menu li a {\r\n        color: #393939;\r\n    }\r\n\r\n    /** Mobile **/\r\n    @media (max-width: 991.98px) {\r\n        .homev2 .header {\r\n            background-color: rgba(38, 40, 144, 1) !important;\r\n            height: auto;\r\n            padding: 0;\r\n        }\r\n\r\n        .homev2 .heading-mobile__in .hero-content__name {\r\n            margin-right: 0;\r\n        }\r\n\r\n        .homev2 .header .hotline__icon {\r\n            width: 100%;\r\n            margin: 15px;\r\n        }\r\n\r\n        .homev2 .heading-mobile__in .hero-content__name {\r\n            width: 50% !important;\r\n        }\r\n\r\n        .hero-content__name {\r\n            margin: 10px 0;\r\n        }\r\n\r\n        #header ul.menu li {\r\n            margin-bottom: 10px;\r\n        }\r\n\r\n        #header ul.contact li.first {\r\n            margin-right: 40px;\r\n        }\r\n\r\n        #navigation {\r\n            width: 100%;\r\n        }\r\n    }\r\n</style>\r\n<header id=\"header\">\r\n<div class=\"row\" id=\"navigation\" style=\"display:none\">\r\n<div class=\"col-12 col-sm-12 col-md-12 col-lg-2 col-xl-2\">\r\n<h1 class=\"hero-content__name\"><a href=\"http://222.252.26.108:9980/source/public\" title=\"\"><img alt=\"Tự nhiên như hơi thở\" src=\"http://222.252.26.108:9980/source/public/images/graphics/logo_pc_s.png\" srcset=\"http://222.252.26.108:9980/source/public/images/graphics/logo_pc_s.png 1x\" width=\"152px\" /> </a></h1>\r\n</div>\r\n\r\n<div class=\"col-12 col-sm-12 col-md-12 col-lg-5 col-xl-5\">\r\n<ul class=\"menu\">\r\n	<li><a href=\"http://222.252.26.108:9980/source/public/ve-chung-toi\" title=\"Về chúng tôi\">Về ch&uacute;ng t&ocirc;i</a></li>\r\n	<li><a href=\"http://222.252.26.108:9980/source/public/hoat-dong\" title=\"Hoạt động\">Hoạt động</a></li>\r\n	<li><a href=\"http://222.252.26.108:9980/source/public/giai-phap\" title=\"Liên hệ\">Li&ecirc;n hệ</a></li>\r\n</ul>\r\n</div>\r\n\r\n<div class=\"col-12 col-sm-12 col-md-12 col-lg-5 col-xl-5\">\r\n<ul class=\"contact w-100\">\r\n	<li class=\"ml-2 first\"><a href=\"tel:0964783913\" title=\"Hotline\"><img alt=\"Hotline\" src=\"http://222.252.26.108:9980/source/public/images/graphics/btn_call_247_s.png\" srcset=\"http://222.252.26.108:9980/source/public/images/graphics/btn_call_247_s.png 1x\" /> 0964 783 913 </a></li>\r\n	<li><a href=\"javascript:void(0)\" title=\"Instagram\"><img alt=\"Instagram\" src=\"http://222.252.26.108:9980/source/public/images/graphics/ic-instagram_s.png\" srcset=\"http://222.252.26.108:9980/source/public/images/graphics/ic-instagram_s.png 1x\" /> </a></li>\r\n	<li><a href=\"javascript:void(0)\" title=\"Youtube\"><img alt=\"Youtube\" src=\"http://222.252.26.108:9980/source/public/images/graphics/ic-youtube_s.png\" srcset=\"http://222.252.26.108:9980/source/public/images/graphics/ic-youtube_s.png 1x\" /> </a></li>\r\n	<li><a href=\"javascript:void(0)\" title=\"Facebook\"><img alt=\"Facebook\" src=\"http://222.252.26.108:9980/source/public/images/graphics/ic-facebook_s.png\" srcset=\"http://222.252.26.108:9980/source/public/images/graphics/ic-facebook_s.png 1x\" /> </a></li>\r\n</ul>\r\n</div>\r\n</div>\r\n\r\n<div class=\"row top\">\r\n<div class=\"col-12 col-sm-12 col-md-12 col-lg-2 col-xl-2\">\r\n<h1 class=\"hero-content__name\"><a href=\"http://222.252.26.108:9980/source/public\" title=\"\"><img alt=\"Tự nhiên như hơi thở\" src=\"http://222.252.26.108:9980/source/public/images/graphics/logo_pc.png\" srcset=\"http://222.252.26.108:9980/source/public/images/graphics/logo_pc.png 1x\" /> </a></h1>\r\n</div>\r\n\r\n<div class=\"col-12 col-sm-12 col-md-12 col-lg-5 col-xl-5\">\r\n<ul class=\"menu\">\r\n	<li><a href=\"http://222.252.26.108:9980/source/public/ve-chung-toi\" title=\"Về chúng tôi\">Về ch&uacute;ng t&ocirc;i</a></li>\r\n	<li><a href=\"http://222.252.26.108:9980/source/public/hoat-dong\" title=\"Hoạt động\">Hoạt động</a></li>\r\n	<li><a href=\"http://222.252.26.108:9980/source/public/giai-phap\" title=\"Liên hệ\">Li&ecirc;n hệ</a></li>\r\n</ul>\r\n</div>\r\n\r\n<div class=\"col-12 col-sm-12 col-md-12 col-lg-5 col-xl-5\">\r\n<ul class=\"contact w-100\">\r\n	<li class=\"ml-2 first\"><a href=\"tel:0964783913\" title=\"Hotline\"><img alt=\"Hotline\" src=\"http://222.252.26.108:9980/source/public/images/graphics/btn_call_247.png\" srcset=\"http://222.252.26.108:9980/source/public/images/graphics/btn_call_247.png 1x\" /> 0964 783 913 </a></li>\r\n	<li><a href=\"javascript:void(0)\" title=\"Instagram\"><img alt=\"Instagram\" src=\"http://222.252.26.108:9980/source/public/images/graphics/ic-instagram.png\" srcset=\"http://222.252.26.108:9980/source/public/images/graphics/ic-instagram.png 1x\" /> </a></li>\r\n	<li><a href=\"javascript:void(0)\" title=\"Youtube\"><img alt=\"Youtube\" src=\"http://222.252.26.108:9980/source/public/images/graphics/ic-youtube.png\" srcset=\"http://222.252.26.108:9980/source/public/images/graphics/ic-youtube.png 1x\" /> </a></li>\r\n	<li><a href=\"javascript:void(0)\" title=\"Facebook\"><img alt=\"Facebook\" src=\"http://222.252.26.108:9980/source/public/images/graphics/ic-facebook.png\" srcset=\"http://222.252.26.108:9980/source/public/images/graphics/ic-facebook.png 1x\" /> </a></li>\r\n</ul>\r\n</div>\r\n</div>\r\n\r\n<div class=\"container\">\r\n<div class=\"row\">\r\n<div class=\"col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 text-center\"><svg class=\"Rectangle_178\" data-name=\"Rectangle 178\" data-type=\"Rectangle\"> <rect class=\"Rectangle_178_Class\" height=\"9\" rx=\"0\" ry=\"0\" width=\"129\" x=\"0\" y=\"0\"></rect> </svg>\r\n\r\n<h2>Chỉ khi bạn đ&aacute;nh thức được nội lực,<br />\r\nth&igrave; mới c&oacute; được sức sống dẻo dai.</h2>\r\n</div>\r\n</div>\r\n</div>\r\n</header>', '2021-03-16 06:39:53', '2021-03-16 06:56:57'),
(2, 1, 'homepage', 0, NULL, 'slogan_text', 'widget.homepage.slogan_text', 'static', '<style>\r\n    .Rectangle_252 {\r\n        width: 134px;\r\n        height: 10px;\r\n        /*position: absolute;*/\r\n        overflow: visible;\r\n        transform: translate(-360px, -813px) matrix(1,0,0,1,360,813) rotate(\r\n            180deg\r\n        );\r\n        transform-origin: center;\r\n    }\r\n\r\n    #slogan_text .content {\r\n        font-size: 30px;\r\n        line-height: 62px;\r\n        margin: 60px 0;\r\n        font-family: Montserrat-SemiBold;\r\n    }\r\n</style>\r\n<section id=\"slogan_text\">\r\n    <div class=\"container p-6\">\r\n        <div class=\"row\">\r\n            <div class=\"col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 text-left\">\r\n                <svg data-type=\"Rectangle\" data-name=\"Rectangle 252\" class=\"Rectangle_252\">\r\n                    <rect class=\"Rectangle_178_Class\" rx=\"0\" ry=\"0\" x=\"0\" y=\"0\" width=\"134\" height=\"10\"></rect>\r\n                </svg>\r\n            </div>\r\n        </div>\r\n        <div class=\"row content\">\r\n            <div class=\"col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 text-center\">\r\n                Đây là giải pháp, công cụ giúp các tổ chức phát huy sức mạnh cộng hưởng,\r\n                đồng tâm, đồng lòng của tất cả các thành viên, từ đó giúp tổ chức\r\n                phát triển thịnh vượng, thành viên đoàn kết, chia sẻ, yêu thương\r\n                và có trách nhiệm với bản thân và xã hội.\r\n            </div>\r\n        </div>\r\n        <div class=\"row\">\r\n            <div class=\"col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 text-right\">\r\n                <svg data-type=\"Rectangle\" data-name=\"Rectangle 129\" class=\"Rectangle_252\">\r\n                    <rect class=\"Rectangle_178_Class\" rx=\"0\" ry=\"0\" x=\"0\" y=\"0\" width=\"134\" height=\"10\"></rect>\r\n                </svg>\r\n            </div>\r\n        </div>\r\n    </div>\r\n</section>', '2021-03-16 07:21:08', '2021-03-16 07:21:08'),
(3, 1, 'homepage', 0, NULL, 'solution', 'widget.homepage.solution', 'static', '<style>\r\n    #solution {\r\n        background-color: rgba(67, 67, 67, 1);\r\n        margin-bottom: 0;\r\n    }\r\n\r\n    #solution .container {\r\n        padding: 90px 0;\r\n    }\r\n\r\n    #solution h2 {\r\n        color: #FFF;\r\n        font-size: 40px;\r\n        line-height: 53px;\r\n    }\r\n\r\n    #solution .box {\r\n        background-color: #FFF;\r\n        padding: 10px;\r\n    }\r\n\r\n    #solution .box {\r\n        transition: box-shadow .3s;\r\n    }\r\n\r\n    #solution .box:hover {\r\n        box-shadow: 0 0 11px #F1F1F1;\r\n    }\r\n\r\n    #solution .box img.first {\r\n        margin: 30px 0;\r\n        height: 107px;\r\n    }\r\n\r\n    #solution .box h3 {\r\n        font-size: 20px;\r\n        line-height: 25px;\r\n        height: 45px;\r\n        overflow: hidden;\r\n    }\r\n\r\n    #solution .box h3 a {\r\n        color: rgba(92, 92, 92, 1);\r\n    }\r\n\r\n    #solution .box .excerpt {\r\n        margin: 5px 10px;\r\n        font-size: 17px;\r\n        line-height: 24px;\r\n        height: 90px;\r\n        overflow: hidden;\r\n        font-family: Spectral;\r\n    }\r\n\r\n    #solution .box p {\r\n        margin: 60px 0 30px;\r\n        font-size: 17px;\r\n        line-height: 25px;\r\n    }\r\n\r\n    #solution .box .view-more a {\r\n        color: #e10404;\r\n        margin-left: 10px;\r\n    }\r\n\r\n    /** Mobile **/\r\n    @media (max-width: 991.98px) {\r\n        #solution .row.last {\r\n            margin-top: 0 !important;\r\n        }\r\n    }\r\n</style>\r\n<section id=\"solution\">\r\n    <div class=\"container\">\r\n        <h2 class=\"text-center\">BẠN ĐANG MONG MUỐN CÓ GIẢI PHÁP</h2>\r\n        <div class=\"row mt-7\">\r\n            <div class=\"col-12 col-sm-12 col-md-12 col-lg-4 col-xl-4 text-center\">\r\n                <div class=\"box\">\r\n                    <img class=\"first\" src=\"http://222.252.26.108:9980/source/public/images/icons/Asset_1.png\" alt=\"\">\r\n                    <h3><a href=\"http://222.252.26.108:9980/source/public/giai-phap\" title=\"ÁP DỤNG CHO DOANH NGHIỆP\">ÁP DỤNG CHO DOANH NGHIỆP</a></h3>\r\n                    <p class=\"excerpt\">Vivamus lectus arcu, commodo sed turpis sit amet, consectetur dapibus massa. Vivamus lectus arcu, commodo sed turpis sit amet, consectetur dapibus massa.</p>\r\n                    <p>\r\n                        <img src=\"http://222.252.26.108:9980/source/public/images/icons/Asset_2.png\" alt=\"\">\r\n                        <span class=\"view-more\"><a href=\"http://222.252.26.108:9980/source/public/giai-phap\" title=\"Xem thêm\">Xem thêm</a></span>\r\n                    </p>\r\n                </div>\r\n            </div>\r\n            <div class=\"col-12 col-sm-12 col-md-12 col-lg-4 col-xl-4 text-center\">\r\n                <div class=\"box\">\r\n                    <img class=\"first\" src=\"http://222.252.26.108:9980/source/public/images/icons/Asset_3.png\" alt=\"\">\r\n                    <h3><a href=\"http://222.252.26.108:9980/source/public/giai-phap\" title=\"ÁP DỤNG CHO TRƯỜNG HỌC\">ÁP DỤNG CHO TRƯỜNG HỌC</a></h3>\r\n                    <p class=\"excerpt\">Vivamus lectus arcu, commodo sed turpis sit amet, consectetur dapibus massa. Vivamus lectus arcu, commodo sed turpis sit amet, consectetur dapibus massa.</p>\r\n                    <p>\r\n                        <img src=\"http://222.252.26.108:9980/source/public/images/icons/Asset_2.png\" alt=\"\">\r\n                        <span class=\"view-more\"><a href=\"http://222.252.26.108:9980/source/public/giai-phap\" title=\"Xem thêm\">Xem thêm</a></span>\r\n                    </p>\r\n                </div>\r\n            </div>\r\n            <div class=\"col-12 col-sm-12 col-md-12 col-lg-4 col-xl-4 text-center\">\r\n                <div class=\"box\">\r\n                    <img class=\"first\" src=\"http://222.252.26.108:9980/source/public/images/icons/Asset_4.png\" alt=\"\">\r\n                    <h3><a href=\"http://222.252.26.108:9980/source/public/giai-phap\" title=\"ÁP DỤNG CHO CHUNG CƯ\">ÁP DỤNG CHO CHUNG CƯ</a></h3>\r\n                    <p class=\"excerpt\">Vivamus lectus arcu, commodo sed turpis sit amet, consectetur dapibus massa. Vivamus lectus arcu, commodo sed turpis sit amet, consectetur dapibus massa.</p>\r\n                    <p>\r\n                        <img src=\"http://222.252.26.108:9980/source/public/images/icons/Asset_2.png\" alt=\"\">\r\n                        <span class=\"view-more\"><a href=\"http://222.252.26.108:9980/source/public/giai-phap\" title=\"Xem thêm\">Xem thêm</a></span>\r\n                    </p>\r\n                </div>\r\n            </div>\r\n        </div>\r\n        <div class=\"row mt-6 last\">\r\n            <div class=\"col-12 col-sm-12 col-md-12 col-lg-4 col-xl-4 text-center\">\r\n                <div class=\"box\">\r\n                    <img class=\"first\" src=\"http://222.252.26.108:9980/source/public/images/icons/Asset_5.png\" alt=\"\">\r\n                    <h3><a href=\"http://222.252.26.108:9980/source/public/giai-phap\" title=\"ÁP DỤNG CHO TỔ CHỨC TỪ THIỆN\">ÁP DỤNG CHO TỔ CHỨC TỪ THIỆN</a></h3>\r\n                    <p class=\"excerpt\">Vivamus lectus arcu, commodo sed turpis sit amet, consectetur dapibus massa. Vivamus lectus arcu, commodo sed turpis sit amet, consectetur dapibus massa.</p>\r\n                    <p>\r\n                        <img src=\"http://222.252.26.108:9980/source/public/images/icons/Asset_2.png\" alt=\"\">\r\n                        <span class=\"view-more\"><a href=\"http://222.252.26.108:9980/source/public/giai-phap\" title=\"Xem thêm\">Xem thêm</a></span>\r\n                    </p>\r\n                </div>\r\n            </div>\r\n            <div class=\"col-12 col-sm-12 col-md-12 col-lg-4 col-xl-4 text-center\">\r\n                <div class=\"box\">\r\n                    <img class=\"first\" src=\"http://222.252.26.108:9980/source/public/images/icons/Asset_6.png\" alt=\"\">\r\n                    <h3><a href=\"http://222.252.26.108:9980/source/public/giai-phap\" title=\"ÁP DUNG CHO CÁC\r\n                        TỔ CHỨC CROWFUNDING\">ÁP DUNG CHO CÁC\r\n                            TỔ CHỨC CROWFUNDING</a></h3>\r\n                    <p class=\"excerpt\">Vivamus lectus arcu, commodo sed turpis sit amet, consectetur dapibus massa. Vivamus lectus arcu, commodo sed turpis sit amet, consectetur dapibus massa.</p>\r\n                    <p>\r\n                        <img src=\"http://222.252.26.108:9980/source/public/images/icons/Asset_2.png\" alt=\"\">\r\n                        <span class=\"view-more\"><a href=\"http://222.252.26.108:9980/source/public/giai-phap\" title=\"Xem thêm\">Xem thêm</a></span>\r\n                    </p>\r\n                </div>\r\n            </div>\r\n            <div class=\"col-12 col-sm-12 col-md-12 col-lg-4 col-xl-4 text-center\">\r\n                <div class=\"box\">\r\n                    <img class=\"first\" src=\"http://222.252.26.108:9980/source/public/images/icons/Asset_7.png\" alt=\"\">\r\n                    <h3><a href=\"http://222.252.26.108:9980/source/public/giai-phap\" title=\"ÁP DỤNG\r\n                        CHO CÁC DÒNG HỌ\">ÁP DỤNG\r\n                            CHO CÁC DÒNG HỌ</a></h3>\r\n                    <p class=\"excerpt\">Vivamus lectus arcu, commodo sed turpis sit amet, consectetur dapibus massa. Vivamus lectus arcu, commodo sed turpis sit amet, consectetur dapibus massa.</p>\r\n                    <p>\r\n                        <img src=\"http://222.252.26.108:9980/source/public/images/icons/Asset_2.png\" alt=\"\">\r\n                        <span class=\"view-more\"><a href=\"http://222.252.26.108:9980/source/public/giai-phap\" title=\"Xem thêm\">Xem thêm</a></span>\r\n                    </p>\r\n                </div>\r\n            </div>\r\n        </div>\r\n    </div>\r\n</section>', '2021-03-16 07:31:49', '2021-03-16 07:31:49'),
(4, 1, 'homepage', 0, NULL, 'slogan_banner', 'widget.homepage.slogan_banner', 'static', '<style>\r\n    #slogan_banner {\r\n        height: 454px;\r\n        margin-bottom: 0;\r\n        font-weight: bold;\r\n        font-size: 40px;\r\n        color: rgba(255,255,255,1);\r\n        letter-spacing: 0.64px;\r\n        text-transform: uppercase;\r\n        padding-top: 260px;\r\n    }\r\n\r\n    #slogan_banner h2 {\r\n        font-size: 50px;\r\n        line-height: 64px;\r\n        text-transform: none;\r\n    }\r\n\r\n    /** Mobile **/\r\n    @media (max-width: 991.98px) {\r\n        #slogan_banner {\r\n            padding-top: 50px;\r\n        }\r\n    }\r\n</style>\r\n<section id=\"slogan_banner\" style=\"background-image: url(\'http://222.252.26.108:9980/source/public/images/graphics/Mask_Group_61.png\')\">\r\n    <div class=\"container\">\r\n        <div class=\"row\">\r\n            <div class=\"col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 text-center font-weight-bold\">\r\n                <h2>Đi với người tiên phong<br>\r\n                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;bạn sẽ là người dẫn đầu</h2>\r\n            </div>\r\n        </div>\r\n    </div>\r\n</section>', '2021-03-16 07:37:55', '2021-03-16 07:37:55'),
(5, 1, 'aboutus', 0, NULL, 'header_banner', 'widget.aboutus.header_banner', 'static', '<style>\r\n    #header {\r\n        height: 852.594px;\r\n        padding-top: 0 !important;\r\n        background: url(http://222.252.26.108:9980/source/public/images/graphics/Mask_Group_49.png) no-repeat top left;\r\n        background-position-x: 60%;\r\n    }\r\n\r\n    #header .top{\r\n        width: 90%;\r\n        margin: 0 auto !important;\r\n    }\r\n\r\n    #header.other  {\r\n        height: 706px;\r\n    }\r\n\r\n    #header ul {\r\n        margin-top: 20px;\r\n        margin-left: 20px;\r\n        list-style: none;\r\n    }\r\n\r\n    #header ul.menu li {\r\n        float: left;\r\n        margin-right: 40px;\r\n    }\r\n\r\n    #header ul.menu li.active {\r\n        position: relative;\r\n    }\r\n\r\n    #header ul.menu li.active:after {\r\n        content: \"\";\r\n        display: block;\r\n        width: 90%;\r\n        height: 3px;\r\n        background: #D60F0F;\r\n        position: absolute;\r\n        bottom: -10px;\r\n        left: 50%;\r\n        transform: translateX(-50%);\r\n    }\r\n\r\n    #header ul.menu li a {\r\n        color: #FFF;\r\n        font-size: 14px;\r\n    }\r\n\r\n    #header ul.contact li {\r\n        float: right;\r\n        margin-right: 3%;\r\n    }\r\n\r\n    #header ul.contact li.first {\r\n        background-color: #FFF;\r\n        border-radius: 20px;\r\n        padding: 2px 18px;\r\n        font-weight: bold;\r\n    }\r\n\r\n    #header ul.contact li.first a {\r\n        color: #DA0404;\r\n    }\r\n\r\n    #navigation ul.contact li.first {\r\n        background-color: #DA0404;\r\n    }\r\n\r\n    #navigation ul.contact li.first a {\r\n        color: #FFF;\r\n    }\r\n\r\n    #header ul.contact img {\r\n        height: 25px;\r\n    }\r\n\r\n    .homev2 .hero-content__name {\r\n        width: auto;\r\n    }\r\n\r\n    .TNG_i_t_vn_min_ph_be_Class {\r\n        text-align: center;\r\n        font-style: normal;\r\n        font-weight: bold;\r\n        font-size: 13px;\r\n        color: #2F318C;\r\n        text-transform: uppercase;\r\n        line-height: 70px;\r\n        margin-right: 15px;\r\n    }\r\n\r\n    .btn_call_247 {\r\n        width: 200px;\r\n        height: 44px;\r\n        line-height: 39px;\r\n        border-radius: 25px;\r\n        border: 2px solid #2F318C;\r\n        background-color: #2F318C;\r\n        margin-top: 10px;\r\n        font-size: 21px;\r\n        color: #FFF !important;\r\n        font-weight: bold;\r\n        margin-right: 15px;\r\n    }\r\n\r\n    .ic_call_24px_fe {\r\n        margin: 10px 7px 10px 15px;\r\n    }\r\n\r\n    .Group_677_i {\r\n        padding: 10px 35px;\r\n        border-radius: 25px;\r\n        background-color: #c70000;\r\n        margin-top: 10px;\r\n        width: 235px;\r\n        text-align: center;\r\n    }\r\n\r\n    .Group_677_i a {\r\n        font-size: 21px;\r\n        color: #FFF;\r\n        font-weight: bold;\r\n    }\r\n\r\n    .Group_677_i a:hover {\r\n        color: #FFF;\r\n    }\r\n\r\n    .Rectangle_178 {\r\n        margin-top: 100px;\r\n        margin-bottom: 20px;\r\n        overflow: visible;\r\n        width: 129px;\r\n        height: 9px;\r\n        left: 896px;\r\n        top: 169px;\r\n    }\r\n\r\n    .Rectangle_178_Class {\r\n        fill: rgba(255, 52, 52, 1);\r\n    }\r\n\r\n    #header h2 {\r\n        color: #FFF;\r\n        font-size: 45px;\r\n        line-height: 57px;\r\n        font-family: Spectral;\r\n        font-weight: normal;\r\n    }\r\n\r\n    #header h2#other {\r\n        text-align: left !important;\r\n        margin-top: 190px;\r\n        font-size: 65px;\r\n        line-height: 80px;\r\n        position: relative;\r\n        font-family: Spectral;\r\n    }\r\n\r\n    #header h2#other:after {\r\n        content: \"\";\r\n        display: block;\r\n        width: 129px;\r\n        height: 9px;\r\n        background: #D60F0F;\r\n        position: absolute;\r\n        top: -35px;\r\n        left: 5%;\r\n        transform: translateX(-50%);\r\n    }\r\n\r\n    #header h2#solution:after {\r\n        display: none;\r\n    }\r\n\r\n    .Rectangle_193 {\r\n        height: 160px;\r\n        width: 10px;\r\n        margin-right: 10px;\r\n        float: left;\r\n        margin-top: 150px;\r\n    }\r\n\r\n    .Rectangle_193_Class {\r\n        fill: rgba(255, 52, 52, 1);\r\n        height: 160px;\r\n        width: 8px;\r\n    }\r\n\r\n    .Rectangle_193.solution {\r\n        height: 220px;\r\n        margin-top: 195px;\r\n    }\r\n\r\n    .Rectangle_193_Class.solution {\r\n        height: 220px;\r\n    }\r\n\r\n    #navigation {\r\n        width: 90%;\r\n        margin: auto !important;\r\n        z-index: 2;\r\n    }\r\n\r\n    /* The sticky class is added to the header with JS when it reaches its scroll position */\r\n    .sticky {\r\n        position: fixed;\r\n        top: 0;\r\n        width: 100% !important;\r\n        padding: 0 5%;\r\n        background-color: #FFF;\r\n        z-index: 1;\r\n    }\r\n\r\n    /* Add some top padding to the page content to prevent sudden quick movement (as the header gets a new position at the top of the page (position:fixed and top:0) */\r\n    .sticky + .content {\r\n        padding-top: 102px;\r\n    }\r\n\r\n    #navigation ul.menu li a {\r\n        color: #393939;\r\n    }\r\n\r\n    /** Mobile **/\r\n    @media (max-width: 991.98px) {\r\n        .homev2 .header {\r\n            background-color: rgba(38, 40, 144, 1) !important;\r\n            height: auto;\r\n            padding: 0;\r\n        }\r\n\r\n        .homev2 .heading-mobile__in .hero-content__name {\r\n            margin-right: 0;\r\n        }\r\n\r\n        .homev2 .header .hotline__icon {\r\n            width: 100%;\r\n            margin: 15px;\r\n        }\r\n\r\n        .homev2 .heading-mobile__in .hero-content__name {\r\n            width: 50% !important;\r\n        }\r\n\r\n        .hero-content__name {\r\n            margin: 10px 0;\r\n        }\r\n\r\n        #header ul.menu li {\r\n            margin-bottom: 10px;\r\n        }\r\n\r\n        #header ul.contact li.first {\r\n            margin-right: 40px;\r\n        }\r\n\r\n        #navigation {\r\n            width: 100%;\r\n        }\r\n    }\r\n</style>\r\n<header id=\"header\" class=\"other\">\r\n    <div id=\"navigation\" class=\"row\" style=\"display: none;\">\r\n        <div class=\"col-12 col-sm-12 col-md-12 col-lg-2 col-xl-2\">\r\n            <h1 class=\"hero-content__name\">\r\n                <a href=\"http://222.252.26.108:9980/source/public\" title=\"\">\r\n                    <img width=\"152px\" src=\"http://222.252.26.108:9980/source/public/images/graphics/logo_pc_s.png\" srcset=\"http://222.252.26.108:9980/source/public/images/graphics/logo_pc_s.png 1x\" alt=\"Tự nhiên như hơi thở\">\r\n                </a>\r\n            </h1>\r\n        </div>\r\n        <div class=\"col-12 col-sm-12 col-md-12 col-lg-5 col-xl-5\">\r\n            <ul class=\"menu\">\r\n                <li class=\"active\"><a href=\"http://222.252.26.108:9980/source/public/ve-chung-toi\" title=\"Về chúng tôi\">Về chúng tôi</a></li>\r\n                <li><a href=\"http://222.252.26.108:9980/source/public/hoat-dong\" title=\"Hoạt động\">Hoạt động</a></li>\r\n                <li><a href=\"http://222.252.26.108:9980/source/public/giai-phap\" title=\"Liên hệ\">Liên hệ</a></li>\r\n            </ul>\r\n        </div>\r\n        <div class=\"col-12 col-sm-12 col-md-12 col-lg-5 col-xl-5\">\r\n            <ul class=\"contact w-100\">\r\n                <li class=\"ml-2 first\">\r\n                    <a href=\"tel:0964783913\" title=\"Hotline\">\r\n                        <img src=\"http://222.252.26.108:9980/source/public/images/graphics/btn_call_247_s.png\" srcset=\"http://222.252.26.108:9980/source/public/images/graphics/btn_call_247_s.png 1x\" alt=\"Hotline\">\r\n                        0964 783 913\r\n                    </a>\r\n                </li>\r\n                <li>\r\n                    <a href=\"javascript:void(0)\" title=\"Instagram\">\r\n                        <img src=\"http://222.252.26.108:9980/source/public/images/graphics/ic-instagram_s.png\" srcset=\"http://222.252.26.108:9980/source/public/images/graphics/ic-instagram_s.png 1x\" alt=\"Instagram\">\r\n                    </a>\r\n                </li>\r\n                <li>\r\n                    <a href=\"javascript:void(0)\" title=\"Youtube\">\r\n                        <img src=\"http://222.252.26.108:9980/source/public/images/graphics/ic-youtube_s.png\" srcset=\"http://222.252.26.108:9980/source/public/images/graphics/ic-youtube_s.png 1x\" alt=\"Youtube\">\r\n                    </a>\r\n                </li>\r\n                <li>\r\n                    <a href=\"javascript:void(0)\" title=\"Facebook\">\r\n                        <img src=\"http://222.252.26.108:9980/source/public/images/graphics/ic-facebook_s.png\" srcset=\"http://222.252.26.108:9980/source/public/images/graphics/ic-facebook_s.png 1x\" alt=\"Facebook\">\r\n                    </a>\r\n                </li>\r\n            </ul>\r\n        </div>\r\n    </div>\r\n    <div class=\"row top\">\r\n        <div class=\"col-12 col-sm-12 col-md-12 col-lg-2 col-xl-2\">\r\n            <h1 class=\"hero-content__name\">\r\n                <a href=\"http://222.252.26.108:9980/source/public\" title=\"\">\r\n                    <img src=\"http://222.252.26.108:9980/source/public/images/graphics/logo_pc.png\" srcset=\"http://222.252.26.108:9980/source/public/images/graphics/logo_pc.png 1x\" alt=\"Tự nhiên như hơi thở\">\r\n                </a>\r\n            </h1>\r\n        </div>\r\n        <div class=\"col-12 col-sm-12 col-md-12 col-lg-5 col-xl-5\">\r\n            <ul class=\"menu\">\r\n                <li class=\"active\"><a href=\"http://222.252.26.108:9980/source/public/ve-chung-toi\" title=\"Về chúng tôi\">Về chúng tôi</a></li>\r\n                <li><a href=\"http://222.252.26.108:9980/source/public/hoat-dong\" title=\"Hoạt động\">Hoạt động</a></li>\r\n                <li><a href=\"http://222.252.26.108:9980/source/public/giai-phap\" title=\"Liên hệ\">Liên hệ</a></li>\r\n            </ul>\r\n        </div>\r\n        <div class=\"col-12 col-sm-12 col-md-12 col-lg-5 col-xl-5\">\r\n            <ul class=\"contact w-100\">\r\n                <li class=\"ml-2 first\">\r\n                    <a href=\"tel:0964783913\" title=\"Hotline\">\r\n                        <img src=\"http://222.252.26.108:9980/source/public/images/graphics/btn_call_247.png\" srcset=\"http://222.252.26.108:9980/source/public/images/graphics/btn_call_247.png 1x\" alt=\"Hotline\">\r\n                        0964 783 913\r\n                    </a>\r\n                </li>\r\n                <li>\r\n                    <a href=\"javascript:void(0)\" title=\"Instagram\">\r\n                        <img src=\"http://222.252.26.108:9980/source/public/images/graphics/ic-instagram.png\" srcset=\"http://222.252.26.108:9980/source/public/images/graphics/ic-instagram.png 1x\" alt=\"Instagram\">\r\n                    </a>\r\n                </li>\r\n                <li>\r\n                    <a href=\"javascript:void(0)\" title=\"Youtube\">\r\n                        <img src=\"http://222.252.26.108:9980/source/public/images/graphics/ic-youtube.png\" srcset=\"http://222.252.26.108:9980/source/public/images/graphics/ic-youtube.png 1x\" alt=\"Youtube\">\r\n                    </a>\r\n                </li>\r\n                <li>\r\n                    <a href=\"javascript:void(0)\" title=\"Facebook\">\r\n                        <img src=\"http://222.252.26.108:9980/source/public/images/graphics/ic-facebook.png\" srcset=\"http://222.252.26.108:9980/source/public/images/graphics/ic-facebook.png 1x\" alt=\"Facebook\">\r\n                    </a>\r\n                </li>\r\n            </ul>\r\n        </div>\r\n    </div>\r\n    <div class=\"container\">\r\n        <div class=\"row\">\r\n            <div class=\"col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 text-center\">\r\n                                    <h2 id=\"other\">\r\n                        Gắn kết cộng đồng,<br>\r\n                    chia sẻ yêu thương</h2>\r\n                            </div>\r\n        </div>\r\n    </div>\r\n</header>', '2021-03-16 08:55:34', '2021-03-16 08:55:34'),
(6, 1, 'aboutus', 0, NULL, 'content1', 'widget.aboutus.content1', 'static', '<style>\r\n    #content1 .container {\r\n        padding: 60px 0;\r\n    }\r\n\r\n    #content1 h2 {\r\n        font-size: 54px;\r\n        color: rgba(88,88,88,1);\r\n        margin-bottom: 40px;\r\n        line-height: 64px;\r\n    }\r\n\r\n    .Rectangle_244 {\r\n        height: 110px;\r\n        width: 10px;\r\n        float: left;\r\n        margin-right: 10px;\r\n        margin-top: 10px;\r\n    }\r\n\r\n    .Rectangle_244_Class {\r\n        fill: rgba(255,52,52,1);\r\n        height: 110px;\r\n    }\r\n\r\n    #content1 p {\r\n        line-height: 30px;\r\n        font-size: 18px;\r\n        color: rgba(54,54,54,1);\r\n        font-family: Spectral;\r\n    }\r\n\r\n    #content1 .col-right {\r\n        background: url(http://222.252.26.108:9980/source/public/images/graphics/Asset_12.png) no-repeat top left;\r\n        background-size: 92%;\r\n        padding: 10px 20px;\r\n        height: 800px;\r\n        line-height: 56px;\r\n        font-weight: bold;\r\n        font-size: 40px;\r\n        color: rgba(255,255,255,1);\r\n        letter-spacing: 0.64px;\r\n        text-transform: uppercase;\r\n    }\r\n</style>\r\n<section id=\"content1\">\r\n    <div class=\"container\">\r\n        <div class=\"row mb-3\">\r\n            <div class=\"col-12 col-sm-12 col-md-12 col-lg-8 col-xl-8 pr-3\">\r\n                <h2><svg data-type=\"Rectangle\" data-name=\"Rectangle 244\" class=\"Rectangle_244\">\r\n                        <rect class=\"Rectangle_244_Class\" rx=\"0\" ry=\"0\" x=\"0\" y=\"0\" width=\"5\" height=\"40\">\r\n                        </rect>\r\n                    </svg>\r\n                    <span>Tự nhiên<br>\r\n                        như hơi thở</span></h2>\r\n                <p>\r\n                    CVV Việt Nam là công ty công nghệ được sáng lập bởi Tiến sĩ, Doanh nhân Đỗ Ngọc Chung và các đồng sự. Với kinh nghiệm 10 năm làm việc tại viện Hàn lâm khoa học Việt Nam, 07 năm là Giảng viên Đại học Công nghệ ĐHQGHN, và rất nhiều sản phẩm nghiên cứu khoa học đã được thương mại hóa thành công, TS Đỗ Ngọc Chung mong muốn xây dựng một điểm hội tụ các chuyên gia về công nghệ để biến những công trình nghiên cứu khoa học sớm đi vào thực tiễn, phục vụ cộng đồng.\r\n                    Một trong những giá trị cốt lõi lớn nhất và xuyên suốt tại CVV là giá trị hướng tới cộng đồng, ứng dụng công nghệ để giải quyết các vấn đề của xã hội, đem đến hạnh phúc cho con người và sự thịnh vượng cho quốc gia.\r\n                </p>\r\n            </div>\r\n            <div class=\"col-12 col-sm-12 col-md-12 col-lg-4 col-xl-4 col-right\">\r\n                ĐI VỚI NGƯỜI TIÊN PHONG BẠN SẼ LÀ NGƯỜI DẪN ĐẦU\r\n            </div>\r\n        </div>\r\n        <div class=\"row\">\r\n            <div class=\"col-12 col-sm-12 col-md-12 col-lg-4 col-xl-4\">\r\n                <img src=\"http://222.252.26.108:9980/source/public/images/graphics/Mask_Group_51.png\" srcset=\"http://222.252.26.108:9980/source/public/images/graphics/Mask_Group_51.png 1x, http://222.252.26.108:9980/source/public/images/graphics/Mask_Group_51@2x.png 2x\" alt=\"\">\r\n            </div>\r\n            <div class=\"col-12 col-sm-12 col-md-12 col-lg-8 col-xl-8\" style=\"height: 476px;\r\n    overflow: hidden;\">\r\n                <img class=\"w-100\" src=\"http://222.252.26.108:9980/source/public/images/graphics/Batchao.png\" srcset=\"http://222.252.26.108:9980/source/public/images/graphics/Batchao.png 1x, http://222.252.26.108:9980/source/public/images/graphics/Batchao@2x.png 2x\" alt=\"\">\r\n            </div>\r\n        </div>\r\n    </div>\r\n</section>', '2021-03-16 09:45:36', '2021-03-16 09:45:36'),
(7, 1, 'aboutus', 0, NULL, 'author', 'widget.aboutus.author', 'static', '<style>\r\n    #author {\r\n        background-color: rgba(240,240,240,1);\r\n        margin-bottom: 0;\r\n    }\r\n\r\n    #author .container {\r\n        padding: 60px 0;\r\n    }\r\n\r\n    #author .container h2 {\r\n        font-size: 40px;\r\n    }\r\n\r\n    #author .col-left {\r\n        background: rgba(255,52,52,1);\r\n        height: 650px;\r\n        color: #FFF;\r\n        padding: 25px 20px;\r\n        z-index: 1;\r\n    }\r\n\r\n    .Rectangle_216_bn {\r\n        height: 20px;\r\n    }\r\n\r\n    .Rectangle_216_bn_Class {\r\n        fill: rgba(255,255,255,1);\r\n    }\r\n\r\n    #author .col-left p {\r\n        line-height: 41px;\r\n        font-size: 30px;\r\n    }\r\n\r\n    #author .col-left p img {\r\n        width: 97%;\r\n        position: absolute;\r\n        right: 0;\r\n        top: 224px;\r\n    }\r\n\r\n    #author .col-right {\r\n        background-color: #FFF;\r\n        color: rgba(73,73,73,1);\r\n        padding: 50px 40px 45px 280px;\r\n        position: absolute;\r\n        right: 0;\r\n    }\r\n\r\n    #author .col-right .year {\r\n        font-weight: bold;\r\n        font-size: 30px;\r\n        line-height: 40px;\r\n        color: rgba(255,52,52,1);\r\n    }\r\n</style>\r\n<section id=\"author\">\r\n    <div class=\"container\">\r\n        <div class=\"row position-relative\" style=\"height:1000px\">\r\n            <div class=\"col-12 col-sm-12 col-md-12 col-lg-5 col-xl-5 col-left position-relative\">\r\n                <svg data-type=\"Rectangle\" data-name=\"Rectangle 216\" class=\"Rectangle_216_bn\">\r\n                    <rect class=\"Rectangle_216_bn_Class\" rx=\"0\" ry=\"0\" x=\"0\" y=\"0\" width=\"118\" height=\"5\">\r\n                    </rect>\r\n                </svg>\r\n                <h2>TÁC GIẢ MÔ HÌNH</h2>\r\n                <p class=\"mb-0\">\r\n                    Về Doanh nhân Tiến sĩ <br><strong>Đỗ Ngọc Chung</strong>\r\n                </p>\r\n                <p>\r\n                    <img src=\"http://222.252.26.108:9980/source/public/images/graphics/Mask_Group_50.png\" srcset=\"http://222.252.26.108:9980/source/public/images/graphics/Mask_Group_50.png 1x, http://222.252.26.108:9980/source/public/images/graphics/Mask_Group_50@2x.png 2x\" alt=\"\">\r\n                </p>\r\n            </div>\r\n            <div class=\"col-12 col-sm-12 col-md-12 col-lg-9 col-xl-9 col-right\">\r\n                <p class=\"mt-2 font-weight-bold\" style=\"font-size:20px;line-height:29px;color:#727272\">\r\n                    TS ĐỖ NGỌC CHUNG SINH NĂM 1980<br>\r\n                    TẠI ĐAN PHƯỢNG\r\n                </p>\r\n                <p>\r\n                    <span class=\"year\">2002</span><br>\r\n                    <span style=\"font-size:15px;line-height:22px;font-family:Spectral\">Tốt nghiệp Đại học KHTN, ĐHQGHN<br>\r\n                        Nghiên cứu viên tại Viện Khoa học Vật liệu – Viện Hàn lâm Khoa học và công nghệ Việt Nam</span>\r\n                </p>\r\n                <p>\r\n                    <span class=\"year\">2006</span><br>\r\n                    <span style=\"font-size:15px;line-height:22px;font-family:Spectral\">Tốt nghiệp thạc sĩ chuyên ngành Vật liệu<br>\r\n                        và Linh kiện Nano- Trường Đại học Công nghệ, ĐHQGHN</span>\r\n                </p>\r\n                <p>\r\n                    <span class=\"year\">2009</span><br>\r\n                    <span style=\"font-size:15px;line-height:22px;font-family:Spectral\">Giảng viên Trường Đại học Công nghệ - Đại học<br>\r\n                    Quốc Gia Hà Nội</span>\r\n                </p>\r\n                <p>\r\n                    <span class=\"year\">2015</span><br>\r\n                    <span style=\"font-size:15px;line-height:22px;font-family:Spectral\">Hoàn thành Luận án Tiến sĩ chuyên ngành Vật liệu và Linh kiện Nano- Trường Đại học Công nghệ, ĐHQGHN<br>\r\n                    Sáng lập Công ty TNHH Giải pháp Năng lượng Toàn Diện<br>\r\n                    Đạt giải thưởng Techmart Quốc Tế</span>\r\n                </p>\r\n                <p>\r\n                    <span class=\"year\">2016</span><br>\r\n                    <span style=\"font-size:15px;line-height:22px;font-family:Spectral\">Phó giám đốc Trung tâm Dịch vụ và truyền thông công nghệ - Trung tâm Phát triển công nghệ cao, Viện Hàn lâm KH&amp;CN Việt Nam<br>\r\n                    Phó giám đốc Xưởng cơ khí điện tử, Viện Hàn lâm KH&amp;CN Việt Nam</span>\r\n                </p>\r\n                <p>\r\n                    <span class=\"year\">2016 - 2019</span><br>\r\n                    <span style=\"font-size:15px;line-height:22px;font-family:Spectral\">Nhận bằng sáng chế cho Thiết bị làm rau giá đỗ<br>\r\n                    Nhận bằng sáng chế Cơ cấu nén dùng cho dụng cụ làm rau giá đỗ<br>\r\n                    Nhận bằng sáng chế về Máy ủ giá công nghiệp<br>\r\n                    Nhận bằng sáng chế Áo dưỡng khí<br>\r\n                    Nhận bằng sáng chế Tăm nguyên sinh<br>\r\n                    Đạt giải thưởng Cuộc thi chứng minh ý tưởng Poc2,\r\n                    Trung tâm đổi mới sáng tạo ứng phó với biến đổi khí hậu\r\n                    Việt Nam (VCIC), Quỹ WorldBank tài trợ.</span>\r\n                </p>\r\n                <p>\r\n                    <span class=\"year\">2020</span><br>\r\n                    <span style=\"font-size:15px;line-height:22px;font-family:Spectral\">Sáng lập CVV PTE. Ltd, Singapore<br>\r\n                    Sáng lập Công ty cổ phần CVV Việt Nam</span>\r\n                </p>\r\n            </div>\r\n        </div>\r\n    </div>\r\n</section>', '2021-03-16 09:47:02', '2021-03-16 09:47:02');
INSERT INTO `widgets` (`id`, `user_id`, `name`, `template_id`, `description`, `position`, `key`, `type`, `content`, `created_at`, `updated_at`) VALUES
(8, 1, 'activity', 0, NULL, 'header_banner', 'widget.activity.header_banner', 'static', '<style>\r\n    #header {\r\n        height: 852.594px;\r\n        padding-top: 0 !important;\r\n        background: url(http://222.252.26.108:9980/source/public/images/graphics/Mask_Group_70.png) no-repeat top left;\r\n        background-position-x: 60%;\r\n    }\r\n\r\n    #header .top{\r\n        width: 90%;\r\n        margin: 0 auto !important;\r\n    }\r\n\r\n    #header.other  {\r\n        height: 706px;\r\n    }\r\n\r\n    #header ul {\r\n        margin-top: 20px;\r\n        margin-left: 20px;\r\n        list-style: none;\r\n    }\r\n\r\n    #header ul.menu li {\r\n        float: left;\r\n        margin-right: 40px;\r\n    }\r\n\r\n    #header ul.menu li.active {\r\n        position: relative;\r\n    }\r\n\r\n    #header ul.menu li.active:after {\r\n        content: \"\";\r\n        display: block;\r\n        width: 90%;\r\n        height: 3px;\r\n        background: #D60F0F;\r\n        position: absolute;\r\n        bottom: -10px;\r\n        left: 50%;\r\n        transform: translateX(-50%);\r\n    }\r\n\r\n    #header ul.menu li a {\r\n        color: #FFF;\r\n        font-size: 14px;\r\n    }\r\n\r\n    #header ul.contact li {\r\n        float: right;\r\n        margin-right: 3%;\r\n    }\r\n\r\n    #header ul.contact li.first {\r\n        background-color: #FFF;\r\n        border-radius: 20px;\r\n        padding: 2px 18px;\r\n        font-weight: bold;\r\n    }\r\n\r\n    #header ul.contact li.first a {\r\n        color: #DA0404;\r\n    }\r\n\r\n    #navigation ul.contact li.first {\r\n        background-color: #DA0404;\r\n    }\r\n\r\n    #navigation ul.contact li.first a {\r\n        color: #FFF;\r\n    }\r\n\r\n    #header ul.contact img {\r\n        height: 25px;\r\n    }\r\n\r\n    .homev2 .hero-content__name {\r\n        width: auto;\r\n    }\r\n\r\n    .TNG_i_t_vn_min_ph_be_Class {\r\n        text-align: center;\r\n        font-style: normal;\r\n        font-weight: bold;\r\n        font-size: 13px;\r\n        color: #2F318C;\r\n        text-transform: uppercase;\r\n        line-height: 70px;\r\n        margin-right: 15px;\r\n    }\r\n\r\n    .btn_call_247 {\r\n        width: 200px;\r\n        height: 44px;\r\n        line-height: 39px;\r\n        border-radius: 25px;\r\n        border: 2px solid #2F318C;\r\n        background-color: #2F318C;\r\n        margin-top: 10px;\r\n        font-size: 21px;\r\n        color: #FFF !important;\r\n        font-weight: bold;\r\n        margin-right: 15px;\r\n    }\r\n\r\n    .ic_call_24px_fe {\r\n        margin: 10px 7px 10px 15px;\r\n    }\r\n\r\n    .Group_677_i {\r\n        padding: 10px 35px;\r\n        border-radius: 25px;\r\n        background-color: #c70000;\r\n        margin-top: 10px;\r\n        width: 235px;\r\n        text-align: center;\r\n    }\r\n\r\n    .Group_677_i a {\r\n        font-size: 21px;\r\n        color: #FFF;\r\n        font-weight: bold;\r\n    }\r\n\r\n    .Group_677_i a:hover {\r\n        color: #FFF;\r\n    }\r\n\r\n    .Rectangle_178 {\r\n        margin-top: 100px;\r\n        margin-bottom: 20px;\r\n        overflow: visible;\r\n        width: 129px;\r\n        height: 9px;\r\n        left: 896px;\r\n        top: 169px;\r\n    }\r\n\r\n    .Rectangle_178_Class {\r\n        fill: rgba(255, 52, 52, 1);\r\n    }\r\n\r\n    #header h2 {\r\n        color: #FFF;\r\n        font-size: 45px;\r\n        line-height: 57px;\r\n        font-family: Spectral;\r\n        font-weight: normal;\r\n    }\r\n\r\n    #header h2#other {\r\n        text-align: left !important;\r\n        margin-top: 190px;\r\n        font-size: 65px;\r\n        line-height: 80px;\r\n        position: relative;\r\n        font-family: Spectral;\r\n    }\r\n\r\n    #header h2#other:after {\r\n        content: \"\";\r\n        display: block;\r\n        width: 129px;\r\n        height: 9px;\r\n        background: #D60F0F;\r\n        position: absolute;\r\n        top: -35px;\r\n        left: 5%;\r\n        transform: translateX(-50%);\r\n    }\r\n\r\n    #header h2#solution:after {\r\n        display: none;\r\n    }\r\n\r\n    .Rectangle_193 {\r\n        height: 160px;\r\n        width: 10px;\r\n        margin-right: 10px;\r\n        float: left;\r\n        margin-top: 150px;\r\n    }\r\n\r\n    .Rectangle_193_Class {\r\n        fill: rgba(255, 52, 52, 1);\r\n        height: 160px;\r\n        width: 8px;\r\n    }\r\n\r\n    .Rectangle_193.solution {\r\n        height: 220px;\r\n        margin-top: 195px;\r\n    }\r\n\r\n    .Rectangle_193_Class.solution {\r\n        height: 220px;\r\n    }\r\n\r\n    #navigation {\r\n        width: 90%;\r\n        margin: auto !important;\r\n        z-index: 2;\r\n    }\r\n\r\n    /* The sticky class is added to the header with JS when it reaches its scroll position */\r\n    .sticky {\r\n        position: fixed;\r\n        top: 0;\r\n        width: 100% !important;\r\n        padding: 0 5%;\r\n        background-color: #FFF;\r\n        z-index: 1;\r\n    }\r\n\r\n    /* Add some top padding to the page content to prevent sudden quick movement (as the header gets a new position at the top of the page (position:fixed and top:0) */\r\n    .sticky + .content {\r\n        padding-top: 102px;\r\n    }\r\n\r\n    #navigation ul.menu li a {\r\n        color: #393939;\r\n    }\r\n\r\n    /** Mobile **/\r\n    @media (max-width: 991.98px) {\r\n        .homev2 .header {\r\n            background-color: rgba(38, 40, 144, 1) !important;\r\n            height: auto;\r\n            padding: 0;\r\n        }\r\n\r\n        .homev2 .heading-mobile__in .hero-content__name {\r\n            margin-right: 0;\r\n        }\r\n\r\n        .homev2 .header .hotline__icon {\r\n            width: 100%;\r\n            margin: 15px;\r\n        }\r\n\r\n        .homev2 .heading-mobile__in .hero-content__name {\r\n            width: 50% !important;\r\n        }\r\n\r\n        .hero-content__name {\r\n            margin: 10px 0;\r\n        }\r\n\r\n        #header ul.menu li {\r\n            margin-bottom: 10px;\r\n        }\r\n\r\n        #header ul.contact li.first {\r\n            margin-right: 40px;\r\n        }\r\n\r\n        #navigation {\r\n            width: 100%;\r\n        }\r\n    }\r\n</style>\r\n<header id=\"header\" class=\"other\">\r\n    <div id=\"navigation\" class=\"row\" style=\"display:none\">\r\n        <div class=\"col-12 col-sm-12 col-md-12 col-lg-2 col-xl-2\">\r\n            <h1 class=\"hero-content__name\">\r\n                <a href=\"http://222.252.26.108:9980/source/public\" title=\"\">\r\n                    <img width=\"152px\" src=\"http://222.252.26.108:9980/source/public/images/graphics/logo_pc_s.png\" srcset=\"http://222.252.26.108:9980/source/public/images/graphics/logo_pc_s.png 1x\" alt=\"Tự nhiên như hơi thở\">\r\n                </a>\r\n            </h1>\r\n        </div>\r\n        <div class=\"col-12 col-sm-12 col-md-12 col-lg-5 col-xl-5\">\r\n            <ul class=\"menu\">\r\n                <li><a href=\"http://222.252.26.108:9980/source/public/ve-chung-toi\" title=\"Về chúng tôi\">Về chúng tôi</a></li>\r\n                <li class=\"active\"><a href=\"http://222.252.26.108:9980/source/public/hoat-dong\" title=\"Hoạt động\">Hoạt động</a></li>\r\n                <li><a href=\"http://222.252.26.108:9980/source/public/giai-phap\" title=\"Liên hệ\">Liên hệ</a></li>\r\n            </ul>\r\n        </div>\r\n        <div class=\"col-12 col-sm-12 col-md-12 col-lg-5 col-xl-5\">\r\n            <ul class=\"contact w-100\">\r\n                <li class=\"ml-2 first\">\r\n                    <a href=\"tel:0964783913\" title=\"Hotline\">\r\n                        <img src=\"http://222.252.26.108:9980/source/public/images/graphics/btn_call_247_s.png\" srcset=\"http://222.252.26.108:9980/source/public/images/graphics/btn_call_247_s.png 1x\" alt=\"Hotline\">\r\n                        0964 783 913\r\n                    </a>\r\n                </li>\r\n                <li>\r\n                    <a href=\"javascript:void(0)\" title=\"Instagram\" target=\"_blank\">\r\n                        <img src=\"http://222.252.26.108:9980/source/public/images/graphics/ic-instagram_s.png\" srcset=\"http://222.252.26.108:9980/source/public/images/graphics/ic-instagram_s.png 1x\" alt=\"Instagram\">\r\n                    </a>\r\n                </li>\r\n                <li>\r\n                    <a href=\"javascript:void(0)\" title=\"Youtube\" target=\"_blank\">\r\n                        <img src=\"http://222.252.26.108:9980/source/public/images/graphics/ic-youtube_s.png\" srcset=\"http://222.252.26.108:9980/source/public/images/graphics/ic-youtube_s.png 1x\" alt=\"Youtube\">\r\n                    </a>\r\n                </li>\r\n                <li>\r\n                    <a href=\"javascript:void(0)\" title=\"Facebook\" target=\"_blank\">\r\n                        <img src=\"http://222.252.26.108:9980/source/public/images/graphics/ic-facebook_s.png\" srcset=\"http://222.252.26.108:9980/source/public/images/graphics/ic-facebook_s.png 1x\" alt=\"Facebook\">\r\n                    </a>\r\n                </li>\r\n            </ul>\r\n        </div>\r\n    </div>\r\n    <div class=\"row top\">\r\n        <div class=\"col-12 col-sm-12 col-md-12 col-lg-2 col-xl-2\">\r\n            <h1 class=\"hero-content__name\">\r\n                <a href=\"http://222.252.26.108:9980/source/public\" title=\"\">\r\n                    <img src=\"http://222.252.26.108:9980/source/public/images/graphics/logo_pc.png\" srcset=\"http://222.252.26.108:9980/source/public/images/graphics/logo_pc.png 1x\" alt=\"Tự nhiên như hơi thở\">\r\n                </a>\r\n            </h1>\r\n        </div>\r\n        <div class=\"col-12 col-sm-12 col-md-12 col-lg-5 col-xl-5\">\r\n            <ul class=\"menu\">\r\n                <li><a href=\"http://222.252.26.108:9980/source/public/ve-chung-toi\" title=\"Về chúng tôi\">Về chúng tôi</a></li>\r\n                <li class=\"active\"><a href=\"http://222.252.26.108:9980/source/public/hoat-dong\" title=\"Hoạt động\">Hoạt động</a></li>\r\n                <li><a href=\"http://222.252.26.108:9980/source/public/giai-phap\" title=\"Liên hệ\">Liên hệ</a></li>\r\n            </ul>\r\n        </div>\r\n        <div class=\"col-12 col-sm-12 col-md-12 col-lg-5 col-xl-5\">\r\n            <ul class=\"contact w-100\">\r\n                <li class=\"ml-2 first\">\r\n                    <a href=\"tel:0964783913\" title=\"Hotline\">\r\n                        <img src=\"http://222.252.26.108:9980/source/public/images/graphics/btn_call_247.png\" srcset=\"http://222.252.26.108:9980/source/public/images/graphics/btn_call_247.png 1x\" alt=\"Hotline\">\r\n                        0964 783 913\r\n                    </a>\r\n                </li>\r\n                <li>\r\n                    <a href=\"javascript:void(0)\" title=\"Instagram\" target=\"_blank\">\r\n                        <img src=\"http://222.252.26.108:9980/source/public/images/graphics/ic-instagram.png\" srcset=\"http://222.252.26.108:9980/source/public/images/graphics/ic-instagram.png 1x\" alt=\"Instagram\">\r\n                    </a>\r\n                </li>\r\n                <li>\r\n                    <a href=\"javascript:void(0)\" title=\"Youtube\" target=\"_blank\">\r\n                        <img src=\"http://222.252.26.108:9980/source/public/images/graphics/ic-youtube.png\" srcset=\"http://222.252.26.108:9980/source/public/images/graphics/ic-youtube.png 1x\" alt=\"Youtube\">\r\n                    </a>\r\n                </li>\r\n                <li>\r\n                    <a href=\"javascript:void(0)\" title=\"Facebook\" target=\"_blank\">\r\n                        <img src=\"http://222.252.26.108:9980/source/public/images/graphics/ic-facebook.png\" srcset=\"http://222.252.26.108:9980/source/public/images/graphics/ic-facebook.png 1x\" alt=\"Facebook\">\r\n                    </a>\r\n                </li>\r\n            </ul>\r\n        </div>\r\n    </div>\r\n    <div class=\"container\">\r\n        <div class=\"row\">\r\n            <div class=\"col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 text-center\">\r\n                                    <h2 id=\"other\">\r\n                        Gắn kết cộng đồng<br>\r\n                    chia sẻ yêu thương</h2>\r\n                            </div>\r\n        </div>\r\n    </div>\r\n</header>', '2021-03-16 09:54:58', '2021-03-16 09:54:58'),
(9, 1, 'activity', 0, NULL, 'slogan_banner', 'widget.activity.slogan_banner', 'static', '<style>\r\n    #slogan_banner {\r\n        height: 454px;\r\n        margin-bottom: 0;\r\n        font-weight: bold;\r\n        font-size: 40px;\r\n        color: rgba(255,255,255,1);\r\n        letter-spacing: 0.64px;\r\n        text-transform: uppercase;\r\n        padding-top: 260px;\r\n    }\r\n\r\n    #slogan_banner h2 {\r\n        font-size: 50px;\r\n        line-height: 64px;\r\n        text-transform: none;\r\n    }\r\n\r\n    /** Mobile **/\r\n    @media (max-width: 991.98px) {\r\n        #slogan_banner {\r\n            padding-top: 50px;\r\n        }\r\n    }\r\n</style>\r\n<section id=\"slogan_banner\" style=\"background-image: url(\'http://222.252.26.108:9980/source/public/images/graphics/Mask_Group_61.png\')\">\r\n    <div class=\"container\">\r\n        <div class=\"row\">\r\n            <div class=\"col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 text-center font-weight-bold\">\r\n                <h2>Đi với người tiên phong<br>\r\n                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;bạn sẽ là người dẫn đầu</h2>\r\n            </div>\r\n        </div>\r\n    </div>\r\n</section>', '2021-03-16 09:57:28', '2021-03-16 09:57:28'),
(10, 1, 'activity.detail', 0, NULL, 'header_banner', 'widget.activity.detail.header_banner', 'static', '<style>\r\n    #header {\r\n        height: 852.594px;\r\n        padding-top: 0 !important;\r\n        background: url(http://222.252.26.108:9980/source/public/images/graphics/Treungthu.png) no-repeat top left;\r\n        background-position-x: 60%;\r\n    }\r\n\r\n    #header .top{\r\n        width: 90%;\r\n        margin: 0 auto !important;\r\n    }\r\n\r\n    #header.other  {\r\n        height: 706px;\r\n    }\r\n\r\n    #header ul {\r\n        margin-top: 20px;\r\n        margin-left: 20px;\r\n        list-style: none;\r\n    }\r\n\r\n    #header ul.menu li {\r\n        float: left;\r\n        margin-right: 40px;\r\n    }\r\n\r\n    #header ul.menu li.active {\r\n        position: relative;\r\n    }\r\n\r\n    #header ul.menu li.active:after {\r\n        content: \"\";\r\n        display: block;\r\n        width: 90%;\r\n        height: 3px;\r\n        background: #D60F0F;\r\n        position: absolute;\r\n        bottom: -10px;\r\n        left: 50%;\r\n        transform: translateX(-50%);\r\n    }\r\n\r\n    #header ul.menu li a {\r\n        color: #FFF;\r\n        font-size: 14px;\r\n    }\r\n\r\n    #header ul.contact li {\r\n        float: right;\r\n        margin-right: 3%;\r\n    }\r\n\r\n    #header ul.contact li.first {\r\n        background-color: #FFF;\r\n        border-radius: 20px;\r\n        padding: 2px 18px;\r\n        font-weight: bold;\r\n    }\r\n\r\n    #header ul.contact li.first a {\r\n        color: #DA0404;\r\n    }\r\n\r\n    #navigation ul.contact li.first {\r\n        background-color: #DA0404;\r\n    }\r\n\r\n    #navigation ul.contact li.first a {\r\n        color: #FFF;\r\n    }\r\n\r\n    #header ul.contact img {\r\n        height: 25px;\r\n    }\r\n\r\n    .homev2 .hero-content__name {\r\n        width: auto;\r\n    }\r\n\r\n    .TNG_i_t_vn_min_ph_be_Class {\r\n        text-align: center;\r\n        font-style: normal;\r\n        font-weight: bold;\r\n        font-size: 13px;\r\n        color: #2F318C;\r\n        text-transform: uppercase;\r\n        line-height: 70px;\r\n        margin-right: 15px;\r\n    }\r\n\r\n    .btn_call_247 {\r\n        width: 200px;\r\n        height: 44px;\r\n        line-height: 39px;\r\n        border-radius: 25px;\r\n        border: 2px solid #2F318C;\r\n        background-color: #2F318C;\r\n        margin-top: 10px;\r\n        font-size: 21px;\r\n        color: #FFF !important;\r\n        font-weight: bold;\r\n        margin-right: 15px;\r\n    }\r\n\r\n    .ic_call_24px_fe {\r\n        margin: 10px 7px 10px 15px;\r\n    }\r\n\r\n    .Group_677_i {\r\n        padding: 10px 35px;\r\n        border-radius: 25px;\r\n        background-color: #c70000;\r\n        margin-top: 10px;\r\n        width: 235px;\r\n        text-align: center;\r\n    }\r\n\r\n    .Group_677_i a {\r\n        font-size: 21px;\r\n        color: #FFF;\r\n        font-weight: bold;\r\n    }\r\n\r\n    .Group_677_i a:hover {\r\n        color: #FFF;\r\n    }\r\n\r\n    .Rectangle_178 {\r\n        margin-top: 100px;\r\n        margin-bottom: 20px;\r\n        overflow: visible;\r\n        width: 129px;\r\n        height: 9px;\r\n        left: 896px;\r\n        top: 169px;\r\n    }\r\n\r\n    .Rectangle_178_Class {\r\n        fill: rgba(255, 52, 52, 1);\r\n    }\r\n\r\n    #header h2 {\r\n        color: #FFF;\r\n        font-size: 45px;\r\n        line-height: 57px;\r\n        font-family: Spectral;\r\n        font-weight: normal;\r\n    }\r\n\r\n    #header h2#other {\r\n        text-align: left !important;\r\n        margin-top: 190px;\r\n        font-size: 65px;\r\n        line-height: 80px;\r\n        position: relative;\r\n        font-family: Spectral;\r\n    }\r\n\r\n    #header h2#other:after {\r\n        content: \"\";\r\n        display: block;\r\n        width: 129px;\r\n        height: 9px;\r\n        background: #D60F0F;\r\n        position: absolute;\r\n        top: -35px;\r\n        left: 5%;\r\n        transform: translateX(-50%);\r\n    }\r\n\r\n    #header h2#solution:after {\r\n        display: none;\r\n    }\r\n\r\n    .Rectangle_193 {\r\n        height: 160px;\r\n        width: 10px;\r\n        margin-right: 10px;\r\n        float: left;\r\n        margin-top: 150px;\r\n    }\r\n\r\n    .Rectangle_193_Class {\r\n        fill: rgba(255, 52, 52, 1);\r\n        height: 160px;\r\n        width: 8px;\r\n    }\r\n\r\n    .Rectangle_193.solution {\r\n        height: 220px;\r\n        margin-top: 195px;\r\n    }\r\n\r\n    .Rectangle_193_Class.solution {\r\n        height: 220px;\r\n    }\r\n\r\n    #navigation {\r\n        width: 90%;\r\n        margin: auto !important;\r\n        z-index: 2;\r\n    }\r\n\r\n    /* The sticky class is added to the header with JS when it reaches its scroll position */\r\n    .sticky {\r\n        position: fixed;\r\n        top: 0;\r\n        width: 100% !important;\r\n        padding: 0 5%;\r\n        background-color: #FFF;\r\n        z-index: 1;\r\n    }\r\n\r\n    /* Add some top padding to the page content to prevent sudden quick movement (as the header gets a new position at the top of the page (position:fixed and top:0) */\r\n    .sticky + .content {\r\n        padding-top: 102px;\r\n    }\r\n\r\n    #navigation ul.menu li a {\r\n        color: #393939;\r\n    }\r\n\r\n    /** Mobile **/\r\n    @media (max-width: 991.98px) {\r\n        .homev2 .header {\r\n            background-color: rgba(38, 40, 144, 1) !important;\r\n            height: auto;\r\n            padding: 0;\r\n        }\r\n\r\n        .homev2 .heading-mobile__in .hero-content__name {\r\n            margin-right: 0;\r\n        }\r\n\r\n        .homev2 .header .hotline__icon {\r\n            width: 100%;\r\n            margin: 15px;\r\n        }\r\n\r\n        .homev2 .heading-mobile__in .hero-content__name {\r\n            width: 50% !important;\r\n        }\r\n\r\n        .hero-content__name {\r\n            margin: 10px 0;\r\n        }\r\n\r\n        #header ul.menu li {\r\n            margin-bottom: 10px;\r\n        }\r\n\r\n        #header ul.contact li.first {\r\n            margin-right: 40px;\r\n        }\r\n\r\n        #navigation {\r\n            width: 100%;\r\n        }\r\n    }\r\n</style>\r\n<header id=\"header\" class=\"other\">\r\n    <div id=\"navigation\" class=\"row\" style=\"display: none;\">\r\n        <div class=\"col-12 col-sm-12 col-md-12 col-lg-2 col-xl-2\">\r\n            <h1 class=\"hero-content__name\">\r\n                <a href=\"http://222.252.26.108:9980/source/public\" title=\"\">\r\n                    <img width=\"152px\" src=\"http://222.252.26.108:9980/source/public/images/graphics/logo_pc_s.png\" srcset=\"http://222.252.26.108:9980/source/public/images/graphics/logo_pc_s.png 1x\" alt=\"Tự nhiên như hơi thở\">\r\n                </a>\r\n            </h1>\r\n        </div>\r\n        <div class=\"col-12 col-sm-12 col-md-12 col-lg-5 col-xl-5\">\r\n            <ul class=\"menu\">\r\n                <li><a href=\"http://222.252.26.108:9980/source/public/ve-chung-toi\" title=\"Về chúng tôi\">Về chúng tôi</a></li>\r\n                <li class=\"active\"><a href=\"http://222.252.26.108:9980/source/public/hoat-dong\" title=\"Hoạt động\">Hoạt động</a></li>\r\n                <li><a href=\"http://222.252.26.108:9980/source/public/giai-phap\" title=\"Liên hệ\">Liên hệ</a></li>\r\n            </ul>\r\n        </div>\r\n        <div class=\"col-12 col-sm-12 col-md-12 col-lg-5 col-xl-5\">\r\n            <ul class=\"contact w-100\">\r\n                <li class=\"ml-2 first\">\r\n                    <a href=\"tel:0964783913\" title=\"Hotline\">\r\n                        <img src=\"http://222.252.26.108:9980/source/public/images/graphics/btn_call_247_s.png\" srcset=\"http://222.252.26.108:9980/source/public/images/graphics/btn_call_247_s.png 1x\" alt=\"Hotline\">\r\n                        0964 783 913\r\n                    </a>\r\n                </li>\r\n                <li>\r\n                    <a href=\"javascript:void(0)\" title=\"Instagram\" target=\"_blank\">\r\n                        <img src=\"http://222.252.26.108:9980/source/public/images/graphics/ic-instagram_s.png\" srcset=\"http://222.252.26.108:9980/source/public/images/graphics/ic-instagram_s.png 1x\" alt=\"Instagram\">\r\n                    </a>\r\n                </li>\r\n                <li>\r\n                    <a href=\"javascript:void(0)\" title=\"Youtube\" target=\"_blank\">\r\n                        <img src=\"http://222.252.26.108:9980/source/public/images/graphics/ic-youtube_s.png\" srcset=\"http://222.252.26.108:9980/source/public/images/graphics/ic-youtube_s.png 1x\" alt=\"Youtube\">\r\n                    </a>\r\n                </li>\r\n                <li>\r\n                    <a href=\"javascript:void(0)\" title=\"Facebook\" target=\"_blank\">\r\n                        <img src=\"http://222.252.26.108:9980/source/public/images/graphics/ic-facebook_s.png\" srcset=\"http://222.252.26.108:9980/source/public/images/graphics/ic-facebook_s.png 1x\" alt=\"Facebook\">\r\n                    </a>\r\n                </li>\r\n            </ul>\r\n        </div>\r\n    </div>\r\n    <div class=\"row top\">\r\n        <div class=\"col-12 col-sm-12 col-md-12 col-lg-2 col-xl-2\">\r\n            <h1 class=\"hero-content__name\">\r\n                <a href=\"http://222.252.26.108:9980/source/public\" title=\"\">\r\n                    <img src=\"http://222.252.26.108:9980/source/public/images/graphics/logo_pc.png\" srcset=\"http://222.252.26.108:9980/source/public/images/graphics/logo_pc.png 1x\" alt=\"Tự nhiên như hơi thở\">\r\n                </a>\r\n            </h1>\r\n        </div>\r\n        <div class=\"col-12 col-sm-12 col-md-12 col-lg-5 col-xl-5\">\r\n            <ul class=\"menu\">\r\n                <li><a href=\"http://222.252.26.108:9980/source/public/ve-chung-toi\" title=\"Về chúng tôi\">Về chúng tôi</a></li>\r\n                <li class=\"active\"><a href=\"http://222.252.26.108:9980/source/public/hoat-dong\" title=\"Hoạt động\">Hoạt động</a></li>\r\n                <li><a href=\"http://222.252.26.108:9980/source/public/giai-phap\" title=\"Liên hệ\">Liên hệ</a></li>\r\n            </ul>\r\n        </div>\r\n        <div class=\"col-12 col-sm-12 col-md-12 col-lg-5 col-xl-5\">\r\n            <ul class=\"contact w-100\">\r\n                <li class=\"ml-2 first\">\r\n                    <a href=\"tel:0964783913\" title=\"Hotline\">\r\n                        <img src=\"http://222.252.26.108:9980/source/public/images/graphics/btn_call_247.png\" srcset=\"http://222.252.26.108:9980/source/public/images/graphics/btn_call_247.png 1x\" alt=\"Hotline\">\r\n                        0964 783 913\r\n                    </a>\r\n                </li>\r\n                <li>\r\n                    <a href=\"javascript:void(0)\" title=\"Instagram\" target=\"_blank\">\r\n                        <img src=\"http://222.252.26.108:9980/source/public/images/graphics/ic-instagram.png\" srcset=\"http://222.252.26.108:9980/source/public/images/graphics/ic-instagram.png 1x\" alt=\"Instagram\">\r\n                    </a>\r\n                </li>\r\n                <li>\r\n                    <a href=\"javascript:void(0)\" title=\"Youtube\" target=\"_blank\">\r\n                        <img src=\"http://222.252.26.108:9980/source/public/images/graphics/ic-youtube.png\" srcset=\"http://222.252.26.108:9980/source/public/images/graphics/ic-youtube.png 1x\" alt=\"Youtube\">\r\n                    </a>\r\n                </li>\r\n                <li>\r\n                    <a href=\"javascript:void(0)\" title=\"Facebook\" target=\"_blank\">\r\n                        <img src=\"http://222.252.26.108:9980/source/public/images/graphics/ic-facebook.png\" srcset=\"http://222.252.26.108:9980/source/public/images/graphics/ic-facebook.png 1x\" alt=\"Facebook\">\r\n                    </a>\r\n                </li>\r\n            </ul>\r\n        </div>\r\n    </div>\r\n    <div class=\"container\">\r\n        <div class=\"row\">\r\n            <div class=\"col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 text-center\">\r\n                                    <h2 id=\"other\">\r\n                        Chúng ta sống<br>\r\n                    bởi những gì mình có được<br>\r\n                    còn tạo nên cuộc đời<br>\r\n                    bằng những thứ cho đi</h2>\r\n                            </div>\r\n        </div>\r\n    </div>\r\n</header>', '2021-03-16 10:11:54', '2021-03-16 10:11:54'),
(11, 1, 'activity.detail', 0, NULL, 'slogan_banner', 'widget.activity.detail.slogan_banner', 'static', '<style>\r\n    #slogan_banner {\r\n        height: 454px;\r\n        margin-bottom: 0;\r\n        font-weight: bold;\r\n        font-size: 40px;\r\n        color: rgba(255,255,255,1);\r\n        letter-spacing: 0.64px;\r\n        text-transform: uppercase;\r\n        padding-top: 260px;\r\n    }\r\n\r\n    #slogan_banner h2 {\r\n        font-size: 50px;\r\n        line-height: 64px;\r\n        text-transform: none;\r\n    }\r\n\r\n    /** Mobile **/\r\n    @media (max-width: 991.98px) {\r\n        #slogan_banner {\r\n            padding-top: 50px;\r\n        }\r\n    }\r\n</style>\r\n<section id=\"slogan_banner\" style=\"background-image: url(\'http://222.252.26.108:9980/source/public/images/graphics/Mask_Group_61.png\')\">\r\n    <div class=\"container\">\r\n        <div class=\"row\">\r\n            <div class=\"col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 text-center font-weight-bold\">\r\n                <h2>Đi với người tiên phong<br>\r\n                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;bạn sẽ là người dẫn đầu</h2>\r\n            </div>\r\n        </div>\r\n    </div>\r\n</section>', '2021-03-16 10:12:18', '2021-03-16 10:12:18'),
(12, 1, 'solution', 0, NULL, 'header_banner', 'widget.solution.header_banner', 'static', '<style>\r\n    #header {\r\n        height: 852.594px;\r\n        padding-top: 0 !important;\r\n        background: url(http://222.252.26.108:9980/source/public/images/graphics/Chia_kha.png) no-repeat top left;\r\n        background-position-x: 60%;\r\n    }\r\n\r\n    #header .top{\r\n        width: 90%;\r\n        margin: 0 auto !important;\r\n    }\r\n\r\n    #header.solution  {\r\n        height: 706px;\r\n    }\r\n\r\n    #header ul {\r\n        margin-top: 20px;\r\n        margin-left: 20px;\r\n        list-style: none;\r\n    }\r\n\r\n    #header ul.menu li {\r\n        float: left;\r\n        margin-right: 40px;\r\n    }\r\n\r\n    #header ul.menu li.active {\r\n        position: relative;\r\n    }\r\n\r\n    #header ul.menu li.active:after {\r\n        content: \"\";\r\n        display: block;\r\n        width: 90%;\r\n        height: 3px;\r\n        background: #D60F0F;\r\n        position: absolute;\r\n        bottom: -10px;\r\n        left: 50%;\r\n        transform: translateX(-50%);\r\n    }\r\n\r\n    #header ul.menu li a {\r\n        color: #FFF;\r\n        font-size: 14px;\r\n    }\r\n\r\n    #header ul.contact li {\r\n        float: right;\r\n        margin-right: 3%;\r\n    }\r\n\r\n    #header ul.contact li.first {\r\n        background-color: #FFF;\r\n        border-radius: 20px;\r\n        padding: 2px 18px;\r\n        font-weight: bold;\r\n    }\r\n\r\n    #header ul.contact li.first a {\r\n        color: #DA0404;\r\n    }\r\n\r\n    #navigation ul.contact li.first {\r\n        background-color: #DA0404;\r\n    }\r\n\r\n    #navigation ul.contact li.first a {\r\n        color: #FFF;\r\n    }\r\n\r\n    #header ul.contact img {\r\n        height: 25px;\r\n    }\r\n\r\n    .homev2 .hero-content__name {\r\n        width: auto;\r\n    }\r\n\r\n    .TNG_i_t_vn_min_ph_be_Class {\r\n        text-align: center;\r\n        font-style: normal;\r\n        font-weight: bold;\r\n        font-size: 13px;\r\n        color: #2F318C;\r\n        text-transform: uppercase;\r\n        line-height: 70px;\r\n        margin-right: 15px;\r\n    }\r\n\r\n    .btn_call_247 {\r\n        width: 200px;\r\n        height: 44px;\r\n        line-height: 39px;\r\n        border-radius: 25px;\r\n        border: 2px solid #2F318C;\r\n        background-color: #2F318C;\r\n        margin-top: 10px;\r\n        font-size: 21px;\r\n        color: #FFF !important;\r\n        font-weight: bold;\r\n        margin-right: 15px;\r\n    }\r\n\r\n    .ic_call_24px_fe {\r\n        margin: 10px 7px 10px 15px;\r\n    }\r\n\r\n    .Group_677_i {\r\n        padding: 10px 35px;\r\n        border-radius: 25px;\r\n        background-color: #c70000;\r\n        margin-top: 10px;\r\n        width: 235px;\r\n        text-align: center;\r\n    }\r\n\r\n    .Group_677_i a {\r\n        font-size: 21px;\r\n        color: #FFF;\r\n        font-weight: bold;\r\n    }\r\n\r\n    .Group_677_i a:hover {\r\n        color: #FFF;\r\n    }\r\n\r\n    .Rectangle_178 {\r\n        margin-top: 100px;\r\n        margin-bottom: 20px;\r\n        overflow: visible;\r\n        width: 129px;\r\n        height: 9px;\r\n        left: 896px;\r\n        top: 169px;\r\n    }\r\n\r\n    .Rectangle_178_Class {\r\n        fill: rgba(255, 52, 52, 1);\r\n    }\r\n\r\n    #header h2 {\r\n        color: #FFF;\r\n        font-size: 45px;\r\n        line-height: 57px;\r\n        font-family: Spectral;\r\n        font-weight: normal;\r\n    }\r\n\r\n    #header h2#solution {\r\n        text-align: left !important;\r\n        margin-top: 190px;\r\n        font-size: 65px;\r\n        line-height: 80px;\r\n        position: relative;\r\n        font-family: Spectral;\r\n    }\r\n\r\n    #header h2#solution:after {\r\n        content: \"\";\r\n        display: block;\r\n        width: 129px;\r\n        height: 9px;\r\n        background: #D60F0F;\r\n        position: absolute;\r\n        top: -35px;\r\n        left: 5%;\r\n        transform: translateX(-50%);\r\n    }\r\n\r\n    #header h2#solution:after {\r\n        display: none;\r\n    }\r\n\r\n    .Rectangle_193 {\r\n        height: 160px;\r\n        width: 10px;\r\n        margin-right: 10px;\r\n        float: left;\r\n        margin-top: 150px;\r\n    }\r\n\r\n    .Rectangle_193_Class {\r\n        fill: rgba(255, 52, 52, 1);\r\n        height: 160px;\r\n        width: 8px;\r\n    }\r\n\r\n    .Rectangle_193.solution {\r\n        height: 220px;\r\n        margin-top: 195px;\r\n    }\r\n\r\n    .Rectangle_193_Class.solution {\r\n        height: 220px;\r\n    }\r\n\r\n    #navigation {\r\n        width: 90%;\r\n        margin: auto !important;\r\n        z-index: 2;\r\n    }\r\n\r\n    /* The sticky class is added to the header with JS when it reaches its scroll position */\r\n    .sticky {\r\n        position: fixed;\r\n        top: 0;\r\n        width: 100% !important;\r\n        padding: 0 5%;\r\n        background-color: #FFF;\r\n        z-index: 1;\r\n    }\r\n\r\n    /* Add some top padding to the page content to prevent sudden quick movement (as the header gets a new position at the top of the page (position:fixed and top:0) */\r\n    .sticky + .content {\r\n        padding-top: 102px;\r\n    }\r\n\r\n    #navigation ul.menu li a {\r\n        color: #393939;\r\n    }\r\n\r\n    /** Mobile **/\r\n    @media (max-width: 991.98px) {\r\n        .homev2 .header {\r\n            background-color: rgba(38, 40, 144, 1) !important;\r\n            height: auto;\r\n            padding: 0;\r\n        }\r\n\r\n        .homev2 .heading-mobile__in .hero-content__name {\r\n            margin-right: 0;\r\n        }\r\n\r\n        .homev2 .header .hotline__icon {\r\n            width: 100%;\r\n            margin: 15px;\r\n        }\r\n\r\n        .homev2 .heading-mobile__in .hero-content__name {\r\n            width: 50% !important;\r\n        }\r\n\r\n        .hero-content__name {\r\n            margin: 10px 0;\r\n        }\r\n\r\n        #header ul.menu li {\r\n            margin-bottom: 10px;\r\n        }\r\n\r\n        #header ul.contact li.first {\r\n            margin-right: 40px;\r\n        }\r\n\r\n        #navigation {\r\n            width: 100%;\r\n        }\r\n    }\r\n</style>\r\n<header id=\"header\" class=\"solution\">\r\n    <div id=\"navigation\" class=\"row\" style=\"display: none;\">\r\n        <div class=\"col-12 col-sm-12 col-md-12 col-lg-2 col-xl-2\">\r\n            <h1 class=\"hero-content__name\">\r\n                <a href=\"http://222.252.26.108:9980/source/public\" title=\"\">\r\n                    <img width=\"152px\" src=\"http://222.252.26.108:9980/source/public/images/graphics/logo_pc_s.png\" srcset=\"http://222.252.26.108:9980/source/public/images/graphics/logo_pc_s.png 1x\" alt=\"Tự nhiên như hơi thở\">\r\n                </a>\r\n            </h1>\r\n        </div>\r\n        <div class=\"col-12 col-sm-12 col-md-12 col-lg-5 col-xl-5\">\r\n            <ul class=\"menu\">\r\n                <li><a href=\"http://222.252.26.108:9980/source/public/ve-chung-toi\" title=\"Về chúng tôi\">Về chúng tôi</a></li>\r\n                <li><a href=\"http://222.252.26.108:9980/source/public/hoat-dong\" title=\"Hoạt động\">Hoạt động</a></li>\r\n                <li class=\"active\"><a href=\"http://222.252.26.108:9980/source/public/giai-phap\" title=\"Liên hệ\">Liên hệ</a></li>\r\n            </ul>\r\n        </div>\r\n        <div class=\"col-12 col-sm-12 col-md-12 col-lg-5 col-xl-5\">\r\n            <ul class=\"contact w-100\">\r\n                <li class=\"ml-2 first\">\r\n                    <a href=\"tel:0964783913\" title=\"Hotline\">\r\n                        <img src=\"http://222.252.26.108:9980/source/public/images/graphics/btn_call_247_s.png\" srcset=\"http://222.252.26.108:9980/source/public/images/graphics/btn_call_247_s.png 1x\" alt=\"Hotline\">\r\n                        0964 783 913\r\n                    </a>\r\n                </li>\r\n                <li>\r\n                    <a href=\"javascript:void(0)\" title=\"Instagram\" target=\"_blank\">\r\n                        <img src=\"http://222.252.26.108:9980/source/public/images/graphics/ic-instagram_s.png\" srcset=\"http://222.252.26.108:9980/source/public/images/graphics/ic-instagram_s.png 1x\" alt=\"Instagram\">\r\n                    </a>\r\n                </li>\r\n                <li>\r\n                    <a href=\"javascript:void(0)\" title=\"Youtube\" target=\"_blank\">\r\n                        <img src=\"http://222.252.26.108:9980/source/public/images/graphics/ic-youtube_s.png\" srcset=\"http://222.252.26.108:9980/source/public/images/graphics/ic-youtube_s.png 1x\" alt=\"Youtube\">\r\n                    </a>\r\n                </li>\r\n                <li>\r\n                    <a href=\"javascript:void(0)\" title=\"Facebook\" target=\"_blank\">\r\n                        <img src=\"http://222.252.26.108:9980/source/public/images/graphics/ic-facebook_s.png\" srcset=\"http://222.252.26.108:9980/source/public/images/graphics/ic-facebook_s.png 1x\" alt=\"Facebook\">\r\n                    </a>\r\n                </li>\r\n            </ul>\r\n        </div>\r\n    </div>\r\n    <div class=\"row top\">\r\n        <div class=\"col-12 col-sm-12 col-md-12 col-lg-2 col-xl-2\">\r\n            <h1 class=\"hero-content__name\">\r\n                <a href=\"http://222.252.26.108:9980/source/public\" title=\"\">\r\n                    <img src=\"http://222.252.26.108:9980/source/public/images/graphics/logo_pc.png\" srcset=\"http://222.252.26.108:9980/source/public/images/graphics/logo_pc.png 1x\" alt=\"Tự nhiên như hơi thở\">\r\n                </a>\r\n            </h1>\r\n        </div>\r\n        <div class=\"col-12 col-sm-12 col-md-12 col-lg-5 col-xl-5\">\r\n            <ul class=\"menu\">\r\n                <li><a href=\"http://222.252.26.108:9980/source/public/ve-chung-toi\" title=\"Về chúng tôi\">Về chúng tôi</a></li>\r\n                <li><a href=\"http://222.252.26.108:9980/source/public/hoat-dong\" title=\"Hoạt động\">Hoạt động</a></li>\r\n                <li class=\"active\"><a href=\"http://222.252.26.108:9980/source/public/giai-phap\" title=\"Liên hệ\">Liên hệ</a></li>\r\n            </ul>\r\n        </div>\r\n        <div class=\"col-12 col-sm-12 col-md-12 col-lg-5 col-xl-5\">\r\n            <ul class=\"contact w-100\">\r\n                <li class=\"ml-2 first\">\r\n                    <a href=\"tel:0964783913\" title=\"Hotline\">\r\n                        <img src=\"http://222.252.26.108:9980/source/public/images/graphics/btn_call_247.png\" srcset=\"http://222.252.26.108:9980/source/public/images/graphics/btn_call_247.png 1x\" alt=\"Hotline\">\r\n                        0964 783 913\r\n                    </a>\r\n                </li>\r\n                <li>\r\n                    <a href=\"javascript:void(0)\" title=\"Instagram\" target=\"_blank\">\r\n                        <img src=\"http://222.252.26.108:9980/source/public/images/graphics/ic-instagram.png\" srcset=\"http://222.252.26.108:9980/source/public/images/graphics/ic-instagram.png 1x\" alt=\"Instagram\">\r\n                    </a>\r\n                </li>\r\n                <li>\r\n                    <a href=\"javascript:void(0)\" title=\"Youtube\" target=\"_blank\">\r\n                        <img src=\"http://222.252.26.108:9980/source/public/images/graphics/ic-youtube.png\" srcset=\"http://222.252.26.108:9980/source/public/images/graphics/ic-youtube.png 1x\" alt=\"Youtube\">\r\n                    </a>\r\n                </li>\r\n                <li>\r\n                    <a href=\"javascript:void(0)\" title=\"Facebook\" target=\"_blank\">\r\n                        <img src=\"http://222.252.26.108:9980/source/public/images/graphics/ic-facebook.png\" srcset=\"http://222.252.26.108:9980/source/public/images/graphics/ic-facebook.png 1x\" alt=\"Facebook\">\r\n                    </a>\r\n                </li>\r\n            </ul>\r\n        </div>\r\n    </div>\r\n    <div class=\"container\">\r\n        <div class=\"row\">\r\n            <div class=\"col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 text-center\">\r\n                                    <svg data-type=\"Rectangle\" data-name=\"Rectangle_193\" class=\"Rectangle_193 solution\">\r\n                        <rect class=\"Rectangle_193_Class solution\" rx=\"0\" ry=\"0\" x=\"0\" y=\"0\" width=\"5\" height=\"40\"></rect>\r\n                    </svg>\r\n                    <h2 id=\"solution\">\r\n                    MÔ HÌNH PHÁT HUY<br>\r\n                    SỨC MẠNH NỘI BỘ<br>DOANH NGHIỆP</h2>\r\n                            </div>\r\n        </div>\r\n    </div>\r\n</header>', '2021-03-16 10:13:21', '2021-03-16 10:13:21'),
(13, 1, 'solution', 0, NULL, 'slogan_banner', 'widget.solution.slogan_banner', 'static', '<style>\r\n    #slogan_banner {\r\n        height: 454px;\r\n        margin-bottom: 0;\r\n        font-weight: bold;\r\n        font-size: 40px;\r\n        color: rgba(255,255,255,1);\r\n        letter-spacing: 0.64px;\r\n        text-transform: uppercase;\r\n        padding-top: 260px;\r\n    }\r\n\r\n    #slogan_banner h2 {\r\n        font-size: 50px;\r\n        line-height: 64px;\r\n        text-transform: none;\r\n    }\r\n\r\n    /** Mobile **/\r\n    @media (max-width: 991.98px) {\r\n        #slogan_banner {\r\n            padding-top: 50px;\r\n        }\r\n    }\r\n</style>\r\n<section id=\"slogan_banner\" style=\"background-image: url(\'http://222.252.26.108:9980/source/public/images/graphics/Mask_Group_61.png\')\">\r\n    <div class=\"container\">\r\n        <div class=\"row\">\r\n            <div class=\"col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 text-center font-weight-bold\">\r\n                <h2>Đi với người tiên phong<br>\r\n                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;bạn sẽ là người dẫn đầu</h2>\r\n            </div>\r\n        </div>\r\n    </div>\r\n</section>', '2021-03-16 10:14:10', '2021-03-16 10:14:10'),
(14, 1, 'solution', 0, NULL, 'content1', 'widget.solution.content1', 'static', '<style>\r\n    #content1 h2 {\r\n        margin: 40px 0 20px;\r\n        color: rgba(255,52,52,1);\r\n        font-size: 35px;\r\n    }\r\n\r\n    #content1 ul {\r\n        list-style: none;\r\n        font-size: 17px;\r\n        line-height: 29px;\r\n        color: rgba(131,131,131,1);\r\n        margin-bottom: 30px;\r\n    }\r\n\r\n    #content1 ul li {\r\n        font-family: Spectral;\r\n    }\r\n\r\n    #content1 .highlight {\r\n        color: rgba(131,131,131,1);\r\n        font-family: Spectral;\r\n    }\r\n\r\n    #content1 hr {\r\n        width: 15%;\r\n        height: 3px;\r\n        background-color: rgba(255,52,52,1);\r\n    }\r\n\r\n    #content1 .box1 h2 {\r\n        color: #393939;\r\n        margin: 10px 0 20px;\r\n        padding: 10px;\r\n        border-radius: 10px;\r\n        line-height: 42px;\r\n        font-size: 30px;\r\n        font-weight: normal;\r\n    }\r\n</style>\r\n<section id=\"content1\">\r\n    <div class=\"container\">\r\n        <div class=\"row\">\r\n            <div class=\"col-12 col-sm-12 col-md-12 col-lg-6 col-xl-6\">\r\n                <h2>MONG MUỐN</h2>\r\n                <ul>\r\n                    <li>1: Đáp ứng nhu cầu của CBNV</li>\r\n                    <li>2: Tăng thêm các hoạt động phúc lợi cho CBNV</li>\r\n                    <li>3: Cùng CBNV thực hiện các giá trị cho cộng đồng, xã hội</li>\r\n                </ul>\r\n                <span class=\"highlight\"><strong>Từ đó:</strong></span>\r\n                <ul>\r\n                    <li>1: Tăng cường hiệu suất làm việc CBNV</li>\r\n                    <li>2: Gia tăng sự gắn bó, trung thành của người lao động</li>\r\n                    <li>3: Khẳng định danh tiếng của tổ chức</li>\r\n                </ul>\r\n                <hr>\r\n            </div>\r\n            <div class=\"col-12 col-sm-12 col-md-12 col-lg-6 col-xl-6\">\r\n                <h2>THỰC TRẠNG</h2>\r\n                <span class=\"highlight\"><strong>Nguồn tiền chi tiêu cho các hoạt động chủ yếu từ:</strong></span>\r\n                <ul>\r\n                    <li>1: Quỹ công đoàn</li>\r\n                    <li>2: Quỹ phúc lợi Doanh nghiệp</li>\r\n                    <li>3: Nguồn tài trợ từ mạnh thường quân</li>\r\n                    <li>4: Nguồn từ chính chủ doanh nghiệp</li>\r\n                </ul>\r\n                <span class=\"highlight\"><strong>Đặc điểm nguồn tiền:</strong></span>\r\n                <ul>\r\n                    <li>1: Phụ thuộc</li>\r\n                    <li>2: Biến động</li>\r\n                    <li>3: Không bền vững</li>\r\n                    <li>4: Chưa thỏa mãn hết các nhu cầu phúc lợi của NLĐ</li>\r\n                </ul>\r\n                <hr>\r\n            </div>\r\n        </div>\r\n        <div class=\"row mt-1\">\r\n            <div class=\"box1 col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 p-0\">\r\n                <h2>\r\n                    <span><img width=\"4%\" class=\"mr-1\" src=\"http://222.252.26.108:9980/source/public/images/icons/Asset_14.png\" srcset=\"http://222.252.26.108:9980/source/public/images/icons/Asset_14.png 1x\" alt=\"\"></span>\r\n                    Nút thắt là vấn đề tài chính</h2>\r\n            </div>\r\n        </div>\r\n    </div>\r\n</section>', '2021-03-16 10:15:16', '2021-03-16 10:15:15'),
(15, 1, 'solution', 0, NULL, 'slogan1', 'widget.solution.slogan1', 'static', '<style>\r\n    #slogan1 {\r\n        background-color: rgba(235,235,235,1);\r\n        margin-bottom: 0;\r\n    }\r\n\r\n    #slogan1 .container {\r\n        padding: 30px 0 90px;\r\n    }\r\n\r\n    #slogan1 h2 {\r\n        font-size: 58px;\r\n        margin-right: 85px;\r\n        margin-top: 60px;\r\n        margin-bottom: 25px;\r\n    }\r\n\r\n    #slogan1 p {\r\n        width: 70%;\r\n        text-align: center;\r\n        margin: auto;\r\n        line-height: 35px;\r\n        font-size: 25px;\r\n        font-family: Spectral;\r\n    }\r\n\r\n    .Rectangle_244 {\r\n        height: 40px;\r\n        width: 10px;\r\n    }\r\n\r\n    .Rectangle_244_Class {\r\n        fill: rgba(255,52,52,1);\r\n    }\r\n\r\n    #slogan1 h2.last-child {\r\n        font-size: 40px;\r\n    }\r\n</style>\r\n<section id=\"slogan1\">\r\n    <div class=\"container\">\r\n        <div class=\"row\">\r\n            <div class=\"col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12\">\r\n                <h2 class=\"text-center mt-2\">\r\n                    <img class=\"mr-2 pb-3\" src=\"http://222.252.26.108:9980/source/public/images/icons/Asset_8.png\" alt=\"\">\r\n                    PHI THƯƠNG BẤT PHÚ</h2>\r\n                <p>Làm sao để hưởng lợi ích từ thương mại nhưng không làm thay đổi bất kể hoạt động thông thường nào của doanh nghiệp?\r\n                    <img class=\"ml-3 pt-2\" src=\"http://222.252.26.108:9980/source/public/images/icons/Asset_9.png\" alt=\"\"></p>\r\n            </div>\r\n        </div>\r\n        <div class=\"row\">\r\n            <div class=\"col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12\">\r\n                <h2 class=\"last-child\"><svg data-type=\"Rectangle\" data-name=\"Rectangle 244\" class=\"Rectangle_244\">\r\n                        <rect class=\"Rectangle_244_Class\" rx=\"0\" ry=\"0\" x=\"0\" y=\"0\" width=\"5\" height=\"40\">\r\n                        </rect>\r\n                    </svg>\r\n                    VỀ MÔ HÌNH</h2>\r\n                <img class=\"w-100\" src=\"http://222.252.26.108:9980/source/public/images/graphics/Mask_Group_27.png\" srcset=\"http://222.252.26.108:9980/source/public/images/graphics/Mask_Group_27.png 1x, http://222.252.26.108:9980/source/public/images/graphics/Mask_Group_27@2x.png 2x\" alt=\"\">\r\n            </div>\r\n        </div>\r\n    </div>\r\n</section>', '2021-03-16 10:16:26', '2021-03-16 10:16:26'),
(16, 1, 'solution', 0, NULL, 'content2', 'widget.solution.content2', 'static', '<style>\r\n    #content2 {\r\n        background: url(\"http://222.252.26.108:9980/source/public/images/graphics/Mask_Group_60.png\") no-repeat top left;\r\n        height: 888px;\r\n        margin-bottom: 0;\r\n    }\r\n\r\n    #content2 .box2 {\r\n        background-color: rgba(227,31,38,1);\r\n        padding: 30px;\r\n        color: #FFF;\r\n        margin: 70px 0;\r\n    }\r\n\r\n    #content2 .box2 h2 {\r\n        font-size: 49px;\r\n        margin-bottom: 30px;\r\n    }\r\n\r\n    #content2 .box2 p {\r\n        font-size: 16px;\r\n        line-height: 24px;\r\n        font-family: Spectral;\r\n    }\r\n</style>\r\n<section id=\"content2\">\r\n    <div class=\"container\">\r\n        <div class=\"row\">\r\n            <div class=\"col-12 col-sm-12 col-md-12 col-lg-6 col-xl-6\"></div>\r\n            <div class=\"box2 col-12 col-sm-12 col-md-12 col-lg-6 col-xl-6\">\r\n                <h2>5 GIÁ TRỊ CỐT LÕI\r\n                    CỦA MÔ HÌNH</h2>\r\n                <p>\r\n                    Vivamus lectus arcu, commodo sed turpis sit amet, consectetur dapibus massa. Vivamus lectus arcu, commodo sed turpis sit amet, consectetur dapibus massa.\r\n                </p>\r\n                <p>\r\n                    Vivamus lectus arcu, commodo sed turpis sit amet, consectetur dapibus massa. Vivamus lectus arcu, commodo sed turpis sit amet, consectetur dapibus massa. Vivamus lectus arcu, commodo sed turpis sit amet, consectetur dapibus massa.\r\n                </p>\r\n                <p>\r\n                    Vivamus lectus arcu, commodo sed turpis sit amet, consectetur dapibus massa. Vivamus lectus arcu, commodo sed turpis sit amet, consectetur dapibus massa. Vivamus lectus arcu, commodo sed turpis sit amet, consectetur dapibus massa.\r\n                </p>\r\n            </div>\r\n        </div>\r\n    </div>\r\n</section>', '2021-03-16 10:17:55', '2021-03-16 10:17:55');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `activities`
--
ALTER TABLE `activities`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `authors`
--
ALTER TABLE `authors`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `banners`
--
ALTER TABLE `banners`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `category_has_posts`
--
ALTER TABLE `category_has_posts`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `customers`
--
ALTER TABLE `customers`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `menus`
--
ALTER TABLE `menus`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `model_has_permissions`
--
ALTER TABLE `model_has_permissions`
  ADD PRIMARY KEY (`permission_id`,`model_id`,`model_type`),
  ADD KEY `model_has_permissions_model_id_model_type_index` (`model_id`,`model_type`);

--
-- Chỉ mục cho bảng `model_has_roles`
--
ALTER TABLE `model_has_roles`
  ADD PRIMARY KEY (`role_id`,`model_id`,`model_type`),
  ADD KEY `model_has_roles_model_id_model_type_index` (`model_id`,`model_type`);

--
-- Chỉ mục cho bảng `pages`
--
ALTER TABLE `pages`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `partners`
--
ALTER TABLE `partners`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `password_resets`
--
ALTER TABLE `password_resets`
  ADD PRIMARY KEY (`id`),
  ADD KEY `password_resets_email_index` (`email`);

--
-- Chỉ mục cho bảng `permissions`
--
ALTER TABLE `permissions`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `post_has_tags`
--
ALTER TABLE `post_has_tags`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `role_has_permissions`
--
ALTER TABLE `role_has_permissions`
  ADD PRIMARY KEY (`permission_id`,`role_id`),
  ADD KEY `role_has_permissions_role_id_foreign` (`role_id`);

--
-- Chỉ mục cho bảng `settings`
--
ALTER TABLE `settings`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `sliders`
--
ALTER TABLE `sliders`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `solutions`
--
ALTER TABLE `solutions`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `tags`
--
ALTER TABLE `tags`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `templates`
--
ALTER TABLE `templates`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Chỉ mục cho bảng `widgets`
--
ALTER TABLE `widgets`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `activities`
--
ALTER TABLE `activities`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- AUTO_INCREMENT cho bảng `authors`
--
ALTER TABLE `authors`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT cho bảng `banners`
--
ALTER TABLE `banners`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT cho bảng `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT cho bảng `category_has_posts`
--
ALTER TABLE `category_has_posts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT cho bảng `comments`
--
ALTER TABLE `comments`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `customers`
--
ALTER TABLE `customers`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT cho bảng `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `menus`
--
ALTER TABLE `menus`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT cho bảng `pages`
--
ALTER TABLE `pages`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `partners`
--
ALTER TABLE `partners`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT cho bảng `password_resets`
--
ALTER TABLE `password_resets`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `permissions`
--
ALTER TABLE `permissions`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `posts`
--
ALTER TABLE `posts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT cho bảng `post_has_tags`
--
ALTER TABLE `post_has_tags`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT cho bảng `roles`
--
ALTER TABLE `roles`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `settings`
--
ALTER TABLE `settings`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT cho bảng `sliders`
--
ALTER TABLE `sliders`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `solutions`
--
ALTER TABLE `solutions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT cho bảng `tags`
--
ALTER TABLE `tags`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT cho bảng `templates`
--
ALTER TABLE `templates`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT cho bảng `widgets`
--
ALTER TABLE `widgets`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `model_has_permissions`
--
ALTER TABLE `model_has_permissions`
  ADD CONSTRAINT `model_has_permissions_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE;

--
-- Các ràng buộc cho bảng `model_has_roles`
--
ALTER TABLE `model_has_roles`
  ADD CONSTRAINT `model_has_roles_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE;

--
-- Các ràng buộc cho bảng `role_has_permissions`
--
ALTER TABLE `role_has_permissions`
  ADD CONSTRAINT `role_has_permissions_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `role_has_permissions_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
