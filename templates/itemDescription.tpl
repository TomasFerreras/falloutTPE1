{if $verify == true}
        {include file="templates/adminHeader.tpl"}   
    {else}
        {include file="templates/header.tpl"}
{/if}



<main class="main">
    <section class="home" id="home">
        <div class="re-container specific-item-container">
            <div class="specific-item">
                {foreach from=$items item=$object}
                    {if $object->name_item == $item}
                        <h1 class="specific-item-title" id= "item_tittle" data-item = "{$object->id_item}">{$object->name_item}</h1>
                        <p class="specific-item-subtitle">Description:  {$object->description_item}</p>
                        <p>Weight : {$object->weight_item}</p>
                    {/if}    
                {/foreach}
            </div>
        </div>
    </section>

    <div class="re-container">
        <hr>
        
        <h1> Comments Section <h1>
        <form action = "api/item/{$item}">
            <input type ="text" required>
            <select class="itemRating">
                <option>0</option>
                <option>1</option>
                <option>2</option>
                <option>3</option>
                <option>4</option>
                <option>5</option>
            </select>
            <button class="ratingBtn" type = "submmit">Send Comment</button>
        </form>
        {include file='templates\vue\commentsVue.tpl'}
    </div>

    

  
</main>

<script src = "assets\js\apiComments.js"></script>

{include file='templates/footer.tpl'}
