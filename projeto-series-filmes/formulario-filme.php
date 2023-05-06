<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
    <body>

        <section>

            <form action="filme-salvar.php" method="post">      
                <div>
                    <input type="text" placeholder="Nome" name="txFilme" />
                </div>		

                <div>
                    <input type="text" placeholder="Ano" name="txAno" />
                </div>		

                <div>
                    <input type="text" placeholder="Diretor" name="txDiretor" />
                </div>
                
                <div>
                    <input type="text" placeholder="Genero" name="txGenero" />
                </div>

                <div>
                    <textarea placeholder="Review" name="txReview"></textarea>
                </div>

                <div>
                    <input type="submit" value="Salvar" />
                </div>
            </form>
            
        </section>
        
    </body>
</html>