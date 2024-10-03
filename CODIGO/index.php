<?php

$routes = [
    'home' => './pages/home.php',
    'curiosidades' => './pages/curiosidades.php',
    'sobre' => './pages/sobre.php',
];

$page = isset($_GET['page']) ? $_GET['page'] : 'home';

if (array_key_exists($page, $routes)) {
    include $routes[$page];
} 
else {
    include 'home.php'; 
}
?>
