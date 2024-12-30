
<?php

/* DATABASE CONNECTION*/
require_once "db.php";
/*DATABASE CONNECTION */


// 
$blog_id = $_POST['blog_id'];

//basic info
$title = $_POST['title'];
$slug = str_replace(" ", "-", $_POST['slug']);
$category = $_POST['category'];


// about
$intro = $_POST['intro'];


//image upload
$file_name = $_FILES['blog_image']['name'];

if (!$file_name == '') {
  $temp_name = $_FILES['blog_image']['tmp_name'];
  $folder = "../../asset/image/blog/" . basename($_FILES['blog_image']['name']); // change "...." with file path  
  move_uploaded_file($temp_name, $folder);

  // 
  $file_path = "../../asset/image/blog/" . $_POST['blog_image_name'];
  // Check if the file exists
  if (file_exists($file_path)) {
    // Attempt to delete the file
    unlink($file_path);
  }
} else {
  $file_name = $_POST['blog_image_name'];
}

$image_alt = $_POST['blog_image_alt'];


//description
$content = $_POST['content'];


//publish info
$published_date = $_POST['published_date'];
$published_by = $_POST['published_by'];
$published_status = $_POST['published_status'] == "1" ? true : false;

// modify info
$modified_date =  date("Y-m-d");

//seo
$meta_title = $_POST['meta_title'];
$meta_keywords = $_POST['meta_keywords'];
$meta_description = $_POST['meta_description'];
$canonical_link = $_POST['meta_canonical'];
$tags = $_POST['tags'];



if (isset($_POST["submit"])) {

  // Prepare the SQL update statement
  $sql = "UPDATE blogs
   SET title = :title, slug = :slug, category = :category, intro = :intro, 
       blog_image = :blog_image, blog_image_alt = :blog_image_alt, content = :content, 
       meta_title = :meta_title, meta_keywords = :meta_keywords, 
       meta_description = :meta_description, meta_canonical = :meta_canonical, 
       tags = :tags, published_date = :published_date, modified_date = :modified_date,
       published_by = :published_by, published_status = :published_status
   WHERE id = :id";

  // Prepare the statement
  $stmt = $db->prepare($sql);

  // Bind parameters using named placeholders
  $stmt->bindParam(':title', $title);
  $stmt->bindParam(':slug', $slug);
  $stmt->bindParam(':category', $category);
  $stmt->bindParam(':intro', $intro);
  $stmt->bindParam(':blog_image', $file_name);
  $stmt->bindParam(':blog_image_alt', $image_alt);
  $stmt->bindParam(':content', $content);
  $stmt->bindParam(':meta_title', $meta_title);
  $stmt->bindParam(':meta_keywords', $meta_keywords);
  $stmt->bindParam(':meta_description', $meta_description);
  $stmt->bindParam(':meta_canonical', $canonical_link);
  $stmt->bindParam(':tags', $tags);
  $stmt->bindParam(':published_date', $published_date);
  $stmt->bindParam(':modified_date', $modified_date);
  $stmt->bindParam(':published_by', $published_by);
  $stmt->bindParam(':published_status', $published_status);
  $stmt->bindParam(':id', $blog_id, PDO::PARAM_INT); // Bind the blog ID as an integer

  // Execute the query
  try {
    $stmt->execute();
    header('Location:../blogs.php?updated');
  } catch (Exception $e) {
    $e->getMessage();
    echo "Error:" . $e; // Get more detailed error information
  }
}













?>