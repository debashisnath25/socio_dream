
<!DOCTYPE html>
<html lang="en">
<head>

	<title>Your Account - Personal Information</title>

<?php include ('metalinks.php');?>
</head>
<body>


<?php include("chatsidebar.php");?>

<!-- ... end Fixed Sidebar Right -->
<!-- Header-BP -->


<?php include ('header.php');?>
<!-- ... end Header-BP -->


<!-- Responsive Header-BP -->

<header class="header header-responsive" id="site-header-responsive">

	<div class="header-content-wrapper">
		<ul class="nav nav-tabs mobile-app-tabs" role="tablist">
			<li class="nav-item">
				<a class="nav-link" data-toggle="tab" href="#request" role="tab">
					<div class="control-icon has-items">
						<svg class="olymp-happy-face-icon"><use xlink:href="svg-icons/sprites/icons.svg#olymp-happy-face-icon"></use></svg>
						<div class="label-avatar bg-blue">6</div>
					</div>
				</a>
			</li>

			<li class="nav-item">
				<a class="nav-link" data-toggle="tab" href="#chat" role="tab">
					<div class="control-icon has-items">
						<svg class="olymp-chat---messages-icon"><use xlink:href="svg-icons/sprites/icons.svg#olymp-chat---messages-icon"></use></svg>
						<div class="label-avatar bg-purple">2</div>
					</div>
				</a>
			</li>

			<li class="nav-item">
				<a class="nav-link" data-toggle="tab" href="#notification" role="tab">
					<div class="control-icon has-items">
						<svg class="olymp-thunder-icon"><use xlink:href="svg-icons/sprites/icons.svg#olymp-thunder-icon"></use></svg>
						<div class="label-avatar bg-primary">8</div>
					</div>
				</a>
			</li>

			<li class="nav-item">
				<a class="nav-link" data-toggle="tab" href="#search" role="tab">
					<svg class="olymp-magnifying-glass-icon"><use xlink:href="svg-icons/sprites/icons.svg#olymp-magnifying-glass-icon"></use></svg>
					<svg class="olymp-close-icon"><use xlink:href="svg-icons/sprites/icons.svg#olymp-close-icon"></use></svg>
				</a>
			</li>
		</ul>
	</div>

	<!-- Tab panes -->
	<div class="tab-content tab-content-responsive">

		<div class="tab-pane " id="request" role="tabpanel">

			<div class="mCustomScrollbar" data-mcs-theme="dark">
				<div class="ui-block-title ui-block-title-small">
					<h6 class="title">FRIEND REQUESTS</h6>
					<a href="#">Find Friends</a>
					<a href="#">Settings</a>
				</div>
				<ul class="notification-list friend-requests">
					<li>
						<div class="author-thumb">
							<img src="images/avatar55-sm.jpg" alt="author">
						</div>
						<div class="notification-event">
							<a href="#" class="h6 notification-friend">Tamara Romanoff</a>
							<span class="chat-message-item">Mutual Friend: Sarah Hetfield</span>
						</div>
									<span class="notification-icon">
										<a href="#" class="accept-request">
											<span class="icon-add without-text">
												<svg class="olymp-happy-face-icon"><use xlink:href="svg-icons/sprites/icons.svg#olymp-happy-face-icon"></use></svg>
											</span>
										</a>

										<a href="#" class="accept-request request-del">
											<span class="icon-minus">
												<svg class="olymp-happy-face-icon"><use xlink:href="svg-icons/sprites/icons.svg#olymp-happy-face-icon"></use></svg>
											</span>
										</a>

									</span>

						<div class="more">
							<svg class="olymp-three-dots-icon"><use xlink:href="svg-icons/sprites/icons.svg#olymp-three-dots-icon"></use></svg>
						</div>
					</li>
					<li>
						<div class="author-thumb">
							<img src="images/avatar56-sm.jpg" alt="author">
						</div>
						<div class="notification-event">
							<a href="#" class="h6 notification-friend">Tony Stevens</a>
							<span class="chat-message-item">4 Friends in Common</span>
						</div>
									<span class="notification-icon">
										<a href="#" class="accept-request">
											<span class="icon-add without-text">
												<svg class="olymp-happy-face-icon"><use xlink:href="svg-icons/sprites/icons.svg#olymp-happy-face-icon"></use></svg>
											</span>
										</a>

										<a href="#" class="accept-request request-del">
											<span class="icon-minus">
												<svg class="olymp-happy-face-icon"><use xlink:href="svg-icons/sprites/icons.svg#olymp-happy-face-icon"></use></svg>
											</span>
										</a>

									</span>

						<div class="more">
							<svg class="olymp-three-dots-icon"><use xlink:href="svg-icons/sprites/icons.svg#olymp-three-dots-icon"></use></svg>
						</div>
					</li>
					<li class="accepted">
						<div class="author-thumb">
							<img src="images/avatar57-sm.jpg" alt="author">
						</div>
						<div class="notification-event">
							You and <a href="#" class="h6 notification-friend">Mary Jane Stark</a> just became friends. Write on <a href="#" class="notification-link">her wall</a>.
						</div>
									<span class="notification-icon">
										<svg class="olymp-happy-face-icon"><use xlink:href="svg-icons/sprites/icons.svg#olymp-happy-face-icon"></use></svg>
									</span>

						<div class="more">
							<svg class="olymp-three-dots-icon"><use xlink:href="svg-icons/sprites/icons.svg#olymp-three-dots-icon"></use></svg>
							<svg class="olymp-little-delete"><use xlink:href="svg-icons/sprites/icons.svg#olymp-little-delete"></use></svg>
						</div>
					</li>
					<li>
						<div class="author-thumb">
							<img src="images/avatar58-sm.jpg" alt="author">
						</div>
						<div class="notification-event">
							<a href="#" class="h6 notification-friend">Stagg Clothing</a>
							<span class="chat-message-item">9 Friends in Common</span>
						</div>
									<span class="notification-icon">
										<a href="#" class="accept-request">
											<span class="icon-add without-text">
												<svg class="olymp-happy-face-icon"><use xlink:href="svg-icons/sprites/icons.svg#olymp-happy-face-icon"></use></svg>
											</span>
										</a>

										<a href="#" class="accept-request request-del">
											<span class="icon-minus">
												<svg class="olymp-happy-face-icon"><use xlink:href="svg-icons/sprites/icons.svg#olymp-happy-face-icon"></use></svg>
											</span>
										</a>

									</span>

						<div class="more">
							<svg class="olymp-three-dots-icon"><use xlink:href="svg-icons/sprites/icons.svg#olymp-three-dots-icon"></use></svg>
						</div>
					</li>
				</ul>
				<a href="#" class="view-all bg-blue">Check all your Events</a>
			</div>

		</div>

		<div class="tab-pane " id="chat" role="tabpanel">

			<div class="mCustomScrollbar" data-mcs-theme="dark">
				<div class="ui-block-title ui-block-title-small">
					<h6 class="title">Chat / Messages</h6>
					<a href="#">Mark all as read</a>
					<a href="#">Settings</a>
				</div>

				<ul class="notification-list chat-message">
					<li class="message-unread">
						<div class="author-thumb">
							<img src="images/avatar59-sm.jpg" alt="author">
						</div>
						<div class="notification-event">
							<a href="#" class="h6 notification-friend">Diana Jameson</a>
							<span class="chat-message-item">Hi James! It’s Diana, I just wanted to let you know that we have to reschedule...</span>
							<span class="notification-date"><time class="entry-date updated" datetime="2004-07-24T18:18">4 hours ago</time></span>
						</div>
									<span class="notification-icon">
										<svg class="olymp-chat---messages-icon"><use xlink:href="svg-icons/sprites/icons.svg#olymp-chat---messages-icon"></use></svg>
									</span>
						<div class="more">
							<svg class="olymp-three-dots-icon"><use xlink:href="svg-icons/sprites/icons.svg#olymp-three-dots-icon"></use></svg>
						</div>
					</li>

					<li>
						<div class="author-thumb">
							<img src="images/avatar60-sm.jpg" alt="author">
						</div>
						<div class="notification-event">
							<a href="#" class="h6 notification-friend">Jake Parker</a>
							<span class="chat-message-item">Great, I’ll see you tomorrow!.</span>
							<span class="notification-date"><time class="entry-date updated" datetime="2004-07-24T18:18">4 hours ago</time></span>
						</div>
									<span class="notification-icon">
										<svg class="olymp-chat---messages-icon"><use xlink:href="svg-icons/sprites/icons.svg#olymp-chat---messages-icon"></use></svg>
									</span>

						<div class="more">
							<svg class="olymp-three-dots-icon"><use xlink:href="svg-icons/sprites/icons.svg#olymp-three-dots-icon"></use></svg>
						</div>
					</li>
					<li>
						<div class="author-thumb">
							<img src="images/avatar61-sm.jpg" alt="author">
						</div>
						<div class="notification-event">
							<a href="#" class="h6 notification-friend">Elaine Dreyfuss</a>
							<span class="chat-message-item">We’ll have to check that at the office and see if the client is on board with...</span>
							<span class="notification-date"><time class="entry-date updated" datetime="2004-07-24T18:18">Yesterday at 9:56pm</time></span>
						</div>
										<span class="notification-icon">
											<svg class="olymp-chat---messages-icon"><use xlink:href="svg-icons/sprites/icons.svg#olymp-chat---messages-icon"></use></svg>
										</span>
						<div class="more">
							<svg class="olymp-three-dots-icon"><use xlink:href="svg-icons/sprites/icons.svg#olymp-three-dots-icon"></use></svg>
						</div>
					</li>

					<li class="chat-group">
						<div class="author-thumb">
							<img src="images/avatar11-sm.jpg" alt="author">
							<img src="images/avatar12-sm.jpg" alt="author">
							<img src="images/avatar13-sm.jpg" alt="author">
							<img src="images/avatar10-sm.jpg" alt="author">
						</div>
						<div class="notification-event">
							<a href="#" class="h6 notification-friend">You, Faye, Ed &amp; Jet +3</a>
							<span class="last-message-author">Ed:</span>
							<span class="chat-message-item">Yeah! Seems fine by me!</span>
							<span class="notification-date"><time class="entry-date updated" datetime="2004-07-24T18:18">March 16th at 10:23am</time></span>
						</div>
										<span class="notification-icon">
											<svg class="olymp-chat---messages-icon"><use xlink:href="svg-icons/sprites/icons.svg#olymp-chat---messages-icon"></use></svg>
										</span>
						<div class="more">
							<svg class="olymp-three-dots-icon"><use xlink:href="svg-icons/sprites/icons.svg#olymp-three-dots-icon"></use></svg>
						</div>
					</li>
				</ul>

				<a href="#" class="view-all bg-purple">View All Messages</a>
			</div>

		</div>

		<div class="tab-pane " id="notification" role="tabpanel">

			<div class="mCustomScrollbar" data-mcs-theme="dark">
				<div class="ui-block-title ui-block-title-small">
					<h6 class="title">Notifications</h6>
					<a href="#">Mark all as read</a>
					<a href="#">Settings</a>
				</div>

				<ul class="notification-list">
					<li>
						<div class="author-thumb">
							<img src="images/avatar62-sm.jpg" alt="author">
						</div>
						<div class="notification-event">
							<div><a href="#" class="h6 notification-friend">Mathilda Brinker</a> commented on your new <a href="#" class="notification-link">profile status</a>.</div>
							<span class="notification-date"><time class="entry-date updated" datetime="2004-07-24T18:18">4 hours ago</time></span>
						</div>
										<span class="notification-icon">
											<svg class="olymp-comments-post-icon"><use xlink:href="svg-icons/sprites/icons.svg#olymp-comments-post-icon"></use></svg>
										</span>

						<div class="more">
							<svg class="olymp-three-dots-icon"><use xlink:href="svg-icons/sprites/icons.svg#olymp-three-dots-icon"></use></svg>
							<svg class="olymp-little-delete"><use xlink:href="svg-icons/sprites/icons.svg#olymp-little-delete"></use></svg>
						</div>
					</li>

					<li class="un-read">
						<div class="author-thumb">
							<img src="images/avatar63-sm.jpg" alt="author">
						</div>
						<div class="notification-event">
							<div>You and <a href="#" class="h6 notification-friend">Nicholas Grissom</a> just became friends. Write on <a href="#" class="notification-link">his wall</a>.</div>
							<span class="notification-date"><time class="entry-date updated" datetime="2004-07-24T18:18">9 hours ago</time></span>
						</div>
										<span class="notification-icon">
											<svg class="olymp-happy-face-icon"><use xlink:href="svg-icons/sprites/icons.svg#olymp-happy-face-icon"></use></svg>
										</span>

						<div class="more">
							<svg class="olymp-three-dots-icon"><use xlink:href="svg-icons/sprites/icons.svg#olymp-three-dots-icon"></use></svg>
							<svg class="olymp-little-delete"><use xlink:href="svg-icons/sprites/icons.svg#olymp-little-delete"></use></svg>
						</div>
					</li>

					<li class="with-comment-photo">
						<div class="author-thumb">
							<img src="images/avatar64-sm.jpg" alt="author">
						</div>
						<div class="notification-event">
							<div><a href="#" class="h6 notification-friend">Sarah Hetfield</a> commented on your <a href="#" class="notification-link">photo</a>.</div>
							<span class="notification-date"><time class="entry-date updated" datetime="2004-07-24T18:18">Yesterday at 5:32am</time></span>
						</div>
										<span class="notification-icon">
											<svg class="olymp-comments-post-icon"><use xlink:href="svg-icons/sprites/icons.svg#olymp-comments-post-icon"></use></svg>
										</span>

						<div class="comment-photo">
							<img src="images/comment-photo1.jpg" alt="photo">
							<span>“She looks incredible in that outfit! We should see each...”</span>
						</div>

						<div class="more">
							<svg class="olymp-three-dots-icon"><use xlink:href="svg-icons/sprites/icons.svg#olymp-three-dots-icon"></use></svg>
							<svg class="olymp-little-delete"><use xlink:href="svg-icons/sprites/icons.svg#olymp-little-delete"></use></svg>
						</div>
					</li>

					<li>
						<div class="author-thumb">
							<img src="images/avatar65-sm.jpg" alt="author">
						</div>
						<div class="notification-event">
							<div><a href="#" class="h6 notification-friend">Green Goo Rock</a> invited you to attend to his event Goo in <a href="#" class="notification-link">Gotham Bar</a>.</div>
							<span class="notification-date"><time class="entry-date updated" datetime="2004-07-24T18:18">March 5th at 6:43pm</time></span>
						</div>
										<span class="notification-icon">
											<svg class="olymp-happy-face-icon"><use xlink:href="svg-icons/sprites/icons.svg#olymp-happy-face-icon"></use></svg>
										</span>

						<div class="more">
							<svg class="olymp-three-dots-icon"><use xlink:href="svg-icons/sprites/icons.svg#olymp-three-dots-icon"></use></svg>
							<svg class="olymp-little-delete"><use xlink:href="svg-icons/sprites/icons.svg#olymp-little-delete"></use></svg>
						</div>
					</li>

					<li>
						<div class="author-thumb">
							<img src="images/avatar66-sm.jpg" alt="author">
						</div>
						<div class="notification-event">
							<div><a href="#" class="h6 notification-friend">James Summers</a> commented on your new <a href="#" class="notification-link">profile status</a>.</div>
							<span class="notification-date"><time class="entry-date updated" datetime="2004-07-24T18:18">March 2nd at 8:29pm</time></span>
						</div>
										<span class="notification-icon">
											<svg class="olymp-heart-icon"><use xlink:href="svg-icons/sprites/icons.svg#olymp-heart-icon"></use></svg>
										</span>

						<div class="more">
							<svg class="olymp-three-dots-icon"><use xlink:href="svg-icons/sprites/icons.svg#olymp-three-dots-icon"></use></svg>
							<svg class="olymp-little-delete"><use xlink:href="svg-icons/sprites/icons.svg#olymp-little-delete"></use></svg>
						</div>
					</li>
				</ul>

				<a href="#" class="view-all bg-primary">View All Notifications</a>
			</div>

		</div>

		<div class="tab-pane " id="search" role="tabpanel">


				<form class="search-bar w-search notification-list friend-requests">
					<div class="form-group with-button">
						<input class="form-control js-user-search" placeholder="Search here people or pages..." type="text">
					</div>
				</form>


		</div>

	</div>
	<!-- ... end  Tab panes -->

