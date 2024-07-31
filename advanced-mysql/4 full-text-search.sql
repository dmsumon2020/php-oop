SELECT columns FROM table_name 
WHERE MATCH (columns) 
AGAINST (terms);

-- EXAMPLES

SELECT subject, body FROM messages
WHERE MATCH (subject, body)
AGAINST('database');

SELECT subject, body FROM messages
WHERE MATCH (body, subject)
AGAINST('html xhtml');


SELECT subject, body, MATCH (body,subject) AGAINST('database') AS R
FROM messages 
WHERE MATCH (body, subject) 
AGAINST('database');




SELECT subject, body, MATCH (body,subject) AGAINST('database') AS R
FROM messages 
WHERE MATCH (body, subject) 
AGAINST('database');


