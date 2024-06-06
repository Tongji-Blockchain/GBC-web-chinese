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

<div class="text">
    <!-- 可以使用以下代码加粗主题并改变字体 -->
    <style>
        .title {
            font-weight: bold;
            font-size: 32px;
            font-family: Arial, sans-serif;
        }
		.paragraph {
            font-size: 22px;
            font-family: Arial, sans-serif;
        }
		.indented {
            text-indent: 2em; /* 设置首行缩进为两个字符的宽度 */
			margin: 0;
    		line-height: 1.6; /* 设置行间距为字体大小的1.6倍 */
        }
    </style>
    <div class="title">IEEE 全球区块链大会2024</div>
    <br>  
    <p class="indented paragraph">IEEE全球区块链大会，一场由国际电气电子工程师学会（IEEE）主办的盛大集会，即将于2024年8月21日至23日在上海举行。这不仅是一场关于区块链的国际盛会，更是一个汇聚全球顶尖专家、学者和业界领袖的交流平台。
    <p class="indented paragraph">在这次大会中，与会者不仅有机会深入了解区块链技术的最新发展，更能够亲身参与其中，与业界同仁共同探讨和推动区块链技术的实用化和全球化。同时，大会也致力于搭建一个让创新和合作并存的舞台，推动学术理论与实际应用的完美结合。不论您是从事学术研究、企业创新，还是对区块链技术充满好奇，都可以在这次大会中找到自己的位置。
	<p class="indented paragraph">我们期待您的参与，共同见证这场区块链技术的盛会，为构建一个可信赖、安全可靠的数字未来共同努力。
    </p>
    <br><br>
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
