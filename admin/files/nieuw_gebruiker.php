<section class="section-default">
    <h2>Gebruiker toevoegen</h2>
    <form action="" method="post">
        <table>
            <tr>
                <td>Gebruikersnaam</td>
                <td><input type="text" required name="gebruikersnaam"</td>
            </tr>
            <tr>
                <td>Naam</td>
                <td><input type="text" required name="naam"</td>
            </tr>
            <tr>
                <td>Adres</td>
                <td><input type="text" required name="adres"></td>
            </tr>
            <tr>
                <td>Geslacht</td>
                <td>
                    <select name="geslacht">
                        <option type="text" name="man">Man</option>
                        <option type="text" name="vrouw">Vrouw</option>
                    </select>
                </td>
            </tr>
            <tr>
                <td>E-mail</td>
                <td><input type="text" required name="e-mail"></td>
            </tr>
            <tr>
                <td>Wachtwoord</td>
                <td><input type="password" required name="wachtwoord"><br/></td>
            </tr>
            <tr>
                <td>Recht</td>
                <td>
                    <select name="recht">
                        <option name="admin">Admin</option>
                        <option name="gebruiker">Gebruiker</option>
                    </select></td>
            </tr>
            <tr>
                <td>Puntenaantal</td>
                <td><input type="text" required name="punten"></td>
            </tr>
            <tr>
                <td>Toevoegen</td>
                <td>
                    <button type="submit" required name="toevoegen">Toevoegen!</button>
                </td>
            </tr>
        </table>
    </form>
</section>
<?php
$gebruikersnaam = $_POST['gebruikersnaam'];
$naam = $_POST['naam'];
$adres = $_POST['adres'];
$geslacht = $_POST['geslacht'];
$e_mail = $_POST['e-mail'];
$recht = $_POST['recht'];
$punten = $_POST['punten'];
$wachtwoord = $_POST['wachtwoord'];

if (isset($_POST['toevoegen'])) {
    $query = "INSERT INTO users (gebruikersnaam, naam, adres, email, wachtwoord, recht, puntenaantal, geslacht) VALUES ('$gebruikersnaam','$naam','$adres','$e_mail','$wachtwoord','$recht','$punten', '$geslacht')";
    $conn->query($query);
    header("Location: /admin/gebruikers");
}