<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="css/reset.css" type="text/css">
    <link rel="stylesheet" type="text/css" href="css/addblog.css">
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

    <h3>Add A Blog<a class="fullstop">.</a></h3>

        <form id="myForm">
            <label for="subject" id="subject-label"> - Subject - </label>
            <input type="text" id="subject" placeholder="Enter the subject of your blog" required>
            <label for="blog" id="blog-label"> - Blog - </label>
            <textarea id="blog" rows="20" cols="10"  placeholder="Write your blog here"></textarea>

            <div id="buttons">
                <div>
                    <button type="button" id="post"> Post</button>
                </div>

                <div>
                    <button type="button" id="clear">Clear</button>
                </div>
            </div>
        </form>

        <script src="js/addPost.js"></script>

</body>
  <footer>
    <p>&copy; 2024 Zayan Chaudhary</p>
  </footer>
</html>
