<?php 
    require('libs/conexao.php');
    //ini_set( 'display_errors', 0 );
    session_start();

    //defino uma variavel como false 
    $atual = false;

    //pego o conteudo do post
    $login_post = $_POST['login'];
    $senha_post = $_POST['senha'];

    //faço um select no banco filtrando de acordo com meu conteudo armazenado no post
    $sql = "SELECT * FROM tb_user_master WHERE login = '$login_post' and senha = '$senha_post'";
    // $sql = "SELECT master.login, master.senha, interno.login, interno.senha, externo.login, externo.senha
    //  FROM tb_user_master master, tb_user_interno interno, tb_user_externo externo WHERE
    //   master.login = '$login_post' and master.senha = '$senha_post' and 
    //   interno.login = '$login_post' and interno.senha = '$senha_post' and 
    //   externo.login = '$login_post' and externo.senha = '$senha_post'";
    
    $query = $mysqli->query($sql);

    $user = $query->fetch_all(MYSQLI_BOTH);

    // while($user = $query->fetch_assoc()){
    //     $login = $user['login'];
    //     $senha = $user['senha'];
    //         echo $login;
    //         echo "<br>";
    //         echo $senha;
    // }

    foreach($user as $valor){
        $login = $valor['login'];
        $senha = $valor['senha'];
        // echo $login;
        //     echo "<br>";
        //     echo $senha;

        if($login_post == $login && $senha_post == $senha){
            //se ocorrer ok troco minha variavel para true
            $atual = true;   
            
        }
    }

    //verificando depois que minha variavel for true
    if($atual){
        //defino a minha sessao com o nome logado para true
        $_SESSION['logado'] = TRUE;
        //e a minha sessao user para o login_post
        $_SESSION['user'] = $login_post;

        //e direciono para a pagina principal
        header("Location: ../Views/view_master.php");
    }else{
        //caso der erro vai para o index onde que exige o login
        header("Location: ../index.php?erro=dadosincorretos");
    }
