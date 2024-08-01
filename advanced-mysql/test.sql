SELECT which_columns FROM which_table WHERE condition(s);

SELECT user_id FROM users WHERE email='tonyhassan@gmail.com';
SELECT user_id FROM users WHERE (email='don@authors.com');
SELECT user_id FROM users WHERE (email='tonyhassan@gmail.com' AND pass=SHA('$p', 512) )

