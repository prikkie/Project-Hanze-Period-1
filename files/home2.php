<?php session_start(); ?>
<?php
if (isset($_SESSION['userId'])) {
    echo " <center><p> Ingelogd </p></center>";
} else {
    echo "<center><p>Uitgelogd!</p></center>";
}
?>