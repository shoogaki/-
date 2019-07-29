<?php
function twice($a){
    return $a*=2;
}
echo twice($a);
?>

<?php
function plus($a,$b){
    return $a+=$b;
}
echo plus($a,$b);
?>

<?php
function multiply($arr){
    $result=1;
    foreach($arr as $a){
        $result=$result*$a;
    }
    return $result;
}
$arr=array(1,3,5,7,9);
echo multiply($arr);
?>

<?php
function multiply2($arr){
    $result=1;
    foreach($arr as $a){
        $result*=$a;
    }
    return $result;
}
$arr=array(1,3,5,7,9);
echo multiply2($arr);
?>

<?php
function max_array($arr){
 $max_number = $arr[0];
 foreach($arr as $a){
 if($max_number<$a){
     $max_number=$a;
 }
 return $max_number;
 }
 $arr=array(1,2,3,4,5);
 echo max_array($arr);
 }
?>

<?php
$text='<h>こんにちは!</h><a href="https://google.com">Google</a>';
echo strip_tags($text,'<h>');
?>

<?php
$stack = array("orange", "banana");
array_push($stack, "apple", "raspberry");
print_r($stack);
?>

<?php
$array1 = array("color" => "red", 2, 4);
$array2 = array("a", "b", "color" => "green", "shape" => "trapezoid", 4);
$result = array_merge($array1, $array2);
print_r($result);
?>

<?php
$nextWeek = time() + (7 * 24 * 60 * 60);
echo 'Now:       '. date('Y-m-d') ."\n";
echo 'Next Week: '. date('Y-m-d', $nextWeek) ."\n";
echo 'Next Week: '. date('Y-m-d', strtotime('+1 week')) ."\n";
?>

<?php
$timestamp=mktime(7,10,30,6,10,2010);
echo date('Y/d/m G:i:s',$timestamp);
?>

<?php
$today = date("Y-m-d H:i:s"); 
echo $today
?>