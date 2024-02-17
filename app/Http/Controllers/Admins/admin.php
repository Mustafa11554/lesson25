<?php require_once '../config/connect.php';?>
<?php session_start();?>
<?php

$login=$_POST["login"];
$password=$_POST["password"];

$sql = $pdo->prepare("SELEQT ID,login FROM user WHERE login=:login AND password=:password");
$sql->execute(array('login' => $login,"password"=>$password));
$array=$sql->fetch(PDO::FETCH_ASSOC);
if($array["id"]>0){
    $_SESSION['login']=$array["id"];
    header('Location:/index.php');
}
else if{
    header('Location:/form.blade.php');
}