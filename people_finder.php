
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

		<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-xs-12">
			<div class="ui-block">
				<div class="top-header top-header-favorit">
					<div class="top-header-thumb">
						<img src="images/top-header2.jpg" alt="nature">
						<div class="top-header-author">
							<div class="author-thumb">
								<img src="images/author-main2.jpg" alt="author">
							</div>
							<div class="author-content">
								<a href="#" class="h3 author-name">Green Goo Rock</a>
								<div class="country">Rock Band  |  San Francisco, CA</div>
							</div>
						</div>
					</div>
					<div class="profile-section">
						<div class="row">
							<div class="col-xl-8 m-auto col-lg-8 col-md-12">
								<ul class="profile-menu">
									<li>
										<a href="12-FavouritePage.html" class="active">Timeline</a>
									</li>
									<li>
										<a href="13-FavouritePage-About.html">About</a>
									</li>
									<li>
										<a href="07-ProfilePage-Photos.html">Photos</a>
									</li>
									<li>
										<a href="09-ProfilePage-Videos.html">Videos</a>
									</li>
									<li>
										<a href="14-FavouritePage-Statistics.html">Statistics</a>
									</li>
									<li>
										<a href="15-FavouritePage-Events.html">Events</a>
									</li>
								</ul>
							</div>
						</div>

						<div class="control-block-button">
							<a href="#" class="btn btn-control bg-primary">
								<i class="far fa-star"></i>
							</a>

							<a href="#" class="btn btn-control bg-purple">
								<i class="far fa-comment-alt"></i>
							</a>

						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

<div class="container">
	<div class="row">
		<div class="col-xl-9 order-xl-2 col-lg-12 order-lg-1 col-md-12 col-sm-12 col-xs-12">
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
				<div class="col-lg-4 col-md-6 col-sm-12 col-xs-12">
					<div class="ui-block">
						
						<!-- Friend Item -->
						
						<div class="friend-item">
							<div class="friend-header-thumb">
								<img src="images/friend5.jpg" alt="friend">
							</div>
						
							<div class="friend-item-content">
						
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
						
										<div class="swiper-slide swiper-slide-next" data-swiper-slide-index="1" style="width: 218px;">
											<p class="friend-about" data-swiper-parallax="-500">
												Hi!, I’m Marina and I’m a Community Manager for “Gametube”. Gamer and full-time mother.
											</p>
						
											<div class="friend-since" data-swiper-parallax="-100">
												<span>Friends Since:</span>
												<div class="h6">December 2014</div>
											</div>
										</div>
										<div class="swiper-slide swiper-slide-duplicate" data-swiper-slide-index="0" style="width: 218px;">
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
													<svg class="olymp-happy-face-icon"><use xlink:href="svg-icons/sprites/icons.svg#olymp-happy-face-icon"></use></svg>
												</a>
						
												<a href="#" class="btn btn-control bg-purple">
													<svg class="olymp-chat---messages-icon"><use xlink:href="svg-icons/sprites/icons.svg#olymp-chat---messages-icon"></use></svg>
												</a>
						
											</div>
										</div></div>
						
									<!-- If we need pagination -->
									<div class="swiper-pagination pagination-swiper-unique-id-4 swiper-pagination-clickable swiper-pagination-bullets"><span class="swiper-pagination-bullet swiper-pagination-bullet-active"></span><span class="swiper-pagination-bullet"></span></div>
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

		<?php include("sidebar.php");?>
	</div>
</div>
<script src="js/jquery-3.2.1.js"></script>
<script src="js/jquery.appear.js"></script>
<script src="js/jquery.mousewheel.js"></script>
<script src="js/perfect-scrollbar.js"></script>
<script src="js/jquery.matchHeight.js"></script>
<script src="js/svgxuse.js"></script>
<script src="js/imagesloaded.pkgd.js"></script>
<script src="js/Headroom.js"></script>
<script src="js/velocity.js"></script>
<script src="js/ScrollMagic.js"></script>
<script src="js/jquery.waypoints.js"></script>
<script src="js/jquery.countTo.js"></script>
<script src="js/popper.min.js"></script>
<script src="js/material.min.js"></script>
<script src="js/bootstrap-select.js"></script>
<script src="js/smooth-scroll.js"></script>
<script src="js/selectize.js"></script>
<script src="js/swiper.jquery.js"></script>
<script src="js/moment.js"></script>
<script src="js/daterangepicker.js"></script>
<script src="js/simplecalendar.js"></script>
<script src="js/fullcalendar.js"></script>
<script src="js/isotope.pkgd.js"></script>
<script src="js/ajax-pagination.js"></script>
<script src="js/Chart.js"></script>
<script src="js/chartjs-plugin-deferred.js"></script>
<script src="js/circle-progress.js"></script>
<script src="js/loader.js"></script>
<script src="js/run-chart.js"></script>
<script src="js/jquery.magnific-popup.js"></script>
<script src="js/jquery.gifplayer.js"></script>
<script src="js/mediaelement-and-player.js"></script>
<script src="js/mediaelement-playlist-plugin.min.js"></script>
<script src="js/base-init.js"></script>
<script src="js/fontawesome-all.js"></script>
<script src="js/bootstrap.bundle.js"></script>
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