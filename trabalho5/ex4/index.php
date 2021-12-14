<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 4</title>
    <style>
        .tabela{
            border: 1px solid gray;
            padding: 10px;
        }
    </style>
</head>
<body>

<?php
        function carregaString($arquivo){
         $arq = fopen($arquivo, "r");
         $string = fgets($arq);
         fclose($arq);
         return $string;
        } 

        $email = carregaString("../email.txt");
        $senha = carregaString("../senhaHash.txt");

        $email = htmlspecialchars($email);
        $senha = htmlspecialchars($senha);

        echo <<<HTML
        <table>
            <tr>
                <th class = "tabela">Email</th>
                <th class = "tabela">Senha</th>
            </tr>
            <tr>
                <td class = "tabela"> $email </td>
                <td class = "tabela"> $senha </td>
            </tr>
        </table>
        HTML;
    ?>
</body>
</html>