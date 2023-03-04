<?php
$media_1 = floatval($_POST['A']);
$media_2 = floatval($_POST['B']);
$media_3 = floatval($_POST['C']);
$media_4 = floatval($_POST['D']);
$media_resul= floatval($media_1 + $media_2 + $media_3 + $media_4) / 4;
$media_veri="";
    
   

if($media_resul <6){
    $media_veri='<span style="color:red">Reprovado</span>';

}
else if($media_resul >=6 ){
    $media_veri='<span style="color:blue">Reprovado</span>';

}

else{
    $media_veri="Inválido";
}
echo "Sua nota é :$media_resul e voce está $media_veri";
?>