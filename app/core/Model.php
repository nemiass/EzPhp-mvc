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
        // TODO:
    }
}
