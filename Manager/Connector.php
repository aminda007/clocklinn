<?php

$dbc = mysql_connect('localhost','clockinnuser','1234');

if(!$dbc){
    //echo ".....not connected to aminda....";
    die();
}
else{
    //echo "....connected to amindaaa...";
}

 $db_select = mysql_select_db("dbclockinn", $dbc);
if(!$db_select){
    //echo ".....not connected to clockinn....";
    
    die();
}
else{
    //echo "....connected to clockinnnnn...";

    


    
    
    
}

   
   