{if $admin}
    <div class="content">

        {if ($prodotti|@count)!=0}
            <div class="content_title">{$content_title}</div>
            {section name=i loop=$prodotti}
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
            {/section} 
        {/if}
        {if $num_pages!=1}
        <div class="navig_pages">
            {section name=pages loop=$num_pages}
                <a href="index.php?controller=prodotto&task={$task}&page={$smarty.section.pages.iteration-1}">{$smarty.section.pages.iteration}</a>
            {/section}
        </div>
        {/if}
    </div>
{else}
    <div class="noauth">NON AUTORIZZATO!</div>
{/if}
