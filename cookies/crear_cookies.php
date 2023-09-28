<?php

//crear cookie
setcookie("micookie", "valo de mi galleta");
setcookie("unyear","valor de mi cookie de 365 dias", time()+(60*60*24*365));

?>

<a href="ver_cookies.php">Ver las galletas</a>
