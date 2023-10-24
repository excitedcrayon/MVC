<?php 

Trait Database {

    protected $conn;

    public function __construct(){
        try{
            $this->conn = new PDO("mysql:host=".DBHOST.";dbname=".DBNAME, DBUSER, DBPASSWORD);
            $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            // if($this->conn){
            //     echo "DB Connection successful";
            // }
        }catch(PDOException $e){
            echo "DB exception: $e";
        }
        return $this->conn;
    }

    public function query($query, $data = []){
        $stmt = $this->conn->prepare($query);
        $check = $stmt->execute($data);
        if($check){
            $result = $stmt->fetchAll(PDO::FETCH_OBJ);
            if(is_array($result) && count($result)){
                return $result;
            }
        }
        return false;
    }

}