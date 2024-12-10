<?php

use app\classes\Connection;
use Dotenv\Dotenv;

session_start();
require '../vendor/autoload.php';

$dotenv = Dotenv::createImmutable(dirname(__FILE__, 2));
$dotenv->load();

$conn = new Connection;