</header>

<!-- ... end Responsive Header-BP -->
<div class="header-spacer"></div>

<!-- Main Header Account -->


<!-- ... end Main Header Account -->


<!-- Your Account Personal Information -->

<div class="container">
	<div class="row">
		<div class="col-xl-9 order-xl-2 col-lg-9 order-lg-2 col-md-12 order-md-1 col-sm-12 col-xs-12">
			<div class="ui-block">
				<div class="ui-block-title">
					<h6 class="title">Personal Information</h6>
				</div>
				<div class="ui-block-content">

					
					<!-- Personal Information Form  -->
					
					<form>
						<div class="row">
					
							<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
								<div class="form-group label-floating">
									<label class="control-label">First Name</label>
									<input class="form-control" placeholder="" type="text" value="James">
								</div>
					
								<div class="form-group label-floating">
									<label class="control-label">Your Email</label>
									<input class="form-control" placeholder="" type="email" value="jspiegel@yourmail.com">
								</div>
					
								<div class="form-group date-time-picker label-floating">
									<label class="control-label">Your Birthday</label>
									<input name="datetimepicker" value="10/24/1984" />
									<span class="input-group-addon">
															<svg class="olymp-month-calendar-icon icon"><use xlink:href="svg-icons/sprites/icons.svg#olymp-month-calendar-icon"></use></svg>
														</span>
								</div>
							</div>
					
							<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
								<div class="form-group label-floating">
									<label class="control-label">Last Name</label>
									<input class="form-control" placeholder="" type="text" value="Spiegel">
								</div>
					
								<div class="form-group label-floating">
									<label class="control-label">Your Website</label>
									<input class="form-control" placeholder="" type="email" value="daydreamzagency.com">
								</div>
					
					
								<div class="form-group label-floating ">
									<label class="control-label">Your Phone Number</label>
									<input class="form-control" placeholder="" type="text">
								</div>
							</div>
					
							<div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
								<div class="form-group label-floating is-select">
									<label class="control-label">Your Country</label>
									<select class="selectpicker form-control">
										<option value="US">United States</option>
										<option value="AU">Australia</option>
									</select>
								</div>
							</div>
							<div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
								<div class="form-group label-floating is-select">
									<label class="control-label">Your State / Province</label>
									<select class="selectpicker form-control">
										<option value="CA">California</option>
										<option value="TE">Texas</option>
									</select>
								</div>
							</div>
							<div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
								<div class="form-group label-floating is-select">
									<label class="control-label">Your City</label>
									<select class="selectpicker form-control">
										<option value="SF">San Francisco</option>
										<option value="NY">New York</option>
									</select>
								</div>
							</div>
							<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
								<div class="form-group label-floating">
									<label class="control-label">Write a little description about you</label>
									<textarea class="form-control" placeholder="">Hi, I’m James, I’m 36 and I work as a Digital Designer for the  “Daydreams” Agency in Pier 56</textarea>
								</div>
					
								<div class="form-group label-floating is-select">
									<label class="control-label">Your Gender</label>
									<select class="selectpicker form-control">
										<option value="MA">Male</option>
										<option value="FE">Female</option>
									</select>
								</div>
					
								<div class="form-group label-floating">
									<label class="control-label">Religious Belifs</label>
									<input class="form-control" placeholder="" type="text">
								</div>
							</div>
							<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
								<div class="form-group label-floating ">
									<label class="control-label">Your Birthplace</label>
									<input class="form-control" placeholder="" type="text">
								</div>
					
								<div class="form-group label-floating">
									<label class="control-label">Your Occupation</label>
									<input class="form-control" placeholder="" type="text" value="UI/UX Designer">
								</div>
					
								<div class="form-group label-floating is-select">
									<label class="control-label">Status</label>
									<select class="selectpicker form-control">
										<option value="MA">Married</option>
										<option value="FE">Not Married</option>
									</select>
								</div>
					
								<div class="form-group label-floating">
									<label class="control-label">Political Incline</label>
									<input class="form-control" placeholder="" type="text" value="Democrat">
								</div>
							</div>
							<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-xs-12">
								<div class="form-group with-icon label-floating">
									<label class="control-label">Your Facebook Account</label>
									<input class="form-control" type="text" value="www.facebook.com/james-spiegel95321">
									<i class="fab fa-facebook-f c-facebook" aria-hidden="true"></i>
								</div>
								<div class="form-group with-icon label-floating">
									<label class="control-label">Your Twitter Account</label>
									<input class="form-control" type="text" value="www.twitter.com/james_spiegelOK">
									<i class="fab fa-twitter c-twitter" aria-hidden="true"></i>
								</div>
								<div class="form-group with-icon label-floating ">
									<label class="control-label">Your RSS Feed Account</label>
									<input class="form-control" type="text">
									<i class="fa fa-rss c-rss" aria-hidden="true"></i>
								</div>
								<div class="form-group with-icon label-floating">
									<label class="control-label">Your Dribbble Account</label>
									<input class="form-control" type="text" value="www.dribbble.com/thecowboydesigner">
									<i class="fab fa-dribbble c-dribbble" aria-hidden="true"></i>
								</div>
								<div class="form-group with-icon label-floating">
									<label class="control-label">Your Spotify Account</label>
									<input class="form-control" type="text">
									<i class="fab fa-spotify c-spotify" aria-hidden="true"></i>
								</div>
							</div>
							<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
								<button class="btn btn-secondary btn-lg full-width">Restore all Attributes</button>
							</div>
							<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
								<button class="btn btn-primary btn-lg full-width">Save all Changes</button>
							</div>
					
						</div>
					</form>
					
					<!-- ... end Personal Information Form  -->
				</div>
			</div>
		</div>

		<?php include ('sidebar.php');?>
	</div>
