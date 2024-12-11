<?php

namespace Project\Delivery\App\Controllers;

use Project\Delivery\App\Models\User;
use Project\Delivery\Http\Response;
use Project\Delivery\Library\Sessions;

class AuthenticateController
{
    public function authenticate()
    {
        $email = $_POST["email"] ?? "";
        $password = $_POST["password"] ?? "";

        $user = new User;
        $userInformations = $user->getUser($email, $password);
        if($userInformations)
        {
            Sessions::add("loggedin",  [
                "userId"    => $userInformations[0]->id,
                "email"     => $userInformations[0]->email,
                "success"   => "true"
            ]);

            Response::redirect("/admin/dashboard/index");
        } else 
        {
            Response::redirect("/admin/login", ["login" => "Error"]);
        }
    }
}
?>