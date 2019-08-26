<?php

// Following Link 
// https://www.w3resource.com/php/pdo/php-pdo.php#DTPDO
class Database {

//db params equivalent to java private classes
    private $host = "localhost";
    private $db_name = "PHPSQL";
    private $username = "root";
    private $password = "root";
    private $conn;

//db connect
    public function connect() {
        //equivalent to Javascript this.foo
        $this->conn = null;


//php data object similar to JavaScript error catcher but without Async/await 
        try {
            $this->conn = new PDO("mysql:host= " . $this->host . ";dbname " . $this->db_name, $this->username, $this->password);
            //Does the attribute refere to keys or values of private functions? (Question);
            $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch (PDOException $e) { //PHP Data Object Exception
            echo 'Connection Error: ' . $e->getMessage();
        }
        return $this->$conn;
    }

}

//PDOException give the error with root path? (Question)

// for PDO EXCEPTIONS and ATTR refer too
// https://www.php.net/manual/en/pdo.error-handling.php