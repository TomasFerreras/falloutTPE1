{include file='templates/header.tpl'}

<main class="main">
    <section class="home" id="home">
        <div class="home-container re-container re-grid">
            <div class="home-info">
                <h1 class="admin-login-title">Admin login</h1>
                <form class="admin-login-form">
                    <label class="admin-label" for="adminName">Admin name</label>
                    <input class="admin-input" type="text" name="adminName">
                    <label class="admin-label" for="adminPassword">Password</label>
                    <input class="admin-input" type="password" name="adminPassword">
                    <button class="loginAdmin">Log in</button>
                </form>
            </div>

            <div class="admin-img">
                <img src="assets/img/PngItem_2301554.png" class="admin-image" alt="vaultBoy.png">
                <p class="admin-message">"Don't worry, I only test the weapons on customers I don't like." -Assaultron</p>
            </div>
        </div>
    </section>
</main>

{include file='templates/footer.tpl'}