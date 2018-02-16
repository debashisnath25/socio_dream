
<!DOCTYPE html>
<html lang="en">
<head>

	<title>Profile Page - Photos</title>

<?php include ('metalinks.php');?>
</head>

<body>

<!-- Fixed Sidebar Right -->

<?php include ("chatsidebar.php");?>

<!-- ... end Fixed Sidebar Right-Responsive -->


<!-- Header-BP -->

<?php include ('header.php');?>

<!-- ... end Responsive Header-BP -->
<div class="header-spacer"></div>
<div class="container">
	<div class="row">
		<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-xs-12">
			<div class="ui-block responsive-flex">
				<div class="ui-block-title">
					<div class="h6 title">James's Photo Gallery</div>

					<div class="block-btn align-right">
						<a href="#" data-toggle="modal" data-target="#create-photo-album" class="btn btn-primary btn-md-2">Create Album  +</a>

						<a href="#" data-toggle="modal" data-target="#update-header-photo" class="btn btn-md-2 btn-border-think custom-color c-grey">Add Photos</a>
					</div>

					<ul class="nav nav-tabs photo-gallery" role="tablist">
						<li class="nav-item">
							<a class="nav-link" data-toggle="tab" href="#photo-page" role="tab">
								<svg class="olymp-photos-icon"><use xlink:href="svg-icons/sprites/icons.svg#olymp-photos-icon"></use></svg>
							</a>
						</li>

						<li class="nav-item">
							<a class="nav-link active" data-toggle="tab" href="#album-page" role="tab">
								<svg class="olymp-albums-icon"><use xlink:href="svg-icons/sprites/icons.svg#olymp-albums-icon"></use></svg>
							</a>
						</li>

					</ul>
					<a href="#" class="more"><svg class="olymp-three-dots-icon"><use xlink:href="svg-icons/sprites/icons.svg#olymp-three-dots-icon"></use></svg></a>
				</div>
			</div>
		</div>
	</div>
</div>

