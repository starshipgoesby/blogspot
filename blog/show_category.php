<?php

require_once('./koneksi.php');

// Fungsi untuk mendapatkan daftar posting
function getPosts()
{
    $conn = connectDB();
    $query = "SELECT * FROM post";
    $result = $conn->query($query);
    $posts = $result->fetch_all(MYSQLI_ASSOC);
    $conn->close();
    return $posts;
}

$posts = getPosts();


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
    <header>
        <div class="main-container">
            <div class="nav">
                <div class="logo">
                    <a href="">Mouziki</a>
                </div>
                <nav>
                    <ul>
                        <!-- <li><a href="#home">Home</a></li>
                        <li><a href="#services">Meet Our Mentors</a></li>
                        <li><a href="#contact">Contact Us</a></li>
                        <li><a href="./Portfolio/index.html">Portfolio</a></li> -->
                        <li><a href="show_post.php">Edit Post</a></li>
                        <!-- <li><a href="./todo.html">To Do List</a></li> -->
                    </ul>
                </nav>

                <div class="burger">
                    <div class="garis-1"></div>
                    <div class="garis-2"></div>
                    <div class="garis-3"></div>
                </div>
            </div>
            <div class="login-container">
                <div class="container mt-5">
                    <h2>Post</h2>
                    <a href="" class="btn btn-warning btn-sm">Add Category</a>
                    <table class="table table-striped table-hover">
                        <thead class="thead-dark">
                            <tr>
                                <th scope="col">No</th>
                                <th scope="col">Category</th>
                                <th scope="col">Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($posts as $index => $post) : ?>
                                <tr>
                                    <td><?php echo $index + 1; ?></td>
                                    <td><?php echo $post['category']; ?></td>
                                    <td>
                                        <!-- Edit button (replace # with actual edit page URL) -->
                                        <a href="edit_post.php?id=<?php echo $post['post_id']; ?>" class="btn btn-warning btn-sm">Edit</a>

                                        <!-- Delete button (replace # with actual delete page URL) -->
                                        <a href="delete_post.php?id=<?php echo $post['post_id']; ?>" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure you want to delete this post?')">Delete</a>
                                    </td>
                                </tr>
                            <?php endforeach; ?>
                        </tbody>
                    </table>
                    
                </div>
            </div>
        </div>
    </header>
</body>

<footer>
    <div class="footer-icons">
        <a href="">
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                <path d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.149-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.069zm0-2.163c-3.259 0-3.667.014-4.947.072-4.358.2-6.78 2.618-6.98 6.98-.059 1.281-.073 1.689-.073 4.948 0 3.259.014 3.668.072 4.948.2 4.358 2.618 6.78 6.98 6.98 1.281.058 1.689.072 4.948.072 3.259 0 3.668-.014 4.948-.072 4.354-.2 6.782-2.618 6.979-6.98.059-1.28.073-1.689.073-4.948 0-3.259-.014-3.667-.072-4.947-.196-4.354-2.617-6.78-6.979-6.98-1.281-.059-1.69-.073-4.949-.073zm0 5.838c-3.403 0-6.162 2.759-6.162 6.162s2.759 6.163 6.162 6.163 6.162-2.759 6.162-6.163c0-3.403-2.759-6.162-6.162-6.162zm0 10.162c-2.209 0-4-1.79-4-4 0-2.209 1.791-4 4-4s4 1.791 4 4c0 2.21-1.791 4-4 4zm6.406-11.845c-.796 0-1.441.645-1.441 1.44s.645 1.44 1.441 1.44c.795 0 1.439-.645 1.439-1.44s-.644-1.44-1.439-1.44z" />
            </svg>
        </a>
        <a href=""><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                <path d="M19.615 3.184c-3.604-.246-11.631-.245-15.23 0-3.897.266-4.356 2.62-4.385 8.816.029 6.185.484 8.549 4.385 8.816 3.6.245 11.626.246 15.23 0 3.897-.266 4.356-2.62 4.385-8.816-.029-6.185-.484-8.549-4.385-8.816zm-10.615 12.816v-8l8 3.993-8 4.007z" />
            </svg></a>
        <a href="">
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                <path d="M22.675 0h-21.35c-.732 0-1.325.593-1.325 1.325v21.351c0 .731.593 1.324 1.325 1.324h11.495v-9.294h-3.128v-3.622h3.128v-2.671c0-3.1 1.893-4.788 4.659-4.788 1.325 0 2.463.099 2.795.143v3.24l-1.918.001c-1.504 0-1.795.715-1.795 1.763v2.313h3.587l-.467 3.622h-3.12v9.293h6.116c.73 0 1.323-.593 1.323-1.325v-21.35c0-.732-.593-1.325-1.325-1.325z" />
            </svg>
        </a>
        <a href="">
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                <path d="M0 0v24h24v-24h-24zm8 19h-3v-11h3v11zm-1.5-12.268c-.966 0-1.75-.79-1.75-1.764s.784-1.764 1.75-1.764 1.75.79 1.75 1.764-.783 1.764-1.75 1.764zm13.5 12.268h-3v-5.604c0-3.368-4-3.113-4 0v5.604h-3v-11h3v1.765c1.397-2.586 7-2.777 7 2.476v6.759z" />
            </svg>
        </a>
    </div>
    <p>&#169; 2024 - Made by Mouziki</p>
</footer>
</body>
<script src="./script/script.js"></script>

</html>