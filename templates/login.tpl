{include file='templates/header.tpl'}

<main class="main">
    <section class="home" id="home">
        <div class="home-container re-container re-grid">
            <div class="home-info">
                <h1 class="admin-login-title">login</h1>

                <form class="admin-login-form" action="userLogin" method="POST">
                    <label class="admin-label" for="user_email">Email</label>
                    <input class="admin-input" type="text" name="user_email" required>

                    <label class="admin-label" for="user_password">Password</label>
                    <input class="admin-input" type="password" name="user_password" required>
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