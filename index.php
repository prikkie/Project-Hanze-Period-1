<?php
session_start();
require 'files/functions/db_connect.php';
include 'files/shoppingcart.php';
include 'files/functions/shoppingcart.php';


//Kijkt welke pagina opgevraagd is, kijkt of het bestaat, veranderd $pagina. Bestaat deze niet? Gaat de gebruiker naar de home pagina
if (isset($_GET['nav']) && file_exists('files/' . $_GET['nav'] . '.php')) {
    $pagina = $_GET['nav'];
} else {
    header("Location: http://projecthanze.com/home");
}
$cart_products = initCart($conn);
echo "<div id='header'>";
include 'files/header.php';
echo "</div>";

if ($pagina == "home") {
} else {

    echo "<div id='menu'>";
    include 'files/menu.php';

    echo "</div>";


}
?>
    <div id="body">
        <?php
        // Als $pagina niet geinitialiseerd is, gaat hij tergu naar home. Anders geeft hij de $pagina weer.
        if (empty($pagina)) {
            header("Location: http://projecthanze.com/home");
        } else {
            include("files/" . $pagina . ".php");
        }
        ?>
    </div>
<?php
if ($pagina == "home" || $pagina == "signup") {
    } else {

    echo "<div id='winkelmandje'>";
    include 'files/winkelmandje.php';

    echo "</div>";


    }
?>
    <div id="footer"><?php include 'files/footer.php'; ?></div>
<?php
?>