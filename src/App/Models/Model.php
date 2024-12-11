<?php

namespace Project\Delivery\App\Models;

use Project\Delivery\Core\ConnectDB;

class Model
{
    public function getUser(string $email, string $password)
    {
        $email = $email;
        $password = hash("sha256", $password);

        $query = "SELECT id, email, password FROM users WHERE email = :email AND password = :password";
        $connect = ConnectDB::connect();
        $prepare = $connect->prepare($query);
        $prepare->bindParam(":email", $email);
        $prepare->bindParam(":password", $password);
        $prepare->execute();

        $result = $prepare->rowCount();
        $userInfo = $prepare->fetchAll(\PDO::FETCH_OBJ);

        if($result > 0)
        {
            return $userInfo;
        } else 
        {
            return false;
        }
    }
}
?>