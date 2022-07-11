<?php
include 'functions.php';
$db = include 'db/start.php';

$db->delete('posts', $_GET['id']);
header('Location: /index.php');