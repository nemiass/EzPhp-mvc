<?php

namespace app\core;

use app\core\Database;
use PDO;

abstract class Model
{
    private Database $database;
    protected PDO $db;

    protected static function connect()
    {
        // TODO: Error extends model, cofig to future
        // self::$database = new Database;
        // self::$db = self::$database->getConnection();
        $database = new Database;
        return $database->getConnection();
    }
}
