<?php
$num = 1;

while ($num <= 100){
if ($num%3 == 0 && $num%5 == 0){
  echo 'FizzBuzz!!';
  $num++;
}
elseif($num%3 == 0){
  echo 'Fizz!';
  $num++;
}
elseif($num%5 == 0){
  echo 'Buzz!';
  $num++;
}
else{
    echo $num;
    $num++;
}
echo "<br>";
}
?>