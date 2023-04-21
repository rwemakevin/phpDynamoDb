<?php 
session_start();
$error = false;
if(isset($_POST['submit'])){
    $username = $_POST['username'];
    $password = $_POST['password'];

    if($username == "kevin" and $password == "12345"){
        
        $_SESSION['username'] = $username;
        $_SESSION['password'] = $password;
        header("Location: list.php");
    }else{
        
        $error = true;
        $error_message = ' Wrong credentials';
    }
}
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;700&display=swap">
    <link rel="stylesheet" href="./style.css">
    <title>Homepage</title>
</head>
<body>
    <div class="container">
        <div class="form">
            <form action="" method="POST">
                <input type="text"  placeholder="Username" name="username" required>
                <input type="password" placeholder="Password" name="password" required>
                <input type="submit" value="Log in" name="submit">
                <?php if ($error): ?>
                    <div class="error"><?php echo $error_message; ?></div>
                <?php endif; ?>

            </form>
            <hr class="myhr"/>
            <p><a href="">Forgot password?</a></p>
        </div>
        
    </div>
</body>
</html>