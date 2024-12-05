<?php

require_once "admin/functions/db.php";

if (isset($_GET['id'])) {
    $postid = $_GET['id'];

    $sql = "SELECT * FROM posts WHERE id='$postid'";
    $query = mysqli_query($connection, $sql);

    $sql2 = "SELECT * FROM comments WHERE blogid=$postid";
    $query2 = mysqli_query($connection, $sql2);
} else {
    header('Location:blog.php');
}

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



<main>
    <?php
    $first_post = mysqli_fetch_array($query);
    ?>
    <section class="blog-full-banner">
        <img src="../uploads/<?php echo $first_post['image_path']; ?>" class="img-fluid" alt="">
        <div class="author">
            <div class="auth_img">
                <img src="../img/logo.jpg" class="img-fluid" />
            </div> by <?php echo $first_post['author']; ?>
        </div>
    </section>
    <section class="blog-content p-top">
        <div class="container">
            <div class="row">
                <div class="col-md-8 mx-auto">
                    <h1 class="blog-title"><?php echo $first_post['title']; ?></h1>
                    <div class="date">
                        <span>DATE - </span> <?php echo $first_post['date']; ?>
                    </div>
                    <div class="mt-5"> <?php echo $first_post['content']; ?></div>
                </div>
            </div>
        </div>
    </section>



</main>


<!-- ===========================main contect end================= -->


<script src="../js/bootstrap.js"></script>

<script src="../js/bootstrap.js"></script>

<script src="../js/custom.js"></script>
<?php include("../include/footer.php") ?>