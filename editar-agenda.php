<?php

if(isset($_POST['submit'])){
    include_once('./config.php');
    
    $id = $_POST['id'];
    $nome = $_POST['nome'];
    $titulo = $_POST['titulo'];
    $descricao = $_POST['descricao'];
    $dataInicial = $_POST['data-inicio'];
    $dataFinal = $_POST['data-final'];

    $result = mysqli_query($conexao,"UPDATE agendamento SET cliente_agenda = '$nome',titulo_agenda = '$titulo',descricao_agenda = '$descricao',data_inicial_agenda = '$dataInicial', data_final_agenda = '$dataFinal' WHERE $id = id_agenda" );

    $sql = "SELECT * FROM agendamento where cliente_agenda = '$nome'";
    $resultx = $conexao->query($sql);

    if(mysqli_num_rows($resultx) >= 1){
        header("location:index.php");
    }else{
        return false;
    }
}

?>