<?php

$id_aluno = $_POST["id"];
$nome_aluno = $_POST["nome_aluno"];
$nome_materia = $_POST["materia"];

include 'conexao.php';

$sql = "update pessoa set nome_aluno='$nome_aluno',materia='$nome_materia' where id_aluno=$id_aluno;";
mysql_query($sql);
mysql_close($conexao);
echo "<script>document.location = 'consulta.php'</script>";
?>
