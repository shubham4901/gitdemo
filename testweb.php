<?php 
$path = "/testweb/var/www/mywebsite/htdocs/home.php"; 
  
$file1 = basename($path); 
$file2 = basename($path, ".php"); 
  
//Show filename with file extension 
echo $file1 . "\n"; 
  
//Show filename without file extension 
echo $file2; 
?> 
