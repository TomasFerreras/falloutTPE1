{if $verify == true}
        {include file="templates/adminHeader.tpl"}   
    {else}
        {include file="templates/header.tpl"}
{/if}



<main class="main">
    <section class="home" id="home">
        <div class="home-container re-container specific-item-container">
            <div class="specific-item">
                {foreach from=$items item=$object}
                    {if $object->name_item == $item}
                        <h1 class="specific-item-title">{$object->name_item}</h1>
                        <p class="specific-item-subtitle">Description:  {$object->description_item}</p>
                        <p>Weight : {$object->weight_item}</p>
                    {/if}    
                {/foreach}
            </div>
        </div>
    </section>
</main>

{include file='templates/footer.tpl'}
