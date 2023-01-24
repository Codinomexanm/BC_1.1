<?php

/* SCRIPT DE VALIDAÇÃO DE LOGIN DE PROFESSOR */

//SE O PERFIL DO USUÁRIO FOR DIFERENTE DE USR
if ($_SESSION['USR'] != 'PROF') {
    //REDIMENSIONA PARA LOGIN
    echo "<script>";
    echo "   window.location='http://localhost/BC_1.1/view/login.php'";
    echo "</script>";
}
