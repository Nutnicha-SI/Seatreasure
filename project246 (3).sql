-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 08, 2024 at 09:22 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.0.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `project246`
--

-- --------------------------------------------------------

--
-- Table structure for table `employee`
--

CREATE TABLE `employee` (
  `Employee_id` int(6) UNSIGNED ZEROFILL NOT NULL,
  `firstname` varchar(255) DEFAULT NULL,
  `lastname` varchar(255) DEFAULT NULL,
  `position` varchar(255) DEFAULT NULL,
  `level` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `employee`
--

INSERT INTO `employee` (`Employee_id`, `firstname`, `lastname`, `position`, `level`) VALUES
(000013, 'Apple', 'Juice', 'Manager', 2),
(000014, 'Coconut', 'Juice', 'HR', 2),
(000015, 'Banana', 'Juice', 'Seller', 2),
(000016, 'Grape', 'Juice', 'Finance', 2),
(000017, 'Case', 'Phone', 'HR', 2);

-- --------------------------------------------------------

--
-- Table structure for table `invoice`
--

CREATE TABLE `invoice` (
  `invoiceId` int(10) UNSIGNED ZEROFILL NOT NULL COMMENT 'เลขใบสั่งซื้อ',
  `invoice_date` date NOT NULL DEFAULT current_timestamp() COMMENT 'วันที่สั่งซื้อ',
  `due_date` date DEFAULT NULL,
  `PO_date` date NOT NULL DEFAULT current_timestamp() COMMENT 'วันที่สั่งซื้อ',
  `PO_reference` int(10) UNSIGNED ZEROFILL NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `member`
--

CREATE TABLE `member` (
  `id` int(10) UNSIGNED ZEROFILL NOT NULL,
  `firstname` varchar(255) NOT NULL,
  `lastname` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `member`
--

INSERT INTO `member` (`id`, `firstname`, `lastname`, `email`) VALUES
(0000001111, 'User', 'num1', 'Usernum1@gmail.com'),
(0000002222, 'User', 'num2', 'Usernum2@gmail.com'),
(0000003333, 'User', 'num3', 'Usernum3@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `order_detail`
--

CREATE TABLE `order_detail` (
  `id` int(11) NOT NULL COMMENT 'ลำดับที่',
  `orderID` int(10) UNSIGNED ZEROFILL NOT NULL COMMENT 'เลขใบสั่งซื้อ',
  `pro_id` int(6) UNSIGNED ZEROFILL NOT NULL COMMENT 'รหัสสินค้า',
  `orderPrice` float NOT NULL COMMENT 'ราคาสินค้า',
  `orderQty` int(11) NOT NULL COMMENT 'จำนวนที่สั่งซื้อ',
  `Total` float NOT NULL COMMENT 'ราคารวม'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `order_detail`
--

INSERT INTO `order_detail` (`id`, `orderID`, `pro_id`, `orderPrice`, `orderQty`, `Total`) VALUES
(97, 0000000021, 000002, 590, 2, 1180),
(98, 0000000021, 000006, 3380, 1, 3380),
(99, 0000000021, 000004, 2150, 1, 2150),
(100, 0000000021, 000001, 2890, 1, 2890);

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `pro_id` int(2) UNSIGNED ZEROFILL NOT NULL,
  `pro_name` varchar(30) NOT NULL,
  `detail` text NOT NULL,
  `type_id` int(3) UNSIGNED ZEROFILL NOT NULL,
  `price` smallint(5) NOT NULL,
  `amount` smallint(3) NOT NULL,
  `image` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`pro_id`, `pro_name`, `detail`, `type_id`, `price`, `amount`, `image`) VALUES
(01, 'Lobster', 'ล็อบสเตอร์ ราชาแห่งกุ้ง สุดยอดความสดใหม่ มีน้ำหนักต่อตัวประมาณ 1.5-2 kg', 002, 2890, 16, 'lobster.png'),
(02, 'Norwegian Salmon', 'ปลาแซลมอนนอร์เวย์ เป็นแซลมอนที่สดใหม่ ขายเป็นชิ้น ชิ้นละประมาณ0.28-0.34ต่อ kg.', 001, 590, 50, 'salmon.png'),
(03, 'Japanese Scallops', 'หอยเซลล์ญี่ปุ่น หรือเรียกเป็นภาษาญี่ปุ่นว่า Hotate (โฮตาเตะ)  มีน้ำหนัก8 ชิ้น ต่อkg', 001, 1119, 86, 'scallop.png'),
(04, 'Golden King Crab', 'ปูอลาสก้าสีทอง สุดยอดความอร่อย  มีน้ำหนักต่อตัวประมาณ 1.5-2 kg.', 003, 2150, 297, 'kingcrab.png'),
(05, 'Seabass Fish', 'ปลากระพงขาวทอง สุดยอดปลาเนื้อขาว หวานมัน   มีน้ำหนักต่อตัวประมาณ 0.7-1 kg.', 003, 210, 24, 'fish.png'),
(06, 'South west rock lobster', 'กุ้งมังกรแดง ออสเตรเลีย เป็นกุ้งมังกรชนิดหนึ่งซึ่งอยู่นอกชายฝั่งตะวันตกของออสเตรเลีย ', 002, 3380, -3, 'rocklobster.png');

-- --------------------------------------------------------

--
-- Table structure for table `product_detail`
--

CREATE TABLE `product_detail` (
  `product_detailID` int(6) UNSIGNED ZEROFILL NOT NULL,
  `pro_id` int(6) NOT NULL,
  `pro_name` varchar(255) NOT NULL,
  `cost_price` int(10) NOT NULL,
  `selling_price` int(10) NOT NULL,
  `Size` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `product_detail`
--

INSERT INTO `product_detail` (`product_detailID`, `pro_id`, `pro_name`, `cost_price`, `selling_price`, `Size`) VALUES
(000001, 1, 'Lobster', 2200, 2890, '1.5-2.0 kg / ตัว'),
(000002, 2, 'Norwegian Salmon', 450, 590, '0.28-0.34 kg./ ชิ้น'),
(000003, 3, 'Japanese Scallops', 850, 1119, '8 ตัว/ Kg'),
(000004, 4, 'Golden King Crab', 1650, 2150, '1.5-2.0 kg/ตัว'),
(000005, 5, 'Seabass Fish', 155, 210, '0.7-1 kg/ตัว'),
(000006, 6, 'South west rock lobster', 2600, 3380, '1.0-1.8 kg/ตัว');

-- --------------------------------------------------------

--
-- Table structure for table `systemuser`
--

CREATE TABLE `systemuser` (
  `user_id` int(10) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `level` int(10) NOT NULL,
  `id` int(10) UNSIGNED ZEROFILL NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `systemuser`
--

INSERT INTO `systemuser` (`user_id`, `username`, `password`, `level`, `id`) VALUES
(50, 'Usernum1', '1111', 1, 0000001111),
(51, 'Usernum2', '2222', 2, 0000002222),
(52, 'Usernum3', '3333', 3, 0000003333),
(57, 'Grape', '4444', 2, 0000000000),
(58, 'Banana', '5555', 2, 0000000000);

-- --------------------------------------------------------

--
-- Table structure for table `tb_order`
--

CREATE TABLE `tb_order` (
  `orderID` int(10) UNSIGNED ZEROFILL NOT NULL COMMENT 'เลขที่ใบสั่งซื้อ',
  `cus_name` varchar(60) NOT NULL COMMENT 'ชื่อ-นามสกุล',
  `address` text NOT NULL COMMENT 'ที่อยู่',
  `telephone` int(10) NOT NULL COMMENT 'เบอร์โทร',
  `total_price` float NOT NULL COMMENT 'ราคารวมสุทธิ',
  `reg_date` date NOT NULL DEFAULT current_timestamp() COMMENT 'วันที่สั่งซื้อ'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `tb_order`
--

INSERT INTO `tb_order` (`orderID`, `cus_name`, `address`, `telephone`, `total_price`, `reg_date`) VALUES
(0000000021, 'Usernum 2', '222 Chiangmai University 50200', 945958418, 6374.5, '2024-03-09');

-- --------------------------------------------------------

--
-- Table structure for table `type`
--

CREATE TABLE `type` (
  `type_id` int(3) UNSIGNED ZEROFILL NOT NULL COMMENT 'รหัสประเภทสินค้า',
  `type_name` varchar(30) NOT NULL COMMENT 'ชื่อประเภทสินค้า'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `type`
--

INSERT INTO `type` (`type_id`, `type_name`) VALUES
(001, 'Fish'),
(002, 'Crap'),
(003, 'shrimp');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `employee`
--
ALTER TABLE `employee`
  ADD PRIMARY KEY (`Employee_id`);

--
-- Indexes for table `invoice`
--
ALTER TABLE `invoice`
  ADD PRIMARY KEY (`PO_reference`);

--
-- Indexes for table `member`
--
ALTER TABLE `member`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `order_detail`
--
ALTER TABLE `order_detail`
  ADD PRIMARY KEY (`id`),
  ADD KEY `idx_orderID` (`orderID`),
  ADD KEY `idx_pro_id` (`pro_id`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`pro_id`);

--
-- Indexes for table `product_detail`
--
ALTER TABLE `product_detail`
  ADD PRIMARY KEY (`product_detailID`);

--
-- Indexes for table `systemuser`
--
ALTER TABLE `systemuser`
  ADD PRIMARY KEY (`user_id`);

--
-- Indexes for table `tb_order`
--
ALTER TABLE `tb_order`
  ADD PRIMARY KEY (`orderID`);

--
-- Indexes for table `type`
--
ALTER TABLE `type`
  ADD PRIMARY KEY (`type_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `employee`
--
ALTER TABLE `employee`
  MODIFY `Employee_id` int(6) UNSIGNED ZEROFILL NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `invoice`
--
ALTER TABLE `invoice`
  MODIFY `PO_reference` int(10) UNSIGNED ZEROFILL NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `order_detail`
--
ALTER TABLE `order_detail`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT COMMENT 'ลำดับที่', AUTO_INCREMENT=101;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `pro_id` int(2) UNSIGNED ZEROFILL NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `product_detail`
--
ALTER TABLE `product_detail`
  MODIFY `product_detailID` int(6) UNSIGNED ZEROFILL NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `systemuser`
--
ALTER TABLE `systemuser`
  MODIFY `user_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=60;

--
-- AUTO_INCREMENT for table `tb_order`
--
ALTER TABLE `tb_order`
  MODIFY `orderID` int(10) UNSIGNED ZEROFILL NOT NULL AUTO_INCREMENT COMMENT 'เลขที่ใบสั่งซื้อ', AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `type`
--
ALTER TABLE `type`
  MODIFY `type_id` int(3) UNSIGNED ZEROFILL NOT NULL AUTO_INCREMENT COMMENT 'รหัสประเภทสินค้า', AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
