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

<h1>大会目标</h1>
- 构建全球公认的区块链国际学术旗舰会议，建设区块链产业国际合作平台<br/>
- 推动区块链技术在全球范围内的发展<br/>
- 促进中国及全球的科技创新和数字化转型<br/>
<br/>

<h1>大会口号</h1>
打造值得信赖的数字未来（Transforming a Trustworthy Digital Future）<br/>
<br/>

<h1>大会亮点</h1>
- 展示全球区块链最前沿的成果与研究动态<br/>
- 强调产业界与学术界、研究与应用的紧密融合<br/>
- 突出国际合作与国内交流的重要性<br/>
<br/>

<h1>大会主题</h1>
区块链在城市数字化转型中的驱动作用：<br/>
- 区块链作为新型信息基础设施的角色<br/>
- 区块链在增强其他信息基础设施中的应用<br/>
<br/>

<h1>大会构成</h1>
- 主论坛1场：计划包含14场香农奖、图灵奖、院士等嘉宾的主旨演讲<br/>
- 学术分论坛1场：IEEE旗舰会规格。在IEEE TDSC/TMC/Network三个顶级期刊主编的带领下，举办18个学术研讨会（均IEEE/ACM Fellow牵头）<br/>
- 一带一路特别论坛1场：邀请海湾国家高级别政府官员、精英企业家为国内企业提供出海舞台、交流海内外发展趋势、共同构建上海宣言。<br/>
- 多个行业分论坛：浦江数链、信通院、中国移动等承办，包含形式多样的圆桌讨论、展览、黑客松等活动。<br/>
- 说明：学术分论坛为IEEE主导（IEEE GBC），一带一路论坛及行业论坛由上海主导（全球区块链大会，将打造独立IP）<br/>
<br/>

<h1>重要嘉宾</h1>
- IEEE主席Thomas Coughlin、ACM副主席Elisa Bertino、IET主席Bob Cryan等国际权威学术机构负责人；香农奖/图灵奖/国际院士等（待确认）<br/>
- 顾问委员会主席：吴志强院士<br/>
- 大会荣誉主席：蒋昌俊院士、陈纯院士、郑志明院士<br/>
- 指导委员会主席：袁昱 IEEE副主席，Chih-Lin I 中国移动首席科学家<br/>
<br/>



<h1>论坛及参与机构</h1>
- 主论坛1场: 领导发言/上海宣言/主旨报告/成果发布/签约仪式<br/>
- 学术分论坛：18个研讨会，涉及200篇学术论文报告<br/>
- 一带一路特别论坛：涵盖沙特/阿联酋/土耳其等政府、高校与企业的参与<br/>
- 行业分论坛：已确认浦江数链、信通院可信区块链、中国移动等专题论坛<br/>
<br/>



<h1>大会筹备工作</h1>
- 强化国际化定位和行业影响力<br/>
- 确保大会专业性和广泛影响力<br/>
- 吸引全球范围内专业人士参与<br/>
- 建设全球区块链大会品牌<br/>
- 在行业内建立并领导IP的影响力<br/>
- 协调企业资源，争取更多内部支持<br/>
- 拓宽沟通渠道，确保各参与单位和企业的积极参与<br/>
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
