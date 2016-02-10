$(document).ready(function() {

  animationGrow = function(element,time) {
    time = time? time: 300;
    element.addClass("animated");
    element.addClass("grow");
    setTimeout(function(){
      element.removeClass("grow");
      setTimeout(function(){
        element.removeClass("animated");
      },time)
    },time);
  };

  ajax = function(controller, task, callback) {
    var customUrl = "index.php?controller=" + controller + "&task=" + task + "&ajax";
    $.ajax({
      url: customUrl,
      context: document.body
    }).done(function(result) {
      if (callback) {
        callback();
      }
    });
  };

  //Aggiunge un prodotto chiamando in AJAX il controller Carrello con il task AGGIUNGI
  addProdotto = function(id) {
    ajax("carrello", "aggiungi." + id, function() {
      var quantita_element = $("#prodotto-" + id).find("td.quantita");
      var quantita = quantita_element.text();
      quantita++;
      quantita_element.text(quantita);
      animationGrow(quantita_element);
    });
  };

  //Rimuove un prodotto chiamando in AJAX il controller Carrello con il task ELIMINA
  removeProdotto = function(id) {
    ajax("carrello", "elimina." + id, function() {
      var quantita_element = $("#prodotto-" + id).find("td.quantita");
      var quantita = quantita_element.text();
      quantita--;
      if (quantita > 0) {
        quantita_element.text(quantita);
        animationGrow(quantita_element);
      } else {
        $("#prodotto-" + id).hide();
      }
    });
  };

});
