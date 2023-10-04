<?php
session_start();
require '..\app\app.php';
ensure_user_is_authenticated();

$view_bag = [
    'title' => 'Delete A Term',
    'heading' => 'Admin Panel',
];

if (is_get()) {
    $key = sanitize($_GET['key']);

    if (empty($key)) {
        view('404');
        die();
    }

    $term = Data::get_term($key);

    if ($term === false) {
        view('404');
        die();
    }

    view('admin/delete', $term);
}

if (is_post()) {
    $term = sanitize($_POST['term']);

    if (empty($term)) {
        // display a message
    } else {
        Data::delete_term($term);
        redirect('/admin');
    }
}