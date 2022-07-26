<?php
require 'Model/Model.php';
require 'View/Load.php';
require 'Controller/Controller.php';

$pageURI = $_SERVER['REQUEST_URI'];
$pageURI =substr($pageURI,strrpos($pageURI,'index.php')+10);
if (!$pageURI) {
    new Controller('home');
} else {
    new Controller($pageURI);
}
?>