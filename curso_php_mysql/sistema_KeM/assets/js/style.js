$(document).ready(function () {
    /*-----View/Alterar----*/
    //escondendo input Master
    $('#id_nome_master').hide();
    $('#id_sobrenome_master').hide();
    $('#id_email_master').hide();
    $('#id_login_master').hide();
    $('#id_senha_master').hide();

    //escondendo input Interno
    $('#id_nome_interno').hide();
    $('#id_sobrenome_interno').hide();
    $('#id_email_interno').hide();
    $('#id_login_interno').hide();
    $('#id_senha_interno').hide();

    //escondendo input Externo
    $('#id_nome_externo').hide();
    $('#id_sobrenome_externo').hide();
    $('#id_email_externo').hide();
    $('#id_login_externo').hide();
    $('#id_senha_externo').hide();


    /*---View/user_interno---*/
    $('#job_andamento').show();
    $('#job_geral').hide();

    $('.btn_andamento').click(function () {
        $('#job_andamento').show();
        $('#job_geral').hide();
        $('.btn_andamento').addClass('active_btn_jobs');
        $('.btn_todos').removeClass('active_btn_jobs');
    });

    $('.btn_todos').click(function () {
        $('#job_andamento').hide();
        $('#job_geral').show();
        $('.btn_todos').addClass('active_btn_jobs');
        $('.btn_andamento').removeClass('active_btn_jobs');
    });

});


function itens_select() {
    var select_master = document.getElementById("select_itens_master").value;
    var select_interno = document.getElementById("select_itens_interno").value;
    var select_externo = document.getElementById("select_itens_externo").value;

    //escondendo input Master
    $('#id_nome_master').hide();
    $('#id_sobrenome_master').hide();
    $('#id_email_master').hide();
    $('#id_login_master').hide();
    $('#id_senha_master').hide();

    //escondendo input Interno
    $('#id_nome_interno').hide();
    $('#id_sobrenome_interno').hide();
    $('#id_email_interno').hide();
    $('#id_login_interno').hide();
    $('#id_senha_interno').hide();

    //escondendo input Externo
    $('#id_nome_externo').hide();
    $('#id_sobrenome_externo').hide();
    $('#id_email_externo').hide();
    $('#id_login_externo').hide();
    $('#id_senha_externo').hide();

    //Master
    if (select_master == "nome") {
        $('#id_nome_master').show();
    } else if (select_master == "sobrenome") {
        $('#id_sobrenome_master').show();

    } else if (select_master == "email") {
        $('#id_email_master').show();
    } else if (select_master == "login") {
        $('#id_email_master').show();
    } else if (select_master == "senha") {
        $('#id_email_master').show();
    }


    //Interno
    if (select_interno == "nome") {
        $('#id_nome_interno').show();
    } else if (select_interno == "sobrenome") {
        $('#id_sobrenome_interno').show();

    } else if (select_interno == "email") {
        $('#id_email_interno').show();
    } else if (select_interno == "login") {
        $('#id_email_interno').show();
    } else if (select_interno == "senha") {
        $('#id_email_interno').show();
    }

    //Externo
    if (select_externo == "nome") {
        $('#id_nome_externo').show();
    } else if (select_externo == "sobrenome") {
        $('#id_sobrenome_externo').show();

    } else if (select_externo == "email") {
        $('#id_email_externo').show();
    } else if (select_externo == "login") {
        $('#id_email_externo').show();
    } else if (select_externo == "senha") {
        $('#id_email_externo').show();
    } else if (select_externo == "null" && select_interno == "null" && select_master == "null") {
        alert("Nenhum item selecionado");
    }
}
