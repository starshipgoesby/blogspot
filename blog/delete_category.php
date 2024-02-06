<?php
require_once('./koneksi.php');

if (isset($_GET['id'])) {
    $category_id = $_GET['id'];

    // Function to delete a post by post_id
    function deleteCategory($category_id)
    {
        $conn = connectDB();

        // Prevent SQL injection
        $category_id = mysqli_real_escape_string($conn, $category_id);

        $query = "DELETE FROM categories WHERE category_id = '$category_id'";
        $result = $conn->query($query);

        $conn->close();

        return $result;
    }

    // Delete the post
    $result = deleteCategory($category_id);

    if ($result) {
        // Redirect to the page where the table is displayed
        header('Location: show_category.php');
        exit();
    } else {
        echo "Error deleting post.";
    }
} else {
    echo "Invalid request.";
}
?>
