<?php

class RequestResponse
{
 public $success;
 public $destination;
 function __construct($success, $destination)
 {
 $this->success = $success;
 $this->destination = $destination;
 }
}

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
    $response = new RequestResponse(true, "login_sucess.html");
  } else{
    $response = new RequestResponse(false, '');  
}

echo json_encode($response);
}
?>