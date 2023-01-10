<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="/css/reset.css" />
    <link rel="stylesheet" href="/css/style.css" />
    <title>Levex - Novo Agendamento</title>
  </head>
  <body>
    <header class="header">
      <div class="img">
        <img src="../imagens/logo.png" alt="logo-empresa" />
      </div>
    </header>

    <main class="main">
      <div class="agendamentos">
        <ul class="agendamentos-menu">
          <li class='voltar'><a href="../index.php"><ion-icon name="arrow-back-outline"></ion-icon>Voltar</a></li>
          
        </ul>
      </div>

      <form action="adicionaSQL.php" method="POST" class="formulario" id="formulario" required>
        <h1>Novo Agendamento</h1>
        <div class="agenda-cliente ajuste">
          <label for="nome">
            Nome
          </label>
          <input type="text" name="nome" id="nome" placeholder="Nome do Cliente" required/>

        </div>
        <div class="agenda-titulo ajuste">
          <label for="titulo">
            Titulo
          </label>
          <input type="text" name="titulo" id="titulo" placeholder="Titulo do Agendamento" required/>

        </div>
        <div class="agenda-conteudo ajuste">
          <label for="descricao">
            Descrição     
          </label>
          <textarea rows="5" cols="50" name="descricao" id="descricao">
          </textarea>
        </div>
        <div class="agenda-data">
          <label for="data-inicio">
            Data Inicial
          </label>
          <input type="date" name="data-inicio" id="data-inicio" required/>
          <label for="data-final">
            Data Final
          </label>
          <input type="date" name="data-final" id="data-final" required/>
        </div>
        <input
          type="submit"
          name="submit"
          id="submit"
          value="Confirmar Agendamento"
          class="btn"
        />
      </form>
    </main>
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
    <script src="../js/script.js"></script>
  </body>
</html>
