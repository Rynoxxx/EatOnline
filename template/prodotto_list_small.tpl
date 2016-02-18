{if $admin}
<div class="content">

  {if ($prodotti|@count)!=0} {section name=i loop=$prodotti}
  <div class="prodotto-edit">
    <form class="prodotto-form" id="prodotto-form-{$prodotti[i]->getId()}">
      <input class="id" type="text" name="id" value="{$prodotti[i]->getId()}" readonly/>
      <input class="nome" type="text" name="nome" value="{$prodotti[i]->getNome()}" />
      <br>
      <textarea rows=4 class="ingredienti" type="text" name="ingredienti" value="">{$prodotti[i]->getIngredienti()}</textarea>
      <br>
      <input class="prezzo" type="text" name="prezzo" value="{$prodotti[i]->getPrezzo()}" />
    </form>
    <button class="salva" onclick="formProdottoSubmit({$prodotti[i]->getId()})">Salva</button>
  </div>
  {/section} {/if}
</div>
{else}
<div class="noauth">NON AUTORIZZATO!</div>
{/if}
