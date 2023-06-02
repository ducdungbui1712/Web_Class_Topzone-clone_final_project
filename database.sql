-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 27, 2022 at 05:10 PM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `topzone_database`
--

CREATE DATABASE IF NOT EXISTS `topzone_database` DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci;
USE `topzone_database`;
-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `id` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `category` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `subCategory` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `thumbnail` text COLLATE utf8_unicode_ci NOT NULL,
  `image` text COLLATE utf8_unicode_ci NOT NULL,
  `capacity` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `price` int(11) DEFAULT NULL,
  `discountPrice` int(11) DEFAULT NULL,
  `discountPercent` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `description` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `status` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`id`, `name`, `category`, `subCategory`, `thumbnail`, `image`, `capacity`, `price`, `discountPrice`, `discountPercent`, `description`, `status`) VALUES
(1, 'iPhone 13 Pro Max ', 'iPhone', 'iPhone 13', 'img\\Product_img\\Iphone\\Iphone_13_Pro_Max\\iphone-13-pro-max-gold-650x650.png', 'img\\Product_img\\Iphone\\Iphone_13_Pro_Max', '128GB', 24990000, 19690000, '-21%', 'Hàng xách tay chính hãng', ''),
(2, 'iPhone 13 ', 'iPhone', 'iPhone 13', 'img\\Product_img\\Iphone\\Iphone_13\\iphone-13-mini-black-200x200.png', 'img\\Product_img\\Iphone\\Iphone_13', '128GB', 33990000, 28390000, '-16%', 'Hàng xách tay chính hãng', ''),
(3, 'iPhone 11 ', 'iPhone ', 'iPhone 11', 'img\\Product_img\\Iphone\\Iphone_11\\iphone-11-black-1-200x200.png', 'img\\Product_img\\Iphone\\Iphone_11', '64GB', 14990000, 10990000, '-26%', 'Hàng xách tay chính hãng', ''),
(4, 'iPhone 12 ', 'iPhone', 'iPhone 12', 'img\\Product_img\\Iphone\\Iphone_12\\iphone-12-green-1-1-200x200.png', 'img\\Product_img\\Iphone\\Iphone_12', '64GB', 19990000, 16490000, '-17%', 'Hàng xách tay chính hãng', ''),
(5, 'iPhone 13 Pro ', 'iPhone', 'iPhone 13', 'img\\Product_img\\Iphone\\Iphone_13_Pro\\iphone-13-pro-thumbtz-200x200.png', 'img\\Product_img\\Iphone\\Iphone_13_Pro', '256GB', 33490000, 27190000, '-18%', 'Hàng xách tay chính hãng', ''),
(6, 'iPhone SE ', 'iPhone', 'iPhone SE', 'img\\Product_img\\Iphone\\Iphone_SE\\iphone-se-red-200x200.png', 'img\\Product_img\\Iphone\\Iphone_SE', '128GB', 14990000, 14490000, '-3%', 'Hàng xách tay chính hãng', ''),
(7, 'iPhone 12 mini ', 'iPhone', 'iPhone 12', 'img\\Product_img\\Iphone\\Iphone_12_mini\\iphone-12-mini-red-1-200x200.png', 'img\\Product_img\\Iphone\\Iphone_12_mini', '128GB', 20990000, 14990000, '-28%', 'Hàng xách tay chính hãng', ''),
(8, 'iPhone SE  (2020)', 'iPhone', 'iPhone SE', 'img\\Product_img\\Iphone\\Iphone_SE_2020\\iphone-se-2020-hop-moi-white-1-650x650.png', 'img\\Product_img\\Iphone\\Iphone_SE_2020', '128GB', 11290000, 9290000, '-17%', NULL, ''),
(9, 'MacBook Pro 13 inch M2 2022', 'Mac', 'MacBook Pro', 'img\\Product_img\\Mac\\MacBook_Pro_M2\\apple-macbook-pro-m2-2022-16gb-256gb-xám-200x200.png', 'img\\Product_img\\Mac\\MacBook_Pro_M2', 'RAM 8GB - SSD 512GB', 41990000, 37791000, '-10%', 'Hàng cũ mới 99%', ''),
(10, 'MacBook Pro 14 inch M1 Pro 2021 16-Core GPU ', 'Mac', 'MacBook Pro', 'img\\Product_img\\Mac\\MacBook_Pro_M1\\macbook-pro-14-inch-m1-pro-2021-10-core-cpu-thumb-1-1-200x200.png', 'img\\Product_img\\Mac\\MacBook_Pro_M1', 'RAM 32 GB - SSD 512 GB', 71990000, 67990000, '-5%', NULL, ''),
(11, 'MacBook Air M2 2022 8-core GPU', 'Mac', 'MacBook Air', 'img\\Product_img\\Mac\\MacBook_Air_M2\\macbook-air-m2-2022-8-core-gpu-xám-200x200.png', 'img\\Product_img\\Mac\\MacBook_Air_M2', 'RAM 8 GB - SSD 256 GB', 32900000, 32490000, '-4%', NULL, ''),
(12, 'MacBook Air M1 2020 8-Core GPU', 'Mac', 'MacBook Air', 'img\\Product_img\\Mac\\MacBook_Air_M1\\macbook-air-m1-2020-8-core-gpu-gold-thumb-200x200.png', 'img\\Product_img\\Mac\\MacBook_Air_M1', 'RAM 16 GB - SSD 512 GB', 39990000, 34390000, '-14%', NULL, ''),
(13, 'iMac 24 inch M1 2021 8-Core GPU', 'Mac', 'iMac', 'img\\Product_img\\Mac\\iMac_M1_21\\imac-24-inch-m1-2021-8-core-gpu-bac-200x200.png', 'img\\Product_img\\Mac\\iMac_M1_21', 'RAM 16 GB - SSD 256 GB', 45990000, 41790000, '-9%', NULL, ''),
(14, 'iMac 24 inch M1 2021 8-Core GPU', 'Mac', 'iMac', 'img\\Product_img\\Mac\\iMac_M1_24\\thumb-imac-24inch-blue-1-650x650.png', 'img\\Product_img\\Mac\\iMac_M1_24', 'RAM 8 GB - SSD 256 GB', 39490000, 35790000, '-9%', NULL, ''),
(15, 'Mac mini M1 2020', 'Mac', 'Mac mini', 'img\\Product_img\\Mac\\Mac_Mini\\apple-mac-mini-m1-bac-650x650.png', 'img\\Product_img\\Mac\\Mac_Mini', 'RAM 8 GB - SSD 256 GB', 19900000, 16790000, '-16%', NULL, ''),
(16, 'iPad Pro M1 12.9 inch WiFi Cellular 2TB (2021)', 'iPad', 'iPad Pro M1', 'img\\Product_img\\Ipad\\Ipad_Pro_M1_2TB\\ipad-pro-m1-129-inch-wifi-cellular-gray-650x650.png', 'img\\Product_img\\Ipad\\Ipad_Pro_M1_2TB', '2TB', 63990000, 58990000, '-7%', 'Hàng mới về', ''),
(17, 'iPad Pro M1 12.9 inch WiFi Cellular 1TB (2021)', 'iPad', 'iPad Pro M1\r\n', 'img\\Product_img\\Ipad\\Ipad_Pro_M1_1TB\\ipad-pro-m1-129-inch-wifi-cellular-silver-650x650.png', 'img\\Product_img\\Ipad\\Ipad_Pro_M1_1TB', '1TB', 53990000, 48990000, '-9%', NULL, ''),
(18, 'iPad Air 5 WiFi + Cellular 64GB', 'iPad', 'iPad Air', 'img\\Product_img\\Ipad\\Ipad_Air_1\\ipad-air-5-5G-pink-650x650.png', 'img\\Product_img\\Ipad\\Ipad_Air_1', '64GB', 20990000, 20490000, '-2%', NULL, ''),
(19, 'iPad Air 5 WiFi 64GB', 'iPad', 'iPad Air', 'img\\Product_img\\Ipad\\Ipad_Air_2\\ipad-air-5-wifi-startlight-650x650.png', 'img\\Product_img\\Ipad\\Ipad_Air_2', '64GB', 16990000, 16490000, '-2%', NULL, ''),
(20, 'iPad 9 10.2 inch WiFi 64GB', 'iPad', 'iPad 9', 'img\\Product_img\\Ipad\\Ipad_9_1\\ipad-gen-9-silver-650x650.png', 'img\\Product_img\\Ipad\\Ipad_9_1', '64GB', 9990000, 8790000, '-12%', NULL, ''),
(21, 'iPad 9 10.2 inch WiFi + Cellular 256GB', 'iPad', 'iPad 9', 'img\\Product_img\\Ipad\\Ipad_9_2\\ipad-9-wifi-cellular-grey-650x650.png', 'img\\Product_img\\Ipad\\Ipad_9_2', '256GB', 17990000, 15790000, '-12%', NULL, ''),
(22, 'iPad mini 6 8.3 inch WiFi + Cellular 64GB', 'iPad', 'iPad mini', 'img\\Product_img\\Ipad\\Ipad_Mini_1\\ipad-mini-6-5g-pink-650x650.png', 'img\\Product_img\\Ipad\\Ipad_Mini_1', '64GB', 14990000, 12990000, '-13%', NULL, ''),
(23, 'iPad mini 6 8.3 inch WiFi 64GB', 'iPad', 'iPad mini ', 'img\\Product_img\\Ipad\\Ipad_Mini_2\\ipad-mini-6-startlight-650x650.png', 'img\\Product_img\\Ipad\\Ipad_Mini_2', '64GB', 14990000, 12990000, '-13%', NULL, ''),
(24, 'Apple Watch Nike Series 7 GPS + Cellular 41mm', 'Watch', 'Apple Watch Series 7', 'img\\Product_img\\Watch\\Apple_Watch_7_1\\apple-watch-nike-series-7-gps-cellular-41mm-650x650.png', 'img\\Product_img\\Watch\\Apple_Watch_7_1', NULL, 14990000, 12490000, '-16%', NULL, ''),
(25, 'Apple Watch Nike Series 7 GPS 41mm', 'Watch', 'Apple Watch Series 7', 'img\\Product_img\\Watch\\Apple_Watch_7_2\\apple-watch-s7-lte-45mm-vien-thep-bac-200x200.png', 'img\\Product_img\\Watch\\Apple_Watch_7_2', NULL, 11990000, 10490000, '-12%', NULL, ''),
(26, 'Apple Watch SE GPS 40mm', 'Watch', 'Apple Watch SE', 'img\\Product_img\\Watch\\Apple_Watch_SE_1\\apple-watch-se-40mm-vien-nhom-day-cao-su-xanh-den-650x650.png', 'img\\Product_img\\Watch\\Apple_Watch_SE_1', NULL, 9990000, 7990000, '-20%', NULL, ''),
(27, 'Apple Watch SE GPS + Cellular 44mm', 'Watch', 'Apple Watch SE', 'img\\Product_img\\Watch\\Apple_Watch_SE_2\\apple-watch-se-lte-44mm-1-650x650.png', 'img\\Product_img\\Watch\\Apple_Watch_SE_2', NULL, 11990000, 9490000, '-20%', NULL, ''),
(28, 'Apple Watch Series 6 GPS + Cellular 44mm', 'Watch', 'Apple Watch Series 6', 'img\\Product_img\\Watch\\Apple_Watch_6_1\\apple-watch-series-6-lte-44mm-1-650x650.png', 'img\\Product_img\\Watch\\Apple_Watch_6_1', NULL, 18990000, 15990000, '-15%', NULL, ''),
(29, 'Apple Watch Series 6 GPS + Cellular 40mm', 'Watch', 'Apple Watch Series 6', 'img\\Product_img\\Watch\\Apple_Watch_6_2\\apple-watch-s6-lte-40mm-xanh-la-650x650.png', 'img\\Product_img\\Watch\\Apple_Watch_6_2', NULL, 16990000, 14490000, '-14%', NULL, ''),
(30, 'Apple Watch Series 5 GPS + Cellular 40mm', 'Watch', 'Apple Watch Series 5', 'img\\Product_img\\Watch\\Apple_Watch_5\\apple-watch-s5lte-40mm-goldstainless-steelcase-1.png', 'img\\Product_img\\Watch\\Apple_Watch_5', NULL, 17990000, 15990000, '-11%', NULL, ''),
(31, 'Apple Watch Series 3 GPS 38mm', 'Watch', 'Apple Watch Series 3', 'img\\Product_img\\Watch\\Apple_Watch_3\\apple-watch-s3-gps-38mm-trang-650x650.png', 'img\\Product_img\\Watch\\Apple_Watch_3', NULL, 5990000, 4890000, '-18%', NULL, ''),
(32, 'AirPods Pro Hộp sạc MagSafe', 'Âm thanh', 'AirPods', 'img\\Product_img\\Sound\\AirPods_Pro\\bluetooth-airpods-pro-magsafe-charge-apple-mlwk3-261121-033421-650x650.png', 'img\\Product_img\\Sound\\AirPods_Pro', NULL, 6790000, 5390000, '-20%', NULL, ''),
(33, 'AirPods 3', 'Âm thanh', 'AirPods', 'img\\Product_img\\Sound\\AirPods_3\\airpods-3-thumb-650x650.png', 'img\\Product_img\\Sound\\AirPods_3', NULL, 5490000, 4790000, '-12%', NULL, ''),
(34, 'EarPods jack cắm Lightning', 'Âm thanh', 'EarPods', 'img\\Product_img\\Sound\\EarPods_1\\earpod-lightning-trang-thumb-1-650x650.png', 'img\\Product_img\\Sound\\EarPods_1', NULL, 790000, 590000, '-25%', NULL, ''),
(35, 'EarPods jack cắm 3.5 mm', 'Âm thanh', 'EarPods', 'img\\Product_img\\Sound\\EarPods_2\\earpod-trang-thumb-1-650x650.png', 'img\\Product_img\\Sound\\EarPods_2', NULL, 790000, 690000, '-12%', NULL, ''),
(36, 'Tai nghe True Wireless Beats Fit Pro Earbuds', 'Âm thanh', 'Beats', 'img\\Product_img\\Sound\\Beats_1\\true-wireless-beats-fit-pro-earbuds-mk2g3-trang-650x650.png', 'img\\Product_img\\Sound\\Beats_1', NULL, 5490000, 4390000, '-20%', NULL, ''),
(37, 'Tai nghe True Wireless Beats Powerbeats Pro', 'Âm thanh', 'Beats', 'img\\Product_img\\Sound\\Beats_2\\khong-day-powerbeats-pro-thumb-1-200x200.png', 'img\\Product_img\\Sound\\Beats_2', NULL, 5990000, 4790000, '-20%', NULL, ''),
(38, 'Loa Bluetooth Harman Kardon Onyx Studio 7', 'Âm thanh', 'Harman Kardon', 'img\\Product_img\\Sound\\Harman_Kardon_1\\bluetooth-harman-kardon-onyx-studio-7-xanh-thumbnail-1-650x650.png', 'img\\Product_img\\Sound\\Harman_Kardon_1', NULL, 5990000, 5990000, '-0%', NULL, ''),
(39, 'Loa Bluetooth Harman Kardon Aura Studio 3', 'Âm thanh', 'Harman Kardon', 'img\\Product_img\\Sound\\Harman_Kardon_2\\bluetooth-harman-kardon-aura-stu-650x650.png', 'img\\Product_img\\Sound\\Harman_Kardon_2', NULL, 6900000, 6210000, '-10%', NULL, ''),
(40, 'Tai nghe Bluetooth TWS Sony WF-1000XM3SME', 'Âm thanh', 'Sony', 'img\\Product_img\\Sound\\Sony_1\\tai-nghe-bluetooth-tws-sony-wf-1000xm3-091021-050723-650x650.png', 'img\\Product_img\\Sound\\Sony_1', NULL, 4790000, 4311000, '-10%', NULL, ''),
(41, 'Tai nghe chụp tai Bluetooth Sony WH-XB910N', 'Âm thanh', 'Sony', 'img\\Product_img\\Sound\\Sony_2\\tai-nghe-chup-tai-bluetooth-sony-wh-xb910n-080722-112222-650x650.png', 'img\\Product_img\\Sound\\Sony_2', NULL, 4590000, 4131000, '-10%', NULL, ''),
(42, 'Loa Bluetooth JBL Charge 5', 'Âm thanh', 'JBL', 'img\\Product_img\\Sound\\JBL_1\\bluetooth-jbl-charge-5-xanh-thumb-650x650.png', 'img\\Product_img\\Sound\\JBL_1', NULL, 3990000, 3591000, '-10%', NULL, ''),
(43, 'Loa Bluetooth JBL Clip 4', 'Âm thanh', 'JBL', 'img\\Product_img\\Sound\\JBL_2\\jbl-clip-4-248855-xanh-thumb-650x650.png', 'img\\Product_img\\Sound\\JBL_2', NULL, 1590000, 1431000, '-10%', NULL, ''),
(44, 'Pin Dự Phòng MagSafe', 'Phụ kiện \r\n', 'Phụ kiện iPhone', 'img\\Product_img\\Accessory\\Phu_kien_iphone_1\\pin-apple-magsafe-battery-pack-211221-090310-650x650.png', 'img\\Product_img\\Accessory\\Phu_kien_iphone_1', NULL, 2990000, 2390000, '-20%', NULL, ''),
(45, 'Adapter sạc Apple USB-C 20W', 'Phụ kiện', 'Phụ kiện iPhone', 'img\\Product_img\\Accessory\\Phu_kien_iphone_2\\114.34.03-650x650.png', 'img\\Product_img\\Accessory\\Phu_kien_iphone_2', NULL, 690000, 621000, '-1%', NULL, ''),
(46, 'Adapter sạc Apple 2 cổng USB-C 35W', 'Phụ kiện', 'Phụ kiện Mac', 'img\\Product_img\\Accessory\\Phu_kien_mac_1\\adapter-sac-apple-type-c-35w-thumb-1-650x650.png', 'img\\Product_img\\Accessory\\Phu_kien_mac_1', NULL, 1690000, 1520000, '-10%', NULL, ''),
(47, 'Bộ chuyển đổi chân sạc World Travel Adapter Kit', 'Phụ kiện', 'Phụ kiện Mac', 'img\\Product_img\\Accessory\\Phu_kien_mac_2\\chan-sac-world-travel-adapter-kit-apple-md837-thumb-1-1-650x650.png', 'img\\Product_img\\Accessory\\Phu_kien_mac_2', NULL, 1090000, 870000, '-20%', NULL, ''),
(48, 'Cáp sạc USB-C - Lightning 2m', 'Phụ kiện', 'Phụ kiện iPad', 'img\\Product_img\\Accessory\\Phu_kien_ipad_1\\116-650x650.png', 'img\\Product_img\\Accessory\\Phu_kien_ipad_1', NULL, 990000, 890000, NULL, NULL, ''),
(49, 'Adapter chuyển đổi Type C sang HDMI/Type C/USB', 'Phụ kiện', 'Phụ kiện iPad', 'img\\Product_img\\Accessory\\Phu_kien_ipad_2\\1-650x650.png', 'img\\Product_img\\Accessory\\Phu_kien_ipad_2', NULL, 2290000, 2060000, '-10%', NULL, ''),
(50, 'Bộ Sạc MagSafe Duo', 'Phụ kiện', 'Phụ kiện Apple Watch', 'img\\Product_img\\Accessory\\Phu_kien_apple_watch\\sac-khong-day-magsafe-duo-charger-apple-mhxf3-211221-094904-650x650.png', 'img\\Product_img\\Accessory\\Phu_kien_apple_watch', NULL, 3990000, 3590000, '-10%', NULL, ''),
(51, 'Pin sạc dự phòng Polymer 10000mAh PD 20W Anker PowerCore Slim A1244', 'Phụ kiện', 'Phụ kiện khác', 'img\\Product_img\\Accessory\\Sac_du_phong\\pin-polymer-10000mah-pd-20w-anker-powercore-slim-a1244-thumb-650x650.png', 'img\\Product_img\\Accessory\\Sac_du_phong', NULL, 1000000, 500000, '-50%', NULL, ''),
(52, 'Ốp lưng Silicone MagSafe cho iPhone 13 Pro Max', 'Phụ kiện', 'Phụ kiện iphone', 'img\\Product_img\\Accessory\\Op_lung_vi_da_iphone\\op-lung-magsafe-iphone-13-pro-max-nhua-deo-apple-mm2n3-650x650.png', 'img\\Product_img\\Accessory\\Op_lung_vi_da_iphone', NULL, 1590000, 950000, '-40%', NULL, ''),
(53, 'Ốp lưng Da iPad 2019 10.2 inch ESR Rebound Pencil', 'Phụ kiện', 'Phụ kiện ipad', 'img\\Product_img\\Accessory\\Op_lung_ipad\\bao-da-ipad-102-inch-2019-esr-rebound-pencil-xanh-navy-1-650x650.png', 'img\\Product_img\\Accessory\\Op_lung_ipad', NULL, 679000, 611000, '-10%', NULL, ''),
(54, 'Magic Mouse', 'Phụ kiện', 'Phụ kiện khác', 'img\\Product_img\\Accessory\\Chuot_may_tinh\\1-650x650.png', 'img\\Product_img\\Accessory\\Chuot_may_tinh', NULL, 2490000, 2240000, '-10%', NULL, ''),
(55, 'Apple Pencil (thế hệ 2)', 'Phụ kiện', 'Phụ kiện khác', 'img\\Product_img\\Accessory\\Phim_but\\16-650x650.png', 'img\\Product_img\\Accessory\\Phim_but', NULL, 3890000, 3500000, '-10%', NULL, ''),
(56, 'AirTag (x4)', 'Phụ kiện', 'Phụ kiện khác', 'img\\Product_img\\Accessory\\Airtag\\airtagx4-650x650.png', 'img\\Product_img\\Accessory\\Airtag', NULL, 2790000, 2230000, '-20%', NULL, ''),
(57, 'Remote Siri Apple TV', 'Phụ kiện', 'Phụ kiện khác', 'img\\Product_img\\Accessory\\Apple_TV\\1-1-650x650.png', 'img\\Product_img\\Accessory\\Apple_TV', NULL, 1990000, 1390000, '-30%', NULL, ''),
(58, 'Miếng dán camera iPhone 13 Pro | 13 Pro Max UniQ', 'Phụ kiện', 'Phụ kiện ipad', 'img\\Product_img\\Accessory\\Dan_man_hinh\\mieng-dan-man-hinh-paperlike-ipad-129-inch-esr-240822-022415-650x650.png', 'img\\Product_img\\Accessory\\Dan_man_hinh', NULL, 390000, 351000, '-10%', NULL, ''),
(59, 'Túi đựng AirPods 3 Native Union Da', 'Phụ kiện', 'Phụ kiện khác', 'img\\Product_img\\Accessory\\Tui_dung_airpods\\tui-dung-airpods-pro-uniq-silicone-valencia-190822-020041-650x650.png', 'img\\Product_img\\Accessory\\Tui_dung_airpods', NULL, 800000, 640000, '-20%', NULL, ''),
(60, 'Bao da MacBook Pro 13 inch', 'Phụ kiện', 'Phụ kiện mac', 'img\\Product_img\\Accessory\\Balo_tui_chong_soc\\bao-da-macbook-pro-13-inch-apple-mrql2-thumb-650x650.png', 'img\\Product_img\\Accessory\\Balo_tui_chong_soc', NULL, 5890000, 5005000, '-15%', NULL, ''),
(61, 'Dây nylon đồng hồ Apple 41 mm Trắng - Vàng ML2N3FE/A', 'Phụ kiện', 'Phụ kiện Apple Watch', 'img\\Product_img\\Accessory\\Day_apple_watch\\day-thep-khong-gi-apple-watch-45mm-graphite-milanese-loop-ml773fe-a-thumbtz-650x650.png', 'img\\Product_img\\Accessory\\Day_apple_watch', NULL, 1390000, 1112000, '-20%', NULL, '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=124;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
