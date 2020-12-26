<?php
require "../db.php";
$data=$_POST;
?>
<html>
    <head>
      <title> Сведения. Бикбулатов </title>
      <link rel="stylesheet" href="/main.css">
      <link rel="preconnect" href="https://fonts.gstatic.com">
      <link href="https://fonts.googleapis.com/css2?family=Lato:ital,wght@1,300&display=swap" rel="stylesheet">
    </head>

    <h2 id="h2">Список банков:</h2>
    <div class="container">
    <table border="1">
        <tr>
            <th> Наименование </th> <th> ИНН </th> <th> Страна </th>
            <th> Класс надёжности </th> <th> Объём активов </th> <th> Редактирование </th> <th> Удаление </th>
        </tr>
        <?php
            mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
            $mysqli = mysqli_connect("localhost","f0499404_almas","almas","f0499404_almas");
            mysqli_set_charset($mysqli, "utf8mb4");

            // Запрос на выборку сведений о пользователях
            $result = $mysqli->query("SELECT * FROM banks");

            if ($result){
                // Для каждой строки из запроса
                while ($row = $result->fetch_array()){
                    $name = $row['name'];
                    $INN = $row['inn'];
                    $country = $row['country'];
                    $clas = $row['clas'];
                    $volume = $row['volume'];
                    $id=$row['id'];

                    echo "<tr>";
                    echo "<td>$name</td><td>$INN</td><td>$country</td><td>$clas</td><td>$volume</td>";
                    echo "<td><a href='edit.php?id=$id'>Редактировать</a></td>";
                    echo "<td><a href='delete.php?id=$id'>Удалить</a></td>";
                    echo "</tr>";
                }
                print "</table>";
            }
            print("<p> <a href='../index.php'> Вернуться в меню </a> </p>");
        ?>
</html>