<?php 
session_start();
//error_reporting(0);
require 'generator.php';
require 'database.php';


$generate = new PhonesGenerator();

$errors = array();

// Added to avoid a common error of 'header already sent'
ob_start(); 