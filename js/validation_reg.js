$(document).ready(function() {
  $("#form_reg").validate({
    rules: {
      numero_tel: {
        required: true,
        minlength: 5,
        maxlength: 12,
        remote: {
          url: "index.php?controller=registrazione&task=isRegistered&ajax",
          type: "post",
          data: {
            numero_tel: function() {
              return $('#numero_tel').val();
            }
          }
        }
      },
      password: {
        required: true,
        minlength: 5
      },
      password_1: {
        required: true,
        minlength: 5,
        equalTo: "#password"
      },
      nome: {
        required: true
      },
      cognome: {
        required: true
      },
      via: {
        required: true
      },
      citta: {
        required: true
      },
      cap: {
        minlength: 5
      },
      email: {
        required: true,
        email: true
      }
    },
    messages: {
      numero_tel: {
        required: "Inserire il numero di telefono",
        minlength: "Il numero deve essere compreso tra 5 e 12 caratteri",
        maxlength: "Il numero deve essere compreso tra 5 e 12 caratteri",
        remote: "Utente già registrato"
      },
      password: {
        required: "Inserisci la password",
        minlength: "La password deve essere di almeno 5 caratteri"
      },
      password_1: {
        required: "Inserisci nuovamente la password",
        minlength: "La password deve essere di almeno 5 caratteri",
        equalTo: "Le due password NON coincidono"
      },
      nome: "Inserisci il tuo nome",
      cognome: "Inserisci il tuo cognome",
      via: "Inserisci Via e Numero Civico",
      citta: "Inserisci la città di residenza",
      cap: "Il cap è composto da 5 caratteri",
      email: "Inserisci un indirizzo email corretto"
    }
  });
});
