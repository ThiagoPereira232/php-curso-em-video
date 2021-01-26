<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" href="../modelo/css/estilo.css"/>
  <meta charset="UTF-8"/>
  <title>Funções Aritmedicas</title>
</head>
<body>
<div>
    <?php
        $v1 = $_GET["x"];
        $v2 = $_GET["y"];
        echo "<h2>Valores recebidos $v1 e $v2</h2>";
        echo "<br>O valor absoluto de $v2 é ". abs($v2); // valor absoluto
        echo "<br>O valor de $v1<sup>$v2</sup> é ". pow($v1, $v2); // potenciação
        echo "<br>A raiz de $v1 é ". sqrt($v1); //raiz quadrada
        echo "<br/>O valor de $v2 arredondado e " . round($v2); // ceil floor arredonda
        echo "<br/>A parte inteira de $v2 e " . intval($v2); // parte inteira
        echo "<br/>O valor de $v1 em moeda e R$" . number_format($v1,2,"2", "."); // formatação
    ?>
</div>
</body>
</html>
 