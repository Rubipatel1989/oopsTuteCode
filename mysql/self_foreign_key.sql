
A self-referencing foreign key is a foreign key that references the same table. This is often used to represent 
hierarchical data structures such as organizational charts, category trees, or comment threads.

CREATE TABLE employees (
    id INT PRIMARY KEY,
    name VARCHAR(100),
    manager_id INT,
    FOREIGN KEY (manager_id) REFERENCES employees(id)
);

SELECT e.name AS employee_name, m.name AS manager_name
FROM employees e
LEFT JOIN employees m ON e.manager_id = m.id;