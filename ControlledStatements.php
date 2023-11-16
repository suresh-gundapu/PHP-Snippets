<!-- 
controlled statements are used to control the program execution of the flow 
1) conditional control statements 
if, if-else , else if , nested if , switch 
2) looping control statements 
for loop, while loop , do-while loop 
 -->
<h2>
  if , if else , switch program examples
</h2>
<?php
// wpa give 10% discount if purchase 5000 above products
$x = 9000;
if ($x > 5000) {
  $p = 10;
  $discount = $x * $p / 100;
  $finalSetled = $x - $discount;
  echo $finalSetled;
}
?>
<?php
$x = date('D');
switch ($x) {
  case "Thu":
    echo "today is f " . date("D");
    break;
  case  "Mon":
    echo "today is " . date("D");
    break;
  default:
    echo "today is" . date("D");
}
?>
<!-- while loop -->

<?php
$n = 0;
while ($n <= 10) {
  echo $n . '<br>';

  $n++;
}

?>
<?php
$i = 1;
$sum = 0;
while ($i <= 10) {
  $sum = $sum + $i;
  $i++;
}
echo $sum . '<br>';

?>
<?php
$sum = 0;
$sumodd = 0;
for ($i = 0; $i <= 10; $i++) {
  if ($i % 2 == 0) {
    $sum = $sum + $i;
  } else {
    $sumodd = $sumodd + $i;
  }
}
echo 'even numbers sum ' . $sum . '<br>';

echo 'od numbers sum ' . $sumodd . '<br>';

?>

<!-- continue and break

break is used to stop execution of the loop but continue stop only one iterate of the loop
-->

<?php

for ($x = 0; $x <= 10; $x++) {

  if ($x == 4) {
    break;
  }
  echo $x . '<br>';
}
for ($x = 0; $x <= 10; $x++) {

  if ($x == 4) {
    continue;
  }
  echo $x . '<br>';
}
?>

<?php
for ($i = 1; $i <= 23; $i++) {

  for ($j = 2; $j < $i; $j++) {

    if ($i % $j == 0) {
      break;
    }
  }
  if ($j === $i) {

    echo $i . '<br>';
  }
}
?>