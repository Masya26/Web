<?php
    mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
    $mysqli = mysqli_connect("localhost","f0499404_almas","almas","f0499404_almas");
    mysqli_set_charset($mysqli, "utf8mb4");

    $id = $_GET['id'];

    $result = $mysqli->query("DELETE FROM banks WHERE id='$id'");

    header("Location: database.php");
    exit;
?>
