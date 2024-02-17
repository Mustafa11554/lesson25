<?php
$user="root";
$password="";
$host="localhost";
$db="testing";
$dbn = 'mysql:host='.$host.';dbname='.$db.';charset=utf8';
$pdo-new PDO($dbn,$user,$password);