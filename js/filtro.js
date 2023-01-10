const lista = document.querySelectorAll("#filtros");

lista.forEach((e) => {
  e.addEventListener("click", function (e) {
    let possui = document.querySelector(".agenda-on");
    if (possui) {
      possui.classList.remove("agenda-on");
      if (e.target.classList.contains("agenda-on")) {
        console.log("ja tem");
      } else {
        e.target.classList.add("agenda-on");
        if (e.target.innerHTML == "Agendamentos Passados") {
          filtrarPassado();
        }
        if (e.target.innerHTML == "Agendamentos Próximos") {
          filtrarProximo();
        }
        if (
          e.target.innerHTML != "Agendamentos Próximos" &&
          e.target.innerHTML != "Agendamentos Passados"
        ) {
          const agenda = document.querySelectorAll("#agenda");
          agenda.forEach((e) => {
            if (e.classList.contains("hidden")) {
              e.classList.remove("hidden");
            }
          });
        }
      }
    } else {
      e.target.classList.add("agenda-on");
      filtrar();
    }
  });
});

function filtrarPassado() {
  const agenda = document.querySelectorAll("#agenda");

  agenda.forEach((elemento) => {
    dataFinal = elemento.querySelectorAll("#data-f");

    dataFinal.forEach((e) => {
      if (e.innerHTML < "2023-01-10") {
        if (elemento.classList.contains("hidden")) {
          elemento.classList.remove("hidden");
        }
      } else {
        elemento.classList.add("hidden");
      }
    });
  });
}
function filtrarProximo() {
  const agenda = document.querySelectorAll("#agenda");

  agenda.forEach((elemento) => {
    dataFinal = elemento.querySelectorAll("#data-f");

    dataFinal.forEach((e) => {
      if (e.innerHTML > "2023-01-10") {
        if (elemento.classList.contains("hidden")) {
          elemento.classList.remove("hidden");
        }
      } else {
        elemento.classList.add("hidden");
      }
    });
  });
}
