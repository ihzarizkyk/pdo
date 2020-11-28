<?php

$hostname = "localhost";
$username = "root";
$password = "";
$db = "pdodb";
$conn = new PDO("mysql:host=$hostname;dbname=$db",$username,$password);