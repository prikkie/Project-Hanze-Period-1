<?php
if ($_SESSION['logged_in'] == true) {
    if (isset($_GET['did'])) {
        Product_delete($_GET['did']);
    }
    if (isset($_GET['sid'])) {
        include 'editproduct';
    }
    ?>
    <a href="/admin/nieuw_product">Nieuw product toevoegen!</a>
    <table>
        <tr>
            <th>Image</th>
            <th width="10%">Naam</th>
            <th width="8%">Prijs in &euro;</th>
            <th>Categorie</th>
            <th>Omschrijving</th>
            <th>Voorraad</th>
            <th>Actief?</th>
            <th>Admin</th>
        </tr>

        <?php

        $query = "SELECT * FROM products";


        if ($result = $conn->query($query)) {
            while ($row = $result->fetch_assoc()) {
                $id = $row["id"];
                $naam = $row["naam"];
                $prijs = $row["prijs"];
                $voorraad = $row["voorraad"];
                $afbeelding = $row["afbeelding"];
                $omschrijving = $row["omschrijving"];
                $categorie = $row["categorie"];
                $actief = $row["actief"];
                if ($actief == 1) {
                    $actief = "Ja";
                } else {
                    $actief = "Nee";
                }

                ?>


                <tr>
                    <td><img id="img_product" src=../images/<?php echo $afbeelding ?>.jpg></td>
                    <td align="center"> <?php echo $naam ?> </td>
                    <td align="center">&euro; <?php echo $prijs ?> </td>
                    <td align="center"> <?php echo $categorie ?> </td>
                    <td><?php echo $omschrijving ?> </td>
                    <td align="center"> <?php echo $voorraad ?> </td>
                    <td align="center"> <?php echo $actief ?> </td>
                    <td align="center"><a target="_self"
                                          href="producten/d/<?php echo $id ?>">Verwijderen</a>
                    <td align="center"><a target="_self"
                                          href="producten/s/<?php echo $id ?>">Edit</a>
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
