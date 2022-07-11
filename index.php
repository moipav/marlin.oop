<?php
include 'functions.php';

$db = include 'db/start.php';


$posts = $db->getAll('posts');

include 'index.view.php';
