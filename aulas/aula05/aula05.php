<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1> Teste</h1>
    <?php
 // $vetor = Array();

  //atribuição de valores a um vetor
//   $vetor[0] = 20;
//   $vetor[1] = 50;
//   $vetor[2] = 5;
//   $vetor[3] = 92;
//   $vetor[4] = 42;
//   $vetor[5] = 52;
//   $vetor[6] = 12;
//   $vetor[7] = 120;
//   $vetor[8] = 120;
//   $vetor[9] = 120;

//   echo "O tamanho do vetor é: " .count($vetor) . "<br />";

//   //Exibição do vetor 
//   for($i=0;$i<count($vetor);$i++){
//    echo $vetor[$i] . "<br />";
//   }

  $vetor = array(20,50,5,25,8,9,154841547,87564874,784487454,15472158,877541850);
  
// somente os pares
for ($i = 0; $i < count($vetor); $i++) {
    // somente os pares
    if ($i % 2 == 0) {
        echo $vetor[$i] . "<br />";
    }
}


?>

</body>
</html>