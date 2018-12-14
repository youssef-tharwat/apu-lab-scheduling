@extends('layouts.app')
@section('content')

	<div class="home">
		<div class="home_background"></div>
		<div class="background_image background_city" style="background-image:url({{asset('images/city_2.png')}})"></div>
		<div class="cloud cloud_1"><img src="images/cloud.png" alt=""></div>
		<div class="cloud cloud_2"><img src="images/cloud.png" alt=""></div>
		<div class="cloud cloud_3"><img src="images/cloud.png" alt=""></div>
		<div class="cloud cloud_4"><img src="images/cloud.png" alt=""></div>
		<div class="home_container">
			<div class="container">
				<div class="row">
					<div class="col">
						<div class="home_content">
							<div class="home_title">About us</div>
							<div class="breadcrumbs">
								<ul class="d-flex flex-row align-items-center justify-content-start">
									<li><a href="index.html">Home</a></li>
									<li>About us</li>
								</ul>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<!-- Domain Search -->

	<div class="domain_search">
		<div class="container">
			<div class="row">
				<div class="col-lg-10 offset-lg-1">
					<div class="domain_search_form_container d-flex flex-column align-items-center justify-content-center">
						<form action="#" id="domain_search_form" class="domain_search_form d-flex flex-md-row flex-column align-items-center justify-content-start">
							<div class="d-flex flex-row align-items-center justify-content-start">
								<input type="text" class="domain_search_input" placeholder="yourdomain" required="required">
								<div class="domain_search_dropdown d-flex flex-row align-items-center justify-content-start">
									<i class="fa fa-chevron-down" aria-hidden="true"></i>
									<div class="domain_search_selected">.io</div>
									<ul>
										<li>.io</li>
										<li>.com</li>
										<li>.net</li>
									</ul>
								</div>
							</div>
							<button class="domain_search_button d-flex flex-row align-items-center justify-content-center"><img src="images/search.png" alt="">Search</button>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>

	<!-- Why Choose Us -->

	<div class="why">
		<div class="container">
			<div class="row">

				<!-- Why Choose Us Content -->
				<div class="col-lg-6 why_col magic_fade_in">
					<div class="section_title"><h2>Why Choose us?</h2></div>
					<div class="why_text">
						<p>Nullam lacinia ex eleifend orci porttitor, suscipit interdum augue condimentum. Etiam pretium turpis eget nibh laoreet iaculis. Nullam lacinia ex eleifend orci porttitor, suscipit interdum augue condimentum. Etiam pretium turpis eget nibh laoreet iaculis. Nullam lacinia ex eleifend orci porttitor, suscipit interdum augue condimentum. Etiam pretium turpis ege.</p>
					</div>
					<div class="why_list">
						<ul>
							<li class="d-flex flex-row align-items-center justify-content-start"><div></div>Etiam pretium turpis eget nibh laoreet iaculis</li>
							<li class="d-flex flex-row align-items-center justify-content-start"><div></div>Pretium turpis eget nibh laoreet iaculis</li>
							<li class="d-flex flex-row align-items-center justify-content-start"><div></div>Nullam lacinia ex eleifend orci porttitor, </li>
						</ul>
					</div>
				</div>

				<!-- Why Choose Us Image -->
				<div class="col-lg-6 why_col magic_fade_in">
					<div class="why_image"><img src="images/why.jpg" alt=""></div>
				</div>
			</div>
		</div>
	</div>

	<!-- Video -->

	<div class="video">
		<div class="parallax_background parallax-window" data-parallax="scroll" data-image-src="images/video.jpg" data-speed="0.8"></div>
		<div class="video_content d-flex flex-column align-items-center justify-content-center text-center">
			<div class="video_play_icon magic_fade_in">
				<a class="vimeo video_button d-flex flex-column align-items-center justify-content-center" href="https://player.vimeo.com/video/99340873?autoplay=1&loop=1&title=0&autopause=0"><i class="fa fa-play trans_200" aria-hidden="true"></i></a>
			</div>
			<div class="video_title magic_fade_in">See how life is in our company</div>
		</div>
	</div>

	<!-- Team -->

	<div class="team">
		<div class="container">
			<div class="row">
				<div class="col text-center magic_fade_in">
					<div class="section_title"><h2>Meet the Team</h2></div>
					<div class="section_text">
						<p>Nullam lacinia ex eleifend orci porttitor, suscipit interdum augue condimentum. Etiam pretium turpis eget nibh laoreet iaculis. Nullam lacinia ex eleifend orci porttitor, suscipit interdum augue condimentum. Etiam pretium turpis eget nibh laoreet iaculis.</p>
					</div>
				</div>
			</div>
			<div class="row team_row">

				<!-- Team Member -->
				<div class="col-xl-3 col-md-6 team_col magic_fade_in">
					<div class="team_item">
						<div class="team_image"><img src="images/team_1.jpg" alt=""></div>
						<div class="team_content">
							<div class="team_name"><a href="#">Michael Smith</a></div>
							<div class="team_title">Administrator</div>
						</div>
					</div>
				</div>

				<!-- Team Member -->
				<div class="col-xl-3 col-md-6 team_col magic_fade_in">
					<div class="team_item">
						<div class="team_image"><img src="images/team_2.jpg" alt=""></div>
						<div class="team_content">
							<div class="team_name"><a href="#">Jane Williams</a></div>
							<div class="team_title">Developer</div>
						</div>
					</div>
				</div>

				<!-- Team Member -->
				<div class="col-xl-3 col-md-6 team_col magic_fade_in">
					<div class="team_item">
						<div class="team_image"><img src="images/team_3.jpg" alt=""></div>
						<div class="team_content">
							<div class="team_name"><a href="#">Claudia Parker</a></div>
							<div class="team_title">Developer</div>
						</div>
					</div>
				</div>

				<!-- Team Member -->
				<div class="col-xl-3 col-md-6 team_col magic_fade_in">
					<div class="team_item">
						<div class="team_image"><img src="images/team_4.jpg" alt=""></div>
						<div class="team_content">
							<div class="team_name"><a href="#">James Black</a></div>
							<div class="team_title">Designer</div>
						</div>
					</div>
				</div>

			</div>
		</div>
	</div>

	<!-- Ads -->

	<div class="extra_section">
		<div class="container">
			<div class="row">
				<div class="col-lg-6 extra_col magic_fade_in">
					<div class="extra_container">
						<a href="#">
							<div class="extra_content extra_1 d-flex flex-column align-items-start justify-content-center">
								<div class="extra_icon"><img src="images/icon_10.svg" alt=""></div>
								<div class="extra_title"><span>30</span> Days money back guarantee</div>
								<div class="extra_text">
									<p>Nullam lacinia ex eleifend orci porttitor, suscipit inte rdum augue condimentum.</p>
								</div>
							</div>
						</a>
					</div>
				</div>
				<div class="col-lg-6 extra_col magic_fade_in">
					<div class="extra_container">
						<a href="#">
							<div class="extra_content extra_2 d-flex flex-column align-items-start justify-content-center">
								<div class="extra_icon"><img src="images/icon_11.svg" alt=""></div>
								<div class="extra_title"><span>Protect</span> Your Brand</div>
								<div class="extra_text">
									<p>Llacinia ex eleifend orci porttitor, suscipit inte rdum augue condimentum.</p>
								</div>
							</div>
						</a>
					</div>
				</div>
			</div>
		</div>
	</div>

	<!-- CTA -->

	<div class="cta">
		<div class="container">
			<div class="row">
				<div class="col">
					<div class="cta_content d-flex flex-lg-row flex-column align-items-center justify-content-lg-between justify-content-center magic_fade_in">
						<div class="cta_title">Start building your website now!</div>
						<div class="cta_price"><span>from</span>$9.90<span>/month</span></div>
						<div class="cta_button"><a href="#">Start Now</a></div>
					</div>
				</div>
			</div>
		</div>
	</div>

@endsection

