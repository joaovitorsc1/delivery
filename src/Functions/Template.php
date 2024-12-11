<?php

use League\Plates\Engine;

function view(string $template, array $data = [])
{
    $plates = new Engine("src/Views");

    // Add Folders
    $plates->addFolder("admin", "src/Views/admin");
    $plates->addFolder("dashboard", "src/Views/admin/dashboard");

    // Render Template
    echo $plates->render($template, $data);
}


?>