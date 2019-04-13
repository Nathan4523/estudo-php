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
                <li class="nav-item active">
                    <a class="nav-link" href="view_lista_user_master.php">Lista de usuario</a>
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

<section>
    <div class="container">
        <div class="row">
            <div class="col-lg-6 text-center block_first">
                <p class="title_block">Lista de usúarios externos</p>
                <div class="lista_block">
                    <?php 
                        $sql_externo = "SELECT nome FROM tb_user_externo";
                        $query_externo = $mysqli->query($sql_externo);

                        while($user_externo = $query_externo->fetch_assoc()){
                            echo '<p class="p_content"><span class="title_nome"><i class="fa fa-user-o" aria-hidden="true"></i></span> <span class="nome_result">'.$user_externo['nome'].'</span></p>
                            <hr>';
                        }
                    ?>
                </div>
            </div>
            <div class="col-lg-6 text-center block_first">
                <p class="title_block">Lista usúarios internos</p>
                <div class="lista_block">

                    <?php 
                $sql_interno = "SELECT interno.nome, area.nome_Area FROM tb_user_interno as interno join tb_tipo_area as area on interno.tipo_Area = area.id";
                $query_interno = $mysqli->query($sql_interno);
            
                while($user_interno = $query_interno->fetch_assoc()){
                    echo '<p class="p_content"><span class="title_nome"><i class="fa fa-address-card-o" aria-hidden="true"></i></span> <span class="nome_result">'.$user_interno['nome'].'</span></p>
                    <br>';

                    if($user_interno['nome_Area'] == "Designer"){
                        echo '<p class="p_content"><span class="title_nome"><i class="fa fa-tint" aria-hidden="true"></i></span> <span class="nome_result">'.$user_interno['nome_Area'].'</span></p>';
                    } else if($user_interno['nome_Area'] == "Back-end"){
                        echo '<p class="p_content"><span class="title_nome"><i class="fa fa-laptop" aria-hidden="true"></i></span> <span class="nome_result">'.$user_interno['nome_Area'].'</span></p>';
                    } else if($user_interno['nome_Area'] == "Front-end"){
                        echo '<p class="p_content"><span class="title_nome"><i class="fa fa-desktop" aria-hidden="true"></i></span> <span class="nome_result">'.$user_interno['nome_Area'].'</span></p>';
                    } else {
                        echo '<p class="p_content"><span class="title_nome"><i class="fa fa-bar-chart" aria-hidden="true"></i></span> <span class="nome_result">'.$user_interno['nome_Area'].'</span></p>';
                    }
                    echo '<hr>';
                }
                ?>
                </div>
            </div>
        </div>
    </div>

</section>
<?php include('../layout/footer.php'); ?>