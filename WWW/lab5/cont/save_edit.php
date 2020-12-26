<?php
    $mysqli = new mysqli("localhost","f0499404_almas","almas","f0499404_almas");
    if ($mysqli->connect_errno){
        echo "Не удалось подключиться к БД";
    }

    $id = $_GET['id'];
    $date= $_GET['date'];
    $dep_id= $_GET['dep_id'];
    $st_cont=$_GET['st_cont'];

    $result = $mysqli->query("UPDATE cont
        SET date='$date', id_dep='$dep_id', st_cont='$st_cont'
        WHERE id='$id'"
    );

    header("Location: cont.php");
    exit;
?>
