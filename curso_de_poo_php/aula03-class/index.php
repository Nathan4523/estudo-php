<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Aula 03</title>
  </head>
  <body>

    <?php
      require_once 'Caneta.php';

      $c1 = new Caneta;
      $c1->modelo = "Bic crital";
      $c1->cor = "Azul";
      $c1->tampar();
      $c1->rabiscar();

      var_dump($c1);
     ?>

  </body>
</html>
