<?php
require_once "config.inc.php";
session_start();
$route = '/villa4u/details/:id';

$current_url = 'http'.(isset($_SERVER['HTTPS']) ? 's' : '').'://'.$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'];
$uri = parse_url($current_url, PHP_URL_PATH);

$route_regex = str_replace('/', '\/', $route);
$route_regex = preg_replace('/:(\w+)/', '(?P<$1>[^\/]+)', $route_regex);

if (preg_match('/^'.$route_regex.'$/', $uri, $params)) {
    $id = $params['id'];

    switch ($id) {
        case 1:
            $Image1 = 2;
            $Image2 = 3;
            break;
        case 2:
            $Image1 = 1;
            $Image2 = 3;
            break;
        case 3:
            $Image1 = 1;
            $Image2 = 2;
            break;
    }

    $FetchBod = $connection->query("SELECT * FROM `bod` WHERE HuisID = '$id' ORDER BY bod DESC LIMIT 5");
    
    if ($FetchBod->num_rows > 0) {
        $LijstBod = "<ol>";
        while ($FetchItem = $FetchBod->fetch_assoc()) {
            $Bod = number_format($FetchItem['bod'], 0, ',', '.');
            $Naam = ucfirst($FetchItem['voornaam']);
            $Achter = ucfirst($FetchItem['achternaam']);
            $LijstBod .= "<li>$Naam $Achter: - €$Bod</li>";
        }
        $LijstBod .= "</ol>";

    } else { 
        $LijstBod = "Wees de eerste om een bod uit te brengen! Momenteel zijn er nog geen biedingen ontvangen. Grijp nu de kans om de eerste bod te plaatsen.";
    }

    $result = $connection->query("SELECT * FROM `huizen` WHERE id = $id");

    if ($result->num_rows > 0) {
        $ArrayElement = $result->fetch_assoc();
    } else {
        header("Location: /villa4u"); die();
    }
    
    if (isset($_SESSION["melding"])) {
        $Melding = $_SESSION["melding"];
    } else {
        $Melding = null;
    }
    

    include_once("details_view.php");
    unset($_SESSION["melding"]);
} else {
    header("Location: /villa4u"); die();
    //echo "<h1>404 not found</h1>";
}

?>