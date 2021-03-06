<?php
require_once 'config.php';

function yonlendir($sure,$sayfa){
  $deger = "<meta http-equiv=\"refresh\" content=\"$sure;url=$sayfa\">\n";
  return $deger;
}

?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title> Hackerspace </title>

    <!-- Bootstrap -->
    <link href="../vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="../vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <!-- NProgress -->
    <link href="../vendors/nprogress/nprogress.css" rel="stylesheet">
    <!-- Animate.css -->
    <link href="../vendors/gentelella/animate.min.css" rel="stylesheet">

    <!-- Custom Theme Style -->
    <link href="../build/css/custom.min.css" rel="stylesheet">
  </head>
  <body class="login">
    <div>
      <a class="hiddenanchor" id="signup"></a>
      <a class="hiddenanchor" id="signin"></a>

      <div class="login_wrapper">
        <?php

        if(isset($_POST['login'])){
          $password=$_POST['pass'];
          $email=$_POST['eposta']; // formdan gelen giriş bilgilerini aldık

          // daha sonra böyle bir kullanıcı veritabanında var mı
          // yok mu bunu kontrol edip oturum açacağız
          $uye=mysqli_query($conn,"SELECT * FROM uyeler WHERE uye_email='$email' AND uye_password='$password' ");
          $sonuc=mysqli_num_rows($uye);
          if($sonuc>0){
            $user=$_SESSION['user']=$email;
            echo yonlendir(0,"index.php");
          }else{
            echo "Kullanıcı adı veya şifre hatalı..";
          }
        }
        else if(isset($_POST['ekle']))
        {
          $ad=$_POST['ad'];
          $soyad=$_POST['soyad'];
          $email=$_POST['email'];
          $password=$_POST['password'];
          $rs=mysqli_query($conn,"INSERT INTO uyeler(uye_ad,uye_soyad,uye_email,uye_password)VALUES ('$ad','$soyad','$email','$password')");
          if($rs)
          {
            echo "kayıt başarılı..yönlendiriliyorsunuz";
            echo yonlendir(2,"login.php#signin");
          }
          else
          {
            echo "Kayıt sırasında bir hata oluştu.Tekrar deneyin";
            echo yonlendir(2,"login.php#signup");
          }
        }
        else if(isset($_SESSION['user'])){
          echo "zaten giriş yaptınız..";
          echo yonlendir(1,"index.php");
        }
        ?>
        <div class="animate form login_form">
          <section class="login_content">
            <form method="post" action="" >
              <h1> Giriş Formu</h1>
              <div>
                <input type="email" class="form-control"  name="eposta" placeholder="Eposta adresiniz" required="" />
              </div>
              <div>
                <input type="password" class="form-control" name="pass" placeholder="Şifre" required="" />
              </div>
              <div>
                <input type="submit" name="login" class="btn btn-default submit" value="Giriş Yap"/>
                <a class="reset_pass" href="#">Şifreni mi unuttun?</a>
              </div>

              <div class="clearfix"></div>

              <div class="separator">
                <p class="change_link">Kayıtlı değil misin?
                  <a href="#signup" class="to_register"> Hesap Oluştur </a>
                </p>

                <div class="clearfix"></div>
                <br />

                <div>
                  <h1><i class="fa fa-paw"></i> HS Denizli </h1>
                  <p>©2016 All Rights Reserved.</p>
                </div>
              </div>
            </form>
          </section>
        </div>

        <div id="register" class="animate form registration_form">
          <section class="login_content">
            <form method="post">
              <h1>Hesap Oluştur</h1>
              <div>
                <input type="text" class="form-control" name="ad"placeholder="Adınız" required="" />
              </div>
              <div>
                <input type="text" class="form-control" name="soyad"placeholder="Soyadınız" required="" />
              </div>
              <div>
                <input type="email" class="form-control" name="email"placeholder="Email" required="" />
              </div>
              <div>
                <input type="password" class="form-control" name="password" placeholder="Şifre" required="" />
              </div>
              <div>
                <input type="password" class="form-control" name="rpassword" placeholder="Şifre Tekrar" required="" />
              </div>
              <div>
                <input class="btn btn-default submit" type="submit" name="ekle" value="Oluştur">

              </div>

              <div class="clearfix"></div>

              <div class="separator">
                <p class="change_link">Zaten üye misin ?
                  <a href="#signin" class="to_register"> Giriş Yap </a>
                </p>

                <div class="clearfix"></div>
                <br />

                <div>
                  <h1><i class="fa fa-paw"></i> HS Denizli </h1>
                  <p>©2016 All Rights Reserved.</p>
                </div>
              </div>
            </form>
          </section>
        </div>
      </div>
    </div>
  </body>
</html>