
<?php

/* DATABASE CONNECTION*/
require_once "db.php";
/*DATABASE CONNECTION */


// posting start

//get POST data from frontend
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $slug =  $_POST['slug'];
    $meta_description = $_POST['meta_description'];
    $active_status = $_POST['active_status'] == "yes" ? true : false;
}

if (isset($_POST["submit"])) {

    // Add task to DB
    $sql = "INSERT INTO blog_author(name, slug, meta_description, active_status)
    VALUES (?,?,?,?)";

    $stmt = $db->prepare($sql);


    try {
        $stmt->execute([$name, $slug, $meta_description, $active_status]);
        header('Location:../author.php?posted');
    } catch (Exception $e) {
        $e->getMessage();
        echo "Error:" . $e;
    }
}

// posting end 

// edit caregory

if (isset($_POST["edit_id"])) {

    $edit_id = $_POST["edit_id"];

    $sql = "UPDATE blog_author
   SET name = :name, slug = :slug, meta_description = :meta_description, active_status = :active_status
   WHERE id = :id";

    // Prepare the statement
    $stmt = $db->prepare($sql);

    // Bind parameters using named placeholders
    $stmt->bindParam(':name', $name);
    $stmt->bindParam(':slug', $slug);
    $stmt->bindParam(':meta_description', $meta_description);
    $stmt->bindParam(':active_status', $active_status);
    $stmt->bindParam(':id', $edit_id, PDO::PARAM_INT); // Bind the blog ID as an integer

    // Execute the query
    try {
        $stmt->execute();
        header('Location:../author.php?updated');
    } catch (Exception $e) {
        $e->getMessage();
        echo "Error:" . $e; // Get more detailed error information
    }
}

// edit caregory

// delate caregory

if (isset($_GET["delete_id"])) {
    $id = $_GET["delete_id"];


    // Create a parameterized query with a placeholder `?` for the ID
    $sql = "DELETE FROM blog_author WHERE id = ?";

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
        header('Location: ../author.php?deleted');
    } else {
        echo "Error executing statement: " . mysqli_stmt_error($stmt);
    }

    // Close the statement after execution
    mysqli_stmt_close($stmt);
}
// delate caregory


?>