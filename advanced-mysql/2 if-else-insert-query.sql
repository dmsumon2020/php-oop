INSERT INTO table_name (column1) VALUES (IF (condition, return_if _true, return_if _false));

-- EXAMPLE
INSERT INTO people (gender) VALUES (IF (gender='M', 'Male', 'Female'));