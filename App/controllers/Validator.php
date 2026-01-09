<?php
namespace App\Controllers;


class Validator {
    private $errors = [];
    
    public function validateEmail($email) {
        if (empty($email)) {
            $this->errors[] = "L'email est requis";
            return false;
        }
        
        $regex = "/^[\w.-]+@[\w]+\.(com|org|fr)$/";
        if (!preg_match($regex, $email)) {
            $this->errors[] = "Entrer un email sous forme de \"exemple@email.com\"";
            return false;
        }
        
        return true;
    }
    
    public function validatePassword($password) {
        if (empty($password)) {
            $this->errors[] = "Le mot de passe est requis";
            return false;
        }
        
        return true;
    }
    
    public function validateRequired($fields) {
        foreach ($fields as $field => $value) {
            if (empty($value)) {
                $this->errors[] = "Remplir tous les champs";
                return false;
            }
        }
        return true;
    }
    
    public function getErrors() {
        return $this->errors;
    }
    
    public function hasErrors() {
        return !empty($this->errors);
    }
    
    public function clearErrors() {
        $this->errors = [];
    }
}
?>