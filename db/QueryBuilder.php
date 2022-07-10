<?php

class QueryBuilder
{
//    protected PDO $pdo;

    public function __construct(
        protected PDO $pdo
    )
    {

    }

    public function getAll(string $table): array
    {
        $stmt = $this->pdo->prepare("SELECT * FROM $table");
        $stmt->execute();
        return $stmt->fetchAll();
    }

    public function create(string $table, array $data):void
    {
        $keys = implode(', ',  array_keys($data));
        $tags = ":" . implode(', :',  array_keys($data));

        $stmt = $this->pdo->prepare("INSERT INTO $table ($keys) VALUES ($tags)");
        $stmt->execute($data);

    }

}