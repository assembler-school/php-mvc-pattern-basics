-- Insert employees entries
INSERT INTO employees (emp_no, birth_date, first_name, last_name, gender) 
VALUES
(1, '1990-11-03', 'Marc', 'Sola', 'M'),
(2, '1991-01-04', 'Chris', 'Redfield', 'M'),
(3, '1992-12-20', 'Claire', 'Redfield', 'F'),
(4, '1995-03-03', 'Jill', 'Valentine', 'F'),
(5, '1991-11-03', 'Leon', 'Kennedy', 'M');

-- Insert travels entries
INSERT INTO travels (tr_no, emp_no, tr_destination, going_date, return_date) 
VALUES
(1, 1, 'Spain', '2021-01-04', '2021-01-11'),
(2, 1, 'Portugal', '2021-02-04', '2021-02-10'),
(3, 2, 'France', '2020-01-04', '2020-01-11'),
(4, 2, 'United Kingdom', '2019-02-14', '2021-01-21'),
(5, 3, 'Netherlands', '2018-03-02', '2018-03-11'),
(6, 3, 'USA', '2020-04-04', '2021-04-11'),
(7, 4, 'Colombia', '2019-01-04', '2021-01-10'),
(8, 4, 'Bolivia', '2017-07-04', '2017-07-11'),
(9, 5, 'Hungary', '2021-06-14', '2021-06-21'),
(10, 5, 'Russia', '2018-05-02', '2018-05-11'),
(11, 1, 'Poland', '2020-03-02', '2020-03-11');