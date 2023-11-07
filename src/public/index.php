<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

// Include the autoloader
require '../vendor/autoload.php';

// Import the class
use App\HelloWorld;

// Use the class
$hello = new HelloWorld();
echo $hello->sayHello();  