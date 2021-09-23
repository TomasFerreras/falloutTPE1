{include file='templates/adminHeader.tpl'}

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
                    <label class="admin-label" for="adminKey">Security key</label>
                    <input class="admin-input" type="password" name="adminKey">
                    <button class="loginAdmin">Log in</button>
                </form>
                <a href="error 404" class="admin-404">support@gmail.com</a>
            </div>

            <div class="admin-img">
                <img class="admin-image" src="assets/img/adminImage.png" alt="vaultBoy.png">
                <p class="admin-message">"Don't worry, I only test the weapons on customers I don't like." -Assaultron</p>
            </div>
        </div>
    </section>
</main>

{include file='templates/footer.tpl'}