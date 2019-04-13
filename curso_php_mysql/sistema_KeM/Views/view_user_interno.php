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
                <li class="nav-item active">
                    <a class="nav-link" href="">Lista de jobs
                        <span class="sr-only">(current)</span>
                    </a>
                </li>


                <li class="nav-item">
                    <a class="nav-link" href="view_user_externo.php">Usuario externo(temporario)</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="view_master.php">Usuario master(temporario)</a>
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

<section id="section_externo">
    <div class="container">

        <?php 
            if($_GET['sucess'] == "sucesso"){ ?>
        <div class="alert alert-primary text-center" role="alert">
            Job finalizado!
        </div>

        <?php
            }
                //jobs so em andamento
                $sql_jobs = "SELECT * FROM tb_jobs where status_job = 'Andamento'";
                $query_jobs = $mysqli->query($sql_jobs);

                //todos os jobs
                $sql_jobs_geral = "SELECT * FROM tb_jobs";                
                $query_jobs_geral = $mysqli->query($sql_jobs_geral);
            ?>


            <div class="row">
                <div class="col-lg-12 btns_externo">
                    <a class="btn_andamento active_btn_jobs">Jobs em andamento </a>
                    <span class="barra">/</span>
                    <a class="btn_todos"> Todos os jobs</a>
                </div>
            </div>


            <div id="job_andamento">
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

            <div id="job_geral">
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
                while($jobs_geral = $query_jobs_geral->fetch_assoc()){
                    echo "<div class='row content_line'>";
                    echo "<div class='col'><p>".$jobs_geral['title_job']."</p></div>";
                    echo "<div class='col'><p>".$jobs_geral['descricao']."</p></div>";
                    echo "<div class='col'><p>".$jobs_geral['data_entrega']."</p></div>";
                    echo "<div class='col'><p>".$jobs_geral['status_job']."</p></div>";
                    echo '</div>';
                }
            ?>
            </div>
    </div>

    <a href="#" class="finalizar_job" data-toggle="modal" data-target="#exampleModal">
        Finalizar um job
    </a>
    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Finalizando um job</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form action="../Controller/Finalizar_job.php" method="POST">
                        <div class="row">
                            <div class="col-lg-12 text-center">
                                <p>Escolher um job</p>

                                <select name="finalizar_select" class="select_interno">
                                    <option value="null">Finalizar...</option>
                                    <?php 
                                    $sql_finalizar = "SELECT id, title_job FROM tb_jobs WHERE status_job = 'Andamento'";
                                    $query_finalizar = $mysqli->query($sql_finalizar);

                                    while($final = $query_finalizar->fetch_assoc()){
                                        echo "<option value='".$final['id']."'>".$final['title_job']."</option>";
                                    }
                                ?>

                                    <input type="submit" value="Finalizar" name="finalizar" class="btn_finalizar_jobs">
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
<?php include('../layout/footer.php'); ?>