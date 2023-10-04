<?php
require 'app/app.php';

if (!isset($_GET['term'])) {
    redirect('');
}

$data = Data::get_term($_GET['term']);

if ($data == false) {
    view('404');
    die();
}

$term = $data->term;
$view_bag = ['title' => 'Detail for ' . $term];

view('detail', $data);