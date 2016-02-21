<div class="msg_postContactForm">
    <h2>E' stato riscontrato un problema...</h2>
    {if $errore.attivazione != ''}
        <h3>{$errore.attivazione}</h3>
    {else}
        <h3>{$errore.registrazione}</h3>
    {/if}
</div>