<?php

/* PÁGINA DE VALIDAÇÃO DE LOGIN
  CASO HAJA SESSÃO INICIADA A PÁGINA É EXIBIDA, SENÃO REDIRECIONA O USR PARA A PÁGINA DE LOGIN
 */
session_start();

if (!isset($_SESSION["USR"])) {
    echo "<script>";
    echo "   window.location='http://localhost/BC_1.1/view/login.php'";
    echo "</script>";
}


