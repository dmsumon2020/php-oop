--  MySQL Data Types    https://www.w3schools.com/mysql/mysql_datatypes.asp
--  MySQL Operators     https://www.w3schools.com/mysql/mysql_operators.asp


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






