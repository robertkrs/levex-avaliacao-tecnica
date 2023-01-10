const agendaClick = document.querySelectorAll("#agenda");

agendaClick.forEach((e) => {
  e.addEventListener("click", function (e) {
    const principal = document.querySelector("#principal");
    var td = this.querySelectorAll("td");

    let agenda = {
      id: td[0].innerHTML,
      titulo: td[1].innerHTML,
      nome: td[2].innerHTML,
      descricao: td[3].innerHTML,
      dataInicial: td[4].innerHTML,
      dataFinal: td[5].innerHTML,
    };

    principal.innerHTML = `
    <div class="agendamentos">
        <ul class="agendamentos-menu">
          <li class='voltar'><a href="../index.php"><ion-icon name="arrow-back-outline"></ion-icon>Voltar</a></li>
          
        </ul>
      </div>
    
    <form action="./componentes/editar-agenda.php" method="POST" class="formulario" id="formulario">
    <h1>Novo Agendamento</h1>
    <div class="agenda-cliente ajuste">
      <label for="nome">
        Nome
      </label>
      <input type="text" name="nome" id="nome" placeholder="Nome do Cliente" value='${agenda.nome}'/>

    </div>
    <div class="agenda-titulo ajuste">
      <label for="titulo">
        Titulo
      </label>
      <input type="text" name="titulo" id="titulo" placeholder="Titulo do Agendamento" value='${agenda.titulo}'/>

    </div>
    <div class="agenda-conteudo ajuste">
      <label for="descricao">
        Descrição     
      </label>
      <textarea rows="5" cols="50" name="descricao" id="descricao" >${agenda.descricao}
      </textarea>
    </div>
    <div class="agenda-data">
      <label for="data-inicio">
        Data Inicial
      </label>
      <input type="date" name="data-inicio" id="data-inicio" value='${agenda.dataInicial}'/>
      <label for="data-final">
        Data Final
      </label>
      <input type="date" name="data-final" id="data-final" value='${agenda.dataFinal}'/>
    </div>
    <input type='hidden' name='id' value='${agenda.id}'>
    <input
      type="submit"
      name="submit"
      id="submit"
      value="Confirmar Agendamento"
      class="btn"
    />
      <div id='remover' class='img-remover'>
        <a href='./componentes/remove.php?id=${agenda.id}'><ion-icon src='./imagens/trash-outline.svg'></ion-icon</a>
      </div>
    </form>
   
    `;
    const remover = document.querySelector("#remover");
    remover.addEventListener("click", () => {
      confirm("Quer mesmo apagar este registro?");
    });
  });
});

//
