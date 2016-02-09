<div class="carrello">
  <h1>CARRELLO</h1>
  <table>
    {if ($prodotti|@count)!=0}
        {section name=i loop=$prodotti}
            {include file="carrello_prodotto.tpl" prodotto=$prodotti[i] }
        {/section}
    {/if}
    {if ($prodotti|@count)==0}
        <h2>Il tuo carrello è vuoto!</h2>
    {/if}

  </table>
</div>