</div>

<!-- ... end Your Account Personal Information -->




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
					<span class="chat-message-item">Hi James! Please remember to buy the food for tomorrow! I’m gonna be handling the gifts and Jake’s gonna get the drinks</span>
					<span class="notification-date"><time class="entry-date updated" datetime="2004-07-24T18:18">Yesterday at 8:10pm</time></span>
				</div>
			</li>

			<li>
				<div class="author-thumb">
					<img src="images/author-page.jpg" alt="author" class="mCS_img_loaded">
				</div>
				<div class="notification-event">
					<span class="chat-message-item">Don’t worry Mathilda!</span>
					<span class="chat-message-item">I already bought everything</span>
					<span class="notification-date"><time class="entry-date updated" datetime="2004-07-24T18:18">Yesterday at 8:29pm</time></span>
				</div>
			</li>

			<li>
				<div class="author-thumb">
					<img src="images/avatar14-sm.jpg" alt="author" class="mCS_img_loaded">
				</div>
				<div class="notification-event">
					<span class="chat-message-item">Hi James! Please remember to buy the food for tomorrow! I’m gonna be handling the gifts and Jake’s gonna get the drinks</span>
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



<a class="back-to-top" href="#">
	<img src="svg-icons/back-to-top.svg" alt="arrow" class="back-icon">
</a>


<?php
	include ('footer.php');
?>
</body>
</html>
