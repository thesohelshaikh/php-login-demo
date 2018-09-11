<?php
if (isset($_POST['submit'])) {
    include_once 'db-inc.php';

    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $pwd = mysqli_real_escape_string($conn, $_POST['pwd']);

    $sql = "SELECT * FROM users WHERE email = '$email'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        if ($row = $result->fetch_assoc()){
            $hpwd_check = password_verify($pwd, $row['pass']);
            if ($hpwd_check == false) {
                header("Location: fail.html?login=invalidpass");
                exit();
            } elseif ($hpwd_check == true) {
                // create session here
                // $_SESSION['email'] = $row['email'];  
                header("Location: index.html?login=success");
                exit();
            }
        }
    }
    else {
        header("Location: index.html?login=invalid");
        exit();
    }

} else {
    header("Location: index.html");
    exit();
}