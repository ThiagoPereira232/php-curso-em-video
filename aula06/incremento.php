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
        /*
         Exercicio 2
         Mostrar qual foi o ano anterior ao ano atual
         */
        $atual = $_GET["aa"];
        echo "O ano atual é $atual e o ano anterior é ". --$atual;
        // $atual++ primeiro mostra depois muda
        // --$atual primeiro muda depois muda
    ?>
</div>
</body>
</html>
 