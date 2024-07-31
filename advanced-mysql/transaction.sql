START TRANSACTION;
SELECT * FROM accounts;

UPDATE accounts
SET balance = (balance-100)
WHERE account_id=2;

UPDATE accounts
SET balance = (balance+100)
WHERE account_id=1;

ROLLBACK; or COMMIT;

-- You can create savepoints in transactions:
SAVEPOINT savepoint_name;
-- Then you can roll back to that point:
ROLLBACK TO SAVEPOINT savepoint_name;
