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
                    <a class="nav-link" href="view_user_interno.php">Usuario interno(temporario)</a>
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
        <div class="alert alert-success text-center" role="alert">
            Usuário deletado com sucesso
        </div>

        <?php
            }
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

    <a href="#" class="criar_job" data-toggle="modal" data-target="#exampleModal">
        <i class="fa fa-pencil" aria-hidden="true"></i>
    </a>
    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Abrindo um job</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form action="../Controller/Criar_job.php" method="POST">
                        <div class="row">
                            <div class="col-lg-12">
                                <select name="user_externo" class="select_input">
                                    <option value="null">Escolher o destinário</option>
                                    <?php
                                        $sql_nomes = "SELECT id, nome FROM tb_user_externo";
                                        $query_nome = $mysqli->query($sql_nomes);

                                        while($nome = $query_nome->fetch_assoc()){
                                            echo "<option value='".$nome['id']."'>".$nome['nome']."</option>";
                                        }
                                    ?>
                                </select>
                                <input type="text" name="title" placeholder="Título do job" class="input_criar">
                                <select name="tipo_job" class="select_input">
                                    <option value="0">Tipo de job</option>
                                    <?php
                                        $sql_tipo_job = "SELECT id, nome_job FROM tb_tipo_job";
                                        $query_tipo_job = $mysqli->query($sql_tipo_job);

                                        while($tipo_jobs = $query_tipo_job->fetch_assoc()){
                                            echo "<option value='".$tipo_jobs['id']."'>".$tipo_jobs['nome_job']."</option>";
                                        }
                                    ?>
                                </select>
                                <textarea name="descricao" cols="30" rows="10" class="input_criar">Descrição do job</textarea>
                                <input type="date" name="data" min="2000-01-02" class="input_criar">
                                <select name="status_do_job" class="select_input">
                                    <option value="0">Status...</option>
                                    <?php
                                        $sql_status = "SELECT status_job FROM tb_jobs";
                                        $query_status = $mysqli->query($sql_status);

                                        while($status = $query_status->fetch_assoc()){
                                            echo "<option value='".$status['status_job']."'>".$status['status_job']."</option>";
                                        }
                                    ?>
                                </select>
                                <input type="submit" name="criar" value="Criar" class="btn_criar_jobs">
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
<?php include('../layout/footer.php'); ?>