<?php
class Database
{
    public $hostname = "localhost:3306";
    public $username = "root";
    public $password = "";
    public $db = "ecom";
    private $mysqli = "";
    private $tableName="demo";
 

     public $message = array(); //

    private $result = array();

    function __construct()
    {
        $this->connect = new mysqli($this->hostname, $this->username, $this->password, $this->db);
        if ($this->connect) {
            die("connect to database: " . $this->db);
        }
    }

    public function insert()
    {
         $sql = "INSERT INTO $tableName (id , username , 'password') VALUE (1 , 'pratiksha' , '123')";
        //   $sql = "INSERT INTO $tableName ()"
        if($this->$connect){
            echo("record is successfully");
        }
       
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

$result = $db->login("amit@gmail.com", "1234", 'users');
print_r($result);

   $db->select('purchase');
//    Database $obj = new Database();





?>