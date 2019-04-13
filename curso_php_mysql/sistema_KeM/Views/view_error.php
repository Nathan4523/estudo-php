<?php 
    include('../layout/header.php');
    include('libs/conexao.php');
    
    $sql = "SELECT * FROM tb_user_master";

    $query = $mysqli->query($sql);

    $result = $query->fetch_assoc();
 ?>

<header>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="#">KeM</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarText" aria-controls="navbarText"
            aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarText">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="#">Lista de jobs
                        <span class="sr-only">(current)</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Usuarios Externos</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Usuarios internos</a>
                </li>
            </ul>
            <span class="navbar-text">
                Bem vindo
                <?php echo $result['nome'];?>
            </span>
        </div>
    </nav>
</header>
<section>
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center messegeErro">
                <p>OPS! :(</p>
                <p>Ocorreu um erro no sistema!</p>
            </div>
        </div>
    </div>
</section>
<?php include('../layout/footer.php'); ?>