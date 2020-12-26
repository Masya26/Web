<?php
mb_internal_encoding("UTF-8");
$text = $_POST["givenText"];
$sign = $_POST["givenWord"];
$s=count(explode(' ', $text));
$pieces = explode(" ", $text);

echo $text;
echo "<br/>";
echo "Число слов, начинающихся на букву ".$sign.": ";
$count=0;
for($i=0;$i<$s;$i++){
    $len=mb_strlen($pieces[$i]);
    for($j=0;$j<$len;$j++){
        $l[$j]=mb_substr($pieces[$i],$j,1);
        if($l[$j]==$sign){
            $count++;
        }
    }
}
echo $count;
// 	for ($i=0; $i < $len_text; $i++) { 
// 		$l[$i] = mb_substr($text,$i,1);
// 		if ($l[$i] == $sign) {
// 		$count_char = $count_char + 1;
// 		echo $i . " ";
// 	} 
// 	}	


 ?>