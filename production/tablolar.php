<?php
/**
 * Created by PhpStorm.
 * User: murat
 * Date: 31.07.2016
 * Time: 19:01
 */

//ilk kurulum için tablo kontrollerini yapalım
$result = mysqli_query($conn,"SHOW TABLES FROM forumblog" );
if (! $result) {
    echo "Sorguda hata meydana geldi,";
    echo 'mysql error: ' . mysqli_error($result);
} else {
    if(mysqli_num_rows($result)==0) {
        // echo "hiç tablo yok<br>";

        //////////////////////////ÜYELER TABLOSU//////////////////////////////////////
        $isimUye="uyeler";
        $tabloUye = "CREATE TABLE {$isimUye} (
          uye_id int(11) NOT NULL AUTO_INCREMENT,
          uye_ad varchar(30) NOT NULL,
          uye_soyad varchar(30) NOT NULL,
          uye_email varchar(100) NOT NULL UNIQUE,
          uye_password varchar(50) NOT NULL,
          PRIMARY KEY (uye_id)
      )";
        if (mysqli_query($conn, $tabloUye)) {
            //echo "{$isimUye} tablosu oluşturuldu!<br>";
            mysqli_query($conn,"INSERT INTO uyeler(uye_ad,uye_soyad,uye_email,uye_password)VALUES ('admin',' ','admin@forumblog.com','password')");
        }
        else {
            echo "Tablo oluşturma hatası: " . mysqli_error($conn);
        }
        //////////////////////////////////////////////////////////////////////////////
        //////////////////////////KATEGORİLER TABLOSU//////////////////////////////////////
        $isimKat="kategoriler";
        $tabloKat = "CREATE TABLE {$isimKat} (
          kat_id int(11) NOT NULL AUTO_INCREMENT,
          kat_ad varchar(50) NOT NULL,
          kat_ust_id int(11) NOT NULL,
          PRIMARY KEY (kat_id)
      )";
        if (mysqli_query($conn, $tabloKat)) {
            //echo "{$isimKat} tablosu oluşturuldu!";
        }
        else {
            echo "Tablo oluşturma hatası: " . mysqli_error($conn);
        }
        //////////////////////////////////////////////////////////////////////////////
        //////////////////////////POSTLAR TABLOSU/////////////////////////////////////
        $isimPost="posts";
        $tabloPost = "CREATE TABLE {$isimPost} (
          post_id int(11) NOT NULL AUTO_INCREMENT,
          uye_id int(11) NOT NULL ,
          kat_id int(11) NOT NULL ,
          post_baslik varchar(50) NOT NULL,
          post_icerik text NOT NULL,
          post_tarihi datetime NOT NULL,
          post_forum int(1) NOT NULL DEFAULT 0,
          PRIMARY KEY (post_id)
      )";
        if (mysqli_query($conn, $tabloPost)) {
            //echo "{$isimPost} tablosu oluşturuldu!";
        }
        else {
            echo "Tablo oluşturma hatası: " . mysqli_error($conn);
        }
        //////////////////////////////////////////////////////////////////////////////
        //////////////////////////YORUMLAR TABLOSU////////////////////////////////////
        $isimYorum="yorumlar";
        $tabloYorum = "CREATE TABLE {$isimYorum} (
          yorum_id int(11) NOT NULL AUTO_INCREMENT,
          uye_id int(11) NOT NULL ,
          post_id int(11) NOT NULL ,
          yorum_icerik text NOT NULL,
          yorum_tarihi datetime NOT NULL,
          PRIMARY KEY (yorum_id)
      )";
        if (mysqli_query($conn, $tabloYorum)) {
            //echo "{$isimYorum} tablosu oluşturuldu!";
        }
        else {
            echo "Tablo oluşturma hatası: " . mysqli_error($conn);
        }
        //////////////////////////////////////////////////////////////////////////////


    }
    else {
        $i=1;
        while ($row = mysqli_fetch_row($result)) {

            //echo "{$i}. Tablo ismi : " . $row[0] . "<br>";
            $i++;
        }
    }
}





?>
