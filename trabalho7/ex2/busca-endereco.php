<?php

class Endereco
{
  public $rua;
  public $bairro;
  public $cidade;

  function __construct($rua, $bairro, $cidade)
  {
    $this->rua = $rua;
    $this->bairro = $bairro; 
    $this->cidade = $cidade;
  }
}

require "conexaoMysql.php";
$pdo = mysqlConnect();

$cep = $_GET["cep"];
$cep_banco = '';
try {
  $sql = <<<SQL
  SELECT cep, rua, bairro, cidade
  FROM endereco
  SQL;

  $stmt = $pdo->query($sql);
} catch (Exception $e) {
  exit('Ocorreu uma falha: ' . $e->getMessage());
}

while ($row = $stmt->fetch()) {
    if($cep == $row['cep']){
      $rua = htmlspecialchars($row['rua']);
      $bairro = htmlspecialchars($row['bairro']);
      $cidade = htmlspecialchars($row['cidade']);
      $cep_banco = $cep;
    }
}

if($cep != $cep_banco){
  $rua ='';
  $bairro = '';
  $cidade = '';
}

$endereco1 = new Endereco($rua, $bairro, $cidade);

$enderecos = array(
  $cep_banco => $endereco1
);

$cep = $_GET['cep'] ?? '';
  
$endereco = array_key_exists($cep, $enderecos) ? 
  $enderecos[$cep] : new Endereco('', '', '');
  
echo json_encode($endereco);

?>