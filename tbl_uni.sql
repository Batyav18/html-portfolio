-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 07, 2024 at 12:40 PM
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
-- Database: `db_unip`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_uni`
--

CREATE TABLE `tbl_uni` (
  `ID_uni` int(11) NOT NULL,
  `uni_name` text NOT NULL,
  `uni_location` text NOT NULL,
  `uni_contact` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_uni`
--

INSERT INTO `tbl_uni` (`ID_uni`, `uni_name`, `uni_location`, `uni_contact`) VALUES
(1, 'Aberdeen', 'n/a', 'n/a'),
(2, 'Abertay', 'n/a', 'n/a'),
(3, 'Aberystwyth', 'n/a', 'n/a'),
(4, 'Anglia Ruskin', 'n/a', 'n/a'),
(5, 'Aston', 'n/a', 'n/a'),
(6, 'Bangor', 'n/a', 'n/a'),
(7, 'Bath', 'n/a', 'n/a'),
(8, 'Bath Spa', 'n/a', 'n/a'),
(9, 'Bedfordshire', 'n/a', 'n/a'),
(10, 'Birkbeck', 'n/a', 'n/a'),
(11, 'Birmingham', 'n/a', 'n/a'),
(12, 'Birmingham City', 'n/a', 'n/a'),
(13, 'Bolton', 'n/a', 'n/a'),
(14, 'Bournemouth', 'n/a', 'n/a'),
(15, 'Bradford', 'n/a', 'n/a'),
(16, 'Brighton', 'n/a', 'n/a'),
(17, 'Bristol', 'n/a', 'n/a'),
(18, 'Brunel', 'n/a', 'n/a'),
(19, 'Buckingham', 'n/a', 'n/a'),
(20, 'Bucks New University', 'n/a', 'n/a'),
(21, 'Cambridge', 'n/a', 'n/a'),
(22, 'Canterbury Christ Church', 'n/a', 'n/a'),
(23, 'Cardiff', 'n/a', 'n/a'),
(24, 'Cardiff Met', 'n/a', 'n/a'),
(25, 'Central Lancashire', 'n/a', 'n/a'),
(26, 'Chester', 'n/a', 'n/a'),
(27, 'Chichester', 'n/a', 'n/a'),
(28, 'City', 'n/a', 'n/a'),
(29, 'Coventry', 'n/a', 'n/a'),
(30, 'De Montfort', 'n/a', 'n/a'),
(31, 'Derby', 'n/a', 'n/a'),
(32, 'Dundee', 'n/a', 'n/a'),
(33, 'Durham', 'n/a', 'n/a'),
(34, 'East London', 'n/a', 'n/a'),
(35, 'Edge Hill', 'n/a', 'n/a'),
(36, 'Edinburgh', 'n/a', 'n/a'),
(37, 'Edinburgh Napier', 'n/a', 'n/a'),
(38, 'Essex', 'n/a', 'n/a'),
(39, 'Exeter', 'n/a', 'n/a'),
(40, 'Falmouth', 'n/a', 'n/a'),
(41, 'Glasgow', 'n/a', 'n/a'),
(42, 'Glasgow Caledonian', 'n/a', 'n/a'),
(43, 'Glasgow School of Art', 'n/a', 'n/a'),
(44, 'Gloucestershire', 'n/a', 'n/a'),
(45, 'Glyndwr', 'n/a', 'n/a'),
(46, 'Goldsmiths', 'n/a', 'n/a'),
(47, 'Greenwich', 'n/a', 'n/a'),
(48, 'Grwp Llandrillo Menai', 'n/a', 'n/a'),
(49, 'Heriot-Watt', 'n/a', 'n/a'),
(50, 'Hertfordshire', 'n/a', 'n/a'),
(51, 'Highlands & Islands', 'n/a', 'n/a'),
(52, 'Huddersfield', 'n/a', 'n/a'),
(53, 'Hull', 'n/a', 'n/a'),
(54, 'Imperial College', 'n/a', 'n/a'),
(55, 'Keele', 'n/a', 'n/a'),
(56, 'Kent', 'n/a', 'n/a'),
(57, 'Kings College London', 'n/a', 'n/a'),
(58, 'Kingston', 'n/a', 'n/a'),
(59, 'Lancaster', 'n/a', 'n/a'),
(60, 'Leeds', 'n/a', 'n/a'),
(61, 'Leeds Beckett', 'n/a', 'n/a'),
(62, 'Leeds Trinity', 'n/a', 'n/a'),
(63, 'Leicester', 'n/a', 'n/a'),
(64, 'Lincoln', 'n/a', 'n/a'),
(65, 'Liverpool', 'n/a', 'n/a'),
(66, 'Liverpool Hope', 'n/a', 'n/a'),
(67, 'Liverpool John Moores', 'n/a', 'n/a'),
(68, 'London Met', 'n/a', 'n/a'),
(69, 'London South Bank', 'n/a', 'n/a'),
(70, 'Loughborough', 'n/a', 'n/a'),
(71, 'Manchester', 'n/a', 'n/a'),
(72, 'Manchester Met', 'n/a', 'n/a'),
(73, 'Middlesex', 'n/a', 'n/a'),
(74, 'Newcastle', 'n/a', 'n/a'),
(75, 'Newman', 'n/a', 'n/a'),
(76, 'Northumbria', 'n/a', 'n/a'),
(77, 'Norwich University of the Arts', 'n/a', 'n/a'),
(78, 'Nottingham', 'n/a', 'n/a'),
(79, 'Nottingham Trent', 'n/a', 'n/a'),
(80, 'Oxford', 'n/a', 'n/a'),
(81, 'Oxford Brookes', 'n/a', 'n/a'),
(82, 'Plymouth', 'n/a', 'n/a'),
(83, 'Portsmouth', 'n/a', 'n/a'),
(84, 'Queen Mary', 'n/a', 'n/a'),
(85, 'Queens, Belfast', 'n/a', 'n/a'),
(86, 'Ravensbourne', 'n/a', 'n/a'),
(87, 'Reading', 'n/a', 'n/a'),
(88, 'Robert Gordon', 'n/a', 'n/a'),
(89, 'Roehampton', 'n/a', 'n/a'),
(90, 'Rose Bruford College', 'n/a', 'n/a'),
(91, 'Royal Holloway', 'n/a', 'n/a'),
(92, 'Salford', 'n/a', 'n/a'),
(93, 'Sheffield', 'n/a', 'n/a'),
(94, 'Sheffield Hallam', 'n/a', 'n/a'),
(95, 'Solent', 'n/a', 'n/a'),
(96, 'South Wales', 'n/a', 'n/a'),
(97, 'Southampton', 'n/a', 'n/a'),
(98, 'St Andrews', 'n/a', 'n/a'),
(99, 'Staffordshire', 'n/a', 'n/a'),
(100, 'Stirling', 'n/a', 'n/a'),
(101, 'Strathclyde', 'n/a', 'n/a'),
(102, 'Suffolk', 'n/a', 'n/a'),
(103, 'Sunderland', 'n/a', 'n/a'),
(104, 'Surrey', 'n/a', 'n/a'),
(105, 'Sussex', 'n/a', 'n/a'),
(106, 'Teesside', 'n/a', 'n/a'),
(107, 'Trinity Saint David', 'n/a', 'n/a'),
(108, 'UCL', 'n/a', 'n/a'),
(109, 'UEA', 'n/a', 'n/a'),
(110, 'Ulster', 'n/a', 'n/a'),
(111, 'University of the Arts London', 'n/a', 'n/a'),
(112, 'UWE Bristol', 'n/a', 'n/a'),
(113, 'Warwick', 'n/a', 'n/a'),
(114, 'West London', 'n/a', 'n/a'),
(115, 'West of Scotland', 'n/a', 'n/a'),
(116, 'Westminster', 'n/a', 'n/a'),
(117, 'Winchester', 'n/a', 'n/a'),
(118, 'Wolverhampton', 'n/a', 'n/a'),
(119, 'Worcester', 'n/a', 'n/a'),
(120, 'York', 'n/a', 'n/a'),
(121, 'York St John', 'n/a', 'n/a');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_uni`
--
ALTER TABLE `tbl_uni`
  ADD PRIMARY KEY (`ID_uni`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
