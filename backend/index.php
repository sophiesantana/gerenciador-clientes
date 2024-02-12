<?php
    header("Access-Control-Allow-Origin: *");
    header("Access-Control-Allow-Methods: *");
    header("Access-Control-Allow-Headers: *");

    if ($_SERVER['REQUEST_METHOD'] == 'OPTIONS') {
        header("HTTP/1.1 200 OK");
        exit();
    }

    $data_request = json_decode(file_get_contents("php://input"), true);

    if ($_SERVER['REQUEST_METHOD'] == 'POST' && $data_request['url'] == 'http://localhost:5173/sign-in-adm') {
        include './src/controller/user_adm_controller.php';
        $user_adm_controller = new UserAdmController;
        $user_adm_controller->create($data_request);
    }

    if ($_SERVER['REQUEST_METHOD'] == 'POST' && $data_request['url'] == 'http://localhost:5173/login') {
        include './src/controller/user_adm_controller.php';
        $user_adm_controller = new UserAdmController;
        $user_adm_controller->login($data_request);
    }
?>