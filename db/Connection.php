<?php

class Connection
{
    public static function make(): PDO
    {

        return new PDO('mysql:dbname=marlin_oop;host=127.0.0.1:3307', 'root', '', [PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC]);
    }
}