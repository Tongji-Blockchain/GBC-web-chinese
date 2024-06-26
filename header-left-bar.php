<?php 
ini_set('error_reporting', E_ALL);
error_reporting(-1);
$json = json_decode(file_get_contents('configuration/config.json'), true);
?>

<html>
<head>
	<link href="css/reset.css" rel='stylesheet' type='text/css'>
	<link href="css/basscss.css" rel="stylesheet">
	<link href='https://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.0/css/font-awesome.min.css">
	<script
  		src="https://code.jquery.com/jquery-3.1.1.min.js"
  		integrity="sha256-hVVnYaiADRTO2PzUGmuLJr8BLUSjGIZsDYGmIJLv2b8="
  		crossorigin="anonymous">
  	</script>
	<link rel="stylesheet" href="css/main-styles.css">
	<?php 
		if(isset($stylesheet)){
			echo '<link rel="stylesheet" type="text/css" href="'.$stylesheet.'">'; 
		}
	?>

	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<meta name="keywords" content="">

	<style type="text/css">

		#header:after{
		    background-image: url(<?php echo $json['header']['bannerImage'];?>); 
		    background-position: right <?php echo $json['header']['bannerRightPlacement'];?> top <?php echo $json['header']['bannerTopPlacement'];?> ;
		}
	</style>

	<script>
	  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
	  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
	  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
	  })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

	  ga('create', 'UA-84971641-1', 'auto');
	  ga('send', 'pageview');

	</script>

	<script type="text/javascript">
		$(document).ready(function(){
			
			var newsCounter = 0

			$('#news-ticker-link').attr('href', config.newsTicker[0].link)
			$('#news-ticker-link').html(config.newsTicker[0].content)

			setInterval(function(){
				
				if(newsCounter + 1 > config.newsTicker.length-1){
					newsCounter = 0
				}else{
					newsCounter++
				}
				
				$('#news-ticker-link').fadeOut(500, function(){
					$('#news-ticker-link').attr('href', config.newsTicker[newsCounter].link)
					if(config.newsTicker[newsCounter].openInNewWindow){
						$('#news-ticker-link').attr('target', '_blank')
					}else{
						$('#news-ticker-link').attr('target', '')
					}
					$('#news-ticker-link').html(config.newsTicker[newsCounter].content)
					$('#news-ticker-link').fadeIn(500, function(){
					})
				})
				
			}, 5000)

			
		})
	</script>
	<?php 
		echo '<script>var config='.file_get_contents('configuration/config.json').'</script>';
	?>
</head>
<body>
	<div class="flex-column main-container">
		<div id="header" class="flex flex-columm flex-auto">
			<div class="flex-auto" style="width: 85%">
				<div class="bars"><a href="#left-bar-container"><i class="fa fa-2x fa-bars"></i></a></div>
				<div class="dates"><a href="#right-bar"><i class="fa fa-2x fa-calendar"></i></a></div>
				<div id="header-title-container">
					<div class="header-title bold flux-auto" style=""><img src="images/logo/IEEE-Blue.png" style=""></img><div style="vertical-align: middle;display: inline-block;color:#0073AE"><?php echo $json['header']['title'];?></div></div>
					<div class="header-title bold" style="font-size: x-large;"><?php echo $json['header']['subtitle'];?></div>
					<div class="header-title bold" style="font-size: large;"><?php echo $json['header']['dateTitle'];?></div>
					<div class="header-title bold" style="font-size: medium;"><?php echo $json['header']['locationPlaceName'];?> <br> <?php echo $json['header']['locationAreaName'];?></div>
					<div class="header-title bold" style="font-size: x-large;"><?php echo $json['header']['slogon'];?></div>
				</div>
				<!-- <div id="header-quick-links" class="flex flex-wrap">
					<button onclick="location.href='';">AUTHORS</button>
					<button onclick="location.href='';">DATES</button>
				</div> -->
				<div id="news-ticker" class="flex flex-wrap news-ticker">
					<p style="padding:0;margin:0;font-size:smaller">
						<i style="color:red;margin-right:10px" class="fa fa-1x fa-newspaper-o"></i> 
						<span id="news-ticker-content">
							<a id="news-ticker-link" href="#">敬请期待！</a>
						</span>
					</p>
				</div>
			</div>
			<div class="flex flex-wrap logos" style="width: 15%">
				<div class="" style="margin-top:3%;width:100%;height:85px;background:url(images/logo/) no-repeat"></div>
				<div style="margin-top:1%;width:220px;height:85px;background:url(images/logo/IEEE-Blockchain.png) no-repeat"></div>
				<div style="margin-top:1%;width:220px;height:85px;background:url(images/logo/SERCBAAS-Blue.png) no-repeat"></div>
			</div>
		</div>
		<div id="content-container" class="flex flex-auto flex-space-between">
			<div id=left-bar-container class="flex flex-auto col-2">
				<ul class="left-bar list-reset" style="">
				<li name="back" class="bold" style="font-size: x-large">IEEE <?php echo $json['meta']['conferenceName'];?><a href="#" class="slide-back"><i class="fa fa-lg fa-arrow-circle-left" aria-hidden="true"></i></a></li>
					<li name="home"><a href="index.php"><i class="fa fa-lg fa-home" aria-hidden="true"></i>主页</a></li>

					<li name="about"><a href="about.php"><i class="fa fa-lg fa-info" aria-hidden="true"></i>关于大会</a></li>

					<li name="organizers"><a href="organizers.php"><i class="fa fa-lg fa-users" aria-hidden="true"></i>大会组委会</a></li>

					<li name="home"><a href="keynote.php"><i class="fa fa-lg fa-microphone" aria-hidden="true"></i>主旨演讲</a></li>

					<li name="authors"><a href="authors.php"><i class="fa fa-lg fa-pencil-square-o" aria-hidden="true"></i>作者须知</a></li>

					<li name="hotel"><a href="technical-program.php"><i class="fa fa-lg fa-tasks" aria-hidden="true"></i>大会技术议程</a></li>

					<li name="registration"><a href="registration.php"><i class="fa fa-lg fa-sign-in" aria-hidden="true"></i>注册</a></li>

					<li name="hotel"><a href="hotel.php"><i class="fa fa-lg fa-bed" aria-hidden="true"></i>会议场地/酒店</a></li>

					<li name="events"><a href="events.php"><i class="fa fa-lg fa-calendar" aria-hidden="true"></i>活动</a></li>

					<li name="visa-information"><a href="sponsors.php"><i class="fa fa-lg fa-globe" aria-hidden="true"></i>赞助单位</a></li>
				</ul>
			</div>
			<div id="center-content" class="flex flex-auto flex-column col-7">
				<div class="flex">
					<div style="height:80px;background:#191970;color:white;width: 100%">
						<div id="page-title" style="padding:3%;font-weight:bold;font-size: x-large;text-transform: uppercase;"><i class="fa fa-3 fa-long-arrow-right" aria-hidden="true"></i> <?php echo $pageTitle ?></div>
					</div>
				</div>
				<div class="main-content flex-auto">