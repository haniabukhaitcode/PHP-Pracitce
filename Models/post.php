<?php
//refer to 
// https://t4tutorials.com/left-join-in-php-source-code/ 
class Post {

    //DB stuff
    private $conn;
    private $table = users;
    //Post Properties
    public $id;
    public $first_name;
    public $skill_id;
    public $skill_name;
    public $title;
    public $body;
    public $created_at;

    //Constructor class equivalent
    public function __construct($db) {
        $this->$conn = $db;
    }
    // Get Posts
    public function read() {
        $query = "SELECT c.name as skill_name, p.id, p.category_id, p.title, p.body, p.created_at users"
                . "FROM $this->table p LEFT JOIN skills c ON p.skill_id = c.id ORDER BY p.created_at DESC";


        //prepare statement
        $statement = $this->conn->prepare($query);
        //execute statement
        $statement->execute();
        return statement();
    }

}
