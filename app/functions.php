<?php
function redirect($url)
{
    header("Location: $url");
    die();
}
function view($name, $model = '')
{
    global $view_bag;
    require APP_PATH . 'views/layout.php';
}

function is_get()
{
    return $_SERVER['REQUEST_METHOD'] === 'GET';
}

function is_post()
{
    return $_SERVER['REQUEST_METHOD'] === 'POST';
}

function sanitize($value)
{
    $temp = htmlspecialchars(trim($value));

    if ($temp === false) {
        return '';
    }

    return $temp;
}
function authenticate_user($email, $password)
{
    $user_password = CONFIG['users'][$email] || null;

    if (!isset($user_password)) {
        return false;
    }

    return $password == $user_password;
}
function is_user_authenticated() {
    return isset($_SESSION['email']);
}
function ensure_user_is_authenticated() {
    if (!is_user_authenticated()) {
        redirect('/login.php');
        die();
    }
}