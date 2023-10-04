<?php
session_start();
require '..\app\app.php';
ensure_user_is_authenticated();

$view_bag = [
    'title' => 'Edit A Term',
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

    view('admin/edit', $term);
}

if (is_post()) {
    $term = sanitize($_POST['term']);
    $definition = sanitize($_POST['definition']);
    $original_term = sanitize($_POST['original-term']);

    if (empty($term) || empty($definition) || empty($original_term)) {
        // display a message
    } else {
        Data::update_term($original_term, $term, $definition);
        redirect('/admin');
    }
}