<div class="container">
    <div class="row">
        <div class="col-lg-12 text-center">
            <h1 class="mt-5">
                <?= $view_bag['heading']; ?>
            </h1>
        </div>
    </div>
    <a href="admin/create.php" class="d-block bg-success py-2 text-center my-1 rounded-3 text-light">Create New Term</a>
    <div class="row">
        <table class="table table-striped">
            <?php if ($model): ?>
                <?php foreach ($model as $item): ?>
                    <tr>
                        <td>
                            <a href="admin/edit.php?key=<?= $item->id; ?>">
                                Edit
                            </a>
                        </td>
                        <td>
                            <?= $item->term ?>
                        </td>
                        <td>
                            <?= $item->definition ?>
                        </td>
                        <td>
                            <a href="admin/delete.php?key=<?= $item->id; ?>" class="text-danger">
                                Delete
                            </a>
                        </td>
                    </tr>
                <?php endforeach; ?>
            <?php endif; ?>
        </table>
    </div>
</div>