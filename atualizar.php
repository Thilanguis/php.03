<?php 

include_once 'conexao.php';

$idContato = $_POST["idContato"];
$nome = $_POST["nome"];
$email = $_POST["email"];
$telefone = $_POST["telefone"];


$sql = "update aluno set nome='".$nome."', email='".$email."', telefone='".$telefone."' where matricula=".$idContato;

if(mysqli_query($con,$sql))  
    {
        ?>
        <div  class="alert alert-success" role="alert">
            Contato atualizado com sucesso!
        </div>
    
    <div id="btnConfirmacao">
        <a href="consulta.php"><button id="btnVoltar1" type="button" class="btn btn-warning">OK</button></a>
    </div>
    <?php
        
    }
    else
    {
        echo "Erro ao atualizado contato.";
    }
    
    mysqli_close($con);
?>