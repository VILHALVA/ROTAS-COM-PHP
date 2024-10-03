<?php

$routes = [
    'home' => './pages/home.html',
    'curiosidades' => './pages/curiosidades.html',
    'sobre' => './pages/sobre.html',
];

$page = isset($_GET['page']) ? $_GET['page'] : 'home';

if (array_key_exists($page, $routes)) {
    include $routes[$page];
} 

?>
