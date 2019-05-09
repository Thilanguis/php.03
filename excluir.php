<?php

include_once 'head.php';

if(isset($_GET["id_cliente"]))
{
    include_once 'conexao.php';
    
    $sql = "delete from aluno where matricula=".$_GET["id_cliente"];
    
    $result = mysqli_query($con, $sql);
    
    if($result){
        
                    ?>

        <div class="alert alert-success animated zoomIn container" role="alert" style="width: 300px; margin-top: 100px;">
            Contato excluido com sucesso!
        </div>

        <div id="btnConfirmacao">
            <a href="consulta.php"><button id="btnVoltar1" type="button" class="btn btn-warning animated zoomIn" style="margin-left:48%;">OK</button> </a>
        </div>
        <?php
        }
                else
                { 
                    echo "Erro ao deletar contato.";
                }
                
                mysqli_close($con);
    }

?>