<div class="container">
	<div class="row">
		<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-xs-12">
			<!-- Tab panes -->
			<div class="tab-content">
				<div class="tab-pane" id="photo-page" role="tabpanel">

					<div class="photo-album-wrapper">

						
						
						<div class="photo-item half-width">
							<img src="images/photo-item1.jpg" alt="photo">
							<div class="overlay overlay-dark"></div>
							<a href="#" class="more"><svg class="olymp-three-dots-icon"><use xlink:href="svg-icons/sprites/icons.svg#olymp-three-dots-icon"></use></svg></a>
							<a href="#" class="post-add-icon inline-items">
								<svg class="olymp-heart-icon"><use xlink:href="svg-icons/sprites/icons.svg#olymp-heart-icon"></use></svg>
								<span>15</span>
							</a>
							<a href="#" data-toggle="modal" data-target="#open-photo-popup-v1" class="  full-block"></a>
							<div class="content">
								<a href="#" class="h6 title">Header Photos</a>
								<time class="published" datetime="2017-03-24T18:18">1 week ago</time>
							</div>
						</div>

						
						<div class="photo-item col-4-width">
							<img src="images/photo-item2.jpg" alt="photo">
							<div class="overlay overlay-dark"></div>
							<a href="#" class="more"><svg class="olymp-three-dots-icon"><use xlink:href="svg-icons/sprites/icons.svg#olymp-three-dots-icon"></use></svg></a>
							<a href="#" class="post-add-icon inline-items">
								<svg class="olymp-heart-icon"><use xlink:href="svg-icons/sprites/icons.svg#olymp-heart-icon"></use></svg>
								<span>15</span>
							</a>
							<a href="#" data-toggle="modal" data-target="#open-photo-popup-v2" class="  full-block"></a>
							<div class="content">
								<a href="#" class="h6 title">Header Photos</a>
								<time class="published" datetime="2017-03-24T18:18">1 week ago</time>
							</div>
						</div>

						
						<div class="photo-item col-4-width">
							<img src="images/photo-item3.jpg" alt="photo">
							<div class="overlay overlay-dark"></div>
							<a href="#" class="more"><svg class="olymp-three-dots-icon"><use xlink:href="svg-icons/sprites/icons.svg#olymp-three-dots-icon"></use></svg></a>
							<a href="#" class="post-add-icon inline-items">
								<svg class="olymp-heart-icon"><use xlink:href="svg-icons/sprites/icons.svg#olymp-heart-icon"></use></svg>
								<span>15</span>
							</a>
							<a href="#" data-toggle="modal" data-target="#open-photo-popup-v2" class="  full-block"></a>
							<div class="content">
								<a href="#" class="h6 title">Header Photos</a>
								<time class="published" datetime="2017-03-24T18:18">1 week ago</time>
							</div>
						</div>

						
						<div class="photo-item col-4-width">
							<img src="images/photo-item4.jpg" alt="photo">
							<div class="overlay overlay-dark"></div>
							<a href="#" class="more"><svg class="olymp-three-dots-icon"><use xlink:href="svg-icons/sprites/icons.svg#olymp-three-dots-icon"></use></svg></a>
							<a href="#" class="post-add-icon inline-items">
								<svg class="olymp-heart-icon"><use xlink:href="svg-icons/sprites/icons.svg#olymp-heart-icon"></use></svg>
								<span>15</span>
							</a>
							<a href="#" data-toggle="modal" data-target="#open-photo-popup-v2" class="  full-block"></a>
							<div class="content">
								<a href="#" class="h6 title">Header Photos</a>
								<time class="published" datetime="2017-03-24T18:18">1 week ago</time>
							</div>
						</div>

						
						<div class="photo-item col-4-width">
							<img src="images/photo-item5.jpg" alt="photo">
							<div class="overlay overlay-dark"></div>
							<a href="#" class="more"><svg class="olymp-three-dots-icon"><use xlink:href="svg-icons/sprites/icons.svg#olymp-three-dots-icon"></use></svg></a>
							<a href="#" class="post-add-icon inline-items">
								<svg class="olymp-heart-icon"><use xlink:href="svg-icons/sprites/icons.svg#olymp-heart-icon"></use></svg>
								<span>15</span>
							</a>
							<a href="#" data-toggle="modal" data-target="#open-photo-popup-v2" class="  full-block"></a>
							<div class="content">
								<a href="#" class="h6 title">Header Photos</a>
								<time class="published" datetime="2017-03-24T18:18">1 week ago</time>
							</div>
						</div>

						
						<div class="photo-item col-4-width">
							<img src="images/photo-item6.jpg" alt="photo">
							<div class="overlay overlay-dark"></div>
							<a href="#" class="more"><svg class="olymp-three-dots-icon"><use xlink:href="svg-icons/sprites/icons.svg#olymp-three-dots-icon"></use></svg></a>
							<a href="#" class="post-add-icon inline-items">
								<svg class="olymp-heart-icon"><use xlink:href="svg-icons/sprites/icons.svg#olymp-heart-icon"></use></svg>
								<span>15</span>
							</a>
							<a href="#" data-toggle="modal" data-target="#open-photo-popup-v2" class="  full-block"></a>
							<div class="content">
								<a href="#" class="h6 title">Header Photos</a>
								<time class="published" datetime="2017-03-24T18:18">1 week ago</time>
							</div>
						</div>

						
						<div class="photo-item col-4-width">
							<img src="images/photo-item7.jpg" alt="photo">
							<div class="overlay overlay-dark"></div>
							<a href="#" class="more"><svg class="olymp-three-dots-icon"><use xlink:href="svg-icons/sprites/icons.svg#olymp-three-dots-icon"></use></svg></a>
							<a href="#" class="post-add-icon inline-items">
								<svg class="olymp-heart-icon"><use xlink:href="svg-icons/sprites/icons.svg#olymp-heart-icon"></use></svg>
								<span>15</span>
							</a>
							<a href="#" data-toggle="modal" data-target="#open-photo-popup-v2" class="  full-block"></a>
							<div class="content">
								<a href="#" class="h6 title">Header Photos</a>
								<time class="published" datetime="2017-03-24T18:18">1 week ago</time>
							</div>
						</div>

						
						<div class="photo-item col-4-width">
							<img src="images/photo-item8.jpg" alt="photo">
							<div class="overlay overlay-dark"></div>
							<a href="#" class="more"><svg class="olymp-three-dots-icon"><use xlink:href="svg-icons/sprites/icons.svg#olymp-three-dots-icon"></use></svg></a>
							<a href="#" class="post-add-icon inline-items">
								<svg class="olymp-heart-icon"><use xlink:href="svg-icons/sprites/icons.svg#olymp-heart-icon"></use></svg>
								<span>15</span>
							</a>
							<a href="#" data-toggle="modal" data-target="#open-photo-popup-v2" class="  full-block"></a>
							<div class="content">
								<a href="#" class="h6 title">Header Photos</a>
								<time class="published" datetime="2017-03-24T18:18">1 week ago</time>
							</div>
						</div>

						
						<div class="photo-item col-4-width">
							<img src="images/photo-item9.jpg" alt="photo">
							<div class="overlay overlay-dark"></div>
							<a href="#" class="more"><svg class="olymp-three-dots-icon"><use xlink:href="svg-icons/sprites/icons.svg#olymp-three-dots-icon"></use></svg></a>
							<a href="#" class="post-add-icon inline-items">
								<svg class="olymp-heart-icon"><use xlink:href="svg-icons/sprites/icons.svg#olymp-heart-icon"></use></svg>
								<span>15</span>
							</a>
							<a href="#" data-toggle="modal" data-target="#open-photo-popup-v2" class="  full-block"></a>
							<div class="content">
								<a href="#" class="h6 title">Header Photos</a>
								<time class="published" datetime="2017-03-24T18:18">1 week ago</time>
							</div>
						</div>

						
						<div class="photo-item col-4-width">
							<img src="images/photo-item10.jpg" alt="photo">
							<div class="overlay overlay-dark"></div>
							<a href="#" class="more"><svg class="olymp-three-dots-icon"><use xlink:href="svg-icons/sprites/icons.svg#olymp-three-dots-icon"></use></svg></a>
							<a href="#" class="post-add-icon inline-items">
								<svg class="olymp-heart-icon"><use xlink:href="svg-icons/sprites/icons.svg#olymp-heart-icon"></use></svg>
								<span>15</span>
							</a>
							<a href="#" data-toggle="modal" data-target="#open-photo-popup-v2" class="  full-block"></a>
							<div class="content">
								<a href="#" class="h6 title">Header Photos</a>
								<time class="published" datetime="2017-03-24T18:18">1 week ago</time>
							</div>
						</div>

						
						<div class="photo-item col-4-width">
							<img src="images/photo-item11.jpg" alt="photo">
							<div class="overlay overlay-dark"></div>
							<a href="#" class="more"><svg class="olymp-three-dots-icon"><use xlink:href="svg-icons/sprites/icons.svg#olymp-three-dots-icon"></use></svg></a>
							<a href="#" class="post-add-icon inline-items">
								<svg class="olymp-heart-icon"><use xlink:href="svg-icons/sprites/icons.svg#olymp-heart-icon"></use></svg>
								<span>15</span>
							</a>
							<a href="#" data-toggle="modal" data-target="#open-photo-popup-v2" class="  full-block"></a>
							<div class="content">
								<a href="#" class="h6 title">Header Photos</a>
								<time class="published" datetime="2017-03-24T18:18">1 week ago</time>
							</div>
						</div>
						

						<a href="#" class="btn btn-control btn-more"><svg class="olymp-three-dots-icon"><use xlink:href="svg-icons/sprites/icons.svg#olymp-three-dots-icon"></use></svg></a>

					</div>

				</div>

				<div class="tab-pane active" id="album-page" role="tabpanel">

					<div class="photo-album-wrapper">

						<div class="photo-album-item-wrap col-4-width">
							
							
							<div class="photo-album-item" data-mh="album-item">
								<div class="photo-item">
									<img src="images/photo-item2.jpg" alt="photo">
									<div class="overlay overlay-dark"></div>
									<a href="#" class="more"><svg class="olymp-three-dots-icon"><use xlink:href="svg-icons/sprites/icons.svg#olymp-three-dots-icon"></use></svg></a>
									<a href="#" class="post-add-icon">
										<svg class="olymp-heart-icon"><use xlink:href="svg-icons/sprites/icons.svg#olymp-heart-icon"></use></svg>
										<span>324</span>
									</a>
									<a href="#" data-toggle="modal" data-target="#open-photo-popup-v2" class="  full-block"></a>
								</div>
							
								<div class="content">
									<a href="#" class="title h5">South America Vacations</a>
									<span class="sub-title">Last Added: 2 hours ago</span>
							
									<div class="swiper-container">
										<div class="swiper-wrapper">
											<div class="swiper-slide">
												<ul class="friends-harmonic">
													<li>
														<a href="#">
															<img src="images/friend-harmonic5.jpg" alt="friend">
														</a>
													</li>
													<li>
														<a href="#">
															<img src="images/friend-harmonic10.jpg" alt="friend">
														</a>
													</li>
													<li>
														<a href="#">
															<img src="images/friend-harmonic7.jpg" alt="friend">
														</a>
													</li>
													<li>
														<a href="#">
															<img src="images/friend-harmonic8.jpg" alt="friend">
														</a>
													</li>
													<li>
														<a href="#">
															<img src="images/friend-harmonic2.jpg" alt="friend">
														</a>
													</li>
												</ul>
											</div>
							
											<div class="swiper-slide">
												<div class="friend-count" data-swiper-parallax="-500">
													<a href="#" class="friend-count-item">
														<div class="h6">24</div>
														<div class="title">Photos</div>
													</a>
													<a href="#" class="friend-count-item">
														<div class="h6">86</div>
														<div class="title">Comments</div>
													</a>
													<a href="#" class="friend-count-item">
														<div class="h6">16</div>
														<div class="title">Share</div>
													</a>
												</div>
											</div>
										</div>
							
										<!-- If we need pagination -->
										<div class="swiper-pagination"></div>
									</div>
								</div>
							
							</div>
						</div>

						<div class="photo-album-item-wrap col-4-width">
							
							
							<div class="photo-album-item" data-mh="album-item">
								<div class="photo-item">
									<img src="images/photo-album1.jpg" alt="photo">
									<div class="overlay overlay-dark"></div>
									<a href="#" class="more"><svg class="olymp-three-dots-icon"><use xlink:href="svg-icons/sprites/icons.svg#olymp-three-dots-icon"></use></svg></a>
									<a href="#" class="post-add-icon">
										<svg class="olymp-heart-icon"><use xlink:href="svg-icons/sprites/icons.svg#olymp-heart-icon"></use></svg>
										<span>324</span>
									</a>
							
									<a href="#" data-toggle="modal" data-target="#open-photo-popup-v1" class="  full-block"></a>
								</div>
							
								<div class="content">
									<a href="#" class="title h5">Photoshoot Summer 2016</a>
									<span class="sub-title">Last Added: 5 weeks ago</span>
							
									<div class="swiper-container" data-slide="fade">
										<div class="swiper-wrapper">
											<div class="swiper-slide">
												<ul class="friends-harmonic">
													<li>
														<a href="#">
															<img src="images/friend-harmonic5.jpg" alt="friend">
														</a>
													</li>
													<li>
														<a href="#">
															<img src="images/friend-harmonic10.jpg" alt="friend">
														</a>
													</li>
													<li>
														<a href="#">
															<img src="images/friend-harmonic7.jpg" alt="friend">
														</a>
													</li>
													<li>
														<a href="#">
															<img src="images/friend-harmonic8.jpg" alt="friend">
														</a>
													</li>
													<li>
														<a href="#">
															<img src="images/friend-harmonic2.jpg" alt="friend">
														</a>
													</li>
												</ul>
											</div>
							
											<div class="swiper-slide">
												<div class="friend-count" data-swiper-parallax="-500">
													<a href="#" class="friend-count-item">
														<div class="h6">24</div>
														<div class="title">Photos</div>
													</a>
													<a href="#" class="friend-count-item">
														<div class="h6">86</div>
														<div class="title">Comments</div>
													</a>
													<a href="#" class="friend-count-item">
														<div class="h6">16</div>
														<div class="title">Share</div>
													</a>
												</div>
											</div>
										</div>
							
										<!-- If we need pagination -->
										<div class="swiper-pagination"></div>
									</div>
								</div>
							
							</div>
						</div>

						<div class="photo-album-item-wrap col-4-width">
							
							
							<div class="photo-album-item" data-mh="album-item">
								<div class="photo-item">
									<img src="images/photo-album2.jpg" alt="photo">
									<div class="overlay overlay-dark"></div>
									<a href="#" class="more"><svg class="olymp-three-dots-icon"><use xlink:href="svg-icons/sprites/icons.svg#olymp-three-dots-icon"></use></svg></a>
									<a href="#" class="post-add-icon">
										<svg class="olymp-heart-icon"><use xlink:href="svg-icons/sprites/icons.svg#olymp-heart-icon"></use></svg>
										<span>324</span>
									</a>
							
									<a href="#" data-toggle="modal" data-target="#open-photo-popup-v1" class="  full-block"></a>
								</div>
							
								<div class="content">
									<a href="#" class="title h5">Amazing Street Food</a>
									<span class="sub-title">Last Added: 6 mins ago</span>
							
									<div class="swiper-container" data-slide="fade">
										<div class="swiper-wrapper">
											<div class="swiper-slide">
												<ul class="friends-harmonic">
													<li>
														<a href="#">
															<img src="images/friend-harmonic10.jpg" alt="friend">
														</a>
													</li>
												</ul>
											</div>
							
											<div class="swiper-slide">
												<div class="friend-count" data-swiper-parallax="-500">
													<a href="#" class="friend-count-item">
														<div class="h6">24</div>
														<div class="title">Photos</div>
													</a>
													<a href="#" class="friend-count-item">
														<div class="h6">86</div>
														<div class="title">Comments</div>
													</a>
													<a href="#" class="friend-count-item">
														<div class="h6">16</div>
														<div class="title">Share</div>
													</a>
												</div>
											</div>
										</div>
							
										<!-- If we need pagination -->
										<div class="swiper-pagination"></div>
									</div>
								</div>
							
							</div>
						</div>

						<div class="photo-album-item-wrap col-4-width">
							
							<div class="photo-album-item" data-mh="album-item">
								<div class="photo-item">
									<img src="images/photo-album3.jpg" alt="photo">
									<div class="overlay overlay-dark"></div>
									<a href="#" class="more"><svg class="olymp-three-dots-icon"><use xlink:href="svg-icons/sprites/icons.svg#olymp-three-dots-icon"></use></svg></a>
									<a href="#" class="post-add-icon">
										<svg class="olymp-heart-icon"><use xlink:href="svg-icons/sprites/icons.svg#olymp-heart-icon"></use></svg>
										<span>324</span>
									</a>
							
									<a href="#" data-toggle="modal" data-target="#open-photo-popup-v1" class="  full-block"></a>
								</div>
							
								<div class="content">
									<a href="#" class="title h5">Graffiti & Street Art</a>
									<span class="sub-title">Last Added: 16 hours ago</span>
							
									<div class="swiper-container" data-slide="fade">
										<div class="swiper-wrapper">
											<div class="swiper-slide">
												<ul class="friends-harmonic">
													<li>
														<a href="#">
															<img src="images/friend-harmonic10.jpg" alt="friend">
														</a>
													</li>
													<li>
														<a href="#">
															<img src="images/friend-harmonic7.jpg" alt="friend">
														</a>
													</li>
													<li>
														<a href="#">
															<img src="images/friend-harmonic8.jpg" alt="friend">
														</a>
													</li>
													<li>
														<a href="#">
															<img src="images/friend-harmonic2.jpg" alt="friend">
														</a>
													</li>
												</ul>
											</div>
							
											<div class="swiper-slide">
												<div class="friend-count" data-swiper-parallax="-500">
													<a href="#" class="friend-count-item">
														<div class="h6">24</div>
														<div class="title">Photos</div>
													</a>
													<a href="#" class="friend-count-item">
														<div class="h6">86</div>
														<div class="title">Comments</div>
													</a>
													<a href="#" class="friend-count-item">
														<div class="h6">16</div>
														<div class="title">Share</div>
													</a>
												</div>
											</div>
										</div>
							
										<!-- If we need pagination -->
										<div class="swiper-pagination"></div>
									</div>
								</div>
							
							</div>
							
						</div>

						<div class="photo-album-item-wrap col-4-width">
							
							
							<div class="photo-album-item" data-mh="album-item">
								<div class="photo-item">
									<img src="images/photo-album4.jpg" alt="photo">
									<div class="overlay overlay-dark"></div>
									<a href="#" class="more"><svg class="olymp-three-dots-icon"><use xlink:href="svg-icons/sprites/icons.svg#olymp-three-dots-icon"></use></svg></a>
									<a href="#" class="post-add-icon">
										<svg class="olymp-heart-icon"><use xlink:href="svg-icons/sprites/icons.svg#olymp-heart-icon"></use></svg>
										<span>324</span>
									</a>
							
									<a href="#" data-toggle="modal" data-target="#open-photo-popup-v1" class="  full-block"></a>
								</div>
							
								<div class="content">
									<a href="#" class="title h5">Amazing Landscapes</a>
									<span class="sub-title">Last Added: 13 mins ago</span>
							
									<div class="swiper-container" data-slide="fade">
										<div class="swiper-wrapper">
											<div class="swiper-slide">
												<ul class="friends-harmonic">
													<li>
														<a href="#">
															<img src="images/friend-harmonic5.jpg" alt="friend">
														</a>
													</li>
													<li>
														<a href="#">
															<img src="images/friend-harmonic10.jpg" alt="friend">
														</a>
													</li>
													<li>
														<a href="#">
															<img src="images/friend-harmonic7.jpg" alt="friend">
														</a>
													</li>
													<li>
														<a href="#">
															<img src="images/friend-harmonic8.jpg" alt="friend">
														</a>
													</li>
													<li>
														<a href="#">
															<img src="images/friend-harmonic2.jpg" alt="friend">
														</a>
													</li>
													<li>
														<a href="#">
															<img src="images/avatar30-sm.jpg" alt="author">
														</a>
													</li>
													<li>
														<a href="#">
															<img src="images/avatar29-sm.jpg" alt="user">
														</a>
													</li>
													<li>
														<a href="#">
															<img src="images/avatar28-sm.jpg" alt="user">
														</a>
													</li>
													<li>
														<a href="#">
															<img src="images/avatar27-sm.jpg" alt="user">
														</a>
													</li>
													<li>
														<a href="#" class="all-users">+3</a>
													</li>
												</ul>
											</div>
							
											<div class="swiper-slide">
												<div class="friend-count" data-swiper-parallax="-500">
													<a href="#" class="friend-count-item">
														<div class="h6">24</div>
														<div class="title">Photos</div>
													</a>
													<a href="#" class="friend-count-item">
														<div class="h6">86</div>
														<div class="title">Comments</div>
													</a>
													<a href="#" class="friend-count-item">
														<div class="h6">16</div>
														<div class="title">Share</div>
													</a>
												</div>
											</div>
										</div>
							
										<!-- If we need pagination -->
										<div class="swiper-pagination"></div>
									</div>
								</div>
							
							</div>
						</div>

						<div class="photo-album-item-wrap col-4-width">
							
							
							<div class="photo-album-item" data-mh="album-item">
								<div class="photo-item">
									<img src="images/photo-item6.jpg" alt="photo">
									<div class="overlay overlay-dark"></div>
									<a href="#" class="more"><svg class="olymp-three-dots-icon"><use xlink:href="svg-icons/sprites/icons.svg#olymp-three-dots-icon"></use></svg></a>
									<a href="#" class="post-add-icon">
										<svg class="olymp-heart-icon"><use xlink:href="svg-icons/sprites/icons.svg#olymp-heart-icon"></use></svg>
										<span>324</span>
									</a>
							
									<a href="#" data-toggle="modal" data-target="#open-photo-popup-v1" class="  full-block"></a>
								</div>
							
								<div class="content">
									<a href="#" class="title h5">The Majestic Canyon</a>
									<span class="sub-title">Last Added: 57 mins ago</span>
							
									<div class="swiper-container" data-slide="fade">
										<div class="swiper-wrapper">
											<div class="swiper-slide">
												<ul class="friends-harmonic">
													<li>
														<a href="#">
															<img src="images/friend-harmonic10.jpg" alt="friend">
														</a>
													</li>
												</ul>
											</div>
							
											<div class="swiper-slide">
												<div class="friend-count" data-swiper-parallax="-500">
													<a href="#" class="friend-count-item">
														<div class="h6">24</div>
														<div class="title">Photos</div>
													</a>
													<a href="#" class="friend-count-item">
														<div class="h6">86</div>
														<div class="title">Comments</div>
													</a>
													<a href="#" class="friend-count-item">
														<div class="h6">16</div>
														<div class="title">Share</div>
													</a>
												</div>
											</div>
										</div>
							
										<!-- If we need pagination -->
										<div class="swiper-pagination"></div>
									</div>
								</div>
							
							</div>
						</div>

						<div class="photo-album-item-wrap col-4-width">
							
							
							<div class="photo-album-item" data-mh="album-item">
								<div class="photo-item">
									<img src="images/photo-album5.jpg" alt="photo">
									<div class="overlay overlay-dark"></div>
									<a href="#" class="more"><svg class="olymp-three-dots-icon"><use xlink:href="svg-icons/sprites/icons.svg#olymp-three-dots-icon"></use></svg></a>
									<a href="#" class="post-add-icon">
										<svg class="olymp-heart-icon"><use xlink:href="svg-icons/sprites/icons.svg#olymp-heart-icon"></use></svg>
										<span>324</span>
									</a>
							
									<a href="#" data-toggle="modal" data-target="#open-photo-popup-v1" class="  full-block"></a>
								</div>
							
								<div class="content">
									<a href="#" class="title h5">Winter 2015 Portraits</a>
									<span class="sub-title">Last Added: 1 year ago</span>
							
									<div class="swiper-container" data-slide="fade">
										<div class="swiper-wrapper">
											<div class="swiper-slide">
												<ul class="friends-harmonic">
													<li>
														<a href="#">
															<img src="images/friend-harmonic10.jpg" alt="friend">
														</a>
													</li>
													<li>
														<a href="#">
															<img src="images/avatar30-sm.jpg" alt="author">
														</a>
													</li>
													<li>
														<a href="#">
															<img src="images/avatar29-sm.jpg" alt="user">
														</a>
													</li>
												</ul>
											</div>
							
											<div class="swiper-slide">
												<div class="friend-count" data-swiper-parallax="-500">
													<a href="#" class="friend-count-item">
														<div class="h6">24</div>
														<div class="title">Photos</div>
													</a>
													<a href="#" class="friend-count-item">
														<div class="h6">86</div>
														<div class="title">Comments</div>
													</a>
													<a href="#" class="friend-count-item">
														<div class="h6">16</div>
														<div class="title">Share</div>
													</a>
												</div>
											</div>
										</div>
							
										<!-- If we need pagination -->
										<div class="swiper-pagination"></div>
									</div>
								</div>
							
							</div>
						</div>

					</div>

				</div>
			</div>

		</div>
	</div>
