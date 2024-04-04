<?php 

// Dependency Injection (DI) is a design pattern used in software development to achieve Inversion of Control (IoC) 
// and decouple the dependencies between components. It is not a specific design pattern itself but rather a 
// technique used to implement other design patterns such as the Strategy pattern, Factory pattern, 
// or Observer pattern.

class Database {
    public function query($sql) {
        // Database query implementation
    }
}

class UserRepository {
    protected $db;

    public function __construct(Database $db) {
        $this->db = $db;
    }

    public function getUsers() {
        return $this->db->query("SELECT * FROM users");
    }
}

// Usage
$db = new Database();
$userRepository = new UserRepository($db);
$users = $userRepository->getUsers();






