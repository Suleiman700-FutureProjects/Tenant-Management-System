<?php

require_once '../../../../Config/CONST.php';
require_once '../../../../Classes/Tenants/Tenants.php';

if (isset($_GET) && $_GET['model'] = 'get_tenants') {

    $res = array(
        'state' => true,
        'tenants' => []
    );

    // Set tenants ids
    $ids = [];
    if (isset($_GET['data']['ids'])) {
        $ids = $_GET['data']['ids'];
    }

    // Set columns
    $cols = [];
    if (isset($_GET['data']['cols'])) {
        $cols = $_GET['data']['cols'];
    }

    // Set limit
    $limit = 0;
    if (isset($_GET['data']['limit']) && is_numeric($_GET['data']['limit'])) {
        $limit = $_GET['data']['limit'];
    }


    $Tenants = new Tenants();
    $tenants_data = $Tenants->get_tenants($ids, $cols, $limit);

    echo json_encode($tenants_data);

}
