<?php

$email= $_POST['email'];
$numero= $_POST['numero'];


$file="turnos.txt";
file_put_contents($file, "email:",FILE_APPEND);
file_put_contents($file, $email,FILE_APPEND);
header('location: https://tallersergio.000webhostapp.com/confirmar.html');
file_put_contents($file, "\n",FILE_APPEND);
file_put_contents($file, "numero:",FILE_APPEND);
file_put_contents($file, $numero,FILE_APPEND);


?>

