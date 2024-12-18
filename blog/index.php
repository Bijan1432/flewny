<!--
author: Ethredah
author URL: http://ethredah.github.io
-->

<?php
require_once "../admin/functions/db.php";

// Query to select all posts ordered by date in descending order
$sql = 'SELECT * FROM posts ORDER BY date DESC';

$query = mysqli_query($connection, $sql);
?>


<?php include("../include/header.php") ?>
<!-- //custom-theme -->
<!-- <link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" /> -->
<!-- <link href="css/style.css" rel="stylesheet" type="text/css" media="all" /> -->
<!-- js -->
<script type="text/javascript" src="js/jquery-2.1.4.min.js"></script>
<!-- //js -->
<!-- font-awesome-icons -->
<link href="css/font-awesome.css" rel="stylesheet">
<!-- //font-awesome-icons -->
<link href="//fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
<link href='//fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,600,600italic,700,700italic,800,800italic' rel='stylesheet' type='text/css'>
<link rel="stylesheet" href="../css/bootstrap.min.css" />
<link rel="stylesheet" href="../css/bootstrap.rtl.min.css" />
<link rel="stylesheet" href="../css/custom.css" />
<link rel="stylesheet" href="../css/responsive.css" />
<!-- ===========================main start================= -->


<!-- <section class="about-banner"> -->
<section class="blog-banner">
	<div class="container">
		<div class="row h-100">
			<div class="col-md-12 d-flex justify-content-center">
				<div class="blog-banner__content">
					<h1 class="blog-banner__title">Blog</h1>
					<p class="blog-banner__text">Dive into a world of knowledge with our curated articles, expert insights, and valuable resources designed to keep you informed and inspired.</p>
					<a href="" class="primary-btn"></a>
				</div>
			</div>
		</div>
	</div>
</section>

<section class="">
	<div class="container blog-list-section">
		<h2>Latest Post</h2>
		<div class="blog-category-list">
			<a href="#" class="blog-category active">All</a>
			<a href="#" class="blog-category">Google Ads</a>
			<a href="#" class="blog-category">Google Ads</a>
			<a href="#" class="blog-category">Google Ads</a>
			<a href="#" class="blog-category">Google Ads</a>
			<a href="#" class="blog-category">Google Ads</a>
		</div>
		<div class="blog-list">

			<div class="blog-card">
				<img src="../img/blog-img1.webp" alt="" class="blog-card__img">
				<div class="d-flex gap-2">
					<div class="blog-card__category">Digital Marketing</div>
					<div class="blog-card__date">
						<span><img src="../icons/calendar.svg" alt=""></span>Oct 17,2024
					</div>
				</div>
				<h3 class="blog-card__title">Digital Marketing Company for Doctors in Kolkata </h3>
				<div class="d-flex">
					<a href="#" class="blog-btn">Read More <span><img src="../icons/btn-arrow.svg" alt=""></span></a>
				</div>
				<div class="blog-card__cutout"></div>
			</div>
			
			<div class="blog-card">
				<img src="../img/blog-img2.webp" alt="" class="blog-card__img">
				<div class="d-flex gap-2">
					<div class="blog-card__category">Digital Marketing</div>
					<div class="blog-card__date">
						<span><img src="../icons/calendar.svg" alt=""></span>Oct 17,2024
					</div>
				</div>
				<h3 class="blog-card__title">Digital Marketing Company for Doctors in Kolkata </h3>
				<div class="d-flex">
					<a href="#" class="blog-btn">Read More <span><img src="../icons/btn-arrow.svg" alt=""></span></a>
				</div>
				<div class="blog-card__cutout"></div>
			</div>

			<div class="blog-card">
				<img src="../img/blog-img3.webp" alt="" class="blog-card__img">
				<div class="d-flex gap-2">
					<div class="blog-card__category">Digital Marketing</div>
					<div class="blog-card__date">
						<span><img src="../icons/calendar.svg" alt=""></span>Oct 17,2024
					</div>
				</div>
				<h3 class="blog-card__title">Digital Marketing Company for Doctors in Kolkata </h3>
				<div class="d-flex">
					<a href="#" class="blog-btn">Read More <span><img src="../icons/btn-arrow.svg" alt=""></span></a>
				</div>
				<div class="blog-card__cutout"></div>
			</div>

			<div class="blog-card">
				<img src="../img/blog-img4.webp" alt="" class="blog-card__img">
				<div class="d-flex gap-2">
					<div class="blog-card__category">Digital Marketing</div>
					<div class="blog-card__date">
						<span><img src="../icons/calendar.svg" alt=""></span>Oct 17,2024
					</div>
				</div>
				<h3 class="blog-card__title">Digital Marketing Company for Doctors in Kolkata </h3>
				<div class="d-flex">
					<a href="#" class="blog-btn">Read More <span><img src="../icons/btn-arrow.svg" alt=""></span></a>
				</div>
				<div class="blog-card__cutout"></div>
			</div>

			<div class="blog-card">
				<img src="../img/blog-img5.webp" alt="" class="blog-card__img">
				<div class="d-flex gap-2">
					<div class="blog-card__category">Digital Marketing</div>
					<div class="blog-card__date">
						<span><img src="../icons/calendar.svg" alt=""></span>Oct 17,2024
					</div>
				</div>
				<h3 class="blog-card__title">Digital Marketing Company for Doctors in Kolkata </h3>
				<div class="d-flex">
					<a href="#" class="blog-btn">Read More <span><img src="../icons/btn-arrow.svg" alt=""></span></a>
				</div>
				<div class="blog-card__cutout"></div>
			</div>

			<div class="blog-card">
				<img src="../img/blog-img1.webp" alt="" class="blog-card__img">
				<div class="d-flex gap-2">
					<div class="blog-card__category">Digital Marketing</div>
					<div class="blog-card__date">
						<span><img src="../icons/calendar.svg" alt=""></span>Oct 17,2024
					</div>
				</div>
				<h3 class="blog-card__title">Digital Marketing Company for Doctors in Kolkata </h3>
				<div class="d-flex">
					<a href="#" class="blog-btn">Read More <span><img src="../icons/btn-arrow.svg" alt=""></span></a>
				</div>
				<div class="blog-card__cutout"></div>
			</div>

			<div class="blog-card">
				<img src="../img/blog-img1.webp" alt="" class="blog-card__img">
				<div class="d-flex gap-2">
					<div class="blog-card__category">Digital Marketing</div>
					<div class="blog-card__date">
						<span><img src="../icons/calendar.svg" alt=""></span>Oct 17,2024
					</div>
				</div>
				<h3 class="blog-card__title">Digital Marketing Company for Doctors in Kolkata </h3>
				<div class="d-flex">
					<a href="#" class="blog-btn">Read More <span><img src="../icons/btn-arrow.svg" alt=""></span></a>
				</div>
				<div class="blog-card__cutout"></div>
			</div>

			<div class="blog-card">
				<img src="../img/blog-img1.webp" alt="" class="blog-card__img">
				<div class="d-flex gap-2">
					<div class="blog-card__category">Digital Marketing</div>
					<div class="blog-card__date">
						<span><img src="../icons/calendar.svg" alt=""></span>Oct 17,2024
					</div>
				</div>
				<h3 class="blog-card__title">Digital Marketing Company for Doctors in Kolkata </h3>
				<div class="d-flex">
					<a href="#" class="blog-btn">Read More <span><img src="../icons/btn-arrow.svg" alt=""></span></a>
				</div>
				<div class="blog-card__cutout"></div>
			</div>

			<div class="blog-card">
				<img src="../img/blog-img1.webp" alt="" class="blog-card__img">
				<div class="d-flex gap-2">
					<div class="blog-card__category">Digital Marketing</div>
					<div class="blog-card__date">
						<span><img src="../icons/calendar.svg" alt=""></span>Oct 17,2024
					</div>
				</div>
				<h3 class="blog-card__title">Digital Marketing Company for Doctors in Kolkata </h3>
				<div class="d-flex">
					<a href="#" class="blog-btn">Read More <span><img src="../icons/btn-arrow.svg" alt=""></span></a>
				</div>
				<div class="blog-card__cutout"></div>
			</div>

		</div>
		<div class="d-flex justify-content-center mt-5">
			<a href="#" class="blog-list__load-more">Load More</a>
		</div>
	</div>
