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
                    <a class="nav-link" href="">Lista de jobs
                        <span class="sr-only">(current)</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="view_lista_user_master.php">Lista de usúarios</a>
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
            Usuário alterado criado com sucesso
        </div>
        <?php } ?>
        <div class="row">
            <div class="col-lg-12">
                <h1>Alterar um usuario</h1>
            </div>
        </div>

        <div class="row">
            <form action="../Controller/Alterar_usuario.php" method="POST" class="col-lg-12 formulario_delete">
                <div class="blocks">
                    <div class="block_itens">
                        <p>Usuarios Master</p>
                        <select name="user_master" class="select_usuarios_up">
                            <option value="0">Escolher</option>

                            <?php 
                            $sql_master = "SELECT * FROM tb_user_master";
                            $query_master = $mysqli->query($sql_master);

                            while($option_master = $query_master->fetch_assoc()){
                                echo '<option value="'.$option_master['id'].'">'.$option_master['nome'].'</option>';
                                $nome = $option_master['id'];
                            }
                        ?>
                        </select>

                        <select name="user_master_itens" class="select_itens_up" id="select_itens_master" onclick="itens_select()">
                            <option value="null">Alterar...</option>
                            <option value="nome">Alterar o nome</option>
                            <option value="sobrenome">Alterar o sobrenome</option>
                            <option value="email">Alterar o email</option>
                            <option value="login">Alterar o login</option>
                            <option value="senha">Alterar a senha</option>
                        </select>

                        <div class="campo-alterar">
                            <input type="text" name="nome_master" id="id_nome_master" class="campo_update" placeholder="Nome">
                            <input type="text" name="sobrenonome_master" id="id_sobrenome_master" class="campo_update" placeholder="Sobrenome">
                            <input type="email" name="email_master" id="id_email_master" class="campo_update" placeholder="E-mail">
                            <input type="text" name="login_master" id="id_login_master" class="campo_update" placeholder="Login">
                            <input type="password" name="senha_master" id="id_senha_master" class="campo_update" placeholder="Senha">
                        </div>
                    </div>
                    <div class="block_itens">
                        <p>Usuarios Internos</p>
                        <select name="user_interno" class="select_usuarios_up">
                            <option value="0">Escolher usuario</option>
                            <?php 
                            $sql_interno = "SELECT * FROM tb_user_interno";
                            $query_interno = $mysqli->query($sql_interno);
                            while($option_interno = $query_interno->fetch_assoc()){

                                echo '<option value="'.$option_interno['id'].'">'.$option_interno['nome'].'</option>';
                            }
                        ?>
                        </select>
                        <select name="user_interno_itens" class="select_itens_up" id="select_itens_interno" onclick="itens_select()">
                            <option value="null">Alterar...</option>
                            <option value="nome">Alterar o nome</option>
                            <option value="sobrenome">Alterar o sobrenome</option>
                            <option value="email">Alterar o email</option>
                            <option value="login">Alterar o login</option>
                            <option value="senha">Alterar a senha</option>
                        </select>

                        <div class="campo-alterar">
                            <input type="text" name="nome_interno" id="id_nome_interno" class="campo_update" placeholder="Nome">
                            <input type="text" name="sobrenonome_interno" id="id_sobrenome_interno" class="campo_update" placeholder="Sobrenome">
                            <input type="email" name="email_interno" id="id_email_interno" class="campo_update" placeholder="E-mail">
                            <input type="text" name="login_interno" id="id_login_interno" class="campo_update" placeholder="Login">
                            <input type="password" name="senha_interno" id="id_senha_interno" class="campo_update" placeholder="Senha">
                        </div>
                    </div>

                    <div class="block_itens">
                        <p>Usuarios Externos</p>
                        <select name="user_externo" class="select_usuarios_up">
                            <option value="0">Escolher</option>

                            <?php 
                            $sql_externo = "SELECT * FROM tb_user_externo";
                            $query_externo = $mysqli->query($sql_externo);
                            while($option_externo = $query_externo->fetch_assoc()){

                                echo '<option value="'.$option_externo['id'].'">'.$option_externo['nome'].'</option>';
                            }
                        ?>
                        </select>
                        <select name="user_externo_itens" class="select_itens_up" id="select_itens_externo" onclick="itens_select()">
                            <option value="null">Alterar...</option>
                            <option value="nome">Alterar o nome</option>
                            <option value="sobrenome">Alterar o sobrenome</option>
                            <option value="email">Alterar o email</option>
                            <option value="login">Alterar o login</option>
                            <option value="senha">Alterar a senha</option>
                        </select>

                        <div class="campo-alterar">
                            <input type="text" name="nome_externo" id="id_nome_externo" class="campo_update" placeholder="Nome">
                            <input type="text" name="sobrenonome_externo" id="id_sobrenome_externo" class="campo_update" placeholder="Sobrenome">
                            <input type="email" name="email_externo" id="id_email_externo" class="campo_update" placeholder="E-mail">
                            <input type="text" name="login_externo" id="id_login_externo" class="campo_update" placeholder="Login">
                            <input type="password" name="senha_externo" id="id_senha_externo" class="campo_update" placeholder="Senha">
                        </div>

                    </div>
                </div>
                <div class="block_btn_up">
                    <input type="submit" name="alterar" value="Alterar" class="btn_alterar_user">
                </div>
            </form>
        </div>
    </div>


</section>

<?php include('../layout/footer.php'); ?>