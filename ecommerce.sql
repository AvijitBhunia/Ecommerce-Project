-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 22, 2019 at 02:29 PM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.3.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ecommerce`
--

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `user_id` int(10) NOT NULL,
  `user_email` varchar(255) NOT NULL,
  `user_pass` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`user_id`, `user_email`, `user_pass`) VALUES
(2, 'gist@gmail.com', '123456');

-- --------------------------------------------------------

--
-- Table structure for table `brands`
--

CREATE TABLE `brands` (
  `brand_id` int(100) NOT NULL,
  `brand_title` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `brands`
--

INSERT INTO `brands` (`brand_id`, `brand_title`) VALUES
(1, 'iPhone'),
(2, 'Xiaomi'),
(3, 'Samsung'),
(4, 'HP'),
(5, 'DELL'),
(7, 'Canon');

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `p_id` int(10) NOT NULL,
  `ip_add` varchar(255) NOT NULL,
  `qty` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `cat_id` int(100) NOT NULL,
  `cat_title` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`cat_id`, `cat_title`) VALUES
(1, 'Mobiles'),
(2, 'Laptops'),
(3, 'Cameras');

-- --------------------------------------------------------

--
-- Table structure for table `customers`
--

CREATE TABLE `customers` (
  `customer_id` int(100) NOT NULL,
  `customer_ip` varchar(255) NOT NULL,
  `customer_name` text NOT NULL,
  `customer_email` varchar(100) NOT NULL,
  `customer_pass` varchar(100) NOT NULL,
  `customer_country` text NOT NULL,
  `customer_city` text NOT NULL,
  `customer_contact` varchar(255) NOT NULL,
  `customer_address` text NOT NULL,
  `customer_image` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `customers`
--

INSERT INTO `customers` (`customer_id`, `customer_ip`, `customer_name`, `customer_email`, `customer_pass`, `customer_country`, `customer_city`, `customer_contact`, `customer_address`, `customer_image`) VALUES
(1, '::1', 'Avijit', 'gist2019@gmail.com', '12345', 'India', 'Haldia', '8250319353', 'S.K Nagar', '2f9ba805f8191e6e5906eb9d9b1ee50ea4ef7ce1cfaeb8382b147f6b3223823d0.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `product_id` int(100) NOT NULL,
  `product_cat` int(100) NOT NULL,
  `product_brand` int(100) NOT NULL,
  `product_title` varchar(255) NOT NULL,
  `product_price` int(100) NOT NULL,
  `product_desc` text NOT NULL,
  `product_image` text NOT NULL,
  `product_keywords` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`product_id`, `product_cat`, `product_brand`, `product_title`, `product_price`, `product_desc`, `product_image`, `product_keywords`) VALUES
(1, 1, 1, 'Iphone X', 74000, '<p>iPhone X features a 5.8-inch Super Retina display with HDR and True Tone. An all-screen design and a surgical-grade stainless steel band. Charges wirelessly. Resists water and dust. 12MP dual cameras with dual optical image stabilization. TrueDepth camera with Portrait mode and Portrait Lighting. Face ID lets you unlock and use Apple Pay with just a glance. Powered by the A11 Bionic chip, iPhone X supports augmented reality experiences in games and apps. And iOS 12&mdash;the most advanced mobile operating system&mdash;with powerful new tools that make iPhone more personal than ever.</p>', 'iphonex-TA.jpg', 'Latest'),
(2, 1, 2, 'Redmi Note 7 Pro', 14000, '<p>The Xiaomi Redmi Note 7 Pro is a good option to buy in the mid-range budget. The configuration of the smartphone quite good to perform well. The smartphone comes with a huge storage space for storing large amount of data or files. The camera quality of the smartphone is very good for clicking good images and videos. However, it has hybrid slot, which is not preferred by many users.</p>', 'Redmi Note 7 Pro.jpg', 'Latest'),
(3, 1, 3, 'Samsung A50', 20000, '<p>The Samsung Galaxy A50 is a well-equipped mid-range smartphone with interesting features. It comes with an excellent FHD+ display compared to the budget. The processor is well enough for the operation task. In terms of storage, the phone has great storage capacity. The fingerprint sensor is provided on the board. The cameras are capable enough to capture a detailed picture. Overall, it is a favourable option in this price segment.</p>', 'Samsung A50.jpg', 'Latest, Exynos'),
(6, 3, 7, 'Canon 1300D', 30000, '<p>The 1300D is an entry-level DSLR that supersedes the <a title=\"Canon EOS 1200D\" href=\"https://en.wikipedia.org/wiki/Canon_EOS_1200D\">EOS 1200D</a>. A key-added-feature was the introduction of <a title=\"Wi-Fi\" href=\"https://en.wikipedia.org/wiki/Wi-Fi\">Wi-Fi</a> and <a class=\"mw-redirect\" title=\"Near field communication\" href=\"https://en.wikipedia.org/wiki/Near_field_communication\">near-field connectivity (NFC)</a> for transfer of data to devices such as computers and <a title=\"Smartphone\" href=\"https://en.wikipedia.org/wiki/Smartphone\">smartphones</a></p>', 'Canon 1300D.jpg', 'nfc'),
(7, 2, 4, 'Hp Omen', 120000, '<p>When the competition is relentless, greatness is achieved by those heroes who rise to the occasion. Equipped with powerful hardware and an aggressive design, the OMEN Laptop takes mobile performance seriously, letting you conquer any challenge in-game from just about anywhere.</p>', 'Hp Omen.png', 'hp, latest'),
(8, 2, 5, 'Dell Alienware', 140000, 'Gaming Laptop Excellent Features', 'Dell Alienware.jpg', 'dell, gaming');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`user_id`);

--
-- Indexes for table `brands`
--
ALTER TABLE `brands`
  ADD PRIMARY KEY (`brand_id`);

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`p_id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`cat_id`);

--
-- Indexes for table `customers`
--
ALTER TABLE `customers`
  ADD PRIMARY KEY (`customer_id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`product_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admins`
--
ALTER TABLE `admins`
  MODIFY `user_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `brands`
--
ALTER TABLE `brands`
  MODIFY `brand_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `cat_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `customers`
--
ALTER TABLE `customers`
  MODIFY `customer_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `product_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
