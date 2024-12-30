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


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <title>Latest Digital Marketing Trends & Tips | Marko & Brando's Blog</title>
    <meta name="description" content="Explore the latest in digital marketing, branding, and business strategies with Marko & Brando's blog. Stay updated with industry insights, tips, and expert advice to elevate your brand.">
    <link rel="canonical" href="https://www.markobrando.com/blog/" />

    <!-- Google Tag Manager -->
    <script>
        (function(w, d, s, l, i) {
            w[l] = w[l] || [];
            w[l].push({
                'gtm.start': new Date().getTime(),
                event: 'gtm.js'
            });
            var f = d.getElementsByTagName(s)[0],
                j = d.createElement(s),
                dl = l != 'dataLayer' ? '&l=' + l : '';
            j.async = true;
            j.src =
                'https://www.googletagmanager.com/gtm.js?id=' + i + dl;
            f.parentNode.insertBefore(j, f);
        })(window, document, 'script', 'dataLayer', 'GTM-P3RB63QT');
    </script>
    <!-- End Google Tag Manager -->


    <link rel="icon" type="image/png" href="../../asset/image/fav.ico" />

    <!-- Custom CSS -->
    <link rel="stylesheet" href="../../css/style.css" />

    <!-- Bootstrap CSS  -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <!-- Add the slick-theme.css if you want default styling -->
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css" />
    <!-- Add the slick-theme.css if you want default styling -->
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick-theme.css" />
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />

    <!-- Google tag (gtag.js) -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-B58TPGBRND"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());

        gtag('config', 'G-B58TPGBRND');
    </script>


    <script type="application/ld+json">
        {
            "@context": "https://schema.org/",
            "@type": "BreadcrumbList",
            "itemListElement": [{
                "@type": "ListItem",
                "position": 1,
                "name": "Home",
                "item": "https://www.markobrando.com/"
            }, {
                "@type": "ListItem",
                "position": 2,
                "name": "Blog",
                "item": "https://www.markobrando.com/blog"
            }]
        }
    </script>

</head>

