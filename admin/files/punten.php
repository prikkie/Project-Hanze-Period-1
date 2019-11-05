<?php
if ($_SESSION['logged_in'] == true) {
    if (isset($_GET['did'])) {
        Punten_delete($_GET['did']);
    }
    if (isset($_GET['sid'])) {
        include 'editspaarprogramma';
    }

    ?>
    <a href="/admin/nieuw_spaarprogramma">Nieuw spaarprogramma toevoegen!</a>
    <table>
        <tr>
            <th>Omschrijving</th>
            <th>Punten</th>
            <th>Actief?</th>
            <th>Admin</th>
        </tr>

        <?php

        $query = "SELECT * FROM spaaracties";

        if ($result = $conn->query($query)) {
            while ($row = $result->fetch_assoc()) {
                $id = $row["id"];
                $omschrijving = $row["omschrijving"];
                $punten = $row["punten"];
                $actief = $row["actief"];

                if ($actief == 1) {
                    $actief = "Ja";
                } else {
                    $actief = "Nee";
                }
                ?>

                <tr>
                    <td align="center"> <?php echo $omschrijving ?> </td>
                    <td align="center"> <?php echo $punten ?> </td>
                    <td align="center"> <?php echo $actief ?> </td>
                    <td align="center"><a target="_self"
                                          href="punten/d/<?php echo $id ?>">Verwijderen</a></td>
                    <td align="center"><a target="_self"
                                          href="punten/s/<?php echo $id ?>">Wijzigen</a></td>
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
