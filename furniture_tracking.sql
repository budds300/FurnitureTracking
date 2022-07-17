-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Jul 02, 2022 at 12:50 PM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.1.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `furniture_tracking`
--

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `Name` varchar(250) NOT NULL,
  `Email` varchar(250) NOT NULL,
  `Mobile` varchar(250) NOT NULL,
  `Subject` varchar(250) NOT NULL,
  `Message` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`Name`, `Email`, `Mobile`, `Subject`, `Message`) VALUES
('CHANDAN KUMAR', 'ckj40856@gmail.com', '9487810674', 'sa', ''),
('CHANDAN KUMAR', 'ckj40856@gmail.com', '9487810674', 'sa', ''),
('BIRJU KUMAR', 'ckj40856@gmail.com', '8903079750', 'asd', 'asdasdasd'),
('CHANDAN KUMAR', 'ckj40856@gmail.com', '9487810674', 'asd', 'hfgdsfsx');

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `username` varchar(30) NOT NULL,
  `fullname` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL,
  `contact` varchar(30) NOT NULL,
  `address` varchar(50) NOT NULL,
  `password` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`username`, `fullname`, `email`, `contact`, `address`, `password`) VALUES
('birju', 'BIRJU KUMAR', 'bkm123r@gmail.com', '8903079750', 'Pondicherry University, SRK HOSTEL ROOM NUMBER-59,', 'Birju123@'),
('ckumar', 'CHANDAN KUMAR', 'ckj40856@gmail.com', '9487810674', 'Pondicherry University, SRK HOSTEL ROOM NUMBER-59,', 'Ckumar123@'),
('jeff', 'Tamminga Budds', 'bicmichum52@gmail.com', '0701048045', 'Nairobi', '123'),
('jeffe', 'Tamminga Budds', 'bicmichum52@gmail.com', '0701048045', 'Nairobi', '123'),
('nidha', 'nidha', 'nidha@gmail.com', '998696572', 'Maharashtra', 'suhail'),
('pratheek083', 'Pratheek Shiri', 'pratheek@gmail.com', '8779546521', 'Hyderabad', 'pratheek'),
('rakshithk00', 'Rakshith Kotian', 'rakshith@gmail.com', '9547123658', 'Gujarath', 'rakshith');

-- --------------------------------------------------------

--
-- Table structure for table `furniture`
--

