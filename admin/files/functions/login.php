<?php

if (!isset($_POST['ww']) && isset($_POST['gebr'])) {
    echo "hey";

    login_admin($_POST['ww'], $_POST['gebr']);
}