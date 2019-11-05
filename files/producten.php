<?php
if (isset($_GET['locatie'])) {
    $_SESSION['locatie'] = $_GET['locatie'];
}

$query = "SELECT * FROM products where actief = 1";

if ($result = $conn->query($query)) {

    foreach ($result as $product) {

        echo
            '<div class="product" data-id="' . $product["id"] . '">
            
							<img src="../images/' . $product["afbeelding"] . '.jpg" class="product_image"/>
							<div class="product_name">
								<b>
								
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

							<img src="../images/min.jpg" alt="min" class="min cart_disable" data-id="' . $product["id"] . '"/>
							<img src="../images/plus.jpg" alt="plus" class="plus cart_disable" data-id="' . $product["id"] . '"/>

						</div>';
    }
} else {
    echo 'Geen producten aangeboden!';
}


?>