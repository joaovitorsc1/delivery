<?php

require_once "src/Functions/Template.php";

use Project\Delivery\Core\Core;
use Project\Delivery\Http\Routes;

// Adding Routes Only To Admin Dashboard
Routes::get("/admin/login", "AdminController@index");
Routes::post("/admin/authenticate", "AuthenticateController@authenticate");
Routes::get("/admin/dashboard/index", "AdminController@dashboard");

// Adding Routes Only To Users Default
Routes::get("/index", "HomeController@index");

// Dispatch routes
$core = new Core;
$core->dispatch(Routes::returnRoutes());

?>