<div class="frame m-auto p-5">
    <h1 class="text-center mb-5">Register</h1>
    <?php include __DIR__ . '/../partials/message.php' ?>
    <form method="POST">
        <div class="form-group">
            <label for="login" class="bmd-label-floating">Login</label>
            <input type="text" class="form-control" name="username" id="login">
        </div>
        <div class="form-group mb-5">
            <label for="password" class="bmd-label-floating">Password</label>
            <input type="password" class="form-control" name="password"
                   id="password">
        </div>
        <div class="d-flex justify-content-between">
            <a class="btn btn-primary" href="/login"
               style="margin-left: -14px;">
                Login instead
            </a>
            <button type="submit" class="btn btn-primary btn-raised">
                Register
            </button>
        </div>
    </form>
</div>