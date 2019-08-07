<?php

$host     = "localhost";
$dbname   = "shopping_mall";
$port     = "3306";
$userName = "root";
$password = "";

$db = new PDO("mysql:host={$host};dbname={$dbname};port={$port}", "{$userName}", "{$password}");
$db->exec("set names utf8");


