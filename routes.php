<?php
include $_ADMIN_PATH."/controllers/HouseController.php";


if ($_SERVER['REQUEST_METHOD'] == "GET") {
    if (count($_GET) == 0) {
        $houses = HouseController::getAll();
    }
}

if ($_SERVER['REQUEST_METHOD'] == "POST") {
    if (isset($_POST['addHouse'])) {
        HouseController::create();
        $houses = HouseController::getAll();
        header("Location: ".$_USER_PATH."/views/aboutHome/showAll.php");
        die;
    }
}



?>