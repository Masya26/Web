<?php
    $mysqli = new mysqli("localhost","f0499404_almas","almas","f0499404_almas");
    if ($mysqli->connect_errno) {
        echo "Не удалось подключиться к БД";
    }

    $id = $_GET['id'];

    $result = $mysqli->query("DELETE FROM dep_prog WHERE id='$id'");

    header("Location: dep_prog.php");
    exit;
?>
