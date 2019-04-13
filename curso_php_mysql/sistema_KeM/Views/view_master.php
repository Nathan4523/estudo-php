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
    <a class="navbar-brand" href="view_master.php"><img src="../assets/images/logo_kem.png" alt="logo" class="logo_nav"></a>
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
                    <a class="nav-link" href="view_lista_user_master.php">Lista de usuario</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="view_user_externo.php">Usuario externo(temporario)</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="view_user_interno.php">Usuario interno(temporario)</a>
                </li>
            </ul>
            <span class="navbar-text">
                Bem vindo
                <?php echo "<b>".$result['nome']."</b>";?>
                <a href="../index.php" class="btn_sair"><i class="fa fa-sign-out" aria-hidden="true"></i></a>
            </span>
        </div>
    </nav>
</header>

<section id="section_master">
    <div class="container">
        <?php
                $sql_jobs = "SELECT * FROM tb_jobs";
                $query_jobs = $mysqli->query($sql_jobs);
            ?>
            <div class="row line_block_table">
                <div class="col">
                    <p class="title_table">Nome do job</p>
                </div>
                <div class="col">
                    <p class="title_table">Descrição do job</p>

                </div>
                <div class="col">
                    <p class="title_table">Data de entrega</p>
                </div>
                <div class="col">
                    <p class="title_table">Status do job</p>
                </div>
            </div>

            <?php 
                while($jobs = $query_jobs->fetch_assoc()){
                    echo "<div class='row content_line'>";
                    echo "<div class='col'><p>".$jobs['title_job']."</p></div>";
                    echo "<div class='col'><p>".$jobs['descricao']."</p></div>";
                    echo "<div class='col'><p>".$jobs['data_entrega']."</p></div>";
                    echo "<div class='col'><p>".$jobs['status_job']."</p></div>";
                    echo '</div>';
                }
            ?>
    </div>

    <a href="#" class="criar_usuario" data-toggle="modal" data-target="#exampleModal">
        <i class="fa fa-cog fa-3x" aria-hidden="true"></i>
    </a>
    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Criar um usuario</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-lg-4 text-center">
                            <div class="btn_criar">
                                <a href="view_criar_usuario_master.php">Criar um usuario master</a>
                            </div>
                        </div>
                        <div class="col-lg-4 text-center">
                            <div class="btn_criar">
                                <a href="view_criar_usuario_interno.php">Criar um usuario interno</a>
                            </div>
                        </div>
                        <div class="col-lg-4 text-center">
                            <div class="btn_criar">
                                <a href="view_criar_usuario_externo.php">Criar um usuario externo</a>
                            </div>
                        </div>
                    </div>
                    <hr>
                    <div class="row">
                        <div class="col-lg-4 text-center">
                            <div class="btn_criar">
                                <a href="view_alterar_usuario.php">Alterar um usuario</a>
                            </div>
                        </div>
                        <div class="col-lg-4"></div>
                        <div class="col-lg-4 text-center">
                            <div class="btn_criar">
                                <a href="view_deletar_user.php">Deletar um usuario</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<?php include('../layout/footer.php'); ?>