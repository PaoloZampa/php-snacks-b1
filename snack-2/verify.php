<?php

$name = $_GET['name'];
$mail = $_GET['mail'];
$age = $_GET['age'];

//echo "$name , $mail , $age";

if (strlen($name) > 3 && strpos($mail, '@') && is_numeric($age)) {
    echo 'Accesso riuscito!';
} else {
    echo 'Accesso negato!';
}