-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 27, 2020 at 07:35 PM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `child_care`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_alert`
--

CREATE TABLE `tbl_alert` (
  `A_ID` int(255) NOT NULL,
  `ALERT_DETAIL` varchar(255) NOT NULL,
  `ALERT_DATE` date NOT NULL,
  `USER_ID` int(11) NOT NULL,
  `STATUS` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_alert`
--

INSERT INTO `tbl_alert` (`A_ID`, `ALERT_DETAIL`, `ALERT_DATE`, `USER_ID`, `STATUS`) VALUES
(4, 'Have Vitamin A Capsule PHASE 1', '2021-10-10', 6, ''),
(5, 'Have Vitamin A Capsule PHASE 2', '2022-10-10', 6, ''),
(6, 'Have Vitamin A Capsule PHASE 3', '2023-10-10', 6, ''),
(7, 'Have Vitamin A Capsule PHASE 1', '2011-12-12', 9, ''),
(8, 'Have Vitamin A Capsule PHASE 2', '2012-12-12', 9, ''),
(9, 'Have Vitamin A Capsule PHASE 3', '2013-12-12', 9, ''),
(11, 'Have Vitamin A Capsule PHASE 2', '2021-11-11', 10, ''),
(12, 'Have Vitamin A Capsule PHASE 3', '2022-11-11', 10, ''),
(13, 'Have Vitamin A Capsule PHASE 1', '0002-11-11', 13, ''),
(14, 'Have Vitamin A Capsule PHASE 2', '0003-11-11', 13, ''),
(15, 'Have Vitamin A Capsule PHASE 3', '0004-11-11', 13, '');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_blog`
--

CREATE TABLE `tbl_blog` (
  `B_ID` int(255) NOT NULL,
  `B_TITLE` varchar(255) NOT NULL,
  `DESCRIPTION` varchar(255) NOT NULL,
  `IMAGE` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_blog`
--

INSERT INTO `tbl_blog` (`B_ID`, `B_TITLE`, `DESCRIPTION`, `IMAGE`) VALUES
(1, 'Vitamin A', 'Vitamin A actually is a group of antioxidant compounds that play an important role in vision, bone growth and health of the immune system. Vitamin A also helps the surface of the eye, mucous membranes and skin be effective barriers to bacteria and viruses', ''),
(2, 'Vitamin B', 'Vitamins naturally occur in food and are needed in very small amounts for various bodily functions such as energy production and making red blood cells. There are 13 vitamins that our body needs, eight of which make up the B-group (or B-complex) vitamins.', ''),
(3, 'Vitamin C', 'Vitamin C is also referred to as ascorbic acid. It is essential for normal body functioning. Humans must obtain vitamin C trough their diet. Other mammals have the opportunity to produce their own vitamin C supply.  Functions of Vitamin C Vitamin C is req', ''),
(4, 'Vitamin D', 'A \"vitamin\" by definition is a substance regularly required by the body in small amounts but which the body cannot make and is, therefore, required to be supplied in the daily diet. Technically the molecular species classified as vitamin D3 is not really ', '');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_detail`
--

CREATE TABLE `tbl_detail` (
  `D_ID` int(255) NOT NULL,
  `VITAMIN_ID` int(255) NOT NULL,
  `ORGAN_ID` int(255) NOT NULL,
  `SYMPTOM_ID` int(255) NOT NULL,
  `DESCRIPTION` varchar(255) NOT NULL,
  `NUTRITION` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_detail`
--

INSERT INTO `tbl_detail` (`D_ID`, `VITAMIN_ID`, `ORGAN_ID`, `SYMPTOM_ID`, `DESCRIPTION`, `NUTRITION`) VALUES
(1, 1, 2, 5, 'asa', 'asa'),
(2, 4, 1, 5, 'Vitamin-D', 'Vitamin-D');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_organ`
--

CREATE TABLE `tbl_organ` (
  `O_ID` int(255) NOT NULL,
  `ORGAN_NAME` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_organ`
--

INSERT INTO `tbl_organ` (`O_ID`, `ORGAN_NAME`) VALUES
(1, 'Eye'),
(2, 'Ear'),
(5, 'Nose'),
(6, 'Neck'),
(7, 'Head'),
(8, 'Liver'),
(9, 'Kidney'),
(10, 'Hand'),
(11, 'leg'),
(12, 'Finger');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_symptoms`
--

CREATE TABLE `tbl_symptoms` (
  `SYM_ID` int(255) NOT NULL,
  `SYM_NAME` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_symptoms`
--

