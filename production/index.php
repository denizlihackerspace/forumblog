<?php
require_once 'functions.php';
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
	<style type="text/css">
		div.clear
		{
			clear: both;
		}

		div.product-chooser{

		}

		div.product-chooser.disabled div.product-chooser-item
		{
			zoom: 1;
			filter: alpha(opacity=60);
			opacity: 0.6;
			cursor: default;
		}

		div.product-chooser div.product-chooser-item{
			padding: 11px;
			border-radius: 6px;
			cursor: pointer;
			position: relative;
			border: 1px solid #efefef;
			margin-bottom: 10px;
			margin-left: 10px;
			margin-right: 10px;
		}

		div.product-chooser div.product-chooser-item.selected{
			border: 4px solid #428bca;
			background: #efefef;
			padding: 8px;
			filter: alpha(opacity=100);
			opacity: 1;
		}

		div.product-chooser div.product-chooser-item img{
			padding: 0;
		}

		div.product-chooser div.product-chooser-item span.title{
			display: block;
			margin: 10px 0 5px 0;
			font-weight: bold;
			font-size: 12px;
		}

		div.product-chooser div.product-chooser-item span.description{
			font-size: 12px;
		}

		div.product-chooser div.product-chooser-item input{
			position: absolute;
			left: 0;
			top: 0;
			visibility:hidden;
		}
	</style>

</head>
<body>

<script>
	$(function(){
		$('div.product-chooser').not('.disabled').find('div.product-chooser-item').on('click', function(){
			$(this).parent().parent().find('div.product-chooser-item').removeClass('selected');
			$(this).addClass('selected');
			$(this).find('input[type="radio"]').prop("checked", true);

		});
	});
</script>

<div class="container" style="margin-top: 70px">
	<div class="row form-group product-chooser">
		<div class="col-md-2"></div>
		<div class="col-md-8"><span><h2>Hoşgeldiniz, <?php echo $userAd." ".$userSoyad." [<a href=\"logout.php\">Çıkış Yap</a>]"; ?></h2></span>
		<a href="blog/">
			<div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
				<div class="product-chooser-item">
					<img src="images/blog.png" class="img-rounded col-xs-4 col-sm-4 col-md-12 col-lg-12" alt="Desktop">
					<div class="col-xs-8 col-sm-8 col-md-12 col-lg-12">
						</div>
					<div class="clear"></div>
				</div>
			</div>
		</a>
		<a href="forum/">
			<div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
				<div class="product-chooser-item">
					<img src="images/forum.png" class="img-rounded col-xs-4 col-sm-4 col-md-12 col-lg-12" alt="Desktop">
					<div class="col-xs-8 col-sm-8 col-md-12 col-lg-12">
						</div>
					<div class="clear"></div>
				</div>
			</div>
		</a>
		</div>
		<div class="col-md-2"></div>

	</div>
</div>



</body>
</html>