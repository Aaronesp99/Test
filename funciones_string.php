<?php 
echo "<h1>FUNCIONES DE CADENA</h1><br><br>";

$txtexplode= "cuatro/tres/primera/explode/prueba";
print_r(explode("/",$txtexplode));

echo "<br><hr><br>";

$arrayimplode=['uno', 'dos', 'tres','cinco'];
print_r(implode(' - ', $arrayimplode));

echo "<br><hr><br>";

print_r(lcfirst("Minúscula"));

echo "<br><hr><br>";

print_r(ucfirst("mayuscula"));

echo "<br><hr><br>";

echo "||". ltrim(" Hola   ")."<br>";

echo rtrim(" Hola   ")."||";

echo "<br><hr><br>";

// setlocale(LC_TIME, "es_PE");
// $fecha= "20-04-2019";
// echo strftime("%A %d de %B de %Y", $fecha);

echo str_pad("9872", 10, "_", STR_PAD_BOTH);

echo "<br><hr><br>";

echo str_repeat("hola - ", 4);

echo "<br><hr><br>";

echo str_replace("a", "-", "Prueba de esta funcion", $count). "<br>";
echo $count;

echo "<br><hr><br>";

echo str_shuffle("prueba");

echo "<br><hr><br>";

print_r(str_split("PRUEBA",2));

// print_r($_SERVER['REQUEST_URI']);
?>