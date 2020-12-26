<!DOCTYPE html>
<html>
<head>
	<title>Бикбулатов</title>
</head>
<body>

<?php

$Massive = array(array(1,1,1,1,1,1,1,1,1),
				 array(1,1,1,1,1,1,1,1,1),
				 array(1,1,1,1,1,1,1,1,1),
				 array(1,1,1,1,1,1,1,1,1),
				 array(1,1,1,1,1,1,1,1,1),
				 array(1,1,1,1,1,1,1,1,1),
				 array(1,1,1,1,1,1,1,1,1),
				 array(1,1,1,1,1,1,1,1,1),
				 array(1,1,1,1,1,1,1,1,1)
				 );

echo 'Исходный массив' . '<br/>';
for ($i=0; $i < 9; $i++) {
	for ($j=0; $j < 9; $j++) {
	$Massive[$i][$j] = rand(-20,20);
	echo $Massive[$i][$j] . ' ';
	}
	echo '<br/>';
}
echo '<br/>';
$k = -1; // макс элемент
for ($i=0; $i < 9; $i++) {
	for ($j=0; $j < 9; $j++) {
		if($Massive[$i][$j]!=0){
		    $Massive[$i][$j]=$Massive[$i][$j]*$k;
		}
	}	
}

echo 'Скорректированный массив' . '<br/>';
for ($i=0; $i < 9; $i++) {
	for ($j=0; $j < 9; $j++) {
	echo $Massive[$i][$j] . ' ';
	}
	echo '<br/>';
}

?>
</body>
</html>
