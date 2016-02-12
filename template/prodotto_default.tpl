<div id="item-{$prodotto->getId()}" class="prodotto item">
    <p class="nome">{$prodotto->getNome()}</p>
    <p>
        <img class="foto" src="template/img/prodotti/{$prodotto->getImmagine()}"/>
    </p>
    <p class="ingredienti"><b>Ingredienti:</b> {$prodotto->getIngredienti()|truncate:100:" [...]"}</p>
    <p class="prezzo"><b>Prezzo:</b> {$prodotto->getPrezzo()} &euro;</p>
    <img onclick="addItem({$prodotto->getId()})" class="carrello" src="template/img/carrello.png"/>
</div>
