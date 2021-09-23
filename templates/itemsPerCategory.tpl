{include file='templates/header.tpl'}
    <link rel="stylesheet" href="assets/css/style.css">

<main class="main">
    <section class="home" id="home">
        <div class="home-container re-container re-grid">
            <div class="home-info">
                <div>
                    <h2 class="item-per-categories">{$category}</h2>
                    
                    <div class="items-list">
                        <ul class="all-items-list">
                            {foreach from=$items_Category item=$Items_Category}
                                {if $Items_Category->category == $category}
                                    <li><a class="all-items-item" href="#">{$Items_Category->name_item} </a>/ {$category}</li>
                                {/if}
                            {/foreach}
                        </ul>
                    </div>
                </div>
            </div>

            <div class="home-img">
                <img src="assets/img/fireBoy.png" alt="vaultBoy.png">
            </div>
        </div>
    </section>
</main>

{include file="templates/footer.tpl"}