<?php

//db connection -> $connection
require_once "../../admin/functions/db.php";

// Get the current page from URL (or default to 1)
$page = isset($_GET['page']) ? (int)$_GET['page'] : 1;
// Get the number of records per page from URL (or default to 10)
$limit = isset($_GET['limit']) ? (int)$_GET['limit'] : 10;
// Validate limit (must be at least 1 record per page)
$limit = max(1, $limit);


$slug = "";
// Check if the 'slug' query parameter is set
if (isset($_GET['slug'])) {
	$slug = htmlspecialchars($_GET['slug']); // Sanitize the slug for security

	// Get category name from slug 
	$sql = "SELECT * FROM blog_category WHERE slug = '$slug'";
	$query = mysqli_query($connection, $sql);
	$category_name = mysqli_fetch_array($query)['name'];



	// if category not found redirect to /blog
	if (!$category_name) {
		header("location: ../../blog/");
	} else {

		/* ----Pagination start---- */

		// Fetch data
		$sql = "SELECT id FROM blogs WHERE category = '$category_name' AND published_status = 1";
		$query = mysqli_query($connection, $sql);

		// total blogs
		$total_blogs = mysqli_num_rows($query);

		// Calculate total pages
		$total_pages = ceil($total_blogs / $limit);

		// Ensure the current page is within valid range
		$page = max(1, min($page, $total_pages));

		// Calculate the offset for the SQL query
		$offset = ($page - 1) * $limit;

		/* ----Pagination end---- */

		// Fetch all blog data from database

		// $sql = "SELECT * FROM blogs WHERE category = '$category_name' AND published_status = 1 ORDER BY published_date DESC LIMIT $limit OFFSET $offset";
		$sql = "SELECT * FROM blogs WHERE category = '$category_name' AND published_status = 1 ORDER BY published_date DESC ";
		$query = mysqli_query($connection, $sql);

		// if no blog is available for any category go to All Blog page
		if ($total_blogs == 0) {
			echo "<b style='color:brown;'>Sorry there are no Blog for this Category Yet 🙁 We will be uploading new content soon! </b> <a href='../../blog' class='text-decoration-none fs-5'><b>Go back to Blog</b></a> ";
			header("location: ../../blog/");
		}

		// echo var_dump($row);
	}
}


?>

<?php include("../../include/header.php") ?>
<!-- //custom-theme -->
<!-- <link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" /> -->
<!-- <link href="css/style.css" rel="stylesheet" type="text/css" media="all" /> -->
<!-- font-awesome-icons -->
<link href="css/font-awesome.css" rel="stylesheet">
<!-- //font-awesome-icons -->
<link href="//fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
<link href='//fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,600,600italic,700,700italic,800,800italic' rel='stylesheet' type='text/css'>
<link rel="stylesheet" href="../../css/bootstrap.min.css" />
<link rel="stylesheet" href="../../css/bootstrap.rtl.min.css" />
<link rel="stylesheet" href="../../css/custom.css" />
<link rel="stylesheet" href="../../css/responsive.css" />
<!-- ===========================main start================= -->


<!-- <section class="about-banner"> -->
<section class="blog-banner">
	<div class="container">
		<div class="row h-100">
			<div class="col-md-12 d-flex justify-content-center">
				<div class="blog-banner__content">
					<h1 class="blog-banner__title">Blog</h1>
					<p class="blog-banner__text">Dive into a world of knowledge with our curated articles, expert insights, and valuable resources designed to keep you informed and inspired.</p>
					<button class="primary-btn" data-bs-toggle="modal" data-bs-target="#exampleModal">Explore Now<span><img src="../../icons/primary-btn-arrow.svg" alt=""></span></button>
				</div>
			</div>
		</div>
	</div>
</section>

<section class="">
	<div class="container blog-list-section">
		<h2>Latest Post</h2>
		<div class="blog-category-list">
			<a href="../../blog" class="blog-category">All</a>
			<?php
			$category_sql = 'SELECT name, slug, active_status  FROM blog_category WHERE active_status = 1';
			$category_query = mysqli_query($connection, $category_sql);

			if (mysqli_num_rows($category_query) == 0) {
				echo "<b style='color:brown;'>Sorry there are no posts Yet :( We will be uploading new content soon! </b> ";
			} else {


				while ($row = mysqli_fetch_array($category_query)) {

			?>
					<a href="<?php echo $row['slug'] ?>" class="blog-category <?php echo  $slug == $row['slug'] ? 'active' : '' ?>"><?php echo $row['name'] ?></a>
			<?php
				}
			}
			?>
		</div>
		<div class="blog-list">
			<?php
			if ($total_blogs == 0) {
				echo "<b style='color:brown;'>Sorry there are no posts Yet :( We will be uploading new content soon! </b> ";
			} else {
				while ($row = mysqli_fetch_array($query)) {

					//publish date
					$date = explode("-", $row['published_date']);
					$monthNum  = $date[1];
					$dateObj   = DateTime::createFromFormat('!m', $monthNum);
					$monthName = $dateObj->format('F'); // Month name
			?>
					<div class="blog-card">
						<img src="../../uploads/blog/<?php echo $row['blog_image'] ?>" alt="" class="blog-card__img">
						<!-- <div class="blog-card__body"> -->
						<div class="d-flex gap-2">
							<div class="blog-card__category"><?php echo $row['category'] ?></div>
							<div class="blog-card__date">
								<span><img src="../../icons/calendar.svg" alt=""></span><?php echo substr($monthName, 0, 3) . " " . $date[2] . ", " . $date[0]  ?>
							</div>
						</div>

						<h3 class="blog-card__title">
							<!-- <a href="<?php echo '/flewny/blog/' . $row['slug'] ?>" class="" target="_blank"> -->
							<?php echo $row['title'] ?>
							<!-- </a> -->
						</h3>

						<div class="mt-auto">
							<a href="<?php echo '/flewny/blog/' . $row['slug'] ?>" class="blog-btn" target="_blank"><span class="blog-btn-txt">Read More </span><span class="blog-btn-icon"><img src="../../icons/btn-arrow.svg" alt=""></span></a>
						</div>
						<!-- </div> -->
						<div class="blog-card__cutout"></div>
					</div>
			<?php
				}
			}
			?>
		</div>
		<div class="d-flex justify-content-center mt-4 mt-md-5">
			<a href="#" class="blog-list__load-more">Load More</a>
		</div>
	</div>
</section>

<section class="container d-flex justify-content-center my-3 my-md-5">
	<div class="cta-section d-flex flex-column align-items-center">
		<h2>Unleashing Solutions, Mastering Challenges — Our Goal: Adding Value to Your Business!</h2>
		<button class="primary-btn primary-btn-white" data-bs-toggle="modal" data-bs-target="#exampleModal">Explore Now<span><img src="../../icons/primary-btn-arrow.svg" alt=""></span></button>
	</div>
</section>



<!-- js -->
<script src="../../js/bootstrap.js"></script>
<script type="text/javascript" src="js/jquery-2.1.4.min.js"></script>
<!-- //js -->

<!-- ===========================main end================= -->
<script src="../../js/custom.js"></script>
<?php include("../../include/footer.php") ?>