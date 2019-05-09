function excluir(id) {
    if(confirm('Tem certeza que deseja excluir o contato?')){
         location.href = 'excluir.php?id_cliente=' + id;
    }
}