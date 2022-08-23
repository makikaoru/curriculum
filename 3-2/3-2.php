<?php
$fruits = ["りんご" =>"300", "みかん" => "150", "もも" => "3000"];
foreach ($fruits as $fruitsname => $value) {
  echo $fruitsname;
  echo 'は';
  echo $value;
  echo '円です。';
  echo '<br>';
}
?>
