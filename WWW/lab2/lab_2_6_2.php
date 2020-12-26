<!DOCTYPE html>
<html>
<head>
	<title>Бикбулатов</title>
</head>
<body>
	<img src="2.jpg">

<?php
echo '<br/>';
$a = rand(-20,20);
$b = rand(-20,20);

echo 'Первое число: ' . $a . '<br/>';
echo 'Второе число: ' . $b;

// вторая часть первого условия
$a1 = $a/$b;
$b1 = (pow($b,8)-pow($a,7))/$a*$b;
$a2=(pow($a,10)+pow($b,12))/($a*$b*$b-$a);
$F = array(2);

for ($i=0; $i < 2; $i++) {
    
	//1
if ($a1 >= 0 && $b1 >= 0) {
	$F[$i] = ($a+$b)/$a*$b;
} elseif ($a2 >= 0 && $b >=0) {
	$F[$i] = ($a2+$b)/$a2*$b;
} 
	//2
if ($a1<0 && $b1>=0) {
	$F[$i] = $a1*$a1 + $b1/$a1;
} elseif ($a2<0 && $b>=0) {
	$F[$i] = $a2*$a2 + $b/$a2;
} 
	//3
if ($a1>=0 && $b1<0) {
	$F[$i] = $a1 + 2*$b1;
} elseif ($a2>=0 && $b2<0) {
	$F[$i] = $a2 + 2*$b;
} 
   
	//4
if ($a1<0 && $b1<0) {
	$F[$i] = ($b1*$b1+$a1)/(pow($a1,3)*pow($b1,4));
} elseif ($a2<=0 && $b>0) {
	$F[$i] = ($b*$b+$a2)/(pow($a2,3)*pow($b,4));
} 

}

$z = $F[0] + $F[1]; // Сумма функций
echo '<br/>' . 'Сумма функций равна: ' . $z;
?>
</body>
</html>