<body>
    <!-- Google Tag Manager (noscript) -->
    <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-P3RB63QT" height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
    <!-- End Google Tag Manager (noscript) -->

    <?php include '../../include/header.php'; ?>

    <div class="servicebanner">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="servheading">
                        <h1>BLOG</h1>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="bradcrum">
        <div class="dradvrmbx">
            <div class="bradbxone">
                <i class="fa-solid fa-house"></i>
                <span class="ms-2"><a href="/">Home</a></span>
            </div>
            <div class="bradbxone">
                <i class="fa-regular fa-circle"></i>
                <span class="ms-2"><a href="/blog">Blog</a></span>
            </div>
        </div>
    </div>

    <!-- Service Banner section end -->

    <!-- Blog cover section start -->

    <div class="blogcover">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="bloggridbx">
                        <div class="bloggingsecone">
                            <?php
                            if (isset($_GET["deleted"])) {
                                echo
                                '<div class="alert alert-warning" >
                                              <a href="#" class="close" data-dismiss="alert" aria-label="close"></a>
                                             <strong>DELETED!! </strong><p> The comment has been successfully deleted.</p>
                                        </div>';
                            } elseif (isset($_GET["del_error"])) {
                                echo
                                '<div class="alert alert-danger" >
                                              <a href="#" class="close" data-dismiss="alert" aria-label="close"></a>
                                             <strong>ERROR!! </strong><p> There was an error during deleting this record. Please try again.</p>
                                        </div>';
                            }
                            ?>

                            <div class="blogcrdgrid">

                                <?php


                                while ($row = mysqli_fetch_array($query)) {

                                    //publish date
                                    $date = explode("-", $row['published_date']);
                                    $monthNum  = $date[1];
                                    $dateObj   = DateTime::createFromFormat('!m', $monthNum);
                                    $monthName = $dateObj->format('F'); // Month
                                ?>
                                    <div class="blogcrdprntbx">
                                        <div class="blogcrdhead">
                                            <img src="../../asset/image/blog/<?php echo $row['blog_image'] ?>" width="402" height="269" alt="" />
                                        </div>
                                        <div class="blogcrdbody">
                                            <div class="bgtolbling">
                                                <div class="blogdate">
                                                    <p><?php echo $monthName . " " . $date[2] . ", " . $date[0]  ?></p>
                                                </div>
                                                <div>
                                                    <p class="tagmanblog"><?php echo $row['category'] ?></p>
                                                </div>
                                            </div>

                                            <div class="blogsndsec">
                                                <a href=<?php echo '/blog/' . $row['slug'] ?>>
                                                    <h5><?php echo $row['title'] ?></h5>
                                                </a>

                                                <p><?php echo $row['intro'] ?></p>
                                            </div>

                                            <div class="lernmpreb">
                                                <a href=<?php echo '/blog/' . $row['slug'] ?>>
                                                    <p>LEARN MORE</p>
                                                </a>
                                            </div>
                                        </div>
                                    </div>

                                <?php
                                }

                                ?>
                            </div>
                            <div class="paginationbxcover d-none">
                                <div class="container">
                                    <div class="row">
                                        <div class="pagibx">
                                            <a href="./<?php $slug ?>?page=<?php echo $page - 1; ?>&limit=<?php echo $limit; ?>">
                                                <div class="pagibtns"><i class="fa-solid fa-chevron-left"></i></div>
                                            </a>
                                            <!-- <a href="./?page=<?php //echo $page + 1; 
                                                                    ?>&limit=<?php //echo $limit; 
                                                                                ?>">
                                                    <div class="pagibtns acti">01</div>
                                                </a>
                                                <a href=./?page=2&limit=20>
                                                    <div class="pagibtns">02</div>
                                                </a>

                                                <div class="pagibtns">03</div> -->

                                            <a href="./<?php $slug ?>?page=<?php echo $page + 1; ?>&limit=<?php echo $limit; ?>">
                                                <div class="pagibtns">
                                                    <i class="fa-solid fa-chevron-right"></i>
                                                </div>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="bloggingsectwo">
                            <!-- <div class="surchbx">
                                <input type="search" placeholder="SEARCH HERE..">
                            </div> -->

                            <div class="latestpostbx mt-0">
                                <div class="latestpothead">LATEST POSTS</div>
                                <div class="latestpotbody">

                                    <?php
                                    $sql_latest = 'SELECT title, blog_image, slug, published_status  FROM blogs WHERE published_status = 1 ORDER BY published_date DESC LIMIT 4';
                                    $query_latest = mysqli_query($connection, $sql_latest);

                                    if (mysqli_num_rows($query_latest) == 0) {
                                        echo "<b style='color:brown;'>Sorry there are no posts Yet :( We will be uploading new content soon! </b> ";
                                    } else {


                                        while ($row = mysqli_fetch_array($query_latest)) {

                                    ?>

                                            <a href=<?php echo './' . $row['slug'] ?> style="text-decoration: none;">
                                                <div class="latestpbx">
                                                    <div class="latespotimg">
                                                        <img src="../../asset/image/blog/<?php echo $row['blog_image'] ?>" width="60" height="56" alt="" />
                                                    </div>
                                                    <div class="latespottext">
                                                        <?php echo $row['title'] ?>
                                                    </div>

                                                </div>
                                            </a>
                                    <?php
                                        }
                                    }
                                    ?>

                                </div>
                            </div>

                            <div class="categorybx">
                                <div class="categoryhead">CATEGORIES</div>
                                <div class="categorybody">
                                    <div class="categorypbx">
                                        <?php
                                        $category_sql = 'SELECT name, slug, active_status  FROM blog_category WHERE active_status = 1';
                                        $category_query = mysqli_query($connection, $category_sql);

                                        if (mysqli_num_rows($category_query) == 0) {
                                            echo "<b style='color:brown;'>Sorry there are no posts Yet :( We will be uploading new content soon! </b> ";
                                        } else {


                                            while ($row = mysqli_fetch_array($category_query)) {

                                        ?>
                                                <a href=<?php echo './' . $row['slug'] ?> style="text-decoration: none;">
                                                    <div class="categorytextdtl"><?php echo $row['name'] ?></div>
                                                </a>
                                        <?php

                                            }
                                        }
                                        ?>
                                    </div>
                                </div>
                            </div>
                            <div class="categorybx">
                                <div class="categoryhead">AUTHOR</div>
                                <div class="categorybody">
                                    <div class="categorypbx">
                                        <?php
                                        $author_sql = 'SELECT name, slug, active_status  FROM blog_author WHERE active_status = 1';
                                        $author_query = mysqli_query($connection, $author_sql);

                                        if (mysqli_num_rows($author_query) == 0) {
                                            echo "<b style='color:brown;'>Sorry there are no Author to show :( We will be uploading new content soon! </b> ";
                                        } else {


                                            while ($row = mysqli_fetch_array($author_query)) {

                                        ?>
                                                <a href=<?php echo '/blog/author/' . $row['slug'] ?> style="text-decoration: none;">
                                                    <div class="categorytextdtl"><?php echo $row['name'] ?></div>
                                                </a>
                                        <?php

                                            }
                                        }
                                        ?>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Blog cover section end -->



    <div class="client pt-5">
        <div class="container pt-5">
            <div class="row justify-content-center">
                <div class="col-md-5">
                    <div class="heading text-center">
                        <span>Empowering 200+ Brands Digitally</span>
                        <h2>Start Your Journey</h2>
                    </div>
                </div>

                <div class="col-md-12">
                    <div class="clientbx posticlint" data-aos="fade-up" data-aos-duration="1000">
                        <div class="row align-items-center">
                            <div class="col-4 col-md-2">
                                <div class="clinte-heading">
                                    <!-- <h3>
                    Becoming a partner with us means joining a innovation.
                  </h3> -->

                                    <h3>Trusted By</h3>
                                    <p>
                                        <span>200+ Clients</span>
                                    </p>
                                </div>
                            </div>
                            <div class="col-8 col-md-10">
                                <div class="toolbxtwo">
                                    <div class="toolbxtwotwo" dir="rtl">
                                        <div class="tool">
                                            <img src="../../asset/image/1.webp" width="150" height="50" alt="" />
                                        </div>
                                        <div class="tool">
                                            <img src="../../asset/image/2.webp" width="150" height="50" alt="" />
                                        </div>
                                        <div class="tool">
                                            <img src="../../asset/image/3.webp" width="150" height="50" alt="" />
                                        </div>
                                        <div class="tool">
                                            <img src="../../asset/image/4.0.webp" width="150" height="50" alt="" />
                                        </div>
                                        <div class="tool">
                                            <img src="../../asset/image/5.webp" width="150" height="50" alt="" />
                                        </div>
                                        <div class="tool">
                                            <img src="../../asset/image/6.webp" width="150" height="50" alt="" />
                                        </div>
                                        <div class="tool">
                                            <img src="../../asset/image/7.webp" width="150" height="50" alt="" />
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


    <?php include '../../include/footer.php'; ?>