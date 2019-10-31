<?php
session_start();
if (!isset($product_naam) {
    exit('Geen producten in uw winkelmand');
} else {
    $product_naam = $_POST['p_naam'];
}
if (!isset($_POST['aantal'])) {
    exit('Geen aantal meegezonden');
} else {
    $aantal = $_POST['aantal'];
}
if (empty($_SESSION['winkelmand'])) {
    $_SESSION['winkelmand'] = $product_naam . ',' . $aantal;
} else {
    $wagen = explode('|', $_SESSION['winkelmand']);
    $aantal_in_winkelmand = count($wagen);
    $toevoegen = TRUE;
    foreach ($wagen as $products) {
        $product = explode(',', $products);
        if ($product[0] == $product_naam) {
            $product[1] = $product[1] + $aantal;
            $toevoegen = FALSE;
        }
        $i++;
        if ($i == 1) {
            $_SESSION['winkelmand'] = $product[0] . ',' . $product[1];
        } else {
            $_SESSION['winkelmand'] = $_SESSION['winkelmand'] . '|' . $product[0] . ',' . $product[1];
        }
    }
    if ($toevoegen) {
        $_SESSION['winkelmand'] = $_SESSION['winkelmand'] . '|' . $product_naam . ',' . $aantal;
    }
}


$_SESSION['Aantal'] = 0;
if (isset($_POST['Cola'])) {
    echo $_POST['Cola'];
} else {
    echo "Niets in uw winkelmand!";
}

