<?php include 'api/apicall.php'; ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<title>AMP-News</title>
	<link href="css/bootstrap.min.css" rel="stylesheet">
	<link href="css/style.css" rel="stylesheet">
	<link rel="shortcut icon" href="https://www.ampwork.com/img/favicon.png">
</head>
<body>

<header id="header" class="fixed-top">
	<nav class="navbar sticky-top navbar-toggleable navbar-light bg-faded">
		<button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    		<span class="navbar-toggler-icon"></span>
  		</button>
  		<div class="container">
  		 <a class="navbar-brand" href="#">AMP-News</a>
		  <div class="collapse navbar-collapse" id="navbarNav">
		    <ul class="navbar-nav">
		      <li class="nav-item active">
		        <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
		      </li>
		      <li class="nav-item">
		        <a class="nav-link" href="channel.php">Channels</a>
		      </li>	

		      <?php
		      	$name=basename($_SERVER['PHP_SELF']);
		      	if($name=='channel_news.php'){
		      ?>
		      <li class="nav-item">
		      	<select class="form-control" id="channel_list">
		      		<option disabled="disabled">--Select Channel--</option>
		      		<?php
						$channel_list=channel();
						foreach ($channel_list['sources'] as $key => $value) {
				?>
						<option value="<?=$value['id']?>" <?=($value['id']==$_GET['channel_id'])?'selected':'';?> ><?=$value['name']?></option>
				<?php		
				}
				?>
		      	</select>
		      </li>
		      <?php		
		      	}
		      ?>	   
		    </ul>
		  </div>
		  </div>
	</nav>
</header>