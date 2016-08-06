    <?php
    require_once ('../control.php');

?>

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Blog hakerspace</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/blog-home.css" rel="stylesheet">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>

<!-- Navigation -->
<nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
    <div class="container">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="#">Anasayfa</a>
        </div>
        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav">
                <li>
                    <a href="blogEkle.php">Blog Ekle</a>
                </li>
                <li>
                    <a href="#">Services</a>
                </li>
                <li>
                    <a href="#">Contact</a>
                </li>
            </ul>
        </div>
        <!-- /.navbar-collapse -->
    </div>
    <!-- /.container -->
</nav>

<!-- Page Content -->
<div class="container">

    <div class="row">

        <!-- Blog Entries Column -->
        <div class="col-md-8">

            <h1 class="page-header">
                Blog Ekle
                <small>Secondary Text</small>
            </h1>
            <?php
            if(isset($_SESSION['user'])) {
                if (isset($_POST['submit'])) {
                    $post_baslik=$_POST['post_baslik'];
                    $post_icerik=$_POST['post_icerik'];
                    $post_kategori=$_POST['post_kategori']; 
                    $katRs=mysqli_query($conn,"SELECT * FROM kategoriler WHERE kat_ad='$post_kategori'");
                    while($kat=mysqli_fetch_array($katRs))
                        $kat_id=$kat[0];
                        
                    $sql=mysqli_query($conn,"INSERT INTO posts(uye_id,kat_id,post_baslik,post_icerik) VALUES ('$userId','$kat_id','$post_baslik','$post_icerik') ");
                    if($sql){
                        echo "Başarıyla Eklendi";
                       echo yonlendir(0,'index.php');
                    }else{
                        echo mysqli_error($conn);
                    }
                   

                }
            }


            ?>


            <form action="" method="post" >


                <b>Blog Başlığı Giriniz:</b>

                <input class="form-control" type="text" name="post_baslik">
                <br>
                <br>
                <br>
                <b>Blog İçeriğini Yazınız:</b>
                <br>
                <textarea  class="form-control" rows="10" name="post_icerik" cols="40"></textarea>

                <br>
                <br>
                <br>
                <b>Kategori Seç:</b>

                <select  class="form-control" name="post_kategori">
                    <?php


                    $query=mysqli_query($conn,"SELECT * FROM kategoriler ORDER BY kat_ad ASC ");
                    while($kat=mysqli_fetch_array($query)){

                        echo'
<option>

                              <ul class="list-unstyled">
                              <li>'.$kat['kat_ad'].'<br>
                              </li>
                          </ul>
                          </div>
                          </option>
                      
                                 ';
                    }

                    ?>

                </select>

                <br>
                <br>
                <br>
                <p align="center"><input type="submit" name="submit"   value="Kaydet"></p>

            </form>






        </div>

        <!-- Blog Sidebar Widgets Column -->
        <div class="col-md-4">

            <!-- Blog Search Well -->
            <div class="well">
                <h4>Blog Search</h4>
                <div class="input-group">
                    <input type="text" class="form-control">
                        <span class="input-group-btn">
                            <button class="btn btn-default" type="button">
                                <span class="glyphicon glyphicon-search"></span>
                        </button>
                        </span>
                </div>
                <!-- /.input-group -->
            </div>

            <!-- Blog Categories Well -->
            <div class="well">
                <h4>Blog Categories</h4>
                <div class="row">
                    <div class="col-lg-6">
                        <?php


                        $query=mysqli_query($conn,"SELECT * FROM kategoriler ORDER BY kat_ad ASC ");
                        while($kat=mysqli_fetch_array($query)){

                            echo'<div>
                                <ul class="list-unstyled">
                                <li><a href="'.$kat['kat_ad'].'.php">'.$kat['kat_ad'].'</a><br>
                                </li>
                            </ul>
                        </div>
                                   ';
                        }

                        ?>


                        <!-- /.col-lg-6 -->
                        <!-- /.col-lg-6 -->
                    </div>
                    <!-- /.row -->
                </div>

                <!-- Side Widget Well -->
                <div class="well">
                    <h4>Side Widget Well</h4>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Inventore, perspiciatis adipisci accusamus laudantium odit aliquam repellat tempore quos aspernatur vero.</p>
                </div>

            </div>

        </div>
        <!-- /.row -->

        <hr>

        <!-- Footer -->
        <footer>
            <div class="row">
                <div class="col-lg-12">
<hr>
                    <p align="center">Forum Blog &copy; Your Website 2016</p>
<hr>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
        </footer>

    </div>
    <!-- /.container -->

    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

</body>

</html>
