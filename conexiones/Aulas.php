<?php 

class Aulas{
    
    public function listaAulas(){
        $cn=new Cn();
        $mysqli=$cn->Conexion();
        $res=$mysqli->query("SELECT * FROM aulas");
        return $res;
    }
}
?>