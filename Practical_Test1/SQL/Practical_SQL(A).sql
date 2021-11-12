USE Practical_Exam;
/* Get/Retrieve the salary id of the row with the maximum or largest in the salary table, 
and get the foreign key ID of the Employees salary ID to join the two tables needed to get the correct data.*/

SELECT * FROM employees FULL OUTER JOIN salary ON employees.salary_id = salary.id WHERE salary IN (SELECT MAX(salary)FROM salary);  