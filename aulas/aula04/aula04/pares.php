<!DOCTYPE html>
<html lang="en">
<head>

    <title>Document</title>
</head>
<body>
    <?php
        /*for($i=0; $i <=100; $i+=2){
            echo $i . "<br/>";

        }
        */

        /*for($i=0; $i<=100; $i++){
            if($i%2==0)
            echo $i . "<br/>";

        }
        */
        $i = 0;
        while($i<=100){
            if($i%2==0){
                echo "<p style='color:#f00'> $i </p>";
            }
            else{
                echo "<p style='color:#00f'> $i </p>";
            }
            $i++;
        }
    
    ?>
</body>
</html>