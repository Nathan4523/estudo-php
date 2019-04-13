<?php 
    $index = "index.php";
    include("layout/header.php");
 ?>
<section class="index-login">
    <div class="container">
        <?php 
            if($_GET['erro'] == "dadosincorretos"){
            ?>
        <div class="alert alert-danger text-center" role="alert">
            Login ou senha incorreto
        </div>  
        <?php } ?>

        <div class="row">
            <h1 class="title-login">Faça login para acessar a plataforma</h1>
        </div>
        <div class="row">
            <div class="col-lg-12 formulario-login">
                <form action="Controller/Validar.php" method="POST">
                    <input type="text" name="login" placeholder="Login" class="input_login" />
                    <input type="text" name="senha" placeholder="Senha" class="input_login" />

                    <input type="submit" name="entrar" class="btn_entrar" value="Entrar" />
                </form>
            </div>
        </div>
    </div>
</section>
<?php include("layout/footer.php") ?>
