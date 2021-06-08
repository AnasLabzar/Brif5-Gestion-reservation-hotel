<?php

// class Dbh {
//     private $host = "localhost";
//     private $user = "root";
//     private $pwd = "";
//     private $dbn = "hotel";

//     protected function connect(){
//         $dsn = 'mysql:host='. $this->host. ';dbn=' .$this->dbn;
//         $pdo = new PDO($dsn, $this->user, $this->pwd);
//         $pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
//         return $pdo;
//         // if($pdo==true){
//         //     echo"true";

//         // }else{
//         //     echo"false";
//         // } 
//         try{

//         }catch
//     }
// }

class Db
{

    protected $db;

    function __construct()
    {
        try {
            $this->db = new PDO("mysql:host=localhost;db=hotel", "root", "");
            $this->db->exec("set names utf8");
            $this->db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_WARNING);
            return $this->db;
        } catch (\PDOException $th) {
            throw $th;
        }
    }


    public function connect()
    {
    }
}
