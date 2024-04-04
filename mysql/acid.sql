ACID (Atomicity, Consistency, Isolation, Durability) properties are a set of principles that guarantee reliable 
transactions. These properties ensure that database transactions are processed reliably even in the presence of 
errors, hardware failures, or concurrent transactions.

1. Atomicity: Atomicity ensures that a transaction is treated as a single "all-or-nothing" unit of work. 
    This means that either all operations within the transaction are completed successfully and the transaction is 
    committed, or none of the operations are completed and the transaction is rolled back. There is no partial completion.
2. Consistency: Consistency ensures that a transaction brings the database from one valid state to another. 
    This means that any data written to the database must be valid according to all defined rules, constraints, 
    and relationships. If a transaction violates any of these rules, the entire transaction is rolled back, and the 
    database is left unchanged.
3. Isolation: Isolation ensures that the intermediate state of a transaction is invisible to other transactions. 
    Each transaction operates as if it is the only transaction running on the database, even though other transactions
    may be running concurrently. Isolation prevents the effects of incomplete transactions from being visible to other transactions until the transaction is completed and committed.
4. Durability: Durability ensures that once a transaction is committed, its effects are permanent, 
    even in the event of a system failure. This means that the changes made by the transaction are stored in non-volatile storage (e.g., disk) and will persist even if the database system crashes or restarts.