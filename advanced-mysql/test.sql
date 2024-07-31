UPDATE table_name
SET column1 = value1, column2 = value2, ...
WHERE condition;  


UPDATE customers
SET salt=SUBSTRING(MD5(RAND()), -20)
WHERE customer_id=1;




UPDATE customers
SET pin=AES_ENCRYPT('123', salt)
WHERE customer_id=1;