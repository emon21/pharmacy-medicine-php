-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 11, 2020 at 02:35 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.2.27

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
(5, 'Alishba', '12345', '>> Choose User Type <<');

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
(17, 'geflox', '1', 'E-mail IS Required *', '120', 'images (5).jpg', '0000-00-00'),
(29, 'xetril', '4', 'demoo', '222', 'Xetril.jpg', '2020-10-29'),
(30, 'dexpoten plus', '2', 'ddfghd', '120', 'dexpoten plus.jpg', '2020-10-29');

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
  `status` int(15) NOT NULL DEFAULT 0,
  `date` varchar(35) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ambulance_order`
--

INSERT INTO `ambulance_order` (`id`, `hospital_name`, `mobile_no`, `address`, `price`, `picture`, `user_id`, `status`, `date`) VALUES
(69, 'Arambagh  000', '20000', 'dha', '10000', '2.jpg', '1', 1, '14-Mar-2020'),
(77, 'awgsd', '6374', 'bhfdh', '2338', 'logo2.png', '39', 2, '29-Oct-2020');

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
(12, 'popular', '49/2 Siddeshwari Circcular Road, Ramna', '01716664794', '2000', 'Ambulance.jpg'),
(13, 'IBN Cina', 'dhaka', '01716664795', '2500', 'Ambulance.jpg'),
(14, 'Padda Hospital', '49/2 Siddeshwari Circcular Road, Ramna', '01716660794', '3000', 'Ambulance.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `bkash`
--

CREATE TABLE `bkash` (
  `id_bkash` int(11) NOT NULL,
  `bikash_no` varchar(35) NOT NULL,
  `transition_no` varchar(200) NOT NULL,
  `Total_price` varchar(35) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `bkash`
--

INSERT INTO `bkash` (`id_bkash`, `bikash_no`, `transition_no`, `Total_price`) VALUES
(6, '018711287256', '123dfg5', '250'),
(7, '01811287256', 'abc123', '120'),
(8, '01715555987', 'asdf123', '233'),
(10, '01811287245', 'ddfgf567y', '250'),
(11, '01811287256', 'sdgj678', '234');

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
(11, 'Shifa Akter', 'mahapatraprottasha@gmail.com', 'Test', 'Hi i am a new user'),
(12, 'Shifa Akter', 'mahapatraprottasha@gmail.com', 'Demo', 'Project');

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
  `otp` int(25) NOT NULL,
  `user_otp` varchar(35) NOT NULL,
  `cus_email` varchar(60) NOT NULL,
  `cus_password` varchar(80) NOT NULL,
  `account_status` int(25) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`id`, `cus_name`, `cus_address`, `cus_city`, `cus_phone`, `otp`, `user_otp`, `cus_email`, `cus_password`, `account_status`) VALUES
(49, 'Shifa Akter', '49/2 Siddeshwari Circcular Road, Ramna', 'Dhaka', '01777172986', 738764, '738764', 'mahapatraprottasha@gmail.com', '12345', 1),
(50, 'raj', '49/2 Siddeshwari Circcular Road, Ramna', 'Dhaka', '01785655465', 110807, '110807', 'raj@gmail.com', '123', 0),
(51, 'protik', 'bailyroad,56', 'dhaka', '01716664794', 660727, '660727', 'protik12@gmail.com', '12345', 1),
(52, 'Mahapatra', 'shiddeshwari,98', 'dhaka', '01777172986', 720342, '', 'mahapatra09@gmail.com', '12345', 0),
(53, 'Shifa Akter', '49/2 Siddeshwari Circcular Road, Ramna', 'Dhaka', '01777172984', 421513, '', 'demo@gmail.com', '112345', 0);

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
-- Table structure for table `otp_expire`
--

CREATE TABLE `otp_expire` (
  `id` int(11) NOT NULL,
  `otp` int(25) NOT NULL,
  `otp_expire` int(25) NOT NULL DEFAULT 0,
  `create_date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `otp_expire`
--

INSERT INTO `otp_expire` (`id`, `otp`, `otp_expire`, `create_date`) VALUES
(1, 234560, 0, '0000-00-00 00:00:00'),
(2, 234560, 0, '2020-11-11 05:06:37');

-- --------------------------------------------------------

--
-- Table structure for table `reg_user`
--

