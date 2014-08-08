<!--
To change this template, choose Tools | Templates
and open the template in the editor.
-->
<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        $id=$_GET["id"];
        include 'conexao.php';
        $sql="select id_aluno,nome_aluno,materia from pessoa where id_aluno=$id";
        $resultado=  mysql_query($sql);
        $id_aluno =mysql_result($resultado,0, "id_aluno");
        $nome_aluno =mysql_result($resultado,0,"nome_aluno");
        $materia =mysql_result($resultado,0,"materia");
        ?>
        <form method="post" action="update_aluno.php">
            
             
            <input type='hidden' name="id" readonly="true" value="<?php echo $id_aluno?>" size="1"/>
                   Nome do aluno <input type="text" name="nome_aluno" size="60" value="<?php echo $nome_aluno?>"/><br>
            materia: <input type="text" name="materia" size="60" value="<?php echo $materia?>"/><br>
            
                <input type="submit" value ="Enviar"/>&nbsp<input type="reset" value ="Limpar"/>
            
            
        </form>
    </body>
</html>
