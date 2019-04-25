<!DOCTYPE html>
<html lang="en">
<head>
   
    <meta charset="UTF-8">
    <title>Document</title>
    <?php include_once 'head.php'; ?>
    
</head>
<body>
   
    <div class="container" style="width: 500px;">
    <h3>Consutar Contatos!</h3>
    <form action="" method="get">
    <label>Nome</label>
    <div class="form-group">
    <input type="text" name="nome" class="form-control">
    <div style="margin-top: 10px;">
    <input type="submit" value="Buscar" class="btn btn-primary">
    </div>
    </div>
    </form>
    </div>
    
    <div class="container">
    <?php
    
      if(isset($_GET["nome"]))
         {
    $nome = $_GET["nome"];
        
        include_once 'conexao.php ';
    
    $sql = "select * from aluno where nome like '%".$nome."%' order by nome";
    
        $result = mysqli_query ($con,$sql);
        
        $totalRegistros = mysqli_num_rows ($result);
        
        if ($totalRegistros > 0)
         
            { ?>
        <table id="tabelaDinamica" class="table table-hover table-stiped">
            <tr>
                <th>Nome</th>
                <th>E-mail</th>
                <th>Telefone</th>
                <td>Editar</td>
                 <td>Excluir</td>
            </tr>

            <?php
                    while($row = mysqli_fetch_array($result))
                    {
                        echo "<tr>";
                        echo "<td>".$row["nome"]."</td>";
                        echo "<td>".$row["email"]."</td>";
                        echo "<td>".$row["telefone"]."</td>";
                        echo "<td>...</td>";                         echo "<td>X</td>"; 
                        echo "<tr>";
                    } ?>
        </table>
        <?php 
        }
             else{
                 echo "Nenhum registro encontrado!";
             }
             }
    ?>
    </div>
    
    
</body>
</html>