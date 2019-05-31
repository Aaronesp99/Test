<?php 

class Aulas{
    
    public function listaAulas(){
        $cn=new Cn();
        $mysqli=$cn->Conexion();
        $res=$mysqli->prepare("SELECT * FROM aulas");
        $res->execute();
        if($res->errno>0){
            $json = $res->errno. "msg:" .$res->error;
        }else{
            // $myrow=$res->bind_result($col1,$col2,$col3,$col4,$col5,$col6,$col7,$col8,$col9,$col0, $a,$b,$c,$d,$e);
            // $myrow=$res->fetch();
            $res->store_result();
            print_r($res->num_rows);
            exit;
            // $myrow=$rs->fetch_all(MYSQLI_ASSOC);
            $json= $myrow;  

        }
        return $json;

    }
}
?>