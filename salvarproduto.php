
<?php
    include("conexao.php");
   
    $nome = $_POST["nome"];
    $genero = $_POST["genero"];
    $empresadesenvolvedora = $_POST["empresadesenvolvedora"];
    $datalancamento = $_POST["datadelancamento"];
    $valor = $_POST["valor"];
    $observacoes = $_POST["observacoes"];

    $result_func = "INSERT INTO produto(nome, genero, empresa_desenvolvedora, data_de_lancamento, valor, observacoes)
                    VALUES ('$nome', '$genero', '$empresadesenvolvedora', '$datalancamento', '$valor', '$observacoes')";
    $resultado_func = mysqli_query($conn, $result_func);
   
    if(mysqli_affected_rows($conn) != 0){
                echo "Produto cadastrado com sucesso";
            }else{
                echo "Erro ao cadastrar";
                   
            }
            
            
?>