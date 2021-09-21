{include file='templates/header.tpl'}

<main class="main">
    <section class="home" id="home">
        <div class="home-container re-container re-grid">
            <div class="home-info">
                <div class="items-list">
                    <ul class="all-items-list">
                        {foreach from=$items item=$item}
                            <li><a class="all-items-item" href="Item/{$item->name_item}">{$item->name_item}</a>/ {$item->category}</li>
                        {/foreach}
                    </ul>
                </div>
            </div>

            <div class="home-img">
                <img src="assets/img/allItems.png" alt="vaultBoy.png">
            </div>
        </div>
    </section>
</main>

{include file="templates/footer.tpl"}