SELECT columns FROM table_name WHERE
MATCH(columns) AGAINST('terms' IN BOOLEAN MODE);

-- EXAMPLE

-- The following query  a match will be made if 
-- the word database is found and mysql is 
-- not present

SELECT * FROM table1 WHERE
MATCH(columns) AGAINST('+database -mysql' IN BOOLEAN MODE)



-- The following query would look for records 
-- with the phrase Web develop with the word 
-- html being required and the word JavaScript
-- detracting from a match’s relevance:


SELECT * FROM tablename WHERE
MATCH(columns) AGAINST('>"Web develop" +html ~JavaScript' IN BOOLEAN MODE);


-- The term HTML may appear in messages 
-- in many formats, including HTML, 
-- XHTML, or (X)HTML. This Boolean 
-- mode query will find all of those, thanks 
-- to the wildcard character (*).

SELECT subject, body FROM
messages WHERE MATCH(body, subject)
AGAINST('*HTML' IN BOOLEAN MODE);



-- This query first finds all records that 
-- have database, databases, etc. and 
-- normal form, normal forms, etc. in 
-- them. The database* term is required 
-- (as indicated by the plus sign), but 
-- emphasis is given to the normal form 
-- clause (which is preceded by the 
-- greater-than sign)

SELECT subject, body FROM messages
WHERE MATCH (body, subject)
AGAINST('>"normal form"* +database*'
IN BOOLEAN MODE);



SELECT subject, body, MATCH(body, subject) AGAINST('*HTML >XHTML' IN BOOLEAN MODE) AS R FROM
messages WHERE MATCH(body, subject)
AGAINST('*HTML >XHTML' IN BOOLEAN MODE) ORDER BY R DESC;
