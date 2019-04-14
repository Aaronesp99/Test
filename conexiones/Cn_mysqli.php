<?php

class Cn{
    private $cn;
    private $host;
    private $user;
    private $pass;
    private $db;

    public function __construct(){
        $this->host = "localhost";
        $this->user = "root";
        $this->pass = "";
        $this->db = "aulas";
    }

    public function Conexion(){
        $mysqli=$this->cn = new mysqli($this->host, $this->user, $this->pass, $this->db);
        if($mysqli->connect_errno){
            $res = $mysqli->connect_error;
        }else{
            $res = $mysqli;
        }
        return $res;
    }
}

?>