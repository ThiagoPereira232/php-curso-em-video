<!DOCTYPE html>
<html>

<head>
  <link rel="stylesheet" href="_css/estilo.css" />
  <meta charset="UTF-8" />
  <title>Curso de PHP - CursoemVideo.com</title>
</head>

<body>
  <div>
    <?php
    /*
      $a = 3;
      $b = $a;
      $b += 5;
      echo $a; -> 3
      echo $b; -> 8

    */
    $a = 3;
    $b = &$a; // interliga os dois a = b e b = a mesmo mudando uma das var
    $b += 5;
    echo "A variavel A vale $a";
    echo "<br/>A variavel B vale $b";
    ?>
  </div>
</body>

</html>