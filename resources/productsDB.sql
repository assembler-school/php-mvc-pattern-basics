-- mysql -u root -p employee < C:\xampp\htdocs\DB\mysql-basics\employees.sql
-- source C:\xampp\htdocs\php-mvc-pattern-basics\resources\productsDB.sql

DROP DATABASE IF EXISTS productsdb;
CREATE DATABASE IF NOT EXISTS productsdb;
USE productsdb;

DROP TABLE IF EXISTS products;
                    --  burgers,
                    --  salads,
                    --  drinks,
                    --  vegan,
                    --  glutenfree,


CREATE TABLE products (
    prod_id INT NOT NULL AUTO_INCREMENT,
    prod_name CHAR(30) NOT NULL,
    prod_price FLOAT  NOT NULL,
    prod_state ENUM ('available','not_available')  NOT NULL,
    PRIMARY KEY (prod_id)
);

INSERT INTO products (prod_name, prod_price) values ('Pizza Margherita', 8.75);
INSERT INTO products (prod_name, prod_price) values ('Pizza Carbonara', 9.75);
INSERT INTO products (prod_name, prod_price) values ('Pizza Napolitana', 10.55);
INSERT INTO products (prod_name, prod_price) values ('Birra Moretti', 2.75);
INSERT INTO products (prod_name, prod_price) values ('Estrella Damm', 1.85);



-- CREATE TABLE departments (
--     dept_no     CHAR(4)         NOT NULL,
--     dept_name   VARCHAR(40)     NOT NULL,
--     PRIMARY KEY (dept_no),
--     UNIQUE  KEY (dept_name)
-- );

-- CREATE TABLE dept_manager (
--     emp_no       INT             NOT NULL,
--     dept_no      CHAR(4)         NOT NULL,
--     from_date    DATE            NOT NULL,
--     to_date      DATE            NOT NULL,
--     FOREIGN KEY (emp_no)  REFERENCES employees (emp_no)    ON DELETE CASCADE,
--     FOREIGN KEY (dept_no) REFERENCES departments (dept_no) ON DELETE CASCADE,
--     PRIMARY KEY (emp_no,dept_no)
-- );

-- CREATE TABLE dept_emp (
--     emp_no      INT             NOT NULL,
--     dept_no     CHAR(4)         NOT NULL,
--     from_date   DATE            NOT NULL,
--     to_date     DATE            NOT NULL,
--     FOREIGN KEY (emp_no)  REFERENCES employees   (emp_no)  ON DELETE CASCADE,
--     FOREIGN KEY (dept_no) REFERENCES departments (dept_no) ON DELETE CASCADE,
--     PRIMARY KEY (emp_no,dept_no)
-- );

-- CREATE TABLE titles (
--     emp_no      INT             NOT NULL,
--     title       VARCHAR(50)     NOT NULL,
--     from_date   DATE            NOT NULL,
--     to_date     DATE,
--     FOREIGN KEY (emp_no) REFERENCES employees (emp_no) ON DELETE CASCADE,
--     PRIMARY KEY (emp_no,title, from_date)
-- );

-- CREATE TABLE salaries (
--     emp_no      INT             NOT NULL,
--     salary      INT             NOT NULL,
--     from_date   DATE            NOT NULL,
--     to_date     DATE            NOT NULL,
--     FOREIGN KEY (emp_no) REFERENCES employees (emp_no) ON DELETE CASCADE,
--     PRIMARY KEY (emp_no, from_date)
-- );

-- CREATE OR REPLACE VIEW dept_emp_latest_date AS
--     SELECT emp_no, MAX(from_date) AS from_date, MAX(to_date) AS to_date
--     FROM dept_emp
--     GROUP BY emp_no;

-- # shows only the current department for each employee
-- CREATE OR REPLACE VIEW current_dept_emp AS
--     SELECT l.emp_no, dept_no, l.from_date, l.to_date
--     FROM dept_emp d
--         INNER JOIN dept_emp_latest_date l
--         ON d.emp_no=l.emp_no AND d.from_date=l.from_date AND l.to_date = d.to_date;