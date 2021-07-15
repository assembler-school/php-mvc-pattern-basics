-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost:8889
-- Tiempo de generación: 15-07-2021 a las 15:05:43
-- Versión del servidor: 5.7.32
-- Versión de PHP: 8.0.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `employees`
--

-- --------------------------------------------------------

--
-- Estructura Stand-in para la vista `current_dept_emp`
-- (Véase abajo para la vista actual)
--
CREATE TABLE `current_dept_emp` (
`emp_no` int(11)
,`dept_no` char(4)
,`from_date` date
,`to_date` date
);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `departments`
--

CREATE TABLE `departments` (
  `dept_no` char(4) NOT NULL,
  `dept_name` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `departments`
--

INSERT INTO `departments` (`dept_no`, `dept_name`) VALUES
('01a', 'Finance & Administration'),
('01b', 'HR, Expats & Payroll'),
('02b', 'Procurement & Supplier Relationship'),
('02a', 'Sales & Customer Service');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `dept_emp`
--

CREATE TABLE `dept_emp` (
  `emp_no` int(11) NOT NULL,
  `dept_no` char(4) NOT NULL,
  `from_date` date NOT NULL,
  `to_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `dept_emp`
--

INSERT INTO `dept_emp` (`emp_no`, `dept_no`, `from_date`, `to_date`) VALUES
(3, '02b', '2018-12-12', '2021-07-14'),
(4, '02a', '1995-03-27', '2010-03-31'),
(4, '02b', '2010-01-04', '2021-07-14'),
(5, '01a', '2020-01-02', '2021-07-14'),
(5, '01b', '1995-03-27', '2020-01-01'),
(6, '01b', '2004-07-01', '2021-07-14'),
(7, '02a', '2000-02-01', '2021-07-14'),
(8, '02a', '2015-09-11', '2021-07-14'),
(9, '02b', '2001-11-11', '2012-12-11'),
(11, '02b', '2014-10-20', '2019-07-15'),
(12, '02b', '2019-07-16', '2021-07-14'),
(13, '01b', '1999-12-31', '2018-12-31'),
(13, '02a', '2019-01-01', '2021-07-14'),
(14, '02b', '2019-06-03', '2020-06-29'),
(15, '01a', '2007-09-29', '2017-08-30');

-- --------------------------------------------------------

--
-- Estructura Stand-in para la vista `dept_emp_latest_date`
-- (Véase abajo para la vista actual)
--
CREATE TABLE `dept_emp_latest_date` (
`emp_no` int(11)
,`from_date` date
,`to_date` date
);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `dept_manager`
--

CREATE TABLE `dept_manager` (
  `emp_no` int(11) NOT NULL,
  `dept_no` char(4) NOT NULL,
  `from_date` date NOT NULL,
  `to_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `dept_manager`
--

INSERT INTO `dept_manager` (`emp_no`, `dept_no`, `from_date`, `to_date`) VALUES
(5, '01b', '2000-09-30', '2020-01-01'),
(5, '02a', '2020-01-02', '2021-07-14'),
(6, '01b', '2020-01-02', '2021-07-14'),
(7, '02a', '2010-12-01', '2020-01-01'),
(11, '02b', '2016-11-15', '2021-07-14');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `employees`
--

CREATE TABLE `employees` (
  `emp_no` int(11) NOT NULL,
  `birth_date` date NOT NULL,
  `first_name` varchar(14) NOT NULL,
  `last_name` varchar(16) NOT NULL,
  `gender` enum('M','F') NOT NULL,
  `hire_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `employees`
--

INSERT INTO `employees` (`emp_no`, `birth_date`, `first_name`, `last_name`, `gender`, `hire_date`) VALUES
(1, '1986-12-23', 'Jorge  ', 'Garcia', 'M', '2020-01-01'),
(2, '2000-06-15', 'John', 'Smith', 'M', '2020-08-01'),
(3, '1997-03-19', 'Jake', 'Anderson', 'M', '2018-12-12'),
(4, '1960-01-06', 'Jacob', 'Ford', 'M', '1995-03-27'),
(5, '1955-11-30', 'Emilia', 'López', 'F', '1995-03-27'),
(6, '1984-02-28', 'Carmen', 'Brooks', 'F', '2004-07-01'),
(7, '1970-04-22', 'Mary', 'Nichols', 'F', '2000-02-01'),
(8, '1979-10-09', 'Anne', 'Biden', 'F', '2010-09-01'),
(9, '1969-07-31', 'Anthony', 'Keyssar', 'M', '2001-11-11'),
(10, '1990-08-12', 'Diana', 'Browning', 'F', '2010-05-16'),
(11, '1989-09-11', 'Vincent', 'Waller', 'M', '2014-10-20'),
(12, '1981-05-15', 'Anne', 'Wu', 'F', '2008-04-22'),
(13, '1977-12-08', 'Albert', 'Kitroeff', 'M', '1999-12-31'),
(14, '1995-07-03', 'Jennifer', 'Sánchez', 'F', '2019-06-03'),
(15, '1982-09-23', 'Charles', 'Glueck', 'M', '2007-09-29');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `salaries`
--

CREATE TABLE `salaries` (
  `emp_no` int(11) NOT NULL,
  `salary` int(11) NOT NULL,
  `from_date` date NOT NULL,
  `to_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `salaries`
--

INSERT INTO `salaries` (`emp_no`, `salary`, `from_date`, `to_date`) VALUES
(2, 42300, '2020-08-01', '2021-07-14'),
(3, 19801, '2018-12-12', '2020-03-31'),
(3, 33459, '2020-04-01', '2021-07-14'),
(4, 28000, '1995-03-27', '2021-07-14'),
(5, 9950, '1995-03-27', '2021-07-14'),
(6, 8000, '2004-07-01', '2021-07-14'),
(7, 18000, '2000-02-01', '2009-12-31'),
(7, 28751, '2010-01-01', '2021-07-14'),
(8, 35000, '2010-09-01', '2018-06-30'),
(8, 39000, '2018-07-01', '2021-07-14'),
(9, 44400, '2001-11-11', '2021-07-14'),
(10, 21900, '2010-05-16', '2021-07-14'),
(11, 38000, '2014-10-20', '2019-10-01'),
(11, 49575, '2019-10-02', '2021-07-14'),
(12, 15300, '2008-04-22', '2021-07-14'),
(13, 6900, '1999-12-31', '2021-07-14'),
(14, 12100, '2019-06-03', '2021-07-14'),
(15, 32000, '2007-09-29', '2012-04-22'),
(15, 40000, '2012-04-23', '2021-07-14');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `titles`
--

CREATE TABLE `titles` (
  `emp_no` int(11) NOT NULL,
  `title` varchar(50) NOT NULL,
  `from_date` date NOT NULL,
  `to_date` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `titles`
--

INSERT INTO `titles` (`emp_no`, `title`, `from_date`, `to_date`) VALUES
(2, 'BA in Business Administration', '2020-06-13', NULL),
(3, 'BA in Law', '2016-10-28', NULL),
(4, 'BA in Economics', '1985-12-03', NULL),
(5, 'Degree in Mechanical Engineering', '2020-02-02', NULL),
(6, 'BA in Architecture', '2006-08-30', NULL),
(7, 'BA in Psychology', '1994-07-07', NULL),
(8, 'Degree in Computer Science', '2020-03-31', NULL),
(9, 'Degree in Applied Mathematics', '1992-01-01', NULL),
(10, 'Degree in Physics', '2014-06-27', NULL),
(11, 'BA in English Philology', '2020-05-17', NULL),
(12, 'BA in Law', '2003-12-19', NULL),
(13, 'BA in Business Administration', '2000-09-24', NULL),
(14, 'BA in Psychology', '2020-01-10', NULL),
(15, 'BA in Economics', '2005-04-23', NULL);

-- --------------------------------------------------------

--
-- Estructura para la vista `current_dept_emp`
--
DROP TABLE IF EXISTS `current_dept_emp`;

CREATE ALGORITHM=UNDEFINED DEFINER=`nacho`@`localhost` SQL SECURITY DEFINER VIEW `current_dept_emp`  AS SELECT `l`.`emp_no` AS `emp_no`, `d`.`dept_no` AS `dept_no`, `l`.`from_date` AS `from_date`, `l`.`to_date` AS `to_date` FROM (`dept_emp` `d` join `dept_emp_latest_date` `l` on(((`d`.`emp_no` = `l`.`emp_no`) and (`d`.`from_date` = `l`.`from_date`) and (`l`.`to_date` = `d`.`to_date`)))) ;

-- --------------------------------------------------------

--
-- Estructura para la vista `dept_emp_latest_date`
--
DROP TABLE IF EXISTS `dept_emp_latest_date`;

CREATE ALGORITHM=UNDEFINED DEFINER=`nacho`@`localhost` SQL SECURITY DEFINER VIEW `dept_emp_latest_date`  AS SELECT `dept_emp`.`emp_no` AS `emp_no`, max(`dept_emp`.`from_date`) AS `from_date`, max(`dept_emp`.`to_date`) AS `to_date` FROM `dept_emp` GROUP BY `dept_emp`.`emp_no` ;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `departments`
--
ALTER TABLE `departments`
  ADD PRIMARY KEY (`dept_no`),
  ADD UNIQUE KEY `dept_name` (`dept_name`);

--
-- Indices de la tabla `dept_emp`
--
ALTER TABLE `dept_emp`
  ADD PRIMARY KEY (`emp_no`,`dept_no`),
  ADD KEY `dept_no` (`dept_no`);

--
-- Indices de la tabla `dept_manager`
--
ALTER TABLE `dept_manager`
  ADD PRIMARY KEY (`emp_no`,`dept_no`),
  ADD KEY `dept_no` (`dept_no`);

--
-- Indices de la tabla `employees`
--
ALTER TABLE `employees`
  ADD PRIMARY KEY (`emp_no`);

--
-- Indices de la tabla `salaries`
--
ALTER TABLE `salaries`
  ADD PRIMARY KEY (`emp_no`,`from_date`);

--
-- Indices de la tabla `titles`
--
ALTER TABLE `titles`
  ADD PRIMARY KEY (`emp_no`,`title`,`from_date`);

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `dept_emp`
--
ALTER TABLE `dept_emp`
  ADD CONSTRAINT `dept_emp_ibfk_1` FOREIGN KEY (`emp_no`) REFERENCES `employees` (`emp_no`) ON DELETE CASCADE,
  ADD CONSTRAINT `dept_emp_ibfk_2` FOREIGN KEY (`dept_no`) REFERENCES `departments` (`dept_no`) ON DELETE CASCADE;

--
-- Filtros para la tabla `dept_manager`
--
ALTER TABLE `dept_manager`
  ADD CONSTRAINT `dept_manager_ibfk_1` FOREIGN KEY (`emp_no`) REFERENCES `employees` (`emp_no`) ON DELETE CASCADE,
  ADD CONSTRAINT `dept_manager_ibfk_2` FOREIGN KEY (`dept_no`) REFERENCES `departments` (`dept_no`) ON DELETE CASCADE;

--
-- Filtros para la tabla `salaries`
--
ALTER TABLE `salaries`
  ADD CONSTRAINT `salaries_ibfk_1` FOREIGN KEY (`emp_no`) REFERENCES `employees` (`emp_no`) ON DELETE CASCADE;

--
-- Filtros para la tabla `titles`
--
ALTER TABLE `titles`
  ADD CONSTRAINT `titles_ibfk_1` FOREIGN KEY (`emp_no`) REFERENCES `employees` (`emp_no`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
