<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio PHP 2 </title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <main>
        <h1>Trabalhando números aleatorios </h1>
        <?php 
        $min = 0;
        $max = 100; 
        $num = mt_rand($min , $max);
        echo"<p>Gerando um número aleatorio entre $min e $max..... <br> O valor gerado foi $num </p>"
        
        ?>
        <button>&#x1f504; Gerar outro </button>
    </main>
    
</body> 
</html>