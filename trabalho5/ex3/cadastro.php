<?php

if (empty($_POST['email']) || empty($_POST['senha'])) {
            header("Location: erroLogin.php"); 
            exit();
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
<body class="container">
<?php
                 
        $email = $_POST['email'];
        $senha = $_POST['senha'];
        $senhaHash = password_hash($senha, PASSWORD_DEFAULT);
        
        salvaString($email, '../email.txt');
        salvaString($senhaHash, "../senhaHash.txt");
        function salvaString($string, $arquivo){
            $arq = fopen($arquivo, "w");
            fwrite($arq, $string);
            fclose($arq);
    }
     ?>
        <div class="container modal" >
            <div id = "modal"  class="modal-content align-items-center justify-content-center">
                <svg xmlns="http://www.w3.org/2000/svg" width="60" height="60" color = greenyellow fill="currentColor" class="bi bi-check2-circle" viewBox="0 0 16 16">
                    <path d="M2.5 8a5.5 5.5 0 0 1 8.25-4.764.5.5 0 0 0 .5-.866A6.5 6.5 0 1 0 14.5 8a.5.5 0 0 0-1 0 5.5 5.5 0 1 1-11 0z"/>
                    <path d="M15.354 3.354a.5.5 0 0 0-.708-.708L8 9.293 5.354 6.646a.5.5 0 1 0-.708.708l3 3a.5.5 0 0 0 .708 0l7-7z"/>
                </svg>
                <h3> Cadastro Concluído!</h3>
                <br>
                <button type="button" class = "buttonClose btn-success w-25">Fechar</button>
                
            </div>
        </div>
        <main>
        <div class="login">
            <form action="cadastro.php" method="POST" autocomplete="off">
                <div>
                    <label for="usuario">Email:</label>
                    <input type="text" id="usuario" name="email">
                </div>
                <div>
                    <label for="senha">Senha:</label>
                    <input type="password" id="senha" name="senha">
                </div>
                <div>
                    <button type="submit" class="btnCad btn btn-primary">Cadastrar</button>
                </div>
            </form>
        </div>
        </main>
    <script>
            window.onload = function(){
            const modal = document.querySelector(".modal") 
            const buttonClose = modal.querySelector(".buttonClose")

            buttonClose.addEventListener("click", function(){
                window.location.href = "/trabalho5/ex3/index.html"
                })
            }
        </script>

</body>
</html>