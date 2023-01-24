<?php

/* SCRIPT DE CONTROE DE EXCLUSSÃO DE ALUNO */
//REQUEER A DAO DAS FUNÇÕES DO SISTEMA
require_once '../DAO/SysFunc.php';
//SE O ID DO ALUNO NÃO ESTIVEZ VAZIO
if (!empty($_GET['idAl'])) {
    //RECEBE O ID
    $idAluno = $_GET['idAl'];
    //INSTANCIA A DAO DO ALUNO
    $excluirAluno = new SysFunc();
    //CHAMA O MÉTOD DE EXCLUSSÃO DE ALUNO
    $excluirAluno->ExcluirAlunos($idAluno);
    //RETORNA Á PÁGINA
    $msg = "m1";
    echo"<script>window.location='http://localhost/BC_1.1/view/listarAlunos.php'</script>";
}

