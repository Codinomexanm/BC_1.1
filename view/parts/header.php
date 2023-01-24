<?php
require_once 'C:/xampp/htdocs/BC_1.1/controler/vlidaLogin.php';
?>
<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>

    </head>
    <body>
        <div class="header">
            <table>
                <tr>
                    <td>
                        <h1>SISTEMA DE BUSCA E CADASTRO</h1>
                    </td>
                    <td>
                <center>
                       <?php
                       if($_SESSION['USR']=='ADM'){
                           echo '<p class="header">ADMINISTRADOR</p><br>';
                       }
                       else if($_SESSION['USR']=='PROF'){
                           echo '<p class="header">PROFESSOR</p><br>';
                       }
                       
                       ?>
                    <a href="http://localhost/BC_1.1/controler/sair.php">SAIR</a>
                    <br><br>
                </center>
                    </td>
                </tr>
            </table>
        </div>
    </body>
</html>
