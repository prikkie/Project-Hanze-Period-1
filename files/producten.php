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

        echo "<div id = 'wrappert'>";
        if ($p_actief == 1) {
            echo "<div class = 'product'>" .
                "Hoi de naam van het product is " . $p_naam . " !" . "</br>" .
                "<img src = images/$p_afbeelding.jpg>" . "</br>"
                . "Dit product kost: &euro;" . $p_prijs . "</br>"
                . "Categorie: $p_categorie" . "</br>" . "</br>"
                . "Omschrijving: $p_omschrijving" . "</br>"
                . "<form method='post' action='winkelmandje.php'><button type='button' name='$p_naam'>Voeg toe</button> </form>"
                . "</div>";
        }
        echo "</div>";
    }
    $result->free();
}
?>