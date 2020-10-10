-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 10, 2020 at 04:11 PM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `test`
--

-- --------------------------------------------------------

--
-- Table structure for table `addbook`
--

CREATE TABLE `addbook` (
  `bid` varchar(50) NOT NULL,
  `bname` text NOT NULL,
  `btype` text NOT NULL,
  `bsub` text NOT NULL,
  `btitle` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `addbook`
--

INSERT INTO `addbook` (`bid`, `bname`, `btype`, `bsub`, `btitle`) VALUES
('b1', 'rtd', 'shoe', 'dfg', 'rty'),
('b1', 'rtd', 'shoe', 'dfg', 'rty');

-- --------------------------------------------------------

--
-- Table structure for table `borrow`
--

CREATE TABLE `borrow` (
  `bid` varchar(50) NOT NULL,
  `cus_id` varchar(50) NOT NULL,
  `current_date` date NOT NULL,
  `return_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `borrow`
--

INSERT INTO `borrow` (`bid`, `cus_id`, `current_date`, `return_date`) VALUES
('b1', 'c-12', '2020-04-05', '2020-06-06');

-- --------------------------------------------------------

--
-- Table structure for table `registration`
--

CREATE TABLE `registration` (
  `cus_id` varchar(50) NOT NULL,
  `name` varchar(50) NOT NULL,
  `loc` varchar(50) NOT NULL,
  `mobile` int(50) NOT NULL,
  `age` int(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `pass` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `registration`
--

INSERT INTO `registration` (`cus_id`, `name`, `loc`, `mobile`, `age`, `email`, `pass`) VALUES
('c-91', 'try', 'street1', 6754, 0, 'tryue564@gmail.com', '6754'),
('c-75', 'try', 'street1', 6754, 0, 'tryue564@gmail.com', '6754'),
('c-32', 'ryy', 'street1', 6754, 0, 'tryue564@gmail.com', '786r'),
('c-34', 'ryy', 'street1', 6754, 0, 'tryue564@gmail.com', '786r'),
('c-58', 'try', 'street1', 6754, 0, 'tryue564@gmail.com', '786');

-- --------------------------------------------------------

--
-- Table structure for table `return`
--

CREATE TABLE `return` (
  `bid` varchar(50) NOT NULL,
  `cus_id` varchar(50) NOT NULL,
  `fine_day` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
