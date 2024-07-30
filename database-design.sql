A primary Key must have the following characteristics 

1) Always have a value (they cannot be NULL)
2) Have a value that remains the same (never changes)
3) Have a unique value for each record in a table
4) Ideally, your primary key should always be an integer, which results in better MySQL performance.

######################################################

First Normal Form (1NF):

1) Each column must contain only one value (this is sometimes described as being atomic or indivisible).
2) No table can have repeating groups of related data


Second Normal Form (2NF):
1) Identify any non-key columns that aren’t dependent upon the table’s primary key.
2) Create new tables accordingly