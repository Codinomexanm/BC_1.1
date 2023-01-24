<?php

//SCRIPT PARA SAIR DO SISTEMA
session_start();
//DESTROI A SESSÃO
session_destroy();
//REDIMENSIONA PARA A PÁGINA DE LOGIN
echo "<script>
        window.location='http://localhost/BC_1.1/view/login.php';
        </script>";
?>

