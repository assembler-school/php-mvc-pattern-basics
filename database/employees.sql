-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 18-07-2021 a las 14:21:55
-- Versión del servidor: 10.4.19-MariaDB
-- Versión de PHP: 8.0.7

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

--
-- Volcado de datos para la tabla `departments`
--

INSERT INTO `departments` (`dept_no`, `dept_name`) VALUES
('2', 'Finance'),
('3', 'Management'),
('5', 'Marketing'),
('1', 'Production'),
('4', 'R&D');

--
-- Volcado de datos para la tabla `dept_emp`
--

INSERT INTO `dept_emp` (`emp_no`, `dept_no`, `from_date`, `to_date`) VALUES
(1, '1', '2014-10-09', '2021-04-25'),
(2, '2', '2015-02-10', '2021-03-15'),
(3, '3', '2015-05-10', '2021-05-21'),
(5, '5', '2014-04-22', '2021-03-02'),
(6, '1', '2008-12-22', '2021-06-18'),
(8, '3', '2008-11-02', '2017-04-06'),
(10, '5', '2008-09-05', '2017-08-19'),
(11, '1', '2007-01-08', '2020-02-19'),
(12, '2', '2009-07-06', '2020-02-04'),
(13, '3', '2006-10-31', '2016-10-22'),
(14, '4', '2008-06-06', '2019-09-04'),
(15, '5', '2007-12-22', '2018-10-13'),
(16, '1', '2009-11-17', '2020-12-29');

--
-- Volcado de datos para la tabla `dept_manager`
--

INSERT INTO `dept_manager` (`emp_no`, `dept_no`, `from_date`, `to_date`) VALUES
(1, '3', '2008-11-22', '2018-08-15'),
(2, '3', '2006-04-26', '2018-08-25'),
(3, '3', '2009-03-07', '2017-11-29'),
(5, '3', '2007-09-12', '2020-04-24');

--
-- Volcado de datos para la tabla `employees`
--

INSERT INTO `employees` (`emp_no`, `birth_date`, `first_name`, `last_name`, `gender`, `hire_date`) VALUES
(1, '1992-06-14', 'Maribel', 'Serafina Elizond', 'M', '2021-01-21'),
(2, '1993-10-30', 'Maribel', 'Chuy Barros', 'F', '2018-12-02'),
(3, '1993-12-30', 'Maribel', 'Delia toto GAG G', 'M', '2021-03-03'),
(5, '1992-08-26', 'Venceslás', 'Vinicio Domíngue', 'F', '2016-08-02'),
(6, '1990-09-04', 'María', 'Domínguez Lozano', 'F', '2018-11-24'),
(8, '1993-05-12', 'Julio César', 'Cipriano Barros', 'M', '2018-01-18'),
(10, '1992-12-02', 'Sebastián', 'África Rojas', 'M', '2020-06-10'),
(11, '1994-05-03', 'Pepita', 'Severiano Cabrer', 'F', '2018-04-21'),
(12, '1994-05-25', 'Nayeli', 'Baldo Martinez', 'F', '2020-01-06'),
(13, '1992-10-10', 'Pilar', 'Máximo Blanco', 'F', '2016-10-10'),
(14, '1991-06-09', 'Jaime', 'Tatiana Gutiérre', 'M', '2019-10-18'),
(15, '1990-07-27', 'Osvaldo', 'Alondra Benítez', 'M', '2021-05-20'),
(16, '1991-02-12', 'Marisol', 'San Antonio', 'F', '2019-05-14');

--
-- Volcado de datos para la tabla `salaries`
--

INSERT INTO `salaries` (`emp_no`, `salary`, `from_date`, `to_date`) VALUES
(1, 35013, '2008-06-09', '2020-07-19'),
(2, 34871, '2006-12-28', '2018-03-31'),
(3, 9316, '2008-02-04', '2020-04-03'),
(5, 26344, '2009-02-03', '2020-12-06'),
(6, 35335, '2010-08-01', '2021-05-17'),
(8, 32934, '2008-09-01', '2021-01-02'),
(10, 41828, '2010-04-23', '2017-03-04'),
(11, 12386, '2009-08-13', '2018-11-19'),
(12, 6540, '2007-09-22', '2017-06-24'),
(13, 18750, '2010-02-27', '2018-09-22'),
(14, 28424, '2006-01-18', '2021-05-20'),
(15, 22669, '2006-04-07', '2020-07-19'),
(16, 21053, '2009-08-30', '2017-01-04');

--
-- Volcado de datos para la tabla `titles`
--

INSERT INTO `titles` (`emp_no`, `title`, `from_date`, `to_date`) VALUES
(1, 'degree', '2020-06-08', '2021-07-09'),
(2, 'degree', '2020-08-09', '2021-06-24'),
(3, 'degree', '2020-07-08', '2021-07-12'),
(5, 'degree', '2020-04-30', '2021-07-05'),
(6, 'degree', '2014-09-11', '2018-06-27'),
(8, 'degree', '2010-09-17', '2019-07-18'),
(10, 'degree', '2011-04-21', '2018-04-19'),
(11, 'degree', '2013-12-18', '2020-03-31'),
(12, 'degree', '2012-11-08', '2018-01-19'),
(13, 'degree', '2012-10-26', '2020-05-22'),
(14, 'degree', '2012-02-24', '2018-10-31'),
(15, 'degree', '2014-09-06', '2017-06-29'),
(16, 'degree', '2013-12-03', '2018-05-23');

-- --------------------------------------------------------

--
-- Estructura para la vista `current_dept_emp`
--
DROP TABLE IF EXISTS `current_dept_emp`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `current_dept_emp`  AS SELECT `l`.`emp_no` AS `emp_no`, `d`.`dept_no` AS `dept_no`, `l`.`from_date` AS `from_date`, `l`.`to_date` AS `to_date` FROM (`dept_emp` `d` join `dept_emp_latest_date` `l` on(`d`.`emp_no` = `l`.`emp_no` and `d`.`from_date` = `l`.`from_date` and `l`.`to_date` = `d`.`to_date`)) ;

-- --------------------------------------------------------

--
-- Estructura para la vista `dept_emp_latest_date`
--
DROP TABLE IF EXISTS `dept_emp_latest_date`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `dept_emp_latest_date`  AS SELECT `dept_emp`.`emp_no` AS `emp_no`, max(`dept_emp`.`from_date`) AS `from_date`, max(`dept_emp`.`to_date`) AS `to_date` FROM `dept_emp` GROUP BY `dept_emp`.`emp_no` ;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
