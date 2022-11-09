-- phpMyAdmin SQL Dump
-- version 4.8.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 28, 2019 at 08:49 AM
-- Server version: 10.1.31-MariaDB
-- PHP Version: 7.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pharmacy_shifa`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin_user`
--

CREATE TABLE `admin_user` (
  `id` int(11) NOT NULL,
  `user_name` varchar(35) NOT NULL,
  `user_pass` varchar(50) NOT NULL,
  `user_type` varchar(35) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin_user`
--

INSERT INTO `admin_user` (`id`, `user_name`, `user_pass`, `user_type`) VALUES
(1, 'admin', '12345', 'admin'),
(4, 'employee', '12345', 'co_admin'),
(5, 'demo', '12345', 'co_admin');

-- --------------------------------------------------------

--
-- Table structure for table `all_medicine`
--

CREATE TABLE `all_medicine` (
  `id` int(11) NOT NULL,
  `medicine_name` varchar(50) NOT NULL,
  `medicine_id` varchar(35) NOT NULL,
  `medicine_des` text NOT NULL,
  `price` varchar(50) NOT NULL,
  `img` varchar(35) NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `all_medicine`
--

INSERT INTO `all_medicine` (`id`, `medicine_name`, `medicine_id`, `medicine_des`, `price`, `img`, `date`) VALUES
(6, 'ACE +', '', 'ghjfjh', '20', 'nedicine.jpg', '2019-09-10'),
(9, 'Napa', '3', 'sFds', '10', 'nedicine.jpg', '2019-10-16'),
(12, 'Napa', '3', 'gdsg', '10', 'nedicine.jpg', '2019-07-02'),
(14, 'anxitol', '4', 'for neck pain', '150', 'download (1).jpg', '0000-00-00'),
(15, 'frenxit', '3', 'mentaly seck', '300', 'download.jpg', '0000-00-00'),
(16, 'Eva', '1', 'women erotic problem', '700', 'download (2).jpg', '0000-00-00'),
(17, 'geflox', '1', 'E-mail IS Required *', '120', 'images (5).jpg', '0000-00-00'),
(25, 'dexpoten', '2', 'syrup', '120', '27658007_1655296894559530_149291531', '2019-11-15');

-- --------------------------------------------------------

--
-- Table structure for table `ambulance_order`
--

CREATE TABLE `ambulance_order` (
  `id` int(11) NOT NULL,
  `hospital_name` varchar(60) NOT NULL,
  `mobile_no` varchar(60) NOT NULL,
  `address` text NOT NULL,
  `price` varchar(50) NOT NULL,
  `picture` varchar(100) NOT NULL,
  `user_id` varchar(35) NOT NULL,
  `status` int(15) NOT NULL DEFAULT '0',
  `date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ambulance_order`
--

INSERT INTO `ambulance_order` (`id`, `hospital_name`, `mobile_no`, `address`, `price`, `picture`, `user_id`, `status`, `date`) VALUES
(35, 'tewt', '34647', 'yery', '75468', '1.jpg', '', 1, '0000-00-00 00:00:00'),
(36, 'dshy', '4758', 'yeru', '75867', '2.jpg', '', 1, '0000-00-00 00:00:00'),
(37, 'gsh', '45758', 'hdh', '75856', 'about_1.jpg', '1', 0, '0000-00-00 00:00:00'),
(38, 'Arambagh  000', '20000', 'dha', '10000', '2.jpg', '1', 0, '0000-00-00 00:00:00'),
(39, 'Arambagh  000', '20000', 'dha', '10000', '2.jpg', '', 0, '0000-00-00 00:00:00'),
(40, 'Arambagh  000', '20000', 'dha', '10000', '2.jpg', '', 0, '0000-00-00 00:00:00'),
(41, 'Arambagh  000', '20000', 'dha', '10000', '2.jpg', '10', 0, '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `ambulance_service`
--

CREATE TABLE `ambulance_service` (
  `id` int(11) NOT NULL,
  `hospital_name` varchar(50) NOT NULL,
  `address` text NOT NULL,
  `phone_number` varchar(35) NOT NULL,
  `price` varchar(35) NOT NULL,
  `picture` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ambulance_service`
--

INSERT INTO `ambulance_service` (`id`, `hospital_name`, `address`, `phone_number`, `price`, `picture`) VALUES
(6, 'Arambagh  000', 'dha', '20000', '10000', '2.jpg'),
(10, 'awgsd', 'bhfdh', '6374', '2338', 'logo2.png');

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `cart_id` int(11) NOT NULL,
  `session_id` varchar(255) NOT NULL,
  `pro_id` varchar(35) NOT NULL,
  `pro_name` varchar(80) NOT NULL,
  `pro_qty` varchar(50) NOT NULL,
  `pro_price` varchar(50) NOT NULL,
  `pro_img` varchar(80) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cart`
--

INSERT INTO `cart` (`cart_id`, `session_id`, `pro_id`, `pro_name`, `pro_qty`, `pro_price`, `pro_img`) VALUES
(1, '2aeotvkeugn2sgijnhf4tlo427', '6', 'ACE +', '12', '20', 'nedicine.jpg'),
(2, '2aeotvkeugn2sgijnhf4tlo427', '9', 'Napa', '1', '10', 'nedicine.jpg'),
(8, 'cg4juhejda2ljhgl6opivisehq', '6', 'ACE +', '1', '20', 'nedicine.jpg'),
(9, 'cg4juhejda2ljhgl6opivisehq', '9', 'Napa', '1', '10', 'nedicine.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `contact_us`
--

CREATE TABLE `contact_us` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `subject` varchar(80) NOT NULL,
  `massage` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `contact_us`
--

INSERT INTO `contact_us` (`id`, `name`, `email`, `subject`, `massage`) VALUES
(1, 'setu', 'setu@setu.com', '', 'Hi, I am OLD Student...'),
(2, 'sujan', 'emonraj21@gmail.com', '', 'hgdfh'),
(3, 'fsdg', 'hfhjf', 'hfhf', 'hdfh'),
(4, '', '', '', ''),
(5, '', '', '', ''),
(6, '', '', '', ''),
(7, '', '', '', ''),
(8, 'csvfs', 'fdsgsdg', 'dg', 'gdsg'),
(9, 'zdgdsg', 'sdgdh75689', 'fdsg', 'fdsgsdgs');

-- --------------------------------------------------------

--
-- Table structure for table `create_prescription`
--

CREATE TABLE `create_prescription` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `age` varchar(35) NOT NULL,
  `sex` varchar(35) NOT NULL,
  `problem` text NOT NULL,
  `weight` varchar(35) NOT NULL,
  `medicine_id` varchar(35) NOT NULL,
  `medicine_name` varchar(80) NOT NULL,
  `medicine_mg` varchar(35) NOT NULL,
  `dose` varchar(80) NOT NULL,
  `day` varchar(35) NOT NULL,
  `test` varchar(100) NOT NULL,
  `test_decription` text NOT NULL,
  `advice` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `create_prescription`
--

INSERT INTO `create_prescription` (`id`, `name`, `age`, `sex`, `problem`, `weight`, `medicine_id`, `medicine_name`, `medicine_mg`, `dose`, `day`, `test`, `test_decription`, `advice`) VALUES
(1, 'abc', '22', 'male', 'dfsg', 'gfdh', 'dg', 'gdg', 'gdsg', 'gsg', 'gsg', 'gsg', 'gsgs', 'gsg');

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `id` int(11) NOT NULL,
  `cus_name` varchar(80) NOT NULL,
  `cus_address` text NOT NULL,
  `cus_city` varchar(80) NOT NULL,
  `cus_phone` varchar(35) NOT NULL,
  `cus_email` varchar(60) NOT NULL,
  `cus_password` varchar(80) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`id`, `cus_name`, `cus_address`, `cus_city`, `cus_phone`, `cus_email`, `cus_password`) VALUES
(1, 'PRO', 'Dhaka', 'Siddeshwari', '01716664794', 'protikwub@gmail.com', 'prospero'),
(2, 'prottasha', 'dhaka-1202', 'Dhaka', '7569679', 'admin022@gmail.com', '12345'),
(10, 'gdh', 'hfh', 'hfghj', 'jgj57568', 'raj@gmail.com', '12345'),
(11, 'Emon', 'Dhaka', 'Fridpur', 'vbvcn n7568', 'hasib22@gmail.com', '12345'),
(12, 'hfgh', 'gjgh', 'hh', 'fgfhg', 'emon@gmail.com', '123'),
(15, 'abc', 'dnaha', 'bd', '01811287256', 'hasibbd@gmail.com', '12345'),
(16, 'emon', 'dhaka', 'bd', '01811287256', 'emon21@gmail.com', '123456'),
(17, 'abc', 'dhaka', 'bd', '01811287256', 'mike@gmail.com', 'mmmm'),
(18, 'emon', 'dhaka', 'Frd', '01811287256', 'harry@den.com', 'code0'),
(19, 'shurovi', '49/2 Siddeshwari Circcular Road, Ramna', 'Dhaka', '01778250870', 'mahapatraprottasha@gmail.com', '12345'),
(20, 'Shifa Akter', '49/2 Siddeshwari Circcular Road, Ramna', 'Dhaka', '01716664794', 'prottasha@outlook.com', '1234656'),
(21, 'Shifa Akter', '49/2 Siddeshwari Circcular Road, Ramna', 'Dhaka', '01716664794', 'prottasha_tmu@gmail.com', '12345'),
(22, 'shifa', '49/2 Siddeshwari Circcular Road, Ramna', 'Dhaka', '01716664794', 'mahap@gmail.com', '12345'),
(23, 'ajrin', '49/2 Siddeshwari Circcular Road, Ramna', 'Dhaka', '01716664794', 'naimarima03@gmail.com', '12345');

-- --------------------------------------------------------

--
-- Table structure for table `customer_order`
--

CREATE TABLE `customer_order` (
  `id` int(11) NOT NULL,
  `customer_id` varchar(25) NOT NULL,
  `user_id` varchar(25) NOT NULL,
  `name` varchar(80) NOT NULL,
  `address` text NOT NULL,
  `city` varchar(35) NOT NULL,
  `phone_no` varchar(35) NOT NULL,
  `email` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `invoice`
--

CREATE TABLE `invoice` (
  `id` int(11) NOT NULL,
  `invoiceID` varchar(80) NOT NULL,
  `invoice_name` varchar(50) NOT NULL,
  `invoice_address` text NOT NULL,
  `invoice_email` varchar(50) NOT NULL,
  `invoice_phone` varchar(35) NOT NULL,
  `address` text NOT NULL,
  `email` varchar(60) NOT NULL,
  `phone_no` varchar(35) NOT NULL,
  `product_name` varchar(50) NOT NULL,
  `product_price` varchar(50) NOT NULL,
  `product_qty` varchar(50) NOT NULL,
  `date_of_invoice` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `invoice`
--

INSERT INTO `invoice` (`id`, `invoiceID`, `invoice_name`, `invoice_address`, `invoice_email`, `invoice_phone`, `address`, `email`, `phone_no`, `product_name`, `product_price`, `product_qty`, `date_of_invoice`) VALUES
(14, '449711', '', '', '', '', '', '', '', 'Napa', '1000', '100', '2019-10-01 03:04:24'),
(15, '679156', 'raj', 'xv', 'rrr', '57547', 'gjfgj', 'bc', '7575', 'Napa', '1000', '100', '2019-10-01 03:15:37'),
(16, '276237', '', '', '', '', '', '', '', 'Napa', '1000', '100', '2019-10-01 03:22:31'),
(17, '137461', 'emon', 'dhaka', 'emon124@mail.com', '01811287256', 'BD Pharmacy', 'Gulshin - 1, Dhaka-1205', '465756879', 'ACE +', '2000', '100', '2019-10-01 03:47:46'),
(18, '305134', 'jyk', 'jtjfg', 'jgfj', 'jfj', 'jfgj', 'jjgf', 'jgfjgf', 'Napa', '100', '10', '2019-10-18 10:03:17');

-- --------------------------------------------------------

--
-- Table structure for table `medicine_buy`
--

CREATE TABLE `medicine_buy` (
  `id` int(11) NOT NULL,
  `medicine_id` varchar(35) NOT NULL,
  `name` varchar(50) NOT NULL,
  `price` varchar(50) NOT NULL,
  `img` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `medicine_list`
--

CREATE TABLE `medicine_list` (
  `id` int(11) NOT NULL,
  `medicine_name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `medicine_list`
--

INSERT INTO `medicine_list` (`id`, `medicine_name`) VALUES
(1, 'skin'),
(2, 'syrup'),
(3, 'antibatic'),
(4, 'Tablet'),
(5, 'x-ray');

-- --------------------------------------------------------

--
-- Table structure for table `our_team`
--

CREATE TABLE `our_team` (
  `id` int(11) NOT NULL,
  `dr_name` varchar(50) NOT NULL,
  `qulafication` varchar(100) NOT NULL,
  `dr_massage` text NOT NULL,
  `profile_picture` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `prescription_upload`
--

CREATE TABLE `prescription_upload` (
  `id` int(11) NOT NULL,
  `name` varchar(35) NOT NULL,
  `mob_no` varchar(25) NOT NULL,
  `email` varchar(50) NOT NULL,
  `file` varchar(100) NOT NULL,
  `query` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `prescription_upload`
--

INSERT INTO `prescription_upload` (`id`, `name`, `mob_no`, `email`, `file`, `query`) VALUES
(27, 'emu', '12345678', 'emon22@mail.com', '2.jpg', 'ffdh'),
(35, 'emu', '01811287256', 'emonraj99999@gmail.com', '5.jpg', 'hi i am herre'),
(36, 'Shifa Akter', '01716664794', 'mahapatraprottasha@gmail.com', '43952476_1945412252171724_2983261537654800384_n.jpg', 'i want');

-- --------------------------------------------------------

--
-- Table structure for table `reg_user`
--

CREATE TABLE `reg_user` (
  `id` int(11) NOT NULL,
  `user_name` varchar(35) NOT NULL,
  `mob_no` varchar(35) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(65) NOT NULL,
  `user_type` varchar(35) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `reg_user`
--

INSERT INTO `reg_user` (`id`, `user_name`, `mob_no`, `email`, `password`, `user_type`) VALUES
(32, 'demo', '01811287256', 'mike@gmail.com', 'mmmm', 'dr'),
(38, 'pharmest  ', '01811287256', 'raj@gmail.com', '12345', 'pharmaest'),
(39, 'emonraj', '01811287256', 'hasib22@gmail.com', '12345', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_order`
--

CREATE TABLE `tbl_order` (
  `id` int(11) NOT NULL,
  `customer_id` varchar(35) NOT NULL,
  `product_id` varchar(35) NOT NULL,
  `product_name` varchar(80) NOT NULL,
  `quentity` varchar(35) NOT NULL,
  `price` varchar(35) NOT NULL,
  `pro_img` varchar(80) NOT NULL,
  `session_id` varchar(255) NOT NULL,
  `date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `status` int(35) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_order`
--

INSERT INTO `tbl_order` (`id`, `customer_id`, `product_id`, `product_name`, `quentity`, `price`, `pro_img`, `session_id`, `date`, `status`) VALUES
(99, '1', '5', 'Napa', '10', '10', 'nedicine.jpg', '2aeotvkeugn2sgijnhf4tlo427', '2019-10-01 14:48:30', 2),
(100, '1', '6', 'ACE +', '10', '20', 'nedicine.jpg', '2aeotvkeugn2sgijnhf4tlo427', '2019-10-09 14:48:30', 2),
(101, '1', '13', 'dexpoten', '1', '20', '', '2aeotvkeugn2sgijnhf4tlo427', '2019-10-16 14:22:32', 0),
(102, '1', '13', 'dexpoten', '1', '20', '', '2aeotvkeugn2sgijnhf4tlo427', '2019-10-29 21:20:41', 0),
(104, '1', '10', 'yer', '1', '10', 'nedicine.jpg', '2aeotvkeugn2sgijnhf4tlo427', '2019-10-29 21:20:41', 0),
(105, '1', '11', 'yer', '1', '25000', 'nedicine.jpg', '2aeotvkeugn2sgijnhf4tlo427', '2019-10-30 23:04:27', 0),
(106, '1', '6', 'ACE +', '1', '20', 'nedicine.jpg', '2aeotvkeugn2sgijnhf4tlo427', '2019-10-30 23:04:27', 0),
(107, '1', '9', 'Napa', '1', '10', 'nedicine.jpg', '2aeotvkeugn2sgijnhf4tlo427', '2019-10-30 23:04:27', 0),
(108, '1', '6', 'ACE +', '1', '20', 'nedicine.jpg', '2aeotvkeugn2sgijnhf4tlo427', '2019-10-30 23:06:06', 0),
(109, '1', '6', 'ACE +', '100', '20', 'nedicine.jpg', '2aeotvkeugn2sgijnhf4tlo427', '2019-10-31 22:02:38', 0),
(110, '1', '14', 'anxitol', '100', '150', 'download (1).jpg', '2aeotvkeugn2sgijnhf4tlo427', '2019-10-31 22:08:23', 0),
(111, '2', '6', 'ACE +', '1', '20', 'nedicine.jpg', '2aeotvkeugn2sgijnhf4tlo427', '2019-11-01 13:46:53', 0),
(112, '1', '7', '', '1', '0', '', 'cg4juhejda2ljhgl6opivisehq', '2019-11-25 23:32:10', 0),
(113, '1', '10', '', '1', '0', '', 'cg4juhejda2ljhgl6opivisehq', '2019-11-25 23:32:10', 0),
(114, '1', '6', 'ACE +', '1', '20', 'nedicine.jpg', 'cg4juhejda2ljhgl6opivisehq', '2019-11-25 23:32:52', 0),
(116, '1', '6', 'ACE +', '1', '20', 'nedicine.jpg', 'cg4juhejda2ljhgl6opivisehq', '2019-11-26 01:18:27', 0);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_product`
--

CREATE TABLE `tbl_product` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `price` double(10,2) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_product`
--

INSERT INTO `tbl_product` (`id`, `name`, `image`, `price`) VALUES
(1, 'Samsung J2 Pro', '1.jpg', 100.00),
(2, 'HP Notebook', '2.jpg', 299.00),
(3, 'Panasonic T44 Lite', '3.jpg', 125.00);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin_user`
--
ALTER TABLE `admin_user`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `all_medicine`
--
ALTER TABLE `all_medicine`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ambulance_order`
--
ALTER TABLE `ambulance_order`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ambulance_service`
--
ALTER TABLE `ambulance_service`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`cart_id`);

--
-- Indexes for table `contact_us`
--
ALTER TABLE `contact_us`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `create_prescription`
--
ALTER TABLE `create_prescription`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `customer_order`
--
ALTER TABLE `customer_order`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `invoice`
--
ALTER TABLE `invoice`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `medicine_buy`
--
ALTER TABLE `medicine_buy`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `medicine_list`
--
ALTER TABLE `medicine_list`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `our_team`
--
ALTER TABLE `our_team`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `prescription_upload`
--
ALTER TABLE `prescription_upload`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `reg_user`
--
ALTER TABLE `reg_user`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_order`
--
ALTER TABLE `tbl_order`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_product`
--
ALTER TABLE `tbl_product`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin_user`
--
ALTER TABLE `admin_user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `all_medicine`
--
ALTER TABLE `all_medicine`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `ambulance_order`
--
ALTER TABLE `ambulance_order`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;

--
-- AUTO_INCREMENT for table `ambulance_service`
--
ALTER TABLE `ambulance_service`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `cart`
--
ALTER TABLE `cart`
  MODIFY `cart_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `contact_us`
--
ALTER TABLE `contact_us`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `create_prescription`
--
ALTER TABLE `create_prescription`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `customer`
--
ALTER TABLE `customer`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `customer_order`
--
ALTER TABLE `customer_order`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `invoice`
--
ALTER TABLE `invoice`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `medicine_buy`
--
ALTER TABLE `medicine_buy`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `medicine_list`
--
ALTER TABLE `medicine_list`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `our_team`
--
ALTER TABLE `our_team`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `prescription_upload`
--
ALTER TABLE `prescription_upload`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;

--
-- AUTO_INCREMENT for table `reg_user`
--
ALTER TABLE `reg_user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;

--
-- AUTO_INCREMENT for table `tbl_order`
--
ALTER TABLE `tbl_order`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=117;

--
-- AUTO_INCREMENT for table `tbl_product`
--
ALTER TABLE `tbl_product`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
