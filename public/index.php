<?php
include __DIR__ . '/../functions.php';
debug($_SERVER);
$db = include 'db/start.php';


$posts = $db->getAll('posts');

include 'index.view.php';
