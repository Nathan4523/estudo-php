<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>aula07-heranca</title>
  </head>
  <body>
    <pre>
    <?php
      require_once 'Pessoa.php';
      require_once 'Professor.php';
      require_once 'Funcionario.php';

      $p1 = new Funcionario();
      $p1->setNome("nicolas");
      $p1->setSalario(200);

      print_r($p1);
     ?>
     </pre>
  </body>
</html>
