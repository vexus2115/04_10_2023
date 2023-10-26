<?php
if(!isset ($_COOKIE['username'])) {
    setcookie("usrname","", time() - 3600,"/");
    echo "Plik cookie 'username' został usunięty.";
} else {
    echo "Plik cookie 'username' nie istnije.";
}
?>