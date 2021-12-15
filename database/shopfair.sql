-- phpMyAdmin SQL Dump
-- version 4.0.4
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Oct 02, 2021 at 10:00 AM
-- Server version: 5.6.12-log
-- PHP Version: 5.4.16

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `id17789710_shopfair`
--
CREATE DATABASE IF NOT EXISTS `id7789710_shopfair` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `shopfair`;

-- --------------------------------------------------------

--
-- Table structure for table `brand`
--

CREATE TABLE IF NOT EXISTS `brand` (
  `brand_id` int(10) NOT NULL AUTO_INCREMENT,
  `brand_title` varchar(100) NOT NULL,
  PRIMARY KEY (`brand_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8mb4 AUTO_INCREMENT=10 ;

--
-- Dumping data for table `brand`
--

INSERT INTO `brand` (`brand_id`, `brand_title`) VALUES
(1, 'Vivo'),
(2, 'Intex'),
(3, 'Iphone'),
(4, 'Samsung'),
(5, 'Oppo'),
(6, 'Xiome'),
(7, 'Realme'),
(8, 'Motorola'),
(9, 'Zen');

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE IF NOT EXISTS `cart` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `p_id` int(10) NOT NULL,
  `ip_add` varchar(255) NOT NULL,
  `qty` int(10) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8mb4 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `cart`
--

INSERT INTO `cart` (`id`, `p_id`, `ip_add`, `qty`) VALUES
(1, 28, '1', 1),
(2, 25, '1', 1);

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE IF NOT EXISTS `categories` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `cat_name` varchar(100) NOT NULL,
  `img` text NOT NULL,
  `status` tinyint(4) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8mb4 AUTO_INCREMENT=15 ;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `cat_name`, `img`, `status`) VALUES
(1, 'Menss', 'man.png', 1),
(2, 'Womens', 'women.png', 1),
(3, 'Home Applience', 'homeapp.png', 1),
(4, 'Kids', 'kids.png', 1),
(5, 'Jewelry', 'jewelry.png', 1),
(6, 'Accessories ', 'acc.png', 1),
(8, 'Glocery', '41619-7-groceries-free-download-image_800x800.png', 1),
(9, 'Furniture', '14-red-sofa-png-image.png', 1),
(10, 'Toys For Kids', '33356-1-toy-transparent.png', 1),
(11, 'Sports', '22434-8-sport-image.png', 1),
(12, 'Gaming', '34989-9-counter-strike-logo-picture.png', 1),
(13, 'Mobiles', '73682-smartphone-apple-feature-4s-phone-iphone.png', 1),
(14, 'Electronics', 'PngItem_2474633.png', 1);

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE IF NOT EXISTS `contact` (
  `contact_id` int(10) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `subject` varchar(255) NOT NULL,
  `message` varchar(250) NOT NULL,
  PRIMARY KEY (`contact_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8mb4 AUTO_INCREMENT=10 ;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`contact_id`, `name`, `email`, `subject`, `message`) VALUES
(1, '', '', '', ''),
(2, '', '', '', ''),
(3, '', '', '', ''),
(4, '', '', '', ''),
(5, '', '', '', ''),
(6, '', '', '', ''),
(7, '', '', '', ''),
(8, '', '', '', ''),
(9, '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `faq`
--

CREATE TABLE IF NOT EXISTS `faq` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `question` varchar(100) NOT NULL,
  `answer` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `faq`
--

INSERT INTO `faq` (`id`, `question`, `answer`) VALUES
(1, 'How to Register as a seller ?', 'Just Click On Next Button'),
(2, 'How to return order ?', 'If you want to return or refund your purchase u can contact to shop owner Or vendor');

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE IF NOT EXISTS `orders` (
  `order_id` int(10) NOT NULL AUTO_INCREMENT,
  `customer_id` int(10) NOT NULL,
  `product_id` int(10) NOT NULL,
  `due_amount` int(100) NOT NULL,
  `invoice_no` int(100) NOT NULL,
  `total_products` int(100) NOT NULL,
  `order_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `order_status` text NOT NULL,
  PRIMARY KEY (`order_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8mb4 AUTO_INCREMENT=21 ;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`order_id`, `customer_id`, `product_id`, `due_amount`, `invoice_no`, `total_products`, `order_date`, `order_status`) VALUES
(6, 1, 7, 13, 1880529505, 3, '2021-09-26 13:13:06', 'Complete'),
(7, 1, 6, 5, 60247760, 1, '2021-09-25 13:12:31', 'Pending'),
(8, 1, 6, 5, 97970605, 1, '2021-09-25 13:12:59', 'Pending'),
(9, 1, 6, 5, 398348206, 1, '2021-09-25 13:13:12', 'Pending'),
(10, 1, 6, 5, 1174160527, 1, '2021-09-25 13:13:29', 'Pending'),
(11, 1, 6, 5, 1101525238, 1, '2021-09-25 13:13:38', 'Pending'),
(12, 1, 4, 444, 910669114, 1, '2021-09-26 11:00:19', 'Pending'),
(13, 1, 6, 5, 98344620, 1, '2021-09-26 11:35:30', 'Pending'),
(14, 1, 6, 5, 1407052506, 1, '2021-09-26 12:04:13', 'Pending'),
(15, 1, 5, 10, 1842261658, 1, '2021-09-26 12:04:46', 'Pending'),
(16, 1, 7, 13, 1472333980, 1, '2021-09-26 12:36:12', 'Pending'),
(17, 1, 5, 10, 1426183045, 2, '2021-09-26 13:32:26', 'Pending'),
(18, 1, 7, 13, 775078922, 1, '2021-09-26 14:16:10', 'Complete'),
(19, 1, 7, 15, 2052696259, 2, '2021-10-01 06:35:24', ''),
(20, 1, 4, 15, 2052696259, 2, '2021-10-01 06:35:24', '');

-- --------------------------------------------------------

--
-- Table structure for table `payments`
--

CREATE TABLE IF NOT EXISTS `payments` (
  `pay_id` int(10) NOT NULL AUTO_INCREMENT,
  `invoice_no` int(10) NOT NULL,
  `amount` int(10) NOT NULL,
  `pay_mode` text NOT NULL,
  `ref_no` int(10) NOT NULL,
  `pay_date` text NOT NULL,
  PRIMARY KEY (`pay_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8mb4 AUTO_INCREMENT=9 ;

--
-- Dumping data for table `payments`
--

INSERT INTO `payments` (`pay_id`, `invoice_no`, `amount`, `pay_mode`, `ref_no`, `pay_date`) VALUES
(1, 458058277, 100, 'Offline', 2147483647, '1-1-2001'),
(2, 1111111, 13, 'Paypal', 345454, '12-2-2001'),
(3, 3322, 100, 'Paypal', 2147483647, '1-1-2001'),
(4, 1787671960, 100, 'Paypal', 2147483647, '12-2-2001'),
(5, 1787671960, 100, 'Offline', 2147483647, '12-2-2001'),
(6, 1472333980, 12, 'Paypal', 2147483647, '1-1-2001'),
(7, 3322, 100, 'Offline', 2147483647, '12-2-2001'),
(8, 3322, 233, 'Paypal', 2147483647, '1-1-2001');

-- --------------------------------------------------------

--
-- Table structure for table `paypal_payments`
--

CREATE TABLE IF NOT EXISTS `paypal_payments` (
  `payment_id` int(10) NOT NULL AUTO_INCREMENT,
  `transaction_no` text NOT NULL,
  `amount` int(10) NOT NULL,
  `currency` int(10) NOT NULL,
  `user_id` int(10) NOT NULL,
  `product_id` int(10) NOT NULL,
  `qty` int(10) NOT NULL,
  PRIMARY KEY (`payment_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8mb4 AUTO_INCREMENT=25 ;

--
-- Dumping data for table `paypal_payments`
--

INSERT INTO `paypal_payments` (`payment_id`, `transaction_no`, `amount`, `currency`, `user_id`, `product_id`, `qty`) VALUES
(1, '', 0, 0, 0, 0, 0),
(2, '', 0, 0, 0, 0, 0),
(3, '', 0, 0, 0, 0, 0),
(4, '', 0, 0, 0, 0, 0),
(5, '', 0, 0, 0, 0, 0),
(6, '', 0, 0, 0, 0, 0),
(7, '', 0, 0, 0, 0, 0),
(8, '', 0, 0, 0, 0, 0),
(9, '', 0, 0, 0, 0, 0),
(10, '', 0, 0, 0, 0, 0),
(11, '', 0, 0, 0, 0, 0),
(12, '', 0, 0, 0, 0, 0),
(13, '', 0, 0, 0, 0, 0),
(14, '', 0, 0, 0, 0, 0),
(15, '', 0, 0, 0, 0, 0),
(16, '', 0, 0, 0, 0, 0),
(17, '', 0, 0, 0, 0, 0),
(18, '', 0, 0, 0, 0, 0),
(19, '', 0, 0, 0, 0, 0),
(20, '', 0, 0, 0, 0, 0),
(21, '', 0, 0, 0, 0, 0),
(22, '', 0, 0, 0, 0, 0),
(23, '', 0, 0, 0, 0, 0),
(24, '', 0, 0, 0, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `pending_orders`
--

CREATE TABLE IF NOT EXISTS `pending_orders` (
  `order_id` int(10) NOT NULL AUTO_INCREMENT,
  `customer_id` int(10) NOT NULL,
  `invoice_no` int(10) NOT NULL,
  `product_id` int(10) NOT NULL,
  `qty` int(10) NOT NULL,
  `order_status` text NOT NULL,
  PRIMARY KEY (`order_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8mb4 AUTO_INCREMENT=18 ;

--
-- Dumping data for table `pending_orders`
--

INSERT INTO `pending_orders` (`order_id`, `customer_id`, `invoice_no`, `product_id`, `qty`, `order_status`) VALUES
(16, 1, 2052696259, 7, 1, 'Pending'),
(17, 1, 2052696259, 4, 1, 'Pending');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE IF NOT EXISTS `products` (
  `p_id` int(10) NOT NULL AUTO_INCREMENT,
  `category_name` int(11) NOT NULL,
  `vid` int(10) NOT NULL,
  `product_name` varchar(255) NOT NULL,
  `mrp` float NOT NULL,
  `price` float NOT NULL,
  `qty` int(11) NOT NULL,
  `img` varchar(255) NOT NULL,
  `short_desc` varchar(100) NOT NULL,
  `description` varchar(255) NOT NULL,
  `keywords` text NOT NULL,
  `status` tinyint(4) NOT NULL,
  `add_by` int(11) NOT NULL,
  PRIMARY KEY (`p_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8mb4 AUTO_INCREMENT=29 ;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`p_id`, `category_name`, `vid`, `product_name`, `mrp`, `price`, `qty`, `img`, `short_desc`, `description`, `keywords`, `status`, `add_by`) VALUES
(1, 1, 1, 'Mania Hood Boy Shirt', 49, 39, 51, 'mengrey.jpg', 'this is the best product', 'this is the best productthis is the best productthis is the best productthis is the best productthis is the best productthis is the best productthis is the best product', 'sherwani,man,clothing', 0, 1),
(2, 1, 1, 'Man Rig Black T-shirt', 899, 444, 0, 'ma black.jpg', 'Corol shirt for white man who', 'this is the best productthis is the best productthis is the best productthis is the best productthis is the best productthis is the best productthis is the best productthis is the best productthis is the best productthis is the best productthis is the bes', 'black', 1, 1),
(3, 1, 1, 'Men Blue Shirt', 11, 499, 3, 'rapiddry.jpg', 'Corol shirt for white man who', 'this is the best productthis is the best productthis is the best productthis is the best productthis is the best productthis is the best productthis is the best productthis is the best productthis is the best productthis is the best productthis is the bes', 'this is the best product', 1, 1),
(4, 1, 1, 'Marvel T-shirt ', 23223, 444, 0, 'roadsterblue.jpg', 'this is the best product', 'this is the best productthis is the best productthis is the best productthis is the best productthis is the best productthis is the best productthis is the best productthis is the best productthis is the best productthis is the best productthis is the bes', 'this is the best product', 1, 1),
(5, 2, 1, 'Athena Green Solid Kameez', 11, 10, 10, 'Athena green solid.jpg', 'athena is product from our shopfair shop', 'athena is product from our shopfair shopathena is product from our shopfair shopathena is product from our shopfair shopathena is product from our shopfair shopathena is product from our shopfair shopathena is product from our shopfair shopathena is produ', 'women,woman,clothing', 1, 1),
(6, 4, 1, 'kid moisture  wash for baby', 10, 5, 3, '200-rich-moisture-hair-to-toe-baby-wash-baby-dove-original-imafhhnczgmffnjd.jpg', 'Corol shirt for white man who', 'athena is product from our shopfair shopathena is product from our shopfair shopathena is product from our shopfair shopathena is product from our shopfair shopathena is product from our shopfair shopathena is product from our shopfair shopathena is produ', 'kid', 1, 1),
(7, 4, 1, 'Marvel T-shirt Kids', 5, 13, -2, 'marvel.jpg', 'this is the best product', 'Marvel T-shirt Kidx1 Item$400 net price', 'athena is product from our shopfair shop', 1, 1),
(8, 0, 0, 'dfdfdfdfdfdf', 22, 22, 2, '80fd644b28d7c5f8.jpg', 'OK', 'dddd', '', 1, 1),
(9, 2, 0, 'White Shoes', 199, 199, 5, '4e67fadc-57ba-4094-b20b-f4145f2e86071614705245633-1.jpg', 'athena is product from our shopfair shop', 'white shoes\r\n\r\nx3 per piece\r\n\r\nfor men and womens', '', 1, 1),
(10, 4, 0, 'Dhamaka Car Pack', 399, 444, 10, '5-car-gift-pack-hot-wheels-original-imaf98uenfkukczz.jpg', 'athena is product from our shopfair shop', 'five cars for kids', '', 1, 1),
(11, 2, 1, 'Athena Blue Short', 700, 699, 10, 'Athena woman.jpg', 'athena is product from our shopfair shop', 'athena is product from our shopfair shopathena is product from our shopfair shopathena is product from our shopfair shopathena is product from our shopfair shopathena is product from our shopfair shopathena is product from our shopfair shop', 'shorts', 1, 1),
(12, 4, 1, 'Avenger Yellow Star', 122, 122, 11, 'avengers.jpg', 'this is the best product', 'athena is product from our shopfair shopathena is product from our shopfair shopathena is product from our shopfair shopathena is product from our shopfair shopathena is product from our shopfair shopathena is product from our shopfair shopathena is produ', 'kid, t-shirt', 1, 1),
(13, 4, 1, 'Blue Spider Man T-shirt', 899, 222, 5, 'bonkids.jpg', 'Corol shirt for white man who', 'Corol shirt for white man whoCorol shirt for white man whoCorol shirt for white man whoCorol shirt for white man whoCorol shirt for white man whoCorol shirt for white man whoCorol shirt for white man whoCorol shirt for white man whoCorol shirt for white m', 'spidermen,t-shirt', 1, 1),
(14, 9, 2, 'Two Large Sofa', 4999, 3599, 40, 'brown-na-tulip-3-1-1-bharat-lifestyle-cream-original-imaf9jnwh9fmgjvg (1).jpg', 'large home decoration', 'sofa are for sale', 'homedecoration,decoration,beautiful house', 1, 1),
(15, 4, 1, 'baby cycle modern', 399, 444, 2, 'easy-to-push-baby-pram-with-quick-one-hand-folding-blue-mm-50-a-original-imag4h6bzrb6fngh.jpg', 'easy to push', 'pushing baby for fun', 'easy push cycle for kid,kid,baby', 1, 1),
(16, 2, 1, 'Fbella Branded Women kurti', 899, 789, 11, 'fbella.jpg', 'athena is product from our shopfair shop', 'athena is product from our shopfair shopathena is product from our shopfair shopathena is product from our shopfair shopathena is product from our shopfair shopathena is product from our shopfair shop', 'women,girl', 1, 1),
(17, 6, 1, 'Moden Fosil Watch For Men', 1799, 1699, 8, 'fosil-watch1.jpg', 'athena is product from our shopfair shopathena is product from our shopfair shop', 'athena is product from our shopfair shopathena is product from our shopfair shopathena is product from our shopfair shopathena is product from our shopfair shopathena is product from our shopfair shopathena is product from our shopfair shopathena is produ', 'men,watch,ghadi', 1, 1),
(18, 2, 1, 'Gristone ', 122, 566, 12, 'gritstones.jpg', 'OK', 'athena is product from our shopfair shopathena is product from our shopfair shopathena is product from our shopfair shopathena is product from our shopfair shopathena is product from our shopfair shopathena is product from our shopfair shopathena is produ', 'girl,baby girl', 1, 1),
(19, 1, 2, 'Hang-Up Sherwani Mans', 599, 478, 80, 'hangup-sherwani-2.jpg', 'fdfdfd', 'athena is product from our shopfair shopathena is product from our shopfair shopathena is product from our shopfair shopathena is product from our shopfair shopathena is product from our shopfair shopathena is product from our shopfair shopathena is produ', 'sherwani, man formal', 1, 1),
(20, 4, 1, 'HM Girl', 699, 699, 5, 'hmgirl.jpg', 'Corol shirt for white man who', 'hm girl t--shirt', 'girl,clothing', 1, 1),
(21, 13, 1, 'OPPO  A3s HD Glare', 1499, 1389, 40, 'image_20191218_b0d95bc90016050a0e883d7392eb7a7a.jpg', 'mobiles oppo a3s', 'OPPPO', 'mobile,oppo', 1, 1),
(22, 13, 1, 'OPPO  Reno6 HD Glare', 24000, 24000, 2, 'img_20210724_84c55d747c5f2709287c7dc1358f79e9.jpg', 'athena is product from our shopfair shop', 'athena is product from our shopfair shopathena is product from our shopfair shopathena is product from our shopfair shopathena is product from our shopfair shopathena is product from our shopfair shopathena is product from our shopfair shopathena is produ', 'oppo,a3,reno', 1, 1),
(23, 12, 1, 'PC GTA V', 1788, 1788, 20, 'pc-grand-theft-auto-v-rockstar-standard-edition-original-imaf249fytvkz9hm.jpeg', 'this is the best product', 'gaming', 'pc games,gta v,gta,games', 1, 1),
(24, 14, 1, 'Washinf Machine', 8999, 7999, 78, 'wa65a4002vs-tl-samsung-original-imafvgz42jrdkk7n.jpeg', 'Corol shirt for white man who', 'athena is product from our shopfair shopathena is product from our shopfair shopathena is product from our shopfair shopathena is product from our shopfair shopathena is product from our shopfair shopathena is product from our shopfair shopathena is produ', 'washing machine', 1, 1),
(25, 3, 1, 'Washinf Machine', 5999, 1229, 12, 'wa65a4002vs-tl-samsung-original-imafvgz42jrdkk7n.jpeg', 'Corol shirt for white man who', 'athena is product from our shopfair shopathena is product from our shopfair shopathena is product from our shopfair shopathena is product from our shopfair shopathena is product from our shopfair shopathena is product from our shopfair shopathena is produ', 'washing machine', 1, 1),
(26, 10, 2, 'Rocking Toy Chair', 399, 444, 12, 'rocking-chair-n-baby-bouncer-br212orange-electric-toy-house-original-imaeh4v7yafvqu3q.jpg', 'this is the best product', 'rocking chair', 'kid,toy', 1, 1),
(27, 8, 1, 'Onion', 49, 39, 12, '8-onion-png-image (1).png', 'Onion sabji', 'to make better rec', 'glocery,onion', 1, 1),
(28, 8, 1, 'Tomato', 122, 122, 12, 'tomato_PNG12596 (1).png', 'tomato', 'tomato', 'tomato', 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `rating_review`
--

CREATE TABLE IF NOT EXISTS `rating_review` (
  `r_id` int(10) NOT NULL AUTO_INCREMENT,
  `r_name` text NOT NULL,
  `r_email` varchar(100) NOT NULL,
  `r_msg` text NOT NULL,
  `p_id` int(10) NOT NULL,
  `r_time` date NOT NULL,
  `status` tinyint(4) NOT NULL,
  PRIMARY KEY (`r_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8mb4 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `rating_review`
--

INSERT INTO `rating_review` (`r_id`, `r_name`, `r_email`, `r_msg`, `p_id`, `r_time`, `status`) VALUES
(1, 'Customer1', 'customer@gmail.com', 'this is the one of the best selling product', 7, '2021-09-10', 0),
(4, 'Robin', 'robinmack123@gmail.com', 'I woul like to say something about this product - \r\n\r\nvery nice', 7, '2021-09-26', 0);

-- --------------------------------------------------------

--
-- Table structure for table `register`
--

CREATE TABLE IF NOT EXISTS `register` (
  `user_id` int(10) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `ip_add` varchar(255) NOT NULL,
  `status` tinyint(10) NOT NULL,
  PRIMARY KEY (`user_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8mb4 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `register`
--

INSERT INTO `register` (`user_id`, `name`, `email`, `password`, `ip_add`, `status`) VALUES
(1, 'customer', 'customer@gmail.com', '123', '', 0),
(2, 'Robin', 'robinmack123@gmail.com', '123', '', 0),
(3, 'ddfdf', 'f@gmail.com', '3232', '', 0);

-- --------------------------------------------------------

--
-- Table structure for table `seller`
--

CREATE TABLE IF NOT EXISTS `seller` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL,
  `email` text NOT NULL,
  `shop` varchar(255) NOT NULL,
  `shop_img` text NOT NULL,
  `password` varchar(255) NOT NULL,
  `city` varchar(255) NOT NULL,
  `pincode` int(10) NOT NULL,
  `msg` varchar(255) NOT NULL,
  `status` int(10) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8mb4 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `seller`
--

INSERT INTO `seller` (`id`, `name`, `email`, `shop`, `shop_img`, `password`, `city`, `pincode`, `msg`, `status`) VALUES
(1, 'Mahesh', 'demo@gmail.com', 'Footware', 'bonkids.jpg', '12', 'Rajkot', 2121, 'you can sale', 1),
(2, 'CustomerVendor', 'vendor@gmail.com', 'Footware', 'image_20191218_b0d95bc90016050a0e883d7392eb7a7a.jpg', '123', 'Rajkot', 32232, 'you can sale', 1);

-- --------------------------------------------------------

--
-- Table structure for table `slider`
--

CREATE TABLE IF NOT EXISTS `slider` (
  `slider_id` int(10) NOT NULL AUTO_INCREMENT,
  `slider_name` text NOT NULL,
  `slider_img` text NOT NULL,
  `slider_description` text NOT NULL,
  PRIMARY KEY (`slider_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8mb4 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `slider`
--

INSERT INTO `slider` (`slider_id`, `slider_name`, `slider_img`, `slider_description`) VALUES
(1, 'Welcome ShopFair', 'bg.jpg', 'This is the about my project'),
(2, 'New to ShopFair', 'bg-2.jpg', 'This is the about my project'),
(3, 'ddsddssdsd', 'banner-bg.jpg', 'fs');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `username` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `role` int(11) NOT NULL,
  `mobile` varchar(50) NOT NULL,
  `status` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8mb4 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `email`, `password`, `role`, `mobile`, `status`) VALUES
(1, 'admin', 'admin@gmail.com', '123', 0, '999932823', 1);

-- --------------------------------------------------------

--
-- Table structure for table `wishlist`
--

CREATE TABLE IF NOT EXISTS `wishlist` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `p_id` int(10) NOT NULL,
  `user_id` int(10) NOT NULL,
  `timestamp` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
