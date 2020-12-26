    <?php
      $mysqli = new mysqli("localhost","f0499404_almas","almas","f0499404_almas");
      if ($mysqli->connect_errno) {
          echo "Не удалось подключиться к БД";
      }

      $name=$_GET['name'];
      $bank=$_GET['bank_id'];
      $proc=$_GET['proc'];


      // Выполнение запроса
      $result = $mysqli->query("INSERT INTO dep_prog
   SET name='$name', name_bank='$bank', proc='$proc'");

      echo '<meta http-equiv="refresh" content="0;URL=dep_prog.php">';
  ?>
