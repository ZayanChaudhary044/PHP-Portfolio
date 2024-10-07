<?php
    session.start();

    $correctmail = "zayanchaudhary04@gmail.com";
    $correctpassword = "1234";

    $email = $_POST['username'];
    $password = $_POST['password'];

    if($email == $correctmail && $password == $correctpassword){
        $_SESSION['username'] = $email;
        header("Location: addblog.php");
    }
    else{
        echo "Incorrect Email or Password";
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="css/reset.css" type="text/css">
    <link rel="stylesheet" type="text/css" href="css/login.css">
    <title>ZC's Homepage</title>
    <link href="https://fonts.googleapis.com/css2?family=Anta&display=swap" rel="stylesheet"> <!--Used for navigation--> 
    <link href="https://fonts.googleapis.com/css2?family=Anta&family=Jacquarda+Bastarda+9&display=swap" rel="stylesheet"> <!--Used for header logo-->
</head>
<body>
    <header>
        <h1> Zayan Chaudhary </h1>
        <nav>
            <ul>
                <li><a href="index.php">Home</a></li>
                <li><a href="aboutme.php">About Me</a></li>
                <li><a href="exper.php">Projects</a></li>
                <li><a href="contact.php">Contact</a></li>
                <li><a href="addblog.php">Blog</a></li>
                <li><a href="login.php">Login</a></li>
            <ul>
        </nav>
    </header>

    <section class="login">

        <div class="heading">
            <h2>Login<a class="fullstop">.</a></h2>
        </div>

        <div class="form">
            <form action="login.php" method="post">
                <div class="input">
                    <label for="username">Email Address:</label>
                    <input type="mail" id="username" name="username" placeholder="Email Address" required>
                </div>

                <div class="input">
                    <label for="password">Password:</label>
                    <input type="password" name="password" placeholder="Password" required minlength="8">
                </div>

                <div class="submit">
                    <button type="submit">Submit</button>
                </div>
            </form>
        </div>

    </section>
</body>
    <footer>
        <p>&copy; 2024 Zayan Chaudhary</p>
    </footer>
    
</html>