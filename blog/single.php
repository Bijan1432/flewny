<?php

require_once "../admin/functions/db.php";

// Default page content
$page_title = "Page Not Found";
$page_content = "<p>Sorry, the page you're looking for does not exist.</p>";
$slug = "";

// Check if the 'slug' query parameter is set
if (isset($_GET['slug'])) {
    $slug = htmlspecialchars($_GET['slug']); // Sanitize the slug for security

    $sql = "SELECT * FROM blogs WHERE slug = '$slug' AND published_status = 1";

    $query = mysqli_query($connection, $sql);

    //fetch blog data
    $blog = mysqli_fetch_array($query);

    if (!$blog) {
        http_response_code(404);
        // header("location: ../404.php");
    }

    //if blog not found redirect to /blog
    // if (!$blog) {
    // 	if (!isset($_SERVER['HTTPS']) || $_SERVER['HTTPS'] !== 'on') {
    // 		header("HTTP/1.1 301 Moved Permanently");
    // 		header("Location: ./");
    // 		} else {
    // 			header("HTTP/1.1 301 Moved Permanently");
    // 			header("Location: ./"); // Relative URL keeps the current HTTPS context
    // 		}
    // 		exit();
    // 			header("location: ./");
    // }

    // get Authors
    // $blog_author = $blog['published_by'];
    // $author_single_sql = "SELECT name, slug FROM blog_author WHERE name = '$blog_author'";
    // $author_single_query = mysqli_query($connection, $author_single_sql);
    // $author_slug =  mysqli_fetch_array($author_single_query)['slug'];
}

?>

<?php include("../include/header.php") ?>
<!-- //custom-theme -->
<!-- <link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" /> -->
<!-- <link href="css/style.css" rel="stylesheet" type="text/css" media="all" /> -->
<!-- font-awesome-icons -->
<link href="css/font-awesome.css" rel="stylesheet">
<!-- //font-awesome-icons -->
<link href="//fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
<link href='//fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,600,600italic,700,700italic,800,800italic' rel='stylesheet' type='text/css'>
<link rel="stylesheet" href="../css/bootstrap.min.css" />
<link rel="stylesheet" href="../css/bootstrap.rtl.min.css" />
<link rel="stylesheet" href="../css/custom.css" />
<link rel="stylesheet" href="../css/responsive.css" />
<!-- ===========================main contect start================= -->

