USE Practical_Exam;
/* To Get/Retrieved the correct rows, get the foreign key ID of the Employees Department ID in the department table 
and find the department ID That is IT together with the hiring dates which are on or before 2018. */

SELECT * FROM employees FULL OUTER JOIN departments ON employees.department_id = departments.id WHERE departments.id IN (SELECT id FROM departments WHERE departments.department = 'IT') 
AND employees.date_hired >= '2018-08-10 00:00:00';  