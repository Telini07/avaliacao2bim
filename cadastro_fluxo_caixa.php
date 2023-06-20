<?php
include("conexao.php");
$data = $_POST['data'];
$tipo = $_POST['tipo'];
$valor = $_POST['valor'];
$historico = $_POST['historico'];
$cheque = $_POST['cheque'];


$sql = "INSERT INTO fluxo_caixa (data, tipo, valor, historico, cheque)";
    $sql .= " VALUES ('".$data."','".$tipo."','".$valor."','".$historico."','".$cheque."')";
    
    echo $sql."<br>";
    $result = mysqli_query($con, $sql);
    
    if($result)
        echo "<strong>Dados cadastrados com sucesso!</strong>";
    else
        echo "<strong>Erro ao tentar cadastrar!<strong>";    

?>
<a href = "index.php"><button>Voltar</button></a>