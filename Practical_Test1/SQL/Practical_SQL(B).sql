USE Practical_Exam;
/* To Get/Retrieved the correct rows use the function BETWWEEN to find the range of the two datetime in the employees table. */

SELECT * FROM employees WHERE date_hired BETWEEN '01/01/2017 00:00:00' AND  '12/31/2018 00:00:00';