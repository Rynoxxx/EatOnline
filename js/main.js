$(document).ready(function() {

  $("#popup").hide();

  showPopup = function(parent, title, content) {
    $("#popup").find(".title").text(title);
    $("#popup").find(".content").text(content);
    var destination = parent.offset();
    $('#popup').css({
      top: destination.top - 20,
      left: destination.left - 20
    });
    $("#popup").show('fast');
    setTimeout(function() {
      $("#popup").hide('fast');
    }, 2000);
  };

  formToJson = function(form) {
    var data = {};
    form.serializeArray().map(function(x) {
      data[x.name] = x.value;
    });
    return data;
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
        callback(result);
      }
    });
  };

  ajaxWithPostData = function(controller, task, data, callback) {
    var customUrl = "index.php?controller=" + controller + "&task=" + task + "&ajax";
    $.ajax({
      type: "POST",
      data: data,
      url: customUrl,
      context: document.body
    }).done(function(result) {
      if (callback) {
        callback(result);
      }
    });
  };

  //Aggiunge un prodotto chiamando in AJAX il controller Carrello con il task AGGIUNGI
  addProdotto = function(id) {
    ajax1("carrello", "aggiungi." + id, function() {
      var quantita_element = $("#prodotto-" + id).find("td.quantita");
      var quantita_element_lat = $("#carr_laterale_prodotto-" + id).find("td.quantita");
      var quantita = quantita_element.text();
      quantita++;

      var str_prezzo_element = $("#prodotto-" + id).find("td.prezzo");
      var str_prezzo = str_prezzo_element.text();
      var str_prezzo_array = str_prezzo.split(" ");
      var prezzo = str_prezzo_array[1];
      var str_subTot_element = $("#prodotto-" + id).find("td.subTotale");
      var subTot = prezzo * quantita;

      var str_tot_element = $("#totale");
      var str_tot = str_tot_element.text();
      var str_tot_array = str_tot.split(" ");
      var tot = parseFloat(str_tot_array[1]);
      var prezzo_num = parseFloat(prezzo);
      tot = tot + prezzo_num;

      var tot_element_lat = $("#totale_lat");

      quantita_element.text(quantita);
      quantita_element_lat.text(quantita);
      str_subTot_element.text("Sub Totale: " + subTot + " \u20ac");
      str_tot_element.text("Totale: " + tot + " \u20ac");
      tot_element_lat.text("Totale spesa: " + tot + " \u20ac");
      animationGrow(quantita_element);
    });
  };

  //Rimuove un prodotto chiamando in AJAX il controller Carrello con il task ELIMINA
  removeProdotto = function(id) {
    ajax1("carrello", "elimina." + id, function() {
      var quantita_element = $("#prodotto-" + id).find("td.quantita");
      var quantita_element_lat = $("#carr_laterale_prodotto-" + id).find("td.quantita");
      var quantita = quantita_element.text();
      quantita--;

      var str_prezzo_element = $("#prodotto-" + id).find("td.prezzo");
      var str_prezzo = str_prezzo_element.text();
      var str_prezzo_array = str_prezzo.split(" ");
      var prezzo = str_prezzo_array[1];
      var str_subTot_element = $("#prodotto-" + id).find("td.subTotale");
      var subTot = prezzo * quantita;

      var str_tot_element = $("#totale");
      var str_tot = str_tot_element.text();
      var str_tot_array = str_tot.split(" ");
      var tot = parseFloat(str_tot_array[1]);
      var prezzo_num = parseFloat(prezzo);
      tot = tot - prezzo_num;

      var tot_element_lat = $("#totale_lat");

      if (quantita > 0) {
        quantita_element.text(quantita);
        quantita_element_lat.text(quantita);
        str_subTot_element.text("Sub Totale: " + subTot + " \u20ac");
        str_tot_element.text("Totale: " + tot + " \u20ac");
        tot_element_lat.text("Totale spesa: " + tot + " \u20ac");
        animationGrow(quantita_element);
      } else {
        $("#prodotto-" + id).hide();
        $("#carr_laterale_prodotto-" + id).hide();
        str_tot_element.text("Totale: " + tot + " \u20ac");
        tot_element_lat.text("Totale spesa: " + tot + " \u20ac");
        $.ajax({
          url: "index.php?controller=ordine&task=infoOrdine&ajax",
          context: document.body
        }).done(function(result) {
          var dati = JSON.parse(result);
          console.log("Elementi rimasti: ", dati.num_elementi_carrello);
          if (dati.num_elementi_carrello === 0) {
            $("#conferma").hide();
            $("#totale").hide();
            $("#totale_lat").hide();
            $("#table_carr_lat").hide();
            $("#forajax").text("Hai svuotato il tuo carrello!");
            $("#forajax_lat").text("Non ci sono prodotti nel carrello!");
          }
        });
      }
    });
  };

  cloneItem = function(item) {
    var clone = item.clone();
    $("body").append(clone);
    clone.css("position", "absolute");
    clone.offset(item.offset());

    var target = $("#carrello_laterale");
    clone.css("left",target.offset().left);
    clone.css("top",target.offset().top);
    clone.addClass("mini");

    setTimeout(function(){
      clone.remove();
    },1000);
  }

  /**
   * Cliccando sull'immagine del carrello presente per ogni prodotto (ovvero acquistando per la prima volta un
   * prodotto), questa funzione aggiunge l'elemento al carrello rimanendo però sulla stessa pagina da cui viene
   * effettuato l'acquisto (questo perchè viene effettuata la chiama in AJAX con controller Carrello e con il task
   * AGGIUNGI).
   */
  addItem = function(id) {
    cloneItem($("#item-" + id));
    ajax1("registrazione", "isLogged", function(result) {
      var res = JSON.parse(result);
      if (res) {
        $.ajax({
          url: "index.php?controller=carrello&task=aggiungi." + id + "&ajax",
          context: document.body
        }).done(function() {
          var nome_element = $("#item-" + id).find("p.nome");
          var nome = nome_element.text();

          addItemSide(id);

          showPopup($("#item-" + id), "Prodotto aggiunto!", "Il prodotto " + nome + " è stato aggiunto al carrello");
        });
      } else {
        showPopup($("#item-" + id), "ATTENZIONE!", "Effettuare prima il LOGIN.");
      }

    });
  };

  addItemSide = function(id) {
    $.ajax({
      url: "index.php?controller=ordine&task=infoOrdine&ajax",
      context: document.body
    }).done(function(result) {
      $("#forajax_lat").empty();
      $("#totale_lat").empty();
      var dati = JSON.parse(result);
      $.get('js/template/CarrelloItem.tmpl', function(template) {
        var html = Mustache.to_html(template, dati);
        $("#forajax_lat").append(html);
        $("#totale_lat").append(dati.totale + " \u20ac");
      });
    });
  };

  /**
   * Raccoglie tutte le informazioni relative a un ordine
   * @returns {undefined}
   */
  info = function() {
    ajax1("ordine", "infoOrdine", function(result) {
      console.log("Result", result);
      var response = JSON.parse(result);
      console.log("Response", response);
      var prodotti = response.prodotti;
      for (var key in prodotti) {
        console.log("Id prodotto: " + key, prodotti[key]);
      }
    });
  };

  /**
   * Sottomette una form prodotto
   * @param  {[type]} id [description]
   * @return {[type]}    [description]
   */
  formProdottoSubmit = function(id) {
    var form = $("#prodotto-form-" + id);
    var data = formToJson(form);
    console.log(data);
    ajaxWithPostData("prodotto", "salva", data, function(result) {
      result = JSON.parse(result);
      if (result == true) {
        var msg = $("<div class='saved'>OK</div>");
        form.append(msg);
        setTimeout(function() {
          msg.hide('slow');
        }, 1000);
      }

    });
  };

});