</div>




<!-- Window-popup Open Photo Popup V1 -->

<div class="modal fade" id="open-photo-popup-v1">
	<div class="modal-dialog ui-block window-popup open-photo-popup open-photo-popup-v1">
		<a href="#" class="close icon-close" data-dismiss="modal" aria-label="Close">
			<svg class="olymp-close-icon"><use xlink:href="svg-icons/sprites/icons.svg#olymp-close-icon"></use></svg>
		</a>

		<div class="open-photo-thumb">
			<div class="swiper-container" data-slide="fade">
				<div class="swiper-wrapper">

					<div class="swiper-slide">
						<div class="photo-item">
							<img src="images/open-photo1.jpg" alt="photo">
							<div class="overlay"></div>
							<a href="#" class="more"><svg class="olymp-three-dots-icon"><use xlink:href="svg-icons/sprites/icons.svg#olymp-three-dots-icon"></use></svg></a>
							<a href="#" class="tag-friends" data-toggle="tooltip" data-placement="top"   data-original-title="TAG YOUR FRIENDS">
								<svg class="olymp-happy-face-icon"><use xlink:href="svg-icons/sprites/icons.svg#olymp-happy-face-icon"></use></svg>
							</a>

							<div class="content">
								<a href="#" class="h6 title">Photoshoot 2016</a>
								<time class="published" datetime="2017-03-24T18:18">2 weeks ago</time>
							</div>
						</div>
					</div>

					<div class="swiper-slide">
						<div class="photo-item">
							<img src="images/open-photo1.jpg" alt="photo">
							<div class="overlay"></div>
							<a href="#" class="more"><svg class="olymp-three-dots-icon"><use xlink:href="svg-icons/sprites/icons.svg#olymp-three-dots-icon"></use></svg></a>
							<a href="#" class="tag-friends" data-toggle="tooltip" data-placement="top"   data-original-title="TAG YOUR FRIENDS">
								<svg class="olymp-happy-face-icon"><use xlink:href="svg-icons/sprites/icons.svg#olymp-happy-face-icon"></use></svg>
							</a>

							<div class="content">
								<a href="#" class="h6 title">Photoshoot 2016</a>
								<time class="published" datetime="2017-03-24T18:18">2 weeks ago</time>
							</div>
						</div>
					</div>

					<div class="swiper-slide">
						<div class="photo-item">
							<img src="images/open-photo1.jpg" alt="photo">
							<div class="overlay"></div>
							<a href="#" class="more"><svg class="olymp-three-dots-icon"><use xlink:href="svg-icons/sprites/icons.svg#olymp-three-dots-icon"></use></svg></a>
							<a href="#" class="tag-friends" data-toggle="tooltip" data-placement="top"   data-original-title="TAG YOUR FRIENDS">
								<svg class="olymp-happy-face-icon"><use xlink:href="svg-icons/sprites/icons.svg#olymp-happy-face-icon"></use></svg>
							</a>

							<div class="content">
								<a href="#" class="h6 title">Photoshoot 2016</a>
								<time class="published" datetime="2017-03-24T18:18">2 weeks ago</time>
							</div>
						</div>
					</div>

				</div>

				<!--Prev Next Arrows-->

				<svg class="btn-next-without olymp-popup-right-arrow"><use xlink:href="svg-icons/sprites/icons.svg#olymp-popup-right-arrow"></use></svg>

				<svg class="btn-prev-without olymp-popup-left-arrow"><use xlink:href="svg-icons/sprites/icons.svg#olymp-popup-left-arrow"></use></svg>
			</div>
		</div>

		<div class="open-photo-content">

			<article class="hentry post">

				<div class="post__author author vcard inline-items">
					<img src="images/author-page.jpg" alt="author">

					<div class="author-date">
						<a class="h6 post__author-name fn" href="02-ProfilePage.html">James Spiegel</a>
						<div class="post__date">
							<time class="published" datetime="2017-03-24T18:18">
								2 hours ago
							</time>
						</div>
					</div>

					<div class="more"><svg class="olymp-three-dots-icon"><use xlink:href="svg-icons/sprites/icons.svg#olymp-three-dots-icon"></use></svg>
						<ul class="more-dropdown">
							<li>
								<a href="#">Edit Post</a>
							</li>
							<li>
								<a href="#">Delete Post</a>
							</li>
							<li>
								<a href="#">Turn Off Notifications</a>
							</li>
							<li>
								<a href="#">Select as Featured</a>
							</li>
						</ul>
					</div>

				</div>

				<p>Here�s a photo from last month�s photoshoot. We really had a great time and got a batch of incredible shots for the new catalog.</p>

				<p>With: <a href="#">Jessy Owen</a>, <a href="#">Marina Valentine</a></p>

				<div class="post-additional-info inline-items">

					<a href="#" class="post-add-icon inline-items">
						<svg class="olymp-heart-icon"><use xlink:href="svg-icons/sprites/icons.svg#olymp-heart-icon"></use></svg>
						<span>148</span>
					</a>

					<ul class="friends-harmonic">
						<li>
							<a href="#">
								<img src="images/friend-harmonic7.jpg" alt="friend">
							</a>
						</li>
						<li>
							<a href="#">
								<img src="images/friend-harmonic8.jpg" alt="friend">
							</a>
						</li>
						<li>
							<a href="#">
								<img src="images/friend-harmonic9.jpg" alt="friend">
							</a>
						</li>
						<li>
							<a href="#">
								<img src="images/friend-harmonic10.jpg" alt="friend">
							</a>
						</li>
						<li>
							<a href="#">
								<img src="images/friend-harmonic11.jpg" alt="friend">
							</a>
						</li>
					</ul>

					<div class="names-people-likes">
						<a href="#">Diana</a>, <a href="#">Nicholas</a> and
						<br>13 more liked this
					</div>


					<div class="comments-shared">
						<a href="#" class="post-add-icon inline-items">
							<svg class="olymp-speech-balloon-icon"><use xlink:href="svg-icons/sprites/icons.svg#olymp-speech-balloon-icon"></use></svg>
							<span>61</span>
						</a>

						<a href="#" class="post-add-icon inline-items">
							<svg class="olymp-share-icon"><use xlink:href="svg-icons/sprites/icons.svg#olymp-share-icon"></use></svg>
							<span>32</span>
						</a>
					</div>


				</div>

				<div class="control-block-button post-control-button">

					<a href="#" class="btn btn-control">
						<svg class="olymp-like-post-icon"><use xlink:href="svg-icons/sprites/icons.svg#olymp-like-post-icon"></use></svg>
					</a>

					<a href="#" class="btn btn-control">
						<svg class="olymp-comments-post-icon"><use xlink:href="svg-icons/sprites/icons.svg#olymp-comments-post-icon"></use></svg>
					</a>

					<a href="#" class="btn btn-control">
						<svg class="olymp-share-icon"><use xlink:href="svg-icons/sprites/icons.svg#olymp-share-icon"></use></svg>
					</a>

				</div>

			</article>

			<div class="mCustomScrollbar" data-mcs-theme="dark">

				<ul class="comments-list">
					<li>
						<div class="post__author author vcard inline-items">
							<img src="images/avatar48-sm.jpg" alt="author">

							<div class="author-date">
								<a class="h6 post__author-name fn" href="#">Marina Valentine</a>
								<div class="post__date">
									<time class="published" datetime="2017-03-24T18:18">
										46 mins ago
									</time>
								</div>
							</div>

							<a href="#" class="more"><svg class="olymp-three-dots-icon"><use xlink:href="svg-icons/sprites/icons.svg#olymp-three-dots-icon"></use></svg></a>

						</div>

						<p>I had a great time too!! We should do it again!</p>

						<a href="#" class="post-add-icon inline-items">
							<svg class="olymp-heart-icon"><use xlink:href="svg-icons/sprites/icons.svg#olymp-heart-icon"></use></svg>
							<span>8</span>
						</a>
						<a href="#" class="reply">Reply</a>
					</li>

					<li>
						<div class="post__author author vcard inline-items">
							<img src="images/avatar4-sm.jpg" alt="author">

							<div class="author-date">
								<a class="h6 post__author-name fn" href="#">Chris Greyson</a>
								<div class="post__date">
									<time class="published" datetime="2017-03-24T18:18">
										1 hour ago
									</time>
								</div>
							</div>

							<a href="#" class="more"><svg class="olymp-three-dots-icon"><use xlink:href="svg-icons/sprites/icons.svg#olymp-three-dots-icon"></use></svg></a>

						</div>

						<p>Dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit.</p>

						<a href="#" class="post-add-icon inline-items">
							<svg class="olymp-heart-icon"><use xlink:href="svg-icons/sprites/icons.svg#olymp-heart-icon"></use></svg>
							<span>7</span>
						</a>
						<a href="#" class="reply">Reply</a>

					</li>
				</ul>

			</div>

			<form class="comment-form inline-items">

				<div class="post__author author vcard inline-items">
					<img src="images/author-page.jpg" alt="author">

					<div class="form-group with-icon-right ">
						<textarea class="form-control" placeholder="Press Enter to post..."></textarea>
						<div class="add-options-message">
							<a href="#" class="options-message">
								<svg class="olymp-camera-icon"><use xlink:href="svg-icons/sprites/icons.svg#olymp-camera-icon"></use></svg>
							</a>
						</div>
					</div>
				</div>

			</form>

		</div>

	</div>
