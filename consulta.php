<!--
To change this template, choose Tools | Templates
and open the template in the editor.
-->
<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>Consulta de Alunos</title>
    </head>
    <body>
        <table> 
          <tr> 
        <td> <b>Codigo</b></td>
        <td> <b>Nome do Aluno</b></td>
        <td> <b>Materia que Cursa</b></td>
        </tr>  
        <?php
        include 'conexao.php';
        $sql="select id_aluno,nome_aluno,idade_aluno from pessoa";
        $resultado=  mysql_query($sql);
        while ($row = mysql_fetch_array($resultado)) {
            ?>
        <tr>
            <td>
                <?php echo $row ["id_aluno"];?>                             
            </td>
            <td>
                <?php echo $row ["nome_aluno"];?>                             
            </td>
            <td>
                <?php echo $row ["idade_aluno"];?>                             
            </td>
            <td>
                <a href="alterar.php?id=<?php echo $row["id_aluno"];?>"> <img src="editar.png" width="32" height="30"/> </a>                             
            </td>
            <td>
                <a href="excluir.php?id=<?php echo $row["id_aluno"];?>"> <img src="delete.png" width="32" height="30"/> </a>                             
            </td>
            
            
                       
        </tr>
    <?php 
}
        
                ?>
        </table>
    </body>
</html>
