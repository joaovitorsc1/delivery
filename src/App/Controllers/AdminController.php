<?php

namespace Project\Delivery\App\Controllers;

use Project\Delivery\App\Models\User;
use Project\Delivery\Http\Response;

class AdminController
{
    public function index()
    {
        return view("admin::login");
    }

    public function dashboard()
    {
        return view("dashboard::index");
    }
}
?>