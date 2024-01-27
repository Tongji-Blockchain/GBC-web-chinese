<?php 
$pageTitle='欢迎'; //THIS MUST BE SET FOR EACH PAGE
require 'header-left-bar.php'; //THIS MUST BE INCLUDED FOR EACH PAGE
?>

 
<?php 
	echo '<script>var config='.file_get_contents('configuration/config.json').'</script>';
?>

<script type="text/javascript">
	$(document).ready(function(){
		
		var newsCounter = 0

		setInterval(function(){
			
			if(newsCounter + 1 > config.newsTicker.length-1){
				newsCounter = 0
			}else{
				newsCounter++
			}
			
			$('#news-ticker-link').fadeOut(500, function(){
				$('#news-ticker-link').attr('href', config.newsTicker[newsCounter].link)
				$('#news-ticker-link').html(config.newsTicker[newsCounter].content)
				$('#news-ticker-link').fadeIn(500, function(){
				})
			})
			
		}, 5000)

		
	})
</script>

<!-- <div id="news-ticker" style="color:gray;background:white;padding:15px;margin:10px;border-radius:10px;box-shadow:2px 2px 2px 2px #ccc;margin-top:-20px;margin-bottom:20px; ">
		<p style="padding:0;margin:0;font-size:smaller">
			<i style="color:red;margin-right:10px" class="fa fa-1x fa-newspaper-o"></i> 
			<span id="news-ticker-content">
				<a id="news-ticker-link" href="">敬请期待！</a>
			</span>
		</p>
</div> -->

<div class="flex flex-auto" style="padding-top: 1%">
<div style="margin-bottom: 1%;">

<!-- 	<div style="font-size:30px;color:red;padding:20px; line-height: 30px;"> Paper Submission Deadline Extended to March 10!</div> -->

<h2>欢迎参加2024年IEEE 全球区块链大会！在这里，我们将与IEEE主席、IET主席和ACM副主席一起“打造可信的数字未来”。在IEEE TDSC、IEEE TMC 和IEEE Network等顶级期刊主编的带领下，大会技术议程涵盖六个主题、多个讲座和研讨会。大会还将邀请顶级专家举办一系列有远见的主题演讲、专题讨论和产业论坛，探讨区块链基础设施赋能城市数字化建设，共同塑造区块链的未来。</h2>
<br/>



</div>
</div>


<?php 
// replace the image files below with your own (you can keep the filenames if you want and rename your own).  Or, just delete the entire <div> below
?>
<div id="images" class="flex flex-wrap justify-center">
	<div class="about-image" style="background: url(images/blockchain/blockchain1.png) 150px 150px"></div>
	<div class="about-image" style="background: url(images/blockchain/blockchain2.png) 150px 150px"></div>
	<div class="about-image" style="background: url(images/blockchain/blockchain3.png) 150px 150px"></div>
	<div class="about-image" style="background: url(images/blockchain/blockchain4.png) 150px 150px"></div>
	<div class="about-image" style="background: url(images/blockchain/blockchain5.png) 150px 150px"></div>
</div>	


<?php require 'right-bar-footer.php'; //THE MUST BE INCLUDED FOR EACH PAGE ?>
