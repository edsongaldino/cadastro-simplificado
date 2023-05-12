<?php
include "conexao.php";

$sql = "SELECT * FROM usuarios";
$result = $conn->query($sql);
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro Simplificado - PHP</title>
    <link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Ubuntu:regular,bold&subset=Latin">
    <link rel="stylesheet" href="css/formulario.css">
</head>
<body>

    <div id="top">Cadastro Simplificado - PHP</div>

    <div id="formulario">
        <form action="cadastrar.php" method="POST">
            <div class="item-form">
                <label for="nome">Nome Completo:</label>
                <input type="text" id="nome" name="nome" maxlength="100" required>
            </div>

            <div class="item-form">
                <label for="email">E-mail:</label>
                <input type="email" id="email" name="email" maxlength="100" required>
            </div>

            <div class="item-form">
                <label for="senha">Senha:</label>
                <input type="password" id="senha" name="senha" maxlength="100" required>
            </div>

            <button class="btn-salvar" type="submit">Gravar Usuário</button>
        </form>
    </div>

    <div id="lista-usuarios">
        <div class="total">Foram listados <?php echo $result->num_rows; ?> usuários</div>

        <?php while ($usuario = mysqli_fetch_assoc($result)) {?>
        <div class="usuario">
            <div class="id"><?php echo $usuario["id"];?></div>
            <div class="nome"><?php echo $usuario["nome"];?></div>
            <div class="email"><?php echo $usuario["email"];?></div>
        </div>
        <?php }?>
    </div>
    
</body>
</html>