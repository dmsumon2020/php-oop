SELECT which_columns FROM which_table WHERE condition(s);


SELECT first_name, last_name, DATE_FORMAT(registration_date, '%d %b, %Y') FROM users LIMIT 10;


UPDATE table_name
SET column1 = value1, column2 = value2, ...
WHERE condition; 


UPDATE users SET first_name='Bibi', last_name='Ayesha', email='ayesha@gmail.com' WHERE user_id='2';


SELECT COUNT(user_id) FROM users;

INSERT INTO users (first_name, last_name, email, pass, registration_date)
VALUES  ('Din M', 'Sumon', 'dmsumon@gmail.com', SHA1('123'), NOW());



SELECT first_name FROM users WHERE pass=SHA1('123');