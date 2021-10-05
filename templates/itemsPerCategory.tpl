{if $verify == true}
        {include file="templates/adminHeader.tpl"}   
    {else}
        {include file="templates/header.tpl"}
{/if}

    

<main class="main">
    <section class="home" id="home">
        <div class="home-container re-container re-grid">
            <div class="home-info">
                <div>
                    <h2 class="item-per-categories">{$category}</h2>
                    
                    <div class="items-list">
                        <ul class="all-items-list">
                            {foreach from=$items_Category item=$Items_Category}
                                {if $Items_Category->fk_id_category == $category}
                                    <li><a class="all-items-item" href="Item/{$Items_Category->name_item}">{$Items_Category->name_item} </a>/ {$category}</li>
                                {/if}
                            {/foreach}
                        </ul>
                    </div>
                </div>
            </div>

            <div class="home-img">
                {if $category == consumables}
                    <img src="assets/img/fatVaultBoy.png" alt="vaultBoy.png">
                {else if $category == weapons}
                    <img src="assets/img/weaponVaultBoy.png" alt="vaultBoy.png">
                {else}
                <img src="assets/img/fireBoy.png" alt="vaultBoy.png">
                {/if}
            </div>
        </div>
    </section>
</main>

{include file="templates/footer.tpl"}