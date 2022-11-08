<?php

require_once '../../../Config/CONST.php';
require_once '../../../Classes/Auth/Login/Login.php';

if (isset($_POST) && $_POST['model'] = 'do_login') {
    $valid_data = true;

    // Check if username is seta
    if (isset($_POST['data']['username'])) {
        $username = $_POST['data']['username'];
    } else {
        $valid_data = false;
    }

    // Check if password is set
    if (isset($_POST['data']['password'])) {
        $password = $_POST['data']['password'];
    } else {
        $valid_data = false;
    }

    if (!$valid_data) {
//        echo 'bad';
    }
    else {
//        echo 'good';
    }
}
