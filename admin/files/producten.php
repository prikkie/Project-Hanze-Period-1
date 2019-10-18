<table>
    <tr>
        <th>Image</th>
        <th>Naam</th>
        <th>Prijs in &euro;</th>
        <th>Categorie</th>
        <th>Omschrijving</th>
        <th>Admin</th>
    </tr>

    <?php

    $query = "SELECT * FROM products";


    if ($result = $conn->query($query)) {
        while ($row = $result->fetch_assoc()) {
            $p_naam = $row["naam"];
            $p_prijs = $row["prijs"];
            $p_voorraad = $row["voorraad"];
            $p_afbeelding = $row["afbeelding"];
            $p_omschrijving = $row["omschrijving"];
            $p_categorie = $row["categorie"];
            $p_actief = $row["actief"];
            ?>


            <tr>
                <td><img src=images/<?php $p_afbeelding ?>.jpg></td>
                <td> <?php echo $p_naam ?> </td>
                <td>&euro; <?php echo $p_prijs ?> </td>
                <td> <?php echo $p_categorie ?> </td>
                <td><?php echo $p_omschrijving ?> </td>
                <td>VERWIJDEREN AANPASSEN EN BEKIJKEN!?</td>
            </tr>

            <?php
        }
        $result->free();
    }
    ?>
</table>
