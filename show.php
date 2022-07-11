<?php
include 'functions.php';

$db = include 'db/start.php';
$id = $_GET['id'];
$post = $db->getOne('posts', $id);
debug($post);