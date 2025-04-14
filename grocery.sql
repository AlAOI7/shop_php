-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 05 يناير 2024 الساعة 19:36
-- إصدار الخادم: 10.4.27-MariaDB
-- PHP Version: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `grocery`
--

-- --------------------------------------------------------

--
-- بنية الجدول `about`
--

CREATE TABLE `about` (
  `id` int(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `description` mediumtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- إرجاع أو استيراد بيانات الجدول `about`
--

INSERT INTO `about` (`id`, `name`, `image`, `description`) VALUES
(1, 'About', 'videoimg2.png', 'A product description is the marketing copy that explains what a product is and why it\'s worth purchasing. The purpose of a product description is to supply customers with important information about the features and benefits of the product so they\'re compelled to buy. A product description is the marketing copy that explains what a product is and why it\'s worth purchasing. The purpose of a product description is to supply customers with important information about the features and benefits of the product so they\'re compelled to buy');

-- --------------------------------------------------------

--
-- بنية الجدول `account`
--

CREATE TABLE `account` (
  `id_acc` int(11) NOT NULL,
  `name_account` varchar(100) NOT NULL,
  `number_account` int(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- إرجاع أو استيراد بيانات الجدول `account`
--

INSERT INTO `account` (`id_acc`, `name_account`, `number_account`) VALUES
(1, 'الكريمي', 2147483647),
(2, 'التضامن', 938487676);

-- --------------------------------------------------------

--
-- بنية الجدول `add_news`
--

CREATE TABLE `add_news` (
  `id` int(11) NOT NULL,
  `title1` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `title2` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- إرجاع أو استيراد بيانات الجدول `add_news`
--

INSERT INTO `add_news` (`id`, `title1`, `title2`, `image`) VALUES
(1, 'ascd', 'CSDCA', 'banner-1.png'),
(2, 'sac', 'الكترونيات', ' banner-2.png'),
(3, 'منتجات راقية عصارة', 'الكترونيات', ' banner-4.png'),
(4, 'qas', 'AX', ' banner-1.png'),
(7, 'SA', 'SA', ' a7.jpg');

-- --------------------------------------------------------

--
-- بنية الجدول `admin`
--

CREATE TABLE `admin` (
  `id` int(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- إرجاع أو استيراد بيانات الجدول `admin`
--

INSERT INTO `admin` (`id`, `name`, `email`, `password`) VALUES
(1, 'sharmin', 'sharmin@gmail.com', '202cb962ac59075b964b07152d234b70'),
(2, 'rafi', 'rafi@gmail.com', '900150983cd24fb0d6963f7d28e17f72'),
(3, 'rafi', 'rafi@gmail.com', '202cb962ac59075b964b07152d234b70'),
(4, 'sharmin', '123@gmail.com', '202cb962ac59075b964b07152d234b70'),
(5, 'gawad', 'gawad@gmail.com', '202cb962ac59075b964b07152d234b70');

-- --------------------------------------------------------

--
-- بنية الجدول `banner`
--

CREATE TABLE `banner` (
  `id` int(11) NOT NULL,
  `image` varchar(255) NOT NULL,
  `t1` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `t2` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `t3` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `t4` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- إرجاع أو استيراد بيانات الجدول `banner`
--

INSERT INTO `banner` (`id`, `image`, `t1`, `t2`, `t3`, `t4`) VALUES
(1, 'dress_shirt_PNG.png', 'من افضل منتجاتنا ', 'جاكت', 'جاكت كبير الحجم', ''),
(2, 'product07.png', 'هاتف', 'samsung not20', '40', 'تخفيضات عالمية');

-- --------------------------------------------------------

--
-- بنية الجدول `brand`
--

CREATE TABLE `brand` (
  `id` int(11) NOT NULL,
  `image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- إرجاع أو استيراد بيانات الجدول `brand`
--

INSERT INTO `brand` (`id`, `image`) VALUES
(1, 'logo2.png'),
(2, 'logo.png');

-- --------------------------------------------------------

--
-- بنية الجدول `cart`
--

CREATE TABLE `cart` (
  `cart_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `user_email` varchar(200) NOT NULL,
  `product_id` int(11) NOT NULL,
  `pro_name` varchar(150) NOT NULL,
  `qty` int(11) NOT NULL,
  `price` int(11) NOT NULL,
  `tack_id` int(11) NOT NULL,
  `on_date` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- إرجاع أو استيراد بيانات الجدول `cart`
--

INSERT INTO `cart` (`cart_id`, `user_id`, `user_email`, `product_id`, `pro_name`, `qty`, `price`, `tack_id`, `on_date`) VALUES
(38, 4, 'alaoi@gmail.com', 15, 'Microwave Oven ', 1, 5000, 90934718, '2024-01-03 20:41:41'),
(39, 4, 'alaoi@gmail.com', 0, '<br />\r\n<b>Warning</b>:  Trying to access array offset on value of type null in <b>C:\\xamppa\\htdocs\\alaoishopcom\\index.php</b> on line <b>229</b><br /', 1, 0, 38057844, '2024-01-03 21:51:04');

-- --------------------------------------------------------

--
-- بنية الجدول `catogry`
--

CREATE TABLE `catogry` (
  `id` int(11) NOT NULL,
  `name` varchar(100) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `image` varchar(255) NOT NULL,
  `slug` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- إرجاع أو استيراد بيانات الجدول `catogry`
--

INSERT INTO `catogry` (`id`, `name`, `image`, `slug`) VALUES
(1, 'منظف', '', 'ffe'),
(2, 'منظف', '', 'ffe'),
(3, 'sqac', '	\r\nm1.jpg', 'vwdsa'),
(4, 'CSA', '	\r\nm1.jpg', 'CWQAS'),
(5, 'ajsksa', 'menu-banner-3.jpg', 'reegfdv');

-- --------------------------------------------------------

--
-- بنية الجدول `contact`
--

CREATE TABLE `contact` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `subject` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `message` text NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- إرجاع أو استيراد بيانات الجدول `contact`
--

INSERT INTO `contact` (`id`, `name`, `subject`, `email`, `message`, `status`) VALUES
(1, 'sharmin sultana', 'subject', 'email', 'message', 1),
(2, 'sharmin sultana', 'subject', 'email', 'message', 1),
(3, 'kmkm', 'subject', 'email', 'message', 0),
(4, 'New13-1', 'checking for dhasboard', 'simple@imp.com', 'Grocery\r\nFruits\r\nSoft Drinks\r\nDishwashers\r\nBiscuits & Cookies\r\nBaby Diapers\r\nSnacks & Beverages\r\nBread & Bakery\r\nSweets\r\nChocolates & Biscuits\r\nPersonal Care\r\nDried Fruits & Nuts\r\n', 1);

-- --------------------------------------------------------

--
-- بنية الجدول `contuct`
--

CREATE TABLE `contuct` (
  `id` int(11) NOT NULL,
  `name` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `email` varchar(233) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `telephone` varchar(25) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `subject` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `message` varchar(225) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- بنية الجدول `different_address`
--

CREATE TABLE `different_address` (
  `id_address` int(11) NOT NULL,
  `fname` varchar(50) NOT NULL,
  `lname` varchar(50) NOT NULL,
  `billing_address` varchar(50) NOT NULL,
  `billing_address2` varchar(50) NOT NULL,
  `city` varchar(20) NOT NULL,
  `zipcode` int(6) NOT NULL,
  `phone` int(20) NOT NULL,
  `phonewats` int(20) NOT NULL,
  `email` varchar(100) NOT NULL,
  `user_id` int(11) NOT NULL,
  `pro_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- بنية الجدول `footerdata`
--

CREATE TABLE `footerdata` (
  `id` int(11) NOT NULL,
  `Address` varchar(225) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `Phone` varchar(225) NOT NULL,
  `Email` varchar(225) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `facebook` varchar(225) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `twiter` varchar(225) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `instgram` varchar(225) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `watsap` varchar(225) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `youtyoup` varchar(225) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- إرجاع أو استيراد بيانات الجدول `footerdata`
--

INSERT INTO `footerdata` (`id`, `Address`, `Phone`, `Email`, `facebook`, `twiter`, `instgram`, `watsap`, `youtyoup`) VALUES
(1, ' 562 Wellington Road', '+1 0000-000-000', 'contact@surfsidemedia.in', 'facebook', 'twiter', 'instgram', 'watsap', 'youtyoup');

-- --------------------------------------------------------

--
-- بنية الجدول `message`
--

CREATE TABLE `message` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `subject` text NOT NULL,
  `email` varchar(255) NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- بنية الجدول `product`
--

CREATE TABLE `product` (
  `pro_id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `stock` int(11) NOT NULL,
  `category` varchar(255) NOT NULL,
  `old_price` int(11) NOT NULL,
  `new_price` int(11) NOT NULL,
  `description` mediumtext NOT NULL,
  `image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- إرجاع أو استيراد بيانات الجدول `product`
--

INSERT INTO `product` (`pro_id`, `name`, `stock`, `category`, `old_price`, `new_price`, `description`, `image`) VALUES
(6, 'Yippee noodles', 45, 'Rice, Flour & Pulses', 800, 400, 'adghkl; adgh', 'mk7.jpg'),
(7, 'Almonds', 75, 'Fruits & Vegetables', 0, 140, 'hh', 'm1.jpg'),
(8, 'dgh', 10, 'Rice, Flour & Pulses', 0, 450, 'adgh', 'k2.jpg'),
(9, 'vim', 38, 'Kitchen', 0, 50, 'aghkl', 'a1.jpg'),
(10, 'ghh', 40, 'Household', 700, 200, 'eryt yguybh', 'a8.jpg'),
(11, 'adgh', 80, 'Rice, Flour & Pulses', 0, 850, 'gh rgvhbn', 's2.jpg'),
(12, 'db', 10, 'Household', 500, 10, 'b', 'a9.jpg'),
(13, 'Sample', 7, 'Special Offers', 100, 90, 'Product simple description', 'bag.jpg'),
(14, 'Spoon set', 197, 'Kitchen', 700, 600, 'A product description is the marketing copy that explains what a product is and why it\'s worth purchasing. The purpose of a product description is to supply customers with important information about the features and benefits of the product so they\'re compelled to buy.', 'spoon.jpg'),
(15, 'Microwave Oven ', 11, 'Kitchen', 7000, 5000, 'A product description is the marketing copy that explains what a product is and why it\'s worth purchasing. The purpose of a product description is to supply customers with important information about the features and benefits of the product so they\'re compelled to buy.', 'microwave.jpg'),
(16, 'Juicer ', 28, 'Kitchen', 0, 2200, 'A product description is the marketing copy that explains what a product is and why it\'s worth purchasing. The purpose of a product description is to supply customers with important information about the features and benefits of the product so they\'re compelled to buy.', 'juicer.jpg'),
(17, 'Surf Excel ', 199, 'Household', 0, 30, 'A product description is the marketing copy that explains what a product is and why it\'s worth purchasing. The purpose of a product description is to supply customers with important information about the features and benefits of the product so they\'re compelled to buy.', 's3.jpg'),
(18, 'Air Freshener', 300, 'Household', 0, 500, 'A product description is the marketing copy that explains what a product is and why it\'s worth purchasing. The purpose of a product description is to supply customers with important information about the features and benefits of the product so they\'re compelled to buy.', 'air freshner.jpg'),
(20, 'ZERO Milk Chocolate', 158, 'Snacks & Beverages', 0, 200, 'A product description is the marketing copy that explains what a product is and why it\'s worth purchasing. The purpose of a product description is to supply customers with important information about the features and benefits of the product so they\'re compelled to buy.', 'download.jpg'),
(21, 'Lays Chips', 498, 'Snacks & Beverages', 0, 90, 'A product description is the marketing copy that explains what a product is and why it\'s worth purchasing. The purpose of a product description is to supply customers with important information about the features and benefits of the product so they\'re compelled to buy.', 'chips.jpg'),
(22, 'M&M\'s', 60, 'Snacks & Beverages', 0, 600, 'A product description is the marketing copy that explains what a product is and why it\'s worth purchasing. The purpose of a product description is to supply customers with important information about the features and benefits of the product so they\'re compelled to buy.', 'images.jpg'),
(23, 'Tresemee Shampoo', 300, 'Personal Care', 0, 180, 'A product description is the marketing copy that explains what a product is and why it\'s worth purchasing. The purpose of a product description is to supply customers with important information about the features and benefits of the product so they\'re compelled to buy.', 'download (1).jpg'),
(24, 'Olay Facewash', 320, 'Personal Care', 200, 150, 'A product description is the marketing copy that explains what a product is and why it\'s worth purchasing. The purpose of a product description is to supply customers with important information about the features and benefits of the product so they\'re compelled to buy.', 'images (1).jpg'),
(25, 'Olay Moisturizer', 150, 'Personal Care', 0, 780, 'A product description is the marketing copy that explains what a product is and why it\'s worth purchasing. The purpose of a product description is to supply customers with important information about the features and benefits of the product so they\'re compelled to buy.', 'download (2).jpg'),
(26, 'Onion ', 500, 'Fruits & Vegetables', 0, 30, 'A product description is the marketing copy that explains what a product is and why it\'s worth purchasing. The purpose of a product description is to supply customers with important information about the features and benefits of the product so they\'re compelled to buy.', 'download (3).jpg'),
(27, 'Strawberry', 100, 'Fruits & Vegetables', 0, 600, 'A product description is the marketing copy that explains what a product is and why it\'s worth purchasing. The purpose of a product description is to supply customers with important information about the features and benefits of the product so they\'re compelled to buy.', 'download (4).jpg'),
(28, 'Johnson Baby Lotion', 60, 'Baby Care', 600, 400, 'A product description is the marketing copy that explains what a product is and why it\'s worth purchasing. The purpose of a product description is to supply customers with important information about the features and benefits of the product so they\'re compelled to buy.', 'download (5).jpg'),
(29, 'Pampers', 100, 'Baby Care', 1500, 1200, 'A product description is the marketing copy that explains what a product is and why it\'s worth purchasing. The purpose of a product description is to supply customers with important information about the features and benefits of the product so they\'re compelled to buy.', 'download (6).jpg'),
(30, 'Baby Wipes', 50, 'Baby Care', 0, 200, 'A product description is the marketing copy that explains what a product is and why it\'s worth purchasing. The purpose of a product description is to supply customers with important information about the features and benefits of the product so they\'re compelled to buy.', 'download (7).jpg'),
(31, 'Coca-Cola', 500, 'Soft Drinks & Juices', 0, 30, 'A product description is the marketing copy that explains what a product is and why it\'s worth purchasing. The purpose of a product description is to supply customers with important information about the features and benefits of the product so they\'re compelled to buy.', 'Coke_330mL_1024x1024.png'),
(32, 'Pran Mango Juice', 180, 'Soft Drinks & Juices', 0, 20, 'A product description is the marketing copy that explains what a product is and why it\'s worth purchasing. The purpose of a product description is to supply customers with important information about the features and benefits of the product so they\'re compelled to buy.', 'download (8).jpg'),
(33, 'Apple Juice', 75, 'Soft Drinks & Juices', 0, 120, 'A product description is the marketing copy that explains what a product is and why it\'s worth purchasing. The purpose of a product description is to supply customers with important information about the features and benefits of the product so they\'re compelled to buy.', 'download (9).jpg'),
(34, 'Chicken', 60, 'Frozen Food', 0, 250, 'A product description is the marketing copy that explains what a product is and why it\'s worth purchasing. The purpose of a product description is to supply customers with important information about the features and benefits of the product so they\'re compelled to buy.', 'download (10).jpg'),
(35, 'Lobster', 30, 'Frozen Food', 0, 900, 'A product description is the marketing copy that explains what a product is and why it\'s worth purchasing. The purpose of a product description is to supply customers with important information about the features and benefits of the product so they\'re compelled to buy.', 'download (11).jpg'),
(36, 'Beef', 30, 'Frozen Food', 0, 700, 'A product description is the marketing copy that explains what a product is and why it\'s worth purchasing. The purpose of a product description is to supply customers with important information about the features and benefits of the product so they\'re compelled to buy.', 'download (12).jpg'),
(37, 'Cupcake', 40, 'Bread & Bakery', 280, 250, 'A product description is the marketing copy that explains what a product is and why it\'s worth purchasing. The purpose of a product description is to supply customers with important information about the features and benefits of the product so they\'re compelled to buy.', 'download (13).jpg'),
(38, 'Birthday Cake', 20, 'Bread & Bakery', 0, 1600, 'A product description is the marketing copy that explains what a product is and why it\'s worth purchasing. The purpose of a product description is to supply customers with important information about the features and benefits of the product so they\'re compelled to buy.', 'download (14).jpg'),
(39, 'Bread', 70, 'Bread & Bakery', 0, 50, 'A product description is the marketing copy that explains what a product is and why it\'s worth purchasing. The purpose of a product description is to supply customers with important information about the features and benefits of the product so they\'re compelled to buy.', 'download (15).jpg'),
(42, 'Digital camera', 10, 'Special Offers', 80000, 7000, 'Digital camera to capture the real pictures.', 'digital camera.jpg'),
(43, 'DSLR Camera', 10, 'Special Offers', 50000, 48000, 'DSLR camera new brand', 'dslr.jpg');

-- --------------------------------------------------------

--
-- بنية الجدول `pro_order`
--

CREATE TABLE `pro_order` (
  `order_id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `user_id` int(11) NOT NULL,
  `user_email` varchar(150) NOT NULL,
  `mobile` int(15) NOT NULL,
  `pro_id` int(11) NOT NULL,
  `pro_name` varchar(150) NOT NULL,
  `pro_qty` int(11) NOT NULL,
  `amount` int(11) NOT NULL,
  `method` varchar(20) NOT NULL,
  `trxid` varchar(100) NOT NULL,
  `address` varchar(500) NOT NULL,
  `track_id` int(11) NOT NULL,
  `on_date` datetime NOT NULL DEFAULT current_timestamp(),
  `ordr_status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- إرجاع أو استيراد بيانات الجدول `pro_order`
--

INSERT INTO `pro_order` (`order_id`, `name`, `user_id`, `user_email`, `mobile`, `pro_id`, `pro_name`, `pro_qty`, `amount`, `method`, `trxid`, `address`, `track_id`, `on_date`, `ordr_status`) VALUES
(3, 'New12-2', 1, 'user1@mail.com', 123456789, 7, 'Almonds', 5, 700, 'bkash', 'TX151515151td', 'uttara', 53195529, '2019-12-12 17:39:50', 1),
(4, 'New12-2', 1, 'user1@mail.com', 123456789, 6, 'Yippee noodles', 5, 2000, 'bkash', 'TX151515151td', 'uttara', 84578450, '2019-12-12 17:39:50', 2),
(5, 'New13-1', 1, 'user1@mail.com', 123456789, 9, 'vim', 10, 500, 'bkash', 'Trxid123456789', 'uttara,dhaka', 64895290, '2019-12-13 15:22:29', 1),
(6, 'New13-1', 1, 'user1@mail.com', 123456789, 10, 'ghh', 10, 2000, 'bkash', 'Trxid123456789', 'uttara,dhaka', 47352430, '2019-12-13 15:22:30', 0),
(7, 'New13-2', 1, 'user1@mail.com', 14569875, 13, 'Sample', 2, 180, 'bkash', 'Trxid123456789', 'utara', 39310908, '2019-12-13 19:20:23', 0),
(8, 'New13-3', 1, 'user1@mail.com', 22354987, 13, 'Sample', 1, 90, 'cod', '', 'dhaka', 28018449, '2019-12-13 19:23:04', 2),
(9, 'sharmin sultana', 3, 'sharmin@gmail.com', 123, 9, 'vim', 2, 100, 'bkash', '123456', 'Dhaka, Bangladesh', 82603480, '2019-12-23 18:58:04', 1),
(10, 'New13-1', 1, 'user1@mail.com', 1677163339, 16, 'Juicer ', 1, 2200, 'bkash', 'Trxid123456789', 'house 36 road 6 kamarpara turag', 91181074, '2019-12-25 02:13:12', 0),
(11, 'New13-1', 1, 'user1@mail.com', 1677163339, 21, 'Lays Chips', 2, 180, 'bkash', 'Trxid123456789', 'house 36 road 6 kamarpara turag', 22426467, '2019-12-25 02:13:12', 0),
(12, 'sasacsa', 4, 'alaoi@gmail.com', 675574, 15, 'Microwave Oven ', 1, 5000, 'cod', '211', '', 67573707, '2024-01-02 20:41:47', 0),
(13, 'sasacsa', 4, 'alaoi@gmail.com', 675574, 14, 'Spoon set', 1, 600, 'cod', '211', '', 38853534, '2024-01-02 20:41:47', 0),
(14, 'sasacsa', 4, 'alaoi@gmail.com', 675574, 14, 'Spoon set', 1, 600, 'cod', '211', '', 62577346, '2024-01-02 20:41:47', 0),
(15, 'sasacsa', 4, 'alaoi@gmail.com', 675574, 17, 'Surf Excel ', 1, 30, 'cod', '211', '', 37775177, '2024-01-02 20:41:47', 0),
(16, 'sasacsa', 4, 'alaoi@gmail.com', 675574, 20, 'ZERO Milk Chocolate', 1, 200, 'cod', '211', '', 36392750, '2024-01-02 20:41:47', 0),
(17, 'wsa', 4, 'alaoi@gmail.com', 235, 14, 'Spoon set', 1, 600, 'bkash', '2141', 'fcsac', 52736590, '2024-01-02 20:50:30', 0),
(18, 'wsa', 4, 'alaoi@gmail.com', 235, 15, 'Microwave Oven ', 1, 5000, 'bkash', '2141', 'fcsac', 54351063, '2024-01-02 20:50:30', 0),
(19, 'wsa', 4, 'alaoi@gmail.com', 235, 15, 'Microwave Oven ', 1, 5000, 'bkash', '2141', 'fcsac', 91955758, '2024-01-02 20:50:30', 0),
(20, 'wsa', 4, 'alaoi@gmail.com', 235, 16, 'Juicer ', 1, 2200, 'bkash', '2141', 'fcsac', 60421266, '2024-01-02 20:50:30', 0),
(21, 'ajsksa', 4, 'alaoi@gmail.com', 44, 15, 'Microwave Oven ', 1, 5000, 'cod', '2141', 'fcsac', 56068174, '2024-01-02 20:51:42', 0),
(22, 'ewf', 4, 'alaoi@gmail.com', 4555, 15, 'Microwave Oven ', 1, 5000, 'bkash', '43r53r3', 'vdsc', 95505791, '2024-01-02 20:53:13', 0),
(23, 'gawad', 5, 'gawad@gmail.com', 89877657, 15, 'Microwave Oven ', 1, 5000, '', '6786565656', 'taiz', 82280940, '2024-01-05 20:43:45', 0),
(24, 'gawad', 5, 'gawad@gmail.com', 987876, 15, 'Microwave Oven ', 1, 5000, 'bank', '6567325235', '67667', 99326571, '2024-01-05 20:58:19', 0),
(25, 'hjasgbjh', 5, 'gawad@gmail.com', 89798, 15, 'Microwave Oven ', 1, 5000, 'bank', '678979', 'jkasn', 75678549, '2024-01-05 21:32:24', 0),
(26, 'hjasgbjh', 5, 'gawad@gmail.com', 89798, 20, 'ZERO Milk Chocolate', 1, 200, 'bank', '678979', 'jkasn', 34800205, '2024-01-05 21:32:24', 0),
(27, 'hjasgbjh', 5, 'gawad@gmail.com', 89798, 15, 'Microwave Oven ', 1, 5000, 'bank', '678979', 'jkasn', 25664030, '2024-01-05 21:32:24', 0);

-- --------------------------------------------------------

--
-- بنية الجدول `setting`
--

CREATE TABLE `setting` (
  `id` int(255) NOT NULL,
  `title` varchar(255) NOT NULL,
  `facebook` varchar(255) NOT NULL,
  `twitter` varchar(255) NOT NULL,
  `credit` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- إرجاع أو استيراد بيانات الجدول `setting`
--

INSERT INTO `setting` (`id`, `title`, `facebook`, `twitter`, `credit`) VALUES
(1, 'Grocery Shopping', '0', 'sharmin', 'Company name');

-- --------------------------------------------------------

--
-- بنية الجدول `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(150) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- إرجاع أو استيراد بيانات الجدول `user`
--

INSERT INTO `user` (`id`, `name`, `email`, `password`) VALUES
(1, 'User1', 'user1@mail.com', '6ad14ba9986e3615423dfca256d04e3f'),
(2, 'sharmin sultana', 'sharmin@gmail.com', 'e10adc3949ba59abbe56e057f20f883e'),
(3, 'sharmin sultana', 'sharmin@gmail.com', '202cb962ac59075b964b07152d234b70'),
(4, 'alaoi', 'alaoi@gmail.com', '25d55ad283aa400af464c76d713c07ad'),
(5, 'gawad', 'gawad@gmail.com', '202cb962ac59075b964b07152d234b70');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `about`
--
ALTER TABLE `about`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `account`
--
ALTER TABLE `account`
  ADD PRIMARY KEY (`id_acc`);

--
-- Indexes for table `add_news`
--
ALTER TABLE `add_news`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `banner`
--
ALTER TABLE `banner`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `brand`
--
ALTER TABLE `brand`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`cart_id`);

--
-- Indexes for table `catogry`
--
ALTER TABLE `catogry`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contuct`
--
ALTER TABLE `contuct`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `different_address`
--
ALTER TABLE `different_address`
  ADD PRIMARY KEY (`id_address`),
  ADD KEY `user_id` (`user_id`),
  ADD KEY `pro_id` (`pro_id`);

--
-- Indexes for table `footerdata`
--
ALTER TABLE `footerdata`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `message`
--
ALTER TABLE `message`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`pro_id`);

--
-- Indexes for table `pro_order`
--
ALTER TABLE `pro_order`
  ADD PRIMARY KEY (`order_id`);

--
-- Indexes for table `setting`
--
ALTER TABLE `setting`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `about`
--
ALTER TABLE `about`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `account`
--
ALTER TABLE `account`
  MODIFY `id_acc` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `add_news`
--
ALTER TABLE `add_news`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `banner`
--
ALTER TABLE `banner`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `brand`
--
ALTER TABLE `brand`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `cart`
--
ALTER TABLE `cart`
  MODIFY `cart_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=45;

--
-- AUTO_INCREMENT for table `catogry`
--
ALTER TABLE `catogry`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `contuct`
--
ALTER TABLE `contuct`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `different_address`
--
ALTER TABLE `different_address`
  MODIFY `id_address` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `footerdata`
--
ALTER TABLE `footerdata`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `message`
--
ALTER TABLE `message`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `pro_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=44;

--
-- AUTO_INCREMENT for table `pro_order`
--
ALTER TABLE `pro_order`
  MODIFY `order_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT for table `setting`
--
ALTER TABLE `setting`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- قيود الجداول المحفوظة
--

--
-- القيود للجدول `different_address`
--
ALTER TABLE `different_address`
  ADD CONSTRAINT `pro_address_fk` FOREIGN KEY (`pro_id`) REFERENCES `pro_order` (`order_id`),
  ADD CONSTRAINT `user_address_fk` FOREIGN KEY (`user_id`) REFERENCES `user` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
