<?php
/**
 * Created by PhpStorm.
 * User: Murat Saygılı
 * Date: 18.7.2016
 * Time: 11:47
 */


$host="localhost";
$user="root";
$pass="1234";
$db="deneme";

$conn=mysqli_connect($host,$user,$pass,$db);
mysqli_query($conn,"SET NAMES utf8");
session_start();

?>