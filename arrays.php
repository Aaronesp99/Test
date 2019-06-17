<?php
$array = array();

$a = 15;
$b = 12;
$c = 5;
$d = 7;

// $array[]=$a;
// $array[]=$b;
// $array[]=$c;
// $array[]=$d;

// sort($array);
if($a<$b){
    $array[0]=$a;
    $array[1]=$b;
}else{
    $array[0]=$b;
    $array[1]=$a;
}
if($b<$c){
    $array[2]=$c;
}elseif($a<$c){
    $array[2]=$c;
}else{
    $array[1]=$c;
    $array[2]=$a;
}
if($c<$d){
    $array[3]=$d;
}else{
    $array[2]=$c;
    $array[3]=$d;
}

print_r($array);