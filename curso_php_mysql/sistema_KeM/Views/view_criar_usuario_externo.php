<?php 
    include('../Controller/Validar_outher_page.php');
    include('../layout/header.php'); 
    include('libs/conexao.php');

    $sql = "SELECT * FROM tb_user_master";
    
        $query = $mysqli->query($sql);
    
        $result = $query->fetch_assoc();
?>

<header>
    <nav class="navbar navbar-expand-lg navbar-light">
        <a class="navbar-brand" href="view_master.php">
            <img src="../assets/images/logo_kem.png" alt="logo" class="logo_nav">
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarText" aria-controls="navbarText"
            aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarText">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item">
                    <a class="nav-link" href="view_master.php">Lista de jobs
                        <span class="sr-only">(current)</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link_block" href="">Usuarios Externos</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link_block" href="">Usuarios internos</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="view_master.php">
                        <i class="fa fa-undo" aria-hidden="true"></i>
                    </a>
                </li>
            </ul>
            <span class="navbar-text">
                Bem vindo
                <?php echo "<b>".$result['nome']."</b>";?>
                <a href="../index.php" class="btn_sair">
                    <i class="fa fa-sign-out" aria-hidden="true"></i>
                </a>
            </span>
        </div>
    </nav>
</header>

<section>
    <div class="container">
        <?php 
            if($_GET['sucess'] == "sucesso"){ ?>
        <div class="alert alert-success text-center" role="alert">
            Usuário externo criado com sucesso
        </div>
        <?php } ?>

        <div class="row">
            <div class="col-lg-12">
                <h1>Criar um usuário externo</h1>
            </div>
        </div>

        <div class="row linha_form">
            <form action="../Controller/CadastrarUser_externo.php" method="POST">
                <div class="col-lg-12">
                    <input type="text" name="nome" placeholder="Nome*" class="input_user">
                    <input type="text" name="sobrenome" placeholder="Sobrenome" class="input_user">
                    <input type="email" name="email" placeholder="E-mail*" class="input_user">
                    <input type="text" name="login" placeholder="Login*" class="input_user">
                    <input type="password" name="senha" placeholder="Senha*" class="input_user">
                    <br>
                    <input type="submit" name="cadastrar" value="Cadastrar" class="btn_cadastrar_user">
                </div>
            </form>
        </div>
    </div>


</section>

<?php include('../layout/footer.php'); ?>