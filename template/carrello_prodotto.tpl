<tr id="prodotto-{$prodotto->getId()}" class="prodotto item">
  <td class="nome">{$prodotto->getNome()}</td>
  <td class="image">
    <img id="foto" src="template/img/prodotti/{$prodotto->getImmagine()}" />
  </td>
  <td class="prezzo"><b>Prezzo:</b> {$prodotto->getPrezzo()} &euro;</td>
  <td class="quantita">{$prodotto->_quantita}</td>
  <td class="buttons">
    <a  onclick="addProdotto({$prodotto->getId()})" class="inc-button">+</a>
    <a  onclick="removeProdotto({$prodotto->getId()})" class="inc-button">-</a>
  </td>
</tr>
