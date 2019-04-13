<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Sistema KeM</title>
    <?php 
        ini_set( 'display_errors', 0 );
        if($index == "index.php"){ ?>
            <link rel="shortcut icon" href="assets/images/logo_kem_favicon.png" type="image/x-icon">
            <link rel="stylesheet" href="assets/css/style.css" />
        <?php } else { ?>
            <link rel="stylesheet" href="../assets/css/style.css" />
            <link rel="shortcut icon" href="../assets/images/logo_kem_favicon.png" type="image/x-icon">
        <?php }?>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css">
</head>
<body>
<?php 
include('../Controller/Validar_outher_page.php');
?>