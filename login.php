<?php
if (isset($_POST['submit'])) {
    include_once 'db-inc.php';
    if ($conn){
        echo "success";
    }
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $pwd = mysqli_real_escape_string($conn, $_POST['pwd']);

    $hashed_pwd = password_hash($pwd, PASSWORD_DEFAULT);

    $sql = "INSERT INTO users(email, pass) VALUES('$email', '$hashed_pwd')";
    $conn->query($sql);
    header("Location: index.html?signup=sucess");

} else {
    header("Location: index.html");
    exit();
}