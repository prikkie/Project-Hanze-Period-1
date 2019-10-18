<?php
if ($_SESSION['logged_in'] == true) {
    ?>

    <table>
        <tr>
            <th width="10%">Gebruikersnaam</th>
            <th width="8%">Naam</th>
            <th>Adres</th>
            <th>Email</th>
            <th>Geslacht</th>
            <th>Puntenaantal</th>
            <th>Admin</th>
        </tr>

        <?php

        $query = "SELECT * FROM users";


        if ($result = $conn->query($query)) {
            while ($row = $result->fetch_assoc()) {
                $gebnaam = $row["gebruikersnaam"];
                $naam = $row["naam"];
                $adres = $row["adres"];
                $email = $row["email"];
                $geslacht = $row["geslacht"];
                $punten = $row["puntenaantal"];
                ?>


                <tr>
                    <td align="center"><?php echo $gebnaam ?></td>
                    <td align="center"> <?php echo $naam ?> </td>
                    <td align="center">&euro; <?php echo $adres ?> </td>
                    <td align="center"> <?php echo $email ?> </td>
                    <td align="center"> <?php echo $geslacht ?> </td>
                    <td align="center"> <?php echo $punten ?> </td>
                    <td align="center">VERWIJDEREN AANPASSEN EN BEKIJKEN!?</td>
                </tr>

                <?php
            }
            $result->free();
        }
        ?>
    </table>
    <?php
} else {
    header("Location: http://projecthanze.com/admin/home");
}
