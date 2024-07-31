SELECT what_columns if_else_condition FROM table1 JOIN_TYPE table2 JOIN_CLAUSE;

SELECT u.username, IF (COUNT(message_id)>0, COUNT(message_id), 'This user has no post yet') AS Posts
FROM users AS u LEFT JOIN messages AS m USING(user_id)
GROUP BY u.user_id;