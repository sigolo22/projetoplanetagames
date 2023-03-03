<?php

include("conexao.php");
$id      = $_POST["id"];
$nome = $_POST["nome"];
$rg = $_POST["rg"];
$pai = $_POST["pai"];
$email = $_POST["email"];
$data_nasc = $_POST["data_nasc"];
$cpf = $_POST["cpf"];
$mae = $_POST["mae"];
$telefone        = $_POST["telefone"];

$sql = "UPDATE cliente SET nome = '$nome', data_nasc = '$nascimento',
rg = '$rg', cpf = '$cpf', endereco = '$endereco', estado = '$estado', email = '$email',
telefone = '$telefone' WHERE cliente.id = '$id'";

$query = mysqli_query($conn, $sql);

header("Location: listarcliente.php");
?>