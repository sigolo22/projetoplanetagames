<?php
include("conexao.php");
$id = $_GET["id"];
$mysqli = new mysqli("localhost","root","","planetagames");

$mysqli -> query("SELECT * FROM funcionarios");
echo "Total de registros encontrados: " . $mysqli -> affected_rows;

$mysqli -> query("DELETE FROM funcionarios WHERE id = $id");
echo "<br> Total de registros excluídos: " . $mysqli -> affected_rows;

$mysqli -> close();
?>

