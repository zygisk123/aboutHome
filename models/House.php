<?php
include $_ADMIN_PATH."/models/DB.php";

class House{

    public $id;
    public $adress;
    public $roomCount;
    public $isHouse;
    public $floor;

    public function __construct($id = null, $adress = null, $roomCount = null, $isHouse = null, $floor = null)
    {
        $this->id = $id;
        $this->adress = $adress;
        $this->roomCount = $roomCount;
        $this->isHouse = $isHouse;
        $this->floor = $floor;

    }
    public static function getAll()
    {
        
        $houses = [];
        $db = New DB();
        $query = "SELECT * FROM `namai_info`";
        $result = $db->conn->query($query);
        while ($row = $result->fetch_assoc()) {
            $houses[] = new House($row['id'], $row['adress'], $row['room_count'], $row['is_house'], $row['floor']);
        }
        $db->conn->close();
        return $houses;
    }

    public static function create()
    {
        $db = new DB();
        $stmt = $db->conn->prepare("INSERT INTO `namai_info`( `adress`, `room_count`, `is_house`, `floor`) VALUES (?,?,?,?)");
        $stmt->bind_param("siii", $_POST['adress'], $_POST['roomCount'], $_POST['buldingType'], $_POST['floor']);
        $stmt->execute();

        $stmt->close();
        $db->conn->close();
    }
}
?>