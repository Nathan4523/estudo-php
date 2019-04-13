<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Banco Online</title>
  </head>
  <body>
    <pre>
    <?php
      require_once 'Banco.php';

      $jubileu = new Banco;
      $jubileu->abrirConta("CC");
      $jubileu->setNumConta(12035089209);
      $jubileu->setDono("Jubileu");
      $jubileu->depositar(2000);


      $creusa = new Banco;
      $creusa->abrirConta("CP");
      $creusa->setNumConta(651500145454);
      $creusa->setDono("Creusa");
      $creusa->depositar(500);


      $jubileu->sacar(1000);
      $creusa->sacar(100);

      print_r($jubileu);
      print_r($creusa);
     ?>
   </pre>
  </body>
</html>
