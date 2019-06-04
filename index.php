<!DOCTYPE html>
<html>
<head>
	<title>Photo gallery project</title>
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="css/photo.css">
	<script src="js/jquery.js"></script>
	<script src="js/bootstrap.min.js"></script>
</head>
<body>
	<nav class="navbar navbar-default">	
		<div class="container">
			<div class="navbar-header">
				<div class="navbar-brand">
					Photo Gallery
				</div>
				<ul class="nav navbar-nav navbar-right">
					<li><a href="#index.php">Home</a></li>
					<li><a href="#nature.php">Nature Gallery</a></li>
					<li><a href="#">Science Gallery</a></li>
					<li><a href="#">Science Gallery</a></li>
				</ul>
			</div>	
		</div>
	</nav>
	<div class="container">
		<div class="row">
			<div class="col-md-10 col-md-offset-1">
					<div id="slider" class="carousel slide" data-ride="carousel">
						<ol class="carousel-indicators">
							<li data-target="#slider" data-slide-to="0" class="active"></li>
							<li data-target="#slider" data-slide-to="1"></li>
							<li data-target="#slider" data-slide-to="2"></li>
							<li data-target="#slider" data-slide-to="3"></li>
						</ol>
					<div>
						<div class="carousel-inner" role="listbox">
							<div class="item">
								<img src="images/about.jpg">
							</div>
							<div class="item">
								<img src="images/portfolio-1.jpg">
							</div>
							<div class="item">
								<img src="images/brick-wall.jpg">
							</div>
							<div class="item active">
								<img  src="images/bg-callout.jpg">
							</div>
						</div>
						<a href="#slider" data-slide="Prev" class="left carousel-control">
							<span class="glyphicon glyphicon-chevron-left"></span>
						</a>
						<a href="#slider" data-slide="next" class="right carousel-control">
							<span class="glyphicon glyphicon-chevron-right"></span>
						</a>
						
					</div>
				</div>
			</div>
		</div>
		<div class="page-header">
			 <h4 class="text-center">Photo gallery</h4>
		</div>
			<div class="row">
				<div class="col-md-4">
					<a href="#m1" data-toggle="modal" class="thumbnail"><img src="images/dummy1.jpg"> </a>
					<div class="modal fade" id="m1">
						<div class="modal-dialog">
							<div class="modal-content">
								<div class="modal-header bg-primary">Our first image</div>
								<div class="modal-body">
									<img src="images/img6.jpg" class="img-thumbnail">
								</div>
								<div class="modal-footer">Do you like this image</div>
							</div>
						</div>
					</div>					
				</div>
				<div class="col-md-4">
					<a href="#m2" data-toggle="modal" class="thumbnail"><img src="images/3.jpg"></a>
					<div class="modal fade" id="m2">
						<div class="modal-dialog">
							<div class="modal-content">
								<div class="modal-header bg-primary">Second image</div>
								<div class="modal-body">
									<img src="images/img5.jpg" class="img-thumbnail">
								</div>
								<div class="modal-footer">Do you like this image</div>
							</div>
						</div>
					</div>					
				</div>
				<div class="col-md-4" class="thumbnail">
					<a href="#m3" data-toggle="modal" class="thumbnail"><img src="images/img5.jpg"></a>	
					<div class="modal fade" id="m3">
							<div class="modal-dialog">
								<div class="modal-content">
									<div class="modal-header bg-primary">Our third image</div>
									<div class="modal-body">
										<img src="images/brick-wall.jpg" class="img-thumbnail">
									</div>
									<div class="modal-footer">Do you like this image</div>
								</div>
							</div>
					</div>
				</div>
			</div>	
			<div class="row">
				<div class="col-md-4">
					<a href="#m4" data-toggle="modal" class="thumbnail"><img src="images/dummy1.jpg"> </a>
					<div class="modal fade" id="m4">
						<div class="modal-dialog">
							<div class="modal-content">
								<div class="modal-header bg-primary">Our fourth image</div>
								<div class="modal-body">
									<img src="images/img6.jpg" class="img-thumbnail">
								</div>
								<div class="modal-footer">Do you like this image</div>
							</div>
						</div>
					</div>					
				</div>
				<div class="col-md-4">
					<a href="#m5" data-toggle="modal" class="thumbnail"><img src="images/3.jpg"></a>
					<div class="modal fade" id="m5">
						<div class="modal-dialog">
							<div class="modal-content">
								<div class="modal-header bg-primary">Our fifth image</div>
								<div class="modal-body">
									<img src="images/img5.jpg" class="img-thumbnail">
								</div>
								<div class="modal-footer">Do you like this image</div>
							</div>
						</div>
					</div>					
				</div>
				<div class="col-md-4" class="thumbnail">
					<a href="#m6" data-toggle="modal" class="thumbnail"><img src="images/img5.jpg"></a>	
					<div class="modal fade" id="m6">
							<div class="modal-dialog">
								<div class="modal-content">
									<div class="modal-header bg-primary">Our sixth image</div>
									<div class="modal-body">
										<img src="images/brick-wall.jpg" class="img-thumbnail">
									</div>
									<div class="modal-footer">Do you like this image</div>
								</div>
							</div>
					</div>
				</div>
			</div>	
	</div>

	<footer class="navbar navbar-default navbar-fixed-bottom">
		<div class="container">
			<p  class="text-center footer-text">Copyright reserved</p>
		</div>
	</footer>							
</body>
</html>