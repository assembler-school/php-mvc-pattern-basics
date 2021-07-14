-- This script is meant to create a database from scratch  
-- with all its tables to use it in the MVC pattern project

DROP DATABASE IF EXISTS employees_MVC;
CREATE DATABASE IF NOT EXISTS employees_MVC;
USE employees_MVC;

SELECT 'CREATING DATABASE STRUCTURE' as 'INFO';

DROP TABLE IF EXISTS employees,
                     travels;

CREATE TABLE employees (
    emp_no      INT             NOT NULL,
    birth_date  DATE            NOT NULL,
    first_name  VARCHAR(14)     NOT NULL,
    last_name   VARCHAR(16)     NOT NULL,
    gender      ENUM ('M','F')  NOT NULL,
    PRIMARY KEY (emp_no)
);

CREATE TABLE travels (
    emp_no          INT             NOT NULL,
    tr_no           INT             NOT NULL,
    tr_destination  VARCHAR(20)     NOT NULL,
    going_date      DATE            NOT NULL,
    return_date     DATE            NOT NULL,
    FOREIGN KEY (emp_no)  REFERENCES employees (emp_no)    ON DELETE CASCADE,
    PRIMARY KEY (emp_no, tr_no)
);