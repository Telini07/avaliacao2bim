<?php
include('conexao.php');
$id = $_GET['id'];

$sql = "DELETE FROM fluxo_caixa WHERE id = $id";

echo $sql;
$result = mysqli_query($con,$sql);
if($result){
    echo "<h3>Dados apagados com sucesso!</h3><br>";
}else{
    echo "<h3>Erro ao apagar dados: ". mysqli_error($con)."!</h3>";
}

?>
<a href = "listar_fluxo_caixa.php"><button>Voltar</button></a>