const agendaClick = document.querySelectorAll("#agenda");

agendaClick.forEach((e) => {
  e.addEventListener("click", function (e) {
    const tabela = document.querySelector("#edit");
    var td = this.querySelectorAll("td");

    let agenda = {
      id: td[0].innerHTML,
      titulo: td[1].innerHTML,
      nome: td[2].innerHTML,
      descricao: td[3].innerHTML,
      dataInicial: td[4].innerHTML,
      dataFinal: td[5].innerHTML,
    };

    tabela.innerHTML = `<form action="editar-agenda.php" method="POST" class="formulario" id="formulario">
      <div class="agenda-cliente">
        <label for="nome">
          Nome
          <input type="text" name="nome" id="nome" value='${agenda.nome}' />
        </label>
      </div>
      <div class="agenda-titulo">
        <label for="titulo">
          Titulo
          <input type="text" name="titulo" id="titulo" value='${agenda.titulo}'/>
        </label>
      </div>
      <div class="agenda-conteudo">
        <label for="descricao">
          Descrição
          <textarea rows="5" cols="50" name="descricao" id="descricao">${agenda.descricao}
          </textarea>
        </label>
      </div>
      <div class="agenda-data">
        <label for="data-inicio">
          Data Inicial
          <input type="date" name="data-inicio" id="data-inicio" value='${agenda.dataInicial}' />
        </label>
        <label for="data-final">
          Data Final
          <input type="date" name="data-final" id="data-final" value='${agenda.dataFinal}'/>
        </label>
      </div>
      <input type='hidden' name='id' value='${agenda.id}'/>
      <input
        type="submit"
        name="submit"
        id="submit"
        value="Confirmar Agendamento"
        class="btn"
      />
    </form>`;
  });
});
