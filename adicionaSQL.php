<?php

if(isset($_POST['submit'])){
    include_once('./config.php');
    
    $nome = $_POST['nome'];
    $titulo = $_POST['titulo'];
    $descricao = $_POST['descricao'];
    $dataInicial = $_POST['data-inicio'];
    $dataFinal = $_POST['data-final'];

    $result = mysqli_query($conexao,"INSERT INTO agendamento(cliente_agenda,titulo_agenda,descricao_agenda,data_inicial_agenda, data_final_agenda) VALUES ('$nome','$titulo','$descricao','$dataInicial','$dataFinal')");

    $sql = "SELECT * FROM agendamento";
    $resultx = $conexao->query($sql);

    if(mysqli_num_rows($resultx) >= 1){
        header("location:index.php");
    }else{
        return false;
    }
}

?>