<div>
    <form method="post" action="/user/signup">
        <div>
            <label for="login">Login</label>
            <input type="text" name="login" id="login" placeholder="Login" value="<?=
            isset($_SESSION['form_data']['login']) ? h($_SESSION['form_data']['login']) : ''; ?>">
        </div>
        <br>
        <div>
            <label for="password">Password</label>
            <input type="password" name="password" id="password" placeholder="Password">
        </div>
        <br>
        <div>
            <label for="password">Password repeat</label>
            <input type="password" name="password2" id="password2" placeholder="Password2">
        </div>
        <br>
        <div>
            <label for="name">Name</label>
            <input type="text" name="name" id="name" placeholder="Name" value="<?=
            isset($_SESSION['form_data']['login']) ? h($_SESSION['form_data']['name']) : ''; ?>">
        </div>
        <br>
        <div>
            <label for="email">Email</label>
            <input type="text" name="email" id="email" placeholder="Email" value="<?=
            isset($_SESSION['form_data']['login']) ? h($_SESSION['form_data']['email']) : ''; ?>">
        </div>
        <br>
        <button type="submit">Зарегистрировать</button>
    </form>
    <?php if (isset($_SESSION['form_data'])) unset($_SESSION['form_data']); ?>
</div>