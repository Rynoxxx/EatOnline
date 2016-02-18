<div id="item-{$prodotto->getId()}" class="prodotto item">
  <div class="foto-container">
  <img class="foto" src="template/img/prodotti/{$prodotto->getImmagine()}" />
</div>
  <p class="nome">{$prodotto->getNome()}</p>
  <p class="ingredienti"><b>Ingredienti:</b> {$prodotto->getIngredienti()|truncate:100:" [...]"}</p>
  <p class="prezzo">{$prodotto->getPrezzo()} &euro;</p>
  <img onclick="addItem({$prodotto->getId()})" class="carrello" src="template/img/carrello.png" />
</div>
