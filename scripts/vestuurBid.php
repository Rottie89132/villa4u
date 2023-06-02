<?php 

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    session_start();
    require_once "../config.inc.php";
    
    $HuisID = htmlspecialchars($_POST["idHuis"]);
    $Voornaam = htmlspecialchars($_POST["voornaam"]);
    $Achternaam = htmlspecialchars($_POST["achternaam"]);
    $telefoonnummer = htmlspecialchars($_POST["telefoonnummer"]);
    $email = htmlspecialchars($_POST["email"]);
    $bod = htmlspecialchars($_POST["bod"]);

    $FetchBod = $connection->query("SELECT bod FROM `bod` WHERE HuisID = '$HuisID' ORDER BY bod DESC LIMIT 1");
    if ($FetchBod->num_rows > 0) {
        $waarde = $FetchBod->fetch_assoc()["bod"];
    } else { $waarde = 1000000;}
    
    if ($bod < $waarde) {
        $waarde = number_format($waarde, 0, ',', '.');
        $melding = "Het bod moet €$waarde zijn!";
        $_SESSION["melding"] = $melding;
        header("Location: ../details/$HuisID"); die();
    }
    
    else if (!filter_var($telefoonnummer, FILTER_VALIDATE_INT)) {
        $melding = "Ongeldig telefoonnummer!";
        $_SESSION["melding"] = $melding;
        header("Location: ../details/$HuisID"); die();
    }

    else if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $melding = "Ongeldig e-mailadres!";
        $_SESSION["melding"] = $melding;
        header("Location: ../details/$HuisID"); die();
    }

    
    $result = $connection->query("SELECT * FROM `bod` WHERE tel = '$telefoonnummer' AND HuisID = '$HuisID'");
    
    if ($result->num_rows > 0) {
        $connection->query("UPDATE `bod` SET `bod` = '$bod' WHERE tel = '$telefoonnummer' AND HuisID = '$HuisID'");
    } else {
        $connection->query("INSERT INTO `bod` ( HuisID, voornaam, achternaam, tel, email, bod) VALUES ('$HuisID', '$Voornaam', '$Achternaam', '$telefoonnummer', '$email', '$bod')");
    }
    //$_SESSION["melding"] = $melding;
    header("Location: ../details/$HuisID");
}

?>