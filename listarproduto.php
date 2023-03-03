
<?php
include("conexao.php");

$sql = "select * from produto";
$query = mysqli_query($conn, $sql);

if(!$query) {
    die("Falha na consulta: " . mysqli_error($conn));
    }
    if(mysqli_num_rows($query) < 1) {
    echo "Não foram encontrados resultados";
    mysqli_close($conn);
    }
    ?>

<html>
<head>

<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Lista de Produtos</title>
</head>

<body>


<h1><center> Produtos </center></h1>
<table width="500" border="1" align="center">
<thead> 
<tr>
    <th>ID</th>
    <th>GENERO</th>
    <th>EMPRESA_DESENVOLVEDORA</th>
    <th>OBSERVACOES</th>
    <th>NOME</th>
    <th>DATA_DE_LANCAMENTO</th>
    <th>VALOR</th>
    <th>EDITAR/EXCLUIR</th>
</tr>
</thead>
<?php
while($L = mysqli_fetch_array($query)) {
	$id        = $L["id"];
	$nome      = $L["nome"];
	$data_val      = $L["data_de_lancamento"];
	$valor     = $L["valor"];
	$obs     = $L["observacoes"];
	$empresa_desenvolvedora     = $L["empresa_desenvolvedora"];
  $genero    = $L["genero"];
	
    echo"
<tbody>
  <tr>
    <td>$id</td>
    <td>$nome</td>
    <td>$data_val</td>
    <td>$valor</td>
    <td>$obs</td>
    <td>$empresa_desenvolvedora</td>
    <td>$genero</td>
    <td><a href=\"editarproduto.php?id=$id\">[Editar]</a> | 
	<a href=\"excluirproduto.php?id=$id\">[Excluir]</a></td>
  </tr>
  </tbody>\n";
}  
?>  
</table>
</body>
</html>