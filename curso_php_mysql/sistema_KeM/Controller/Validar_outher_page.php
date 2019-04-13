<?php 
session_cache_expire(10);
session_start();
if($_SESSION['logado'] != TRUE){
    header('Location: ../index.php');
}