<?php 

class Medico
{
  public $nome_medico1;
  public $telefone_medico1;

  public $nome_medico2;
  public $telefone_medico2;

  public $nome_medico3;
  public $telefone_medico3;
  
  function __construct($nome_medico1, $telefone_medico1, $nome_medico2, $telefone_medico2, $nome_medico3, $telefone_medico3)
  {
    $this->nome_medico1 = $nome_medico1;
    $this->telefone_medico1 = $telefone_medico1; 

    $this->nome_medico2 = $nome_medico2;
    $this->telefone_medico2 = $telefone_medico2; 

    $this->nome_medico3 = $nome_medico3;
    $this->telefone_medico3 = $telefone_medico3; 
  }
}

require "conexaoMysql.php";
$pdo = mysqlConnect();


$especialidade = $_GET['especialidade'];

 try{
     $sql = <<<SQL
     SELECT nome_medico, telefone_medico, especialidade_medico 
     FROM medicos
     SQL;

     $stmt = $pdo->query($sql);
     
 } catch(Exception $e) {
    exit('Ocorreu uma falha: ' . $e->getMessage());
  }

    $resultado = $stmt->fetchAll();
    
    $i = 1;
    foreach($resultado as $row){ 
      if($especialidade == $row['especialidade_medico']){
          if($i == 1){
            $nome_medico1 = htmlspecialchars($row['nome_medico']);        
            $telefone_medico1 = htmlspecialchars($row['telefone_medico']);
          }
          if($i == 2){
            $nome_medico2 = htmlspecialchars($row['nome_medico']);        
            $telefone_medico2 = htmlspecialchars($row['telefone_medico']);
          }
          if($i == 3){
            $nome_medico3 = htmlspecialchars($row['nome_medico']);        
            $telefone_medico3 = htmlspecialchars($row['telefone_medico']);
          }
          ++$i;
      }
      } 
    $medico = new Medico($nome_medico1, $telefone_medico1, $nome_medico2, $telefone_medico2, $nome_medico3, $telefone_medico3); 
    echo json_encode($medico);

 
?>