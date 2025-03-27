-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th3 27, 2025 lúc 08:05 AM
-- Phiên bản máy phục vụ: 10.4.32-MariaDB
-- Phiên bản PHP: 8.0.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `basic_sql`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `users`
--

INSERT INTO `users` (`id`, `username`, `email`, `password`, `created_at`) VALUES
(9, 'phong123', 'admin@namincq.dev', '$2y$10$4Jl6.RO/0rQPFSXW02vIieWr0fgk0FL1OB/YpdN7on6SlLujgxiwe', '2025-03-27 05:34:08'),
(10, 'namincs', 'admin@naminc.devw', '$2y$10$4VudXqB5Tppz2bzk5Wl.0.qeHm8HL2X5k5zJ.GVyCrXVMl7XLVX6G', '2025-03-27 05:36:59'),
(11, '2251120177sdadad', 'yuyfkuw@exelica.com', '$2y$10$LV6rL8scxKvOnZ/1ENMsle8NfiEw0sIoqYVg2vaTFpP6xfX8i39NW', '2025-03-27 05:37:37'),
(12, 'namincaa', 'inc006@xnaminc.com', '$2y$10$rslZkpkNR2HefhMcHADgPu9mWOtebTQWmPC9mF/v4CW1i4EUB6ISC', '2025-03-27 05:39:04'),
(13, '2251120177ds', 'yuyfkuw@exelica.comz', '$2y$10$kH.C5/5sTx/hVyWaKBC1g.iUqK.6YfTvX984AqtMIx8tiLbNTk17O', '2025-03-27 05:42:36'),
(14, 'namincssds', 'inc006@xnaminc.comss', '$2y$10$M6TgWD.IWbFxlJ6cehNLyujVz4cXD9ol3UdQUDmbomqI9HqPusUhO', '2025-03-27 05:57:19'),
(15, 'fdfdfdfd', 'admin@naminc.devsd', '$2y$10$LqvYicSrfJIrgahgKuiLAeAa01M9DZstu28bit.bgoHDRml7sW.DC', '2025-03-27 06:29:08'),
(16, '2251120177sdadadsds', 'admin@naminc.devsdsds', '$2y$10$OVZbNHIljEsR21YcmZrP1e/rMnaVy2iX73CSmjK6o4MHm7p6HCfCK', '2025-03-27 06:37:43'),
(17, '2251120177sdadadsdsds', 'admin@naminc.devsaaaa', '$2y$10$Ml2s2X/vDkA.bW22vvNnp.tRV33k4kVSs4u1jmj.lo.W1RylTppR2', '2025-03-27 06:37:52'),
(18, 'naminc', 'admin@naminc.dev', '$2y$10$gaN3ePqH9FvEy4FCjjy7tO24xPpV.tghhoAcvko66dbddWjFky00e', '2025-03-27 07:02:37');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
