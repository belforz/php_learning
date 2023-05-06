

<?php  
    $filme = $_POST['txFilme'];
    $ano = $_POST['txAno'];
    $diretor = $_POST['txDiretor'];
    $genero = $_POST['txGenero'];
    $review = $_POST['txReview'];

    
    include("conexao.php");

    $stmt = $pdo->prepare("insert into tbFilme(id, nomeFilme, anoFilme, generoFilme, diretorFilme, reviewFilme)  
    values(not null,'$filme','$ano','$diretor','$genero', '$review')");	    
	$stmt ->execute();    
   
    
?>