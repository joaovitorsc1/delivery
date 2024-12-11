<?php

declare(strict_types=1);

namespace Project\Delivery\Core;

use PDO;
use PDOException;

class ConnectDB
{
    public static function connect()
    {
        try
        {
            $pdo = new PDO("mysql:host=127.0.0.1;dbname=delivery", "root", "");
            $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

            return $pdo;
        }
        catch(PDOException $exception)
        {
            echo $exception->getMessage();
        }
    }
}
?>