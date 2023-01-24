<?php

/* SCRIPT DE CONTROLE DE EXCLUSSAO DE OCORRÊNCIAS */
//REQUER A DAO DE OCORRENCIA
require_once '../DAO/ocorrencia.php';
//SE O ID DA OCORRÊNCIA N ESTIVER VAZIO
if (!empty($_GET['idOcor'])) {
    //RECEBE O ID
    $idOcor = $_GET['idOcor'];
    //INSTANCIA A DAO
    $excluirOcor = new ocorrencia();
    //CHAMA O MÉTODO DE EXCLUSSÃO DE OCORRÊNCIA
    $excluirOcor->excluirOcorrencia($idOcor);
    //RETORNA à PÁGINA DE OCORRCIAS
    $msg = "m2";
    echo"<script>window.location='http://localhost/BC_1.1/view/listarOcorrencias.php?msg=$msg'</script>";
}

