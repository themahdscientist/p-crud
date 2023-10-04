<div class="container">
    <div class="row">
        <div class="col-lg-12 text-center">
            <h1 class="mt-5">
                <?= $view_bag['heading']; ?>
            </h1>
        </div>
    </div>
    <div class="row">
        Are you sure you want to delete <?= $model->term;?>?
    </div>
    <div class="row">
        <form action="" method="post">
            <input type="hidden" name="term" value="<?= $model->id; ?>" />
            <div class="form-group mt-2">
                <input type="submit" value="Delete">
            </div>
        </form>
    </div>
</div>