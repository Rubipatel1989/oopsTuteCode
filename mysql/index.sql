In MySQL, an index is a data structure that improves the speed of data retrieval operations on a database 
table at the cost of additional space and decreased performance on write/delete/update operations. 
Indexes are created using one or more columns of a table and can be used to quickly locate data without having
to search every row in a table.

When we create an index on a column, MySQL creates a separate data structure that maps the values of 
that column to the physical location of the corresponding rows in the table. 
This allows MySQL to quickly locate the rows that match a given value or range of values in the indexed column.

There are 5 types

1. Indexes
2. Unique
3. Primary
4. Full text
5. SPATIAL