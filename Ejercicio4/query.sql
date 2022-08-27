/*  query for the list of people and their level of education 
    for people who work in departments where
    the sum of the salaries of the employees that comprise them is greater than
    250,000. */
use evalart;
select lastname, salary from APPX_employee
INNER JOIN appx_educationlevel 
ON APPX_employee.educationlevel_id = appx_educationlevel.id 
 where salary >  25000000
order by lastname;

