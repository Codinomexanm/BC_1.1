<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>PESQUISAR</title>
        <link rel="stylesheet" type="text/css" href="../CSS/estilo.css">
        <script type="text/javascript">
            function foco() {
                document.buscarAlunos.pesquisa.focus();
            }
        </script>
        <script type="text/javascript">
            function up(lstr) { // converte minusculas em maiusculas
                var str = lstr.value; //obtem o valor
                lstr.value = str.toUpperCase(); //converte as strings e retorna ao campo
            }
        </script>
    </head>
    <body onload="foco()">
    <center>
        <div class="conteudo">
            <?PHP include './parts/header.php'; ?>
            <?php
            if ($_SESSION['USR'] == 'ADM') {
                include './parts/adm/menu.php';
            } else if ($_SESSION['USR'] == 'PROF') {
                include './parts/professor/menu.php';
            }
            ?>
            <center>
                <br><br>
                <div class="pesquisar">
                    <form method="post" action="pesquisa.php" name="buscarAlunos">
                        <input type="search" name="pesquisa" onkeyup="up(this)">
                        <select name="serie"  name="serie">

                            <option value="1">Primeiro ano</option>
                            <option value="2">Segundo ano</option>
                            <option value="3">Terceiro ano</option>
                            <option value="4">Quarto ano</option>
                            <option value="5">Quinto ano</option>
                            <option value="6">Todas as turmas</option>
                        </select>
                        <br><br>
                        
                        <input type="submit" value="Pesquisar" class="enviar"> 
                    </form>
                </div>
        </div>
        <br>
        <?PHP include './parts/footer.php'; ?>
    </center>
</body>
</html>
