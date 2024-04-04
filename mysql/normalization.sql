Normalization is the process of organizing a database to reduce redundancy and dependency by dividing large tables
into smaller, related tables. This helps to minimize data anomalies, such as update anomalies, insertion anomalies, 
and deletion anomalies, and improves data integrity.

There are several normal forms, each with its own rules and requirements. The most commonly used normal forms are:

1. First Normal Form (1NF): Requires that each column in a table contains atomic values (values that cannot be 
    divided further). It eliminates repeating groups within a table.
2. Second Normal Form (2NF): Requires that the table is in 1NF and all non-key attributes are fully functional 
    dependent on the primary key. It eliminates partial dependencies.
3. Third Normal Form (3NF): Requires that the table is in 2NF and all non-key attributes are non-transitively 
    dependent on the primary key. It eliminates transitive dependencies.