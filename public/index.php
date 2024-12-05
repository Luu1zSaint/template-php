<?php
$userData = [
    "firstName" => "Luiz",
    "lastName" => "Robertin",
    "sex" => "M",
    "born" => "04/01/2001",
    "bio" => "Um dia eu quero ser um grande programador!",
    "title" => "Home"
];

ob_start();

extract($userData);
require 'home.php';

$content = ob_get_contents();

ob_end_clean();

echo $content;


?>