</div>

<!-- ... end Window-popup Open Photo Popup V1 -->

<!-- Window-popup Open Photo Popup V2 -->

<div class="modal fade" id="open-photo-popup-v2">
	<div class="modal-dialog ui-block window-popup open-photo-popup open-photo-popup-v2">
		<a href="#" class="close icon-close" data-dismiss="modal" aria-label="Close">
			<svg class="olymp-close-icon"><use xlink:href="svg-icons/sprites/icons.svg#olymp-close-icon"></use></svg>
		</a>

		<div class="open-photo-thumb">

			<div class="swiper-container" data-effect="fade" data-autoplay="4000">

				<!-- Additional required wrapper -->
				<div class="swiper-wrapper">
					<!-- Slides -->

					<div class="swiper-slide">
						<div class="photo-item" data-swiper-parallax="-300" data-swiper-parallax-duration="500">
							<img src="images/open-photo2.jpg" alt="photo">
							<div class="overlay"></div>
							<a href="#" class="more"><svg class="olymp-three-dots-icon"><use xlink:href="svg-icons/sprites/icons.svg#olymp-three-dots-icon"></use></svg></a>
							<a href="#" class="tag-friends" data-toggle="tooltip" data-placement="top"   data-original-title="TAG YOUR FRIENDS">
								<svg class="olymp-happy-face-icon"><use xlink:href="svg-icons/sprites/icons.svg#olymp-happy-face-icon"></use></svg>
							</a>

							<div class="content">
								<a href="#" class="h6 title">Photoshoot 2016</a>
								<time class="published" datetime="2017-03-24T18:18">2 weeks ago</time>
							</div>
						</div>
					</div>

					<div class="swiper-slide">
						<div class="photo-item" data-swiper-parallax="-300" data-swiper-parallax-duration="500">
							<img src="images/open-photo2.jpg" alt="photo">
							<div class="overlay"></div>
							<a href="#" class="more"><svg class="olymp-three-dots-icon"><use xlink:href="svg-icons/sprites/icons.svg#olymp-three-dots-icon"></use></svg></a>
							<a href="#" class="tag-friends" data-toggle="tooltip" data-placement="top"   data-original-title="TAG YOUR FRIENDS">
								<svg class="olymp-happy-face-icon"><use xlink:href="svg-icons/sprites/icons.svg#olymp-happy-face-icon"></use></svg>
							</a>

							<div class="content">
								<a href="#" class="h6 title">Photoshoot 2016</a>
								<time class="published" datetime="2017-03-24T18:18">2 weeks ago</time>
							</div>
						</div>
					</div>

					<div class="swiper-slide">
						<div class="photo-item" data-swiper-parallax="-300" data-swiper-parallax-duration="500">
							<img src="images/open-photo2.jpg" alt="photo">
							<div class="overlay"></div>
							<a href="#" class="more"><svg class="olymp-three-dots-icon"><use xlink:href="svg-icons/sprites/icons.svg#olymp-three-dots-icon"></use></svg></a>
							<a href="#" class="tag-friends" data-toggle="tooltip" data-placement="top"   data-original-title="TAG YOUR FRIENDS">
								<svg class="olymp-happy-face-icon"><use xlink:href="svg-icons/sprites/icons.svg#olymp-happy-face-icon"></use></svg>
							</a>

							<div class="content">
								<a href="#" class="h6 title">Photoshoot 2016</a>
								<time class="published" datetime="2017-03-24T18:18">2 weeks ago</time>
							</div>
						</div>
					</div>

					<div class="swiper-slide">
						<div class="photo-item" data-swiper-parallax="-300" data-swiper-parallax-duration="500">
							<img src="images/open-photo2.jpg" alt="photo">
							<div class="overlay"></div>
							<a href="#" class="more"><svg class="olymp-three-dots-icon"><use xlink:href="svg-icons/sprites/icons.svg#olymp-three-dots-icon"></use></svg></a>
							<a href="#" class="tag-friends" data-toggle="tooltip" data-placement="top"   data-original-title="TAG YOUR FRIENDS">
								<svg class="olymp-happy-face-icon"><use xlink:href="svg-icons/sprites/icons.svg#olymp-happy-face-icon"></use></svg>
							</a>

							<div class="content">
								<a href="#" class="h6 title">Photoshoot 2016</a>
								<time class="published" datetime="2017-03-24T18:18">2 weeks ago</time>
							</div>
						</div>
					</div>

					<div class="swiper-slide">
						<div class="photo-item" data-swiper-parallax="-300" data-swiper-parallax-duration="500">
							<img src="images/open-photo2.jpg" alt="photo">
							<div class="overlay"></div>
							<a href="#" class="more"><svg class="olymp-three-dots-icon"><use xlink:href="svg-icons/sprites/icons.svg#olymp-three-dots-icon"></use></svg></a>
							<a href="#" class="tag-friends" data-toggle="tooltip" data-placement="top"   data-original-title="TAG YOUR FRIENDS">
								<svg class="olymp-happy-face-icon"><use xlink:href="svg-icons/sprites/icons.svg#olymp-happy-face-icon"></use></svg>
							</a>

							<div class="content">
								<a href="#" class="h6 title">Photoshoot 2016</a>
								<time class="published" datetime="2017-03-24T18:18">2 weeks ago</time>
							</div>
						</div>
					</div>

					<div class="swiper-slide">
						<div class="photo-item" data-swiper-parallax="-300" data-swiper-parallax-duration="500">
							<img src="images/open-photo2.jpg" alt="photo">
							<div class="overlay"></div>
							<a href="#" class="more"><svg class="olymp-three-dots-icon"><use xlink:href="svg-icons/sprites/icons.svg#olymp-three-dots-icon"></use></svg></a>
							<a href="#" class="tag-friends" data-toggle="tooltip" data-placement="top"   data-original-title="TAG YOUR FRIENDS">
								<svg class="olymp-happy-face-icon"><use xlink:href="svg-icons/sprites/icons.svg#olymp-happy-face-icon"></use></svg>
							</a>

							<div class="content">
								<a href="#" class="h6 title">Photoshoot 2016</a>
								<time class="published" datetime="2017-03-24T18:18">2 weeks ago</time>
							</div>
						</div>
					</div>

					<div class="swiper-slide">
						<div class="photo-item" data-swiper-parallax="-300" data-swiper-parallax-duration="500">
							<img src="images/open-photo2.jpg" alt="photo">
							<div class="overlay"></div>
							<a href="#" class="more"><svg class="olymp-three-dots-icon"><use xlink:href="svg-icons/sprites/icons.svg#olymp-three-dots-icon"></use></svg></a>
							<a href="#" class="tag-friends" data-toggle="tooltip" data-placement="top"   data-original-title="TAG YOUR FRIENDS">
								<svg class="olymp-happy-face-icon"><use xlink:href="svg-icons/sprites/icons.svg#olymp-happy-face-icon"></use></svg>
							</a>

							<div class="content">
								<a href="#" class="h6 title">Photoshoot 2016</a>
								<time class="published" datetime="2017-03-24T18:18">2 weeks ago</time>
							</div>
						</div>
					</div>

					<div class="swiper-slide">
						<div class="photo-item" data-swiper-parallax="-300" data-swiper-parallax-duration="500">
							<img src="images/open-photo2.jpg" alt="photo">
							<div class="overlay"></div>
							<a href="#" class="more"><svg class="olymp-three-dots-icon"><use xlink:href="svg-icons/sprites/icons.svg#olymp-three-dots-icon"></use></svg></a>
							<a href="#" class="tag-friends" data-toggle="tooltip" data-placement="top"   data-original-title="TAG YOUR FRIENDS">
								<svg class="olymp-happy-face-icon"><use xlink:href="svg-icons/sprites/icons.svg#olymp-happy-face-icon"></use></svg>
							</a>

							<div class="content">
								<a href="#" class="h6 title">Photoshoot 2016</a>
								<time class="published" datetime="2017-03-24T18:18">2 weeks ago</time>
							</div>
						</div>
					</div>

					<div class="swiper-slide">
						<div class="photo-item" data-swiper-parallax="-300" data-swiper-parallax-duration="500">
							<img src="images/open-photo2.jpg" alt="photo">
							<div class="overlay"></div>
							<a href="#" class="more"><svg class="olymp-three-dots-icon"><use xlink:href="svg-icons/sprites/icons.svg#olymp-three-dots-icon"></use></svg></a>
							<a href="#" class="tag-friends" data-toggle="tooltip" data-placement="top"   data-original-title="TAG YOUR FRIENDS">
								<svg class="olymp-happy-face-icon"><use xlink:href="svg-icons/sprites/icons.svg#olymp-happy-face-icon"></use></svg>
							</a>

							<div class="content">
								<a href="#" class="h6 title">Photoshoot 2016</a>
								<time class="published" datetime="2017-03-24T18:18">2 weeks ago</time>
							</div>
						</div>
					</div>


				</div>

			</div>

			<!--Pagination tabs-->

			<div class="slider-slides">
				<a href="#" class="slides-item ">
					<img src="images/photo-tabs1.jpg" alt="slide">
					<div class="overlay overlay-dark"></div>
				</a>

				<a href="#" class="slides-item ">
					<img src="images/photo-tabs2.jpg" alt="slide">
					<div class="overlay overlay-dark"></div>
				</a>

				<a href="#" class="slides-item ">
					<img src="images/photo-tabs3.jpg" alt="slide">
					<div class="overlay overlay-dark"></div>
				</a>

				<a href="#" class="slides-item ">
					<img src="images/photo-tabs4.jpg" alt="slide">
					<div class="overlay overlay-dark"></div>
				</a>
				<a href="#" class="slides-item ">
					<img src="images/photo-tabs5.jpg" alt="slide">
					<div class="overlay overlay-dark"></div>
				</a>

				<a href="#" class="slides-item ">
					<img src="images/photo-tabs6.jpg" alt="slide">
					<div class="overlay overlay-dark"></div>
				</a>

				<a href="#" class="slides-item ">
					<img src="images/photo-tabs7.jpg" alt="slide">
					<div class="overlay overlay-dark"></div>
				</a>

				<a href="#" class="slides-item ">
					<img src="images/photo-tabs8.jpg" alt="slide">
					<div class="overlay overlay-dark"></div>
				</a>

				<a href="#" class="slides-item ">
					<img src="images/photo-tabs9.jpg" alt="slide">
					<div class="overlay overlay-dark"></div>
				</a>

				<!--Prev Next Arrows-->

				<svg class="btn-next olymp-popup-right-arrow"><use xlink:href="svg-icons/sprites/icons.svg#olymp-popup-right-arrow"></use></svg>

				<svg class="btn-prev olymp-popup-left-arrow"><use xlink:href="svg-icons/sprites/icons.svg#olymp-popup-left-arrow"></use></svg>

			</div>

		</div>

		<div class="open-photo-content">

			<article class="hentry post">

				<div class="post__author author vcard inline-items">
					<img src="images/author-page.jpg" alt="author">

					<div class="author-date">
						<a class="h6 post__author-name fn" href="02-ProfilePage.html">James Spiegel</a>
						<div class="post__date">
							<time class="published" datetime="2017-03-24T18:18">
								2 hours ago
							</time>
						</div>
					</div>

					<div class="more"><svg class="olymp-three-dots-icon"><use xlink:href="svg-icons/sprites/icons.svg#olymp-three-dots-icon"></use></svg>
						<ul class="more-dropdown">
							<li>
								<a href="#">Edit Post</a>
							</li>
							<li>
								<a href="#">Delete Post</a>
							</li>
							<li>
								<a href="#">Turn Off Notifications</a>
							</li>
							<li>
								<a href="#">Select as Featured</a>
							</li>
						</ul>
					</div>

				</div>

				<p>Here�s a photo from last month�s photoshoot. We really had a great time and got a batch of incredible shots for the new catalog.</p>

				<p>With: <a href="#">Jessy Owen</a>, <a href="#">Marina Valentine</a></p>

				<div class="post-additional-info inline-items">

					<a href="#" class="post-add-icon inline-items">
						<svg class="olymp-heart-icon"><use xlink:href="svg-icons/sprites/icons.svg#olymp-heart-icon"></use></svg>
						<span>148</span>
					</a>


					<div class="comments-shared">
						<a href="#" class="post-add-icon inline-items">
							<svg class="olymp-speech-balloon-icon"><use xlink:href="svg-icons/sprites/icons.svg#olymp-speech-balloon-icon"></use></svg>
							<span>61</span>
						</a>

						<a href="#" class="post-add-icon inline-items">
							<svg class="olymp-share-icon"><use xlink:href="svg-icons/sprites/icons.svg#olymp-share-icon"></use></svg>
							<span>32</span>
						</a>
					</div>


				</div>

				<div class="control-block-button post-control-button">

					<a href="#" class="btn btn-control">
						<svg class="olymp-like-post-icon"><use xlink:href="svg-icons/sprites/icons.svg#olymp-like-post-icon"></use></svg>
					</a>

					<a href="#" class="btn btn-control">
						<svg class="olymp-comments-post-icon"><use xlink:href="svg-icons/sprites/icons.svg#olymp-comments-post-icon"></use></svg>
					</a>

					<a href="#" class="btn btn-control">
						<svg class="olymp-share-icon"><use xlink:href="svg-icons/sprites/icons.svg#olymp-share-icon"></use></svg>
					</a>

				</div>

			</article>

			<div class="mCustomScrollbar" data-mcs-theme="dark">

				<ul class="comments-list">
					<li>
						<div class="post__author author vcard inline-items">
							<img src="images/avatar48-sm.jpg" alt="author">

							<div class="author-date">
								<a class="h6 post__author-name fn" href="#">Marina Valentine</a>
								<div class="post__date">
									<time class="published" datetime="2017-03-24T18:18">
										46 mins ago
									</time>
								</div>
							</div>

							<a href="#" class="more"><svg class="olymp-three-dots-icon"><use xlink:href="svg-icons/sprites/icons.svg#olymp-three-dots-icon"></use></svg></a>

						</div>

						<p>I had a great time too!! We should do it again!</p>

						<a href="#" class="post-add-icon inline-items">
							<svg class="olymp-heart-icon"><use xlink:href="svg-icons/sprites/icons.svg#olymp-heart-icon"></use></svg>
							<span>8</span>
						</a>
						<a href="#" class="reply">Reply</a>
					</li>

					<li>
						<div class="post__author author vcard inline-items">
							<img src="images/avatar4-sm.jpg" alt="author">

							<div class="author-date">
								<a class="h6 post__author-name fn" href="#">Chris Greyson</a>
								<div class="post__date">
									<time class="published" datetime="2017-03-24T18:18">
										1 hour ago
									</time>
								</div>
							</div>

							<a href="#" class="more"><svg class="olymp-three-dots-icon"><use xlink:href="svg-icons/sprites/icons.svg#olymp-three-dots-icon"></use></svg></a>

						</div>

						<p>Dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit.</p>

						<a href="#" class="post-add-icon inline-items">
							<svg class="olymp-heart-icon"><use xlink:href="svg-icons/sprites/icons.svg#olymp-heart-icon"></use></svg>
							<span>7</span>
						</a>
						<a href="#" class="reply">Reply</a>

					</li>
				</ul>

			</div>

			<form class="comment-form inline-items">

				<div class="post__author author vcard inline-items">
					<img src="images/avatar73-sm.jpg" alt="author">
					<div class="form-group with-icon-right ">
						<textarea class="form-control" placeholder="Press Enter to post..." ></textarea>
						<div class="add-options-message">
							<a href="#" class="options-message">
								<svg class="olymp-camera-icon"><use xlink:href="svg-icons/sprites/icons.svg#olymp-camera-icon"></use></svg>
							</a>
						</div>
					</div>
				</div>

			</form>

		</div>

	</div>
