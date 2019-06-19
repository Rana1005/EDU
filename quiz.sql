-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 19, 2019 at 07:46 PM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.3.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `quiz`
--

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `id` int(11) NOT NULL,
  `cat_name` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`id`, `cat_name`) VALUES
(1, 'IIT JAM'),
(2, 'CSIR'),
(3, 'GATE'),
(4, 'TFIR');

-- --------------------------------------------------------

--
-- Table structure for table `question`
--

CREATE TABLE `question` (
  `id` int(11) NOT NULL,
  `question` varchar(120) NOT NULL,
  `ans1` varchar(100) NOT NULL,
  `ans2` varchar(100) NOT NULL,
  `ans3` varchar(100) NOT NULL,
  `ans4` varchar(100) NOT NULL,
  `ans` int(10) NOT NULL,
  `cat_id` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `question`
--

INSERT INTO `question` (`id`, `question`, `ans1`, `ans2`, `ans3`, `ans4`, `ans`, `cat_id`) VALUES
(1, 'what is the formula of force', 'ma', 'mg', 'mf', 'none of these', 0, 1),
(2, 'how many law newton derived', '1', '2', '3', '4', 2, 1),
(3, 'If det(A) = 0 then', 'Singular Matrix', 'Non-Singular Matrix', 'Neither Singular Matrix Nor Non Singular Matrix', 'None of These', 0, 1);

-- --------------------------------------------------------

--
-- Table structure for table `test_reg`
--

CREATE TABLE `test_reg` (
  `id` int(11) NOT NULL,
  `name` varchar(11) NOT NULL,
  `email` varchar(30) NOT NULL,
  `pass` varchar(30) NOT NULL,
  `img` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `test_reg`
--

INSERT INTO `test_reg` (`id`, `name`, `email`, `pass`, `img`) VALUES
(1, 'Rana Atul', 'atulrana@gmail.com', '456123', 'C:xampp	mpphp5FB.tmp'),
(2, 'shiwani', 'shivani@gmail.com', '123654', 'C:xampp	mpphp2724.tmp'),
(3, 'mandy', 'mandy@gmail.com', '45632158', 'idea.png'),
(4, 'Anil ', 'atulrana@gmail.com', '156162326', 'idea.png'),
(5, 'hg', 'etrrygrh@gmail.com', 'sc', 'idea.png'),
(6, 'Rana Atul', 'atulrana@gmail.com', '1234', 'leaf.png'),
(8, 'Hiten jain', 'hit@gmail.com', '456123', 'leaf.png'),
(10, 'Rana Atul', 'rana123@gmail.com', '456123', '20180620_000204.jpg'),
(11, 'rana', 'hit@gmail.com', '123456', 'WhatsApp Image 2019-06-10 at 1');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `question`
--
ALTER TABLE `question`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `test_reg`
--
ALTER TABLE `test_reg`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `question`
--
ALTER TABLE `question`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `test_reg`
--
ALTER TABLE `test_reg`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
