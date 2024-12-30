<?php

require_once "./db.php";

if (isset($_GET["id"])) {
    $id = $_GET["id"];

    $sql = "SELECT * FROM blogs WHERE id = '$id'";
    $query = mysqli_query($connection, $sql);

    //fetch blog data
    $blog = mysqli_fetch_array($query);

    $file_path = "../../uploads/blog/" . $blog['blog_image'];

    // Check if the image file exists
    if (file_exists($file_path)) {

        // Attempt to delete the file
        unlink($file_path);
    }

    // Create a parameterized query with a placeholder `?` for the ID
    $sql = "DELETE FROM blogs WHERE id = ?";

    // Initialize the prepared statement
    $stmt = mysqli_prepare($connection, $sql);

    // Check if the statement was prepared successfully
    if ($stmt === false) {
        die("Error preparing the statement: " . mysqli_error($connection));
    }

    // Bind the ID parameter to the query (using 'i' for integer type)
    if (!mysqli_stmt_bind_param($stmt, 'i', $id)) {
        die("Parameter binding failed: " . mysqli_stmt_error($stmt));
    }

    // Execute the prepared statement
    if (mysqli_stmt_execute($stmt)) {

        // Redirect to the page with success message
        header('Location: ../blogs.php?deleted');
    } else {
        echo "Error executing statement: " . mysqli_stmt_error($stmt);
    }

    // Close the statement after execution
    mysqli_stmt_close($stmt);
} else {
    // Redirect in case the ID is not set in the URL
    header('Location: ../blogs.php?del_error');
}
