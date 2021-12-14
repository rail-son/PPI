<?php

function checkLogin($pdo, $email, $senha)
{
    $sql = <<<SQL
        SELECT hash_senha
        FROM login_e_senha
        WHERE email = ?
        SQL;

try{
    $stmt = $pdo->prepare($sql);
    $stmt->execute([$email]);
    $row = $stmt->fetch();
    if (!$row)
      return false; 
    else
      return password_verify($senha, $row['hash_senha']);
  } 
  catch (Exception $e) {
    exit('Falha inesperada: ' . $e->getMessage());
  }
}

$errorMsg = "";
if ($_SERVER["REQUEST_METHOD"] == "POST") {

  require "conexaoMysql.php";
  $pdo = mysqlConnect();

  $email = $senha = "";

  if (isset($_POST["email"]))
    $email = $_POST["email"];
  if (isset($_POST["senha"]))
    $senha = $_POST["senha"];

  if (checkLogin($pdo, $email, $senha)) {
    header("location: login_sucess.html");
    exit();
  } else
    $errorMsg = "Dados incorretos";
}
?>
            
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 3</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" 
            rel="stylesheet" 
            integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" 
            crossorigin="anonymous">
        <style>
            *{margin: 0; padding: 0;}
            body{
                background-color: #eeeeee;
            }
            .login{
                font-family: Georgia;
                width: 50%;
                padding: 20px;
                background-color: white;
                border: 0.8px solid #aaa;
                border-radius: 10px;
                position: absolute;
                left: 50%;
                top: 50%;
                transform: translate(-50%, -50%);
            }                
            input{
                display: block;
                margin: 8px 0 15px;
                padding: 8px;
                width: 90%;
                border: 0.5px solid #888;
                border-radius: 4px;            
            }
            input:focus {
                border: 0.5px solid greenyellow;
                box-shadow: 0px 0px 5px green;
                outline: none;
            }
            #modal{
                width: 100vw;
                height: 100vh;
                color: white;
                background-color: rgba(0, 0, 0, .7);
                position: fixed;
                top: 0px;
                left: 0px;
                z-index: 2000;                
            }
            .modal{
                display: block;
            }
            
        </style>
    </head>
    <body class = "container">
        <div class="container modal" >
            <div id = "modal"  class="modal-content align-items-center justify-content-center">
            <svg xmlns="http://www.w3.org/2000/svg" width="60" height="60" color = "red" fill="currentColor" class="bi bi-x-circle" viewBox="0 0 16 16">
                <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"/>
                <path d="M4.646 4.646a.5.5 0 0 1 .708 0L8 7.293l2.646-2.647a.5.5 0 0 1 .708.708L8.707 8l2.647 2.646a.5.5 0 0 1-.708.708L8 8.707l-2.646 2.647a.5.5 0 0 1-.708-.708L7.293 8 4.646 5.354a.5.5 0 0 1 0-.708z"/>
            </svg>
                <br>
                <h3> Erro ao fazer login!</h3>
                <h5> Usuário ou senha incorreta!</h5>
                <br>
                <button type="button" class = "buttonClose btn-danger w-25">Tente novamente</button>
            </div>
        </div>
        <main>
        <div class="login">
            <form action="login.php" method="POST" autocomplete="off">
                
                <div>
                    <label for="email">Email:</label>
                    <input type="text" id="email" name="email">
                </div>
                <div>
                    <label for="senha">Senha:</label>
                    <input type="password" id="senha" name="senha">
                </div>
                <div>
                    <button type="submit" class="btn btn-primary">Entrar</button>
                    <a href="index.html" class = "m-3">Menu de opções</a>
                </div>
            </form>
        </div>
        </main>
            <script>
            window.onload = function(){
            const modal = document.querySelector(".modal") 
            const buttonClose = modal.querySelector(".buttonClose")

            buttonClose.addEventListener("click", function(){
                window.location.href = "/trabalho6/ex3/logon.html"
                })
            }
        </script>
</body>
</html>