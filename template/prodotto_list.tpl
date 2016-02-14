<div class="content">
    <div class="content_title">{$content_title}</div>
    {if ($prodotti|@count)!=0}
        {section name=i loop=$prodotti}
            {include file="prodotto_default.tpl" prodotto=$prodotti[i] }
            {if $smarty.section.i.iteration % 3 == 0}
                <div class="interline_space"></div>
            {/if}
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
