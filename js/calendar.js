/**
 * Função para alterar o formato da data
 * 
 * @Author Henrique Dalmagro
 */
document.addEventListener("DOMContentLoaded", function () {
  // Definindo o formato de data
  var options = {
    autoClose: true,
    format: "yyyy-mm-dd",
  };
  // Varculhando pelo primeiro elemento com esta classe
  var elems = document.querySelectorAll(".datepicker");
  M.Datepicker.init(elems, options);
});
