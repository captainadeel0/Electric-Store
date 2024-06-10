-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 10, 2024 at 10:18 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `electricks`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `user_id` int(11) NOT NULL,
  `fullname` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`user_id`, `fullname`, `email`, `username`, `password`) VALUES
(3, 'admin', 'admin@admin.com', 'admin', '12345'),
(4, 'Muhammad ', 'captainadeel000@gmail.com', 'captainadeel', 'a1Bz20ydqelm8m1wqlc6f057b86584942e415435ffb1fa93d4'),
(5, 'Admin', 'adeel000@gmail.com', 'admin', '');

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `cat_id` int(11) NOT NULL,
  `cat_name` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`cat_id`, `cat_name`) VALUES
(1, 'Laptops'),
(2, 'Desktop PC'),
(3, 'Tablets'),
(4, 'Chrome Books'),
(5, 'Accessories');

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `cust_id` int(11) NOT NULL,
  `firstname` varchar(50) NOT NULL,
  `middlename` varchar(50) NOT NULL,
  `lastname` varchar(50) NOT NULL,
  `address` varchar(300) NOT NULL,
  `email` varchar(50) NOT NULL,
  `contact` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

-- --------------------------------------------------------

--
-- Table structure for table `order`
--

CREATE TABLE `order` (
  `order_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `track_num` int(11) NOT NULL,
  `fullname` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `contact` varchar(50) NOT NULL,
  `shipping_add` varchar(500) NOT NULL,
  `order_date` datetime NOT NULL,
  `status` varchar(100) NOT NULL,
  `totalprice` decimal(10,2) NOT NULL,
  `tax` decimal(10,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

-- --------------------------------------------------------

--
-- Table structure for table `order_details`
--

CREATE TABLE `order_details` (
  `order_details_id` int(11) NOT NULL,
  `prod_id` int(11) NOT NULL,
  `prod_qty` int(11) NOT NULL,
  `total_qty` varchar(30) NOT NULL,
  `total` decimal(10,2) NOT NULL,
  `user_id` int(11) NOT NULL,
  `order_id` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `order_details`
--

INSERT INTO `order_details` (`order_details_id`, `prod_id`, `prod_qty`, `total_qty`, `total`, `user_id`, `order_id`) VALUES
(53, 13, 1, '338', 434.00, 6, '1'),
(54, 13, 3, '335', 1302.00, 6, '1'),
(55, 13, 1, '334', 434.00, 6, '1'),
(56, 11, 1, '149', 125.00, 6, '1'),
(57, 12, 1, '397', 155.00, 6, '1'),
(58, 11, 1, '149', 125.00, 6, '1'),
(59, 13, 1, '329', 434.00, 6, '1'),
(60, 13, 1, '328', 434.00, 6, '1'),
(61, 13, 1, '327', 434.00, 6, '1'),
(62, 12, 2, '395', 310.00, 6, '1'),
(63, 13, 2, '325', 868.00, 6, '1'),
(64, 13, 1, '324', 434.00, 6, '1'),
(65, 11, 1, '148', 125.00, 6, '1'),
(66, 13, 1, '323', 434.00, 6, '1'),
(67, 11, 1, '147', 125.00, 6, '1'),
(68, 12, 1, '394', 155.00, 6, '1'),
(69, 12, 1, '393', 155.00, 6, '1'),
(70, 13, 1, '322', 434.00, 7, '1'),
(71, 11, 1, '146', 125.00, 7, '1'),
(72, 13, 1, '321', 434.00, 7, '1'),
(73, 13, 1, '320', 434.00, 7, '1'),
(74, 13, 1, '319', 434.00, 7, '1'),
(75, 13, 1, '318', 434.00, 6, '1'),
(76, 13, 3, '315', 1302.00, 6, '1'),
(77, 13, 1, '314', 434.00, 6, '1'),
(78, 13, 1, '313', 434.00, 6, '1'),
(79, 14, 1, '233', 760.00, 6, '1'),
(80, 13, 1, '311', 434.00, 6, '1'),
(81, 13, 2, '309', 868.00, 6, '1'),
(83, 14, 1, '233', 760.00, 6, '1'),
(84, 13, 1, '308', 434.00, 6, '1'),
(85, 15, 1, '455', 455.00, 6, '1'),
(86, 11, 1, '145', 125.00, 6, '1'),
(87, 13, 1, '306', 434.00, 6, '1'),
(88, 13, 1, '304', 434.00, 6, '1'),
(89, 13, 1, '303', 434.00, 6, '1'),
(90, 13, 1, '302', 434.00, 6, '1'),
(91, 14, 1, '232', 760.00, 6, '1'),
(92, 13, 1, '300', 434.00, 6, '1'),
(93, 14, 10, '222', 7600.00, 8, '1'),
(94, 13, 200, '0', 86800.00, 8, '1'),
(95, 13, 300, '0', 130200.00, 8, '1'),
(96, 11, 1, '144', 125.00, 6, '1'),
(97, 11, 144, '0', 18000.00, 6, '1'),
(98, 15, 1, '', 455.00, 5, ''),
(99, 15, 1, '', 455.00, 6, ''),
(100, 16, 1, '', 1500.00, 6, ''),
(101, 12, 1, '392', 155.00, 8, '1'),
(102, 12, 1, '391', 155.00, 8, '1'),
(103, 15, 1, '', 455.00, 8, ''),
(104, 14, 1, '221', 760.00, 9, '1'),
(105, 17, 1, '25', 2200.00, 9, '1'),
(106, 16, 6, '', 9000.00, 9, ''),
(107, 12, 1, '', 155.00, 4, ''),
(117, 11, 20, '', 1100000.00, 3, ''),
(118, 12, 20, '', 1300000.00, 3, ''),
(119, 24, 20, '', 60000.00, 15, ''),
(120, 29, 3, '', 57000.00, 15, '');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `prod_id` int(11) NOT NULL,
  `prod_name` varchar(50) NOT NULL,
  `prod_desc` varchar(500) NOT NULL,
  `prod_qty` int(11) NOT NULL,
  `prod_cost` decimal(10,2) NOT NULL,
  `prod_price` decimal(10,2) NOT NULL,
  `category` varchar(100) NOT NULL,
  `supplier` varchar(100) NOT NULL,
  `prod_serial` varchar(50) NOT NULL,
  `prod_pic1` varchar(500) NOT NULL,
  `prod_pic2` varchar(500) NOT NULL,
  `prod_pic3` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`prod_id`, `prod_name`, `prod_desc`, `prod_qty`, `prod_cost`, `prod_price`, `category`, `supplier`, `prod_serial`, `prod_pic1`, `prod_pic2`, `prod_pic3`) VALUES
(6, 'Laptop i8', 'E15 Gen 4 - AMD Ryzen 5 5625U Hexa Core Processor 8GB to 40GB 512GB SSD AMD Radeon Graphics 15.6\" FP Reader (Black, Lenovo Direct Local Warranty)', 50, 90000.00, 95000.00, 'Laptops', 'Adeel', '1001', 'laptop-with-blank-black-screen-white-table_53876-97915.jpg', 'laptop-mock-up-lateral-view_1310-199.jpg', 'laptop-with-colorful-screen-isolated-white-background-3d-illustration_1142-43290.jpg'),
(7, 'Laptop i5', 'E15 Gen 4 - AMD Ryzen 5 5625U Hexa Core Processor 8GB to 40GB 512GB SSD AMD Radeon Graphics 15.6\" FP Reader (Black, Lenovo Direct Local Warranty)', 50, 30000.00, 35000.00, 'Laptops', 'Adeel', '1002', '3d-laptops-white-background_751108-623.jpg', 'elevated-view-laptop-spectacles-diaries-white-background_23-2147956587.jpg', 'laptop-garden_23-2147768830.jpg'),
(8, 'Lenovo i7', 'E15 Gen 4 - AMD Ryzen 5 5625U Hexa Core Processor 8GB to 40GB 512GB SSD AMD Radeon Graphics 15.6\" FP Reader (Black, Lenovo Direct Local Warranty)', 50, 90000.00, 95000.00, 'Laptops', 'Adeel', '1003', 'laptop-wooden-table-dark-room-with-window_1142-46154.jpg', 'modern-stationary-collection-arrangement_23-2149309683.jpg', 'laptop-mock-up-lateral-view_1310-199.jpg'),
(9, 'Lenovo i5', 'E15 Gen 4 - AMD Ryzen 5 5625U Hexa Core Processor 8GB to 40GB 512GB SSD AMD Radeon Graphics 15.6\" FP Reader (Black, Lenovo Direct Local Warranty)', 50, 60000.00, 65000.00, 'Laptops', 'Ali', '1004', 'high-angle-laptop-rocks-arrangement_23-2149672647.jpg', 'elevated-view-laptop-spectacles-diaries-white-background_23-2147956587.jpg', 'modern-stationary-collection-arrangement_23-2149309625.jpg'),
(10, 'Dell i5', 'E15 Gen 4 - AMD Ryzen 5 5625U Hexa Core Processor 8GB to 40GB 512GB SSD AMD Radeon Graphics 15.6\" FP Reader (Black, Lenovo Direct Local Warranty)', 50, 50000.00, 55000.00, 'Laptops', 'Adeel', '1005', 'laptop-wooden-table-dark-room-with-window_1142-46154.jpg', 'laptop-wooden-table-dark-room-with-window_1142-46154.jpg', 'modern-stationary-collection-arrangement_23-2149309683.jpg'),
(11, 'Dell i5', 'E15 Gen 4 - AMD Ryzen 5 5625U Hexa Core Processor 8GB to 40GB 512GB SSD AMD Radeon Graphics 15.6\" FP Reader (Black, Lenovo Direct Local Warranty)', 19, 50000.00, 55000.00, 'Laptops', 'Adeel', '1006', 'modern-laptop-display-white-background-3d-renered-illustration_441797-5174.jpg', 'high-angle-laptop-rocks-arrangement_23-2149672647.jpg', 'laptop-wooden-table-dark-room-with-window_1142-46154.jpg'),
(12, 'HP i5', 'E15 Gen 4 - AMD Ryzen 5 5625U Hexa Core Processor 8GB to 40GB 512GB SSD AMD Radeon Graphics 15.6\" FP Reader (Black, Lenovo Direct Local Warranty)', 50, 60000.00, 65000.00, 'Laptops', 'Ali', '1007', 'elevated-view-laptop-spectacles-diaries-white-background_23-2147956587.jpg', '3d-laptops-white-background_751108-623.jpg', 'high-angle-laptop-rocks-arrangement_23-2149672647.jpg'),
(13, 'Macbook PRO', 'E15 Gen 4 - AMD Ryzen 5 5625U Hexa Core Processor 8GB to 40GB 512GB SSD AMD Radeon Graphics 15.6\" FP Reader (Black, Lenovo Direct Local Warranty)', 50, 90000.00, 95000.00, 'Laptops', 'Adeel', '1008', 'elevated-view-laptop-spectacles-diaries-white-background_23-2147956587.jpg', 'laptop-garden_23-2147768830.jpg', 'modern-stationary-collection-arrangement_23-2149309683.jpg'),
(14, 'Dektop PC', 'E15 Gen 4 - AMD Ryzen 5 5625U Hexa Core Processor 8GB to 40GB 512GB SSD AMD Radeon Graphics 15.6\" FP Reader (Black, Lenovo Direct Local Warranty)', 50, 90000.00, 95000.00, 'Desktop PC', 'Adeel', '1009', 'christmas-background-with-computer-screen-with-hat-copy-space-text_68060-1445.jpg', 'blank-virtual-screen-desktop-monitor-modern-setup-view-5_956920-46265.jpg', 'computer-table-with-keyboard-mouse-3d-render-black-background_1142-41147.jpg'),
(15, 'Apple Dektop PC', 'E15 Gen 4 - AMD Ryzen 5 5625U Hexa Core Processor 8GB to 40GB 512GB SSD AMD Radeon Graphics 15.6\" FP Reader (Black, Lenovo Direct Local Warranty)', 50, 90000.00, 95000.00, 'Desktop PC', 'Ali', '1010', 'desk-calendar-mockup-design_23-2150431979.jpg', 'modern-workplace_144962-3512.jpg', 'christmas-background-with-computer-screen-with-hat-copy-space-text_68060-1445.jpg'),
(16, 'Dektop PC', 'E15 Gen 4 - AMD Ryzen 5 5625U Hexa Core Processor 8GB to 40GB 512GB SSD AMD Radeon Graphics 15.6\" FP Reader (Black, Lenovo Direct Local Warranty)', 50, 90000.00, 95000.00, 'Desktop PC', 'Ali', '1011', 'computer-table-with-keyboard-mouse-3d-render-black-background_1142-41147.jpg', 'christmas-background-with-computer-screen-with-hat-copy-space-text_68060-1445.jpg', 'moderndesktopcomputerconceptillustration_776674-844577 (1).jpg'),
(17, 'Dektop PC', 'E15 Gen 4 - AMD Ryzen 5 5625U Hexa Core Processor 8GB to 40GB 512GB SSD AMD Radeon Graphics 15.6\" FP Reader (Black, Lenovo Direct Local Warranty)', 50, 90000.00, 95000.00, 'Desktop PC', '123', '1012', 'modern-desktop-computer-concept-illustration_1239717-857.jpg', 'moderndesktopcomputerconceptillustration_776674-844577.jpg', 'moderndesktopcomputerconceptillustration_776674-844577 (1).jpg'),
(18, 'Dektop PC', 'E15 Gen 4 - AMD Ryzen 5 5625U Hexa Core Processor 8GB to 40GB 512GB SSD AMD Radeon Graphics 15.6\" FP Reader (Black, Lenovo Direct Local Warranty)', 50, 90000.00, 95000.00, 'Desktop PC', 'Adeel', '1013', 'modern-monitor-elegant-table_23-2150706449.jpg', 'highperformance-desktop-computer-mockup-ai-generated_921479-33458.jpg', 'modern-monitor-elegant-table_23-2150706397.jpg'),
(19, 'Dektop PC', 'E15 Gen 4 - AMD Ryzen 5 5625U Hexa Core Processor 8GB to 40GB 512GB SSD AMD Radeon Graphics 15.6\" FP Reader (Black, Lenovo Direct Local Warranty)', 50, 90000.00, 95000.00, 'Desktop PC', 'Ali', '1013', 'modern-monitor-elegant-table_23-2150706409.jpg', 'modern-desktop-computer-concept-illustration_1239717-857.jpg', 'view-computer-monitor-display-with-desk_23-2150757467.jpg'),
(20, 'Dektop PC', 'E15 Gen 4 - AMD Ryzen 5 5625U Hexa Core Processor 8GB to 40GB 512GB SSD AMD Radeon Graphics 15.6\" FP Reader (Black, Lenovo Direct Local Warranty)', 50, 90000.00, 95000.00, 'Desktop PC', '123', '1014', 'view-computer-monitor-display-with-desk_23-2150757467.jpg', 'christmas-background-with-computer-screen-with-hat-copy-space-text_68060-1445.jpg', 'modern-workplace_144962-3512.jpg'),
(21, 'Headphones', 'High defination, Cheap and affordable, Looks gorgious', 30, 3000.00, 3000.00, 'Accessories', '123', '1015', '3d-blue-headphones-isolated-transparent-background_191095-16409.jpg', '3d-blue-headphones-isolated-transparent-background_191095-16409.jpg', '3d-blue-headphones-isolated-transparent-background_191095-16409.jpg'),
(22, 'Headphones', 'High defination, Cheap and affordable, Looks gorgious', 30, 3000.00, 3000.00, 'Accessories', 'Adeel', '1016', 'beautiful-gaming-headphone-isolated-transparent-background_191095-12524.jpg', 'beautiful-gaming-headphone-isolated-transparent-background_191095-12524.jpg', 'beautiful-gaming-headphone-isolated-transparent-background_191095-12524.jpg'),
(23, 'Headphones', 'High defination, Cheap and affordable, Looks gorgious', 30, 3000.00, 3000.00, 'Accessories', 'Adeel', '1017', 'black-headphones-digital-device_53876-96805.jpg', 'black-headphones-digital-device_53876-96805.jpg', 'black-headphones-digital-device_53876-96805.jpg'),
(24, 'Headphones', 'High defination, Cheap and affordable, Looks gorgious', 30, 3000.00, 3000.00, 'Accessories', '123', '1018', 'blue-modern-headphones-with-blue-minimal-flat-background_800563-2841.jpg', 'blue-modern-headphones-with-blue-minimal-flat-background_800563-2841.jpg', 'blue-modern-headphones-with-blue-minimal-flat-background_800563-2841.jpg'),
(25, 'Headphones', 'High defination, Cheap and affordable, Looks gorgious', 30, 3000.00, 3000.00, 'Accessories', '123', '1019', 'isolated-professional-grade-headphones-djs-musicians_94046-1821.jpg', 'isolated-professional-grade-headphones-djs-musicians_94046-1821.jpg', 'isolated-professional-grade-headphones-djs-musicians_94046-1821.jpg'),
(26, 'Headphones', 'High defination, Cheap and affordable, Looks gorgious', 30, 3000.00, 3000.00, 'Accessories', '123', '1020', 'isometric-headphones_28315-1904.jpg', 'isometric-headphones_28315-1904.jpg', 'isometric-headphones_28315-1904.jpg'),
(27, 'Headphones', 'High defination, Cheap and affordable, Looks gorgious', 30, 3000.00, 3000.00, 'Accessories', '123', '1021', 'headphones-isolated-transparent-background_191095-23934.jpg', 'headphones-isolated-transparent-background_191095-23934.jpg', 'headphones-isolated-transparent-background_191095-23934.jpg'),
(28, 'Chrome Books', 'E15 Gen 4 - AMD Ryzen 5 5625U Hexa Core Processor 8GB to 40GB 512GB SSD AMD Radeon Graphics 15.6\" FP Reader (Black, Lenovo Direct Local Warranty)', 10, 18000.00, 19000.00, 'Chrome Books', 'Adeel', '1022', 'laptop-psd-mockup-with-gradient-led-light_53876-138283 (1).jpg', 'laptop-pens-phone-note-with-blank-screen-table_155003-8537.jpg', 'laptop-psd-mockup-with-gradient-led-light_53876-138283 (1).jpg'),
(29, 'Chrome Books', 'E15 Gen 4 - AMD Ryzen 5 5625U Hexa Core Processor 8GB to 40GB 512GB SSD AMD Radeon Graphics 15.6\" FP Reader (Black, Lenovo Direct Local Warranty)', 10, 18000.00, 19000.00, 'Chrome Books', '123', '1023', 'laptop-dark-with-screen_92164-35.jpg', 'laptop-psd-mockup-with-gradient-led-light_53876-138283.jpg', 'laptop-dark-with-screen_92164-35.jpg'),
(30, 'Chrome Books', 'E15 Gen 4 - AMD Ryzen 5 5625U Hexa Core Processor 8GB to 40GB 512GB SSD AMD Radeon Graphics 15.6\" FP Reader (Black, Lenovo Direct Local Warranty)', 10, 18000.00, 19000.00, 'Chrome Books', 'Ali', '1024', 'laptop-wooden-table_53876-20635 (1).jpg', 'laptop-wooden-table_53876-20635 (1).jpg', 'laptop-computer-internet-technology-online-education-studying-concept_201836-7586.jpg'),
(31, 'Chrome Books', 'E15 Gen 4 - AMD Ryzen 5 5625U Hexa Core Processor 8GB to 40GB 512GB SSD AMD Radeon Graphics 15.6\" FP Reader (Black, Lenovo Direct Local Warranty)', 10, 18000.00, 19000.00, 'Chrome Books', 'Ali', '1025', 'open-laptop-standing-table-display-shows-abstract-colorful-waves-made-with-generative-ai_878954-6.jpg', 'open-laptop-standing-table-display-shows-abstract-colorful-waves-made-with-generative-ai_878954-6.jpg', 'open-laptop-standing-table-display-shows-abstract-colorful-waves-made-with-generative-ai_878954-6.jpg'),
(32, 'Chrome Books', 'E15 Gen 4 - AMD Ryzen 5 5625U Hexa Core Processor 8GB to 40GB 512GB SSD AMD Radeon Graphics 15.6\" FP Reader (Black, Lenovo Direct Local Warranty)', 10, 18000.00, 19000.00, 'Chrome Books', '123', '1026', 'laptop-with-white-screen-isolated-white-wall_231208-8594.jpg', 'laptop-with-white-screen-isolated-white-wall_231208-8594.jpg', 'laptop-with-white-screen-isolated-white-wall_231208-8594.jpg'),
(33, 'Tablets', 'E15 Gen 4 - AMD Ryzen 5 5625U Hexa Core Processor 8GB to 40GB 512GB SSD AMD Radeon Graphics 15.6\" FP Reader (Black, Lenovo Direct Local Warranty)', 80, 18000.00, 19000.00, 'Tablets', 'Adeel', '1026', 'tablet-mockup-top-angle-view_7838-365.jpg', 'tablet-mockup-top-angle-view_7838-365.jpg', 'tablet-mockup-top-angle-view_7838-365.jpg'),
(34, 'Tablets', 'E15 Gen 4 - AMD Ryzen 5 5625U Hexa Core Processor 8GB to 40GB 512GB SSD AMD Radeon Graphics 15.6\" FP Reader (Black, Lenovo Direct Local Warranty)', 80, 18000.00, 19000.00, 'Tablets', '123', '1027', 'digital-tablet-screen-smart-tech_53876-96808.jpg', 'digital-tablet-screen-smart-tech_53876-96808.jpg', 'detailed-view-flower-tablet-suitable-technology-concepts_153912-141057.jpg'),
(35, 'Tablets', 'E15 Gen 4 - AMD Ryzen 5 5625U Hexa Core Processor 8GB to 40GB 512GB SSD AMD Radeon Graphics 15.6\" FP Reader (Black, Lenovo Direct Local Warranty)', 80, 18000.00, 19000.00, 'Tablets', '123', '1028', 'still-life-books-versus-technology_23-2150062920.jpg', 'still-life-books-versus-technology_23-2150062920.jpg', 'still-life-books-versus-technology_23-2150062920.jpg'),
(36, 'Tablets', 'E15 Gen 4 - AMD Ryzen 5 5625U Hexa Core Processor 8GB to 40GB 512GB SSD AMD Radeon Graphics 15.6\" FP Reader (Black, Lenovo Direct Local Warranty)', 78, 18000.00, 19000.00, 'Tablets', '123', '1029', 'tablet-pc-computer-with-black-screen-isolated-white-background_150973-155.jpg', 'tablet-pc-computer-with-black-screen-isolated-white-background_150973-155.jpg', 'tablet-pc-computer-with-black-screen-isolated-white-background_150973-155.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `sales`
--

CREATE TABLE `sales` (
  `sales_id` int(11) NOT NULL,
  `cust_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `amount_due` decimal(10,2) NOT NULL,
  `date_added` datetime NOT NULL,
  `mode_of_payment` varchar(100) NOT NULL,
  `total` decimal(10,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

-- --------------------------------------------------------

--
-- Table structure for table `sales_details`
--

CREATE TABLE `sales_details` (
  `sales_details_id` int(11) NOT NULL,
  `sales_id` int(11) NOT NULL,
  `prod_id` int(11) NOT NULL,
  `price` decimal(10,2) NOT NULL,
  `qty` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

-- --------------------------------------------------------

--
-- Table structure for table `supplier`
--

CREATE TABLE `supplier` (
  `supp_id` int(11) NOT NULL,
  `supp_name` varchar(100) NOT NULL,
  `supp_address` varchar(200) NOT NULL,
  `supp_contact` varchar(50) NOT NULL,
  `supp_email` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `supplier`
--

INSERT INTO `supplier` (`supp_id`, `supp_name`, `supp_address`, `supp_contact`, `supp_email`) VALUES
(5, 'Adeel', 'Nizam Abad, Lodhran', '03236381001', 'captainadeel000@gmail.com'),
(6, '123', '123', '123', 'sultanali1@gmail.com'),
(7, 'Ali', 'lodhran', '123', 'captainadeel123@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` int(11) NOT NULL,
  `fullname` varchar(50) NOT NULL,
  `address` varchar(300) NOT NULL,
  `email` varchar(50) NOT NULL,
  `contact` varchar(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `fullname`, `address`, `email`, `contact`, `username`, `password`) VALUES
(4, '0987', '0987', '0987', '0987', '0987', 'a1Bz20ydqelm8m1wql9e1e06ec8e02f0a0074f2fcc6b26303b'),
(10, 'Muhammad ', 'Nizam Abad, Lodhran', 'captainadeel000@gmail.com', '03236381001', 'captainadeel', 'a1Bz20ydqelm8m1wqlc6f057b86584942e415435ffb1fa93d4'),
(12, '1234', 'Lodhran', 'captainadeel000@gmail.com', '03236381001', '1234', '1234'),
(13, '1234', 'Lodhran', 'captainadeel000@gmail.com', '03236381001', 'aaaa', 'aaaa'),
(15, 'user', 'Nizam Abad, Lodhran', 'user@gmail.com', '03236381001', 'user', '1234'),
(16, 'Muhammad Adeel ', 'Nizam Abad, Lodhran', 'captainadeel000@gmail.com', '03236381001', 'Adeel', '1234'),
(17, 'Muhammad Adeel ', 'Nizam Abad, Lodhran', 'captainadeel000@gmail.com', '03236381001', 'user', '1234');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`user_id`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`cat_id`);

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`cust_id`);

--
-- Indexes for table `order`
--
ALTER TABLE `order`
  ADD PRIMARY KEY (`order_id`);

--
-- Indexes for table `order_details`
--
ALTER TABLE `order_details`
  ADD PRIMARY KEY (`order_details_id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`prod_id`);

--
-- Indexes for table `sales`
--
ALTER TABLE `sales`
  ADD PRIMARY KEY (`sales_id`);

--
-- Indexes for table `sales_details`
--
ALTER TABLE `sales_details`
  ADD PRIMARY KEY (`sales_details_id`);

--
-- Indexes for table `supplier`
--
ALTER TABLE `supplier`
  ADD PRIMARY KEY (`supp_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `cat_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `customer`
--
ALTER TABLE `customer`
  MODIFY `cust_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `order`
--
ALTER TABLE `order`
  MODIFY `order_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `order_details`
--
ALTER TABLE `order_details`
  MODIFY `order_details_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=121;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `prod_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;

--
-- AUTO_INCREMENT for table `sales`
--
ALTER TABLE `sales`
  MODIFY `sales_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `sales_details`
--
ALTER TABLE `sales_details`
  MODIFY `sales_details_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `supplier`
--
ALTER TABLE `supplier`
  MODIFY `supp_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
