<!DOCTYPE html>
<html>
<head>
	<title>Бикбулатов</title>
</head>
<body>
	<img src="1.jpg">
<?php
echo '<br/>';

$a = rand(-20,20);
$b = rand(-20,20);

echo 'Первое число: ' . $a . '<br/>';
echo 'Второе число: ' . $b;

// вторая часть первого условия
$a2 =$a*$a;
$b2=$b*$b;
$a3=$a-1;
$F = array(3);

for ($i=0; $i < 3; $i++) {
	//1
if ($a >= 0 && $b >= 0) {
	$F[$i] = $a*$a + $b*$b;
} elseif ($a2 >= 0 && $b2 >=0) {
	$F[$i] = $a2*$a2 + $b2*$b2;
} elseif ($a3 >= 0 && $b >=0){
    $F[$i] = $a3*$a3 + $b*$b;
}
	//2
if ($a<=0 && $b<= 0) {
	$F[$i] = $a + $b*$b;
} elseif ($a2<=0 && $b2<= 0) {
	$F[$i] = $a2 + $b2*$b2;
} elseif ($a3<=0 && $b<= 0) {
	$F[$i] = $a3 + $b*$b;
}
	//3
if ($a>0 && $b<=0) {
	$F[$i] = $a - $b;
} elseif ($a2>0 && $b2<=0) {
	$F[$i] = $a2 - $b2;
} elseif ($a3>0 && $b<=0) {
    $F[$i] = $a3 - $b;
}
	//4
if ($a<=0 && $b>0) {
	$F[$i] = $a + $b;
} elseif ($a2<=0 && $b2>0) {
	$F[$i] = $a2 + $b2;
} elseif ($a3<=0 && $b>0) {
    $F[$i] = $a3 + $b;
}
}
$z = $F[0] + $F[1]+$F[2]; // Сумма функций

echo '<br/>' . 'Сумма функций равна: ' . $z;

?>
</body>
</html>
