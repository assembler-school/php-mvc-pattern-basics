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