</div>

<!-- Window-popup Open Photo Popup V2 -->
<!-- Window-popup Create Photo Album -->

<div class="modal fade" id="create-photo-album">
	<div class="modal-dialog ui-block window-popup create-photo-album">
		<a href="#" class="close icon-close" data-dismiss="modal" aria-label="Close">
			<svg class="olymp-close-icon"><use xlink:href="svg-icons/sprites/icons.svg#olymp-close-icon"></use></svg>
		</a>

		<div class="ui-block-title">
			<h6 class="title">Create Photo Album</h6>
		</div>

		<div class="ui-block-content">

			<form class="form-group label-floating">
				<label class="control-label">Album Name</label>
				<input class="form-control" placeholder="" type="text" value="Rock Garden Festival - Day 4">
			</form>

			<div class="photo-album-wrapper">
				<div class="photo-album-item-wrap col-3-width" >
					<div class="photo-album-item create-album" data-mh="album-item">
						<div class="content">
							<a href="#" class="btn btn-control bg-primary">
								<svg class="olymp-plus-icon"><use xlink:href="svg-icons/sprites/icons.svg#olymp-plus-icon"></use></svg>
							</a>

							<a href="#" class="title h5">Add More Photos...</a>
						</div>
					</div>
				</div>

				<div class="photo-album-item-wrap col-3-width" >
					<div class="photo-album-item" data-mh="album-item">
						<div class="form-group">
							<img src="images/photo-album6.jpg" alt="photo">
							<textarea class="form-control" placeholder="Write something about this photo..."></textarea>
						</div>

						<form class="form-group label-floating is-select">
							<svg class="olymp-happy-face-icon"><use xlink:href="svg-icons/sprites/icons.svg#olymp-happy-face-icon"></use></svg>

							<select class="selectpicker form-control style-2 show-tick" multiple data-max-options="2" data-live-search="true">
								<option title="Green Goo Rock" data-content='<div class="inline-items">
										<div class="author-thumb">
											<img src="images/avatar52-sm.jpg" alt="author">
										</div>
											<div class="h6 author-title">Green Goo Rock</div>

										</div>'>Green Goo Rock
								</option>

								<option title="Mathilda Brinker" data-content='<div class="inline-items">
											<div class="author-thumb">
												<img src="images/avatar74-sm.jpg" alt="author">
											</div>
											<div class="h6 author-title">Mathilda Brinker</div>
										</div>'>Mathilda Brinker
								</option>

								<option title="Marina Valentine" data-content='<div class="inline-items">
											<div class="author-thumb">
												<img src="images/avatar48-sm.jpg" alt="author">
											</div>
											<div class="h6 author-title">Marina Valentine</div>
										</div>'>Marina Valentine
								</option>

								<option title="Dave Marinara" data-content='<div class="inline-items">
											<div class="author-thumb">
												<img src="images/avatar75-sm.jpg" alt="author">
											</div>
											<div class="h6 author-title">Dave Marinara</div>
										</div>'>Dave Marinara
								</option>

								<option title="Rachel Howlett" data-content='<div class="inline-items">
											<div class="author-thumb">
												<img src="images/avatar76-sm.jpg" alt="author">
											</div>
											<div class="h6 author-title">Rachel Howlett</div>
										</div>'>Rachel Howlett
								</option>

							</select>
						</form>
					</div>
				</div>

				<div class="photo-album-item-wrap col-3-width" >
					<div class="photo-album-item" data-mh="album-item">
						<div class="form-group">
							<img src="images/photo-album7.jpg" alt="photo">
							<textarea class="form-control" placeholder="Write something about this photo..."></textarea>
						</div>
						<form class="form-group label-floating is-select">
							<svg class="olymp-happy-face-icon"><use xlink:href="svg-icons/sprites/icons.svg#olymp-happy-face-icon"></use></svg>

							<select class="selectpicker form-control style-2 show-tick" multiple data-max-options="2" data-live-search="true">
								<option title="Green Goo Rock" data-content='<div class="inline-items">
										<div class="author-thumb">
											<img src="images/avatar52-sm.jpg" alt="author">
										</div>
											<div class="h6 author-title">Green Goo Rock</div>

										</div>'>Green Goo Rock
								</option>

								<option title="Mathilda Brinker" data-content='<div class="inline-items">
											<div class="author-thumb">
												<img src="images/avatar74-sm.jpg" alt="author">
											</div>
											<div class="h6 author-title">Mathilda Brinker</div>
										</div>'>Mathilda Brinker
								</option>

								<option title="Marina Valentine" data-content='<div class="inline-items">
											<div class="author-thumb">
												<img src="images/avatar48-sm.jpg" alt="author">
											</div>
											<div class="h6 author-title">Marina Valentine</div>
										</div>'>Marina Valentine
								</option>

								<option title="Dave Marinara" data-content='<div class="inline-items">
											<div class="author-thumb">
												<img src="images/avatar75-sm.jpg" alt="author">
											</div>
											<div class="h6 author-title">Dave Marinara</div>
										</div>'>Dave Marinara
								</option>

								<option title="Rachel Howlett" data-content='<div class="inline-items">
											<div class="author-thumb">
												<img src="images/avatar76-sm.jpg" alt="author">
											</div>
											<div class="h6 author-title">Rachel Howlett</div>
										</div>'>Rachel Howlett
								</option>

							</select>
						</form>
					</div>
				</div>

				<div class="photo-album-item-wrap col-3-width" >
					<div class="photo-album-item" data-mh="album-item">
						<div class="form-group">
							<img src="images/photo-album8.jpg" alt="photo">
							<textarea class="form-control" placeholder="Write something about this photo..."></textarea>
						</div>

						<form class="form-group label-floating is-select">
							<svg class="olymp-happy-face-icon"><use xlink:href="svg-icons/sprites/icons.svg#olymp-happy-face-icon"></use></svg>

							<select class="selectpicker form-control style-2 show-tick" multiple data-max-options="2" data-live-search="true">
								<option title="Green Goo Rock" data-content='<div class="inline-items">
										<div class="author-thumb">
											<img src="images/avatar52-sm.jpg" alt="author">
										</div>
											<div class="h6 author-title">Green Goo Rock</div>

										</div>'>Green Goo Rock
								</option>

								<option title="Mathilda Brinker" data-content='<div class="inline-items">
											<div class="author-thumb">
												<img src="images/avatar74-sm.jpg" alt="author">
											</div>
											<div class="h6 author-title">Mathilda Brinker</div>
										</div>'>Mathilda Brinker
								</option>

								<option title="Marina Valentine" data-content='<div class="inline-items">
											<div class="author-thumb">
												<img src="images/avatar48-sm.jpg" alt="author">
											</div>
											<div class="h6 author-title">Marina Valentine</div>
										</div>'>Marina Valentine
								</option>

								<option title="Dave Marinara" data-content='<div class="inline-items">
											<div class="author-thumb">
												<img src="images/avatar75-sm.jpg" alt="author">
											</div>
											<div class="h6 author-title">Dave Marinara</div>
										</div>'>Dave Marinara
								</option>

								<option title="Rachel Howlett" data-content='<div class="inline-items">
											<div class="author-thumb">
												<img src="images/avatar76-sm.jpg" alt="author">
											</div>
											<div class="h6 author-title">Rachel Howlett</div>
										</div>'>Rachel Howlett
								</option>

							</select>
						</form>
					</div>
				</div>

				<div class="photo-album-item-wrap col-3-width" >
					<div class="photo-album-item" data-mh="album-item">
						<div class="form-group">
							<img src="images/photo-album9.jpg" alt="photo">
							<textarea class="form-control" placeholder="Write something about this photo..."></textarea>
						</div>

						<form class="form-group label-floating is-select">
							<svg class="olymp-happy-face-icon"><use xlink:href="svg-icons/sprites/icons.svg#olymp-happy-face-icon"></use></svg>

							<select class="selectpicker form-control style-2 show-tick" multiple data-max-options="2" data-live-search="true">
								<option title="Green Goo Rock" data-content='<div class="inline-items">
										<div class="author-thumb">
											<img src="images/avatar52-sm.jpg" alt="author">
										</div>
											<div class="h6 author-title">Green Goo Rock</div>
										</div>'>Green Goo Rock
								</option>

								<option title="Mathilda Brinker" data-content='<div class="inline-items">
											<div class="author-thumb">
												<img src="images/avatar74-sm.jpg" alt="author">
											</div>
											<div class="h6 author-title">Mathilda Brinker</div>
										</div>'>Mathilda Brinker
								</option>

								<option title="Marina Valentine" data-content='<div class="inline-items">
											<div class="author-thumb">
												<img src="images/avatar48-sm.jpg" alt="author">
											</div>
											<div class="h6 author-title">Marina Valentine</div>
										</div>'>Marina Valentine
								</option>

								<option title="Dave Marinara" data-content='<div class="inline-items">
											<div class="author-thumb">
												<img src="images/avatar75-sm.jpg" alt="author">
											</div>
											<div class="h6 author-title">Dave Marinara</div>
										</div>'>Dave Marinara
								</option>

								<option title="Rachel Howlett" data-content='<div class="inline-items">
											<div class="author-thumb">
												<img src="images/avatar76-sm.jpg" alt="author">
											</div>
											<div class="h6 author-title">Rachel Howlett</div>
										</div>'>Rachel Howlett
								</option>

							</select>
						</form>
					</div>
				</div>

				<div class="photo-album-item-wrap col-3-width" >
					<div class="photo-album-item" data-mh="album-item">
						<div class="form-group">
							<img src="images/photo-album10.jpg" alt="photo">
							<textarea class="form-control" placeholder="Write something about this photo..."></textarea>
						</div>

						<form class="form-group label-floating is-select">
							<svg class="olymp-happy-face-icon"><use xlink:href="svg-icons/sprites/icons.svg#olymp-happy-face-icon"></use></svg>

							<select class="selectpicker form-control style-2 show-tick" multiple data-max-options="2" data-live-search="true">
								<option title="Green Goo Rock" data-content='<div class="inline-items">
										<div class="author-thumb">
											<img src="images/avatar52-sm.jpg" alt="author">
										</div>
											<div class="h6 author-title">Green Goo Rock</div>

										</div>'>Green Goo Rock
								</option>

								<option title="Mathilda Brinker" data-content='<div class="inline-items">
											<div class="author-thumb">
												<img src="images/avatar74-sm.jpg" alt="author">
											</div>
											<div class="h6 author-title">Mathilda Brinker</div>
										</div>'>Mathilda Brinker
								</option>

								<option title="Marina Valentine" data-content='<div class="inline-items">
											<div class="author-thumb">
												<img src="images/avatar48-sm.jpg" alt="author">
											</div>
											<div class="h6 author-title">Marina Valentine</div>
										</div>'>Marina Valentine
								</option>

								<option title="Dave Marinara" data-content='<div class="inline-items">
											<div class="author-thumb">
												<img src="images/avatar75-sm.jpg" alt="author">
											</div>
											<div class="h6 author-title">Dave Marinara</div>
										</div>'>Dave Marinara
								</option>

								<option title="Rachel Howlett" data-content='<div class="inline-items">
											<div class="author-thumb">
												<img src="images/avatar76-sm.jpg" alt="author">
											</div>
											<div class="h6 author-title">Rachel Howlett</div>
										</div>'>Rachel Howlett
								</option>

							</select>
						</form>

					</div>
				</div>
			</div>

			<a href="#" class="btn btn-secondary btn-lg btn--half-width">Discard Everything</a>
			<a href="#" class="btn btn-primary btn-lg btn--half-width">Post Album</a>

		</div>
	</div>
