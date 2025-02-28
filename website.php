		<?php
		require_once "./admin/functions/db.php";
		include("./include/header.php")
		?>

		<head>
			<link rel="stylesheet" href="<?php echo $base; ?>css/website.css" />
		</head>
		<section class="hero-banner" id="home">
			<div class="container">
				<div class="hero" data-aos="fade-right" data-aos-delay="100">
					<strong>EXPERT SERVICES TO ELEVATE<br>YOUR BUSINESS <span class="circle">GROWTH</span></strong>
					<div class="hero2 container">
						<div class="row align-items-center">
							<!-- Left Content -->
							<div class="col-lg-5 text-start">
								<p class="mt-3 text-secondary">
									Boost your business with our expert digital solutions—web
									development, SEO, CRM, and UI/UX design tailored for
									growth and efficiency.
								</p>
								<button class="primary-btn" data-bs-toggle="modal" data-bs-target="#exampleModal" data-aos="zoom-in" data-aos-delay="400">Explore Now<span><img src="./icons/primary-btn-arrow.svg" alt=""></span></button>
							</div>

							<!-- Right Images -->
							<div class="col-lg-7">
								<div class="d-flex flex-wrap justify-content-center justify-content-lg-end gap-3 mt-4">
									<img src="./ASSETS/w1.jpg" class="img-fluid rounded-3 shadow-sm" alt="Image 1" width="120" data-aos="fade-up-left" data-aos-delay="100" style="border-radius: 1rem !important;">
									<img src="./ASSETS/w2.jpg" class="img-fluid rounded-3 shadow-sm" alt="Image 2" width="120" data-aos="fade-up-left" data-aos-delay="250" style=" border-radius: 1rem !important;">
									<img src="./ASSETS/w3.jpg" class="img-fluid rounded-3 shadow-sm" alt="Image 3" width="120" data-aos="fade-up-left" data-aos-delay="350" style=" border-radius: 1rem !important;">
									<img src="./ASSETS/w4.jpg" class="img-fluid rounded-3 shadow-sm" alt="Image 4" width="120" data-aos="fade-up-left" data-aos-delay="450" style=" border-radius: 1rem !important;">
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>

		<div class="container p-5 rounded-4" style="background-color: #EDEDED; border-radius: 40px; max-width: 1215px;">
			<h2 class="title" data-aos="fade-left" data-aos-delay="100">
				<span class="title-dark">OUR</span>
				<span class="title-purple">SERVICES</span>
			</h2>

			<div class="row row-cols-1 row-cols-md-2 row-cols-lg-4 rounded-4" style=" --bs-gutter-y: 25;">
				<div class="col" data-aos="zoom-in" data-aos-delay="300">
					<div class="service-card p-4 bg-white shadow-sm rounded-4 transition-hover">
						<div class="service-number">01</div>
						<h3 class="service-title">GOOGLE <br class="d-sm-none d-lg-block d-xl-none">ADS</h3>
						<div class="service-header d-flex justify-content-center my-3">
							<div class="service-icon">
								<img src="./ASSETS/fi_6745059.svg">
							</div>
						</div>
						<p class="service-description">Dive into a world of knowledge with our curated articles, expert insights, and valuable resources designed to keep you informed and inspired.</p>
					</div>
				</div>
				<div class="col" data-aos="zoom-in" data-aos-delay="500">
					<div class="service-card p-4 bg-white shadow-sm rounded-4 transition-hover">
						<div class="service-number">02</div>
						<h3 class="service-title">WEB DEVELOPMENT</h3>
						<div class="service-header d-flex justify-content-center my-3">
							<div class="service-icon">
								<img src="./ASSETS/Vector.svg">
							</div>
						</div>
						<p class="service-description">Dive into a world of knowledge with our curated articles, expert insights, and valuable resources designed to keep you informed and inspired.</p>
					</div>
				</div>
				<div class="col" data-aos="zoom-in" data-aos-delay="700">
					<div class="service-card p-4 bg-white shadow-sm rounded-4 transition-hover">
						<div class="service-number">03</div>
						<h3 class="service-title">CRM</h3>
						<div class="service-header d-flex justify-content-center my-3">
							<div class="service-icon">
								<img src="./ASSETS/Group.svg">
							</div>
						</div>
						<p class="service-description">Dive into a world of knowledge with our curated articles, expert insights, and valuable resources designed to keep you informed and inspired.</p>
					</div>
				</div>
				<div class="col" data-aos="zoom-in" data-aos-delay="900">
					<div class="service-card p-4 bg-white shadow-sm rounded-4 transition-hover">
						<div class="service-number">04</div>
						<h3 class="service-title">SEO</h3>
						<div class="service-header d-flex justify-content-center my-3">
							<div class="service-icon">
								<img src="./ASSETS/Vector1.svg">
							</div>
						</div>
						<p class="service-description">Dive into a world of knowledge with our curated articles, expert insights, and valuable resources designed to keep you informed and inspired.</p>
					</div>
				</div>
			</div>
		</div>


		<section class="choose-section">
			<div class="container ">
				<div class="row justify-content-between align-items-center mb-5">
					<div class="d-flex justify-content-between align-items-end" data-aos="fade-right" data-aos-delay="50">
						<h2><br>Why Choose <span>Flewny</span></h2>
					</div>
				</div>
				<div class="row row-cols-1 row-cols-md-2 row-cols-lg-4 g-3">
					<!-- Card 1 -->
					<div class="col" data-aos="zoom-in-left" data-aos-delay="200">
						<div class="choose-card first text-center flex-grow-1 border border-1 rounded-4">
							<div class="card-body">
								<h4 class="card-title mb-3">User-Centric Approach</h4>
								<p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
							</div>
							<div class="card-image position-relative  mx-auto">
								<img src="./ASSETS/Component16.png" alt="Review-Image" class="img">
							</div>
							<div class="plus-icon">
								<p>+</p>
							</div>
						</div>
					</div>

					<!-- Card 2 -->
					<div class="col" data-aos="zoom-in-left" data-aos-delay="300">
						<div class="choose-card text-center flex-grow-1 border border-1 rounded-4">
							<div class="card-body">
								<h4 class="card-title mb-3">Tailor-Made Solutions</h4>
								<p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
							</div>
							<div class="card-image position-relative mx-auto">
								<img src="./ASSETS/Component17.png" alt="Review Image" class="img">
							</div>
							<div class="plus-icon">
								<p>+</p>
							</div>
						</div>
					</div>

					<!-- Card 3 -->
					<div class="col" data-aos="zoom-in-left" data-aos-delay="400">
						<div class="choose-card text-center flex-grow-1 border border-1 rounded-4">
							<div class="card-body">
								<h4 class="card-title mb-3">Data-Driven Strategies</h4>
								<p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
							</div>
							<div class="card-image position-relative mx-auto">
								<img src="./ASSETS/Component18.png" alt="Review Image">
							</div>
							<div class="plus-icon">
								<p>+</p>
							</div>
						</div>
					</div>

					<!-- Card 4 -->
					<div class="col" data-aos="zoom-in-left" data-aos-delay="500">
						<div class="choose-card text-center flex-grow-1 border border-1 rounded-4">
							<div class="card-body">
								<h4 class="card-title mb-3">Secure & Reliable</h4>
								<p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
							</div>
							<div class="card-image position-relative mx-auto">
								<img src="./ASSETS/Component19.png" alt="Review Image" class="img">
							</div>
							<div class="plus-icon">
								<p>+</p>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>


		<div class="container" data-aos="zoom-in-up" data-aos-duration="1500">
			<div class="row justify-content-center">
				<div class="col-md-12">
					<div class="stats-container">
						<div class="stats-grid row">
							<?php
							$stats = [
								['number' => '68%', 'label' => 'Business Growth'],
								['number' => '10K+', 'label' => 'Interested People'],
								['number' => '20+', 'label' => 'Technology Stack'],
								['number' => '4.8+', 'label' => 'Top Rated in Google']
							];

							foreach ($stats as $stat) {
								echo '<div class="stat-item col-6 col-md-2">';
								echo '<div class="stat-number">' . $stat['number'] . '</div>';
								echo '<div class="stat-label">' . $stat['label'] . '</div>';
								echo '</div>';
							}
							?>
						</div>
					</div>
				</div>
			</div>
		</div>

		<div class="container  d-flex flex-wrap">
			<div class="container p-4 rounded-4" style="background-color: #AEEA17; border-radius: 20px; max-width: 350px;">
				<h1 class="text-center text-md-start" data-aos="zoom-in">TECHNOLOGY <br> WE USE</h1>
				<p class="text-center text-md-start" data-aos="zoom-in" data-aos-delay="250">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce egestas risus magna, vitae aliquam neque ultricies eu. Vestibulum eget felis elementum.</p>
				<button class="primary-btn1" data-bs-toggle="modal" data-bs-target="#exampleModal" data-aos="fade-up">Explore Now<span><img src="./icons/primary-btn-arrow.svg" alt=""></span></button>
			</div>
			<div class="container p-4 rounded-4 row row-cols-1 row-cols-md-3 row-cols-lg-4 " style="background-color: #EDEDED; border-radius: 20px; max-width: 750px;">
				<div class="buttons-wrapper row row-cols-1 row-cols-md-3 row-cols-lg-4 g-1">

					<div class="button-container d-flex flex-column align-items-center" data-aos="fade-left" data-aos-delay="100">
						<div class="icon-container d-flex align-items-center justify-content-center">
							<img src="./ASSETS/html.png" alt="HTML Icon">
						</div>
						<span class="button-text">HTML</span>
					</div>

					<div class="button-container d-flex flex-column align-items-center" data-aos="fade-left" data-aos-delay="400">
						<div class="icon-container d-flex align-items-center justify-content-center">
							<img src="./ASSETS/css.png" alt="CSS Icon">
						</div>
						<span class="button-text">CSS</span>
					</div>

					<div class="button-container d-flex flex-column align-items-center" data-aos="fade-left" data-aos-delay="700">
						<div class="icon-container d-flex align-items-center justify-content-center">
							<img src="./ASSETS/php.png" alt="PHP Icon">
						</div>
						<span class="button-text">PHP</span>
					</div>

					<div class="button-container d-flex flex-column align-items-center" data-aos="fade-left" data-aos-delay="100">
						<div class="icon-container d-flex align-items-center justify-content-center">
							<img src="./ASSETS/EXPRESSJS.png" alt="ExpressJS Icon">
						</div>
						<span class="button-text">ExpressJS</span>
					</div>

					<div class="button-container d-flex flex-column align-items-center" data-aos="fade-left" data-aos-delay="400">
						<div class="icon-container d-flex align-items-center justify-content-center">
							<img src="./ASSETS/flutter.png" alt="Flutter Icon">
						</div>
						<span class="button-text">Flutter</span>
					</div>

					<div class="button-container d-flex flex-column align-items-center" data-aos="fade-left" data-aos-delay="700">
						<div class="icon-container d-flex align-items-center justify-content-center">
							<img src="./ASSETS/sass.png" alt="SASS Icon">
						</div>
						<span class="button-text">SASS</span>
					</div>

					<div class="button-container d-flex flex-column align-items-center" data-aos="fade-left" data-aos-delay="100">
						<div class="icon-container d-flex align-items-center justify-content-center">
							<img src="./ASSETS/SQL.png" alt="SQL Icon">
						</div>
						<span class="button-text">SQL</span>
					</div>

					<div class="button-container d-flex flex-column align-items-center" data-aos="fade-left" data-aos-delay="400">
						<div class="icon-container d-flex align-items-center justify-content-center">
							<img src="./ASSETS/NEXTJS.png" alt="Next.js Icon">
						</div>
						<span class="button-text">Next.js</span>
					</div>

					<div class="button-container d-flex flex-column align-items-center" data-aos="fade-left" data-aos-delay="700">
						<div class="icon-container d-flex align-items-center justify-content-center">
							<img src="./ASSETS/REACTJS.png" alt="React Icon">
						</div>
						<span class="button-text">React</span>
					</div>

					<div class="button-container d-flex flex-column align-items-center" data-aos="fade-left" data-aos-delay="100">
						<div class="icon-container d-flex align-items-center justify-content-center">
							<img src="./ASSETS/NODEJS.png" alt="Node.js Icon">
						</div>
						<span class="button-text">Node.js</span>
					</div>

					<div class="button-container d-flex flex-column align-items-center" data-aos="fade-left" data-aos-delay="400">
						<div class="icon-container d-flex align-items-center justify-content-center">
							<img src="./ASSETS/mongodb.png" alt="MongoDB Icon">
						</div>
						<span class="button-text">MongoDB</span>
					</div>

					<div class="button-container d-flex flex-column align-items-center" data-aos="fade-left" data-aos-delay="700">
						<div class="icon-container d-flex align-items-center justify-content-center">
							<img src="./ASSETS/laravel.png" alt="Laravel Icon">
						</div>
						<span class="button-text">Laravel</span>
					</div>
				</div>
			</div>
		</div>


		<section class="trusted-partners-section" style="margin-top: 80px;">
			<div class="trusted-partners container">
				<div class="row">
					<div class="col-md-6 d-flex flex-column">
						<h2 class="trusted-partners__heading" data-aos="fade-right" data-aos-delay="100">Trusted Partnerships, Shared Goals</h2>
						<p class="trusted-partners__text" data-aos="zoom-out" data-aos-delay="450">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce egestas risus magna, vitae aliquam neque ultricies eu. Vestibulum eget felis elementum.</p>
						<div class="d-flex mt-auto pt-4">
							<div class="trusted-partners__number-wrapper">
								<p class="trusted-partners__number" data-aos="fade-right" data-aos-delay="500">50+</p>
								<p class="trusted-partners__number-text" data-aos="fade-right" data-aos-delay="650">Interested Clients</p>
							</div>
							<div class="" data-aos="fade-up" data-aos-delay="650">
								<img src="./img/green-circle.png" alt="" class="trusted-partners__number-wheel rotating">
							</div>
						</div>

					</div>
					<div class="col-md-6 mt-md-0 mt-4">
						<div class="trusted-partners__container" data-aos="zoom-in-up">
						</div>
					</div>
				</div>
			</div>
			<div class="trusted-partners">
			</div>
		</section>

		<section class="we-do-section">
			<div class="container">
				<div class="d-flex justify-content-between align-items-end">
					<div class="d-flex justify-content-between align-items-end" data-aos="zoom-out-left" data-aos-delay="100">
						<h2>Our Projects</h2>
					</div>
				</div>
				<div class="swiper mt-5 mt-md-6s proSwiper" data-aos="fade-left" data-aos-delay="300" data-aos-duration="1300">
					<!-- Additional required wrapper -->
					<div class="swiper-wrapper">
						<!-- Slides -->
						<div class="swiper-slide">
							<div class="pro first-card w-100">
								<div class="pro-content">
									<p class="pro-title">Project Name</p>
									<p class="pro-message">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
								</div>
								<div class="pro-image-box">
									<img src="./ASSETS/project.png" alt="project Image" class="img-fluid">
									<div class="pl-icon">
										<p>+</p>
									</div>
								</div>
							</div>
						</div>
						<div class="swiper-slide">
							<div class="pro first-card w-100">
								<div class="pro-content">
									<p class="pro-title">Project Name</p>
									<p class="pro-message">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
								</div>
								<div class="pro-image-box">
									<img src="./ASSETS/project.png" alt="project Image" class="img-fluid">
									<div class="pl-icon">
										<p>+</p>
									</div>
								</div>
							</div>
						</div>
						<div class="swiper-slide">
							<div class="pro first-card w-100">
								<div class="pro-content">
									<p class="pro-title">Project Name</p>
									<p class="pro-message">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
								</div>
								<div class="pro-image-box">
									<img src="./ASSETS/project.png" alt="project Image" class="img-fluid">
									<div class="pl-icon">
										<p>+</p>
									</div>
								</div>
							</div>
						</div>
						<div class="swiper-slide">
							<div class="pro first-card w-100">
								<div class="pro-content">
									<p class="pro-title">Project Name</p>
									<p class="pro-message">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
								</div>
								<div class="pro-image-box">
									<img src="./ASSETS/project.png" alt="project Image" class="img-fluid">
									<div class="pl-icon">
										<p>+</p>
									</div>
								</div>
							</div>
						</div>
						<div class="swiper-slide">
							<div class="pro first-card w-100">
								<div class="pro-content">
									<p class="pro-title">Project Name</p>
									<p class="pro-message">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
								</div>
								<div class="pro-image-box">
									<img src="./ASSETS/project.png" alt="project Image" class="img-fluid">
									<div class="pl-icon">
										<p>+</p>
									</div>
								</div>
							</div>
						</div>
						<div class="swiper-slide">
							<div class="pro first-card w-100">
								<div class="pro-content">
									<p class="pro-title">Project Name</p>
									<p class="pro-message">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
								</div>
								<div class="pro-image-box">
									<img src="./ASSETS/project.png" alt="project Image" class="img-fluid">
									<div class="pl-icon">
										<p>+</p>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>

		<section class="review-section">
			<div class="container">
				<div class="d-flex justify-content-between align-items-end">
					<h2>Real Stories, <br>Real <span>Results</span></h2>
					<div class="d-flex review-section__btns">
						<button class="swiper-btn-prev reviewBtn-prev"><img src="./icons/primary-btn-arrow.svg" alt=""></button>
						<button class="swiper-btn-next reviewBtn-next"><img src="./icons/primary-btn-arrow.svg" alt=""></button>
					</div>
				</div>
				<div class="swiper mt-3 mt-md-5s reviewSwiper">
					<!-- Additional required wrapper -->
					<div class="swiper-wrapper">
						<!-- Slides -->
						<div class="swiper-slide">
							<div class="review-card active">
								<p class="review-card-message ">
									Working with Flewny has been a complete game-changer for our business. Their expertise in web development and SEO not only boosted our online presence but also significantly improved our customer engagement. They took the time to understand our goals and delivered solutions that exceeded our expectations. We couldn’t be happier with the results.
								</p>
								<p class="review-card-user">– Samantha R., Marketing Manager</p>
								<p class="review-card-number">01</p>
								<div class="review-card__cutout"><img src="./icons/quote.svg" alt="" class="img-fluid"></div>
							</div>
						</div>
						<div class="swiper-slide">
							<div class="review-card">
								<p class="review-card-message">
									Working with Flewny has been a complete game-changer for our business. Their expertise in web development and SEO not only boosted our online presence but also significantly improved our customer engagement. They took the time to understand our goals and delivered solutions that exceeded our expectations. We couldn’t be happier with the results.
								</p>
								<p class="review-card-user">– Samantha R., Marketing Manager</p>
								<p class="review-card-number">02</p>
								<div class="review-card__cutout"><img src="./icons/quote.svg" alt="" class="img-fluid"></div>
							</div>
						</div>
						<div class="swiper-slide">
							<div class="review-card">
								<p class="review-card-message">
									Working with Flewny has been a complete game-changer for our business. Their expertise in web development and SEO not only boosted our online presence but also significantly improved our customer engagement. They took the time to understand our goals and delivered solutions that exceeded our expectations. We couldn’t be happier with the results.
								</p>
								<p class="review-card-user">– Samantha R., Marketing Manager</p>
								<p class="review-card-number">03</p>
								<div class="review-card__cutout"><img src="./icons/quote.svg" alt="" class="img-fluid"></div>
							</div>
						</div>
						<div class="swiper-slide">
							<div class="review-card">
								<p class="review-card-message">
									Working with Flewny has been a complete game-changer for our business. Their expertise in web development and SEO not only boosted our online presence but also significantly improved our customer engagement. They took the time to understand our goals and delivered solutions that exceeded our expectations. We couldn’t be happier with the results.
								</p>
								<p class="review-card-user">– Samantha R., Marketing Manager</p>
								<p class="review-card-number">04</p>
								<div class="review-card__cutout"><img src="./icons/quote.svg" alt="" class="img-fluid"></div>
							</div>
						</div>
						<div class="swiper-slide">
							<div class="review-card">
								<p class="review-card-message">
									Working with Flewny has been a complete game-changer for our business. Their expertise in web development and SEO not only boosted our online presence but also significantly improved our customer engagement. They took the time to understand our goals and delivered solutions that exceeded our expectations. We couldn’t be happier with the results.
								</p>
								<p class="review-card-user">– Samantha R., Marketing Manager</p>
								<p class="review-card-number">05</p>
								<div class="review-card__cutout"><img src="./icons/quote.svg" alt="" class="img-fluid"></div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>


		<!-- =================== connection section  end============== -->

		<?php include("./include/footer.php") ?>