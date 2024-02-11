<?php 
$pageTitle='关于大会'; //THIS MUST BE SET FOR EACH PAGE
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

<div class="flex flex-auto" style="padding-top: 1%">
<div style="margin-bottom: 1%;">

<h1>关于IEEE GBC</h1>
IEEE全球区块链大会是 IEEE 区块链社区两个旗舰会议之一。2024年 IEEE 全球区块链大会将于2024年8月21日至8月23日在中国上海举行。会议主题为“打造可信的数字未来”，将包括6个轨道的全面高质量技术程序以及多种教程和研讨会。IEEE GBC 2024 还将包括面向从业者的吸引人的行业项目，其中包括来自知名研究、行业和政府领导人的主题演讲和小组讨论，商业和行业小组讨论会，以及技术展览。GBC 2024 计划为完全线下的会议/活动。<br/><br/>
<br/>

<h1>关于IEEE</h1>
IEEE（电气和电子工程师协会）是世界上最大的技术专业社团。该组织拥有超过40万名成员，分布在150个国家，是从航空航天系统、计算机和通信到生物医学工程、电力和消费电子等广泛领域的领先权威。IEEE致力于技术的发展，出版了世界上30%的电气与电子工程及计算机科学领域的文献，并开发了近900个活跃的行业标准。该组织每年在全球范围内赞助超过850次会议。了解更多信息，请访问www.ieee.org。<br/>
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
