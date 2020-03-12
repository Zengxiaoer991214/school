<!doctype html>
<html lang="zh">
<head>	
<!--	https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css-->
	<meta charset="utf-8">
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<title>课设</title>
	<style>
	html::-webkit-scrollbar {
        display:none
		}
	</style>
</head>

<body class="bg-info" onLoad="welcome()">
	<div class="container">
		<div class="container"> <?php include'menu/head.php'; ?>
		</div>
		<div class="jumbotron">
  			<h1 class="display-4">Hello, world!</h1>
 				 <p class="lead">This is a simple hero unit, a simple jumbotron-style component for calling extra attention to featured content or information.</p>
 				 <hr class="my-4">
				 <img src="img/2.png" class="img-fluid" alt="Responsive image">
 				 <p>It uses utility classes for typography and spacing to space content out within the larger container.</p>
 				 <a class="btn btn-primary btn-lg" href="#" role="button">Learn more</a>
		</div>
	</div>
	<script type="text/javascript">
	function welcome(){
	$.hulla = new hullabaloo();
	setTimeout(function() {
	  $.hulla.send("Hi！这里是一个很酷的 网站！", "success");
	}, 1000);

	setTimeout(function() {
	  $.hulla.send("欢迎您的访问！", "info");
	}, 2000);
		
	<?php 
		if(isset($_SESSION['name'])){
			$name=$_SESSION['nickname'];
			echo "setTimeout(function() {
	  	$.hulla.send('欢迎回来!$name,最近还好吗？','success');
	}, 3000);
		";
		}
		?>
	} 
		</script>
		<script src="https://cdn.jsdelivr.net/npm/jquery@3.4.1/dist/jquery.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
	 <script src="../js/jquery-1.11.0.min.js" type="text/javascript"></script>
	  <script src="../js/bootstrap.min.js"></script>
	  <script src="../js/hullabaloo.js"></script>
</body>
</html>