<?php
class monitor {
    private $mysqli;

    function __construct($conn){
        $this->mysqli = $conn;
}

public function tampil ($id = null){
    $db = $this->mysqli->conn;
    $sql = "SELECT * FROM monitoring ORDER BY id DESC LIMIT 1";
    if($id != null){
        $sql .= " WHERE id = $id";
    }
    $query = $db->query($sql) or die ($db->error);
    return $query;
    }
}
?>
