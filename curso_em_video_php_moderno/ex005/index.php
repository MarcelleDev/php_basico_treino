<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercicio PHP</title>
</head>
<body>
    <?php 
         $valor1 = $_GET['v1'] ?? 0 ;
         $valor2 = $_GET['v2'] ?? 0 ;

    ?>
    <main>
        <form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="get"></form>
        <label for="v1">Valor 1 </label>
        <input type="number" name="v1" id="v1" value="<?=$valor1?>">
        <label for="v2">Valor 2 </label>
        <input type="number" name="v2" id="v2"  value="<?=$valor2?>">
        <input type="submit" value="Somar">
    </main>

    <section id="resultado">
            <h2>Resultado da Soma</h2>
            <?php 
            $soma = $valor1 + $valor2; 
            print("<p> A soma do valor $valor e $valor2 da $soma")
            
            
            ?>

    </section>
</body>
</html>