<?php

ob_start();
require_once "functions/db.php";

// Initialize the session

session_start();

// If session variable is not set it will redirect to login page

if (!isset($_SESSION['email']) || empty($_SESSION['email'])) {

    header("location: login.php");

    exit;
}

$email = $_SESSION['email'];

/* Pgaination code start */

// Get the current page from URL (or default to 1)
$page = isset($_GET['page']) ? (int)$_GET['page'] : 1;
// Get the number of records per page from URL (or default to 10)
// $limit = isset($_GET['limit']) ? (int)$_GET['limit'] : 10;
$limit = 10;
// Validate limit (must be at least 1 record per page)
$limit = max(1, $limit);

// Fetch data
// $sql = 'SELECT id, title, intro, blog_image, category, slug, published_date, published_status  FROM blogs WHERE published_status = 1 ORDER BY published_date DESC ';
$sql = 'SELECT id FROM blogs';
$query = mysqli_query($connection, $sql);

// total blogs
$total_blogs = mysqli_num_rows($query);

// Calculate total pages
$total_pages = ceil($total_blogs / $limit);

// Ensure the current page is within valid range
$page = max(1, min($page, $total_pages));

// Calculate the offset for the SQL query
$offset = ($page - 1) * $limit;

/* Pgaination code end */

// Fetch data from database
$sql = "SELECT * FROM blogs ORDER BY published_date DESC LIMIT $limit OFFSET $offset";
$query = mysqli_query($connection, $sql);



?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" type="image/png" href="../asset/image/fav.ico" />
    <title>Marko & Brando Admin</title>
    <!-- Bootstrap Core CSS -->
    <link href="bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="./plugins/bower_components/bootstrap-extension/css/bootstrap-extension.css" rel="stylesheet">
    <!-- Menu CSS -->
    <link href="./plugins/bower_components/sidebar-nav/dist/sidebar-nav.min.css" rel="stylesheet">
    <!-- morris CSS -->
    <link href="./plugins/bower_components/morrisjs/morris.css" rel="stylesheet">
    <!-- animation CSS -->
    <link href="css/animate.css" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="css/style.css" rel="stylesheet">
    <!-- color CSS -->
    <link href="css/colors/blue.css" id="theme" rel="stylesheet">
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
<![endif]-->
</head>

