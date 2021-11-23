{if $verify == true}
        {include file="templates/adminHeader.tpl"}   
    {else}
        {include file="templates/header.tpl"}
{/if}



<main class="main">
    <section class="home" id="home">
        <div class="re-container specific-item-container">
            <div class="specific-item">
                    <h1 class="specific-item-title" id= "item_tittle" data-item = "{$item->id_item}" data-rol="{$verify}" data-user="{$userId}">{$item->name_item}</h1>
                    <p class="specific-item-subtitle">Description:  {$item->description_item}</p>
                    <p>Weight : {$item->weight_item}</p>
                    <img src="{$item->image}">
            </div>
        </div>
    </section>

    <div class="re-container">
        <hr>
        <h1> Comments Section <h1>

        {if $verify == true}
            <form id= "addForm" class="hidden">
                <input type ="text" name= "comment" required>
                <select class="itemRating" name="rating">
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                    <option value="5">5</option>
                </select>
                <button class="ratingBtn" type="submit">Send Comment</button>
            </form>
            {else}
            <form id= "addForm">
                <input type ="text" name= "comment" required>
                <select class="itemRating" name="rating">
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                    <option value="5">5</option>
                </select>
                <button class="ratingBtn" type="submit">Send Comment</button>
            </form>
        {/if}

        {include file='templates\vue\commentsVue.tpl'}
    </div>
</main>

<script src = "assets\js\apiComments.js"></script>

{include file='templates/footer.tpl'}
