<?php
session_start();
$_SESSION['username'] = 'saayam';
$_SESSION['email'] = 'saayam61@gmail.com';
if (isset($_SESSION['username']) && isset($_SESSION['email'])) {
    echo 'Username: ' . $_SESSION['username'] . '<br>';
    echo 'Email: ' . $_SESSION['email'] . '<br>';
} else {
    echo 'Session variables not found.<br>';
}
if (isset($_SESSION['username'])) {
    unset($_SESSION['username']);
}
if (isset($_SESSION['username'])) {
    echo 'Username still exists in the session.<br>';
} else {
    echo 'Username removed from the session.<br>';
}
session_destroy();
if (isset($_SESSION['email'])) {
    echo 'Session still exists.<br>';
} else {
    echo 'Session destroyed.<br>';
}
?>