<main class="blog-single-page">
    <section class="blog-single-banner">
        <div class="container">
            <img src="../uploads/blog/<?php echo $blog['blog_image'] ?>" class="blog-single-banner-img" alt=<?php echo $blog['blog_image_alt'] ?>>
            <h1 class="blog-single__heading"><?php echo $blog['title'] ?></h1>
        </div>
    </section>

    <section class="blog-single__wrapper container px-md-4">
        <div class="row">
            <div class="col-md-4 order-2 order-md-1 mt-4 mt-md-0 position-relative">
                <div class="blog-single__table-contents">
                    <h5 class="blog-single__table-contents__title">Table of Contents</h5>
                    <ul class="blog-single__table-contents__list">
                        <?php
                        $table_content = $blog['table_content'];
                        foreach (explode(", ", $table_content) as $item) {
                        ?>
                            <li class="blog-single__table-contents__item active"><?php echo $item ?></li>
                        <?php
                        }
                        ?>
                    </ul>
                </div>
            </div>
            <div class="col-md-8 order-1 order-md-2">
                <div class="blog-single__body">
                    <?php echo $blog['content'] ?>
                </div>
            </div>
        </div>
    </section>

    <!-- ===================blog section start============== -->
    <section class="blog-section-bg">
        <div class="container g-0">
            <div class="blog-section">
                <div class="d-flex justify-content-between align-items-center mb-3 mb-md-5 mt-2">
                    <h2>Recent blogs</h2>
                    <div class="d-flex">
                        <a href="./blog/" class="blog-section__load-more-btn d-none d-md-block">Load More</a>
                    </div>
                </div>
                <div class="blog-section__wrapper">
                    <?php
                    $sql_latest = 'SELECT title, category, blog_image, blog_image_alt, slug, published_date, published_status  FROM blogs WHERE published_status = 1 ORDER BY published_date DESC LIMIT 3';
                    $query_latest = mysqli_query($connection, $sql_latest);

                    if (mysqli_num_rows($query_latest) == 0) {
                        echo "<b style='color:brown;'>Sorry there are no posts Yet :( We will be uploading new content soon! </b> ";
                    } else {

                        while ($row = mysqli_fetch_array($query_latest)) {
                            //publish date
                            $date = explode("-", $row['published_date']);
                            $monthNum  = $date[1];
                            $dateObj   = DateTime::createFromFormat('!m', $monthNum);
                            $monthName = $dateObj->format('F'); // Month name
                    ?>
                            <div class="blog-card">
                                <img src="../uploads/blog/<?php echo $row['blog_image'] ?>" alt="<?php echo $row['blog_image_alt'] ?>" class="blog-card__img">
                                <div class="d-flex gap-2">
                                    <div class="blog-card__category"><?php echo $row['category'] ?></div>
                                    <div class="blog-card__date">
                                        <span><img src="../icons/calendar.svg" alt=""></span><?php echo substr($monthName, 0, 3) . " " . $date[2] . ", " . $date[0]  ?>
                                    </div>
                                </div>
                                <h3 class="blog-card__title">
                                    <!-- <a href="<?php echo '/flewny/blog/' . $row['slug'] ?>" class="" target="_blank"> -->
                                    <?php echo $row['title'] ?>
                                    <!-- </a> -->
                                </h3>
                                <div class="d-flex">
                                    <a href="<?php echo '/flewny/blog/' . $row['slug'] ?>" class="blog-btn" target="_blank"><span class="blog-btn-txt">Read More </span><span class="blog-btn-icon"><img src="../icons/btn-arrow.svg" alt=""></span></a>
                                </div>
                                <div class="blog-card__cutout"></div>
                            </div>
                    <?php
                        }
                    }
                    ?>

                    <!-- <div class="blog-card d-none d-md-flex">
                        <img src="./img/blog-img2.webp" alt="" class="blog-card__img">
                        <div class="d-flex gap-2">
                            <div class="blog-card__category">Digital Marketing</div>
                            <div class="blog-card__date">
                                <span><img src="./icons/calendar.svg" alt=""></span>Oct 17,2024
                            </div>
                        </div>
                        <h3 class="blog-card__title">Digital Marketing Company for Doctors in Kolkata </h3>
                        <div class="d-flex">
                            <a href="#" class="blog-btn"><span class="blog-btn-txt">Read More </span><span class="blog-btn-icon"><img src="./icons/btn-arrow.svg" alt=""></span></a>
                        </div>
                        <div class="blog-card__cutout"></div>
                    </div>

                    <div class="blog-card d-none d-md-flex">
                        <img src="./img/blog-img3.webp" alt="" class="blog-card__img">
                        <div class="d-flex gap-2">
                            <div class="blog-card__category">Digital Marketing</div>
                            <div class="blog-card__date">
                                <span><img src="./icons/calendar.svg" alt=""></span>Oct 17,2024
                            </div>
                        </div>
                        <h3 class="blog-card__title">Digital Marketing Company for Doctors in Kolkata </h3>
                        <div class="d-flex">
                            <a href="#" class="blog-btn"><span class="blog-btn-txt">Read More </span><span class="blog-btn-icon"><img src="./icons/btn-arrow.svg" alt=""></span></a>
                        </div>
                        <div class="blog-card__cutout"></div>
                    </div> -->
                </div>
            </div>
        </div>
    </section>
    <!-- ===================blog section end============== -->

    <!-- ===================achieve list start============== -->
    <section class="container d-flex justify-content-center my-4 my-md-5">
        <div class="cta-section d-flex flex-column align-items-center">
            <h2>Unleashing Solutions, Mastering Challenges — Our Goal: Adding Value to Your Business!</h2>
            <button class="primary-btn primary-btn-white" data-bs-toggle="modal" data-bs-target="#exampleModal">Explore Now<span><img src="<?php echo $base ?>/icons/primary-btn-arrow.svg" alt=""></span></button>
        </div>
    </section>
    <!-- ===================achieve list end============== -->

</main>


<!-- ===========================main contect end================= -->
<!-- js -->
<script src="../js/bootstrap.js"></script>
<script type="text/javascript" src="js/jquery-2.1.4.min.js"></script>
<!-- //js -->
<?php include("../include/footer.php") ?>