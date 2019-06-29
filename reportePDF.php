<?php
require_once 'vendor/autoload.php';

$mpdf = new \Mpdf\Mpdf();

ob_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>
    <h1>Nuevo reporte</h1>
    <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Nobis beatae unde expedita facere eos atque fugiat ipsam
         sequi aliquid explicabo minima veniam aut praesentium, tempora quas, repudiandae modi architecto laboriosam?</p>
    <br>
    <p>
        Lorem ipsum dolor sit amet consectetur adipisicing elit. Repellat corporis ex optio. Animi a eligendi
        quas optio magni tempora unde itaque dolore? Illum quod, alias sed officiis nesciunt numquam eligendi.
    </p>
</body>
</html>

<?php
$html = ob_get_clean();
$mpdf->WriteHTML($html);
$mpdf->Output();
?>