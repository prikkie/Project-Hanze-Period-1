<?php
//kijkt of er iets is ingevuld en gaat dan ingevulde met database vergelijken. Klopt dit? dan $_SESSION['logged_in'] = true
if (isset($_POST['ww']) && isset($_POST['gebruikersnaam'])) {
    $gebruikersnaam = $_POST['gebruikersnaam'];
    $wachtwoord = $_POST['ww'];
    $query = "select gebruikersnaam, wachtwoord from users where gebruikersnaam = '$gebruikersnaam' AND wachtwoord = $wachtwoord";
    mysqli_query($db, $query);
    $_SESSION['logged_in'] = true;
}

//test
$_SESSION['logged_in'] = true;
echo "hey";

// hieronder tabel voor inloggen