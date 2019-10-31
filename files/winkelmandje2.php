<?php
session_start();
$_SESSION['Producten_aantal'] = 0;
$_SESSION['Aantal'] = 0;

?>
<h2>Winkelmandje</h2>
<?php
$query = "SELECT * FROM products";
$result = mysqli_query($conn, $query) or die ("FOUT: " . mysqli_error());
if (mysqli_num_rows($result) > 0){
while ($row = mysqli_fetch_array($result)){
?>
<form method="post" action="#">
    <table>
        <tr>
            <td>Product</td>
            <td><?php echo $row["naam"]; ?></td>
            <td>Prijs</td>
            <td><?php echo $row["prijs"]; ?></td>
        </tr>
        <?php }
        } ?>
        <tr>
            <td>NULL</td>
            <td>NULL</td>
            <td>Totaalprijs</td>
            <td>$totaalprijs_gekozen_producten</td>
        </tr>
        <tr>
            <td><a href="#">Bestellen!</a></td>
        </tr>
    </table>
</form>


