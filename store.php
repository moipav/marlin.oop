<?php
include 'functions.php';

$db = include 'db/start.php';
$db->create('posts', [
    'title' => $_POST['title'],
    'post' => $_POST['post']
]);
header('Location: /index.php');
exit();