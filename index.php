<?php
include 'functions.php';
$db = include 'db/start.php';


$posts = $db->getAll();

include 'index.view.php';
