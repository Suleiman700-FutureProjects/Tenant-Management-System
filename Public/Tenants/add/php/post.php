<?php

require_once '../../../../Config/CONST.php';
require_once '../../../../Classes/Tenants/Tenants.php';

if (isset($_POST) && $_POST['model'] = 'add_tenant') {
    $res = array();

    $Tenants = new Tenants();
    $res = $Tenants->add_tenant($_POST['data']);

    echo json_encode($res);
}
