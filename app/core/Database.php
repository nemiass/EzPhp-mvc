<?php

namespace app\core;

use const config\DSN;
use const config\PASSWORD;
use const config\USER;

class Database
{
    public \PDO|null $db;

    public function __construct()
    {
        $this->db = null;
    }

    public function connect(): \PDO
    {
        try {
            $this->db = new \PDO(DSN, USER, PASSWORD);

            $this->db->setAttribute(
                \PDO::ATTR_ERRMODE,
                \PDO::ERRMODE_EXCEPTION
            );
        } catch (\PDOException $e) {
            echo $e->getMessage();
        }
        return $this->db;
    }

    public function close()
    {
        $this->db = null;
    }

    public function __destruct()
    {
        $this->close();
    }
}
