<?php

$route = '/villa4u/details/:id';

$current_url = 'http'.(isset($_SERVER['HTTPS']) ? 's' : '').'://'.$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'];
$uri = parse_url($current_url, PHP_URL_PATH);

// Vervang ":id" met een reguliere expressie die elke waarde voor "id" matcht
$route_regex = str_replace('/', '\/', $route);
$route_regex = preg_replace('/:(\w+)/', '(?P<$1>[^\/]+)', $route_regex);

// Match de URI tegen de route en haal de waarde van "id" op
if (preg_match('/^'.$route_regex.'$/', $uri, $params)) {
    $id = $params['id'];
    include_once("details_view.php");
} else {
    include_once("home.php");
    //echo "<h1>404 not found</h1>";
}





?>
