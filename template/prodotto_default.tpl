<div class="content">
    {if $cane=!false}
        <ul>
            {section name=i loop=$prodotti}
                <div class="item">
                    <li>
                        {$prodotti[i]->getNome()}
                        {$prodotti[i]->getIngredienti()}
                        {$prodotti[i]->getPrezzo()}
                    </li>
                </div>
            {/section}
        </ul>
    {/if}
</div>