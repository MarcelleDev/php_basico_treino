<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio PHP 7</title>
</head>
<body>
     <?php 
     
       $minimo = 1_420.00;
       $salario = $_GET['sal'] ?? 0;
     ?>


    <main>
        <h1>Informe seu salário</h1>
        <form action="<?=$_SERVER['PHP_SELF'] ?>" method="get">
             <label for="sal">Salário (R$)</label>
             <input type="number" name="sal" id="sal" value="<=sal?>" step="0.01">
             <p>Considerando o salário mínimo de R$<?=number_format($minimo, 2, "," , ".") ?></p>
             <input type="submit" value="Calcular">
        </form> 
    </main>  
    <section>
        <h2>Resultado Final</h2>
        <?php 
        $tot = intdiv($salario, $minimo);
        $dif = $salario % $minimo;

        echo"<p> Ganha $tot Salários mínimos. </p>"
        ?>
    </section>
</body>
</html>          

    

