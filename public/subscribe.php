<?php

$email = $_POST['email'];

file_put_contents('../list.txt', $email."\n", FILE_APPEND);

header('Location: thanks.php');
die();

