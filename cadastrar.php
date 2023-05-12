<?php
include "conexao.php";

$nome = $_POST["nome"];
$email = $_POST["email"];
$senha = md5($_POST["senha"]);

$sql = "INSERT INTO usuarios (nome, email, senha) VALUES ('$nome', '$email', '$senha')";

if (mysqli_query($conn, $sql)) {
      header('Location: index.php?msg=Cadastro Realizado com Sucesso!');
} else {
      echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}
mysqli_close($conn);


?>