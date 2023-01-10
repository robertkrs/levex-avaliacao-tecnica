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

    <main class="main">
      <div class="agendamentos">
        <ul class="agendamentos-menu">
          <li class="agenda-on"><a href="/index.php">Todos</a></li>
          <li>Agendamentos Passados</li>
          <li>Agendamentos Próximos</li>
        </ul>
      </div>

      <form action="adicionaSQL.php" method="POST" class="formulario" id="formulario">
        <h1>Novo Agendamento</h1>
        <div class="agenda-cliente">
          <label for="nome">
            Nome
          <input type="text" name="nome" id="nome" />
          </label>
        </div>
        <div class="agenda-titulo">
          <label for="titulo">
            Titulo
            <input type="text" name="titulo" id="titulo" />
          </label>
        </div>
        <div class="agenda-conteudo">
          <label for="descricao">
            Descrição
            <textarea rows="5" cols="50" name="descricao" id="descricao">
            </textarea>
          </label>
        </div>
        <div class="agenda-data">
          <label for="data-inicio">
            Data Inicial
            <input type="date" name="data-inicio" id="data-inicio" />
          </label>
          <label for="data-final">
            Data Final
            <input type="date" name="data-final" id="data-final" />
          </label>
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

    <script src="/js/script.js"></script>
  </body>
</html>
