-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 06, 2020 at 11:08 AM
-- Server version: 10.4.13-MariaDB
-- PHP Version: 7.4.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_gri_red_sys`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin_data`
--

CREATE TABLE `admin_data` (
  `fname` char(20) NOT NULL,
  `lname` char(20) NOT NULL,
  `email` varchar(30) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin_data`
--

INSERT INTO `admin_data` (`fname`, `lname`, `email`, `password`) VALUES
('Admin', 'Test', 'admin@test.com', '21232f297a57a5a743894a0e4a801fc3'),
('Ankita', 'Raval', 'ankitaraval121@gmail.com', '912ec803b2ce49e4a541068d495ab570'),
('harshil', 'panchal', 'harshilpanchal2003.hp@gmail.co', 'afe183946ab2c877ad18964a44a0ed8f'),
('Jigar', 'Panchal', 'panchaljignesh494@gmail.com', '9e72aad312248e103c0cf34788866a10'),
('pratik', 'raval', 'pratikraval1203@gmail.com', 'a17cd88dcb23dbd1841b1077b06ade4b'),
('purvik', 'panchal', 'purvikpanchal6062@gmail.com', 'b3f4b82e10e4c566a6c08e58623df4f5'),
('jigar', 'panchal', 'purvikpanchal60661@gmail.com', '1e6ddcd085fa2d242fb283b3dcf2081e'),
('rahul', 'rahul', 'rahul@rahul.com', '439ed537979d8e831561964dbbbd7413');

-- --------------------------------------------------------

--
-- Table structure for table `complaint`
--

CREATE TABLE `complaint` (
  `sr` int(11) NOT NULL,
  `name` char(100) NOT NULL,
  `mobile_number` char(10) NOT NULL,
  `address` mediumtext NOT NULL,
  `Area` char(50) NOT NULL,
  `complaint_desc` mediumtext NOT NULL,
  `date` date NOT NULL,
  `is_accepted` tinyint(1) NOT NULL DEFAULT 0,
  `is_rejected` tinyint(1) NOT NULL DEFAULT 0,
  `is_solved` tinyint(1) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `complaint`
--

INSERT INTO `complaint` (`sr`, `name`, `mobile_number`, `address`, `Area`, `complaint_desc`, `date`, `is_accepted`, `is_rejected`, `is_solved`) VALUES
(1, 'Pratik Raval', '9265937437', '406 B, Sec12, Gandhinagar', 'Sector-12', 'Water Pipeline Leak in B section near SKPS', '2019-04-07', 0, 0, 1),
(2, 'Jignesh Panchal', '8488865987', 'Room No-1, SKPS Hostel,\nNaer VSS, Sec5, Gandhinagar', 'Sector-5', 'Roadside Dogs Barking At night desturbing our sleep', '2019-04-07', 0, 0, 1),
(3, 'Patrick Raval', '9104175789', 'House No1 ,Abc Society, near D-mart,Sec26,Gandhinagar', 'Sector-26', 'Dustbin container not replaced from a week', '2019-04-07', 0, 0, 1),
(4, 'John Doe', '8488865987', 'adress', 'Sector-17', 'testing purpose only', '2019-04-10', 0, 1, 0),
(5, 'àªàª•', '9265937437', 'àª¤àª®àª¾àª°à«€ àª«àª°àª¿àª¯àª¾àª¦ àª…àª¹à«€àª‚ ', 'àª¸à«‡àª•à«àªŸàª°-3', 'àª¤àª®àª¾àª°à«€ àª«àª°àª¿àª¯àª¾àª¦ àª…àª¹à«€àª‚ ', '2019-04-14', 0, 0, 1),
(6, 'Test', '23456789', 'xc', 'No Sector', 'c vb', '2019-04-17', 0, 1, 0),
(7, 'szdbxfvcn', '222222', 'adsfzdvxbfcvn ', 'Sector-3', 'ASDVC ', '2019-04-17', 0, 1, 0),
(8, 'asdvx', '222222', 'azvxc ', 'Sector-1', 'ccvcv', '2019-04-17', 0, 1, 0),
(9, 'sdf', '222222', 'sfb', 'Sector-10', 'dfb', '2019-04-17', 0, 1, 0),
(10, 'sdvc', '9265937437', 'df vc', 'Sector-2', 'cd ', '2019-04-17', 0, 0, 1),
(11, 'àªàª•', 'àªàª•', 'àªàª• ', 'àª¸à«‡àª•àªŸàª° àª¨àª¥à«€', 'àªàª• ', '2019-04-17', 0, 0, 1),
(12, 'àªàª•', 'àªàª•', 'àªàª•', 'àª¸à«‡àª•àªŸàª° àª¨àª¥à«€', 'àªàª•', '2019-04-17', 0, 1, 0),
(13, 'sfdg', '222222', 'SZvdcx', 'àª¸à«‡àª•àªŸàª° àª¨àª¥à«€', 'XCZXv', '2019-04-17', 0, 1, 0),
(14, 'àªàª•', 'Test', 'xaszdvxc', 'àª¸à«‡àª•àªŸàª° àª¨àª¥à«€', 'ACXZ', '2019-04-17', 0, 1, 0),
(15, 'àªàª•', 'àªàª•', 'kda', 'àª¸à«‡àª•à«àªŸàª°-9', 'wadlsko', '2019-04-17', 0, 0, 1),
(16, 'àªàª•', '9265937437', 'àª¤àª®àª¾àª°à«€ àª«àª°àª¿àª¯àª¾àª¦ àª…àª¹à«€àª‚ àª¨à«‹àª‚àª§àª¾àªµà«‹', 'àª¸à«‡àª•àªŸàª° àª¨àª¥à«€', 'àª¤àª®àª¾àª°à«€ àª«àª°àª¿àª¯àª¾àª¦ àª…àª¹à«€àª‚ àª¨à«‹àª‚àª§àª¾àªµà«‹', '2019-04-17', 0, 0, 1),
(17, 'kz', '9265937437', 'll', 'àª¸à«‡àª•àªŸàª° àª¨àª¥à«€', 'l', '2019-04-18', 0, 0, 1),
(18, '1111', '9265937437', 'sx', 'àª¸à«‡àª•àªŸàª° àª¨àª¥à«€', 'sv', '2019-04-18', 0, 1, 0),
(19, '1111', '9265937437', 'cks', 'àª¸à«‡àª•àªŸàª° àª¨àª¥à«€', 'klk', '2019-04-18', 0, 1, 0),
(20, 'dascs', '9265937437', 'aas,cxz;l', 'àª¸à«‡àª•àªŸàª° àª¨àª¥à«€', 'sadzvsko,p', '2019-04-18', 0, 1, 0),
(21, 'Pratik Raval', '9265937437', 'scaxc ,', 'àª¸à«‡àª•à«àªŸàª°-10', 'as[,sdvl', '2019-04-18', 0, 0, 1),
(22, 'rfg', '9265937437', 'scaxc ,', 'àª¸à«‡àª•à«àªŸàª°-10', 'as[,sdvl', '2019-04-18', 0, 0, 1),
(23, 'Pratik Raval', '9265937437', 'dsackx,', 'Sector-13', 'ascz', '2019-04-18', 0, 1, 0),
(24, 'Pratik Raval', '9265937437', 'sfsegrdh', 'No Sector', 'zcsdxcbv', '2019-04-18', 0, 1, 0),
(25, 'Pratik Raval', '9265937437', 'sfsegrdh', 'No Sector', 'zcsdxcbv', '2019-04-18', 0, 1, 0),
(26, 'Pratik Raval', '9265937437', 'sfdfhgh', 'No Sector', 'Cvbn ', '2019-04-18', 0, 1, 0),
(27, 'àª«àª°àª¿àª¯àª¾àª¦', '9265937437', 'àª«àª°àª¿àª¯àª¾àª¦', 'àª¸à«‡àª•à«àªŸàª°-16', 'àª«àª°àª¿àª¯àª¾àª¦', '2019-04-27', 0, 1, 0),
(28, 'àª«àª°àª¿àª¯àª¾àª¦', '9265937437', 'àª«àª°àª¿àª¯àª¾àª¦', 'àª¸à«‡àª•à«àªŸàª°-16', 'àª«àª°àª¿àª¯àª¾àª¦', '2019-04-27', 0, 1, 0),
(29, 'àª«àª°àª¿àª¯àª¾àª¦', '9265937437', 'àª«àª°àª¿àª¯àª¾àª¦', 'àª¸à«‡àª•à«àªŸàª°-16', 'àª«àª°àª¿àª¯àª¾àª¦', '2019-04-27', 0, 1, 0),
(30, 'Jignesh Panchal', '8488824650', 'M 303 krish exotica', 'Sector-5', 'water', '2019-09-20', 0, 1, 0),
(31, 'Jign Panchal', '8488824650', 'M 303 krish exotica', 'Sector-12', 'water ', '2020-04-10', 0, 1, 0),
(32, 'purvik jonty', '8488824650', 'M 303 krish exotica\r\nAnjana chowk, nikol,', 'Sector-17', 'dog barking, gutter pipeline', '2020-04-10', 0, 0, 1),
(33, 'purvik jonty', '8488824650', 'M 303 krish exotica', 'Sector-18', 'water', '2020-04-10', 0, 1, 0),
(34, 'kirtibhai', '9825929833', 'M 303 krish exotica\r\nAnjana chowk, nikol,', 'Sector-6', 'water', '2020-09-01', 0, 0, 1),
(35, 'harshil', '1234567891', 'M 303 krish exotica\r\nAnjana chowk, nikol,', 'Sector-2', 'water', '2020-10-06', 0, 1, 0),
(36, 'Jignesh Panchal', '8488824650', 'M 303 krish exotica', 'Area - 03', 'water', '2020-10-06', 0, 1, 0),
(37, 'harshil', '1234567891', 'M 303 krish exotica\r\nAnjana chowk, nikol,', 'Jamalpur', 'pipeline', '2020-10-06', 0, 1, 0),
(38, 'vipul', '1234567891', 'M 303 krish exotica\r\nAnjana chowk, nikol,', 'Krishnagar', 'dog barking', '2020-10-06', 0, 1, 0),
(39, 'purvik panchal', '1234567891', 'M 303 krish exotica\r\nAnjana chowk, nikol,', 'Odhav', 'water', '2020-10-06', 0, 1, 0),
(40, 'ashok', '4534576547', 'M 303 krish exotica\r\nAnjana chowk, nikol,', 'Nikol', 'water', '2020-10-06', 0, 0, 0),
(41, 'manan', '8488824650', 'n 344 ashok society', 'Sarkhej', 'water', '2020-10-06', 0, 0, 0),
(42, 'tejas', '2345678911', 'n 364  mahesh society', 'Viratnagar', 'dog', '2020-10-06', 0, 0, 0),
(43, ' પૂર્વિક', '1234566745', 'એમ 303 ક્રિશ એક્સોટિકા\r\nઅંજના ચોક, નિકોલ,', '', 'પાણીની સમસ્યા', '2020-10-06', 0, 0, 0),
(44, ' પૂર્વિક', '1234566745', 'એમ 303 ક્રિશ એક્સોટિકા\r\nઅંજના ચોક, નિકોલ,', '', 'પાણીની સમસ્યા', '2020-10-06', 0, 0, 0),
(45, 'Jignesh Panchal', '8488824650', 'M 303 krish exotica', 'Dehgam', 'asdafsfs', '2020-10-06', 0, 0, 0),
(46, 'Jignesh Panchal', '8488824650', 'M 303 krish exotica', 'જમાલપુર', 'afeseafswde', '2020-10-06', 0, 0, 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin_data`
--
ALTER TABLE `admin_data`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `complaint`
--
ALTER TABLE `complaint`
  ADD PRIMARY KEY (`sr`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `complaint`
--
ALTER TABLE `complaint`
  MODIFY `sr` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=47;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
