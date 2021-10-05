{if $verify == true}
        {include file="templates/adminHeader.tpl"}   
    {else}
        {include file="templates/header.tpl"}
{/if}

<main class="main">
    <section class="home" id="home">
        <div class="home-container re-container re-grid home-grid">
            <div class="home-info">
                <h1 class="home-title">Fallout 4 <br>items database <br>in a friendly <br>way.</h1>
                <a href="allCategories" class="button">Take a look!</a>
            </div>
            
            <div class="home-img">
                <img class="home-image" src="assets/img/vault boy.png" alt="vaultBoy.png">
            </div>
        </div>
    </section>
</main>

{include file="templates/footer.tpl"}