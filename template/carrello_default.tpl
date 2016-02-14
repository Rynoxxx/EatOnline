<div class="carrello">
    <h1>CARRELLO</h1>
    <table>
        <div id="forajax"></div>
        {if ($prodotti|@count)!=0}
            {section name=i loop=$prodotti}
                {include file="carrello_prodotto.tpl" prodotto=$prodotti[i]}
                {assign var = "subTot" value = ($prodotti[i]->getPrezzo()*$prodotti[i]->_quantita)}
                {assign var = "tot" value = ($tot + $subTot)}
            {/section}
        {/if}
        {if ($prodotti|@count)==0}
            <h2>Il tuo carrello è vuoto!</h2>
        {/if}

    </table>
    {if ($prodotti|@count)!=0}
        <div id="totale">Totale: {$tot} &euro;</div>
        <input id="conferma" type="button" value="Conferma Ordine" onclick="info()"> 
    {/if}
</div>
