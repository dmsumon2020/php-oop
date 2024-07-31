-- Adds a new index on c
ALTER TABLE t ADD INDEX i (c)

ALTER TABLE table_name ADD index_type index_name (columns). 

-- EXAMPLES
ALTER TABLE messages ADD FULLTEXT (body, subject);