<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Aula 04</title>
  </head>
  <body>
    <pre>
    <?php

    require_once 'Caneta.php';
    $c1 = new Caneta;
    $c1->setModelo("Bic");
    $c1->setPonta(0.3);
    echo "eu tenho uma Caneta {$c1->getModelo()} de ponta {$c1->getPonta()}";
    echo "<br><br><br><br>";
    $c2 = new Caneta;
    print_r($c2);
     ?>
     </pre>
  </body>
</html>
