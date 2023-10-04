<div class="container">
    <div class="row">
        <div class="col-lg-12 text-center">
            <h1 class="mt-5">Login</h1>
        </div>
    </div>
    <div class="row">
        <form action="" method="post">
            <div class="form-group">
                <label for="email">Email:</label>
                <input type="text" name="email" id="email" class="form-control">
            </div>
            <div class="form-group">
                <label for="password">Password:</label>
                <input type="password" name="password" id="password" class="form-control">
            </div>
            <div class="form-group">
                <input type="submit" value="Login" name="login">
            </div>
        </form>
    </div>
    <?php if (isset($view_bag['status'])): ?>
        <div class="row">
            <?= $view_bag['status']; ?>
        </div>
    <?php endif; ?>
</div>