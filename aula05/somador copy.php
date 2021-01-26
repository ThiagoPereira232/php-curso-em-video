<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="modelo/css/estilo.css" />
    <meta charset="UTF-8" />
    <title>Curso de PHP - CursoemVideo.com</title>
</head>
<body>
    <div>
        <?php

            // http://localhost?a=5&b=2

            $n1 = $_GET["a"];
            $n2 = $_GET["b"];
            $s = $n1 + $n2;
            $m = ($n1 + $n2) / 2;

            // echo "A soma entre $n1 e $n2 é igual a $s";

            /*
                Adição +
                Subtração -
                Multiplicação *
                Divisão /
                Modulo  %
            */

            echo "<h1>Valores recebidos: $n1 e $n2</h1>";
            echo "A soma vale ".($n1 + $n2);
            echo "<br>A subtração vale ".($n1 - $n2);
            echo "<br>A multiplicação vale ".($n1 * $n2);
            echo "<br>A divisão vale ".($n1 / $n2);
            echo "<br>o modulo vale ".($n1 % $n2);
            echo "<br>A media vale $m";

        ?>
    </div>
</body>

</html>