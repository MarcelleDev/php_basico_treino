<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
    <h1>Resultado do processamento </h1>
    </header>

    <?php 
      $n = $_GET["nome"];
      $s = $_GET["sobrenome"];
      echo "<p> É um prazer te conhecer, $n $s! Este é o meu site";


    ?>

    
</body>
</html>