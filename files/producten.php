<?php

$query = "SELECT * FROM products where actief = 1";

if ($result = $conn->query($query)) {

    foreach ($result as $product) {

        echo
            '<div class="product" data-id="' . $product["id"] . '">
            
							<img src="images/' . $product["afbeelding"] . '.jpg" class="product_image"/>
							<div class="product_name">
								<b>
								' . $product["id"] . '
									' . $product["naam"] . '
								</b>
							</div>
							<div class="description">
								&euro; <span class="product_price">' . $product["prijs"] . '</span> - ' . $product["omschrijving"] . '
							</div>
							<div class="current_amount" data-id="' . $product["id"] . '">
								current quantity:
								<span class="amount">
									' . (isset($_SESSION["cart"]["products"][$product["id"]]) ? $_SESSION["cart"]["products"][$product["id"]] : 0) . '
								</span>
							</div>

							<img  src="images/min.jpg" alt="min" class="min cart_disable" data-id="' . $product["id"] . '"/>
							<img src="images/plus.jpg" alt="plus" class="plus cart_disable" data-id="' . $product["id"] . '"/>

						</div>';
    }
} else {
    echo 'At the moment there are no special offers';
}


//if ($result = $conn->query($query)) {
//    while ($row = $result->fetch_assoc()) {
//        $p_naam = $row["naam"];
//        $p_prijs = $row["prijs"];
//        $p_voorraad = $row["voorraad"];
//        $p_afbeelding = $row["afbeelding"];
//        $p_omschrijving = $row["omschrijving"];
//        $p_categorie = $row["categorie"];
//        $p_actief = $row["actief"];
//
//        echo "<div id = 'wrappert'>";
//        if ($p_actief == 1) {
//            echo "<div class = 'product'>" .
//                "Hoi de naam van het product is " . $p_naam . " !" . "</br>" .
//                "<img src = images/$p_afbeelding.jpg>" . "</br>"
//                . "Dit product kost: &euro;" . $p_prijs . "</br>"
//                . "Categorie: $p_categorie" . "</br>" . "</br>"
//                . "Omschrijving: $p_omschrijving" . "</br>"
//                . "<form method='post' action='winkelmandje.php'><button type='button' name='$p_naam'>Voeg toe</button> </form>"
//                . "</div>";
//        }
//        echo "</div>";
//    }
//    $result->free();
//}
?>