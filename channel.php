<?php include 'header.php'; ?>
<section id="channel">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<h2 class="display-4">Channel List</h2>
				<hr/>
			</div>		
				<?php
					$channel_list=channel();				
					$count=1;
					foreach ($channel_list['sources'] as $key => $value) {	
						if($count==1){
					?>
					<div class="col-md-3">			
					<ul>				
					<?php		
						}
					?>
						<li><a href="channel_news.php?channel_id=<?=$value['id']?>"><?=$value['name']?></a></li>
				<?php		
					if($count==20){
				?>
				</ul>			
			</div>
				<?php		
					$count=1;		
					}else{

						$count++;
					}
					}
				?>			
				
		</div>
	</div>
</section>
<?php include 'footer.php'; ?>