CREATE TABLE `reg_user` (
  `id` int(11) NOT NULL,
  `user_name` varchar(35) NOT NULL,
  `mob_no` varchar(35) NOT NULL,
  `otp` int(35) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(65) NOT NULL,
  `user_type` varchar(35) NOT NULL,
  `bkash_txt_no` varchar(40) NOT NULL,
  `account_status` int(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `reg_user`
--

INSERT INTO `reg_user` (`id`, `user_name`, `mob_no`, `otp`, `email`, `password`, `user_type`, `bkash_txt_no`, `account_status`) VALUES
(32, 'Alishba', '01811287256', 0, 'mike@gmail.com', 'mmmm', 'dr', 'gjhghjgy123', 0),
(38, 'shivani  ', '01811287256', 0, 'raj@gmail.com', '12345', 'pharmaest', 'gjhghjgy123', 0),
(39, 'emonraj', '01811287256', 0, 'hasib22@gmail.com', '12345', 'admin', 'gjhghjgy123', 0),
(40, 'fateha', '01716664794', 0, 'mahapatraprottasha@gmail.com', '12345', 'dr', 'gjhghjgy123', 0);

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
  `total_price` varchar(35) NOT NULL,
  `pro_img` varchar(80) NOT NULL,
  `session_id` varchar(255) NOT NULL,
  `bikash_number` varchar(65) NOT NULL,
  `bikash_txt_id` varchar(150) NOT NULL,
  `date` date NOT NULL DEFAULT current_timestamp(),
  `status` int(35) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_order`
--

INSERT INTO `tbl_order` (`id`, `customer_id`, `product_id`, `product_name`, `quentity`, `price`, `total_price`, `pro_img`, `session_id`, `bikash_number`, `bikash_txt_id`, `date`, `status`) VALUES
(172, '1', '6', 'ACE +', '10', '20', '', 'nedicine.jpg', '97eb6tj0llk1emcrqu32c2n7oo', '', '', '2020-10-29', 1),
(173, '31', '6', 'ACE +', '1', '20', '', 'nedicine.jpg', '97eb6tj0llk1emcrqu32c2n7oo', '01811287256', 'abc123', '2020-11-01', 2),
(174, '38', '9', 'Napa', '1', '10', '', 'nedicine.jpg', '97eb6tj0llk1emcrqu32c2n7oo', '', '', '2020-10-29', 1),
(176, '39', '14', 'anxitol', '1', '150', '', 'download (1).jpg', '97eb6tj0llk1emcrqu32c2n7oo', '01811287256', 'abc123', '2020-10-29', 2),
(177, '40', '14', 'anxitol', '7', '150', '', 'download (1).jpg', '97eb6tj0llk1emcrqu32c2n7oo', '01811287256', 'abc123', '2020-10-29', 2),
(178, '31', '30', 'dexpoten plus', '3', '120', '', 'dexpoten plus.jpg', '97eb6tj0llk1emcrqu32c2n7oo', '01811287256', 'abc123', '2020-10-30', 2),
(179, '41', '29', 'xetril', '5', '222', '', 'Xetril.jpg', '97eb6tj0llk1emcrqu32c2n7oo', '01811287256', 'abc123', '2020-11-01', 2),
(180, '31', '9', 'Napa', '8', '10', '', 'nedicine.jpg', '97eb6tj0llk1emcrqu32c2n7oo', '01715555987', 'asdf123', '2020-11-01', 2),
(181, '42', '15', 'frenxit', '7', '300', '', 'download.jpg', '97eb6tj0llk1emcrqu32c2n7oo', '01811287256', 'abc123', '2020-11-04', 2),
(182, '44', '6', 'ACE +', '14', '20', '', 'nedicine.jpg', '97eb6tj0llk1emcrqu32c2n7oo', '01811287256', 'abc123', '2020-11-09', 2),
(183, '31', '17', 'geflox', '5', '120', '', 'images (5).jpg', '97eb6tj0llk1emcrqu32c2n7oo', '01811287256', 'abc123', '2020-11-09', 2);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_payment`
--

CREATE TABLE `tbl_payment` (
  `id` int(11) NOT NULL,
  `bikash_number` varchar(50) NOT NULL,
  `bikash_txt_id` varchar(65) NOT NULL,
  `payment_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

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
-- Indexes for table `bkash`
--
ALTER TABLE `bkash`
  ADD PRIMARY KEY (`id_bkash`);

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
-- Indexes for table `medicine_list`
--
ALTER TABLE `medicine_list`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `otp_expire`
--
ALTER TABLE `otp_expire`
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
-- Indexes for table `tbl_payment`
--
ALTER TABLE `tbl_payment`
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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT for table `ambulance_order`
--
ALTER TABLE `ambulance_order`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=78;

--
-- AUTO_INCREMENT for table `ambulance_service`
--
ALTER TABLE `ambulance_service`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `bkash`
--
ALTER TABLE `bkash`
  MODIFY `id_bkash` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `cart`
--
ALTER TABLE `cart`
  MODIFY `cart_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=79;

--
-- AUTO_INCREMENT for table `contact_us`
--
ALTER TABLE `contact_us`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `create_prescription`
--
ALTER TABLE `create_prescription`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `customer`
--
ALTER TABLE `customer`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=54;

--
-- AUTO_INCREMENT for table `medicine_list`
--
ALTER TABLE `medicine_list`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `otp_expire`
--
ALTER TABLE `otp_expire`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `reg_user`
--
ALTER TABLE `reg_user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;

--
-- AUTO_INCREMENT for table `tbl_order`
--
ALTER TABLE `tbl_order`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=184;

--
-- AUTO_INCREMENT for table `tbl_payment`
--
ALTER TABLE `tbl_payment`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
