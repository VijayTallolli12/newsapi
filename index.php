<?php include'header.php'; ?>
<section id="home">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<h2 class="display-4">Latest News</h2><hr/>


				<?php
					$res=latest();
					$output='';
					foreach ($res['articles'] as $key => $value) {	
						$published_date=date('l, F jS, Y', strtotime($value['publishedAt']));
					?>
					<div class="row">
						<div class="col-md-4">
							<div class="wrapper">
								<a href="<?=$value['url']?>" target="_blank">
								<img class="img-fluid rounded" src="<?=$value['urlToImage']?>" alt='<?=$value['title']?>'/></a>
								
							</div>
						</div>
						<div class="col-md-8 mb-4">
							<h2 class="lead"><a href="<?=$value['url']?>" target="_blank" style="text-decoration: none;"><?=$value['title']?></a></h2>
							<p class="text-justify"><?=$value['description']?></p>
							<div class="row">
								<div class="col-md-6 m-2">
								<small class="d-line-block bg-primary p-2 text-white"><img class="img-fluid" src="images/clock.png"/> <?=$published_date?></small>
								</div>

								<div class="col-md-6 m-2">
								<small class="d-line-block btn-pink p-2 text-white "> <img class="img-fluid" src="images/book.png" /> Author - <?=$value['author']?></small>
								</div>
							</div>	
						</div>
					</div>	
						<hr/>
					<?php		
					}	
				?>
						
			</div>
		</div>
	</div>
</section>	
<?php include'footer.php'; ?>