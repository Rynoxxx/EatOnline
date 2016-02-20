<tr id="prodotto-{$prodotto->getId()}" class="item">
  <td class="nome">{$prodotto->getNome()}</td>
  <td class="image">
    <img id="foto" src="template/img/prodotti/{$prodotto->getImmagine()}" />
  </td>
  <td class="prezzo">Prezzo: {$prodotto->getPrezzo()} &euro;</td>
  <td class="subTotale">Sub Totale: {$prodotto->getPrezzo()*$prodotto->_quantita} &euro;</td>
  <td class="quantita">{$prodotto->_quantita}</td>
  <td class="buttons">
    <button  onclick="addProdotto({$prodotto->getId()})" class="inc-button">+</button>
    <button  onclick="removeProdotto({$prodotto->getId()})" class="inc-button">-</button>
  </td>
</tr>
