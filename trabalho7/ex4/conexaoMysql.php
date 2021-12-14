<?php

function mysqlConnect()
{   
  $db_host = "fdb30.awardspace.net";
    $db_username = "3772295_railson";
    $db_password = "nosliar1010";
    $db_name = "3772295_railson";
 

  $dsn = "mysql:host=$db_host;dbname=$db_name;charset=utf8mb4";

  $options = [
    PDO::ATTR_EMULATE_PREPARES => false, 
    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC, 
  ];

  try {
    $pdo = new PDO($dsn, $db_username, $db_password, $options);
    return $pdo;
  } 
  catch (Exception $e) {
    exit('Ocorreu uma falha na conexão com o BD: ' . $e->getMessage());
  }
}

?>
