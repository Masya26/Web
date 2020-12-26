<html>
    <head> <title> Добавление нового вклада </title> </head>
    <body>
        <H2>Добавление нового вклада</H2>
        <form action="save_new.php" method="get">
            Дата приобретения: <input name="date" size="50" placeholder="dd-mm-yyyy" type="date">
            <br>
            <?php
                $mysqli = new mysqli("localhost","f0499404_almas","almas","f0499404_almas");
                if ($mysqli->connect_errno) {
                    echo "Не удалось подключиться к БД";
                }

                // Получение данных об играх
                $result = $mysqli->query("SELECT id, name FROM dep_prog");
                echo "<br>Программа депозитов: <select name='id_dep'>";

                if ($result){
                    while ($row = $result->fetch_array()){
                        $id = $row['id'];
                        $name = $row['name'];

                        echo "<option value='$id'>$name</option>";
                    }
                }
                echo "</select>";
            ?>
            <br>Стартовая сумма вклада: <input name="st_cont" size="30" type="text">
            <p>
                <input name="add" type="submit" value="Добавить">
                <input name="b2" type="reset" value="Очистить">
            </p>
        </form>
        <p><button style='color: blue' onclick="window.location.href='cont.php'">Вернуться к списку программ депозитов</button></td></p>
    </body>
</html>
