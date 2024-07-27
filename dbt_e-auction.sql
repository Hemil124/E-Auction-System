-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 27, 2024 at 11:19 AM
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
-- Database: `dbt_e-auction`
--

-- --------------------------------------------------------

--
-- Table structure for table `tblauctionitem`
--

CREATE TABLE `tblauctionitem` (
  `id` int(11) NOT NULL,
  `item_id` int(11) NOT NULL,
  `start_datetime` datetime NOT NULL,
  `end_datetime` datetime NOT NULL,
  `reserve_price` decimal(10,2) NOT NULL,
  `emd_date` date NOT NULL,
  `emd_amount` decimal(10,2) NOT NULL,
  `minimum_bidders` int(11) NOT NULL,
  `increment_value` decimal(10,2) NOT NULL,
  `auction_status` enum('PENDING','ACTIVE','CANCELED','CLOSED') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tblbankaccount`
--

CREATE TABLE `tblbankaccount` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `account_number` varchar(255) NOT NULL,
  `account_holder_name` varchar(255) NOT NULL,
  `bank_name` varchar(255) NOT NULL,
  `ifsc_code` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tblbid`
--

CREATE TABLE `tblbid` (
  `id` int(11) NOT NULL,
  `auction_item_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `bid_value` decimal(10,2) NOT NULL,
  `bid_datetime` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tblcategory`
--

CREATE TABLE `tblcategory` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tblemdrefund`
--

CREATE TABLE `tblemdrefund` (
  `id` int(11) NOT NULL,
  `auction_item_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `amount` decimal(10,2) NOT NULL,
  `datetime` datetime NOT NULL,
  `method` enum('CREDIT_CARD','DEBIT_CARD','UPI','NET_BANKING') NOT NULL,
  `status` enum('PENDING','PROCESSED') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tblfavorite`
--

CREATE TABLE `tblfavorite` (
  `Id` int(11) NOT NULL,
  `Userid` int(11) NOT NULL,
  `Itemid` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tblimg`
--

CREATE TABLE `tblimg` (
  `id` int(11) NOT NULL,
  `item_id` int(11) NOT NULL,
  `img` blob NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tblitem`
--

CREATE TABLE `tblitem` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `user_id` int(11) NOT NULL,
  `category_id` int(11) NOT NULL,
  `description` varchar(255) NOT NULL,
  `image_id` int(11) DEFAULT NULL,
  `starting_price` decimal(10,2) NOT NULL,
  `verify_status` enum('PENDING','VERIFIED','SOLD','REJECTED') NOT NULL,
  `status` enum('ACTIVE','INACTIVE') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tbltransaction`
--

CREATE TABLE `tbltransaction` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `auction_item_id` int(11) NOT NULL,
  `type` enum('EMD','EMD_REFUND','CUSTOMER_FULL_PAYMENT','VENDOR_PAYMENT') NOT NULL,
  `amount` decimal(10,2) NOT NULL,
  `datetime` datetime NOT NULL,
  `method` enum('CREDIT_CARD','DEBIT_CARD','UPI','NET_BANKING') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tblusers`
--

CREATE TABLE `tblusers` (
  `id` int(11) NOT NULL,
  `firstname` varchar(50) NOT NULL,
  `lastname` varchar(50) NOT NULL,
  `contact` varchar(15) NOT NULL,
  `email` varchar(100) NOT NULL,
  `date_of_birth` date NOT NULL,
  `address` text NOT NULL,
  `password` varchar(255) NOT NULL,
  `role` enum('BUYER','VENDOR','ADMIN') NOT NULL,
  `user_img` blob DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tblvendorpayment`
--

CREATE TABLE `tblvendorpayment` (
  `id` int(11) NOT NULL,
  `auction_item_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `amount` decimal(10,2) NOT NULL,
  `datetime` datetime NOT NULL,
  `method` enum('CREDIT_CARD','DEBIT_CARD','UPI','NET_BANKING') NOT NULL,
  `status` enum('PENDING','PROCESSED') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tblauctionitem`
--
ALTER TABLE `tblauctionitem`
  ADD PRIMARY KEY (`id`),
  ADD KEY `item_id` (`item_id`);

--
-- Indexes for table `tblbankaccount`
--
ALTER TABLE `tblbankaccount`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `account_number` (`account_number`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `tblbid`
--
ALTER TABLE `tblbid`
  ADD PRIMARY KEY (`id`),
  ADD KEY `auction_item_id` (`auction_item_id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `tblcategory`
--
ALTER TABLE `tblcategory`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tblemdrefund`
--
ALTER TABLE `tblemdrefund`
  ADD PRIMARY KEY (`id`),
  ADD KEY `auction_item_id` (`auction_item_id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `tblfavorite`
--
ALTER TABLE `tblfavorite`
  ADD PRIMARY KEY (`Id`),
  ADD KEY `Userid` (`Userid`),
  ADD KEY `Itemid` (`Itemid`);

--
-- Indexes for table `tblimg`
--
ALTER TABLE `tblimg`
  ADD PRIMARY KEY (`id`),
  ADD KEY `item_id` (`item_id`);

--
-- Indexes for table `tblitem`
--
ALTER TABLE `tblitem`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`user_id`),
  ADD KEY `category_id` (`category_id`);

--
-- Indexes for table `tbltransaction`
--
ALTER TABLE `tbltransaction`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`user_id`),
  ADD KEY `auction_item_id` (`auction_item_id`);

--
-- Indexes for table `tblusers`
--
ALTER TABLE `tblusers`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Indexes for table `tblvendorpayment`
--
ALTER TABLE `tblvendorpayment`
  ADD PRIMARY KEY (`id`),
  ADD KEY `auction_item_id` (`auction_item_id`),
  ADD KEY `user_id` (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tblauctionitem`
--
ALTER TABLE `tblauctionitem`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tblbankaccount`
--
ALTER TABLE `tblbankaccount`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tblbid`
--
ALTER TABLE `tblbid`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tblcategory`
--
ALTER TABLE `tblcategory`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tblemdrefund`
--
ALTER TABLE `tblemdrefund`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tblfavorite`
--
ALTER TABLE `tblfavorite`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tblimg`
--
ALTER TABLE `tblimg`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tblitem`
--
ALTER TABLE `tblitem`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbltransaction`
--
ALTER TABLE `tbltransaction`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tblusers`
--
ALTER TABLE `tblusers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tblvendorpayment`
--
ALTER TABLE `tblvendorpayment`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `tblauctionitem`
--
ALTER TABLE `tblauctionitem`
  ADD CONSTRAINT `tblauctionitem_ibfk_1` FOREIGN KEY (`item_id`) REFERENCES `tblitem` (`id`);

--
-- Constraints for table `tblbankaccount`
--
ALTER TABLE `tblbankaccount`
  ADD CONSTRAINT `tblbankaccount_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `tblusers` (`id`);

--
-- Constraints for table `tblbid`
--
ALTER TABLE `tblbid`
  ADD CONSTRAINT `tblbid_ibfk_1` FOREIGN KEY (`auction_item_id`) REFERENCES `tblauctionitem` (`id`),
  ADD CONSTRAINT `tblbid_ibfk_2` FOREIGN KEY (`user_id`) REFERENCES `tblusers` (`id`);

--
-- Constraints for table `tblemdrefund`
--
ALTER TABLE `tblemdrefund`
  ADD CONSTRAINT `tblemdrefund_ibfk_1` FOREIGN KEY (`auction_item_id`) REFERENCES `tblauctionitem` (`id`),
  ADD CONSTRAINT `tblemdrefund_ibfk_2` FOREIGN KEY (`user_id`) REFERENCES `tblusers` (`id`);

--
-- Constraints for table `tblfavorite`
--
ALTER TABLE `tblfavorite`
  ADD CONSTRAINT `tblfavorite_ibfk_1` FOREIGN KEY (`Userid`) REFERENCES `tblusers` (`id`),
  ADD CONSTRAINT `tblfavorite_ibfk_2` FOREIGN KEY (`Itemid`) REFERENCES `tblitem` (`id`);

--
-- Constraints for table `tblimg`
--
ALTER TABLE `tblimg`
  ADD CONSTRAINT `tblimg_ibfk_1` FOREIGN KEY (`item_id`) REFERENCES `tblitem` (`id`);

--
-- Constraints for table `tblitem`
--
ALTER TABLE `tblitem`
  ADD CONSTRAINT `tblitem_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `tblusers` (`id`),
  ADD CONSTRAINT `tblitem_ibfk_2` FOREIGN KEY (`category_id`) REFERENCES `tblcategory` (`id`);

--
-- Constraints for table `tbltransaction`
--
ALTER TABLE `tbltransaction`
  ADD CONSTRAINT `tbltransaction_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `tblusers` (`id`),
  ADD CONSTRAINT `tbltransaction_ibfk_2` FOREIGN KEY (`auction_item_id`) REFERENCES `tblauctionitem` (`id`);

--
-- Constraints for table `tblvendorpayment`
--
ALTER TABLE `tblvendorpayment`
  ADD CONSTRAINT `tblvendorpayment_ibfk_1` FOREIGN KEY (`auction_item_id`) REFERENCES `tblauctionitem` (`id`),
  ADD CONSTRAINT `tblvendorpayment_ibfk_2` FOREIGN KEY (`user_id`) REFERENCES `tblusers` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
