<?php 
$newusername = "Nowa nazwa uzytkownika";
setcookie("username",$newusername, time()+ (86400 *30), "/");
echo "plik cookie 'username został zaktualizowany. Nowa wartość:" . $_COOKIE['username'];
?>