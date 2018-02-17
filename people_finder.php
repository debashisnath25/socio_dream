
<!DOCTYPE html>
<html lang="en">
<head>

	<title>Favorit Page - About</title>

	<!-- Required meta tags always come first -->
	<?php include("metalinks.php");?>
	
	<!-- Main Font -->
	


</head>
<body>
<?php //include("chatsidebar.php");?>
<!-- Header-BP -->
<?php include("header.php");?>
<!-- ... end Header-BP -->
<!-- Responsive Header-BP -->
<!-- ... end Responsive Header-BP -->
<div class="header-spacer"></div>

<div class="container">
	<div class="row">
		<div class="col-xl-6 order-xl-2 col-lg-12 order-lg-1 col-md-12 col-sm-12 col-xs-12">
			<div class="ui-block responsive-flex">
				<div class="ui-block-title">
					<div class="h6 title">Green Goo's Favers (5630)</div>
					<form class="w-search">
						<div class="form-group with-button">
							<input class="form-control" type="text" placeholder="Search Friends...">
							<button>
								<i class="fas fa-search"></i>
							</button>
						</div>
					</form>
					<a href="#" class="more"><svg class="olymp-three-dots-icon"><use xlink:href="svg-icons/sprites/icons.svg#olymp-three-dots-icon"></use></svg></a>
				</div>
			</div>

			<div class="row">
				<?php
					for($i=0;$i<6;$i++){
				?>
				<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
					<div class="ui-block">
						
						<!-- Friend Item -->
						
						<div class="friend-item">
							<div class="friend-header-thumb">
								<img src="images/friend5.jpg" alt="friend">
							</div>
						
							<div class="friend-item-content" style="padding:0px;">
						
								<div class="more">
									<i class="fas fa-ellipsis-h"></i>
									<ul class="more-dropdown">
										<li>
											<a href="#">Report Profile</a>
										</li>
										<li>
											<a href="#">Block Profile</a>
										</li>
										<li>
											<a href="#">Turn Off Notifications</a>
										</li>
									</ul>
								</div>
								<div class="friend-avatar">
									<div class="author-thumb">
										<img src="images/avatar5.jpg" alt="author">
									</div>
									<div class="author-content">
										<a href="#" class="h5 author-name">Elaine Dreifuss</a>
										<div class="country">New York, NY</div>
									</div>
								</div>
						
								<div class="swiper-container swiper-swiper-unique-id-4 initialized swiper-container-horizontal"  >
									<div class="swiper-wrapper" style="width: 872px; transform: translate3d(-218px, 0px, 0px); transition-duration: 0ms;"><div class="swiper-slide swiper-slide-duplicate swiper-slide-prev" data-swiper-slide-index="1" style="width: 218px;">
										<p class="friend-about" data-swiper-parallax="-500">
											Hi!, I’m Marina and I’m a Community Manager for “Gametube”. Gamer and full-time mother.
										</p>
						
										<div class="friend-since" data-swiper-parallax="-100">
											<span>Friends Since:</span>
											<div class="h6">December 2014</div>
										</div>
									</div>
										<div class="swiper-slide swiper-slide-active" data-swiper-slide-index="0" style="width: 218px;">
											<div class="friend-count" data-swiper-parallax="-500">
												<a href="#" class="friend-count-item">
													<div class="h6">82</div>
													<div class="title">Friends</div>
												</a>
												<a href="#" class="friend-count-item">
													<div class="h6">204</div>
													<div class="title">Photos</div>
												</a>
												<a href="#" class="friend-count-item">
													<div class="h6">27</div>
													<div class="title">Videos</div>
												</a>
											</div>
											<div class="control-block-button" data-swiper-parallax="-100">
												<a href="#" class="btn btn-control bg-blue">
													<i class="far fa-smile"></i>
												</a>
						
												<a href="#" class="btn btn-control bg-purple">
													<i class="far fa-comment-alt"></i>
												</a>
											</div>
										</div>
									</div>
									<!-- If we need pagination -->
								</div>
							</div>
						</div>
						<!-- ... end Friend Item -->	
					</div>
				</div>
			<?php } ?>
			</div>

			<nav aria-label="Page navigation">
				<ul class="pagination justify-content-center">
					<li class="page-item disabled">
						<a class="page-link" href="#" tabindex="-1">Previous</a>
					</li>
					<li class="page-item"><a class="page-link" href="#">1</a></li>
					<li class="page-item"><a class="page-link" href="#">2</a></li>
					<li class="page-item"><a class="page-link" href="#">3</a></li>
					<li class="page-item"><a class="page-link" href="#">...</a></li>
					<li class="page-item"><a class="page-link" href="#">12</a></li>
					<li class="page-item">
						<a class="page-link" href="#">Next</a>
					</li>
				</ul>
			</nav>
		</div>
		<?php
			include("sidebar.php");
		?>
		<?php
			include("right_sidebar.php");
		?>
	</div>
</div>
<?php include("footer.php");?>
<script src="js/webfontloader.min.js"></script>
<script>
	WebFont.load({
		google: {
			families: ['Roboto:300,400,500,700:latin']
		}
	});
</script>
</body>
</html>