<?php
include $_ADMIN_PATH."/models/House.php";

class HouseController{

    public static function getAll()
    {
        return House::getAll();
    }
    public static function create()
    {
        return House::create();
    }
}


?>