-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 06, 2019 at 05:14 AM
-- Server version: 10.1.37-MariaDB
-- PHP Version: 7.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `lanware_invoice`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(1) NOT NULL,
  `username` varchar(200) NOT NULL,
  `password` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `username`, `password`) VALUES
(1, 'subrajit@gmail.com', 'lan@ware');

-- --------------------------------------------------------

--
-- Table structure for table `coustomer`
--

CREATE TABLE `coustomer` (
  `id` int(20) NOT NULL,
  `name` varchar(200) NOT NULL,
  `city` varchar(200) NOT NULL,
  `state` varchar(20) NOT NULL,
  `contact` varchar(20) NOT NULL,
  `address` varchar(200) NOT NULL,
  `email` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `coustomer`
--

INSERT INTO `coustomer` (`id`, `name`, `city`, `state`, `contact`, `address`, `email`) VALUES
(32, 'Biswanath Prasad Singh', 'Bhubaneswar', 'Odisha', '9658667287', 'A/E-117, 1st phase bhubaneswar', 'biswanath.prasad.singh@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `coustomer_product`
--

CREATE TABLE `coustomer_product` (
  `id` int(200) NOT NULL,
  `cus_id` varchar(200) NOT NULL,
  `cproduct_brand` varchar(200) NOT NULL,
  `cproduct_details` varchar(200) NOT NULL,
  `cproduct_sizemodel` varchar(200) NOT NULL,
  `c_pvalue` varchar(200) NOT NULL,
  `cproduct_price` varchar(200) NOT NULL,
  `ctotproduct_price` varchar(200) NOT NULL,
  `c_gst` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `coustomer_product`
--

INSERT INTO `coustomer_product` (`id`, `cus_id`, `cproduct_brand`, `cproduct_details`, `cproduct_sizemodel`, `c_pvalue`, `cproduct_price`, `ctotproduct_price`, `c_gst`) VALUES
(50, '28', 'BSNL', 'bsnl lan wire', '2 Meters', '1', '100', '100', '118'),
(51, '28', 'BSNL', 'bsnl lan wire', '2 Meters', '2', '100', '200', '236'),
(52, '28', 'BSNL', 'bsnl lan wire', '2 Meters', '1', '100', '100', '118'),
(53, '32', 'HP', 'Monitor', 'HA2036', '2', '200', '400', '472'),
(54, '32', 'Samsung', 'Phone', 'Galaxy A8 Plus', '1', '100', '100', '118');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(5) NOT NULL,
  `product_code` int(100) NOT NULL,
  `product_brand` varchar(200) NOT NULL,
  `product_type` varchar(300) NOT NULL,
  `product_sizemodel` varchar(500) NOT NULL,
  `product_price` varchar(10) NOT NULL,
  `product_details` varchar(5000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `product_code`, `product_brand`, `product_type`, `product_sizemodel`, `product_price`, `product_details`) VALUES
(5, 5820, 'Samsung', 'Mobile', 'Galaxy A8 Plus', '100', 'Phone'),
(6, 7135, 'HP', 'Monitor', 'HA2036', '200', 'Monitor');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `coustomer`
--
ALTER TABLE `coustomer`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `coustomer_product`
--
ALTER TABLE `coustomer_product`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(1) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `coustomer`
--
ALTER TABLE `coustomer`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT for table `coustomer_product`
--
ALTER TABLE `coustomer_product`
  MODIFY `id` int(200) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=55;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
