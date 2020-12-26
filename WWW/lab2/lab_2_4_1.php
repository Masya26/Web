<h3>Бикбулатов Алмас</h3>
<?php
    $A=[];
    $K=rand(1,10);
    $count=rand(10,30);

    echo "Исходный массив: ";
    for ($i=0; $i < $count; $i++) {
      $A[$i]=rand(10,100);
      echo $A[$i].' ';
    }
    echo "<br>";
    echo 'K= '.$K;
    echo "<br>";
    
    $min=$A[0];
    for ($i=0; $i < $K; $i++){
        if($min>$A[$i]){
            $min=$A[$i];
        }
    }
    echo "Минимальное число среди первых K элементов = ".$min;
    echo "<br>";
    echo "Скорректированный массив: ";
    for ($i=0; $i < $count; $i++) {
        $A[$i]=$min;
      echo $A[$i].' ';
    }


 ?>
