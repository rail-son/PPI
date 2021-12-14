<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercicio 2</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" 
        rel="stylesheet" 
        integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" 
        crossorigin="anonymous">
    <style>
        a{
            font-size: 20px;
            text-align: center;
        }
        td{
            padding: 20px;
            margin: 30px;
        }
    </style>
</head>
<body class = "container">
    <table class="table table-dark">
        <tr>
            <th class="col-4">#</td>
            <th class="col-4">PRODUTO</td>
            <th class="col-4">DESCRIÇÃO</td>
    </tr>

    <?php
    //array dos produtos
    $produtos[0] = "Detergente";
    $produtos[1] = "Papel toalha";
    $produtos[2] = "Sabao em po";
    $produtos[3] = "Amaciante";
    $produtos[4] = "Saco de Lixo";
    $produtos[5] = "Alcool";
    $produtos[6] = "Creme Dental";
    $produtos[7] = "Shampoo";
    $produtos[8] = "Sabonete";
    $produtos[9] = "Agua Sanitaria";
    //array da descricao
    $descricao_produtos[0] = "Detergente Líquido Brilhante Roupas Brancas e Coloridas 3l";
    $descricao_produtos[1] = "Papel Toalha Kitchen Com 2 Rolos De 60 Folhas Cada Softys";
    $descricao_produtos[2] = "Sabao em Po com Dosador 1 Kg com Tampa Azul";
    $descricao_produtos[3] = "Amaciante Concentrado Comfort Original 1L";
    $descricao_produtos[4] = "Saco De Lixo Lixofran Preto 100 Litros Com 5 Unidades";
    $descricao_produtos[5] = "Alcool Líquido 70° 1 Litro";
    $descricao_produtos[6] = "Creme Dental Colgate Tripla Ação 50g";
    $descricao_produtos[7] = "Shampoo Clear Anticaspa Ice Cool Menthol Leve - 400ml";
    $descricao_produtos[8] = "Sabonete Lux Suave 4x85gr Buque De Jasmim Caixa Com 4";
    $descricao_produtos[9] = "Agua Sanitária com 2 Litros Ypê";
    
    //recebe a quantidade informada no parametro
    $qtdd_produtos = $_GET["qde"]; //caso nao tiver parametro, eh mostrado um erro
    //inicia o contador com 0 para ser uma variavel global. 
    $num = 0;
    //conta os numeros sequenciais da tabela
    $contador = 1;
    
    //for iniciado ate quando atingir a quantidade informada no parametro
    for ($i = 0; $i < $qtdd_produtos; $i++){
    //declaracao das variaveis globais
    global $num, $contador;
    //variavel recendo valor aleatorio de 0 a 9
    $num = rand(0, 9);
    //adicionando uma linha na tabela com o numero aleatorio de produto e da descricao
    echo <<<HTML
    <tr>
        <th class="col-4">$contador</td> 
        <td class="col-4">$produtos[$num]</td>
        <td class="col-4">$descricao_produtos[$num]</td>
    </tr>
    HTML;
    //contador recebe +1 para o proximo ser atualizado(se existir).
    $contador++;
}
    
    ?>
    </table>
    <br>
    <a href="index.php?qde=1"><p><strong>Ir para parâmetro "index.php?qde=1"</strong></p><a>
    <br>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>

</body>
</html>