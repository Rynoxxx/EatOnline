<div class="content">
    {if ($prodotti|@count)!=0}
        {section name=i loop=$prodotti}
                <div class="item">
                    <p id="nome">{$prodotti[i]->getNome()}</p>  
                    <p><img id="foto" src="template/img/prodotti/primi/carbonara.jpg"/></p>
                    <p id="ingredienti"><b>Ingredienti:</b> {$prodotti[i]->getIngredienti()}</p>
                    <p id="prezzo"><b>Prezzo:</b> {$prodotti[i]->getPrezzo()} &euro;</p>
                    <img id="carrello" src="template/img/carrello.png"/>
                </div>
        {/section}
    {/if}
</div>