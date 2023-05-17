<?php
// Definieer de URL-parameters
$routes = array(
    '/villa4u/' => 'home.php',
    '/villa4u/contact' => 'contact.php',
    '/villa4u/details/:id' => 'details.php'
);

// Parseer de huidige URL
$request_uri = explode('?', $_SERVER['REQUEST_URI'], 2)[0];
$request_method = $_SERVER['REQUEST_METHOD'];

// Zoek de overeenkomende route
$matched_route = null;
$matched_params = array();
foreach ($routes as $route => $target) {
    // Check of de methode overeenkomt
    if ($request_method != 'GET') continue;
     
    // Controleer of de route overeenkomt
    $route_regex = str_replace('/', '\/', $route);
    $route_regex = preg_replace('/:(\w+)/', '(?P<$1>[^\/]+)', $route_regex);
    if (preg_match('/^'.$route_regex.'$/', $request_uri, $params)) {
        // Verwerk de parameters
        foreach ($params as $key => $value) {
            if (is_string($key)) {
                $matched_params[$key] = $value;
            }
        }
        $matched_route = $target;
        break;
    }
}

// Als er geen overeenkomende route is gevonden, geef dan een 404-fout terug
if (!$matched_route) {
    header('HTTP/1.0 404 Not Found');
    echo '404 Not Found';
    exit();
}

// Laad de overeenkomende pagina
extract($matched_params);
require $matched_route;
