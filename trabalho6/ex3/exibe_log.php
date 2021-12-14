<?php

require "conexaoMysql.php";
$pdo = mysqlConnect();

try {

  $sql = <<<SQL
  SELECT email, hash_senha
  FROM login_e_senha
  SQL;

  $stmt = $pdo->query($sql);
} catch (Exception $e) {
  exit('Ocorreu uma falha: ' . $e->getMessage());
}
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 4</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-CuOF+2SnTUfTwSZjCXf01h7uYhfOBuxIhGKPbfEJ3+FqH/s6cIFN9bGr1HmAg4fQ" crossorigin="anonymous">
    <style>
    body {
      padding-top: 2rem;
    }
    </style>
</head>
<body>

<div class="container">
    <h3>Clientes Cadastrados</h3>
    <table class="table table-striped table-hover">
      <tr>
        <th>Email</th>
        <th>SenhaHash</th>
      </tr>
      
<?php
    while ($row = $stmt->fetch()) {

        $email = htmlspecialchars($row['email']);

        echo <<<HTML
            <tr>
                <td>$email</td>
                <td>{$row['hash_senha']}</td>
            </tr>
        HTML;
    }
    ?>
</table>
<a href="index.html">Menu de opções</a>
</body>
</html>