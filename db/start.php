<?php
include "db/QueryBuilder.php";
include 'db/Connection.php';
$config = include __DIR__ . '/../config.php';
return new QueryBuilder(Connection::make($config['db']));