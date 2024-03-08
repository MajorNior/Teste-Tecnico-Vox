function exibirModalConfirmacao(urlAcao) {
  var modal = document.getElementById("confirmacaoExclusao");
  modal.style.display = "block";

  var formExclusao = document.getElementById("formExclusao");
  formExclusao.action = urlAcao;
}

function fecharModalConfirmacao() {
  var modal = document.getElementById("confirmacaoExclusao");
  modal.style.display = "none";
}
