<?php
include 'functions/functions.php';
//require 'functions/db_connect.php';

//Kijkt welke pagina opgevraagd is, kijkt of het bestaat, veranderd $pagina. Bestaat deze niet? Gaat de gebruiker naar de home pagina
if (isset($_GET['nav']) && file_exists('files/' . $_GET['nav'] . '.php')) {
    $pagina = $_GET['nav'];
} else {
    header("Location: https://admin.projecthanze.com/home");
}

?>
    <div id="header"><?php include 'files/header.php'; ?></div>
    <div id="menu"><?php include 'files/menu.php'; ?></div>
    <div id="body">
        <?php
        // Als $pagina niet geinitialiseerd is, gaat hij terug naar home. Anders geeft hij de $pagina weer.
        if (empty($pagina)) {
            header("Location: https://admin.projecthanze.com/home");
        } else {
            include("files/" . $pagina . ".php");
        }
        ?>
    </div>
    <div id="winkelmandje"><?php include 'files/winkelmandje.php'; ?></div>
    <div id="footer"><?php include 'files/footer.php'; ?></div>
<?php
?>