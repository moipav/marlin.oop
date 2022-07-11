<?php
include 'functions.php';
$db = include 'db/start.php';

$db->update('posts', $_POST, $_GET['id']);
header('Location: /index.php');