<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

require_once "db.php";

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
  $author = $_POST['author'];
  $title = $_POST['title'];
  $content = $_POST['content'];

  $targetDir = "../../../uploads/";
  $targetFile = $targetDir . basename($_FILES["image"]["name"]);
  $uploadOk = 1;
  $imageFileType = strtolower(pathinfo($targetFile, PATHINFO_EXTENSION));

  // Check if image file is an actual image
  $check = getimagesize($_FILES["image"]["tmp_name"]);
  if ($check === false) {
    echo "File is not an image.";
    $uploadOk = 0;
  }

  // Check file size (limit to 2MB)
  if ($_FILES["image"]["size"] > 2000000) {
    echo "Sorry, your file is too large.";
    $uploadOk = 0;
  }

  // Allow certain file formats
  $allowedFileTypes = ['jpg', 'jpeg', 'png', 'gif', 'webp'];
  if (!in_array($imageFileType, $allowedFileTypes)) {
    echo "Sorry, only JPG, JPEG, PNG, GIF & WEBP files are allowed.";
    $uploadOk = 0;
  }

  // Check if $uploadOk is set to 0 by an error
  if ($uploadOk == 0) {
    echo "Sorry, your file was not uploaded.";
  } else {
    if (move_uploaded_file($_FILES["image"]["tmp_name"], $targetFile)) {
      echo "The file " . basename($_FILES["image"]["name"]) . " has been uploaded.";

      // Insert post details into database
      $imagePath = basename($_FILES["image"]["name"]);
      $sql = "INSERT INTO posts (author, title, content, image_path) VALUES (?, ?, ?, ?)";
      $stmt = $db->prepare($sql);

      try {
        $stmt->execute([$author, $title, $content, $imagePath]);
        header('Location: ../posts.php?posted');
        exit;
      } catch (Exception $e) {
        echo "Error: " . $e->getMessage();
      }
    } else {
      echo "Sorry, there was an error moving the uploaded file.";
    }
  }
}
