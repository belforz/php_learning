<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <?php
    /*
        $opcao = 14;

        if($opcao==1){
            echo "Adição";
        }
        else if($opcao==2){
            echo "Subtração";
        }
        else if($opcao==3){
            echo "Multiplicação";
        }
        else if($opcao==4){
            echo "Divisão";
        }
        else{
            echo "Opção inválida";
        }
    */
    ?>

    <?php
        /*
        $opcao = 6;

        switch($opcao){
            case 1: 
                echo "Adição";
                break;
            case 2:
                echo "Subtração";
                break;
            case 3:
                echo "Multiplicação";
                break;
            case 4:
                echo "Divisão";
                break;
            default:    
                echo "Opção inválida";                
        }
     */
    ?>

     <?php
        //inicio condição incremento ou decremento
        //for($i=0;$i<=10;$i++){
           // echo "Esse é o número $i <br />";
        //}

        $numero = 5;

        for($i=0;$i<=10;$i++){
            $multiplicacao = $i * $numero;
            echo "<p> $numero * $i = $multiplicacao </p>";
        }
     
     ?>


    
</body>
</html>