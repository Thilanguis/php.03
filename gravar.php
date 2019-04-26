<?php
include_once 'head.php';
include_once 'conexao.php';

$nome = $_POST["nome"];
$email = $_POST["email"];
$telefone = $_POST["telefone"];

$sql = "insert into aluno values ('null', '".$nome."', '".$email."', '".$telefone."')";

$resultado = mysqli_query ($con, $sql);

if ($sql)
{
    echo "Dados gravados com sucesso <br>";
    ?> <a href="index.php"><button class="btn btn-success">Ok</button></a> <?php
}
else{
    echo "Erro ao gravar no banco!";
}

mysqli_close($con);

?>