</section>

<section class="container d-flex justify-content-center my-3 my-md-5">
	<div class="cta-section d-flex flex-column align-items-center">
		<h2>Unleashing Solutions, Mastering Challenges — Our Goal: Adding Value to Your Business!</h2>
		<a href="#" class="blog-btn">Explore Now<span><img src="../icons/btn-arrow.svg" alt=""></span></a>
	</div>
</section>



<!-- <section class="blog p-top p-bot">
	<div class="container">

		<?php
		if (mysqli_num_rows($query) == 0) {
			echo '	<div class="row"><div class="col-md-12"><b style="color:brown;">Sorry, there are no posts yet :( We will be uploading new content soon!</b>
	</div><div class="d-none">';
		} else {
			$first_post = mysqli_fetch_array($query);
			echo '	<div class="row">';
		}

		?>
		<div class="col-md-4">
			<div class="date">
				<span>DATE - </span> <?php echo $first_post['date']; ?>
			</div>
			<h2 class="blog-main">
				<?php echo $first_post['title']; ?>
			</h2>

			<div class="author">
				<div class="auth_img">
					<img src="../img/logo.jpg" class="img-fluid" />
				</div> by <?php echo $first_post['author']; ?>
			</div>

		</div>
		<div class="col-md-7">
			<div class="blog-main-big-img ">

				<img src="../uploads/<?php echo $first_post['image_path']; ?>" class="img-fluid" />
				<a href="<?php echo str_replace(' ', '-', $first_post['title']); ?>?id=<?php echo $first_post['id']; ?>" class="big-blog-btn">
					<- </a>
			</div>
		</div>

	</div>
	</div>
</section> -->

<!-- <div class="container">
	<div class="row">
		<div class="col-md-12">
			<div class="line-blog"></div>
		</div>
	</div>
</div> -->

<!-- <section class="blog-list p-top p-bot">
	<div class="container">
		<div class="row">
			<?php
			if (mysqli_num_rows($query) == 0) {
				echo "<b style='color:brown;'>Sorry there are no posts Yet :( We will be uploading new content soon! </b> ";
			} else {

				while ($row = mysqli_fetch_array($query)) {

					echo
					'<div class="col-md-4">

				<div class="blog-card">
					<div class="date">
						<span>DATE - </span>  ' . $row["date"] . '
					</div>
					<div class="blog-img">
						<img src="../uploads/' . htmlspecialchars($row["image_path"]) . '" class="img-fluid" />

					</div>
					<div class="blog-content">
						<h2>
							' . $row["title"] . '

						</h2>
						<a href="' . str_replace(' ', '-', $row['title']) . '?id=' . $row["id"] . '" class="btn btn-primary">Read More</a>
					</div>
				</div>
			</div>
					
					';
				}
			}
			?>

		</div>
	</div>
</section> -->





<script src="../js/bootstrap.js"></script>

<script src="../js/bootstrap.js"></script>

<script src="../js/custom.js"></script>
<?php include("../include/footer.php") ?>