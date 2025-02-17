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

// get Category options
$category_sql = "SELECT * FROM blog_category";
$category_query = mysqli_query($connection, $category_sql);

// get Authors
$author_sql = "SELECT * FROM blog_author";
$author_query = mysqli_query($connection, $author_sql);

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
    <!-- Wizard CSS -->
    <link href="./plugins/bower_components/jquery-wizard-master/css/wizard.css" rel="stylesheet">
    <!-- Menu CSS -->
    <link href="./plugins/bower_components/sidebar-nav/dist/sidebar-nav.min.css" rel="stylesheet">
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
    <!-- Import Trumbowyg style -->
    <link rel="stylesheet" href="trumbowyg/dist/ui/trumbowyg.min.css">
    <!--  -->
    <style>
        .chip-container {
            display: flex;
            flex-wrap: wrap;
            gap: 5px;
            margin-top: 10px;
        }

        .chip {
            background-color: #e0e0e0;
            padding: 5px 10px;
            border-radius: 15px;
            display: flex;
            align-items: center;
        }

        .chip span {
            margin-right: 5px;
        }

        .chip button {
            background: none;
            border: none;
            cursor: pointer;
            font-size: 16px;
        }
    </style>
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
                            <li><a href="#">Dashboard</a></li>
                            <li><a href="#">Posts</a></li>
                            <li class="active">New</li>
                        </ol>
                    </div>
                    <!-- /.col-lg-12 -->
                </div>
                <!-- .row -->
                <div class="row justify-content-center">
                    <div class="col-sm-10">
                        <div class="white-box">
                            <div class="">
                                <h3 class="box-title m-b-0">Post a New Blog </h3>
                                <p class="text-muted m-b-30 font-13"> A blog post contains the author, title and its content.</p>
                            </div>

                            <div class="posting-form">
                                <form action="./functions/blog_create.php" method="post" enctype="multipart/form-data">
                                    <!-- Basic Info -->
                                    <h4 class="">Basic Info</h4>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label for="exampleBlogTitle">Blog Title</label>
                                                <div class="input-group">
                                                    <input type="text" name="title" class="form-control" id="exampleBlogTitle" placeholder="Title*" required="">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="exampleBlogSlug">Slug</label>
                                                <div class="input-group">
                                                    <input type="text" name="slug" class="form-control" id="exampleBlogSlug" placeholder="Slug*" required="">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="exampleBlogCategory">Category</label>
                                                <div class="input-group">
                                                    <select name="category" id="exampleBlogCategory" class="custom-select w-100 py-0" style="height: calc(3.8rem);" required="">
                                                        <option value="">Select</option>
                                                        <?PHP while ($row = mysqli_fetch_array($category_query)) {
                                                            if ($row['active_status']) {

                                                        ?>
                                                                <option value="<?PHP echo $row['name'] ?>"><?PHP echo $row['name'] ?></option>
                                                        <?PHP
                                                            }
                                                        }
                                                        ?>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- About -->
                                    <h4 class="">About</h4>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <div class="input-group">
                                                    <input type="text" name="intro" class="form-control" id="exampleBlogIntro" placeholder="intro*">
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Image -->
                                    <h4 class="">Image</h4>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <div class="input-group">
                                                    <input type="file" name="blog_image" accept=".jpg, .jpeg, .png, .webp" class="form-control" id="exampleBlogImage"
                                                        onchange="Filevalidation()" required="">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <div class="input-group">
                                                    <input type="text" name="blog_image_alt" class="form-control" id="exampleBlogImageAlt" placeholder="Image Alt">
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Desctiption -->
                                    <h4 class="">Desctiption</h4>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <div class="input-group">
                                                    <textarea name="content" id="editor"></textarea>
                                                </div>
                                            </div>

                                        </div>
                                    </div>

                                    <!-- Publish info -->
                                    <h4 class="">Publish info</h4>
                                    <div class="row">
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label for="exampleInputEmail1">Published Date</label>
                                                <div class="input-group">
                                                    <input type="date" name="published_date" class="form-control" id="exampleInputEmail1" placeholder="Enter email" required="">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label for="exampleInputEmail1">Published By</label>
                                                <div class="input-group">
                                                    <select name="published_by" id="exampleBlogCategory" class="custom-select w-100 py-0" style="height: calc(3.8rem);" required="">
                                                        <?PHP while ($row = mysqli_fetch_array($author_query)) {
                                                            if ($row['active_status']) {

                                                        ?>
                                                                <option value="<?PHP echo $row['name'] ?>"><?PHP echo $row['name'] ?></option>
                                                        <?PHP
                                                            }
                                                        }
                                                        ?>
                                                    </select>
                                                    <!-- <input type="text" name="published_by" class="form-control" id="exampleInputEmail1" placeholder="Marko & Brando" value="Marko & Brando" required=""> -->
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label for="examplePublished">Published status</label>
                                                <div class="input-group">
                                                    <select name="published_status" id="examplePublished" class="custom-select w-100 py-0" style="height: calc(3.8rem);" required="">
                                                        <option value="" default>Select</option>
                                                        <option value="1">Yes</option>
                                                        <option value="0">No</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- SEO -->
                                    <h4 class="">SEO</h4>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="exampleMetaTitle">Meta Title</label>
                                                <div class="input-group">
                                                    <input type="text" name="meta_title" class="form-control" id="exampleMetaTitle" placeholder="Meta Title*" required="">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="exampleMetaTitle">Meta Keywords</label>
                                                <div class="input-group">
                                                    <input type="text" name="meta_keywords" class="form-control" id="exampleBlogSlug" placeholder="Keywords*" required="">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label for="exampleMetaTitle">Meta Description</label>
                                                <div class="input-group">
                                                    <input type="text" name="meta_description" class="form-control" id="exampleBlogSlug" placeholder="Description*" required="">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label for="exampleCanonicalLink">Canonical Link</label>
                                                <div class="input-group">
                                                    <input type="text" name="meta_canonical" id="exampleCanonicalLink" class="form-control" placeholder="Canonical Link">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label for="exampleCanonicalLink">Tags</label>
                                                <div class="input-group">
                                                    <input type="text" name="tags" id="exampleCanonicalLink" class="form-control" placeholder="Tags">
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Table OF Contents -->
                                    <h4 class="">Table OF Contents</h4>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <div class="form-group">
                                                    <label for="exampleMetaTitle">Content</label>
                                                    <div class="input-group">

                                                        <input type="hidden" name="table_content" id="table-content">
                                                        <input type="text" class="form-control" id="autocomplete-input" placeholder="Enter contents..." autocomplete="off">

                                                    </div>
                                                    <div class="chip-container" id="chip-container"></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <button type="submit" name="submit" class="btn btn-success waves-effect waves-light m-r-10">Submit</button>
                                    <!--<button type="reset" name="submit" class="btn btn-danger waves-effect waves-light m-r-10">Reset</button>-->
                                </form>
                            </div>



                        </div>
                    </div>
                </div>
                <!-- /.row -->
            </div>
            <!-- /.container-fluid -->

            <?php include "include/page-content/footer.php" ?>

        </div>
        <!-- /Page Content -->


        <!-- .right-sidebar -->
        <?php include "include/right-sidebar.php" ?>
        <!-- /.right-sidebar -->

        <!-- /#page-wrapper -->
    </div>
    <!-- /#wrapper -->
    <!-- /#wrapper -->
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
    <!-- Form Wizard JavaScript -->
    <script src="./plugins/bower_components/jquery-wizard-master/dist/jquery-wizard.min.js"></script>
    <!-- FormValidation -->
    <link rel="stylesheet" href="./plugins/bower_components/jquery-wizard-master/libs/formvalidation/formValidation.min.css">
    <!-- FormValidation plugin and the class supports validating Bootstrap form -->
    <script src="./plugins/bower_components/jquery-wizard-master/libs/formvalidation/formValidation.min.js"></script>
    <script src="./plugins/bower_components/jquery-wizard-master/libs/formvalidation/bootstrap.min.js"></script>
    <!--Style Switcher -->
    <!-- <script src="./plugins/bower_components/styleswitcher/jQuery.style.switcher.js"></script> -->
    <!-- Import Trumbowyg -->
    <script src="trumbowyg/dist/trumbowyg.min.js"></script>
    <!-- Import Trumbowyg plugins... -->
    <script src="trumbowyg/dist/plugins/colors/trumbowyg.colors.min.js"></script>
    <!-- Import Trumbowyg upload plugins... -->
    <script src="trumbowyg/dist/plugins/upload/trumbowyg.upload.min.js"></script>
    <!-- Import Trumbowyg base64 plugins... -->
    <script src="trumbowyg/dist/plugins/base64/trumbowyg.base64.min.js"></script>
    <script src="js/custom.min.js"></script>
    <script>
        // document.addEventListener("DOMContentLoaded", function() {
        const input = document.getElementById("autocomplete-input");
        const chipContainer = document.getElementById("chip-container");
        const tableContent = document.getElementById("table-content");
        let selectedTags = [];


        // add chip on click
        function addChip(tag) {
            const chip = document.createElement("div");
            chip.className = "chip";
            chip.innerHTML = `<span>${tag}</span><button data-tag="${tag}">&times;</button>`;
            chip.querySelector("button").addEventListener("click", function(e) {
                selectedTags = selectedTags.filter(t => t !== tag);
                chip.remove();
                tableContent.value = selectedTags.join(", ");
                e.preventDefault();
            });
            chipContainer.appendChild(chip);
            selectedTags.push(tag);
        }


        input.addEventListener("keypress", (event) => {
            if (event.key == "Enter") {
                if (!selectedTags.includes(input.value) && input.value !== " ") {
                    addChip(input.value);
                }
                input.value = "";
                tableContent.value = selectedTags.join(", ");
                event.preventDefault();
            }
        });
        // });
    </script>
    <script type="text/javascript">
        // $('#editor').trumbowyg('html', "<p>Put your content here</p>");

        // Extend Trumbowyg with custom buttons
        $('#editor').trumbowyg({
            btnsDef: {
                // Create a new dropdown
                image: {
                    dropdown: ['insertImage', 'base64', 'upload'],
                    ico: 'insertImage'
                },
                text_format: {
                    dropdown: ['p', '|', 'h1', 'h2', 'h3', 'h4', 'h5', 'h6'],
                    ico: 'p'
                },
            },
            btns: [
                ['viewHTML'],
                ['undo', 'redo'], // Only supported in Blink browsers
                ['text_format', 'foreColor', 'backColor', ],
                ['strong', 'em', 'del'],
                ['superscript', 'subscript'],
                ['link'],
                ['image'],
                ['justifyLeft', 'justifyCenter', 'justifyRight', 'justifyFull'],
                ['unorderedList', 'orderedList'],
                ['horizontalRule'],
                ['removeformat'],
                ['fullscreen']
            ],
            plugins: {
                // Add imagur parameters to upload plugin for demo purposes
                upload: {
                    serverPath: 'https://api.imgur.com/3/image',
                    fileFieldName: 'image',
                    headers: {
                        'Authorization': 'Client-ID xxxxxxxxxxxx'
                    },
                    urlPropertyName: 'data.link'
                }
            }

        });



        // auto slug creation
        document.querySelector("#exampleBlogTitle").addEventListener('keyup', (event) => {
            let cValue = event.target.value
                .toLowerCase()
                .replace(/[^a-z0-9]+/g, "-")
                .replace(/^-+|-+$/g, "");
            document.querySelector("#exampleBlogSlug").setAttribute('value', cValue);
        })

        Filevalidation = () => {
            const fi = document.getElementById('exampleBlogImage');
            // Check if any file is selected.
            if (fi.files.length > 0) {
                for (const i = 0; i <= fi.files.length - 1; i++) {

                    const fsize = fi.files.item(i).size;
                    const file = Math.round((fsize / 1024));
                    // The size of the file.
                    if (file >= 1024) {
                        alert(
                            "File too Big, please select a file less than 1mb");
                        fi.value = "";
                    }
                }
            }
        }
    </script>
</body>

</html>