<?php

$id_aluno = $_GET["id"];

include 'conexao.php';

$sql = "delete from pessoa where id_aluno=$id_aluno;";
mysql_query($sql);
mysql_close($conexao);
echo "<script>document.location = 'consulta.php'</script>";

?>
