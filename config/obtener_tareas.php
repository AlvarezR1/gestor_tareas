<?php
require_once('connect.php');
$sql = "SELECT id, name_task, description FROM tareas";
$result = $connect->query($sql);

$tareas = array();

if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        $tarea = array(
            "id" => $row["id"],
            "name" => $row["name_task"],
            "description" => $row["description"]
        );
        array_push($tareas, $tarea);
    }
}

echo json_encode($tareas);

$connect->close();
?>