<?php
include "../config/config.php";
if (!isset($_POST["task_id"])) {
    echo "Error.";
} else {

    $db = getDB();
    $task_id = $_POST["task_id"];
    $stmt = $db->prepare("UPDATE task SET task_built=1 WHERE task_id = $task_id");
    $stmt->execute();

    $referer = $_SERVER['HTTP_REFERER'];
    header("Location: $referer");

}
