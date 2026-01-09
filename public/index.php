    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>


<?php

use App\Core\Router;

require_once __DIR__."/../autoload.php";

$router = new Router();

$router->get("/login", "AuthController@login");

$router->get("/signeup","AuthController@signeup");

$router->dispatch();
?>