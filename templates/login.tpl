{include file='templates/header.tpl'}

<main class="main">
    <section class="home" id="home">
        <div class="home-container re-container re-grid">
            <div class="home-info">
                <h1 class="admin-login-title">login</h1>

                <form class="admin-login-form" action="userLogin" method="POST">
                    <label class="admin-label" for="userEmail">Email</label>
                    <input class="admin-input" type="text" name="userEmail" required>

                    <label class="admin-label" for="userPassword">Password</label>
                    <input class="admin-input" type="password" name="userPassword" required>
                    <button class="loginAdmin">Log in</button>
                </form>
                <a href="register" class="loginBtn">Register</a>
            </div>

            <div class="admin-img">
                <img class="admin-image" src="assets/img/adminImage.png" alt="vaultBoy.png">
                <p class="admin-message">"Don't worry, I only test the weapons on customers I don't like." -Assaultron</p>
            </div>
        </div>
    </section>
</main>

{include file='templates/footer.tpl'}