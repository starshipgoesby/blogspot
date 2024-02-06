<?php
require_once('./koneksi.php');

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (isset($_POST['name']) && isset($_POST['category_id'])) {
        $category_id = $_POST['category_id'];
        $new_name = $_POST['name'];

        $conn = connectDB();
        $query = "UPDATE categories SET name = '$new_name' WHERE category_id = $category_id";
        $result = $conn->query($query);

        if ($result) {
            header("Location: show_category.php");
            exit();
        } else {
            echo "Error: " . $conn->error;
        }

        $conn->close();
    } else {
        echo "Category data is incomplete.";
    }
}
?>
