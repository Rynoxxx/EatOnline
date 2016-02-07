<div class="prodotto item">
  <p id="nome">{$prodotto->getNome()}</p>
  <p>
    <img id="foto" src="template/img/prodotti/primi/carbonara.jpg" />
  </p>
  <p id="ingredienti"><b>Ingredienti:</b> {$prodotto->getIngredienti()}</p>
  <p id="prezzo"><b>Prezzo:</b> {$prodotto->getPrezzo()} &euro;</p>
  <img id="carrello" src="template/img/carrello.png" />
</div>
