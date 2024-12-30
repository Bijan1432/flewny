
<?php

/* DATABASE CONNECTION*/
require_once "db.php";
/*DATABASE CONNECTION */


//basic info
$title = $_POST['title'];
$slug = str_replace(" ", "-", $_POST['slug']);
$category = $_POST['category'];


// about
$intro = $_POST['intro'];


//image upload
$file_name = $_FILES['blog_image']['name'];
$temp_name = $_FILES['blog_image']['tmp_name'];
$folder = "../../uploads/blog/" . $file_name; // change "...." with file path  
move_uploaded_file($temp_name, $folder);
$image_alt = $_POST['blog_image_alt'];


//description
$content = $_POST['content'];


//publish info
$published_date = $_POST['published_date'];
$published_by = $_POST['published_by'];
$published_status = $_POST['published_status'] == "yes" ? true : false;


//seo
$meta_title = $_POST['meta_title'];
$meta_keywords = $_POST['meta_keywords'];
$meta_description = $_POST['meta_description'];
$canonical_link = $_POST['meta_canonical'];
$tags = $_POST['tags'];



if (isset($_POST["submit"])) {

  // Add task to DB
  $sql = "INSERT INTO blogs(title, slug, category, intro, blog_image, blog_image_alt, content, meta_title, meta_keywords,  meta_description, meta_canonical, tags, published_date, published_by, published_status)
    VALUES (?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)";

  $stmt = $db->prepare($sql);


  try {
    $stmt->execute([$title, $slug, $category, $intro, $file_name, $image_alt, $content, $meta_title, $meta_keywords, $meta_description, $canonical_link, $tags, $published_date, $published_by, $published_status]);
    header('Location:../blogs.php?posted');
  } catch (Exception $e) {
    $e->getMessage();
    echo "Error:" . $e;
  }
}













?>