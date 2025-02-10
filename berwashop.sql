-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 27, 2023 at 11:02 PM
-- Server version: 10.4.25-MariaDB
-- PHP Version: 7.4.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `berwashop`
--

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `ProductCode` varchar(20) NOT NULL,
  `ProductName` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`ProductCode`, `ProductName`) VALUES
('A1', ' Van'),
('C20', 'Canvers'),
('J_34', 'Jordan 23'),
('L12', 'All Stars'),
('T12', 'T-Shirt ');

-- --------------------------------------------------------

--
-- Table structure for table `productin`
--

CREATE TABLE `productin` (
  `ProductCode` varchar(20) NOT NULL,
  `Date` date NOT NULL,
  `Quantity` int(11) NOT NULL,
  `UniquePrice` int(11) NOT NULL,
  `TotalPrice` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `productin`
--

INSERT INTO `productin` (`ProductCode`, `Date`, `Quantity`, `UniquePrice`, `TotalPrice`) VALUES
('J_34', '2023-05-16', 16, 23000, 368000),
('L12', '2023-05-10', 2, 8500, 17000),
('A1', '2023-08-22', 20, 10200, 200000),
('C20', '2023-08-22', 10, 120000, 1200000),
('T12', '2023-05-31', 30, 3000, 95000);

-- --------------------------------------------------------

--
-- Table structure for table `productin_report`
--

CREATE TABLE `productin_report` (
  `ProductCode` varchar(20) NOT NULL,
  `Date` date NOT NULL,
  `Quantity` int(11) NOT NULL,
  `UniquePrice` int(11) NOT NULL,
  `TotalPrice` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `productin_report`
--

INSERT INTO `productin_report` (`ProductCode`, `Date`, `Quantity`, `UniquePrice`, `TotalPrice`) VALUES
('J_34', '2023-05-02', 20, 23000, 460000),
('L12', '2023-05-02', 7, 8500, 59500),
('A1', '2023-05-02', 12, 9800, 117600),
('C20', '2023-05-02', 10, 9500, 95000),
('C20', '2023-05-04', 20, 13000, 260000),
('T12', '2023-05-11', 20, 3500, 70000),
('C20', '2023-05-16', 43, 12000, 516000),
('T12', '2023-05-31', 20, 3000, 60000),
('A1', '2023-08-22', 10, 10200, 102000),
('C20', '2023-08-22', 9, 120000, 1080000);

-- --------------------------------------------------------

--
-- Table structure for table `productout`
--

CREATE TABLE `productout` (
  `ProductCode` varchar(20) NOT NULL,
  `Date` date NOT NULL,
  `Quantity` int(11) NOT NULL,
  `UniquePrice` int(11) NOT NULL,
  `TotalPrice` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `productout`
--

INSERT INTO `productout` (`ProductCode`, `Date`, `Quantity`, `UniquePrice`, `TotalPrice`) VALUES
('J_34', '2023-05-16', 4, 32000, 128000),
('L12', '2023-05-10', 5, 10000, 50000),
('A1', '2023-05-09', 2, 12000, 24000),
('C20', '2023-05-09', 5, 10000, 50000),
('C20', '2023-05-09', 7, 15000, 105000),
('T12', '2023-05-13', 10, 4000, 40000),
('C20', '2023-05-16', 15, 15000, 225000),
('A1', '2023-05-31', 12, 20500, 246000),
('L12', '2023-08-22', 10, 14000, 140000),
('C20', '2023-08-22', 30, 15000, 450000);

-- --------------------------------------------------------

--
-- Table structure for table `productout_report`
--

CREATE TABLE `productout_report` (
  `ProductCode` varchar(20) NOT NULL,
  `Date` date NOT NULL,
  `Quantity` int(11) NOT NULL,
  `UniquePrice` int(11) NOT NULL,
  `TotalPrice` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `productout_report`
--

INSERT INTO `productout_report` (`ProductCode`, `Date`, `Quantity`, `UniquePrice`, `TotalPrice`) VALUES
('J_34', '2023-05-16', 2, 30000, 60000),
('J_34', '2023-05-16', 2, 30000, 60000),
('J_34', '2023-05-16', 2, 32000, 64000),
('L12', '2023-05-10', 5, 10000, 50000),
('L12', '2023-05-10', 5, 10000, 50000),
('A1', '2023-05-09', 2, 12000, 24000),
('C20', '2023-05-09', 5, 10000, 50000),
('C20', '2023-05-15', 10, 15000, 150000),
('C20', '2023-05-09', 7, 15000, 105000),
('C20', '2023-05-09', 7, 15000, 105000),
('T12', '2023-05-13', 10, 4000, 40000),
('T12', '2023-05-13', 10, 4000, 40000),
('C20', '2023-05-16', 15, 15000, 225000),
('C20', '2023-05-16', 15, 15000, 225000),
('A1', '2023-05-31', 12, 20500, 246000),
('L12', '2023-08-22', 10, 14000, 140000),
('C20', '2023-08-22', 30, 15000, 450000),
('C20', '2023-08-22', 30, 15000, 450000);

-- --------------------------------------------------------

--
-- Table structure for table `shopkeeper`
--

CREATE TABLE `shopkeeper` (
  `ShopkeeperId` int(11) NOT NULL,
  `FullName` varchar(200) NOT NULL,
  `Email` varchar(200) NOT NULL,
  `UserName` varchar(200) NOT NULL,
  `Password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `shopkeeper`
--

INSERT INTO `shopkeeper` (`ShopkeeperId`, `FullName`, `Email`, `UserName`, `Password`) VALUES
(2, 'IRADUKUNDA Danny', 'iradukundadanny@gmail.com', 'Danny', '123'),
(3, 'Shimwa Bella', 'shimwa@gmail.com', 'Shimwa', '123'),
(4, 'NDAYISABA KAMARIZA Belie', 'ndayisababelie20004@gmail.com', 'Belie', '12345'),
(5, 'Umurisa Rosine', 'umurisa123@gmail.com', 'rosine', '12345'),
(6, 'Ndayisaba Bertin', 'weee@gmail.com', 'Bertin', '123'),
(7, 'NDAYISABA KAMARIZA Belie', 'ndayisababelie2004@gmail.com', 'NDAYISABA KAMARIZA Belie', '123');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`ProductCode`);

--
-- Indexes for table `productin`
--
ALTER TABLE `productin`
  ADD KEY `ProductCode` (`ProductCode`);

--
-- Indexes for table `productout`
--
ALTER TABLE `productout`
  ADD KEY `ProductCode` (`ProductCode`);

--
-- Indexes for table `shopkeeper`
--
ALTER TABLE `shopkeeper`
  ADD PRIMARY KEY (`ShopkeeperId`),
  ADD UNIQUE KEY `Email` (`Email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `shopkeeper`
--
ALTER TABLE `shopkeeper`
  MODIFY `ShopkeeperId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `productin`
--
ALTER TABLE `productin`
  ADD CONSTRAINT `productin_ibfk_1` FOREIGN KEY (`ProductCode`) REFERENCES `product` (`ProductCode`);

--
-- Constraints for table `productout`
--
ALTER TABLE `productout`
  ADD CONSTRAINT `productout_ibfk_1` FOREIGN KEY (`ProductCode`) REFERENCES `product` (`ProductCode`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
