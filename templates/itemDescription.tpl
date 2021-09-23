{include file='templates/header.tpl'}
    <link rel="stylesheet" href="assets/css/style.css">

<main class="main">
    <section class="home" id="home">
        <div class="home-container re-container re-grid gridAllItems">
                <h1>{$item}</h1>
            {foreach from=$items item=$object}
            {if $object->name_item == $item}
                
            {/if}    
            {/foreach}
            <div></div>


        </div>
    </section>
</main>

{include file='templates/footer.tpl'}
