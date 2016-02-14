<?php
// La lettera \b nel criterio indica i limiti della parola. Così verrà riconosciuta solo
// la parola "web" e non parte di una parola più lunga come "webbing" oppure "cobweb"
if (preg_match("/\bweb\b/i", "PHP è un linguaggio di programmazione per il web scelto da molti.")) {
    echo "Il riconoscimento è avvenuto.";
} else {
    echo "Testo non riconosciuto.";
}
if (preg_match("/\bweb\b/i", "PHP è un linguaggio di programmazione installato su molti website")) {
    echo "Il riconoscimento è avvenuto.";
} else {
    echo "Testo non riconosciuto.";
}
?>