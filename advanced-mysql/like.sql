-----------------------------------
-----------------------------------
-----------------------------------
------Using LIKE and NOT LIKE------
-----------------------------------
-----------------------------------

SELECT columns FROM table_name WHERE column LIKE KEYWORD

-- EXAMPLES
SELECT * FROM users WHERE last_name LIKE 'Smith%'

SELECT first_name, email FROM users WHERE email LIKE '%@yahoo.com'; 

SELECT * FROM users  WHERE last_name LIKE '_smith%' -- The wildcard characters can be used at the front and/or back of a string in your queries.

