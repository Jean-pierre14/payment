-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 18, 2022 at 02:16 PM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.0.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `payment`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id_admin` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `sname` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(255) NOT NULL,
  `auth` int(10) DEFAULT NULL,
  `status` varchar(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id_admin`, `username`, `sname`, `email`, `password`, `auth`, `status`) VALUES
(5, 'Diane', 'uwase', 'dianeuwase@gmai.com', '81dc9bdb52d04dc20036dbd8313ed055', 2, '');

-- --------------------------------------------------------

--
-- Table structure for table `anneesscolaire`
--

CREATE TABLE `anneesscolaire` (
  `id` int(11) NOT NULL,
  `annee` varchar(255) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COMMENT='Les annees scolaires';

--
-- Dumping data for table `anneesscolaire`
--

INSERT INTO `anneesscolaire` (`id`, `annee`, `created_at`) VALUES
(2, '2018-2019', '2021-12-17 08:25:27'),
(3, '2019-2020', '2021-12-17 08:30:28'),
(4, '2016-2018', '2021-12-17 08:44:50'),
(7, '2021-2020', '2021-12-17 09:11:04'),
(8, '2020-2021', '2021-12-17 10:01:12'),
(9, '2022-2023', '2021-12-17 19:55:17'),
(10, '2021-2022', '2021-12-25 07:15:48');

-- --------------------------------------------------------

--
-- Table structure for table `class_tb`
--

CREATE TABLE `class_tb` (
  `class_id` int(11) NOT NULL,
  `class_name` varchar(50) NOT NULL,
  `start_year` int(11) NOT NULL,
  `end_year` int(11) NOT NULL,
  `class_created_at` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COMMENT='this table is for class, we need it to be dynamic';

--
-- Dumping data for table `class_tb`
--

INSERT INTO `class_tb` (`class_id`, `class_name`, `start_year`, `end_year`, `class_created_at`) VALUES
(1, 'Primary 0', 20210308, 20210309, 0),
(2, 'Primary 1', 0, 0, 0),
(3, 'Primary 2', 0, 0, 0),
(4, 'Primary 3', 2020, 2021, 0),
(5, 'Year 1', 2020, 2021, 0),
(6, 'Primary 4', 2020, 2021, 0),
(7, 'Primary 5', 2020, 2021, 0),
(8, 'Primary 6', 2020, 2021, 0),
(9, 'maternelle', 2021, 2022, 0);

-- --------------------------------------------------------

--
-- Table structure for table `employees`
--

CREATE TABLE `employees` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `sname` varchar(50) NOT NULL,
  `lname` varchar(30) NOT NULL,
  `location` varchar(100) NOT NULL,
  `task` varchar(255) NOT NULL,
  `adm_at` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `lecturer`
--

CREATE TABLE `lecturer` (
  `id` int(11) NOT NULL,
  `unique_id` int(200) NOT NULL,
  `name` varchar(255) NOT NULL,
  `sname` varchar(255) NOT NULL,
  `lname` varchar(255) NOT NULL,
  `sex` varchar(50) DEFAULT NULL,
  `email` varchar(255) NOT NULL,
  `cours` varchar(100) NOT NULL,
  `location` varchar(255) NOT NULL,
  `nationalite` varchar(400) NOT NULL,
  `adm_at` datetime NOT NULL DEFAULT current_timestamp(),
  `profil` varchar(400) NOT NULL,
  `status` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `lecturer`
--

INSERT INTO `lecturer` (`id`, `unique_id`, `name`, `sname`, `lname`, `sex`, `email`, `cours`, `location`, `nationalite`, `adm_at`, `profil`, `status`) VALUES
(1, 701819714, 'CHIRUZA', 'BISIMWA', 'GRACE', 'Female', 'chiruzabisimwa@outlook.fr', 'FRANCAIS', 'New york city', 'CONGOLESE', '2021-12-27 08:21:10', '1640589670memoire-journee.jpeg', '0'),
(2, 983167783, 'BISIMWA Jean-pierre14', 'Elisee', 'MULUNGULA', 'Female', 'evaristeshabani4@gmail.com', 'FRANCAIS', 'New york city', 'CONGOLESE', '2021-12-27 08:53:47', '1640591627memoire-journee.jpeg', 'Active now'),
(3, 1449754668, 'DIANE', 'UWASE', 'BISIMWA', 'Female', 'dianeuwase@outlook.fr', 'FRANCAIS', 'Gisenyi', 'CONGOLESE', '2021-12-27 09:07:36', '1640592456IMG_4214.JPG', 'Active now'),
(4, 897294494, 'Jacques', 'MUSAFIRI', 'MULUMODERWA', 'Female', 'jacquesmusafiri2020@gmail.com', 'FRANCAIS', 'BUKAVU', 'CONGOLESE', '2021-12-27 09:09:39', '1640592579IMG_4693.JPG', 'Active now'),
(5, 347694666, 'MPONI', 'Tamseis', 'mpamo', 'Female', 'tamseis@gmail.com', 'ANGLAIS', 'GISENYI', 'Rwandaise', '2021-12-27 09:11:23', '1640592683IMG_4499.JPG', 'Active now'),
(6, 1020944776, 'Evelina', 'Merlo', 'Roshanali', 'Female', 'evelina.merlo@gmail.com', 'Art visuel', 'Rubavu', 'Belge', '2021-12-27 09:15:27', '1640592927IMG_4533.JPG', 'Active now'),
(7, 986241480, 'Peter', 'KAHUMUZA', 'IRAGI', 'Female', 'pierrekahumuza@gmail.com', 'FRANCAIS', 'Goma himbi 2', 'CONGOLESE', '2021-12-27 12:48:30', '1640605710IMG_4539.JPG', 'Active now'),
(8, 774151588, 'Katherine', 'Turgeon', 'Canada', 'Female', 'katherine_turgeon@hotmail.com', 'FRANCAIS, Mathermatique', 'Gisenyi', 'Canadienne', '2021-12-27 15:08:15', '1640614095IMG_20211220_103323.jpg', 'Active now'),
(9, 1566978320, 'Vestine', 'Nyabu', 'Rwanda', 'Female', 'vestine@gmail.com', 'Tout', 'Rwanda', 'Rwandaisw', '2022-04-18 01:35:43', '1650270943watch-3.png', 'Active now'),
(10, 1136199127, 'Dadia', 'Milambo', 'Congo', 'Female', 'milambo@gmail.com', 'Tout', 'Gisenyi', 'Congolaise', '2022-04-23 02:44:46', '1650707086Eid-Isoko2.jpg', 'Active now'),
(12, 773244887, 'Solange', 'Umutesi', 'Soso', 'Male', 'tesisolang@gmail.com', 'Maternelle', 'Gisenyi', 'Rwandaise', '2022-05-01 05:49:40', '1651409380IMG_20211205_081639.jpg', 'Active now'),
(16, 941696272, 'one', 'one', 'one', 'Female', 'one@one.one', 'one', 'one', 'one', '2022-05-01 23:05:18', '1651471518IMG_20211116_064410.jpg', 'Active now'),
(17, 355119658, 'Alice', 'Mungo', 'Talia', 'Female', 'alice@gmail.fr', 'droit', 'Goma', 'Congolese', '2022-05-01 23:06:32', '1651471592IMG_20211109_152853.jpg', 'Active now'),
(18, 639494985, 'Bob', 'Boso', 'Bis', 'Female', 'bob@one.fr', 'Cours', 'Loca', 'one', '2022-05-01 23:07:28', '1651471648IMG_20211109_152853.jpg', 'Active now'),
(19, 718702329, 'Ana', 'onala', 'lembo', 'Female', 'ana@yahoo.fr', 'francais', 'Goma', 'Congolaise', '2022-05-01 23:09:05', '1651471745IMG_20211111_072739.jpg', 'Active now');

-- --------------------------------------------------------

--
-- Stand-in structure for view `lecturer_female`
-- (See below for the actual view)
--
CREATE TABLE `lecturer_female` (
`Female` bigint(21)
,`id_female` bigint(21)
);

-- --------------------------------------------------------

--
-- Stand-in structure for view `lecturer_male`
-- (See below for the actual view)
--
CREATE TABLE `lecturer_male` (
`Male` bigint(21)
,`id_male` bigint(21)
);

-- --------------------------------------------------------

--
-- Table structure for table `payement_std`
--

CREATE TABLE `payement_std` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `create_at` datetime NOT NULL DEFAULT current_timestamp(),
  `date_register` date NOT NULL,
  `mount` int(11) NOT NULL,
  `id_pay` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `py`
--

CREATE TABLE `py` (
  `id` int(11) NOT NULL,
  `mount` int(11) NOT NULL,
  `create_at` datetime NOT NULL DEFAULT current_timestamp(),
  `id_pay` int(11) NOT NULL,
  `bank` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `py`
--

INSERT INTO `py` (`id`, `mount`, `create_at`, `id_pay`, `bank`) VALUES
(1, 200, '2021-12-17 10:29:22', 9, 'Bank of kigali');

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `id_student` int(11) NOT NULL,
  `unique_id` int(255) NOT NULL,
  `username` varchar(50) NOT NULL,
  `sname` varchar(50) NOT NULL,
  `profil` varchar(400) DEFAULT NULL,
  `email` varchar(100) NOT NULL,
  `class` varchar(10) NOT NULL,
  `AnneeScolaire` varchar(255) NOT NULL,
  `depart` varchar(30) NOT NULL,
  `create_at` datetime NOT NULL DEFAULT current_timestamp(),
  `sex` varchar(10) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`id_student`, `unique_id`, `username`, `sname`, `profil`, `email`, `class`, `AnneeScolaire`, `depart`, `create_at`, `sex`, `created_at`) VALUES
(6, 0, 'Blessing', 'rwabukamba', NULL, 'blessing@gmail.com', '4', '2021-2022', 'computer science', '2021-03-30 11:28:42', 'Female', '2021-03-30 11:28:42'),
(7, 0, 'Tona ANAISE', 'condo', NULL, 'tona@isoko.net', '7', '2021-2022', 'computer science', '2021-03-30 11:36:07', 'Male', '2021-03-30 11:36:07'),
(8, 0, 'Reagen', 'ULK', NULL, 'reagene@gmail.com', 'YEAR 3', '2021-2022', 'computer science', '2021-12-06 10:02:20', 'Male', '2021-12-06 10:02:20'),
(9, 0, 'Abby', 'Abby Muhire', NULL, 'abby@gmail.com', 'YEAR 1', '2021-2022', 'Law', '2021-12-14 12:44:16', 'Female', '2021-12-14 12:44:16'),
(10, 0, 'Grace', 'Bisimwa CHIRUZA', '1651407844IMG_20211109_152853.jpg', 'bisimwa@gmail.cd', 'P6', '2021-2022', 'computer science', '2021-12-19 07:16:00', 'Male', '2021-12-19 07:16:00'),
(11, 0, 'Adil', 'Merlo', NULL, 'evelina.merlo@gmail.com', 'P4', '', '', '2021-12-25 07:05:10', 'Male', '2021-12-25 07:05:10'),
(12, 0, 'Kaylia', 'ndeze', NULL, 'kaylia@gmail.com', 'P3', '', '', '2021-12-25 07:06:11', 'Female', '2021-12-25 07:06:11'),
(13, 0, 'Malia', 'Odiga', NULL, 'malia@gmail.com', 'P3', '', '', '2021-12-25 07:07:04', 'Male', '2021-12-25 07:07:04'),
(14, 0, 'Prodige', 'congo', NULL, 'pro@congo.cd', 'P4', '', '', '2021-12-25 07:08:00', 'Female', '2021-12-25 07:08:00'),
(15, 0, 'Nora', 'Mbelo', NULL, 'mbelo.congo.cd@gmail.com', 'P2', '', '', '2021-12-25 07:16:46', 'Female', '2021-12-25 07:16:46'),
(16, 0, 'Ayaan', 'Roshanali', NULL, 'evelina.merlo@gmail.com', 'P3', '', '', '2021-12-25 07:17:16', 'Male', '2021-12-25 07:17:16'),
(17, 0, 'Malia', 'Colette', NULL, 'ndeze@gmail.com', 'P2', '', '', '2021-12-25 07:17:53', 'Female', '2021-12-25 07:17:53'),
(18, 0, 'Malia', 'Colette', NULL, 'ndeze@gmail.com', 'P2', '', '', '2021-12-25 07:18:00', 'Female', '2021-12-25 07:18:00'),
(19, 0, 'Kaylia', 'Ndeze', NULL, 'ndeze@gmail.com', 'P3', '', '', '2021-12-25 07:18:40', 'Male', '2021-12-25 07:18:40'),
(20, 0, 'Miguel', 'Nelson', NULL, 'nelson@gmail.com', 'P4', '', '', '2021-12-25 07:19:14', 'Female', '2021-12-25 07:19:14'),
(21, 0, 'Aashiq', 'Roshanali', NULL, 'roshanali@gmail.com', 'P2', '', '', '2021-12-25 07:25:25', 'Male', '2021-12-25 07:25:25'),
(22, 0, 'Shreya', 'Lalani', NULL, 'shreya@india.com', 'P2', '2021-2022', '', '2021-12-25 13:09:45', 'Female', '2021-12-25 13:09:45'),
(23, 0, 'jnjnLKMKM', 'kjkjkjnl', NULL, 'uo', 'P1', '2018-2019', '', '2021-12-28 11:49:24', 'Female', '2021-12-28 11:49:24'),
(24, 0, 'Exauce', 'Rwabukamba', NULL, 'jeanbosco@gmail.com', 'P5', '2021-2022', '', '2021-12-30 16:36:55', 'Female', '2021-12-30 16:36:55'),
(25, 0, 'Nora', 'mbelo', NULL, 'mbelo@gmail.com', 'P2', '2019-2020', '', '2021-12-30 17:06:31', 'Female', '2021-12-30 17:06:31'),
(26, 0, 'Malia', 'Odiga', NULL, 'maliaodiga@hotmail.com', 'P3', '2021-2022', '', '2022-01-02 11:28:48', 'Female', '2022-01-02 11:28:48'),
(27, 711929864, 'Nolan', 'Nolan P2', '1641159584IMG_20211109_152853.jpg', 'nolan@isoko.fr', 'P2', '2021-2022', '', '2022-01-02 22:39:44', 'Male', '2022-01-02 22:39:44'),
(28, 226650595, 'Raphael', 'kasongo', '1641159912IMG_20211123_121647.jpg', 'raphaelkasongo@gmail.com', 'P3', '2021-2022', '', '2022-01-02 22:45:12', 'Male', '2022-01-02 22:45:12'),
(29, 15177321, 'Bruce', 'Bruce', '1641160100IMG_20211221_131155.jpg', 'bruce@isoko.fr', 'P2', '2021-2022', '', '2022-01-02 22:48:20', 'Male', '2022-01-02 22:48:20'),
(30, 1601003790, 'Exauce', 'Rwabukamba', '1641160643IMG_20211123_174907.jpg', 'exauce@gmail.com', 'P4', '2019-2020', '', '2022-01-02 22:57:23', 'Male', '2022-01-02 22:57:23'),
(31, 299691446, 'bOS', 'Bos', '1651071524plush-blankets-beach-party.jpg.jpg', 'bos@gmail.com', 'P1', '2021-2022', '', '2022-04-27 07:58:44', 'Male', '2022-04-27 07:58:44'),
(32, 1540695215, 'bOS', 'Bose', '1651071525plush-blankets-beach-party.jpg.jpg', 'bos@gmail.com', 'P2', '2021-2022', '', '2022-04-27 07:58:46', 'Female', '2022-04-27 07:58:46'),
(33, 1364300696, 'Diane', 'Uwase Bisimwa', '1651407623_DSC0341.JPG', 'dianeuwase@gmail.com', 'P6', '2021-2022', '', '2022-05-01 05:20:23', 'Female', '2022-05-01 05:20:23'),
(34, 1593265117, 'Adil', 'Merlo', '1651408898IMG_20211119_152305.jpg', 'adilmerolo@gmail.com', 'P5', '2021-2022', '', '2022-05-01 05:41:38', 'Male', '2022-05-01 05:41:38'),
(35, 1508113756, 'Shawn', 'Shema', '1651409093IMG_20211119_152645.jpg', 'shemashawn9@gmal.com', 'P5', '2021-2022', '', '2022-05-01 05:44:53', 'Male', '2022-05-01 05:44:53'),
(36, 164531445, 'Adolphe', 'Bisimwa', '165324474137-371660_calendrier-icon-png-calendar-2-icon-clipart.png', 'adolf@gmail.cd', 'P6', '2021-2022', '', '2022-05-22 20:39:01', 'Female', '2022-05-22 20:39:01'),
(37, 1172156651, 'Nora', 'MBELO', '1655449828284403794_977329539609963_5577439151512833943_n.jpg', 'mora@gmail.com', 'P2', '2021-2022', '', '2022-06-17 09:10:28', 'Female', '2022-06-17 09:10:28');

-- --------------------------------------------------------

--
-- Stand-in structure for view `student_female`
-- (See below for the actual view)
--
CREATE TABLE `student_female` (
`Female` bigint(21)
,`id_female` bigint(21)
);

-- --------------------------------------------------------

--
-- Stand-in structure for view `student_male`
-- (See below for the actual view)
--
CREATE TABLE `student_male` (
`Male` bigint(21)
,`id_male` bigint(21)
);

-- --------------------------------------------------------

--
-- Table structure for table `stud_pay`
--

CREATE TABLE `stud_pay` (
  `id_pay` int(11) NOT NULL,
  `email` varchar(100) NOT NULL,
  `mount_pay` varchar(50) NOT NULL,
  `pay_at` datetime NOT NULL DEFAULT current_timestamp(),
  `bank_at` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `stud_pay`
--

INSERT INTO `stud_pay` (`id_pay`, `email`, `mount_pay`, `pay_at`, `bank_at`) VALUES
(1, 'bonheur@cgb.net', '', '2021-03-22 11:50:01', ''),
(2, 'renatha@cbg.net', '', '2021-03-22 12:01:27', ''),
(3, 'leya@cgb.con', '', '2021-03-22 12:01:53', ''),
(4, 'ava@cbg.net', '', '2021-03-22 13:18:32', ''),
(5, 'ava@cbg.net', '', '2021-03-22 13:19:08', ''),
(6, 'francisca@cbg.net', '', '2021-03-23 11:06:38', ''),
(7, 'enzo@gmail.xom', '', '2021-03-25 09:07:45', ''),
(8, 'raph@isoko.net', '', '2021-03-26 10:27:36', ''),
(9, 'r@com.con', '', '2021-03-26 10:30:12', ''),
(10, 'grace@gmail.com', '', '2021-03-26 10:32:01', ''),
(11, 'eric@gmail.com', '', '2021-03-26 13:47:55', ''),
(12, 'blessing@gmail.com', '', '2021-03-30 11:28:42', ''),
(13, 'tona@isoko.net', '', '2021-03-30 11:36:07', ''),
(14, 'tona@isoko.net', '', '2021-03-30 12:51:21', ''),
(15, 'reagene@gmail.com', '', '2021-12-06 10:02:20', ''),
(16, 'abby@gmail.com', '', '2021-12-14 12:44:16', ''),
(17, 'bisimwa@gmail.cd', '', '2021-12-19 07:16:00', '');

-- --------------------------------------------------------

--
-- Structure for view `lecturer_female`
--
DROP TABLE IF EXISTS `lecturer_female`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `lecturer_female`  AS SELECT count(`lecturer`.`sex`) AS `Female`, count(`lecturer`.`id`) AS `id_female` FROM `lecturer` WHERE `lecturer`.`sex` = 'female' ;

-- --------------------------------------------------------

--
-- Structure for view `lecturer_male`
--
DROP TABLE IF EXISTS `lecturer_male`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `lecturer_male`  AS SELECT count(`lecturer`.`sex`) AS `Male`, count(`lecturer`.`id`) AS `id_male` FROM `lecturer` WHERE `lecturer`.`sex` = 'Male' ;

-- --------------------------------------------------------

--
-- Structure for view `student_female`
--
DROP TABLE IF EXISTS `student_female`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `student_female`  AS SELECT count(`student`.`sex`) AS `Female`, count(`student`.`id_student`) AS `id_female` FROM `student` WHERE `student`.`sex` = 'Female' ;

-- --------------------------------------------------------

--
-- Structure for view `student_male`
--
DROP TABLE IF EXISTS `student_male`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `student_male`  AS SELECT count(`student`.`sex`) AS `Male`, count(`student`.`id_student`) AS `id_male` FROM `student` WHERE `student`.`sex` = 'Male' ;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id_admin`);

--
-- Indexes for table `anneesscolaire`
--
ALTER TABLE `anneesscolaire`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `class_tb`
--
ALTER TABLE `class_tb`
  ADD PRIMARY KEY (`class_id`);

--
-- Indexes for table `employees`
--
ALTER TABLE `employees`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `lecturer`
--
ALTER TABLE `lecturer`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `payement_std`
--
ALTER TABLE `payement_std`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `py`
--
ALTER TABLE `py`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`id_student`);

--
-- Indexes for table `stud_pay`
--
ALTER TABLE `stud_pay`
  ADD PRIMARY KEY (`id_pay`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id_admin` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `anneesscolaire`
--
ALTER TABLE `anneesscolaire`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `class_tb`
--
ALTER TABLE `class_tb`
  MODIFY `class_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `employees`
--
ALTER TABLE `employees`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `lecturer`
--
ALTER TABLE `lecturer`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `payement_std`
--
ALTER TABLE `payement_std`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `py`
--
ALTER TABLE `py`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `student`
--
ALTER TABLE `student`
  MODIFY `id_student` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;

--
-- AUTO_INCREMENT for table `stud_pay`
--
ALTER TABLE `stud_pay`
  MODIFY `id_pay` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
