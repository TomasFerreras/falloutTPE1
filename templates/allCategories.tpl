{include file='templates/header.tpl'}

<main class="main">
    <section class="home" id="home">
        <div class="home-container re-container re-grid all-grid">
            <div class="home-info">
                <h1 class="categories-title">All categories</h1>
                
                {foreach from=$categories item=$category}
                    <div>
                        <h2><a href="Category/{$category->name_category}" class="categories-subtitle">{$category->name_category}</a></h2>
                        <p class="categories-p">{$category->description_category}</p>
                    </div>
                {/foreach}
            </div>

            <div class="admin-img">
                <img class="admin-image" src="assets/img/allCategoriesVaultBoy.png" alt="vaultBoy.png">
            </div>
        </div>
    </section>
</main>

{include file="templates/footer.tpl"}