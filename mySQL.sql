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