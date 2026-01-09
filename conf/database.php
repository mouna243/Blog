<?php
namespace Conf;

use PDO;
use PDOException;

class Database
{
    private static $instance = null;
    private $conn;
    
    public function __construct()
    {
        $env = parse_ini_file(__DIR__ . "/../conf/.env");

        $db = $env["DB-NAME"];
        $pw = $env["DB-PW"];
        $host = $env["DB-HOST"];
        $root = $env["DB-ROOT"];
        
        try {
            // Syntaxe PDO corrigée
            $dsn = "mysql:host=$host;dbname=$db;charset=utf8";
            $this->conn = new PDO($dsn, $root, $pw);
            $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $this->conn->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
            $this->conn->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
        } catch (PDOException $e) {
            // Message d'erreur plus clair
            die("Erreur de connexion à la base de données : " . $e->getMessage());
        }
    }
    
   
    
    public static function getInstance()
    {
        if (self::$instance === null) {
            self::$instance = new Database();
        }
        return self::$instance;
    }
    
    public function getConnection()
    {
        return $this->conn;
    }
    
    public function prepare($sql)
    {
        return $this->conn->prepare($sql);
    }
    
    
    public function quote($string)
    {
        return $this->conn->quote($string);
    }
    
   
    public function lastInsertId()
    {
        return $this->conn->lastInsertId();
    }
    
    public function beginTransaction()
    {
        return $this->conn->beginTransaction();
    }
    
    public function commit()
    {
        return $this->conn->commit();
    }
    
    public function rollBack()
    {
        return $this->conn->rollBack();
    }
    
    // Méthode pour exécuter des requêtes facilement
    public function query($sql, $params = [])
    {
        $stmt = $this->prepare($sql);
        $stmt->execute($params);
        return $stmt;
    }
}
?>