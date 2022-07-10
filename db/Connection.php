<?php

class Connection
{
    public static function make($config): PDO
    {
        return new PDO("{$config['dsn']};charset={$config['charset']}", "{$config['username']}", "{$config['password']}", $config['default_attr']);
    }
}