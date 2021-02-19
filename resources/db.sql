DROP DATABASE IF NOT EXISTS MVC_Pattern_Basics;
CREATE DATABASE IF NOT EXISTS MVC_Pattern_Basics;

USE MVC_Pattern_Basics;

SELECT 'CREATING DATABASE STRUCTURE' as 'INFO';



DROP TABLE IF EXISTS employees,
                    travel;

/*!50503 set default_storage_engine = InnoDB */;
/*!50503 select CONCAT('storage engine: ', @@default_storage_engine) as INFO */;

CREATE TABLE employees (
    emp_no      INT             NOT NULL AUTO_INCREMENT,
    first_name  VARCHAR(14)     NOT NULL,
    last_name   VARCHAR(16)     NOT NULL,
    gender      ENUM ('M','F')  NOT NULL,
    PRIMARY KEY (emp_no)
);

CREATE TABLE travel (
    emp_no      INT             NOT NULL AUTO_INCREMENT,
    travel_name   VARCHAR(40)     NOT NULL,
    from_date    DATE            NOT NULL,
    to_date      DATE            NOT NULL,
    FOREIGN KEY (emp_no) REFERENCES employees (emp_no) ON DELETE CASCADE,
    PRIMARY KEY (emp_no, from_date)
);

INSERT INTO employees (first_name, last_name, gender) VALUES
('Mary', 'Rich', 'F'),
('Adam', 'Anthony', 'M'),
('Laith', 'Perry', 'F'),
('Malcolm', 'Weeks', 'M'),
('Jerome', 'Lewis', 'M'),
('Reuben', 'Montgomery', 'M'),
('Bruce', 'Salas', 'M'),
('Jesse', 'Clay', 'F'),
('Stewart', 'Tate', 'M'),
('Ezra', 'Figueroa', 'F'),
('Mary', 'Adams', 'F'),
('William', 'Young', 'M'),
('Dora', 'Flowers', 'F'),
('Richard', 'Jacobs', 'M'),
('Kyle', 'Hull', 'F'),
('Adam', 'Tailor', 'F');

INSERT INTO travel VALUES
(1, 'Berlin', '2020-06-09', '2020-10-03'),
(2, 'Madrid', '2020-06-23', '2020-11-09'),
(3, 'Paris', '2020-06-09', '2020-11-14'),
(4, 'London', '2020-11-03', '2021-02-18'),
(5, 'New York',  '2020-11-03', '2021-02-18'),
(6, 'Barcelona',  '2020-05-24', '2020-07-09'),
(7, 'Bogota', '2020-12-07', '2021-02-18'),
(8, 'Madrid', '2020-07-04', '2021-02-18'),
(9, 'Rome', '2020-05-07',  '2020-11-10'),
(10, 'London',  '2020-08-30', '2021-02-18'),
(11, 'New York', '2020-10-04', '2021-02-18'),
(12, 'Barcelona', '2021-02-07', '2021-02-18'),
(13, 'Madrid', '2021-01-27', '2021-02-18'),
(14, 'Malaga',  '2021-02-03', '2021-02-18'),
(15, 'Alicante', '2021-02-12', '2021-02-18'),
(16, 'Madrid', '2020-10-09', '2021-02-18');

INSERT INTO travel VALUES
(2, 'Berlin', '2020-11-09', now()),
(3, 'Madrid', '2020-11-14', now()),
(6, 'Madrid',  '2017-05-04', '2020-05-24'),
(8, 'Paris', '2013-07-16', '2020-07-04'),
(8, 'New York', '2008-10-13', '2013-07-16');