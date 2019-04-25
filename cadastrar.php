<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Escola Santa Paciência</title>
    
    <?php include_once 'head.php'; ?>
    
</head>
<body>
   <div class="container" style="width: 500px;">
   <form action="gravar.php" method="post">
      
      <h3>Cadastro de Alunos</h3>
       <label >Nome</label>
       <input class="form-control" type="text" name="nome">
       <label >E-Mail</label>
       <input class="form-control" type="email" name="email">
       <label >Telefone</label>
       <input class="form-control" type="number" name="telefone">
       <input class="btn btn-primary" style="margin-top: 10px;" type="submit">
   </form>
   </div>
   
    
</body>
</html>