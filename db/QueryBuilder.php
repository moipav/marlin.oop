<?php

class QueryBuilder
{
//    protected PDO $pdo;

    public function __construct(
        protected PDO $pdo
    )
    {

    }

    public function getAll(): array
    {
        $stmt = $this->pdo->prepare('SELECT * FROM posts');
        $stmt->execute();
        return $stmt->fetchAll();
    }

}