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

-- Get department data
SELECT
    departments.dept_no,
    departments.dept_name,
    ARRAY(
        SELECT
            CONCAT(employees.first_name, " ", employees.last_name) as "Emp-name"
        FROM
            employees
        RIGHT JOIN dept_emp
        ON employees.emp_no = dept_emp.emp_no
        WHERE dept_emp.dept_no = "desi"
    ) AS "Test-array"
FROM
    departments;
INNER JOIN dept_emp
ON departments.dept_no = dept_emp.dept_no;

