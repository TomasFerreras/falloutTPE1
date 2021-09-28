{include file='templates/header.tpl'}

<main class="main">
    <section class="home" id="home">
        <div class="home-container re-container re-grid">
            <div class="home-info">
                <h1 class="login-title">User Register</h1>

                <form class="login-form" method="POST" action="userRegister">
                    <label for="user_email">Email</label>
                    <input type="text" name="user_email" required>

                    <label for="user_password">Password</label>
                    <input type="password" name="user_password" required>

                    <button class="loginBtn">Register</button>
                    <a href="adminlogin" class="loginBtnAdmin">Log in as administrator</a>
                </form>

            </div>

            <div class="admin-img">
                <img class="admin-image login-img" src="assets/img/loginVaultBoy.png" alt="vaultBoy.png">
            </div>
        </div>
    </section>
</main>

{include file='templates/footer.tpl'}