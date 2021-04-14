<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./styles.css">
    <script type="text/javascript" src="scripts/validate.js"></script>

    <script>
        function checkPasswordMatch(e){
            var password = document.getElementById("password");
            var passwordCheck = document.getElementById("password-check");
            if (password.value != passwordCheck.value){
            makeRed(password);
            makeRed(passwordCheck);

            alert("Password do not match!");
            e.preventDefault();
            }
        }
    </script>
    <title>Create an account</title>
</head>
<body>
    <header id="masthead">
        <h1>MyBlogPost</h1>
        <h3>COSC 360 Final Project - Implemented by Kenneth Oh</h3>
        <nav>
            <ul>
                <li><a href="index.html">Home</a></li>
                <li><a href="createAccount.html">Create an account</a></li>
                <li><a href="login.html">Login</a></li>
            </ul>
        </nav>
    </header>

<?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        echo "<h3>Account Created.</h3><br><br>";
        echo "<a href=\"login.html\">Login Page</a>";
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