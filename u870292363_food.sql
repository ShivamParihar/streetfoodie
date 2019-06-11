-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Dec 22, 2018 at 02:05 PM
-- Server version: 10.2.17-MariaDB
-- PHP Version: 7.2.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `u870292363_food`
--

-- --------------------------------------------------------

--
-- Table structure for table `dish`
--

CREATE TABLE `dish` (
  `dish_id` int(50) NOT NULL,
  `dish_name` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `res_id` int(50) NOT NULL,
  `price` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `dish`
--

INSERT INTO `dish` (`dish_id`, `dish_name`, `res_id`, `price`) VALUES
(9, 'Papad Basket Masala(6 Piece)', 1, 100),
(11, 'Green Chilly Fry & Lemon Salad', 1, 20),
(12, 'Green Salad', 1, 40),
(13, 'Onion Lemon Salad', 1, 25),
(14, 'Hara Bhara Kabab', 1, 70),
(15, 'French Fries', 1, 50),
(16, 'Gobi Tikka', 1, 80),
(17, 'Honey Chilly Potato', 1, 110),
(18, 'Paneer Tikka Haryali', 1, 150),
(19, 'Paneer Tikka Achari', 1, 150),
(20, 'Paneer Tikka Malai', 1, 150),
(21, 'Paneer 65', 1, 140),
(22, 'Chilli Paneer', 1, 130),
(23, 'Veg Manchurian', 1, 100),
(24, 'Chinese Bhel', 1, 90),
(25, 'Veg Spring roll', 1, 110),
(26, 'Veg Loli Pop', 1, 70),
(27, 'Veg Cutlet', 1, 60),
(28, 'Veg Pakora', 1, 60),
(29, 'Paneer Pakora', 1, 90),
(30, 'Peanut Chaat', 1, 50),
(31, 'Chana Roast', 1, 50),
(32, 'Chana Masala', 1, 120),
(33, 'Gobi Aloo', 1, 120),
(34, 'Mutter Aloo', 1, 120),
(35, 'Jira Aloo', 1, 120),
(36, 'Sev Tomato', 1, 120),
(37, 'Palak Aloo', 1, 120),
(38, 'Mix Veg', 1, 130),
(39, 'Matar Paneer', 1, 140),
(40, 'Dal Fry', 1, 110),
(41, 'Dal Tadka', 1, 120),
(42, 'Dal Tadka Special(Butter)', 1, 130),
(43, 'Dal Gujrati', 1, 110),
(44, 'Dal Achari', 1, 110),
(45, 'Dal Haryali', 1, 120),
(46, 'Dal Makhani', 1, 120),
(47, 'Dal Makhani Special(Butter)', 1, 140),
(48, 'Palak Kaju Cream', 1, 180),
(49, 'Palak Paneer', 1, 140),
(50, 'Palak Corn', 1, 110),
(51, 'Palak Kofta Malai', 1, 140),
(52, 'Papad Roasted Plain', 1, 15),
(53, 'Veg Jafrazi', 1, 150),
(54, 'Veg Navratan Korma', 1, 170),
(55, 'Veg 420 Lizzat', 1, 160),
(56, 'Veg Katrina Malai', 1, 180),
(57, 'Shahi Paneer', 1, 170),
(58, 'Kadai Paneer', 1, 170),
(59, 'Paneer Handi', 1, 180),
(60, 'Paneer 420', 1, 180),
(61, 'Paneer Butter Masala', 1, 180),
(62, 'Paneer Achari', 1, 180),
(63, 'Paneer Kaju', 1, 220),
(64, 'Paneer Kohlapuri', 1, 180),
(65, 'Paneer Lababdar', 1, 190),
(66, 'Paneer Patiyala', 1, 190),
(67, 'Paneer Hyderabadi', 1, 190),
(68, 'Paneer Tikka Masala', 1, 200),
(69, 'Paneer KaliMirch Malai', 1, 200),
(70, 'Paneer Pasanda', 1, 200),
(71, 'Paneer Bhurji Malai', 1, 190),
(72, 'Paneer Rajwada', 1, 250),
(73, 'Paneer Angara', 1, 220),
(74, 'Kaju Cream Malai', 1, 200),
(75, 'Kaju Curry', 1, 200),
(76, 'Kaju Rogan Josh', 1, 190),
(77, 'Badam Rogan Josh', 1, 190),
(78, 'Badam Cream Malai', 1, 200),
(79, 'Katrina Kaju Cream', 1, 200),
(80, 'Kaju Makhana KaliMirch', 1, 200),
(81, 'Malai Kofta', 1, 170),
(82, 'Kashmiri Kofta', 1, 190),
(83, 'Kaju Malai Kofta', 1, 200),
(84, 'Katrina Kofta Delight', 1, 200),
(85, 'Mushroom Kadai', 1, 170),
(86, 'Mushroom Katrina Malai', 1, 190),
(87, 'Kaju Mushroom', 1, 200),
(88, 'Mushroom Palak Malai', 1, 170),
(89, 'Mushroom Matar Malai', 1, 170),
(90, 'Mushroom Dry', 1, 170),
(91, 'Dhai Salted', 1, 40),
(92, 'Dhai Sweet', 1, 40),
(93, 'Dhai Jeera', 1, 40),
(94, 'Boondi Raita', 1, 50),
(95, 'Tandoori Roti', 1, 12),
(96, 'Rumali Roti', 1, 12),
(97, 'Tawa Roti', 1, 12),
(98, 'Tandoori Roti(Butter)', 1, 15),
(99, 'Rumali Roti(Butter)', 1, 15),
(100, 'Tawa Roti(Butter)', 1, 15),
(101, 'Missi Roti', 1, 20),
(102, 'Tandoori Paratha', 1, 25),
(103, 'Tawa Paratha', 1, 25),
(104, 'Podhina Paratha', 1, 30),
(105, 'Aloo Stuffed Paratha', 1, 40),
(106, 'Gobi Stuffed Paratha', 1, 40),
(107, 'Paneer Stuffed Paratha', 1, 40),
(108, 'Plain Nan', 1, 30),
(109, 'Butter Nan', 1, 35),
(110, 'Garlic Nan', 1, 45),
(111, 'Kashmiri Nan', 1, 50),
(112, 'Plain Kulcha', 1, 25),
(113, 'Butter Kulcha', 1, 35),
(114, 'Stuffed Kulcha', 1, 40),
(115, 'Steamed Rice(Full Plate)', 1, 60),
(116, 'Steamed Rice(Half Plate)', 1, 45),
(117, 'Jira Rice(Full Plate)', 1, 100),
(118, 'Jira Rice(Half Plate)', 1, 70),
(119, 'Onion Chilly Jira Rice', 1, 110),
(120, 'Butter Khichdi', 1, 110),
(121, 'Butter Khichdi(Special)', 1, 130),
(122, 'Curd Rice', 1, 90),
(123, 'Curd Kaju Rice Special', 1, 150),
(124, 'Veg Pulao', 1, 110),
(125, 'Matar Pulao', 1, 110),
(126, 'Veg Biryani', 1, 110),
(127, 'Paneer Pulao', 1, 140),
(128, 'Kaju Pulao', 1, 150),
(129, 'Kashmiri Pulao', 1, 150),
(130, 'Banarasi Pulao', 1, 130),
(131, 'Nikunj Special Pulao', 1, 150),
(132, 'Red Sauce Pasta', 1, 100),
(133, 'White Sauce Pasta', 1, 120),
(134, 'Baked Veg', 1, 180),
(135, 'Papad Fry plain', 1, 15),
(136, 'Papad Masala Fry', 1, 20),
(137, 'Papad Masala Dry', 1, 20),
(138, 'Papad Jumbo Basket(8 Pieces)', 1, 150),
(139, 'Chilli Paneer', 1, 130),
(140, 'Veg Manchurian', 1, 100),
(141, 'Baby Corn Manchurian', 1, 120),
(142, 'Crispy Fried Baby Corn', 1, 120),
(143, 'Veg Chowmein', 1, 100),
(144, 'Hakka Noodles', 1, 100),
(145, 'Veg Noodles', 1, 100),
(146, 'Veg Noodles', 1, 100),
(147, 'Singapore Noodles', 1, 110),
(148, 'Schezwan Noodles', 1, 120),
(149, 'Chilli Garlic Noodles', 1, 110),
(150, 'Veg Fried Rice', 1, 130),
(151, 'Singapore Rice', 1, 130),
(152, 'Onion Chilli Fried Rice', 1, 130),
(153, 'Veg Manchurian Rice', 1, 130),
(154, 'Chilli Paneer Gravy', 1, 140),
(155, 'Veg Manchurian Gravy', 1, 110),
(156, 'Veg Chow Chow', 1, 110),
(157, 'Veg Chopsuey', 1, 120),
(159, 'Kashmiri Kesar Phirni', 1, 50),
(160, 'Gulab Jamun', 1, 30),
(161, 'Rasgulla', 1, 30),
(162, 'Fruit Cream', 1, 50),
(163, 'Gajar Halwa', 1, 40),
(164, 'Moong Dal Halwa', 1, 40),
(165, 'Veg Pizza', 1, 120),
(166, 'Cheese Pizza', 1, 100),
(167, 'Paneer Pizza', 1, 140),
(168, 'Pizza Exotic', 1, 160),
(169, 'Paneer Tikka Pizza', 1, 160),
(170, 'Peppery Mushroom Cheese Pizza', 1, 160),
(171, 'Country Special Pizza', 1, 160),
(172, 'Mini Veg Pizza', 1, 60),
(173, 'Bread Butter Sandwich', 1, 40),
(174, 'Bread Butter Jam Sandwich', 1, 40),
(175, 'Veg Plain Sandwich', 1, 50),
(176, 'Cheese Plain Sandwich', 1, 60),
(177, 'Grill Veg Sandwich', 1, 60),
(178, 'Grill Cheese Sandwich', 1, 60),
(179, 'Grill Paneer Sandwich', 1, 80),
(180, 'Grill Veg Cheese Sandwich', 1, 80),
(181, 'Bombay Pav Bhaji', 1, 80),
(182, 'Cheese Pav Bhaji', 1, 90),
(183, 'Paneer Pav Bhaji', 1, 100),
(184, 'Extra Pav', 1, 20),
(185, 'Garlic Bread', 1, 50),
(186, 'Garlic Bread Cheese', 1, 60),
(187, 'Garlic Bread Exotic', 1, 70),
(188, 'Veg Burger', 1, 40),
(189, 'Cheese Burger', 1, 60),
(190, 'Double Decker Burger', 1, 70),
(191, 'Plain Dosa', 1, 60),
(192, 'Rawa Dosa', 1, 70),
(193, 'Masala Dosa', 1, 80),
(194, 'Paneer Masala Dosa', 1, 90),
(195, 'Idli Sambhar', 1, 40),
(196, 'Chola Tikiya', 1, 50),
(197, 'Chola Bhatura', 1, 90),
(198, 'Chola Kulcha', 1, 80),
(199, 'Chole Bread', 1, 70),
(200, 'Papdi Chat', 1, 50),
(201, 'Bhel Puri', 1, 40),
(203, 'Dahi bhel', 1, 50),
(204, 'Khasta Bundi Chaat', 1, 50),
(205, 'Peanut Chaat', 1, 50),
(206, 'Veg Maggi', 1, 50),
(207, 'Cheese Maggi', 1, 60),
(208, 'Mexican Maggi', 1, 60),
(209, 'Mutter Paneer Maggi', 1, 70),
(210, 'Malai Chilli Paneer', 2, 120),
(211, 'Chilli Paneer', 2, 100),
(212, 'Veg Noodles', 2, 90),
(213, 'Veg Manchurian', 2, 90),
(214, 'Schezwan Noodles', 2, 100),
(215, 'Veg Fried Rice', 2, 100),
(216, 'Chinese Bhel', 2, 100),
(217, 'Paneer Pudina Tikka', 2, 100),
(218, 'Spring Roll', 2, 100),
(220, 'Honey Chilly Potato', 2, 100),
(221, 'Hakka Noodles', 2, 90),
(222, 'Red Sauce Pasta', 2, 100),
(223, 'White Sauce Pasta', 2, 120),
(224, 'Pink Sauce Pasta', 2, 110),
(225, 'Margarita Pizza', 2, 90),
(226, 'Double Cheese Pizza', 2, 120),
(227, 'Spicy Delight Pizza', 2, 110),
(228, 'Country Special Pizza', 2, 110),
(229, 'Farm House Pizza', 2, 110),
(230, 'Peppy Paneer Pizza', 2, 120),
(231, 'Soil to Spoon Pizza', 2, 120),
(232, 'Cheese Tomato Pizza', 2, 100),
(233, 'Masala Dosa', 2, 80),
(234, 'Plain Dosa', 2, 70),
(235, 'Masala Cheese Dosa', 2, 90),
(236, 'Cheese Dosa', 2, 80),
(237, 'Onion Tomato Uttapam', 2, 80),
(238, 'Classic Veggie Burger', 2, 60),
(239, 'Veggie Cheese Burger', 2, 70),
(240, 'Veg Mexican Burger', 2, 80),
(241, 'Schezwan Burger', 2, 80),
(242, 'Grilled Burger', 2, 80),
(243, 'Pizza Burger', 2, 90),
(244, 'Aloo Masala Cheese Sandwich', 2, 70),
(245, 'Cheese Chatni Sandwich', 2, 80),
(246, 'Grilled Cheese Sandwich(Onion)', 2, 80),
(247, 'Grilled Cheese Sandwich(Tomato)', 2, 80),
(248, 'Grilled Cheese Sandwich(Plain)', 2, 80),
(249, 'Chilli Cheese Garlic Grilled Sandwich', 2, 80),
(250, 'Veg Club Sandwich', 2, 90),
(251, 'Corn Mayo Sandwich', 2, 70),
(252, 'Paneer Mayo Sandwich', 2, 80),
(253, 'Cheese Pickle Sandwich', 2, 80),
(254, 'Russian Sandwich', 2, 90),
(255, 'Peppy Paneer Sandwich', 2, 100),
(256, 'Maggi Club Sandwich', 2, 100),
(257, 'Chocolate Sandwich', 2, 90),
(258, 'Plain Maggi', 2, 40),
(259, 'Cheese Maggi', 2, 60),
(260, 'Vegetable Maggi', 2, 60),
(261, 'Punjabi Tadka Maggi', 2, 70),
(262, 'Schezwan Maggi', 2, 70),
(263, 'Sev Jeera Maggi', 2, 60),
(264, 'Cheese Veg Roll', 2, 70),
(265, 'Chinese Roll', 2, 60),
(266, 'Chilly Paneer Roll', 2, 70),
(267, 'Sev Chaat Roll', 2, 60),
(268, 'Peri Peri Roll', 2, 60),
(269, 'French Fries', 2, 60),
(270, 'Masala Fries', 2, 70),
(271, 'Chilly Cheese Fries', 2, 80),
(273, 'Pav Bhaji', 2, 100),
(274, 'Aloo Pyaaz Paratha', 2, 60),
(275, 'Paneer Paratha', 2, 70),
(276, 'Onion Cheese Paratha', 2, 70),
(277, 'Cheese Paratha', 2, 70);

-- --------------------------------------------------------

--
-- Table structure for table `login_info`
--

CREATE TABLE `login_info` (
  `user_id` int(50) NOT NULL,
  `user_name` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `phone` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `address` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `delivery_fee` int(10) NOT NULL,
  `refer_code` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `refer_id` int(10) NOT NULL,
  `coins` int(10) NOT NULL,
  `order_no` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `login_info`
--

INSERT INTO `login_info` (`user_id`, `user_name`, `phone`, `address`, `password`, `delivery_fee`, `refer_code`, `refer_id`, `coins`, `order_no`) VALUES
(1, 'shivam', '9999999999', '12/15', '1', 30, 'aaaaaa', 1, 35, 1),
(2, 'Smriti gohil', '9131838301', '237,indrapuri colony', 'shivam15', 30, 'baaaaa', 0, 0, 0),
(3, 'Sneha', '9644784837', '22, tirupati green kishanganj mhow', 'TSA243TSA', 30, 'caaaaa', 0, 0, 0),
(4, 'Ashu', '7000750541', 'Mhow', '1234', 30, 'daaaaa', 0, 0, 0),
(5, 'Bharti', '6260820811', 'H.No 202 shantinagar Mhowgaon Mhow Indore', '400milliondollars', 30, 'eaaaaa', 0, 0, 0),
(6, 'Gauri', '9993886205', 'B 257 jawahar nagar shanti nagar mhow', 'artislife', 30, 'faaaaa', 0, 0, 0),
(7, 'Radhika loya', '9300751604', '989 central street mhow', 'radhika', 15, 'gaaaaa', 0, 0, 0),
(8, 'Shivani', '7440813760', 'B 62 MIG Jawahar Nagar Mhow', 'kuchbhirakhde@123', 30, 'haaaaa', 0, 0, 0),
(9, 'Mayank', '8819886161', 'Mhow', '31121997', 30, 'iaaaaa', 0, 0, 0),
(10, 'Devendra', '7999956711', '181-b shanti nagar', 'dev123', 30, 'jaaaaa', 0, 0, 0),
(11, 'Prachi bedi', '8871015735', 'E-510 sidhi solitaire ,kishanganj', 'prachibedi', 30, 'kaaaaa', 0, 0, 0),
(12, 'Neha Manral', '9174655145', '88A shanti nagar mhowgoan', 'neha1298', 30, 'laaaaa', 0, 0, 0),
(13, 'Bushra Qureshi', '9131849546', '1722 Tall Mohalla Mhow', 'sheru', 30, 'maaaaa', 0, 0, 0),
(14, 'Batul', '9516575354', '246 main street mhow', 'ba19tu98lbo11ot17', 15, 'naaaaa', 0, 0, 0),
(15, 'Vinati', '7470919991', '1103chotta bazzarmhow', 'vinatitayal', 15, 'oaaaaa', 0, 0, 0),
(16, 'Angelcy Benjamin', '9617011613', '109,birdi house, near GPO road mhow', 'jesuslovesyou', 20, 'paaaaa', 0, 0, 0),
(17, 'Prakhar jain', '8109746661', '137, sanghi street mhow', 'prashi08', 15, 'qaaaaa', 0, 0, 0),
(18, 'Vivek garg', '9039134405', '53 Bhagirath colony dharnaka mhow mp, Indore', 'behenji69', 25, 'raaaaa', 0, 0, 0),
(19, 'Anamika Yadav', '9753003929', 'Chinar park south shantinagar mhow', 'alkamini', 35, 'saaaaa', 0, 0, 0),
(20, 'Ayush sahu', '9826552430', '57, simrol road Mhow Indore MP', '9826552430', 35, 'taaaaa', 0, 0, 0),
(21, 'Mukul kotwar', '7987356883', '115 diamond colony ,dharnaka', 'kotwar@1103', 25, 'uaaaaa', 0, 0, 0),
(22, 'Jayesh Saini', '7987343242', '760, Teli Gali, Mhow', 'soilToSpoon', 15, 'vaaaaa', 0, 0, 0),
(23, 'Abhishek', '7000944167', '124 New Colony, Khukri Line Kodria Mhow', 'Arunima1', 30, 'waaaaa', 0, 0, 0),
(24, 'Anshul', '9977900285', 'Mhow', '12345678', 20, 'xaaaaa', 0, 0, 0),
(25, 'Nivedita', '8602698185', '67 Annapurna colony mhowgoan mhow', 'streetnivi97', 30, 'yaaaaa', 0, 0, 0),
(26, 'Hasan', '8297199220', '190/A Dunn Marg opposite Army Public School', 'hassan17', 30, 'zaaaaa', 0, 0, 0),
(27, 'Somi Shrivastav', '7746866827', 'Dharnaka Mhow', '123456', 30, 'zbaaaa', 0, 0, 0),
(29, 'romi', '8319899576', '61. shri ram nagar colony, dharnaka, mhow', '8319899576', 30, 'zdaaaa', 0, 0, 0),
(30, 'Shruti khandelwal', '9755713321', '52, manas rajat vihar, kodariya, mhow', 'shruti29', 30, 'zeaaaa', 0, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `order1`
--

CREATE TABLE `order1` (
  `order_id` int(50) NOT NULL,
  `user_id` int(50) NOT NULL,
  `time` bigint(100) NOT NULL,
  `total_price` int(50) NOT NULL,
  `delivery_fee` int(10) NOT NULL,
  `delivery` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `to_pay` int(50) NOT NULL,
  `cashback` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `order1`
--

INSERT INTO `order1` (`order_id`, `user_id`, `time`, `total_price`, `delivery_fee`, `delivery`, `to_pay`, `cashback`) VALUES
(0, 1, 1537518274, 0, 0, 'no', 0, 0),
(1, 3, 1537994613, 90, 30, 'yes', 120, 0),
(3, 6, 1538064335, 100, 30, 'yes', 130, 0),
(4, 16, 1538335067, 90, 20, 'yes', 110, 0),
(5, 3, 1538933313, 60, 30, 'yes', 90, 0);

-- --------------------------------------------------------

--
-- Table structure for table `order_info`
--

CREATE TABLE `order_info` (
  `order_id` int(50) NOT NULL,
  `res_id` int(50) NOT NULL,
  `dish_id` int(50) NOT NULL,
  `dish_name` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `price` int(50) NOT NULL,
  `quantity` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `order_info`
--

INSERT INTO `order_info` (`order_id`, `res_id`, `dish_id`, `dish_name`, `price`, `quantity`) VALUES
(1, 2, 225, 'Margarita Pizza', 90, 1),
(2, 1, 9, 'Papad Basket Masala(6 Piece)', 100, 1),
(3, 2, 222, 'Red Sauce Pasta', 100, 1),
(4, 2, 225, 'Margarita Pizza', 90, 1),
(5, 2, 259, 'Cheese Maggi', 60, 1);

-- --------------------------------------------------------

--
-- Table structure for table `restaurant`
--

CREATE TABLE `restaurant` (
  `res_id` int(50) NOT NULL,
  `res_name` varchar(100) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `restaurant`
--

INSERT INTO `restaurant` (`res_id`, `res_name`) VALUES
(1, 'Nikunj Restaurant'),
(2, 'Soil To Spoon');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `dish`
--
ALTER TABLE `dish`
  ADD PRIMARY KEY (`dish_id`);

--
-- Indexes for table `login_info`
--
ALTER TABLE `login_info`
  ADD PRIMARY KEY (`user_id`);

--
-- Indexes for table `order1`
--
ALTER TABLE `order1`
  ADD PRIMARY KEY (`order_id`);

--
-- Indexes for table `restaurant`
--
ALTER TABLE `restaurant`
  ADD PRIMARY KEY (`res_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
