$(document).ready(function() {

  $("#popup").hide();

  showPopup = function(parent,title, content) {
    $("#popup").find(".title").text(title);
    $("#popup").find(".content").text(content);
    var e = window.event;
    var posX = e.pageX;
    var posY = e.pageY;
    console.log(posX);
    var destination = parent.offset();
    $('#popup').css({top: destination.top-20, left: destination.left-20});
    $("#popup").show('fast');
    setTimeout(function() {
      $("#popup").hide('fast');
    }, 2000);
  };

  animationGrow = function(element, time) {
    time = time ? time : 300;
    element.addClass("animated");
    element.addClass("grow");
    setTimeout(function() {
      element.removeClass("grow");
      setTimeout(function() {
        element.removeClass("animated");
      }, time)
    }, time);
  };

  ajax1 = function(controller, task, callback) {
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
    ajax1("carrello", "aggiungi." + id, function() {
      var quantita_element = $("#prodotto-" + id).find("td.quantita");
      var quantita = quantita_element.text();
      quantita++;
      var str_prezzo_element = $("#prodotto-" + id).find("td.prezzo");
      var str_prezzo = str_prezzo_element.text();
      var str_prezzo_array = str_prezzo.split(" ");
      var prezzo = str_prezzo_array[1];
      var str_subTot_element = $("#prodotto-" + id).find("td.subTotale");
      subTot = prezzo * quantita;
      quantita_element.text(quantita);
      str_subTot_element.text("Sub Totale: " + subTot + " \u20ac");
      animationGrow(quantita_element);
    });
  };

  //Rimuove un prodotto chiamando in AJAX il controller Carrello con il task ELIMINA
  removeProdotto = function(id) {
    ajax1("carrello", "elimina." + id, function() {
      var quantita_element = $("#prodotto-" + id).find("td.quantita");
      var quantita = quantita_element.text();
      quantita--;
      if (quantita > 0) {
        var str_prezzo_element = $("#prodotto-" + id).find("td.prezzo");
        var str_prezzo = str_prezzo_element.text();
        var str_prezzo_array = str_prezzo.split(" ");
        var prezzo = str_prezzo_array[1];
        var str_subTot_element = $("#prodotto-" + id).find("td.subTotale");
        subTot = prezzo * quantita;
        quantita_element.text(quantita);
        str_subTot_element.text("Sub Totale: " + subTot + " \u20ac");
        animationGrow(quantita_element);
      } else {
        $("#prodotto-" + id).hide();
      }
    });
  };


  /**
   * Cliccando sull'immagine del carrello presente per ogni prodotto (ovvero acquistando per la prima volta un
   * prodotto), questa funzione aggiunge l'elemento al carrello rimanendo però sulla stessa pagina da cui viene
   * effettuato l'acquisto (questo perchè viene effettuata la chiama in AJAX con controller Carrello e con il task
   * AGGIUNGI).
   */
  addItem = function(id) {
    ajax1("carrello", "aggiungi." + id, function() {
      var nome_element = $("#item-" + id).find("p.nome");
      var nome = nome_element.text();
      var w = Math.floor((screen.availWidth) / 4);
      var h = Math.floor((screen.availHeight) / 2);
      //var myWindow = window.open("", "", "width = 580, height = 80, top = " + h + ",left = " + w);
      var content = ("<title>EatOnline</title><body bgcolor = #550000><p align = center><font size = 6px color = #ffffff>Il prodotto \'" + nome + "\' è stato aggiunto al carrello!</font></p></body>");
      //myWindow.document.write(content);
      showPopup($("#item-" + id),"Prodotto aggiunto!", "Il prodotto " + nome + " è stato aggiunto al carrello");
    });
  };

});
