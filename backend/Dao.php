<?php
require_once 'KLogger.php';

class Dao {

    private $host = "localhost";
    private $db = "justabreeze";
    private $user = "root";
    private $pass = "";
    protected $logger;
    public function __construct () {
        $this->logger = new KLogger ( "log.txt" , KLogger::DEBUG );
    }
    public function getConnection () {
        $this->logger->LogDebug("Getting a connection.");
        try {
        $conn = new PDO("mysql:host={$this->host};dbname={$this->db}", $this->user,
                $this->pass);
        } catch (Exception $e) {
            $this->logger->LogError(__CLASS__ . "::" . __FUNCTION__ . " Database Error " . print_r($e,1));
            echo print_r($e,1);
        exit;
        }
        return $conn;
    }
    public function getEmployee ($userName) {
        $conn = $this->getConnection();
        //TODO
    }
    public function addEmployee ($employee_name, $phone, $email, $restaurant, $position, $username, $password1) {
        $this->logger->LogInfo("Adding Employee " . $employee_name ." username = ". $username);
        $restaurant_id = 0;
        if($restaurant == 'brickyard'){
            $restaurant_id = 1;
        }else if($restaurant == 'brixx'){
            $restaurant_id = 2;
        }else if($restaurant == 'Frontdoor'){
            $restaurant_id = 3;
        }else if($restaurant == 'Legends'){
            $restaurant_id = 4;
        }else if($restaurant == 'Reef'){
            $restaurant_id = 5;
        }
        $conn = $this->getConnection();
        $saveQuery = "insert into employee (employee_name, phone_number, email, password, position, restaurant_id, user_name)
        values (:employee_name, :phone, :email, :password1, :position, :restaurant_id, :username)";
        $q = $conn->prepare($saveQuery);
        $q->bindParam(":employee_name", $employee_name);
        $q->bindParam(":phone", $phone);
        $q->bindParam(":email", $email);
        $q->bindParam(":password1", $password1);
        $q->bindParam(":position", $position);
        $q->bindParam(":restaurant_id", $restaurant_id);
        $q->bindParam(":username", $username);
        $q->execute();
    }
}
