<?php 
$cookie_name = "username";
$cookie_value = "Jakub Terelak";
setcookie($cookie_name, $cookie_value, time()+ (86400 *30) , "/")
?>