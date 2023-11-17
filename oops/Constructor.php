<!-- 

constructor:
===========

it is a special type of function 
when object create it calls automatically 

this is 2 types:

user-defined: when class name and function name same it treated as counstructor 
pre defined : __construct() double underscore with name , it is used lot and it overrides user-defined
 -->

<?php
class Fruit
{
  public $name;

  public function __construct($name)
  {
    $this->name = $name;
  }
  public function get_name()
  {
    return $this->name;
  }
}
$obj = new Fruit("Apple");
echo $obj->get_name();

?>