<body>
    <!-- Preloader -->
    <div class="preloader">
        <div class="cssload-speeding-wheel"></div>
    </div>
    <div id="wrapper">
        <!-- Navigation -->
        <?php include "include/navigation.php" ?>
        <!-- Navigation end-->

        <!-- Left navbar-header -->
        <?php include "include/sidebar.php" ?>
        <!-- Left navbar-header end -->

        <!-- Page Content -->
        <div id="page-wrapper">
            <div class="container-fluid">
                <div class="row bg-title">
                    <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
                        <h4 class="page-title"><?php echo $email; ?></h4>

                    </div>
                    <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
                        <ol class="breadcrumb">
                            <li><a href="index.php">Dashboard</a></li>
                            <li class="active">Blogs</li>
                        </ol>
                    </div>
                </div>
                <!-- row -->
                <div class="row">
                    <!-- Left sidebar -->
                    <div class="col-md-12">
                        <div class="white-box">
                            <!-- row -->
                            <div class="row">

                                <div class="col-lg-12 col-md-9 col-sm-12 col-xs-12 mail_listing">
                                    <div class="inbox-center">
                                        <?php
                                        if (isset($_GET['posted'])) {
                                            echo '<div class="alert alert-success" >
                                                                   <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                                                                   <strong>DONE!! </strong><p> Your new blog has been successfully uploaded.</p>
                                                                   </div>';
                                        } elseif (isset($_GET["updated"])) {
                                            echo '<div class="alert alert-success" >
                                                                   <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                                                                   <strong>DONE!! </strong><p> Your blog has been successfully edited.</p>
                                                                   </div>';
                                        } elseif (isset($_GET["deleted"])) {
                                            echo
                                            '<div class="alert alert-warning" >
                                                                  <a href="#" class="close" data-dismiss="alert" aria-label="close"></a>
                                                                 <strong>DELETED!! </strong><p> The Blog Post has been successfully deleted.</p>
                                                            </div>';
                                        } elseif (isset($_GET["del_error"])) {
                                            echo
                                            '<div class="alert alert-danger" >
                                                                  <a href="#" class="close" data-dismiss="alert" aria-label="close"></a>
                                                                 <strong>ERROR!! </strong><p> There was an error during deleting this record. Please try again.</p>
                                                            </div>';
                                        }
                                        ?>

                                        <div class="">
                                            <h4>Recent Blog Posts (<b style="color: orange;"><?php echo $total_blogs; ?></b>)</h4>
                                            <?php
                                            if (mysqli_num_rows($query) == 0) {
                                                echo "<i style='color:brown;'>No Posts Yet :( Upload Company's first blog post today! </i> ";
                                            }
                                            ?>
                                        </div>

                                        <table class="table table-hover">


                                            <thead>
                                                <tr>
                                                    <th>
                                                        <h4>ID</h4>
                                                    </th>
                                                    <th>
                                                        <h4>Title</h4>
                                                    </th>
                                                    <th>
                                                        <h4>Published Date</h4>
                                                    </th>
                                                    <th>
                                                        <h4>Blog status</h4>
                                                    </th>
                                                    <th>
                                                        <h4>Action</h4>
                                                    </th>
                                                </tr>
                                            </thead>

                                            <tbody>
                                                <?php
                                                $i = 1;
                                                while ($row = mysqli_fetch_array($query)) {
                                                ?>
                                                    <tr>
                                                        <td class="hidden-xs"> <?php echo $i ?> </td>
                                                        <td class="hidden-xs"> <a href=<?php echo '/blog/' . $row["slug"] ?> target="_blank"><?php echo $row["title"] ?></a> </td>
                                                        <td class="hidden-xs"> <?php echo $row["published_date"] ?> </td>
                                                        <td class="hidden-xs"> <?php echo $row["published_status"] == 1 ? 'Active' : 'inactive' ?> </td>
                                                        <td class="hidden-xs d-flex align-items-center">
                                                            <a href="./blog-edit.php?id=<?php echo $row["id"] ?>"><i class="ti-pencil p-2 mr-2 text-primary align-middle h3" data-toggle="tooltip" data-placement="bottom" title="Edit"></i></a>
                                                            <a href="javascript:void(0)" type="button" class="" data-toggle="modal" data-target="#exampleModalCenter" data-id="<?php echo $row["id"] ?>">
                                                                <i class="ti-trash p-2 text-danger align-middle h3" data-toggle="tooltip" data-placement="bottom" title="delete"></i>
                                                            </a>

                                                        </td>
                                                    </tr>

                                                <?php
                                                    $i++;
                                                }
                                                ?>

                                            </tbody>
                                        </table>
                                    </div>
                                    <div class=" row align-items-center">
                                        <div class="col-xs-7 m-t-20"> Showing 1 - <?php echo $total_blogs ?> </div>
                                        <div class="col-xs-5 m-t-20">
                                            <div class="btn-group pull-right">
                                                <a href="./blogs.php?page=<?php echo $page - 1; ?>&limit=<?php echo $limit; ?>" class="btn btn-default waves-effect"><i class="fa fa-chevron-left"></i></a>
                                                <a href="./blogs.php?page=<?php echo $page + 1; ?>&limit=<?php echo $limit; ?>" class="btn btn-default waves-effect"><i class="fa fa-chevron-right"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- /.row -->
                        </div>
                    </div>
                </div>
                <!-- /.row -->

            </div>
            <!-- /.container-fluid -->
            <?php include "include/page-content/footer.php" ?>
        </div>
        <!-- .right-sidebar -->
        <?php include "include/right-sidebar.php" ?>
        <!-- /.right-sidebar -->
        <!-- /#page-wrapper -->
    </div>
    <!-- /#wrapper -->

    <!-- Modal -->
    <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header d-flex">
                    <h5 class="modal-title text-danger h3" id="exampleModalLongTitle">Warning !</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    Do you want to Delete this blog ?
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">No</button>
                    <a id="selectedBlog" href="" type="button" class="btn btn-primary">Yes</a>
                </div>
            </div>
        </div>
    </div>

    <!-- ------------------- -->
    <!-- jQuery -->
    <script src="./plugins/bower_components/jquery/dist/jquery.min.js"></script>
    <!-- Bootstrap Core JavaScript -->
    <script src="bootstrap/dist/js/tether.min.js"></script>
    <script src="bootstrap/dist/js/bootstrap.min.js"></script>
    <script src="./plugins/bower_components/bootstrap-extension/js/bootstrap-extension.min.js"></script>
    <!-- Menu Plugin JavaScript -->
    <script src="./plugins/bower_components/sidebar-nav/dist/sidebar-nav.min.js"></script>
    <!--slimscroll JavaScript -->
    <script src="js/jquery.slimscroll.js"></script>
    <!--Wave Effects -->
    <script src="js/waves.js"></script>
    <!-- Custom Theme JavaScript -->
    <script src="js/custom.min.js"></script>
    <!--Style Switcher -->
    <script src="./plugins/bower_components/styleswitcher/jQuery.style.switcher.js"></script>

    <script>
        // Send Blog ID to Modal for Delate
        $('#exampleModalCenter').on('show.bs.modal', function(e) {
            console.log("test", e.relatedTarget.dataset.id);
            $('#selectedBlog').attr("href", `./functions/blog_del.php?id=${e.relatedTarget.dataset.id}`)
        })
    </script>
</body>

</html>