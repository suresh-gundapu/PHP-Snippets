<!-- 

inheritence :
===========

it is a process of creating a concept from already exsted concept 

create a class from already created class 

An inherited class is defined by using the extends keyword.


in child classes we can access properties, methods from parent class 

it is used to code re usebility

signle inhertince : one parent class and one child class

multiple inheritance : number of parent classes to child classes 

php not supported amubuguty error overcome by interfaces

multilevel inhertince :

php can support both parent and child classes 


 -->

<?php

class parentClass
{

  function __construct()
  {
    echo "hi";
  }
}

class childClass extends parentClass
{

  public function hello()
  {

    echo "how are you ?";
  }
}

$obj = new childClass();

$obj->hello();

?>