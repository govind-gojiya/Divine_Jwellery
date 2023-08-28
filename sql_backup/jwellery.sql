-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Aug 28, 2023 at 02:52 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `jwellery`
--

-- --------------------------------------------------------

--
-- Table structure for table `divine_jwellery_payout_data`
--

CREATE TABLE `divine_jwellery_payout_data` (
  `id` int(11) NOT NULL,
  `Payout` varchar(50) DEFAULT '0',
  `contact` varchar(20) DEFAULT '0',
  `EmailId` varchar(50) DEFAULT 'dhavalkvaria@gmail.com',
  `AccountHolderName` varchar(100) DEFAULT 'NO NAME',
  `AccountNumber` varchar(20) DEFAULT '0',
  `PaymentType` varchar(10) DEFAULT 'SB',
  `LastPaymentTransactionNo` varchar(20) DEFAULT '0',
  `LastPaymentTransactionDate` varchar(20) DEFAULT '0',
  `pay_to_id_1` int(5) DEFAULT 0 COMMENT 'Immediate Parent',
  `pay_to_id_2` int(5) DEFAULT 0 COMMENT 'Root (2) or Company (-2)',
  `type_of_node` varchar(5) DEFAULT 'X_1' COMMENT 'X_1,Y_1,Z,X_2,Y_2',
  `address` varchar(100) DEFAULT 'NO ADDRESS',
  `pincode` varchar(15) DEFAULT '00000',
  `reserve1` varchar(100) DEFAULT '0',
  `reserve2` varchar(100) DEFAULT '0',
  `reserve3` varchar(100) DEFAULT '0',
  `isactive` int(1) DEFAULT 0,
  `parentId` int(11) DEFAULT 0,
  `account_ifsc` varchar(20) DEFAULT NULL,
  `account_branch_name` varchar(50) DEFAULT NULL,
  `account_upi_number` varchar(50) DEFAULT NULL,
  `passbook_link` varchar(255) DEFAULT NULL,
  `aadhar_card_number` varchar(255) DEFAULT NULL,
  `aadhar_card_name` varchar(50) DEFAULT NULL,
  `aadhar_card_link` varchar(255) DEFAULT NULL,
  `pan_card_number` varchar(20) DEFAULT NULL,
  `pan_card_link` varchar(255) DEFAULT NULL,
  `remark` varchar(255) DEFAULT NULL,
  `extra_one` varchar(255) DEFAULT NULL,
  `extra_two` varchar(255) DEFAULT NULL,
  `extra_three` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `divine_jwellery_payout_data`
--

INSERT INTO `divine_jwellery_payout_data` (`id`, `Payout`, `contact`, `EmailId`, `AccountHolderName`, `AccountNumber`, `PaymentType`, `LastPaymentTransactionNo`, `LastPaymentTransactionDate`, `pay_to_id_1`, `pay_to_id_2`, `type_of_node`, `address`, `pincode`, `reserve1`, `reserve2`, `reserve3`, `isactive`, `parentId`, `account_ifsc`, `account_branch_name`, `account_upi_number`, `passbook_link`, `aadhar_card_number`, `aadhar_card_name`, `aadhar_card_link`, `pan_card_number`, `pan_card_link`, `remark`, `extra_one`, `extra_two`, `extra_three`) VALUES
(1, '0', '9924343883', 'company@gmail.com', 'Dhaval', '0', 'SB', '12342213', '2023-08-01', 0, 0, 'X_1', 'Row Hose, Ahmedabd', '382421', NULL, NULL, NULL, 0, -2, '', '', '', '', '', '', '', '', '', '', NULL, NULL, NULL),
(2, '0', '9924343883', 'dhavalkvaria@gmail.com', 'Dhaval', '0', 'SB', '12342213', '12/10/2022', 0, 0, '0', 'Row Hose', '382421', NULL, NULL, NULL, 0, 1, '', '', '', '', '', '', '', '', '', '', NULL, NULL, NULL),
(3, '0', '9924343863', 'mvaria88@gmail.com', 'parent', '0', 'SB', '0', '0', 2, 1, 'x_1', 'NO ADDRESS', '382421', NULL, NULL, NULL, 0, 2, '', '', '', '', '', '', '', '', '', '', NULL, NULL, NULL),
(4, '0', '9924343864', 'mvaria88@gmail.com', 'parent', '0', 'SB', '0', '0', 2, 1, 'y_1', 'NO ADDRESS', '382421', NULL, NULL, NULL, 0, 2, '', '', '', '', '', '', '', '', '', '', NULL, NULL, NULL),
(5, '0', '9924343865', 'mvaria88@gmail.com', 'parent', '0', 'SB', '0', '0', 2, NULL, 'z', 'NO ADDRESS', '382421', NULL, NULL, NULL, 0, 2, '', '', '', '', '', '', '', '', '', '', NULL, NULL, NULL),
(6, '0', '9924343867', 'mvaria88@gmail.com', 'parent', '0', 'SB', '0', '0', 3, 1, 'x_1', 'NO ADDRESS', '382421', NULL, NULL, NULL, 0, 3, '', '', '', '', '', '', '', '', '', '', NULL, NULL, NULL),
(7, '0', '9924343869', 'mvaria88@gmail.com', 'parent', '0', 'SB', '0', '0', 3, 1, 'y_1', 'NO ADDRESS', '382421', NULL, NULL, NULL, 0, 3, '', '', '', '', '', '', '', '', '', '', NULL, NULL, NULL),
(8, '0', '9924343861', 'mvaria88@gmail.com', 'parent', '0', 'SB', '0', '0', 3, NULL, 'z', 'NO ADDRESS', '382421', NULL, NULL, NULL, 0, 3, '', '', '', '', '', '', '', '', '', '', NULL, NULL, NULL),
(9, '0', '9924343823', 'mvaria88@gmail.com', 'parent', '0', 'SB', '0', '0', 8, 3, 'x_2', 'NO ADDRESS', '382421', NULL, NULL, NULL, 0, 8, '', '', '', '', '', '', '', '', '', '', NULL, NULL, NULL),
(11, '0', '2', 'mvaria88@gmail.com', 'parent', '0', 'SB', '0', '0', 8, NULL, 'z', 'NO ADDRESS', '382421', NULL, NULL, NULL, 0, 8, '', '', '', '', '', '', '', '', '', '', NULL, NULL, NULL),
(13, '0', '4', 'mvaria88@gmail.com', 'parent', '0', 'SB', '0', '0', 9, 3, 'y_2', 'NO ADDRESS', '382421', NULL, NULL, NULL, 0, 9, '', '', '', '', '', '', '', '', '', '', NULL, NULL, NULL),
(14, '0', '5', 'mvaria88@gmail.com', 'parent', '0', 'SB', '0', '0', 9, NULL, 'z', 'NO ADDRESS', '382421', NULL, NULL, NULL, 0, 9, '', '', '', '', '', '', '', '', '', '', NULL, NULL, NULL),
(15, '0', '6', 'mvaria88@gmail.com', 'parent', '0', 'SB', '0', '0', 9, NULL, 'z', 'NO ADDRESS', '382421', NULL, NULL, NULL, 0, 9, '', '', '', '', '', '', '', '', '', '', NULL, NULL, NULL),
(16, '0', '7', 'mvaria88@gmail.com', 'parent', '0', 'SB', '0', '0', 11, 8, 'x_2', 'NO ADDRESS', '382421', NULL, NULL, NULL, 0, 11, '', '', '', '', '', '', '', '', '', '', NULL, NULL, NULL),
(17, '0', '8', 'mvaria88@gmail.com', 'parent', '0', 'SB', '0', '0', 11, 8, 'y_2', 'NO ADDRESS', '382421', NULL, NULL, NULL, 0, 11, '', '', '', '', '', '', '', '', '', '', NULL, NULL, NULL),
(18, '0', '9', 'mvaria88@gmail.com', 'parent', '0', 'SB', '0', '0', 11, NULL, 'z', 'NO ADDRESS', '382421', NULL, NULL, NULL, 0, 11, '', '', '', '', '', '', '', '', '', '', NULL, NULL, NULL),
(19, '0', '10', 'mvaria88@gmail.com', 'parent', '0', 'SB', '0', '0', 5, 2, 'x_2', 'NO ADDRESS', '382421', NULL, NULL, NULL, 0, 5, '', '', '', '', '', '', '', '', '', '', NULL, NULL, NULL),
(20, '0', '11', 'mvaria88@gmail.com', 'parent', '0', 'SB', '0', '0', 5, 2, 'y_2', 'NO ADDRESS', '382421', NULL, NULL, NULL, 0, 5, '', '', '', '', '', '', '', '', '', '', NULL, NULL, NULL),
(21, '0', '12', 'mvaria88@gmail.com', 'parent', '0', 'SB', '0', '0', 5, NULL, 'z', 'NO ADDRESS', '382421', NULL, NULL, NULL, 0, 5, '', '', '', '', '', '', '', '', '', '', NULL, NULL, NULL),
(22, '0', '13', 'mvaria88@gmail.com', 'parent', '0', 'SB', '0', '0', 21, 5, 'x_2', 'NO ADDRESS', '382421', NULL, NULL, NULL, 0, 21, '', '', '', '', '', '', '', '', '', '', NULL, NULL, NULL),
(23, '0', '14', 'mvaria88@gmail.com', 'parent', '0', 'SB', '0', '0', 21, 5, 'y_2', 'NO ADDRESS', '382421', NULL, NULL, NULL, 0, 21, '', '', '', '', '', '', '', '', '', '', NULL, NULL, NULL),
(24, '0', '15', 'mvaria88@gmail.com', 'parent', '0', 'SB', '0', '0', 21, NULL, 'z', 'NO ADDRESS', '382421', NULL, NULL, NULL, 0, 21, '', '', '', '', '', '', '', '', '', '', NULL, NULL, NULL),
(25, '0', '16', 'mvaria88@gmail.com', 'parent', '0', 'SB', '0', '0', 24, 21, 'x_2', 'NO ADDRESS', '382421', NULL, NULL, NULL, 0, 24, '', '', '', '', '', '', '', '', '', '', NULL, NULL, NULL),
(26, '0', '17', 'mvaria88@gmail.com', 'parent', '0', 'SB', '0', '0', 24, 21, 'y_2', 'NO ADDRESS', '382421', NULL, NULL, NULL, 0, 24, '', '', '', '', '', '', '', '', '', '', NULL, NULL, NULL),
(27, '0', '18', 'mvaria88@gmail.com', 'parent', '0', 'SB', '0', '0', 24, NULL, 'z', 'NO ADDRESS', '382421', NULL, NULL, NULL, 0, 24, '', '', '', '', '', '', '', '', '', '', NULL, NULL, NULL),
(28, '0', '19', 'mvaria88@gmail.com', 'parent', '0', 'SB', '0', '0', 25, 21, 'x_2', 'NO ADDRESS', '382421', NULL, NULL, NULL, 0, 25, '', '', '', '', '', '', '', '', '', '', NULL, NULL, NULL),
(29, '0', '20', 'mvaria88@gmail.com', 'parent', '0', 'SB', '0', '0', 25, 21, 'y_2', 'NO ADDRESS', '382421', NULL, NULL, NULL, 0, 25, '', '', '', '', '', '', '', '', '', '', NULL, NULL, NULL),
(30, '0', '21', 'mvaria88@gmail.com', 'parent', '0', 'SB', '0', '0', 25, NULL, 'z', 'NO ADDRESS', '382421', NULL, NULL, NULL, 0, 25, '', '', '', '', '', '', '', '', '', '', NULL, NULL, NULL),
(31, '0', '22', 'mvaria88@gmail.com', 'parent', '0', 'SB', '0', '0', 19, 2, 'x_2', 'NO ADDRESS', '382421', NULL, NULL, NULL, 0, 19, '', '', '', '', '', '', '', '', '', '', NULL, NULL, NULL),
(32, '0', '23', 'mvaria88@gmail.com', 'parent', '0', 'SB', '0', '0', 6, 1, 'x_1', 'NO ADDRESS', '382421', NULL, NULL, NULL, 0, 6, '', '', '', '', '', '', '', '', '', '', NULL, NULL, NULL),
(33, '0', '24', 'mvaria88@gmail.com', 'parent', '0', 'SB', '0', '0', 6, 1, 'y_1', 'NO ADDRESS', '382421', NULL, NULL, NULL, 0, 6, '', '', '', '', '', '', '', '', '', '', NULL, NULL, NULL),
(34, '0', '25', 'mvaria88@gmail.com', 'parent', '0', 'SB', '0', '0', 6, NULL, 'z', 'NO ADDRESS', '382421', NULL, NULL, NULL, 0, 6, '', '', '', '', '', '', '', '', '', '', NULL, NULL, NULL),
(35, '0', '26', 'mvaria88@gmail.com', 'parent', '0', 'SB', '0', '0', 34, 6, 'x_2', 'NO ADDRESS', '382421', NULL, NULL, NULL, 0, 34, '', '', '', '', '', '', '', '', '', '', NULL, NULL, NULL),
(36, '0', '27', 'mvaria88@gmail.com', 'parent', '0', 'SB', '0', '0', 34, 6, 'y_2', 'NO ADDRESS', '382421', NULL, NULL, NULL, 0, 34, '', '', '', '', '', '', '', '', '', '', NULL, NULL, NULL),
(37, '0', '28', 'mvaria88@gmail.com', 'parent', '0', 'SB', '0', '0', 27, 24, 'x_2', 'NO ADDRESS', '382421', NULL, NULL, NULL, 0, 27, '', '', '', '', '', '', '', '', '', '', NULL, NULL, NULL),
(38, '0', '29', 'mvaria88@gmail.com', 'parent', '0', 'SB', '0', '0', 27, 24, 'y_2', 'NO ADDRESS', '382421', NULL, NULL, NULL, 0, 27, '', '', '', '', '', '', '', '', '', '', NULL, NULL, NULL),
(39, '0', '30', 'mvaria88@gmail.com', 'parent', '0', 'SB', '0', '0', 27, NULL, 'z', 'NO ADDRESS', '382421', NULL, NULL, NULL, 0, 27, '', '', '', '', '', '', '', '', '', '', NULL, NULL, NULL),
(40, '0', '31', 'mvaria88@gmail.com', 'parent', '0', 'SB', '0', '0', 39, 27, 'x_2', 'NO ADDRESS', '382421', NULL, NULL, NULL, 0, 39, '', '', '', '', '', '', '', '', '', '', NULL, NULL, NULL),
(41, '0', '32', 'mvaria88@gmail.com', 'parent', '0', 'SB', '0', '0', 39, 27, 'y_2', 'NO ADDRESS', '382421', NULL, NULL, NULL, 0, 39, '', '', '', '', '', '', '', '', '', '', NULL, NULL, NULL),
(42, '0', '33', 'mvaria88@gmail.com', 'parent', '0', 'SB', '0', '0', 39, NULL, 'z', 'NO ADDRESS', '382421', NULL, NULL, NULL, 0, 39, '', '', '', '', '', '', '', '', '', '', NULL, NULL, NULL),
(43, '0', '9924343862', 'ambait.graphics@gmail.com', 'Dhaval Varia', '0', 'SB', '0', '0', 0, 0, '0', 'Abc', '382421', '0', '0', '0', 0, 1, '', '', '', '', '', '', '', '', '', '', NULL, NULL, NULL),
(44, '0', '9924343523', 'dhavalkvaria@gmail.com', 'Dhaval Test', '0', 'SB', '0', '0', 5, NULL, 'z', 'Halol', '382421', '0', '0', '0', 0, 5, '', '', '', '', '', '', '', '', '', '', NULL, NULL, NULL),
(45, '0', '1234568798', 'dhavalkvaria@gmail.com', 'ABC', '0', 'SB', '0', '0', 9, NULL, 'z', 'Test', '382421', '0', '0', '0', 0, 9, '', '', '', '', '', '', '', '', '', '', NULL, NULL, NULL),
(46, '0', '9924343703', 'arihanthemant04@gmail.com', 'Hemant', '0', 'SB', '0', '0', 3, NULL, 'z', 'ATPL', '382421', '0', '0', '0', 0, 3, '', '', '', '', '', '', '', '', '', '', NULL, NULL, NULL),
(48, '0', '6953233353', 'govind@gamil.com', 'Govind', '9563245265652', 'SB', '0', '2023-08-02', 11, 5, 'x_1', 'Visat', '365055', '0', '0', '0', 0, 11, 'cd323253', 'BOB', '9563245265652', 'Divine_Jwellery_Payout/addUser.php', '65325325321', 'Govind  Go', 'Divine_Jwellery_Payout/addUser.php', '6451235632', 'Divine_Jwellery_Payout/addUser.php', 'null', NULL, NULL, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `divine_jwellery_payout_data`
--
ALTER TABLE `divine_jwellery_payout_data`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `divine_jwellery_payout_data`
--
ALTER TABLE `divine_jwellery_payout_data`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=49;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
