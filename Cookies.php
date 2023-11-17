<!-- 
cookies are a small piece of information that are crated  in text format  from server side and send back to  browser memory 

these are used to user track for next visit of website

the cookie storage in text file max 4kb 

cookies are not secure 

2 types 
1_) temporary : when browser closed it will deleted
2) persisstence: we can give certain time to expire 

create cookie 

setcookie("cookiename","value",time()+60*60);

access cookie:
$_COOKIE('cookiename');

 -->