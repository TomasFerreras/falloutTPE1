{include file='templates/header.tpl'}
    <link rel="stylesheet" href="assets/css/style.css">

<main class="main">
    <section class="home" id="home">
        <div class="home-container re-container re-grid gridAllItems">
                
                <ul>
            {foreach from=$items item=$object}
                {if $object->name_item == $item}
                    <h1>{$object->name_item}</h1>
                   <li>Description:  {$object->description_item}</li>
                   <li>Weight : {$object->weight_item}</li>
                {/if}    
            {/foreach}
            <ul>
        </div>
    </section>
</main>

{include file='templates/footer.tpl'}
