<?php

require_once 'db.php';



$name=$_POST['name'];
$password=$_POST['password'];
$email=$_POST['email'];
$phone_number=$_POST['phone_number'];

$password=md5($password);

$stmt= $pdo->query('INSERT INTO `reg`(`name`,`password`,`e-mail`,`phone_number` ) VALUES (
                                                                                                                                                                                                
                                                                                                "'.$name.'",
                                                                                                "'.$password.'",
                                                                                                "'.$email.'",
                                                                                                "'.$phone_number.'"                                                                                               
                                                                                                )');
var_dump($pdo->errorInfo());