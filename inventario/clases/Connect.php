<?php
class Connect{

    private static $instance;
    private  static $connection;
    private static $result;
    private function __construct(){}
    private function __clone(){}

    public static function getInstance(){
        if(self::$instance = null){

            self::$instance = new Connect();
            
        };

        return self::$instance;
    }
   

    public  static function query(string $query){

        self::$connection = new PDO("mysql:host=localhost;dbname=inventario;charset=utf8","root","");
        
        self::$result = self::$connection->prepare($query);

        //if(!self::$result)die($result->errorInfo());

        self::$result->execute();
        
        return self::$result;
    }

    public function __destruct(){
        self::$connection->closeCursor();
        self::$connection = null;
    }
    


}