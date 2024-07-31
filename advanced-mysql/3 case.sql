SELECT CASE col1 WHEN value1 THEN 
return_this ELSE return_that END 
FROM table;

-- EXAMPLE
SELECT CASE gender WHEN 'M' THEN 'Male' ELSE 'Female' END FROM people;


-- Case with Condition
SELECT col1, CASE WHEN condition THEN 'value1' ELSE 'value2' END FROM table_name; 


-- EXAMPLE
SELECT message_id, CASE WHEN 
date_entered > NOW() THEN 'Future' 
ELSE 'PAST' END AS Posted FROM 
messages;




