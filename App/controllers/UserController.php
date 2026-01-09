<?php


namespace App\Controllers;
use App\Controllers\Validator ;
use conf\Database;

// User.php
class User {
    private $db;
    private $validator;
    
    public function __construct() {
        $this->db = Database::getInstance();
        $this->validator = new Validator();
    }
    
    public function login($email, $password) {
        // Validation
        $fields = ['email' => $email, 'password' => $password];
        
        if (!$this->validator->validateRequired($fields)) {
            return $this->validator->getErrors();
        }
        
        if (!$this->validator->validateEmail($email)) {
            return $this->validator->getErrors();
        }
        
        $query = "SELECT email, password FROM users WHERE email = ?";
        $stmt = $this->db->prepare($query);
        $stmt->bind_param("s", $email);
        $stmt->execute();
        $result = $stmt->get_result();
        $user = $result->fetch_assoc();
        
  
        
        return ["L'email ou le mot de passe est incorrect"];
    }
    
    public function findByEmail($email) {
        $query = "SELECT * FROM users WHERE email = ?";
        $stmt = $this->db->prepare($query);
        $stmt->bind_param("s", $email);
        $stmt->execute();
        $result = $stmt->get_result();
        
        return $result->fetch_assoc();
    }
}
