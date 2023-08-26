
SET SQL_MODE
= "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone
= "+00:00";


CREATE TABLE `admin`
(
  `id_admin` int
(11) NOT NULL,
  `username` varchar
(50) NOT NULL,
  `sname` varchar
(50) NOT NULL,
  `email` varchar
(100) NOT NULL,
  `pass` varchar
(255) NOT NULL,
  `status` varchar
(12) NOT NULL,PRIMARY KEY (`id_admin`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
ALTER TABLE `admin` CHANGE `id_admin` `id_admin` INT(11) NOT NULL AUTO_INCREMENT;



INSERT INTO `admin` (
`username`, `sname`, `email`, `pass`, `status`) VALUES
('Grace', 'BISIMWA', 'gracebisimwa@cbg.net', '482358cf89478ce74fbd445f20a428fb', ''),
('Diane', 'Uwase', 'Diane@cbg.net', '81dc9bdb52d04dc20036dbd8313ed055', ''),
('Benjamin', 'mungo', 'ben@gm.com', '81dc9bdb52d04dc20036dbd8313ed055', ''),
('Fadhili', 'Fadhil', 'fadhila@gmail.com', '81dc9bdb52d04dc20036dbd8313ed055', '');



CREATE TABLE `class_tb`
(`class_id` int(11) NOT NULL,
  `class_name` varchar(50) NOT NULL,
  `start_year` int(11) NOT NULL,
  `end_year` int(11) NOT NULL,
  `class_created_at` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COMMENT='this table is for class, we need it to be dynamic';

ALTER TABLE `class_tb` CHANGE `class_id` `class_id` INT(11) NOT NULL AUTO_INCREMENT, add PRIMARY KEY (`class_id`);

INSERT INTO `class_tb` (
`class_name`, `start_year`, `end_year`, `class_created_at`) VALUES
('Primary 0', 20210308, 20210309, 0),
('Primary 1', 0, 0, 0),
('Primary 2', 0, 0, 0),
('Primary 3', 2020, 2021, 0),
('Year 1', 2020, 2021, 0),
('Primary 4', 2020, 2021, 0),
('Primary 5', 2020, 2021, 0),
('Primary 6', 2020, 2021, 0);

-- --------------------------------------------------------

--
-- Table structure for table `employees`
--

CREATE TABLE `employees`
(
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `sname` varchar(50) NOT NULL,
  `lname` varchar(30) NOT NULL,
  `location` varchar(100) NOT NULL,
  `task` varchar(255) NOT NULL,
  `adm_at` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

ALTER TABLE `employees` CHANGE `id` `id` INT(11) NOT NULL AUTO_INCREMENT COMMENT 'Auto_increment Id', add PRIMARY KEY (`id`);

CREATE TABLE `lecturer`
(
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `sname` varchar(50) NOT NULL,
  `lname` varchar
(30) NOT NULL,
  `cours` varchar
(100) NOT NULL,
  `location` varchar
(50) NOT NULL,
  `nationalite` varchar
(30) NOT NULL,
  `adm_at` datetime NOT NULL DEFAULT current_timestamp
(),
  `status` int
(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

ALTER TABLE `lecturer` CHANGE `id` `id` INT(11) NOT NULL AUTO_INCREMENT, add PRIMARY KEY (`id`);

-- --------------------------------------------------------

--
-- Table structure for table `payement_std`
--

CREATE TABLE `payement_std`
(
  `id` int
(11) NOT NULL,
  `name` varchar
(50) NOT NULL,
  `create_at` datetime NOT NULL DEFAULT current_timestamp
(),
  `date_register` date NOT NULL,
  `mount` int
(11) NOT NULL,
  `id_pay` int
(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

ALTER TABLE `payement_std` CHANGE `id` `id` INT(11) NOT NULL AUTO_INCREMENT, add PRIMARY KEY (`id`);

-- --------------------------------------------------------

--
-- Table structure for table `py`
--

CREATE TABLE `py`
(
  `id` int
(11) NOT NULL,
  `mount` int
(11) NOT NULL,
  `create_at` datetime NOT NULL DEFAULT current_timestamp
(),
  `id_pay` int
(11) NOT NULL,
  `bank` varchar
(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE `student`
(
  `id_student` int
(11) NOT NULL,
  `username` varchar
(50) NOT NULL,
  `sname` varchar
(50) NOT NULL,
  `email` varchar
(100) NOT NULL,
  `class` varchar
(10) NOT NULL,
  `depart` varchar
(30) NOT NULL,
  `create_at` datetime NOT NULL DEFAULT current_timestamp
(),
  `sex` varchar
(10) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp
()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`
id_student`,
`username
`, `sname`, `email`, `class`, `depart`, `create_at`, `sex`, `created_at`) VALUES
(6, 'Blessing', 'rwabukamba', 'blessing@gmail.com', '4', 'computer science', '2021-03-30 11:28:42', 'Female', '2021-03-30 11:28:42'),
(7, 'Tona ANAISE', 'condo', 'tona@isoko.net', '7', 'computer science', '2021-03-30 11:36:07', 'Female', '2021-03-30 11:36:07');

-- --------------------------------------------------------

--
-- Table structure for table `stud_pay`
--

CREATE TABLE `stud_pay`
(
  `id_pay` int
(11) NOT NULL,
  `email` varchar
(100) NOT NULL,
  `mount_pay` varchar
(50) NOT NULL,
  `pay_at` datetime NOT NULL DEFAULT current_timestamp
(),
  `bank_at` varchar
(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `stud_pay`
--

INSERT INTO `stud_pay` (`
id_pay`,
`email
`, `mount_pay`, `pay_at`, `bank_at`) VALUES
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
(14, 'tona@isoko.net', '', '2021-03-30 12:51:21', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
ADD PRIMARY KEY
(`id_admin`);

--
-- Indexes for table `class_tb`
--
ALTER TABLE `class_tb`
ADD PRIMARY KEY
(`class_id`);

--
-- Indexes for table `employees`
--
ALTER TABLE `employees`
ADD PRIMARY KEY
(`id`);

--
-- Indexes for table `lecturer`
--
ALTER TABLE `lecturer`
ADD PRIMARY KEY
(`id`);

--
-- Indexes for table `payement_std`
--
ALTER TABLE `payement_std`
ADD PRIMARY KEY
(`id`);

--
-- Indexes for table `py`
--
ALTER TABLE `py`
ADD PRIMARY KEY
(`id`);

--
-- Indexes for table `student`
--
ALTER TABLE `student`
ADD PRIMARY KEY
(`id_student`);

--
-- Indexes for table `stud_pay`
--
ALTER TABLE `stud_pay`
ADD PRIMARY KEY
(`id_pay`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id_admin` int
(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `class_tb`
--
ALTER TABLE `class_tb`
  MODIFY `class_id` int
(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `employees`
--
ALTER TABLE `employees`
  MODIFY `id` int
(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `payement_std`
--
ALTER TABLE `payement_std`
  MODIFY `id` int
(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `py`
--
ALTER TABLE `py`
  MODIFY `id` int
(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `student`
--
ALTER TABLE `student`
  MODIFY `id_student` int
(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `stud_pay`
--
ALTER TABLE `stud_pay`
  MODIFY `id_pay` int
(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
COMMIT;

CREATE VIEW student_male
AS
  SELECT COUNT(sex) AS Male, COUNT(id_student) AS id_male
  FROM student
  WHERE sex = 'Male';

CREATE VIEW student_female
AS
  SELECT COUNT(sex) AS Female, COUNT(id_student) AS id_female
  FROM student
  WHERE sex = 'Female'
