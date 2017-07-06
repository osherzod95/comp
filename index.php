<?php 
require "vendor/autoload.php";
Twig_Autoloader::register();
$loader = new Twig_Loader_FileSystem('theme');
var_dump($loader);
?>