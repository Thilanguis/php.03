<?php

include_once 'conexao.php';

$nome = $_POST["nome"];
$email = $_POST["email"];
$telefone = $_POST["telefone"];

echo $nome. "<br>";
echo $email. "<br>";
echo $telefone. "<br>";


$sql = "insert into aluno values ('null', '".$nome."', '".$email."', '".$telefone."')";

$resultado = mysqli_query ($con, $sql);

if ($sql)
{
    echo "Dados gravados com sucesso";
    ?> <a href="consulta.php"></a><button>Ok</button> <?php
}
else{
    echo "Erro ao gravar no banco!";
}

mysqli_close($con);

?>