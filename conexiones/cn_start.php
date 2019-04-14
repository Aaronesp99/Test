<?php
require_once 'Cn_mysqli.php';
require_once 'Aulas.php';

// $con = new Cn();
// $res= $con->Conexion();
$aulas= new Aulas();
$res = $aulas->listaAulas();
print_r($res);
?>