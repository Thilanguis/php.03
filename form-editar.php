<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Escola Santa Paciência</title>
    
    <?php include_once 'head.php'; ?>
    
</head>
<body>
  
  <?php 
    
    if(isset($_GET["idContato"]))
    {
    
         include_once 'conexao.php';
       
       $sql = "select * from aluno where matricula=".$_GET["idContato"];
       
       $result = mysqli_query($con, $sql);
       
       $row = mysqli_fetch_array($result);
    
    ?>
   <div class="container" style="width: 500px;">
   <form action="gravar.php" method="post">
      
      <h3>Cadastro de Alunos</h3>
       <label >Nome</label>
       <input class="form-control" type="text" name="nome" value="<?php echo $row["nome"]; ?>">
       <label >E-Mail</label>
       <input class="form-control" type="email" name="email" value="<?php echo $row["email"]; ?>">
       <label >Telefone</label>
       <input class="form-control" type="number" name="telefone" value="<?php echo $row["telefone"]; ?>">
       <input class="btn btn-primary" style="margin-top: 10px;" type="submit">
   </form>
   </div>
   <?php } ?>
    
</body>
</html>