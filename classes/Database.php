<?php

class Database {
    private $server = "localhost";
    private $username = "root";
    private $password = ""; //MAMP, use "root"
    private $db_name = "the_company";

    protected $conn; //connection

    public function __construct(){
        $this->conn = new mysqli($this->server, $this->username, $this->password, $this->db_name);

        if($this->conn->connect_error){
            die("unable to connect to database: ".$this->conn->connect_error);
        }
    }
}

?>