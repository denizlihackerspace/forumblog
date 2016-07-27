<?php
/**
 * Created by PhpStorm.
 * User: Murat Saygılı
 * Date: 3.5.2016
 * Time: 00:50
 */

require_once 'functions.php';

if($user){
    session_destroy();
    echo yonlendir(0,"login.php");
}
else{
    echo "Oturum açık değil, yönlendiriliyorsunuz..";
    echo yonlendir(1,"login.php");
}
?>
</body>
</html>