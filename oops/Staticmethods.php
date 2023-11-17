<!-- 

we can directly access the method name through class without create object 
 -->

<?php

class User
{

  static function hello()
  {
    echo "hi";
  }
}
user::hello();
?>