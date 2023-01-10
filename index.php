<?php
    include_once('./config.php');
   

    $sqlCadastros = "SELECT * FROM agendamento";
    $result = $conexao->query($sqlCadastros);
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="/css/reset.css" />
    <link rel="stylesheet" href="/css/style.css" />
    <title>Document</title>
  </head>
  <body>
    <header class="header">
      <div class="img">
        <img src="/imagens/logo.png" alt="logo-empresa" />
      </div>
    </header>

    <main class="main" id='principal'>
      <div class="agendamentos">
        <ul class="agendamentos-menu" id='filtros'>
          <li class="agenda-on">Todos</li>
          <li>Agendamentos Passados</li>
          <li>Agendamentos Próximos</li>
        </ul>
      </div>
      <div >
      <table class="table" >
        <thead>
          <tr>
            <th>id</th>
            <th>titulo</th>
            <th>cliente</th>
            <th>descricao</th>
            <th>data-inicial</th>
            <th>data-final</th>
          </tr>
        </thead>
        <tbody>
        <?php 
        while($user_data = mysqli_fetch_assoc($result)){
          echo "<tr id='agenda'>";
          echo"<td id='id-a'>".$user_data['id_agenda'];"</td>";
          echo"<td id='titulo'>".$user_data['titulo_agenda'];"</td>";
          echo"<td id='cliente'>".$user_data['cliente_agenda'];"</td>";
          echo"<td id='descr'>".$user_data['descricao_agenda'];"</td>";
          echo"<td id='data-i'>".$user_data['data_inicial_agenda'];"</td>";
          echo"<td id='data-f'>".$user_data['data_final_agenda'];"</td>";
        echo "</tr> ";
        }
        
        
        ?>
          
        </tbody>
      </table>
      <div class='icone-adicionar'>
        <a href='./adiciona-agenda.php' ><ion-icon src='./imagens/calendar-outline.svg'></ion-icon></a>
      </div>
   
    </div>
    

    </main>

    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
    <script src="/js/script.js"></script>
    <script src="js/filtro.js"></script>
  </body>
</html>
