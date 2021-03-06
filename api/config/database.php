<?php
class Database{
 
    // specify your own database credentials
    private $host = "172.17.0.2";
    private $db_name = "hospital_db";
    private $username = "root";
    private $password = "superpw";
    private $port = "3306";
    public $conn;
 
    // get the database connection
    public function getConnection(){
 
        $this->conn = null;
 
        try{
            $this->conn = new PDO("mysql:host=" . $this->host . ";port=" . $this->port . ";dbname=" . $this->db_name, $this->username, $this->password);
            $this->conn->exec("set names utf8");
        }catch(PDOException $exception){
            echo "Connection error: " . $exception->getMessage();
        }
 
        return $this->conn;
    }
}
?>
