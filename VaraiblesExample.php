<!--   
in php variables used to store various data types like string, number , arrays , object
php variables should not start with number , it can start with string or underscore
it contains alpha numeric
php is loosely typed language so no need to declare data type name
-->
<?php
$x = "welcome to india";
echo $x . '<br/>';
$y = "12.5";
$z = 13;
echo gettype($y); //it is used to getting datatype of variable
echo "<br/>";
settype($y, "int"); // changing datatype of variable
echo gettype($y);
unset($z); //it removes the value from variable
echo "<br/>";
echo gettype($z);
echo "<br/>";
var_dump($x); // it is used to get type of variable with content and length of content
?>
<h2>
  Reference Variable
</h2>
<?php
// reference variable nothing but multiple variables pointing same memory location 
$x = 11;
//$y = $x;
$y = &$x;
$y = 22;
// echo $x . '==' . $y; //11==22
echo $x . '==' . $y; //22==22
?>
<h3>
  Type casting
</h3>
<?php
//type casting is nothing but it converting one data type to another data type
$x = "12.5";
$y = (int)$x;
var_dump($y);

?>

<h3>Varaible -Variable</h3>

<?php
// dynamically set variable name

$a = "hello";
$$a = "world";

echo $a . '--' . $hello;
echo "<br/>";
echo $a . '--' . $$a;
echo "<br/>";
echo $a . '--' . ${$a};
echo "<br/>";
echo $a . '--' . $hello;
echo "<br/>";

?>

<h3>Constant variables</h3>
<?php
//constant variables cant reassigned and we cannot change 

// it is created by const keyword and define()
// const vs. define()

// const are always case-sensitive
// define() has has a case-insensitive option.
// const cannot be created inside another block scope, like inside a function or inside an if statement.
// define can be created inside another block scope.
// Constants are automatically global and can be used across the entire script.


define("f", 10);
const g = 10;
echo f . "-" . g;
?>
<h3>Magic variables</h3>

<?php
// these are used to know information our program uppercase between double underscore

echo __LINE__;
echo "<br>";
echo __DIR__;
echo "<br>";

echo __FILE__;
echo "<br>";
echo __METHOD__;

?>

<h3>
  Scope variables
</h3>

<?php
// 3 types of scope is there 

//1.local scope: we can declare within function and access in that only 
//2.global scope: we can declare outside the function and we can use anywhere in that script if we want use in function we should give global keyword
//3.static variable : normally when function completed / executed that local variables will be deleted , but when give static keyword to that variable it mantain intial or previous valus also
function localScope()
{
  $x = 100;
  $y = 200;
  $z = $x + $y;
  return $z;
}
echo localScope() . '<br>';

$u = 100;
$v = 200;

function globalScope()
{
  global $u, $v;
  return $u + $v;
}
echo globalScope() . '<br>';

function add()
{
  static $x = 0;
  $x++;
  return $x;
}
echo add() . '<br>';
echo add() . '<br>';

echo add() . '<br>';

?>