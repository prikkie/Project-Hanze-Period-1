<link href="/css/menu.css" rel="stylesheet" type="text/css"/>

<div class="topnav" id="myTopnav">
    <a href="home" class="active">Home</a>
    <a href="products">Producten</a>
    <a href="home2">Home 2</a>

    <?php
    if ($_SESSION['logged_in'] == true){

    ?>
    <div class="dropdown">
        <button class="dropbtn">Dropdown
            <i class="fa fa-caret-down"></i>
        </button>
        <div class="dropdown-content">
            <?php
            if ($_SESSION['recht'] != 'a') {
                echo " <a href='admin'>Admin</a>";
            }
            ?>
            <a href="login">Login</a>
            <a href="logout">Logout</a>

        </div>
    </div>
</div>

<?php
} else {
    echo " <a href='login'>Login</a>";
}
?>

