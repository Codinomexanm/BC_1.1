<?php

/* PÁGINA DE VERIFICAÇÃO DE LOGIN DO ADMINISTRADOR */

//SE O PERFIL DO USUÁRIO FOR DIFERENTE DE ADMINISTRADOR
if ($_SESSION['USR'] != 'ADM') {
    //REDIMENSIONA PARA LOGIN
    echo "<script>";
    echo "   window.location='http://localhost/BC_1.1/view/login.php'";
    echo "</script>";
}
