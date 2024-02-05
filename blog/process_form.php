<?php
// Check if the form is submitted
if (isset($_POST['submit'])) {
    // Retrieve form data
    $title = $_POST['title-post'];
    $category = $_POST['category-post'];
    $description = $_POST['description-post'];
    $filename = $_POST['filename'];

    // Database connection (modify according to your database configuration)
    $dbhost = "localhost";
    $dbusername = "root";
    $dbpassword = "";
    $dbname = "portfolio_db";

    $conn = new mysqli($dbhost, $dbusername, $dbpassword, $dbname);

    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // SQL query to insert data into the database
    $sql = "INSERT INTO post (title, category, description, filename) VALUES ('$title', '$category', '$description', '$filename')";

    if ($conn->query($sql) === TRUE) {
        header("Location: show_post.php");
        exit();
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();
}

?>
