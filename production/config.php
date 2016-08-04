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
$db="forumblog";

$conn=mysqli_connect($host,$user,$pass) or die(" bağlantı başarısız" . mysqli_error($conn));


//bağlantı başarılı, veritabanı kontrolüne geçelim..
$dbSec=mysqli_select_db($conn, $db);

if($dbSec){
    //echo "veritabanına bağlandı";

    //db var ama tablolar yoksa aşağıdaki komut çalıştırılması gerekir..
    //require 'tablolar.php';
}
else{
    //echo "veritabanı oluşturulmamış";

    if(mysqli_query($conn,"CREATE DATABASE forumblog DEFAULT CHARACTER SET utf8 COLLATE utf8_turkish_ci")){
        mysqli_select_db($conn, $db);
        require 'tablolar.php';
    }else
        echo "veritabanı oluşturulamadı";

}





mysqli_query($conn,"SET NAMES utf8");
session_start();

?>