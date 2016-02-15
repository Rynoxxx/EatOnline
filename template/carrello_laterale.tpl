<html>

    <div class="container_side_items">
        <img class ="img_side_content" src="template/img/carrello_laterale.png"/>
        <h1>Carrello</h1>
        <div class="loginform">

            <div id="forajax_lat">
            {if $ordine.num_elementi_carrello == 0}
                <p>Il tuo carrello &egrave; vuoto</p>
            {else} 
                <table id="table_carr_lat">
                    <tr>
                        <td class="nome_colonna">Nome prodotto</td>
                        <td class="nome_colonna">Prezzo prodotto</td>
                        <td class="nome_colonna">Quantit&agrave;</td>
                    </tr>
                    {foreach from = $ordine.prodotti item = prodotto}
                        <tr id="carr_laterale_prodotto-{$prodotto.id_prodotto}">
                            <td class="nome">{$prodotto.nome_prodotto}</td>
                            <td class="prezzo">{$prodotto.prezzo_prodotto} &euro;</td>
                            <td class="quantita">{$prodotto.quantita_prodotto}</td>
                        </tr>
                    {/foreach}
                </table>
                <div id="totale_lat">Totale spesa: {$ordine.totale} &euro;</div>    
            {/if}
            </div>
        </div>
    </div>

</html>
