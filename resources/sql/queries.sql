-- Get number of workers in each department
SELECT
    departments.dept_no,
    departments.dept_name,
    COUNT(dept_emp.emp_no)
FROM
    departments
INNER JOIN dept_emp
ON departments.dept_no = dept_emp.dept_no
GROUP BY departments.dept_no;


-- Get employees in one department
SELECT
    CONCAT(employees.first_name, " ", employees.last_name) as "Emp-name"
    -- dept_emp.dept_no
FROM
    employees
LEFT JOIN dept_emp
ON employees.emp_no = dept_emp.emp_no
WHERE dept_emp.dept_no = "desi";


-- Get employee's full name, salary & departments
SELECT
    employees.first_name,
    employees.last_name,
    salaries.salary,
    departments.dept_name
FROM employees
    JOIN salaries ON employees.emp_no = salaries.emp_no
    JOIN dept_emp ON employees.emp_no = dept_emp.emp_no
    JOIN departments ON departments.dept_no = dept_emp.dept_no;


-- Get id, name, expenses, manager for each department
SELECT
    departments.dept_no,
    departments.dept_name,
    CONCAT(employees.first_name, ' ', employees.last_name) AS "Manager",
    COUNT(dept_emp.emp_no) as 'num-employees',
    SUM(salaries.salary) as 'total-expenses'
FROM
    departments
    JOIN dept_emp ON departments.dept_no = dept_emp.dept_no
    JOIN salaries ON salaries.emp_no = dept_emp.emp_no
    JOIN dept_manager ON dept_manager.dept_no = departments.dept_no
    LEFT JOIN employees ON employees.emp_no = dept_manager.emp_no
GROUP BY departments.dept_no, departments.dept_name, CONCAT(employees.first_name, ' ', employees.last_name);

-- Get all expenses in one department
SELECT
    SUM(salaries.salary) as 'total-expenses'
FROM
    departments
    JOIN dept_emp ON departments.dept_no = "desi"
    JOIN salaries ON salaries.emp_no = dept_emp.emp_no;


-- Sum all incomes from all employees
SELECT
    employees.first_name,
    employees.last_name,
    SUM(salaries.salary) AS "Total-salary"
FROM employees
JOIN salaries ON employees.emp_no = salaries.emp_no
GROUP BY employees.first_name,employees.last_name;
