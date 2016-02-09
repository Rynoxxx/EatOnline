<tr class="prodotto item">
    <td class="nome">{$prodotto->getNome()}</td>
    <td class="image">
        <img id="foto" src="template/img/prodotti/{$prodotto->getImmagine()}"/>
    </td>
    <td class="prezzo"><b>Prezzo:</b> {$prodotto->getPrezzo()} &euro;</td>
    <td class="quantita"><b>{$prodotto->_quantita}</td>
    <td class="buttons"><a  href="index.php?controller=carrello&task=aggiungi.{$prodotto->getId()}" class="inc-button">+</a>
    <a  href="index.php?controller=carrello&task=elimina.{$prodotto->getId()}" class="inc-button">-</a></td>
</tr>