CREATE TABLE `furniture` (
  `F_ID` int(30) NOT NULL,
  `name` varchar(30) NOT NULL,
  `price` int(30) NOT NULL,
  `description` varchar(200) NOT NULL,
  `R_ID` int(30) NOT NULL,
  `images_path` varchar(200) NOT NULL,
  `options` varchar(10) NOT NULL DEFAULT 'ENABLE'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `furniture`
--

INSERT INTO `furniture` (`F_ID`, `name`, `price`, `description`, `R_ID`, `images_path`, `options`) VALUES
(80, 'Table', 3000, 'Table', 7, 'images/photo-1538688525198-9b88f6f53126.avif', 'DISABLE'),
(105, 'jeff', 3000, 'Hard wood', 7, 'Furniture_item882.jpg', 'DISABLE'),
(106, 'Desk', 3000, 'soft wood', 7, 'Furniture_item762.jpg', 'DISABLE'),
(107, 'Bench', 30000, 'Hard wood', 7, 'Furniture_item122.jpg', 'ENABLE'),
(108, 'bench 2.0', 50, 'Hard wood', 7, 'Furniture_item983.jpg', 'ENABLE'),
(109, 'stethothscope', 20000, 'Hard wood', 7, 'Furniture_item621.jpg', 'ENABLE');

-- --------------------------------------------------------

--
-- Table structure for table `manager`
--

CREATE TABLE `manager` (
  `username` varchar(30) NOT NULL,
  `fullname` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL,
  `contact` varchar(30) NOT NULL,
  `address` varchar(50) NOT NULL,
  `password` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `manager`
--

INSERT INTO `manager` (`username`, `fullname`, `email`, `contact`, `address`, `password`) VALUES
('aditi068', 'Aditi Naik', 'aditi@gmail.com', '8654751259', 'Goa', 'aditi'),
('admin', 'james', 'bicmichum52@gmail.com', '0701048045', 'Nairobi', 'admin'),
('aminnikhil073', 'Nikhil Amin', 'aminnikhil073@gmail.com', '9632587412', 'Karnataka', 'nikhil'),
('ckumar', 'Chandan Kumar', 'ckj40856@gmail.com', '9487810674', 'Pondicherry University, SRK HOSTEL ROOM NUMBER-59,', 'Ckumar123'),
('dhiraj', 'DHIRAJ kUMAR', 'dk123@gmail.com', '8903079750', 'Pondicherry. Le cafe', 'Dhiraj'),
('roshanraj07', 'Roshan Raj', 'roshan@gmail.com', '9541258761', 'Bihar', 'roshan');

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `order_ID` int(30) NOT NULL,
  `F_ID` int(30) NOT NULL,
  `status` varchar(100) NOT NULL,
  `name` varchar(30) NOT NULL,
  `price` int(30) NOT NULL,
  `quantity` int(30) NOT NULL,
  `order_date` date NOT NULL,
  `username` varchar(30) NOT NULL,
  `R_ID` int(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`order_ID`, `F_ID`, `status`, `name`, `price`, `quantity`, `order_date`, `username`, `R_ID`) VALUES
(70, 80, '', 'Table', 3000, 1, '2022-06-22', 'jeff', 7),
(71, 105, '', 'jeff', 3000, 1, '2022-06-22', 'jeff', 7),
(72, 105, 'Pending', 'jeff', 3000, 1, '2022-06-23', 'jeff', 7),
(73, 105, 'Pending', 'jeff', 3000, 1, '2022-06-23', 'jeff', 7),
(74, 105, 'Pending', 'jeff', 3000, 1, '2022-06-23', 'jeff', 7),
(75, 105, 'Pending', 'jeff', 3000, 1, '2022-06-24', 'jeffe', 7),
(76, 106, 'Pending', 'Desk', 3000, 1, '2022-06-24', 'jeffe', 7),
(77, 106, 'Pending', 'Desk', 3000, 1, '2022-06-24', 'jeffe', 7),
(78, 106, 'Pending', 'Desk', 3000, 1, '2022-06-24', 'jeff', 7),
(79, 105, 'Pending', 'jeff', 3000, 1, '2022-06-27', 'jeff', 7),
(80, 105, 'Pending', 'jeff', 3000, 1, '2022-06-27', 'jeff', 7),
(81, 105, 'Pending', 'jeff', 3000, 1, '2022-06-27', 'jeff', 7),
(82, 108, 'Pending', 'bench 2.0', 50, 1, '2022-07-01', 'jeff', 7),
(83, 108, 'Pending', 'bench 2.0', 50, 1, '2022-07-01', 'jeff', 7);

-- --------------------------------------------------------

--
-- Table structure for table `stores`
--

CREATE TABLE `stores` (
  `R_ID` int(30) NOT NULL,
  `name` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL,
  `contact` varchar(30) NOT NULL,
  `address` varchar(50) NOT NULL,
  `M_ID` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `stores`
--

INSERT INTO `stores` (`R_ID`, `name`, `email`, `contact`, `address`, `M_ID`) VALUES
(7, 'Furniture', 'furniture@outlook', '0701048045', 'Nairobi, Ngong', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `track`
--

CREATE TABLE `track` (
  `id` int(11) NOT NULL,
  `order_Id` int(11) NOT NULL,
  `description` varchar(255) NOT NULL,
  `date` varchar(255) NOT NULL,
  `status` varchar(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `track`
--

INSERT INTO `track` (`id`, `order_Id`, `description`, `date`, `status`) VALUES
(1, 72, 'pendin', '23/06/2022 14:19:14', 'Pending'),
(2, 72, 'Testing', '23/06/2022 14:58:14', 'On Delivery'),
(3, 73, 'On route', '23/06/2022 17:16:54', 'On Delivery'),
(4, 73, 'On route', '23/06/2022 17:18:48', 'On Delivery'),
(5, 73, 'On route', '23/06/2022 17:20:55', 'On Delivery'),
(6, 73, 'Delivered', '23/06/2022 17:21:12', 'Delivered'),
(7, 75, 'On route', '24/06/2022 13:04:00', 'On Delivery'),
(8, 77, 'On route', '24/06/2022 14:37:06', 'On Delivery'),
(9, 78, 'On route', '24/06/2022 15:19:57', 'On Delivery'),
(18, 83, 'On route', '02/07/2022 11:54:48', 'Ordered');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`username`);

--
-- Indexes for table `furniture`
--
ALTER TABLE `furniture`
  ADD PRIMARY KEY (`F_ID`,`R_ID`),
  ADD KEY `R_ID` (`R_ID`);

--
-- Indexes for table `manager`
--
ALTER TABLE `manager`
  ADD PRIMARY KEY (`username`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`order_ID`),
  ADD KEY `F_ID` (`F_ID`),
  ADD KEY `username` (`username`),
  ADD KEY `R_ID` (`R_ID`);

--
-- Indexes for table `stores`
--
ALTER TABLE `stores`
  ADD PRIMARY KEY (`R_ID`),
  ADD KEY `M_ID` (`M_ID`);

--
-- Indexes for table `track`
--
ALTER TABLE `track`
  ADD PRIMARY KEY (`id`),
  ADD KEY `order_Id` (`order_Id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `furniture`
--
ALTER TABLE `furniture`
  MODIFY `F_ID` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=110;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `order_ID` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=84;

--
-- AUTO_INCREMENT for table `stores`
--
ALTER TABLE `stores`
  MODIFY `R_ID` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `track`
--
ALTER TABLE `track`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `furniture`
--
ALTER TABLE `furniture`
  ADD CONSTRAINT `furniture_ibfk_1` FOREIGN KEY (`R_ID`) REFERENCES `stores` (`R_ID`);

--
-- Constraints for table `orders`
--
ALTER TABLE `orders`
  ADD CONSTRAINT `orders_ibfk_1` FOREIGN KEY (`F_ID`) REFERENCES `furniture` (`F_ID`),
  ADD CONSTRAINT `orders_ibfk_2` FOREIGN KEY (`username`) REFERENCES `customer` (`username`),
  ADD CONSTRAINT `orders_ibfk_3` FOREIGN KEY (`R_ID`) REFERENCES `stores` (`R_ID`);

--
-- Constraints for table `stores`
--
ALTER TABLE `stores`
  ADD CONSTRAINT `stroes_ibfk_1` FOREIGN KEY (`M_ID`) REFERENCES `manager` (`username`);

--
-- Constraints for table `track`
--
ALTER TABLE `track`
  ADD CONSTRAINT `track_ibfk_1` FOREIGN KEY (`order_Id`) REFERENCES `orders` (`order_ID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
