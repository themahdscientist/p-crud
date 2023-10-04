<?php
session_start();
require '..\app\app.php';
ensure_user_is_authenticated();

$view_bag = [
    'title' => 'Create A New Term',
    'heading' => 'Admin Panel',
];

if (is_post()) {
    $term = sanitize($_POST['term']);
    $definition = sanitize($_POST['definition']);

    if (empty($term) || empty($definition)) {
        view('admin/create');
    } else {
        Data::add_term($term, $definition);
        redirect('/admin');
    }
}

view('admin/create');