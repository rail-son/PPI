<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercicio 1</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" 
        rel="stylesheet" 
        integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" 
        crossorigin="anonymous">
    <style>
        div div{
            border: solid 1px gray;
            padding: 10px;
        }
    </style>
</head>
<body>
    <?php
        $cep = $_POST["inputCEP"];
        $logradouro = $_POST["inputLogradouro"];
        $bairro = $_POST["inputBairro"];
        $cidade = $_POST["inputCidade"];
        $estado = $_POST["inputEstado"];

        $cep = htmlspecialchars($cep);
        $logradouro = htmlspecialchars($logradouro);
        $bairro = htmlspecialchars($bairro);
        $cidade = htmlspecialchars($cidade);
        $estado = htmlspecialchars($estado);
        
        echo <<<CAD
        <div class="container row m-2">
            
            <div class="col-md mb-2 mx-1 text-center">$cep</div>
            <div class="col-md mb-2 mx-1 text-center">$logradouro</div>
            <div class="col-md mb-2 mx-1 text-center">$bairro</div>
            <div class="col-md mb-2 mx-1 text-center">$cidade</div>
            <div class="col-md mb-2 mx-1 text-center">$estado</div>
        </div>
    CAD;

    ?>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
</body>
</html>