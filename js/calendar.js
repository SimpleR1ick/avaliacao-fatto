document.addEventListener("DOMContentLoaded", function () {
  // Definindo o formato de data
  var options = {
    autoClose: true,
    format: "yyyy-mm-dd",
  };

  var elems = document.querySelectorAll(".datepicker");
  var instances = M.Datepicker.init(elems, options);
});
