<?php

require_once '../../../Config/CONST.php';
require_once '../../../Classes/Auth/Login/Login.php';

if (isset($_POST) && $_POST['model'] = 'do_login') {

    $res = array(
        'state' => true,
        'login_state' => []
    );

    // Check if username is seta
    if (isset($_POST['data']['username']) && isset($_POST['data']['password'])) {
        $username = $_POST['data']['username'];
        $password = $_POST['data']['password'];

        $Login = new Login();
        $Login->set_username(trim(strip_tags($username)));
        $Login->set_password(trim(strip_tags($password)));
        $login_state = $Login->do_login();
        $res['login_state'] = $login_state;

    }
    else {
        $res['state'] = false;
    }

    echo json_encode($res);

}
