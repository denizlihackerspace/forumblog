<?php
/**
 * Created by PhpStorm.
 * User: YunusEmre
 * Date: 4.8.2016
 * Time: 12:07
 */

require_once "functionsBlog.php";
 ?>

<!DOCTYPE html>
<html lang="tr">

<head>

    <?php getHead("Empty Page"); ?>

    <!-- Bootstrap Core CSS -->
    <link href="../../documentation/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="../../documentation/css/blog-home.css" rel="stylesheet">

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
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="index.php">Ana Sayfa</a>
        </div>
        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav">
                <li>
                    <a href="#">Yeni Yayın</a>
                </li>
                <li>
                    <a href="#">Yayınları Görüntüle</a>
                </li>
                <li>
                    <a href="../forum">Blog'u forumda görüntüle</a>
                </li>
            </ul>
        </div>
        <!-- /.navbar-collapse -->
    </div>
    <!-- /.container -->
</nav>
<br>
<br>
<!-- Page Content -->
<div class="container">

    <div class="row">

        <div class="col-md-2">
            <ul class="nav navbar-btn">
                <li>

                    <a href="#">Önizleme</a>
                </li>
                <li>
                    <a href="#">Kayıtlar</a>
                </li>
                <li>
                    <a href="#">Sayfalar</a>
                </li>
                <li>
                    <a href="#">Yorumlar</a>
                </li>
                <li>
                    <a href="#">İstatistikler</a>
                </li>
                <li>
                    <a href="#">Kazançlar</a>
                </li>
                <li>
                    <a href="#">Kampanyalar</a>
                </li>
                <li>
                    <a href="#">Yerleşim</a>
                </li>
                <li>
                    <a href="#">Ayarlar</a>
                </li>


            </ul>
        </div>

        <!-- Blog Entries Column -->
        <div class="col-md-6">

            <h1 class="page-header">
               Boş sayfa
                <small>Secondary Text</small>
            </h1>

            <!-- First Blog Post -->
            içerik

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
                        <ul class="list-unstyled">
                            <li><a href="#">Category Name</a>
                            </li>
                            <li><a href="#">Category Name</a>
                            </li>
                            <li><a href="#">Category Name</a>
                            </li>
                            <li><a href="#">Category Name</a>
                            </li>
                        </ul>
                    </div>
                    <!-- /.col-lg-6 -->
                    <div class="col-lg-6">
                        <ul class="list-unstyled">
                            <li><a href="#">Category Name</a>
                            </li>
                            <li><a href="#">Category Name</a>
                            </li>
                            <li><a href="#">Category Name</a>
                            </li>
                            <li><a href="#">Category Name</a>
                            </li>
                        </ul>
                    </div>
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
                <p>Copyright &copy; Your Website 2014</p>
            </div>
            <!-- /.col-lg-12 -->
        </div>
        <!-- /.row -->
    </footer>

</div>
<!-- /.container -->

<!-- jQuery -->
<script src="../../documentation/js/jquery.js"></script>

<!-- Bootstrap Core JavaScript -->
<script src="../../documentation/js/bootstrap.min.js"></script>





</body>

</html>
