<?php

namespace app\core;

class DB
{
    private \PDO $pdo;

    public function __construct()
    {
        $db = new Database();
        $this->pdo = $db->connect();
    }

    public function all(string $table): array|bool
    {
        $query = "SELECT * FROM $table";
        return $this->pdo->query($query)->fetchAll(\PDO::FETCH_OBJ);
    }

    public function find(string $table, string $column, string|int $target): object|bool
    {
        $query = "SELECT * FROM $table WHERE $column=:target";

        $stm = $this->pdo->prepare($query);
        $stm->execute([":target" => $target]);
        return $stm->fetchObject();
    }

    public function findById(string $table, int $id): object|bool
    {
        $query = "SELECT * FROM $table WHERE id=:id";

        $stm = $this->pdo->prepare($query);
        $stm->execute([":id" => $id]);
        return $stm->fetchObject();
    }

    public function insert(string $table, array $data): bool
    {
        $new_values = array();
        foreach ($data as $k => $v) {
            $new_values[":{$k}"] = $v;
        }

        $columns = implode(", ", array_keys($data));
        $values = implode(", ", array_keys($new_values));
        $query = "INSERT INTO {$table}({$columns}) VALUES({$values})";

        $stm = $this->pdo->prepare($query);
        $stm->execute($new_values);
        return $stm->rowCount() == 1;
    }
}