INSERT INTO `tbl_symptoms` (`SYM_ID`, `SYM_NAME`) VALUES
(4, 'Dry Skin'),
(5, 'Dry Eyes'),
(6, 'Delayed Growth'),
(7, 'Night Blindness'),
(8, 'Throat and Chest Infection'),
(9, 'High Blood Sugar'),
(10, 'Blurry vision'),
(11, 'Numbness'),
(12, 'Nausea and Vomiting'),
(13, 'Skin lesions'),
(14, 'Liver problems'),
(15, 'Red'),
(16, 'Swollen'),
(17, 'Bleeding gums '),
(18, 'Fatigue and Tiredness'),
(19, 'Bone and Back Pain'),
(20, ' Depression'),
(21, 'Bone Loss'),
(22, 'Hair Loss'),
(23, 'Muscle Pain'),
(25, 'back pain');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_user`
--

CREATE TABLE `tbl_user` (
  `ID` int(255) NOT NULL,
  `NAME` varchar(255) NOT NULL,
  `EMAIL` varchar(255) NOT NULL,
  `PASSWORD` varchar(255) NOT NULL,
  `C-PASSWORD` varchar(255) NOT NULL,
  `BLOOD-GROUP` varchar(255) NOT NULL,
  `WEIGHT` varchar(255) NOT NULL,
  `DOB` varchar(255) NOT NULL,
  `TYPE` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_user`
--

INSERT INTO `tbl_user` (`ID`, `NAME`, `EMAIL`, `PASSWORD`, `C-PASSWORD`, `BLOOD-GROUP`, `WEIGHT`, `DOB`, `TYPE`) VALUES
(1, 'Admin', 'admintr@gmail.com', 'zaqwsx', 'zaqwsx', 'A+', '55', '19/06/1997', 'Admin'),
(4, 'zabed', 'zabed@gmail.com', '12345', '12345', 'A+', '60', '1997-10-20', 'User'),
(5, 'Touhidur Rahman Konik', 'trtest@gmail.com', '123456', '123456', 'A+', '20', '2020-10-10', 'User'),
(6, 'Touhidur Rahman Konik', '1@gmail.com', '123456', '123456', 'B+', '10', '2020-10-10', 'User'),
(7, 'Touhidur Rahman Konik', 'tr.konik.3745@gmail.com', '123123', '123123', 'A+', '76', '2019-03-07', 'User'),
(9, 'rahel', 'rahel@gmail.com', 'rahel', 'rahel', 'O+', '10', '2010-12-12', 'User'),
(10, 'karim', 'karim1@gmail.com', '11223344', '11223344', 'B+', '25', '2019-11-11', 'User'),
(13, 'konik', 'konik22@gmail.com', 'konik22', 'konik22', 'B+', '10', '2020-11-11', 'User');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_vitamin`
--

CREATE TABLE `tbl_vitamin` (
  `V_ID` int(255) NOT NULL,
  `VITAMIN_NAME` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_vitamin`
--

INSERT INTO `tbl_vitamin` (`V_ID`, `VITAMIN_NAME`) VALUES
(1, 'Vitamin A'),
(2, 'Vitamin B'),
(3, 'Vitamin C'),
(4, 'Vitamin D'),
(5, 'VITAMIN E'),
(7, 'vitamin k');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_alert`
--
ALTER TABLE `tbl_alert`
  ADD PRIMARY KEY (`A_ID`);

--
-- Indexes for table `tbl_blog`
--
ALTER TABLE `tbl_blog`
  ADD PRIMARY KEY (`B_ID`);

--
-- Indexes for table `tbl_detail`
--
ALTER TABLE `tbl_detail`
  ADD PRIMARY KEY (`D_ID`);

--
-- Indexes for table `tbl_organ`
--
ALTER TABLE `tbl_organ`
  ADD PRIMARY KEY (`O_ID`);

--
-- Indexes for table `tbl_symptoms`
--
ALTER TABLE `tbl_symptoms`
  ADD PRIMARY KEY (`SYM_ID`);

--
-- Indexes for table `tbl_user`
--
ALTER TABLE `tbl_user`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `tbl_vitamin`
--
ALTER TABLE `tbl_vitamin`
  ADD PRIMARY KEY (`V_ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_alert`
--
ALTER TABLE `tbl_alert`
  MODIFY `A_ID` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `tbl_blog`
--
ALTER TABLE `tbl_blog`
  MODIFY `B_ID` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tbl_detail`
--
ALTER TABLE `tbl_detail`
  MODIFY `D_ID` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tbl_organ`
--
ALTER TABLE `tbl_organ`
  MODIFY `O_ID` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `tbl_symptoms`
--
ALTER TABLE `tbl_symptoms`
  MODIFY `SYM_ID` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `tbl_user`
--
ALTER TABLE `tbl_user`
  MODIFY `ID` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `tbl_vitamin`
--
ALTER TABLE `tbl_vitamin`
  MODIFY `V_ID` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
