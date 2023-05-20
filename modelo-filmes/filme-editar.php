<?php

    $id = $_POST['idFilme'];
    $nome = $_POST['nomeFilme'];
    $sinopse = $_POST['sinopse'];
    $ano = $_POST['ano'];
    $diretor = $_POST['diretor'];
    $genero = $_POST['genero'];
    $linkTrailer = $_POST['linkTrailer'];
    $imagemFilme = $_POST['imagemFilme'];


    //echo $id;

    include("conexao.php");

    $stmt = $pdo->prepare(
        "update filmes set
        nomeFilme = '$nome',
        anoFilme = '$ano',
        diretor = '$diretor',
        sinopse = '$sinopse',
        linkTrailer = '$linkTrailer',
        linkImagem = '$imagemFilme',
        where idFilme = '$id';
        "
        
    );	    
	$stmt ->execute();    

    header("location:gerenciar.php"); 

?>