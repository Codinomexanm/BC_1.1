<?php

/* SCRIPT DE CONTROLE DE LOGIN NO SISTEMA */

//SE NÃO ESTIVEREM VAZIOS O TIPO DE USUÁRIO E A SENHA
if (!empty($_POST['tuser']) and !empty($_POST['senha'])) {
    //RECEBE O TIPO DE USUÁRIO
    $usuario = $_POST['tuser'];
    //RECEBE A SENHA
    $senha = $_POST['senha'];
    //SE O USUÁRIO FOR IGUAL A 1(ADMINISTRADOR) E A SENHA FOR IGUAL ADMINISTRADOR(MAIÚSCULO OU MINÚSCULO0
    if ($usuario == '1' && $senha == 'administrador' or $usuario == '1' && $senha == 'ADMINISTRADOR') {
        //INICIA UMA SESSÃO
        session_start();
        //O VALOR DE USUÁRIO DA SESSÃO RECEBE O VALOR DE ADMINISTRADOR
        $_SESSION['USR'] = 'ADM';
        //REDIMENSIONA PARA A PÁGINA INICIAL DO ADMINISTRADOR
        echo "<script>
        window.location='http://localhost/BC_1.1/view/administrador/indexAdm.php';
        </script>";
    }
    //SE O USUÁRIO FOR IGUAL A 2(PROFESSOR) E A SENHA FOR IGUAL A  PROFESSOR(MAIÚSCULO OU MINÚSCULO)
    else if ($usuario == '2' && $senha == 'professor' or $usuario == '2' && $senha == 'PROFESSOR') {
        //INICIA UMA SESSÃO
        session_start();
        //O VALOR DE USUÁRIO DA SESSÃO RECEBE O VALOR DE PROFESSOR
        $_SESSION['USR'] = 'PROF';
        //REDIMENSIONA PARA A PÁGINA INICIAL DO PROFESSOR
        echo "<script>
        window.location='http://localhost/BC_1.1/view/professor/inddexProf.php';
        </script>";
    }
    //SE AO MENOS ALGUM DOS DADOS ESTIVER INCORRETO
    else {
        //EXIBE A MENSAGEM DE ACESSO NEGADO
        echo '<center><h1>Acesso negado!</h1></center>';
        echo '<br>';
        //OFERREÇE O LINK PARA VOLTAR
        echo '<center><a href="http://localhost/BC_1.1/view/login.php">voltar</a></center>';
    }
}
//SE ALGUM DADO ESTIVEZ VAZIO
else {
    //RETORNA PARA A PÁGINA INICIAL E INFORMA AO USUÁRIO
    $msg = 'm1';
    echo "<script>
        window.location='http://localhost/BC_1.1/view/login.php?msg=$msg';
        </script>";
}

