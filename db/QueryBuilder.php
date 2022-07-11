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


    public function getOne(string $table, int $id): array
    {
        $sql = "SELECT * FROM {$table} WHERE id = :id";
        $stmt = $this->pdo->prepare($sql);
        $stmt->execute(['id' => $id]);
        return $stmt->fetch();
    }

    public function create(string $table, array $data):void
    {
        $keys = implode(', ',  array_keys($data));
        $tags = ":" . implode(', :',  array_keys($data));

        $stmt = $this->pdo->prepare("INSERT INTO $table ($keys) VALUES ($tags)");
        $stmt->execute($data);

    }

    public function update($table, $data, $id): void
    {
//        $sql = "UPDATE $table SET title=:title, post=:post WHERE id=:id";
        $keys = array_keys($data);
        $string = '';
        foreach ($keys as $key) {
            $string .= $key . '=:' . $key . ', ';
        }
        $keys = rtrim($string, ', ');
        $data['id'] = $id;
        $sql = "UPDATE $table SET {$keys} WHERE id=:id";
        $stmt= $this->pdo->prepare($sql);
        $stmt->execute($data);

    }

    public function delete($table, $id)
    {
        $sql = "DELETE FROM ${table} WHERE id=:id";
        $stmt = $this->pdo->prepare($sql);
        $stmt->execute([
            'id' => $id
        ]);
    }

}