</div>

<!-- ... end Window-popup Create Photo Album -->
<!-- Window-popup Update Header Photo -->

<div class="modal fade" id="update-header-photo">
	<div class="modal-dialog ui-block window-popup update-header-photo">
		<a href="#" class="close icon-close" data-dismiss="modal" aria-label="Close">
			<svg class="olymp-close-icon"><use xlink:href="svg-icons/sprites/icons.svg#olymp-close-icon"></use></svg>
		</a>

		<div class="ui-block-title">
			<h6 class="title">Update Header Photo</h6>
		</div>

		<a href="#" class="upload-photo-item">
			<svg class="olymp-computer-icon"><use xlink:href="svg-icons/sprites/icons.svg#olymp-computer-icon"></use></svg>

			<h6>Upload Photo</h6>
			<span>Browse your computer.</span>
		</a>

		<a href="#" class="upload-photo-item" data-toggle="modal" data-target="#choose-from-my-photo">

			<svg class="olymp-photos-icon"><use xlink:href="svg-icons/sprites/icons.svg#olymp-photos-icon"></use></svg>

			<h6>Choose from My Photos</h6>
			<span>Choose from your uploaded photos</span>
		</a>
	</div>
</div>


<!-- ... end Window-popup Update Header Photo -->

<!-- Window-popup Choose from my Photo -->

