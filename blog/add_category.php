<?php
require_once('./koneksi.php');

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Ensure the category name is provided
    if (isset($_POST['name'])) {
        $name = $_POST['name'];

        // Add your database insert logic here
        $conn = connectDB();
        $query = "INSERT INTO categories (name) VALUES ('$name')";
        $result = $conn->query($query);

        if ($result) {
            // Category added successfully
            header("Location: show_category.php"); // Redirect to your category listing page
            exit();
        } else {
            // Handle database error
            echo "Error: " . $conn->error;
        }

        $conn->close();
    } else {
        // Handle missing category name
        echo "Category name is required.";
    }
}
?>
