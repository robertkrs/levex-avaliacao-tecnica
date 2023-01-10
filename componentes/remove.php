<?php
    include_once('../config.php');
    if(!empty($_GET['id'])){

        $id = $_GET['id'];
        $sqlSelect = "SELECT * FROM agendamento WHERE id_agenda = $id";
        $result = $conexao->query($sqlSelect);
      
        if($result->num_rows > 0){
            $sqlDelete = "DELETE FROM agendamento WHERE id_agenda  = $id";
            $result2 = $conexao->query($sqlDelete);
            
        }
        header("location:../index.php");

    }
    else{
        header("location:../index.php");
    }
?>