<div class="modal fade" id="choose-from-my-photo">
	<div class="modal-dialog ui-block window-popup choose-from-my-photo">
		<a href="#" class="close icon-close" data-dismiss="modal" aria-label="Close">
			<svg class="olymp-close-icon"><use xlink:href="svg-icons/sprites/icons.svg#olymp-close-icon"></use></svg>
		</a>

		<div class="ui-block-title">
			<h6 class="title">Choose from My Photos</h6>

			<!-- Nav tabs -->
			<ul class="nav nav-tabs" role="tablist">
				<li class="nav-item">
					<a class="nav-link active" data-toggle="tab" href="#home" role="tab" aria-expanded="true">
						<svg class="olymp-photos-icon"><use xlink:href="svg-icons/sprites/icons.svg#olymp-photos-icon"></use></svg>
					</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" data-toggle="tab" href="#profile" role="tab" aria-expanded="false">
						<svg class="olymp-albums-icon"><use xlink:href="svg-icons/sprites/icons.svg#olymp-albums-icon"></use></svg>
					</a>
				</li>
			</ul>
		</div>


		<div class="ui-block-content">
			<!-- Tab panes -->
			<div class="tab-content">
				<div class="tab-pane active" id="home" role="tabpanel" aria-expanded="true">

					<div class="choose-photo-item" data-mh="choose-item">
						<div class="radio">
							<label class="custom-radio">
								<img src="images/choose-photo1.jpg" alt="photo">
								<input type="radio" name="optionsRadios">
							</label>
						</div>
					</div>
					<div class="choose-photo-item" data-mh="choose-item">
						<div class="radio">
							<label class="custom-radio">
								<img src="images/choose-photo2.jpg" alt="photo">
								<input type="radio" name="optionsRadios">
							</label>
						</div>
					</div>
					<div class="choose-photo-item" data-mh="choose-item">
						<div class="radio">
							<label class="custom-radio">
								<img src="images/choose-photo3.jpg" alt="photo">
								<input type="radio" name="optionsRadios">
							</label>
						</div>
					</div>

					<div class="choose-photo-item" data-mh="choose-item">
						<div class="radio">
							<label class="custom-radio">
								<img src="images/choose-photo4.jpg" alt="photo">
								<input type="radio" name="optionsRadios">
							</label>
						</div>
					</div>
					<div class="choose-photo-item" data-mh="choose-item">
						<div class="radio">
							<label class="custom-radio">
								<img src="images/choose-photo5.jpg" alt="photo">
								<input type="radio" name="optionsRadios">
							</label>
						</div>
					</div>
					<div class="choose-photo-item" data-mh="choose-item">
						<div class="radio">
							<label class="custom-radio">
								<img src="images/choose-photo6.jpg" alt="photo">
								<input type="radio" name="optionsRadios">
							</label>
						</div>
					</div>

					<div class="choose-photo-item" data-mh="choose-item">
						<div class="radio">
							<label class="custom-radio">
								<img src="images/choose-photo7.jpg" alt="photo">
								<input type="radio" name="optionsRadios">
							</label>
						</div>
					</div>
					<div class="choose-photo-item" data-mh="choose-item">
						<div class="radio">
							<label class="custom-radio">
								<img src="images/choose-photo8.jpg" alt="photo">
								<input type="radio" name="optionsRadios">
							</label>
						</div>
					</div>
					<div class="choose-photo-item" data-mh="choose-item">
						<div class="radio">
							<label class="custom-radio">
								<img src="images/choose-photo9.jpg" alt="photo">
								<input type="radio" name="optionsRadios">
							</label>
						</div>
					</div>


					<a href="#" class="btn btn-secondary btn-lg btn--half-width">Cancel</a>
					<a href="#" class="btn btn-primary btn-lg btn--half-width">Confirm Photo</a>

				</div>
				<div class="tab-pane" id="profile" role="tabpanel" aria-expanded="false">

					<div class="choose-photo-item" data-mh="choose-item">
						<figure>
							<img src="images/choose-photo10.jpg" alt="photo">
							<figcaption>
								<a href="#">South America Vacations</a>
								<span>Last Added: 2 hours ago</span>
							</figcaption>
						</figure>
					</div>
					<div class="choose-photo-item" data-mh="choose-item">
						<figure>
							<img src="images/choose-photo11.jpg" alt="photo">
							<figcaption>
								<a href="#">Photoshoot Summer 2016</a>
								<span>Last Added: 5 weeks ago</span>
							</figcaption>
						</figure>
					</div>
					<div class="choose-photo-item" data-mh="choose-item">
						<figure>
							<img src="images/choose-photo12.jpg" alt="photo">
							<figcaption>
								<a href="#">Amazing Street Food</a>
								<span>Last Added: 6 mins ago</span>
							</figcaption>
						</figure>
					</div>

					<div class="choose-photo-item" data-mh="choose-item">
						<figure>
							<img src="images/choose-photo13.jpg" alt="photo">
							<figcaption>
								<a href="#">Graffity & Street Art</a>
								<span>Last Added: 16 hours ago</span>
							</figcaption>
						</figure>
					</div>
					<div class="choose-photo-item" data-mh="choose-item">
						<figure>
							<img src="images/choose-photo14.jpg" alt="photo">
							<figcaption>
								<a href="#">Amazing Landscapes</a>
								<span>Last Added: 13 mins ago</span>
							</figcaption>
						</figure>
					</div>
					<div class="choose-photo-item" data-mh="choose-item">
						<figure>
							<img src="images/choose-photo15.jpg" alt="photo">
							<figcaption>
								<a href="#">The Majestic Canyon</a>
								<span>Last Added: 57 mins ago</span>
							</figcaption>
						</figure>
					</div>


					<a href="#" class="btn btn-secondary btn-lg btn--half-width">Cancel</a>
					<a href="#" class="btn btn-primary btn-lg disabled btn--half-width">Confirm Photo</a>
				</div>
			</div>
		</div>

	</div>
