<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Grid CSS</title>
</head>
<style>
    .contenedor{
        background: #b2b9ffc2;
        width: 800px;
        max-width: 1000px;
        border: 4px solid #000;
        margin: auto;
        font-size: 24px;
        text-align: center;
    }
    .contenedor > div{
        background: #24bbe6;
        color: #fff;
        display: block;
        box-shadow: 2px 2px 10px rgba(0,0,0,.25); 
        /* padding: 30px */
    }

    .contenedor{
        display: grid;
        grid-template-columns: 1fr 1fr 1fr;
        grid-template-rows: auto;
        grid-gap: 15px
    }
    .contenedor .item{
        background: #7565d8e0;
        grid-column-start: 1;
        grid-column-end: -1;
    }
</style>
<body>
    <div class="contenedor">
        <div class="item">1</div>
        <div class="">2</div>
        <div class="">3</div>
        <div class="">4</div>
        <div class="">5</div>
        <div class="">6</div>
        <div class="">7</div>
        <div class="">8</div>
        <div class="">9</div>
        <div class="">10</div>
        <div class="">11</div>
        <div class="">12</div>
    </div>
</body>
</html>