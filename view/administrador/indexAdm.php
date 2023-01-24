<!DOCTYPE html>
<!--INDEX DO ADMINISTRADOR-->
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
            <?php require_once '../../controler/verificaPerfilAdm.php'; ?>
            <?PHP include '../parts/adm/menu.php'; ?>
            <h1>
                PÁGINA DO ADMINISTRADOR
            </h1>
        </div>
        <br>
        <?PHP include '../parts/footer.php'; ?>
    </center>
</body>
</html>
