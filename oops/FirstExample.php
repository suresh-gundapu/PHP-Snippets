<!-- 
pop : pocedure oriented program
oop: object oriented program 

=> in oop real world program possible
=> data hiding secure the code
=> easy to aproach
=> develop mvc archetecture 
=> code reusebilty 
oops concepts :
==============

1) class and object
2) encapsulation 
3) polimorpihsem
4) data abstraction 
5) inheritance 

class:
======

class is a template or concept or blue print 

class have differnet propertice or data memebrs  and methods or functions 
each item of concepts perfoming perticular method
it is a blue print of properties and methods 
class is a plan , it exist virtually

object:
========
it is instanse of class means memory or database for class , it exist visually
without object no use of class , we can create object new keyword , we can create number of objects for one class


 -->
<?php
class User
{
  function add()
  {
    $x = 10;
    $y = 20;
    return $z = $x + $y;
  }
}
$obj1 = new User();
echo $obj1->add();
?>
<?php
class Car
{
  public $x;
  public  $y;
  function sum($a, $b)
  {
    $this->x = $a;
    $this->y = $b;
    $z = $a + $b;
    return $z;
  }
}
$obj = new Car();
echo $obj->sum(50, 50);

?>