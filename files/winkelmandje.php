<?php

    $query = "SELECT * FROM products where naam = 'Cola'";
$result = mysqli_query($conn, $query) or die ("FOUT: " . mysqli_error($conn));

?>

<h2>Winkelmandje</h2>
<?php
    echo $_SESSION["product_id"];
?>

    <ul>
        <li>Subtotaal:</li>
        <li>€ 0,00</li>
    </ul>
    <ul>
        <li>Bezorgkosten</li>
        <li>€ 0,00</li>
    </ul>
    <ul>
        <li>Totaal prijs</li>
        <li>€ 0,00</li>
    </ul>
<a href="#">BESTELLEN</a>

<?php
/*
function winkelmandje(){

}

function product_edit(){

}

*/
