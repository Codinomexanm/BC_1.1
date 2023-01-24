<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>LOGIN</title>
      <link rel="stylesheet" type="text/css" href="../CSS/login.css">
    </head>
    <body>
    <center>
        <div class="conteudo">
            <br><br>
            <table >
                <form name="formLogin" method="post" action="../controler/controlerLogin.php">
                    <thead><p>Sistema de busca e cadastro</p></thead>
                    <tr>
                        <td><center>Tipo de usuário</center></td>
                    <td>
                    <center>
                        <select name="tuser">
                            <option value="1">Administrador</option>
                            <option value="2">Professor</option>
                        </select>
                    </center>
                    </td>
                    </tr>
                    <tr>
                        <td><center>Senha</center></td>
                <td><center><input type="password" name="senha"></center></td>
                    </tr>
                    <tr>
                        <td colspan="2">
                    <center>
                        <input type="submit" value="Entrar" class="enviar">
                    </center>
                    </td>
                    </tr>
                </form>

            </table>
            <?php
            /* AQUI ESPERA-SE UMA MENSAGEM VINDA VIA GET
              SE ESTÁ VAZIA NÃO FAZ NADA, SENÃO EXIBE-A */
            if (!empty($_GET['msg'])) {
                if ($_GET['msg'] == 'm1') {
                    echo '<p class="erro">Insira a senha de acesso!</p>';
                }
            }
            ?>
        </div>
    </center>
</body>
</html>
