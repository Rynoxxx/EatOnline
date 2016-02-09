<div class="prodotto item">
    <p id="nome">{$prodotto->getNome()}</p>
    <p>
        <img id="foto" src="template/img/prodotti/{$prodotto->getImmagine()}"/>
    </p>
    <p id="ingredienti"><b>Ingredienti:</b> {$prodotto->getIngredienti()|truncate:100:" [...]"}</p>
    <p id="prezzo"><b>Prezzo:</b> {$prodotto->getPrezzo()} &euro;</p>
    <a href="index.php?controller=ordina&task=acquista"><img id="carrello" src="template/img/carrello.png" /></a>
</div>
