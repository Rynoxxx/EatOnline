var myCenter = new google.maps.LatLng(42.3581397, 13.376204599999937);

/**
 * Funzione per inizializzare la mappa.
 * @returns {undefined}
 */
function initialize()
{
    /**
     * Setta le proprietà della mappa. CENTER specifica dove centrare la mappa. ZOOM specifica il livello di zoom
     * per la mappa. MAPTYPEID specifica il tipo di mappa che verrà usata (in questo caso satellitare)
     * @type type
     */
    var mapProp = {
        center: myCenter,
        zoom: 18,
        mapTypeId: google.maps.MapTypeId.SATELLITE
    };

    /**
     * Quest'istruzione crea una nuova mappa nel div con id 'googleMap', avente le caratteristiche
     * impostate in mapProp
     * @type google.maps.Map
     */
    var map = new google.maps.Map(document.getElementById("googleMap"), mapProp);

    var marker = new google.maps.Marker({
        position: myCenter,
    });

    marker.setMap(map);

    var infowindow = new google.maps.InfoWindow({
        content: "Siamo qui!"
    });

    infowindow.open(map, marker);
}

/**
 * Crea un listener per il Dom. Quando la pagina (in cui il file è incluso) sarà caricata, allora verrà invocata la
 * funzione initialize
 * @param {type} windows
 * @param {type} 'load'
 * @param {type} initialize
 */
google.maps.event.addDomListener(window, 'load', initialize);

