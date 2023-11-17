<!-- 
arrays are hold any type of  data type of values bcz php loosely typed language 
3 types :
1) indexed or numeric array => it contain stings or numbers as values but should have index or keys are numbers 
2) associative  array :
=> an array associated where each key with values , 
=> key s are numbers or strings 
=> we can give custom key or value
=> in this not follow order 
=> if some value dont have key then that key will be add 1 to previous highest key
3) multi dimensional array : array within another array 
 -->
<h2>
  Sum of given array
</h2>
<?php
$arr  = array(1, 2, 3, 4);
$sum = 0;
for ($i = 0; $i < count($arr); $i++) {
  $sum = $sum + $arr[$i];
}
echo $sum;
?>
<h2>
  Sum of even numbers from array
</h2>
<?php
$arr  = array(1, 2, 3, 4);
$sum = 0;
for ($i = 0; $i < count($arr); $i++) {
  if ($arr[$i] % 2 == 0) {
    $sum = $sum + $arr[$i];
  }
}
echo $sum;
?>
<h2>
  Array Reverse given array
</h2>
<?php
$arr  = array(1, 2, 3, 4);
// $newarr = array_reverse($arr);
// print_r($newarr);
$new_arr = [];
for ($i = count($arr) - 1; $i >= 0; $i--) {
  echo $arr[$i] . ',';
  array_push($new_arr, $arr[$i]);
}
print_r($new_arr);
?>
<h2>associative array</h2>
<?php
$arr = array(1 => "suresh", 0 => 5, 6, 7, 50 =>  9, 8, 90 => 3);
echo "<pre>";
print_r($arr);

?>
<h2>
  Multi dimintional array sum of even numbers given array
</h2>
<?php
$arr = array(
  array(5, 6, 2, 3),
  array(9, 6, 8, 7),
  array(9, 7, 4, 5, 6)
);
// echo "<pre>";
// print_r($arr);
$sum = 0;
for ($i = 0; $i < count($arr); $i++) {
  for ($j = 0; $j < count($arr[$i]); $j++) {

    if ($arr[$i][$j] % 2 == 0) {

      $sum = $sum + $arr[$i][$j];
    }
  }
}
echo $sum;

?>
<h1>
  Array Functions
</h1>

<h2>
  Sort function
</h2>
<?php
$arr  = array(1, 2, 3, 4);
//sort($arr); //bdefault ascending order
//rsort($arr); // descending order;

//ksort($arr); //keys ascending
krsort($arr); //keys descending
echo "<pre>";
print_r($arr);
?>
<h3>
  explode -> string array convert
</h3>
<?php
$string = "welcome to HB";

$newString = explode(' ', $string);
echo "<pre>";
print_r($newString);

?>
<h3>
  implode -> array to string
</h3>
<?php
$arr  = array(1, 2, 3, 4);
$newString = implode(',', $arr);
echo "<pre>";
print_r($newString);
?>
<h3>
  extract -> convert associate array s keys into particular variables
</h3>
<?php
$arr  = array("a" => 1, 0 => 2, "b" => 3, "c" => 4);
$newString = extract($arr);
echo $c;
?>

<h3>
  array_values : get only array values
</h3>
<?php
$arr  = array("a" => 1, "b" => 2, 3, 4);
$new_arr = array_values($arr);
echo "<pre>";
print_r($new_arr);
?>

<h3>
  array_keys : get only array keys
</h3>
<?php
$arr  = array("a" => 1, "b" => 2, 3, 4);
$new_arr = array_keys($arr);
echo "<pre>";
print_r($new_arr);
?>
<h3>
  array_column : get particular array column values as new array
</h3>
<?php
$arr  = array(
  array("name" => "suresh", "email" => "s@g"),
  array("name" => "naresh", "email" => "s@g"),
  array("name" => "raju", "email" => "s@g")

);
$new_arr = array_column($arr, "name");
echo "<pre>";
print_r($new_arr);
?>

<h3>
  array_unique : remove duplicate values from array
</h3>
<?php
$arr  = array(
  9, 9, 8, 8, 6, 3, 2, 1
);
$new_arr = array_unique($arr);
echo "<pre>";
print_r($new_arr);
?>