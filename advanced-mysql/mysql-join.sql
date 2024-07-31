------------------------------------------------
------------------------------------------------
------------------------------------------------
------------------------------------------------
--- MySQL JOIN

SELECT what_columns if_else_condition FROM table1 JOIN_TYPE table2 JOIN_CLAUSE;



SELECT forum_id FROM messages INNER JOIN forums ON messages.forum_id=forums.forum_id;

-- EXAMPLE
SELECT m.message_id, m.subject, f.name FROM messages AS m 
INNER JOIN forums AS f
ON m.forum_id = f.forum_id
WHERE f.name = 'MySQL';

SELECT m.message_id, m.subject, f.name FROM messages AS m 
INNER JOIN forums AS f
USING (forum_id)
WHERE f.name = 'MySQL'

SELECT m.subject, 
DATE_FORMAT(m.date_entered, '%M %D, %Y') AS Date 
FROM users AS u 
INNER JOIN messages AS m
USING (user_id)
WHERE u.username = 'funny man';



SELECT what_columns FROM tableA 
➝ JOIN_TYPE tableB JOIN_CLAUSE 
➝ JOIN_TYPE tableC JOIN_CLAUSE



SELECT u.username, m.subject, f.name FROM users AS u
INNER JOIN messages AS m USING(user_id)
INNER JOIN forums AS f USING(forum_id)
ORDER BY date_entered DESC LIMIT 5;




-- JOINS 3 Tables
SELECT what_columns FROM tableA 
JOIN_TYPE tableB JOIN_CLAUSE 
JOIN_TYPE tableC JOIN_CLAUSE



