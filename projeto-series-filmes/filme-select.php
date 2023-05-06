<?php include("conexao.php"); ?>

<?php

  $id = $_GET['id'];

  $stmt = $pdo->prepare("select * from tbFilme where idFilme='$id'");	
  $stmt ->execute();
  
  $row = $stmt ->fetch(PDO::FETCH_BOTH);

  return $row;
   
  
?>