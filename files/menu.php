<link href="/css/menu.css" rel="stylesheet" type="text/css"/>

<div class="topnav" id="myTopnav">
    <a href="home" class="active">Home</a>
    <a href="producten">Producten</a>
    <a href="home2">Home 2</a>
    <a href="signup">Aanmelden</a>

    <button onclick="document.getElementById('id01').style.display='block'" style="width:auto;">Login</button>
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
                echo " <a href='/admin/home'>Admin</a>";
            }
            ?>
            <a href="login">Login</a>
            <a href="logout">Logout</a>

        </div>
    </div>


<?php
} else {
    echo " <a href='login'>Login</a>";
}
?>
</div>

<div id="id01" class="modal">

    <form class="modal-content animate" action="files/functions/login.inc.php" method="post">
        <div class="imgcontainer">
            <span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">&times;</span>
            <img src="images/img_avatar2.png" alt="Avatar" class="avatar">
        </div>

        <div class="container1">
            <center><label for="mailuid"><b>Username</b></label><br/></center>
            <center><input type="text" placeholder="Enter Username" name="mailuid" required><br/></center>

            <center><label for="pwd"><b>Password</b></label><br/></center>
            <center><input type="password" placeholder="Enter Password" name="pwd" required><br/></center>

            <center><label> <input type="checkbox" checked="checked" name="remember"> Remember me</label></center>

        </div>

        <div class="container">
            <button type="button" onclick="document.getElementById('id01').style.display='none'" class="cancelbtn">
                Cancel
            </button>
            <button type="submit" name="login-submit" class="button1">Login</button>
        </div>
    </form>
</div>

<script>
    // Get the modal
    var modal = document.getElementById('id01');

    // When the user clicks anywhere outside of the modal, close it
    window.onclick = function (event) {
        if (event.target == modal) {
            modal.style.display = "none";
        }
    }
</script>


