<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <link rel="stylesheet" href="/main.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Lato:ital,wght@1,300&display=swap" rel="stylesheet">
    <title></title>
  </head>
  <body>
    <h2>Начальная страница. Бикбулатов</h2>
    <p> Дата и время:<p>
    <?php
        $d=date("d.m.Y H:i");
        echo($d);
    ?>

    <h2>Ссылки</h2>
    <ul id="nav" class="lin"> <!-- Собственные скрипты для просмотра и редактирования БД -->
          <p><li><a href="banks/database.php">База данных банков</a></li></p>
          <p><li><a href="dep_prog/dep_prog.php">Программы депозитов</a></p>
          <p><li><a href="cont/cont.php">Вклады</a></p>
    </ul>

    <h2>Добавление</h2>
    <ul id="nav">
        <li><a href="reg_banks/reg_banks.html">Добавление банка в список данных</a></li>
    </ul>

    <button onclick="window.location.href='gen_pdf.php'">PDF-версия таблицы игр</button>
    <button onclick="window.location.href='gen_xls.php'">XML-версия таблицы игр</button>

  </body>
</html>
