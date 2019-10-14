<?php
if (isset($_POST['ww'])) {
    $gebruikersnaam = $_POST['gebruikersnaam'];
    $wachtwoord = $_POST['ww'];
    $query = "select gebruikersnaam, wachtwoord from users where gebruikersnaam = '$gebruikersnaam' AND wachtwoord = $wachtwoord";
    mysqli_query($db, $query);
    $_SESSION['logged_in'] = true;
}
echo "hey";