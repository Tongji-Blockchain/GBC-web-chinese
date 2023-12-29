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
				<a id="news-ticker-link" href="#">Click here for nomination for best student papers</a>
			</span>
		</p>
</div> -->

<div class="text">

<!-- 	<div style="font-size:30px;color:red;padding:20px; line-height: 30px;"> Paper Submission Deadline Extended to March 10!</div> -->

	IEEE 全球区块链大会
	<br><br>	
	作为国际权威的学术、技术和标准组织，我们致力于建立高效的国际化合作平台，吸引全球区块链技术开发者、学者和产业领袖，推动区块链技术的全球化发展。围绕“区块链推动城市数字化转型”的主题，以“打造可信的数字未来”为口号，建立一个高效的国际化合作平台，开展理论、技术、应用、标准、产业、投资的国内外交流与合作，为推动科技进步和数字化转型做出贡献。
	<br><br>
	重点内容：
	<br><br>
	1. 成果展示：提供一个窗口，展示全球区块链技术最新成果和研究进展，代表该领域最高水平。
	<br><br>
	2. 产学研用融合：强调产业、学术、研究和应用的结合，促进理论研究与实际应用的有效结合。
	<br><br>
	3. 国际与国内合作：促进中国区块链企业与全球同行交流合作，支持中国在全球区块链技术发展中发挥更大作用。
	<br><br>
	<br><br>
	<br><br>
	<br><br>
	主  办：IEEE(国际电气电子工程师学会)
	<br>
	承  办：同济大学、IEEE区块链社区(BCTC)、浦江数链、信通院
	<br>
	规  格：学术旗舰会， IEEE主席和ACM副主席主旨报告
	<br>
	规模：800人（学术+产业）
	<br>
	时间：2024年8月21-23日（周3-周5）
	<br>
	地点：上海
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