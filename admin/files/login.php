<?php

if (isset($_POST['ww']) && isset($_POST['gebr'])) {

    login_admin($_POST['ww'], $_POST['gebr']);
}