<?php $json = json_decode(file_get_contents('configuration/config.json'), true); ?>

</div>
			</div>
			<div id="right-bar" class="flex flex-column col-2" style="background: whitesmoke">
				<div id="top" class="flex">
					<div style="color:white;width:0;height:0;border-top:40px solid transparent;border-bottom: 40px solid transparent;border-left: 40px solid #191970;">
					</div>
					<div class="close-dates"><a href="#" style=""><i class="fa fa-2x fa-arrow-circle-right" aria-hidden="true"></i></a></div>
					<div id="title" class="bold">重要日期</div>
				</div>
 				<div id="content" class="flex-auto">
	 				<ul class="list-reset">
	 					<?php 
	 						//Print out all the deadlines from the config file
	 						$dates = $json['dates'];
	 						for ($i = 0; $i < count($dates); $i++) {
	 							if($dates[$i]['showInNavBar']){
	 								echo '<li>
										<div class="title">'.$dates[$i]['title'].'</div>
										<div class="date"><i class="fa fa-lg fa-calendar" aria-hidden="true"></i> 
											'.$dates[$i]['date'].'</div>
									</li>';
	 							}
							} 

	 					?>
	 					<li style="font-size:small;color:red;text-transform:uppercase;cursor:pointer"><a target="_blank" href="">敬请期待！</a></li>
					</ul>
				</div>
				

			</div>
		</div>
		

		<div id="footer" class="flex-column">
				<div id="link-section" class="flex flex-wrap">
					<div class="footer-items left flex-auto">
						<?php 
	 						//Print out footer info from the config file
	 						$obj = $json['footerLinks']['firstSection'];
	 						echo '<div class="title">'.$obj['title'].'</div>';
	 						echo '<ul class="list-reset">';
	 						for ($i = 0; $i < count($obj['links']); $i++) {
	 							if($obj['links'][$i]['openInNewWindow']){
	 								$target = "_blank";
	 							}else{
	 								$target = "";
	 							}
							    echo '<li><a target="'.$target.'" href="'.$obj['links'][$i]['link'].'">'.$obj['links'][$i]['name'].'</a></li>';
							} 
							echo '</ul>';
	 					?>
					</div>
					<div class="footer-items right flex-auto">
						<?php 
	 						//Print out footer info from the config file
	 						$obj = $json['footerLinks']['secondSection'];
	 						echo '<div class="title">'.$obj['title'].'</div>';
	 						echo '<ul class="list-reset">';
	 						for ($i = 0; $i < count($obj['links']); $i++) {
							    if($obj['links'][$i]['openInNewWindow']){
	 								$target = "_blank";
	 							}else{
	 								$target = "";
	 							}
							    echo '<li><a target="'.$target.'" href="'.$obj['links'][$i]['link'].'">'.$obj['links'][$i]['name'].'</a></li>';
							} 
							echo '</ul>';
	 					?>
					</div>
					<div class="footer-items left flex-auto">
						<?php 
	 						//Print out footer info from the config file
	 						$obj = $json['footerLinks']['thirdSection'];
	 						echo '<div class="title">'.$obj['title'].'</div>';
	 						echo '<ul class="list-reset">';
	 						for ($i = 0; $i < count($obj['links']); $i++) {
							    if($obj['links'][$i]['openInNewWindow']){
	 								$target = "_blank";
	 							}else{
	 								$target = "";
	 							}
							    echo '<li><a target="'.$target.'" href="'.$obj['links'][$i]['link'].'">'.$obj['links'][$i]['name'].'</a></li>';
							} 
							echo '</ul>';
	 					?>
					</div>
					<div class="footer-items right flex-auto">
						<?php 
	 						//Print out footer info from the config file
	 						$obj = $json['footerLinks']['fourthSection'];
	 						echo '<div class="title">'.$obj['title'].'</div>';
	 						echo '<ul class="list-reset">';
	 						for ($i = 0; $i < count($obj['links']); $i++) {
							    if($obj['links'][$i]['openInNewWindow']){
	 								$target = "_blank";
	 							}else{
	 								$target = "";
	 							}
							    echo '<li><a target="'.$target.'" href="'.$obj['links'][$i]['link'].'">'.$obj['links'][$i]['name'].'</a></li>';
							}
							echo '</ul>';
	 					?>
					</div>
				</div>
				<div id="bottom-section" class="flex justify-center">
					<div class="center">
						&copy IEEE <?php echo $json['meta']['conferenceName'] ?>
						<br><br>
						联系地址：国家会展中心1馆&emsp;联系电话：13761439142
						<br>
						<img src="images\policeicon.png" width="18" height="20">
						<a href="https://beian.mps.gov.cn/#/query/webSearch?code=31011802004972" target="_blank">沪公网安备31011802004972号</a>&emsp;
						<a href="https://beian.miit.gov.cn/" target="_blank">沪ICP备2020026294号-3</a>
						<br><br>
						<a target="_blank" href="<?php echo $json['socialMediaLinks']['email'] ?>"><i class="fa fa-3x fa-envelope-o"></i></a>
						<a target="_blank" href="<?php echo $json['socialMediaLinks']['website'] ?>"><i class="fa fa-3x fa-globe"></i> </a>
					</div> 
					<div class="">
						
					</div>
					
				</div>
		
		</div>
	</div>
	
	

 </body>
 </html>