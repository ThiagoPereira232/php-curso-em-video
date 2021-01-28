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
            +=
            -=
            *=
            /=
            %=
            .= -> concatenacao
        */

        /**
         * Exercicio 1
         * Aplicar 10% de desconto e aumento ao preço de um produto.
         */
        $preco = $_GET["p"];
        echo "O preço do produto é R$ ". number_format($preco, 2, ",");

        // $preco = $preco + ($preco*10/100);
        // $preco += ($preco*10/100);
        // echo "<br> E o novo preço com 10% de aumento é R$ $preco";
        $preco -= ($preco*10/100);
        echo "<br> E o novo preço com 10% de desconto é R$ ". number_format($preco, 2, ",");

    ?>
</div>
</body>
</html>
 