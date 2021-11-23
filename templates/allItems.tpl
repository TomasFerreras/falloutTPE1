{if $verify == true}
        {include file="templates/adminHeader.tpl"}   
    {else}
        {include file="templates/header.tpl"}
{/if}


<main class="main">
    <section class="home" id="home">
        <div class="home-container-specific re-container re-grid gridAllItems">
            <div class="home-info-specific">
                <div class="items-list">
                    <ul class="all-items-list">
                        {foreach from=$items item=$item}
                            <li><a class="all-items-item" href="Item/{$item->name_item}">{$item->name_item} / <span class="all-items-category">{$item->name_category}</span></a></li>
                        {/foreach}
                    </ul>
                </div>
            </div>

            <div class="admin-img">
                <img class="admin-image" src="assets/img/allItems.png" alt="vaultBoy.png">
            </div>
        </div>
    </section>
</main>

{include file='templates/footer.tpl'}