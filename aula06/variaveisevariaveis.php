<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" href="../modelo/css/estilo.css"/>
  <meta charset="UTF-8"/>
  <title>Curso de PHP - CursoemVideo.com</title>
</head>
<body>
<div>
    <?php
        $x = "abc";
        $$x = "def"; // o primeiro $ cria outra var com o nome de $x
        echo "o conteudo da variavel X é $x";
        echo "<br>A variavel criada recebeu o valor de $abc";
    ?>
</div>
</body>
</html>
 