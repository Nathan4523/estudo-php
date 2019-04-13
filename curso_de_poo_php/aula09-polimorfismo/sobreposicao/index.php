<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Aula 09</title>
  </head>
  <body>
    <?php
      require_once 'Mamifero.php';
      require_once 'Reptil.php';
      require_once 'Peixe.php';
      require_once 'Ave.php';


      $animal1 = new Mamifero();
      $animal2 = new Ave();

      $animal1->setPeso(3.2);
      $animal1->locomover();
      $animal2->locomover();

     ?>

  </body>
</html>
