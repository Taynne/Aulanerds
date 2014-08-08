<?php
$nome_aluno = $_POST["nome_aluno"];
$idade_aluno = $_POST["idade_aluno"];

include 'conexao.php';

$sql = "insert into pessoa(nome_aluno,materia)values ('$nome_aluno','$nome_materia');";
mysql_query($sql); #abre conexao
mysql_close($conexao); #Fecha conexao
echo "<script>document.location = 'index.php'</script>";


?>
