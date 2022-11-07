<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <a href="login.php">
        <-Return </a>
            <?php
            $correct_user = "Airbus350";
            $correct_password = 787;

            if (isset($_POST['submit'])) {

                $user = $_POST['user'];
                $password = $_POST['password'];
                if ($user == $correct_user && $password == $correct_password) {
                    session_start();
                    $_SESSION['correct_user'] = $user;
                    echo "wlcome to mohammed: $user";
                    header("location:file.php?uploadsuccess");
                } else {
                    echo "incorrect username or password, walk the plank";
                }
            }
            ?>
</body>

</html>
