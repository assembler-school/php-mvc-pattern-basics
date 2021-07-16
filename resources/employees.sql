-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 15, 2021 at 05:35 PM
-- Server version: 10.4.19-MariaDB
-- PHP Version: 8.0.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `employees`
--

-- --------------------------------------------------------

--
-- Stand-in structure for view `current_dept_emp`
-- (See below for the actual view)
--
CREATE TABLE `current_dept_emp` (
`emp_no` int(11)
,`dept_no` char(4)
,`from_date` date
,`to_date` date
);

-- --------------------------------------------------------

--
-- Table structure for table `departments`
--

CREATE TABLE `departments` (
  `dept_no` char(4) NOT NULL,
  `dept_name` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `departments`
--

INSERT INTO `departments` (`dept_no`, `dept_name`) VALUES
('5', 'Administration'),
('2', 'Engineering Department'),
('1', 'Marketing Department'),
('3', 'Tech');

-- --------------------------------------------------------

--
-- Table structure for table `dept_emp`
--

CREATE TABLE `dept_emp` (
  `emp_no` int(11) NOT NULL,
  `dept_no` char(4) NOT NULL,
  `from_date` date NOT NULL,
  `to_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `dept_emp`
--

INSERT INTO `dept_emp` (`emp_no`, `dept_no`, `from_date`, `to_date`) VALUES
(1, '1', '2018-05-01', '2021-07-09'),
(2, '1', '2019-10-01', '2021-07-09'),
(3, '1', '2019-03-01', '2021-07-09'),
(3, '2', '2015-03-01', '2019-03-01'),
(4, '2', '2021-03-01', '2021-07-09'),
(5, '2', '2019-01-01', '2021-07-09'),
(6, '3', '2019-02-02', '2021-07-09'),
(7, '3', '2018-03-04', '2021-07-09'),
(9, '5', '2017-05-08', '2021-07-09'),
(10, '5', '2020-05-08', '2021-07-09');

-- --------------------------------------------------------

--
-- Stand-in structure for view `dept_emp_latest_date`
-- (See below for the actual view)
--
CREATE TABLE `dept_emp_latest_date` (
`emp_no` int(11)
,`from_date` date
,`to_date` date
);

-- --------------------------------------------------------

--
-- Table structure for table `dept_manager`
--

CREATE TABLE `dept_manager` (
  `emp_no` int(11) NOT NULL,
  `dept_no` char(4) NOT NULL,
  `from_date` date NOT NULL,
  `to_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `dept_manager`
--

INSERT INTO `dept_manager` (`emp_no`, `dept_no`, `from_date`, `to_date`) VALUES
(11, '1', '2020-10-12', '2021-07-12'),
(13, '3', '2015-06-19', '2021-07-12'),
(14, '5', '2018-06-19', '2021-07-12');

-- --------------------------------------------------------

--
-- Table structure for table `employees`
--

CREATE TABLE `employees` (
  `emp_no` int(11) NOT NULL,
  `birth_date` date NOT NULL,
  `first_name` varchar(14) NOT NULL,
  `last_name` varchar(16) NOT NULL,
  `gender` enum('M','F') NOT NULL,
  `hire_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `employees`
--

INSERT INTO `employees` (`emp_no`, `birth_date`, `first_name`, `last_name`, `gender`, `hire_date`) VALUES
(1, '1966-04-05', 'Sara', 'Connor', 'F', '2018-05-01'),
(2, '1978-10-15', 'Juan', 'Smith', 'M', '2019-10-01'),
(3, '1999-09-15', 'Franz', 'Ferdinand', 'M', '2015-03-01'),
(4, '1952-02-08', 'Juan', 'Perez', 'M', '2021-03-01'),
(5, '1980-04-05', 'Maria', 'Fernandez', 'F', '2019-01-01'),
(6, '1981-05-06', 'Mariana', 'Gomez', 'F', '2019-02-02'),
(7, '1982-06-07', 'Ignacio', 'Uriburu', 'M', '2018-03-04'),
(8, '1983-07-08', 'Victor', 'Soler', 'M', '2018-04-06'),
(9, '1984-08-09', 'Gustavo', 'Sierra', 'M', '2017-05-08'),
(10, '1982-02-09', 'Carlos', 'Larrea', 'M', '2020-05-08'),
(11, '1988-07-09', 'Carlos', 'Scalabrini', 'M', '2020-10-12'),
(12, '1990-12-09', 'Carlos', 'Santa Maria', 'M', '2010-01-12'),
(13, '1980-04-04', 'Antonio', 'Beruti', 'M', '2015-06-19'),
(14, '1940-09-11', 'Jose', 'Serrano', 'M', '2018-06-19');

-- --------------------------------------------------------

--
-- Table structure for table `salaries`
--

CREATE TABLE `salaries` (
  `emp_no` int(11) NOT NULL,
  `salary` int(11) NOT NULL,
  `from_date` date NOT NULL,
  `to_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `salaries`
--

INSERT INTO `salaries` (`emp_no`, `salary`, `from_date`, `to_date`) VALUES
(1, 5000, '2018-05-01', '2021-07-09'),
(2, 6000, '2019-10-01', '2021-07-09'),
(3, 7000, '2015-03-01', '2018-03-01'),
(3, 8000, '2018-03-01', '2021-07-09'),
(4, 8000, '2021-03-01', '2021-07-09'),
(5, 9000, '2019-01-01', '2021-07-09'),
(6, 10000, '2019-02-02', '2021-07-09'),
(7, 10000, '2018-03-04', '2021-07-09'),
(8, 11000, '2018-05-06', '2021-07-09'),
(9, 12000, '2017-05-08', '2021-07-09'),
(10, 13000, '2020-05-08', '2021-07-09'),
(11, 14000, '2020-10-12', '2021-07-09'),
(12, 7000, '2010-01-12', '2011-07-09'),
(12, 15000, '2011-07-09', '2021-07-09'),
(13, 17000, '2015-06-19', '2021-07-09'),
(14, 16000, '2018-06-19', '2021-07-09');

-- --------------------------------------------------------

--
-- Table structure for table `titles`
--

CREATE TABLE `titles` (
  `emp_no` int(11) NOT NULL,
  `title` varchar(50) NOT NULL,
  `from_date` date NOT NULL,
  `to_date` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `titles`
--

INSERT INTO `titles` (`emp_no`, `title`, `from_date`, `to_date`) VALUES
(1, 'Marketing Degree', '2020-01-01', NULL),
(2, 'Marketing Degree', '2020-01-01', NULL),
(3, 'Marketing Master', '2020-01-01', NULL),
(4, 'Electronic Engineer', '2020-01-01', NULL),
(5, 'Mechanical Engineer', '2020-01-01', NULL),
(6, 'Software Engineer', '2020-01-01', NULL),
(7, 'Web Developer', '2019-01-01', NULL),
(8, 'Psicologist', '2019-01-01', NULL),
(9, 'MBA', '2019-01-01', NULL),
(10, 'Industrial Engineer', '2019-01-01', NULL),
(11, 'Marketing Master', '2018-01-01', NULL),
(12, 'HR Master', '2018-01-01', NULL),
(13, 'Dev Ops', '2018-01-01', NULL),
(14, 'MBA', '2018-01-01', NULL);

-- --------------------------------------------------------

--
-- Structure for view `current_dept_emp`
--
DROP TABLE IF EXISTS `current_dept_emp`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `current_dept_emp`  AS SELECT `l`.`emp_no` AS `emp_no`, `d`.`dept_no` AS `dept_no`, `l`.`from_date` AS `from_date`, `l`.`to_date` AS `to_date` FROM (`dept_emp` `d` join `dept_emp_latest_date` `l` on(`d`.`emp_no` = `l`.`emp_no` and `d`.`from_date` = `l`.`from_date` and `l`.`to_date` = `d`.`to_date`)) ;

-- --------------------------------------------------------

--
-- Structure for view `dept_emp_latest_date`
--
DROP TABLE IF EXISTS `dept_emp_latest_date`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `dept_emp_latest_date`  AS SELECT `dept_emp`.`emp_no` AS `emp_no`, max(`dept_emp`.`from_date`) AS `from_date`, max(`dept_emp`.`to_date`) AS `to_date` FROM `dept_emp` GROUP BY `dept_emp`.`emp_no` ;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `departments`
--
ALTER TABLE `departments`
  ADD PRIMARY KEY (`dept_no`),
  ADD UNIQUE KEY `dept_name` (`dept_name`);

--
-- Indexes for table `dept_emp`
--
ALTER TABLE `dept_emp`
  ADD PRIMARY KEY (`emp_no`,`dept_no`),
  ADD KEY `dept_no` (`dept_no`);

--
-- Indexes for table `dept_manager`
--
ALTER TABLE `dept_manager`
  ADD PRIMARY KEY (`emp_no`,`dept_no`),
  ADD KEY `dept_no` (`dept_no`);

--
-- Indexes for table `employees`
--
ALTER TABLE `employees`
  ADD PRIMARY KEY (`emp_no`);

--
-- Indexes for table `salaries`
--
ALTER TABLE `salaries`
  ADD PRIMARY KEY (`emp_no`,`from_date`);

--
-- Indexes for table `titles`
--
ALTER TABLE `titles`
  ADD PRIMARY KEY (`emp_no`,`title`,`from_date`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `dept_emp`
--
ALTER TABLE `dept_emp`
  ADD CONSTRAINT `dept_emp_ibfk_1` FOREIGN KEY (`emp_no`) REFERENCES `employees` (`emp_no`) ON DELETE CASCADE,
  ADD CONSTRAINT `dept_emp_ibfk_2` FOREIGN KEY (`dept_no`) REFERENCES `departments` (`dept_no`) ON DELETE CASCADE;

--
-- Constraints for table `dept_manager`
--
ALTER TABLE `dept_manager`
  ADD CONSTRAINT `dept_manager_ibfk_1` FOREIGN KEY (`emp_no`) REFERENCES `employees` (`emp_no`) ON DELETE CASCADE,
  ADD CONSTRAINT `dept_manager_ibfk_2` FOREIGN KEY (`dept_no`) REFERENCES `departments` (`dept_no`) ON DELETE CASCADE;

--
-- Constraints for table `salaries`
--
ALTER TABLE `salaries`
  ADD CONSTRAINT `salaries_ibfk_1` FOREIGN KEY (`emp_no`) REFERENCES `employees` (`emp_no`) ON DELETE CASCADE;

--
-- Constraints for table `titles`
--
ALTER TABLE `titles`
  ADD CONSTRAINT `titles_ibfk_1` FOREIGN KEY (`emp_no`) REFERENCES `employees` (`emp_no`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
