<?php
$name="大垣翔";
if($name=="大垣翔"){
    echo"私は".$name."です";
}else{
    echo$name."ではありません";
}

$total=0;
for($i=0;$i<=10000;$i++){
    $total+=$i;
}
echo $total;

$fruits=array("apple","orange","strawberry", "pineapple","banana");
foreach($fruits as $fruit){
echo $fruit;
echo "\n";
}

$start=1;
$end=100;
for($i=$start; $i <= $end; $i++){
  if($i % 5 == 0){
      echo $i;
      echo"\n";
  }
}


