/*  query for the list of people and their level of education 
    for people who work in departments where
    the sum of the salaries of the employees that comprise them is greater than
    250,000. */
/* Pregunta con group by y anidación. */
use evalart;
select
    lastname,
    appx_educationlevel.descriptionn
from
    APPX_employee  INNER JOIN appx_educationlevel ON APPX_employee.educationlevel_id = appx_educationlevel.id
where
    salary > 250 order by
    lastname;
