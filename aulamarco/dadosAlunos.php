<?php
 $nome = $_POST['txNome'];
$idade =$_POST['txIdade'];
$verificacao="";
echo "Seu nome é: $nome e idade: $idade"; 

if ($idade <=10){
    $verificacao= "Criança";
    //pode ser usado echo nesse lugar e chupar um cu
}
elseif ($idade >=11 and $idade<=17 ){
    $verificacao= "Você é menor de idade";
}
else{
    $verificacao="Maior de idade";
}
 echo "Seu nome é : $nome , idade equals = $idade e você é $verificacao"; 

?>