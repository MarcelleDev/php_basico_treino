<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio PHP 1</title>
</head>
<body>
     <main>
        <h1>Resultado Final</h1>
        <p>
            <?php 
                 $n = $_REQUEST["num"] ?? 0;
                 $a = $n - 1; 
                 $s = $n + 1;                 
              echo "O número escolhido foi $n ";
              echo "<br> O seu antecessor é $a";
              echo "<br> O seu sucessor é $s";
            ?>
        </p>
     </main>
</body>
</html>