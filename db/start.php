<?php
include "db/QueryBuilder.php";
include 'db/Connection.php';
return new QueryBuilder(Connection::make());