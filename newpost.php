<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./styles.css">
    <script type="text/javascript" src="scripts/validate.js"></script>
    <title>New Post</title>
</head>
<body>
    <header id="masthead">
        <h1>MyBlogPost</h1>
        <h3>COSC 360 Final Project - Implemented by Kenneth Oh</h3>
        <nav>
            <ul>
                <li><a href="index.html">Home</a></li>
                <li><a href="editprofile.html">Edit your profile</a></li>

<?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        echo "<li><a href=\"logout.html\">Logout</a></li></ul></nav></header>";
        echo "<h3>Post created!</h3><br><br>";
        echo "<a href=\"newpost.html\">Make another post now!</a><br><br>";
        echo "<a href=\"index.html\">Go To Main Page</a><br><br>";
    }

    else if ($_SERVER["REQUEST_METHOD"] == "GET"){
        echo "<h3>GET method is not supported!</h3>";
    } 

    else {
        echo "<h3>ERROR!!</h3>";
    }

?>

<footer>
        <p>Copyright &copy; Kenneth Oh - COSC 360 Final Project</p> 
    </footer>
</body>
</html>