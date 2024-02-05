<?php
// session_start();
// if (isset($_SESSION['admin_username'])) {
//     header("location:admin.php");
// }
include("koneksi.php");
$username = '';
$password = '';
$err = '';

if (isset($_POST['login'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];

    if ($username == '' or $password == '') {
        $err .= "<li>Silahkan masukkan username & password</li>";
    }
    if (empty($err)) {
        $sql = "select * from admin where username = '$username' ";
        $q1 = mysqli_query($koneksi, $sql);
        $result = mysqli_fetch_array($q1);
    }
    if (empty($err)) {
        $_SESSION['admin_username'] = $username;
        header(("location: admin.php"));
        exit();
    }
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>To Do List</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="./styles/style.css" />
</head>

<body>
    <div class="login-container">
        <div class="box">
            <h2>LOGIN</h2>
            <?php
            if ($err) {
                echo "<ul>$err</ul>";
            }
            ?>
            <form action="" method="POST">
                <div class="mb-3">
                    <input type="text" class="form-control" value="<?php echo $username ?>" id="username" placeholder="Username" name="username">
                </div>
                <div class="mb-3">
                    <input type="password" class="form-control" id="password" placeholder="Password" name="password">
                </div>
                <input type="submit" name="login" id="login" value="login" class="btn btn-success">
            </form>
        </div>
    </div>
</body>

</html>