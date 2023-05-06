<?php

    $id = $_GET['id'];

    //echo $id;

    include("conexao.php");

    $stmt = $pdo->prepare("delete from tbFilme where idFilme = $id");	    
	$stmt ->execute();    


?>