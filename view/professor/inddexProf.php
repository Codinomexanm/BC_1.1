
<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>PÁGINA INICIAL</title>
        <link rel="stylesheet" type="text/css" href="../../CSS/estilo.css">
    </head>
    <body>
    <center>
        <div class="conteudo">
            <?PHP include '../parts/header.php'; ?>
            <?php require_once '../../controler/verificaPerfilProf.php'; ?>
            <?PHP include '../parts/professor/menu.php'; ?>
            <h1>
                PÁGINA DO PROFESSOR
            </h1>
        </div>
		<BR>
        <?PHP include '../parts/footer.php'; ?>
    </center>
</body>
</html>
