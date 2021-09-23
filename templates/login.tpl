{include file='templates/header.tpl'}

<main class="main">
    <section class="home" id="home">
        <div class="home-container re-container re-grid">
            <div class="home-info">
                <h1 class="login-title">User login</h1>
                <form class="login-form">
                    <label for="userName">User name</label>
                    <input type="text" name="userName">
                    <label for="password">Password</label>
                    <input type="password" name="password">
                    <button class="loginBtn">Log in</button>
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