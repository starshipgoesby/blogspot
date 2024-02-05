<?php
require_once('./koneksi.php');

if (isset($_GET['id'])) {
    $post_id = $_GET['id'];

    // Function to delete a post by post_id
    function deletePost($post_id)
    {
        $conn = connectDB();

        // Prevent SQL injection
        $post_id = mysqli_real_escape_string($conn, $post_id);

        $query = "DELETE FROM post WHERE post_id = '$post_id'";
        $result = $conn->query($query);

        $conn->close();

        return $result;
    }

    // Delete the post
    $result = deletePost($post_id);

    if ($result) {
        // Redirect to the page where the table is displayed
        header('Location: show_post.php');
        exit();
    } else {
        echo "Error deleting post.";
    }
} else {
    echo "Invalid request.";
}
?>
