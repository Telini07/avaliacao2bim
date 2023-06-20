<?php
    include('conexao.php');
    $id = $_POST['id'];
    $data = $_POST['data'];
    $tipo = $_POST['tipo'];
    $valor = $_POST['valor'];
    $historico = $_POST['historico'];
    $cheque = $_POST['cheque'];

    echo "<h1>Alterar dados de agenda</h1><hr>";
    echo "<h2>Usuario:$historico</h2>";
    $sql = "UPDATE fluxo_caixa set data = '$data', 
    tipo = '$tipo', 
    valor = '$valor', 
    historico = '$historico',
    cheque = '$cheque'  

    WHERE id = $id";

    echo $sql;
    $result = mysqli_query($con,$sql);
    if($result){
        echo "<h3>Dados alterados com sucesso!</h3><br>";
    }else{
        echo "<h3>Erro ao alterar dados: ". mysqli_error($con)."!</h3>";
    }
    
?>
 <a href = "listar_fluxo_caixa.php"><button>Voltar</button></a>