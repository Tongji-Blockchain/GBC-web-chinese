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

<h1>大会背景</h1>
IEEE是国际权威的学术和标准组织。2018年1月1日，IEEE区块链组织成立，负责IEEE下所有和区块链相关的活动，包括标准、会议、期刊、竞赛、培训等。2018年7月，IEEE区块链在同济大学成立了中国区首个工作组—IEEE区块链上海工作组，由同济大学负责IEEE区块链亚太区/中国区的建设。目前IEEE区块链在全球已成立61个工作组，亚太区有18个工作组，其中同济大学推动中国区成立了6个工作组（包括上海、北京、深圳、杭州、香港、澳门/广州）。自2018年首届IEEE Global Blockchain Summit (GBS)起，美国国家标准局（NIST）连续举办了三届区块链峰会。2021年之后，因新冠疫情，大会转为线上举行。随着疫情消退，为推动IEEE区块链组织成长，IEEE自2024年起对区块链会议进行质量提升，建设区块链全球旗舰会议—“IEEE Global Blockchain Conference (GBC)”。在IEEE区块链中国区的支持下，同济大学获得2024年“IEEE GBC”的主办权。<br/><br/>
2019年区块链上升为国家战略，但目前我国区块链行业发展情况和国家战略定位尚有较大距离，还需要更多的行业落地与国际影响。区块链全球旗舰会议在中国召开，有益于我国学习/吸收国际前沿的区块链理论/技术，能够引导我国区块链技术和产业向国家战略方向聚焦。利用IEEE GBC旗舰会议搭建的高水平国际学术交流和国际标准合作舞台，建设我国独立IP的全球区块链大会品牌，有助于中国区块链技术方案和价值观的国际输出。此外，区块链技术具有公开、透明、合作、共识、去中心、可验证、可追溯等天然属性，中国举办本次大会，围绕区块链赋能新一代信息基础设施、数据治理/社会治理以及数据要素流通的主题，向国际社会系统地呈现我国的区块链价值观，有助于树立我国开放包容、合作共赢、技术创新的国际形象。<br/>
<br/>

<h1>国内外现状</h1>
当前区块链发展存在多个热点领域，对应国内外不同需求和应用环境。在国内，区块链主要应用于存证、数据共享等信息化建设领域，主要载体为以联盟链为主体的区块链开发社区，在海关、税务、物流、医疗、金融信息共享、政务信息共享和自动化等领域有积累。在国外，区块链热点集中于公链代币化经济模型驱动的DeFi（去中心金融）领域，对于公链共识博弈、公链密码学工具、公链隐私保护、公链生态环境、基于公链的L2应用开发，跨链桥技术等有着比较领先的研究环境。可见，目前区块链在国内外应用场景有着明显不同。然而，当聚焦于区块链本身对数据作为一种关键生产要素在生产力提高中所起到的催化作用时，国内外均重点关注隐私保护的数据要素共享、新型合作生产关系建设、数字确权、下一代数字社会治理工具等热点领域，为实现高吞吐、低时延、高弹性的区块链基础设施都有强烈的动力和共识。在关系联系紧密的ZKP（零知识证明）、隐私计算、可信执行环境、去中心化网络与安全等技术热点中，国内外学术界与工业界正密切关注。本次大会着重于向国内产业界和学术界伙伴，提供高质量的学习交流机会和国际化舞台，推动我国区块链技术和产业方向向国家战略方向聚焦，向国际区块链研究和应用领域输出中国声音，中国标准和中国技术解决方案。<br/>
<br/>

<h1>前期工作</h1>
2023年9月9日，同济大学、中国信通院、腾讯、蚂蚁、华为、科大讯飞、下一代互联网国家工程中心、浦江数链、市北高新等单位，在国家会展中心（上海）召开了“IEEE GBC暨全球区块链大会”筹备会议，讨论大会的长期目标、组织形式、会议主题、发展策略、技术路线等核心议题，形成如下方案。<br/>
<br/>

<h2>1）长期目标</h2>
大会将以IEEE的学术公信力为抓手，立足国家需要，服务我国区块链、Web3.0以及数据要素发展的国家战略。争取将”IEEE GBC”永久留在中国，利用IEEE在学术、技术和标准的全球影响力，建设我国独立IP的全球区块链大会品牌，推动中国区块链技术方案和价值观的国际输出，在相关行业为下一个Wi-Fi/5G级别的国际标准构建中国土壤。<br/>
<br/>

<h2>2）组织形式</h2>
整个大会包括学术板块（IEEE GBC）和行业板块（全球区块链大会）。承办单位包括同济大学/IEEE区块链/浦江数链/信通院等。协办单位包括中移动/华为/腾讯/蚂蚁/中移动/市北高新等。<br/><br/>
会议内容：大会由学术和行业两大板块构成，包括主论坛和分论坛，涵盖学术交流、技术分享、标准测评、行业应用、生态建设等。<br/>
会议时间：2024年8月21-23，3天。<br/>
会议规模：1000人以上。<br/>
<br/>

<h2>3）会议主题</h2>
针对区块链自身作为新一代信息基础设施以及其赋能其他信息基础设施的核心问题，邀请国际顶尖专家做系列大会报告和技术报告，围绕会议主题达成国际共识，发布全球区块链/数据要素的上海宣言。配合上海宣言，大会同步启动区块链/Web3.0/数据要素等多个国际标准建设（IEEE/ITU/ISO/IEC/ETSI等）。<br/>
<br/>

<h2>4）发展策略</h2>
国际方面，突出IEEE的学术和技术引领角色，调动IEEE区块链全球61个工作组参与，协调政府间国际组织（上合、金砖、ITU等）的相关国家参与，协调顶尖学者和技术专家报告，强调国际学术交流与合作，淡化我国政府主导背景，为我国学术界产业界创造系统学习/吸收区块链前沿理论/创新技术的机会。<br/><br/>
国内方面，强调政府主导作用，建设大会品牌，通过主管部门选择吸纳核心单位和社会各界参与，有组织引导相关单位牵头国际标准建设，逐步推进中国区块链价值观的国际输出。利用IEEE的技术影响力和协办单位的资源优势，吸引/邀请全国企事业单位汇聚上海学习/交流国际先进的区块链技术、场景和解决方案，构建国内与国际数据要素互信互通标准，统一区块链大市场机制等热点共识。<br/>
<br/>

<h2>5）技术路线</h2>
通过政府间国际组织（上合，金砖，ITU等），邀请工信与科技相关部门的多国部长级官员参会。通过和各参会企业的政企关联以及国际间交流组织，邀请友好国家驻外使节参会。<br/><br/>
通过汇聚多国政要和外交使节，推动发布全球区块链/数据要素的“上海宣言”，实现中国区块链价值观的国际输出，国内解决方案出口与技术转移。<br/><br/>
以参与建设国内外新一代信息基础设施、数据治理/社会治理以及数据要素流通为目标，以学习先进的区块链技术解决方案和共建区块链国际标准为抓手，调动国内外企业、高校/科研院所参与大会的积极性。<br/>

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
