<div class="content">
  {if ($prodotti|@count)!=0}
      {section name=i loop=$prodotti}
          {include file="prodotto_default.tpl" prodotto=$prodotti[i] }
      {/section}
  {/if}
</div>
