<?php include'header.php'; ?>
<section id="channel_detail">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<h2 class="display-4">TOP STORIES</h2>
				<hr/>
			</div>
		</div>
		<?php
			if(isset($_GET['channel_id'])){				
				$channel_news=channel_news($_GET['channel_id']);
				foreach ($channel_news['articles'] as $key => $value) {
				$published_date=date('l, F jS, Y', strtotime($value['publishedAt']));
		?>
		
		<div class="row">
							<div class="col-md-4">
								<div class="wrapper">
									<a href="<?=$value['url']?>" target="_blank">
									<img class="img-fluid rounded" src="<?=$value['urlToImage']?>" alt='<?=$value['title']?>'/></a>
									<p class="lead text-center"><?=$published_date?></p>
								</div>
							</div>
							<div class="col-md-8 mt-4 mb-4">
								<h2 class="lead"><a href="<?=$value['url']?>" target="_blank" style="text-decoration: none;"><?=$value['title']?></a></h2>
								<p class="text-justify"><?=$value['description']?></p>
							</div>
						</div>	
							<hr/>
		<?php			
				}
		?>
		
		<?php		
			}else{
		?>
			<h3>No Channel Found</h3>
		<?php
			}
		?>
	</div>
</section>
<?php include 'footer.php'; ?>