
<?php 
$peso = $_POST['txPeso'];

if ($peso > 100){
    echo "<body style='background-color: red'>";
}

?>

<body>
    
<?php
 $nome = $_POST['txNome'];
 $idade = $_POST['txIdade'];
 $verificacao = "";
 $verificacao1 = "";
 
 if ($idade <= 17 ){
     $verificacao= "menor de idade";
 }

 else {
     $verificacao = "Maior de idade";
 }

 if ($peso > 100){
    $verificacao1= "Acima do peso, fazer regime!";
 }

 else {
    $verificacao1="Voce está na media";
 }

  echo "Seu nome é : $nome <br />
        idade é:    $idade <br />
        voce tem: $peso <br />
        você é:  $verificacao <br />
        voce está: $verificacao1 "

?>

<?php 
    if ($peso >100) {
        echo "</body>";
    }
    
    ?>