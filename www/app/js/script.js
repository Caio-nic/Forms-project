document.addEventListener("DOMContentLoaded", function () {
  var button = document.getElementById("button");
  var inputName = document.getElementById("name");

  button.addEventListener("click", function () {
    if (inputName.value() !== "") {
      alert("Dados enviados com sucesso!");
    } else {
      alert("Por favor, preencha o campo antes de continuar.");
    }
  });
});
