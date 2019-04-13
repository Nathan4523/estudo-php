<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Whats</title>
  </head>
  <body>
      <?php

      require_once 'Whats.php';

      $w = new Whats;

      $w->setNome("Nicolas Nathan Campos");
      $w->setStatus("Tudo que sei, nada sei");
      $w->setTelefone(11952354537);
      $w->setIdade(19);
      $w->setConversa(120);
      $w->setConfirmacaoLeitura(false);
      $w->setFoto(false);
       ?>

    <h1>Whatsapp</h1>
    <p>Nome do usuario: <?= $w->getNome() ?></p>
    <p>Idade do usuario: <?= $w->getIdade() ?></p>
    <p>Status do usuario: <i>"<?= $w->getStatus()?>"</i></p>
    <p>Telefone do usuario: <b><?= $w->getTelefone() ?></b></p>
    <p>Possui <?= $w->getConversa() ?> conversas no whatsapp</p>
    <?php
      if($w->getConfirmacaoLeitura() == 0){
        $yesno = "Não";
      }else{
        $yesno = "Sim";
      }
     ?>
    <p>Possui confirmação de leitura: <?= $yesno ?></p>

    <?php

      if($w->getFoto() == 1){
        $ph = "Sim";
      }else{
        $ph = "Não";
      }
     ?>

     <p>Possui foto: <?= $ph ?></p>

  </body>
</html>