</div>

<!-- ... end Window-popup Choose from my Photo -->


<a class="back-to-top" href="#">
	<img src="svg-icons/back-to-top.svg" alt="arrow" class="back-icon">
</a>




<!-- Window-popup-CHAT for responsive min-width: 768px -->

<div class="ui-block popup-chat popup-chat-responsive">
	<div class="ui-block-title">
		<span class="icon-status online"></span>
		<h6 class="title" >Chat</h6>
		<div class="more">
			<svg class="olymp-three-dots-icon"><use xlink:href="svg-icons/sprites/icons.svg#olymp-three-dots-icon"></use></svg>
			<svg class="olymp-little-delete js-chat-open"><use xlink:href="svg-icons/sprites/icons.svg#olymp-little-delete"></use></svg>
		</div>
	</div>
	<div class="mCustomScrollbar">
		<ul class="notification-list chat-message chat-message-field">
			<li>
				<div class="author-thumb">
					<img src="images/avatar14-sm.jpg" alt="author" class="mCS_img_loaded">
				</div>
				<div class="notification-event">
					<span class="chat-message-item">Hi James! Please remember to buy the food for tomorrow! I�m gonna be handling the gifts and Jake�s gonna get the drinks</span>
					<span class="notification-date"><time class="entry-date updated" datetime="2004-07-24T18:18">Yesterday at 8:10pm</time></span>
				</div>
			</li>

			<li>
				<div class="author-thumb">
					<img src="images/author-page.jpg" alt="author" class="mCS_img_loaded">
				</div>
				<div class="notification-event">
					<span class="chat-message-item">Don�t worry Mathilda!</span>
					<span class="chat-message-item">I already bought everything</span>
					<span class="notification-date"><time class="entry-date updated" datetime="2004-07-24T18:18">Yesterday at 8:29pm</time></span>
				</div>
			</li>

			<li>
				<div class="author-thumb">
					<img src="images/avatar14-sm.jpg" alt="author" class="mCS_img_loaded">
				</div>
				<div class="notification-event">
					<span class="chat-message-item">Hi James! Please remember to buy the food for tomorrow! I�m gonna be handling the gifts and Jake�s gonna get the drinks</span>
					<span class="notification-date"><time class="entry-date updated" datetime="2004-07-24T18:18">Yesterday at 8:10pm</time></span>
				</div>
			</li>
		</ul>
	</div>

	<form class="need-validation">

		<div class="form-group label-floating is-empty">
			<label class="control-label">Press enter to post...</label>
			<textarea class="form-control" placeholder=""></textarea>
			<div class="add-options-message">
				<a href="#" class="options-message">
					<svg class="olymp-computer-icon"><use xlink:href="svg-icons/sprites/icons.svg#olymp-computer-icon"></use></svg>
				</a>
				<div class="options-message smile-block">

					<svg class="olymp-happy-sticker-icon"><use xlink:href="svg-icons/sprites/icons.svg#olymp-happy-sticker-icon"></use></svg>

					<ul class="more-dropdown more-with-triangle triangle-bottom-right">
						<li>
							<a href="#">
								<img src="images/icon-chat1.png" alt="icon">
							</a>
						</li>
						<li>
							<a href="#">
								<img src="images/icon-chat2.png" alt="icon">
							</a>
						</li>
						<li>
							<a href="#">
								<img src="images/icon-chat3.png" alt="icon">
							</a>
						</li>
						<li>
							<a href="#">
								<img src="images/icon-chat4.png" alt="icon">
							</a>
						</li>
						<li>
							<a href="#">
								<img src="images/icon-chat5.png" alt="icon">
							</a>
						</li>
						<li>
							<a href="#">
								<img src="images/icon-chat6.png" alt="icon">
							</a>
						</li>
						<li>
							<a href="#">
								<img src="images/icon-chat7.png" alt="icon">
							</a>
						</li>
						<li>
							<a href="#">
								<img src="images/icon-chat8.png" alt="icon">
							</a>
						</li>
						<li>
							<a href="#">
								<img src="images/icon-chat9.png" alt="icon">
							</a>
						</li>
						<li>
							<a href="#">
								<img src="images/icon-chat10.png" alt="icon">
							</a>
						</li>
						<li>
							<a href="#">
								<img src="images/icon-chat11.png" alt="icon">
							</a>
						</li>
						<li>
							<a href="#">
								<img src="images/icon-chat12.png" alt="icon">
							</a>
						</li>
						<li>
							<a href="#">
								<img src="images/icon-chat13.png" alt="icon">
							</a>
						</li>
						<li>
							<a href="#">
								<img src="images/icon-chat14.png" alt="icon">
							</a>
						</li>
						<li>
							<a href="#">
								<img src="images/icon-chat15.png" alt="icon">
							</a>
						</li>
						<li>
							<a href="#">
								<img src="images/icon-chat16.png" alt="icon">
							</a>
						</li>
						<li>
							<a href="#">
								<img src="images/icon-chat17.png" alt="icon">
							</a>
						</li>
						<li>
							<a href="#">
								<img src="images/icon-chat18.png" alt="icon">
							</a>
						</li>
						<li>
							<a href="#">
								<img src="images/icon-chat19.png" alt="icon">
							</a>
						</li>
						<li>
							<a href="#">
								<img src="images/icon-chat20.png" alt="icon">
							</a>
						</li>
						<li>
							<a href="#">
								<img src="images/icon-chat21.png" alt="icon">
							</a>
						</li>
						<li>
							<a href="#">
								<img src="images/icon-chat22.png" alt="icon">
							</a>
						</li>
						<li>
							<a href="#">
								<img src="images/icon-chat23.png" alt="icon">
							</a>
						</li>
						<li>
							<a href="#">
								<img src="images/icon-chat24.png" alt="icon">
							</a>
						</li>
						<li>
							<a href="#">
								<img src="images/icon-chat25.png" alt="icon">
							</a>
						</li>
						<li>
							<a href="#">
								<img src="images/icon-chat26.png" alt="icon">
							</a>
						</li>
						<li>
							<a href="#">
								<img src="images/icon-chat27.png" alt="icon">
							</a>
						</li>
					</ul>
				</div>
			</div>
		</div>

	</form>


</div>

<!-- ... end Window-popup-CHAT for responsive min-width: 768px -->


<?php include ('footer.php');?>

</body>
</html>