<!-- 
session :
sessions are used to store information about single user and available to all pages in single application 
session can hold information and send one page to another page temporarily until browser closed

session are secured because stored information at web server  

it can store unlimited data

default session time is 24 minutes 

we can give explicity time also 

when session create in server side generate session_id With prefix word SESSID and same time clint machine also stored session it with PHPSESSID

we can access both  server side : session_id()
client side S_COOKIE['PHPSESSID];

session enviroment create we start with session_start();

create: $_SESSION['name'] = "value"

access : $_SESSION['name'];

destroy :

unset($_SESSION['name']); // delete specified vraibles 
session_destroy(); // destroy all environment
 -->