--  MySQL Data Types    https://www.w3schools.com/mysql/mysql_datatypes.asp
--  MySQL Operators     https://www.w3schools.com/mysql/mysql_operators.asp
--  MySQL Functions     https://www.w3schools.com/mysql/mysql_ref_functions.asp


-- An ENUM column can store only one value of a 
-- possible several thousand, while SET allows 
-- for several of up to 64 possible values. 



-- The other fields will be mostly VARCHAR, 
-- since their lengths will differ from 
-- record to record.



-- the word cat in a VARCHAR(10) column 
-- requires 4 bytes of space (the length 
-- of the string plus 1), but in a CHAR(10)
-- column, that same word requires 10 bytes 
-- of space. Hence, generally speaking, 
-- VARCHAR columns tend to require less 
-- disk space than CHAR columns



-- The length attribute for numeric types 
-- does not affect the range of values that can 
-- be stored in the column. Columns defined as 
-- TINYINT(1) or TINYINT(20) can store the 
-- exact same values. Instead, for integers, the 
-- length dictates the display width; for decimals, 
-- the length is the total number of digits that 
-- can be stored.





-- If a string field will always be of a 
-- set length (e.g., a state abbreviation), 
-- use CHAR; otherwise, use VARCHAR. 




-- If you need absolute precision when 
-- using non-integers, DECIMAL is preferred 
-- over FLOAT or DOUBLE.




-- You can also flag the number types as 
-- ZEROFILL, which means that any extra room 
-- will be padded with zeros (ZEROFILLs are 
-- also automatically UNSIGNED).







-- To finish defining your columns:

-- 1) Identify your primary key.

-- 2) Identify which columns cannot have a NULL value.

-- 3) Make any numeric type UNSIGNED if it won’t ever store negative numbers

-- 4) Establish the default value for any column. (if possible)



CREATE DATABASE databasename;

USE databasename;

CREATE TABLE tablename (
column1name type SIGNED/ UNSIGNED NULL/NOT NULL AUTO_INCREMENT,
column2name description,
PRIMARY KEY (column1name);


CREATE TABLE users(
    user_id MEDIUMINT UNSIGNED NOT NULL AUTO_INCREMENT,
    first_name VARCHAR(20) NOT NULL,
    last_name VARCHAR(40) NOT NULL,
    email VARCHAR(60) NOT NULL,
    pass CHAR(40) NOT NULL,
    registration_date DATETIME NOT NULL,
    PRIMARY KEY (user_id)
);

-- How to See tables
SHOW TABLES; 

-- How to see columns

SHOW COLUMNS FROM table_name;


-- inserting Records

INSERT INTO table_name (column1, column2, column3) VALUES (value1, value2, value3);
INSERT INTO table_name VALUES (value1, value2, value3); -- This will insert values in every columns

-- MySQL also allows you to insert multiple 
-- rows at one time, separating each record 
-- by a comma

INSERT INTO table_name (column1, column2) VALUES (val1, val2), (val3, val4), (val5, val6); -- It's not SQL standard

-- Example

INSERT INTO users (first_name, last_name, email, pass, registration_date)
VALUES ('Larry', 'Ulman', 'email@gmail.com', SHA1('pasword'), NOW());

INSERT INTO users VALUES(NULL, 'Din', 'Sumon', 'dmsumon@gmail.com', SHA1('pasword'), NOW());

INSERT INTO users (first_name, last_name, email, pass, registration_date)
VALUES  ('Rocky', 'Vai', 'rocky@gmail.com', SHA1('pasword2'), NOW()),
        ('Raihan', 'Alam', 'raihan@gmail.com', SHA1('pasword3'), NOW()),
        ('Vicky', 'Koshal', 'vicky@gmail.com', SHA1('pasword4'), NOW()),
        ('Russel', 'Crowe', 'russel@gmail.com', SHA1('pasword5'), NOW());








-- Selecting Data


SELECT which_columns FROM which_table;

SELECT * FROM which_table;

SELECT which_columns FROM which_table WHERE condition(s);


-- Example

SELECT * FROM users WHERE last_name = 'Simpson';
SELECT first_name FROM users WHERE last_name = 'Simpson';
SELECT first_name, last_name FROM users WHERE last_name = 'Simpson';
SELECT * FROM users WHERE email IS NULL;
SELECT * FROM users WHERE email='';
SELECT user_id, first_name, last_name FROM users WHERE pass = SHA1('mypass');
SELECT first_name, last_name FROM users WHERE (user_id < 10) OR (user_id > 20);


-- Using LIKE and NOT LIKE

SELECT * FROM users WHERE last_name LIKE 'Smith%'

SELECT first_name, email FROM users WHERE email LIKE '%@yahoo.com'; 

SELECT * FROM users  WHERE last_name LIKE '_smith%' -- The wildcard characters can be used at the front and/or back of a string in your queries.




-- Sorting Query Results
SELECT * FROM tablename ORDER BY column1, column2;
SELECT * FROM tablename WHERE conditions ORDER BY column;

-- EXAMPLE

SELECT first_name, last_name FROM users ORDER BY last_name;
SELECT first_name, last_name FROM users ORDER BY last_name DESC;
SELECT first_name, last_name FROM users ORDER BY last_name ASC, first_name ASC;

SELECT * FROM users WHERE last_name != 'Simpson' ORDER BY registration_date DESC;






-- Limiting Query Results

SELECT * FROM tablename LIMIT x;
SELECT * FROM tablename LIMIT x, y; -- y records returned, starting at x.

-- To have records 11 through 20  returned, you would write
SELECT * FROM tablename LIMIT 10, 10

-- Final
SELECT * FROM table_name WHERE condition(s) LIKE condition ORDER BY column1, column2 LIMIT x;








-- Updating Data

UPDATE tablename SET column2=value WHERE column5=value LIMIT x;


-- EXAMPLE
SELECT * FROM users WHERE first_name='Din Muhammad' AND last_name='Sumon';

UPDATE users SET email='dmsumon@yahoo.com' WHERE user_id=27;







-- Deleting a DATA
DELETE FROM tablename WHERE condition;


--- The preferred way to empty a table is to use TRUNCATE:

TRUNCATE TABLE tablename;

-- To delete all of the data in a table, as well as the table itself, use DROP TABLE:

DROP TABLE tablename;

-- To delete an entire database, including every table therein and all of its data, use
DROP DATABASE databasename;





-- Using Functions
SELECT * FROM table_name;

SELECT CONCAT(first_name, ', ', last_name) FROM users;


SELECT CONCAT(last_name, ', ', first_name) AS Name FROM users ORDER BY Name;

SELECT LENGTH(last_name) AS L, last_name FROM users ORDER BY L DESC LIMIT 1;


SELECT DATE(registration_date) AS Date FROM users ORDER BY registration_date DESC LIMIT 1;

SELECT DAYNAME(registration_date) AS Weekday FROM users ORDER BY registration_date ASC LIMIT 1;

SELECT LAST_DAY(CURDATE()), MONTHNAME(CURDATE());


SELECT email, DATE_FORMAT(registration_date, '%a %b %e %Y')
AS Date FROM users
ORDER BY registration_date DESC
LIMIT 5;

