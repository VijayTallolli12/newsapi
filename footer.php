<div class="container">
	<div class="row">
		<div class="col-md-9">
			<h6>Copy Right &copy; <?=date('Y')?> All Rights Researved.</h6>
		</div>
		<div class="col-md-3">
			<a href="https://www.ampwork.com" style="text-decoration: none;color:black"><strong>Made with <img class="img-fluid" src="images/heart.png" /> &amp; <img class="img-fluid" src="images/coffee.png"/> by AMP<span style="color:#57bddb;">WORK</span></strong></a>
		</div>
		
	</div>
</div>
</body>
</html>

<script src="js/jquery.slim.min.js"></script>
<script src="js/tether.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/ampjs.js"></script>
<script>
	$('#channel_list').on('change',function(e){
		e.preventDefault();
		$channel_id=$(this).val();
		window.location='channel_news.php?channel_id='+$channel_id;
	});
</script>