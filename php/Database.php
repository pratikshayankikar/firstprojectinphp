<?php
class Database
{
    public $hostname = "localhost";
    public $username = "root";
    public $password = "";
    public $db = "ecom";
    private $mysqli = "";
 

    public $message = array(); //

    private $result = array();

    function __construct()
    {
        $this->connect = new mysqli($this->hostname, $this->username, $this->password, $this->db);
        if (!$this->connect) {
            die("Could not connect to database: " . $this->db);
        }
    }

    public function insert()
    {
        // $sql = "INSERT INTO $tableName (c1 , c2 , c3 , c4 , c5 , c6) VALUE (V1 , V2 , V3)";
        // $sql = "INSERT INTO $tableName ()"
    }


    public function login($username, $password, $tableName)
    {
        $sql = "select * from $tableName WHERE username = '$username' and password = '$password'";
        $exe = mysqli_query($this->connect, $sql);
        // $this->result = $exe->fetch_all(MYSQLI_ASSOC);
        if ($exe->num_rows > 0) {
            array_push($this->message, 1);
        } else {
            array_push($this->message , 0);
        }

       return $this->message;
    }
}

$db = new Database();

// $result = $db->login("amit@gmail.com", "1234", 'users');
// print_r($result);

// $db->select('purchase');
// Database $obj = new Database();





?>