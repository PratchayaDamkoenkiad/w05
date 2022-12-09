<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Vintauge</title>
	<meta name="description" content="Free Responsive Html5 Css3 Templates | html5xcss3.com">
	<meta name="author" content="http://www.html5xcss3.com">
	
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    
  	<link rel="stylesheet" href="css/zerogrid.css">
	<link rel="stylesheet" href="css/style.css">
	
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
	
	
	<link rel="stylesheet" href="css/menu.css">
	<script src="js/jquery1111.min.js" type="text/javascript"></script>
	<script src="js/script.js"></script>
	
    <link href="owl-carousel/owl.carousel.css" rel="stylesheet">		
</head>

<body>
	<div class="wrap-body">
		<div id='cssmenu' class="align-center">
			<ul>
			   <li class="last"><a href='index.php'><span>Home</span></a></li>
			   <li class='active'><a href='shop.php'><span>Shop</span></a></li>
			   <li><a href='history.php'><span>History</span></a></li>
			</ul>
		</div>

		<section id="container">
			<div class="wrap-container bg-scroll" style="background-image: url(https://media.tenor.com/RE8I81QwNnkAAAAd/shiroko-blue-archive.gif)">
				<div id="main-content">
					<div class="wrap-content">
						<div class="zerogrid">
                            <header class="">
			                    <div class="logo">
				                    <hr class="line-1">
				                      <a>Blue Archive Shop</a>
				                    <hr class="line-1">
			                    </div>
		                    </header>
							<div class="row">
								<div class="col-1-2">
									<article>
										<div class="post-thumbnail-wrap">
											<a href="shop1.php" class="portfolio-box">
												<img src="images/s1.jpg" alt="">
												<div class="portfolio-box-caption">
													<div class="portfolio-box-caption-content">
														<div class="project-text">
															SELECT
														</div>
													</div>
												</div>
											</a>
										</div>
										<div class="entry-header ">										    
											<h3 class="entry-title">Figure Shop</h3>
											<hr class="line-1">								
										</div>
									</article>
								</div>
								<div class="col-1-2">
									<article>
										<div class="post-thumbnail-wrap">
											<a href="single.php" class="portfolio-box">
												<img src="images/s2.png" alt="">
												<div class="portfolio-box-caption">
													<div class="portfolio-box-caption-content">
														<div class="project-text">
														  SELECT
														</div>
													</div>
												</div>
											</a>
										</div>
										<div class="entry-header ">
											<h3 class="entry-title">Keychain Shop</h3>
											<hr class="line-1">										
										</div>
									</article>
								</div>
							</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>

		<footer>
			<div class="zerogrid wrap-footer">
				<div class="row">
					<div class="bottom-social">
						<a href="https://www.facebook.com/PratchayaAtk/"><i class="fa fa-facebook"></i></a>
						<a href="https://www.instagram.com/pratchaya_atk/"><i class="fa fa-instagram"></i></a>
						<a href="#"><i class="fa fa-youtube"></i></a>
					</div>
				</div>
			</div>
		</footer>
		
		<script src="owl-carousel/owl.carousel.js"></script>
		<script>
		$(document).ready(function() {
		  $("#owl-slide").owlCarousel({
			autoPlay: 3000,
			items : 1,
			itemsDesktop : [1199,1],
			itemsDesktopSmall : [979,1],
			itemsTablet : [768, 1],
			itemsMobile : [479, 1],
			navigation: true,
			navigationText: ['<i class="fa fa-chevron-left fa-5x"></i>', '<i class="fa fa-chevron-right fa-5x"></i>'],
			pagination: false
		  });
		});
		</script>
	</div>
</body>
</html>