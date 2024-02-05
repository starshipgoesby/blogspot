<?php
require_once('./koneksi.php');

if (isset($_GET['id'])) {
    $post_id = $_GET['id'];

    // Function to get post details by post_id
    function getPostDetails($post_id)
    {
        $conn = connectDB();

        // Prevent SQL injection
        $post_id = mysqli_real_escape_string($conn, $post_id);

        $query = "SELECT * FROM post WHERE post_id = '$post_id'";
        $result = $conn->query($query);

        $postDetails = $result->fetch_assoc();

        $conn->close();

        return $postDetails;
    }

    // Get post details
    $postDetails = getPostDetails($post_id);

    if (!$postDetails) {
        echo "Post not found.";
        exit();
    }
} else {
    echo "Invalid request.";
    exit();
}

// Check if the form is submitted for updating post
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $title = $_POST['title'];
    $category = $_POST['category'];
    $description = $_POST['description'];
    $filename = $_POST['filename'];

    // Function to update post by post_id
    function updatePost($post_id, $title, $category, $description, $filename)
    {
        $conn = connectDB();

        // Prevent SQL injection
        $post_id = mysqli_real_escape_string($conn, $post_id);
        $title = mysqli_real_escape_string($conn, $title);
        $category = mysqli_real_escape_string($conn, $category);
        $description = mysqli_real_escape_string($conn, $description);
        $filename = mysqli_real_escape_string($conn, $filename);

        $query = "UPDATE post SET title = '$title', category = '$category', description = '$description', filename = '$filename' WHERE post_id = '$post_id'";
        $result = $conn->query($query);

        $conn->close();

        return $result;
    }

    // Update the post
    $updateResult = updatePost($post_id, $title, $category, $description, $filename);

    if ($updateResult) {
        // Redirect to the page where the table is displayed
        header('Location: show_post.php');
        exit();
    } else {
        echo "Error updating post.";
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
<meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="./styles/style.css" />
    <title>Mouziki</title>
</head>

<body>
    <div class="container mt-5">
        <h2>Edit Post</h2>
        <form method="post" action="">
            <div class="mb-3">
                <label for="title" class="form-label">Title</label>
                <input type="text" class="form-control" id="title" name="title" value="<?php echo $postDetails['title']; ?>" required>
            </div>
            <div class="mb-3">
                <label for="category" class="form-label">Category</label>
                <input type="text" class="form-control" id="category" name="category" value="<?php echo $postDetails['category']; ?>" required>
            </div>
            <div class="mb-3">
                <label for="description" class="form-label">Description</label>
                <textarea class="form-control" id="description" name="description" rows="4" required><?php echo $postDetails['description']; ?></textarea>
            </div>
            <div class="mb-3">
                <label for="filename" class="form-label">Filename</label>
                <input type="text" class="form-control" id="filename" name="filename" value="<?php echo $postDetails['filename']; ?>" required>
            </div>
            <button type="submit" class="btn btn-primary">Update</button>
        </form>
    </div>

    <!-- Include Bootstrap JS and Popper.js (if needed) here -->

</body>

</html>
