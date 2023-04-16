<?php
namespace App\Repository;
use PDO;
use PDOException;

class DatabaseRepository {
    private string $databaseName = "ekosystem";
    private string $userName = "root";
    private string $password = "";
    private string $hostName = "127.0.0.1:3306";
    private string $dataSourceName;
    private $db;

    public function __construct(){
        $this->dataSourceName = "mysql:host=$this->hostName;dbname=$this->databaseName;charset=UTF8";
    }

    public function getConnection()
    {
        if (!isset($this->db)) {
            try {
                $this->db = new PDO($this->dataSourceName, $this->userName, $this->password);
            } catch (\PDOException $e) {
                $errorMessage = $e->getMessage();
                exit();
            }
        }
        return $this->db;
    }
}