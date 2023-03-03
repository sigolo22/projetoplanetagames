<?php
include("conexao.php");

$sql = "select * from cliente";
$query = mysqli_query($conn, $sql);

if(!$query) {
    die("Falha na consulta: " . mysqli_error($conn));
    }
    if(mysqli_num_rows($query) < 1) {
    echo "Não foram encontrados resultados";
    mysqli_close($conn);
    }
    ?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
 "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>

<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Lista de Clientes</title>
</head>

<body>

<h1><center> Clientes </center></h1>
<table width="500" border="1" align="center">
<thead> 
<tr>
    <th>ID</th>
    <th>NOME</th>
    <th>NASCIMENTO</th>
    <th>RG</th>
    <th>CPF</th>
    <th>PAI</th>
    <th>MÃE</th>
    <th>EMAIL</th>
    <th>TELEFONE</th>

    <th>EDITAR/EXCLUIR</th>
  </tr>
</thead>
<?php
while($L = mysqli_fetch_array($query)) {
  $id        = $L["id"];
  $nome      = $L["nome"];
  $data_nasc = $L["data_nasc"];
  $rg     = $L["rg"];
  $cpf     = $L["cpf"];
  $pai     = $L["pai"];
  $mae     = $L["mae"];
  $email     = $L["email"];
  $telefone     = $L["telefone"];

    echo"
<tbody>
  <tr>
    <td>$id</td>
    <td>$nome</td>
    <td>$data_nasc</td>
    <td>$rg</td>
    <td>$cpf</td>
    <td>$pai</td>
    <td>$mae</td>
    <td>$email</td>
    <td>$telefone</td>
    <td><a href=\"editarcliente.php?id=$id\">[Editar]</a> |
  <a href=\"excluircliente.php?id=$id\">[Excluir]</a></td>
  </tr>
  </tbody>\n";
}  
?> 
</table>
</body>
</html>